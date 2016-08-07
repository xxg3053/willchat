@extends('user.layouts.base')
@section('main')
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title"><span class="fa fa-users"></span> 粉丝列表</h3>
      <div class="box-tools pull-right">
        <a href="javascript:;" class="btn default blue-stripe btn-sm" id="sync"><i class="fa fa-refresh"></i>同步粉丝数据</a>
        <a href="{{ user_url('/') }}" class="btn default blue-stripe btn-sm popup" target-form="ids"><i class="fa fa-hand-paper-o"></i>批量移动用户</a>
      </div>
    </div>
    <div class="box-body table-responsive">
      <table class="table table-striped table-bordered table-hover" id="sample_1">
        <thead>
        <tr>
          <th class="table-checkbox">
            <input type="checkbox" class="group-checkable" data-set="#sample_1 .ids"/>
          </th>
          <th>头像</th>
          <th>昵称</th>
          <th>备注</th>
          <th>性别</th>
          <th>分组</th>
          <th>位置</th>
          <th>关注时间</th>
          <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @if(count($fanList) > 0)
          @foreach($fanList as $key => $fan)
            <tr>
              <td><input class="ids" type="checkbox" value="{{ $fan->id }}" name="ids[]"></td>
              <td><img src="{{ $fan->headimgurl }}" class="preview-small"/></td>
              <td>{{ $fan->nickname }}</td>
              <td>{{ $fan->remark }}</td>
              <td>{{ $fan->sex }}</td>
              <td>{{ $fan->groupid }}</td>
              <td>{{ $fan->location }}</td>
              <td>{{ $fan->subscribe_time }}</td>
              <td>
                <a class="btn btn-primary btn-xs popup" href="{{ user_url('fans/editremark/'.$fan->id) }}"><i class="fa fa-edit"></i>修改备注</a>
                <a class="btn btn-primary btn-xs popup" href="{{ user_url('fans/moveto/'.$fan->id) }}"><i class="fa fa-hand-paper-o"></i>移动至分组</a>
              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <td colspan="10" class="row-nodata">未同步粉丝数据</td>
          </tr>
        @endif
        </tbody>
      </table>
      {!! $fanList->render() !!}
    </div>
  </div>
@endsection
@section('js')
  <script>
    $(function () {
      $('a#sync').click(function(event) {
        event.preventDefault();
        var url = "{{ user_url('fans/sync') }}";
        $.get(url, function(data) {
          if(data.status) {
            Base.success(data.info);
            setTimeout(function(){window.location.reload()}, 2000);
          } else {
            Base.error(data.info);
          }
        });
      });
    })
  </script>
@endsection
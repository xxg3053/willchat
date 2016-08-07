@extends('user.layouts.base')
@section('main')
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title"><span class="fa fa-comment"></span>文本回复规则</h3>
      <div class="box-tools pull-right">
        <a href="{{ user_url('reply-text/create') }}" class="btn default blue-stripe"><i class="fa fa-plus"></i>新增</a>
        <a href="{{ user_url('reply-text/enable') }}" class="btn default green-stripe" target-form="ids"><i class="fa fa-check"></i>启用</a>
        <a href="{{ user_url('reply-text/disable') }}" class="btn default yellow-stripe" target-form="ids"><i class="fa fa-times"></i>禁用</a>
        <a href="{{ user_url('reply-text/destroy') }}" class="btn default red-stripe comfirmed" target-form="ids"><i class="fa fa-trash-o"></i>删除</a>
      </div>
    </div>
    <div class="box-body">
      <div class="table-scrollable">
        <table class="table table-striped table-bordered table-hover" id="sample_1">
          <thead>
          <tr>
            <th class="table-checkbox">
              <input type="checkbox" class="group-checkable" data-set="#sample_1 .ids"/>
            </th>
            <th>关键词</th>
            <th>回复内容</th>
            <th>创建时间</th>
            <th>调用次数</th>
            <th>状态</th>
            <th>操作</th>
          </tr>
          </thead>
          <tbody>
            @if(count($replies) > 0)
              @foreach($replies as $key => $reply)
                <tr>
                  <td><input class="ids" type="checkbox" value="{{ $reply->id }}" name="ids[]"></td>

                  <td>{{ $reply->created_at }}</td>
                  <td>
                    <a class="btn btn-primary btn-xs popup" href="{{ user_url('fans/editremark/'.$reply->id) }}"><i class="fa fa-edit"></i>修改备注</a>
                    <a class="btn btn-primary btn-xs popup" href="{{ user_url('fans/moveto/'.$reply->id) }}"><i class="fa fa-hand-paper-o"></i>移动至分组</a>
                  </td>
                </tr>
              @endforeach
            @else
              <tr>
                <td colspan="10" class="row-nodata">暂无数据</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
      {!! $replies->render() !!}
    </div>
  </div>
@endsection
@section('js')
  <script>
    $(function () {
    })
  </script>
@endsection
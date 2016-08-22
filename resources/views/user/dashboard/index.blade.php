@extends('user.layouts.baseindex')

@section('css')
@endsection

@section('main')
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title"><span class="fa fa-info"></span> 公众号列表</h3>
      <div class="box-tools pull-right">
        <a href="{{ user_url('account/create') }}" class="btn default blue-stripe btn-sm"><i class="fa fa-plus"></i>添加公众号</a>
      </div>
    </div>
    <div class="box-body table-responsive">
      <table class="table table-hover">
        <thead>
        <tr>
          <th>#</th>
          <th>名称</th>
          <th>类型</th>
          <th>添加时间</th>
          <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @if(count($accounts))
          @foreach($accounts as $key => $account)
            <tr>
              <td>{{ $key+1 }}</td>
              <td>{{ $account->name }}</td>
              <td>{{ $account->type }}</td>
              <td>{{ $account->created_at }}</td>
              <td>
                <a class="btn btn-primary btn-xs" href="{{ user_url('account/edit/'.$account->id) }}"><i class="fa fa-edit"></i>修改</a>
                <a class="btn btn-primary btn-xs" href="{{ user_url('account/interface/'.$account->id) }}"><i class="fa fa-link"></i>接口</a>
                <a class="btn btn-primary btn-xs" href="{{ user_url('account/manage/'.$account->id) }}"><i class="fa fa-cogs"></i>功能管理</a>
                <button class="btn btn-danger btn-xs confirm" data-link="{{ user_url('account/destroy/'.$account->id) }}"><i class="fa fa-trash-o"></i>删除</button>
              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <td colspan="10" class="row-empty">未添加公众号</td>
          </tr>
        @endif
        </tbody>
      </table>
    </div>
  </div>
@endsection
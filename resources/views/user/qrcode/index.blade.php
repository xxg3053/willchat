@extends('user.layouts.base')
@section('main')
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title"><span class="fa fa-qrcode"></span>二维码</h3>
      <div class="box-tools pull-right">
        <a href="{{ user_url('qrcode/create') }}" class="btn default blue-stripe btn-xs"><i class="fa fa-plus"></i>新建</a>
        <button url="{{ user_url('qrcode/destroy') }}" class="btn default red-stripe btn-xs ajax-post confirm" target-form="ids"><i class="fa fa-trash-o"></i>删除 </button>
      </div>
    </div>
    <div class="box-body">
      <div class="table-scrollable">
        <table class="table table-striped table-hover">
          <thead>
          <tr>
            <th class="table-checkbox">
              <input type="checkbox" class="group-checkable" data-set="#sample_1 .ids"/>
            </th>
            <th>二维码参数</th>
            <th>备注</th>
            <th>预览</th>
            <th>创建时间</th>
            <th>被扫次数</th>
            <th>操作</th>
          </tr>
          </thead>
          <tbody>
            @if(count($qrcodes) > 0)
              @foreach($qrcodes as $key => $qrcode)
                <tr>
                  <td><input class="ids" type="checkbox" value="{{ $qrcode->id }}" name="ids[]"></td>
                  <td>{{ $qrcode->keyword }}</td>
                  <td>{{ $qrcode->remark }}</td>
                  <td><img src="{{ $qrcodeService->url($qrcode->ticket) }}" class="preview-small"/></td>
                  <td>{{ $qrcode->created_at }}</td>
                  <td>{{ $qrcode->scaned_times }}</td>
                  <td>
                    <a class="btn btn-primary btn-xs" href="{{ user_url('qrcode/download/'.$qrcode->id) }}"><i class="fa fa-download"></i>下载</a>
                    <button class="btn btn-danger btn-xs confirm" data-link="{{ user_url('qrcode/destroy/'.$qrcode->id) }}"><i class="fa fa-trash-o"></i>删除</button>
                  </td>
                </tr>
              @endforeach
            @else
              <tr>
                <td colspan="10" class="row-nodata">暂无记录</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
      {!! $qrcodes->render() !!}
    </div>
  </div>
@endsection
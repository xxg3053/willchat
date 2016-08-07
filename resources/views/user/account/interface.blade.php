@extends('user.layouts.baseindex')
@section('main')
  <div class="row">
    <div class="col-md-12">
      <div class="box box-default">
        <div class="box-header with-border">
        <h3 class="box-title"><span class="fa fa-qrcode"></span>接口信息</h3>
        </div>
        <div class="box-body">
          <div class="">
            服务器URL：{{ url('wechat/'.$token)  }}<br />
            TOKEN：{{ $token }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('js')
  <script>
    $(function () {
    })
  </script>
@endsection
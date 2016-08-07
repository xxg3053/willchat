@extends('user.layouts.base')
@section('main')
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title"><span class="fa fa-qrcode"></span>创建二维码</h3>
      <div class="box-tools pull-right">
      </div>
    </div>
    <div class="box-body form">
      <form action="" method="post" class="form-horizontal" role="form">
        {!! csrf_field() !!}
        <div class="form-body">
          <div class="form-group">
            <label class="col-md-2 control-label">二维码类型</label>
            <div class="col-md-6">
              <select name="type" id="type" class="form-control">
                <option value="forever">永久二维码</option>
                <option value="temporary">临时二维码</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">二维码参数</label>
            <div class="col-md-6">
              <input type="text" name="keyword" value="" class="form-control" placeholder="设置二维码所带参数">
            </div>
          </div>
          <div class="form-group" id="expr">
            <label class="col-md-2 control-label">有效期</label>
            <div class="col-md-6">
              <input type="text" name="expire" value="" class="form-control" placeholder="临时二维码的有效期，单位为秒">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">备注</label>
            <div class="col-md-6">
              <input type="text" name="remark" value="" class="form-control" placeholder="填写备注，便于以后区分">
            </div>
          </div>
        </div>
        <div class="form-actions">
          <div class="row">
            <div class="col-md-offset-2 col-md-6">
              <button type="submit" class="btn btn-primary">保存</button>
              <a href="javascript:history.go(-1);" class="btn btn-default">
                取消 </a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  @endsection
  @section('js')
    <script>
      $(function () {
        //根据菜单类型显示或隐藏相应的输入项
        var changeFields = function (type) {
          if (type === 'forever') {
            $('div#expr').hide();
          } else {
            $('div#expr').show();
          }
          ;
        };
        //初始时根据类型显示或隐藏相应输入项
        changeFields($('select#type').val());
        //类型改变时根据类型显示或隐藏相应输入项
        $('select#type').change(function (event) {
          changeFields($(this).val());
        });
      })
    </script>
@stop
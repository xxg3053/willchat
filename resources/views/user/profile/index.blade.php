@extends('user.layouts.baseindex')
@section('main')
  <div class="row">
    <div class="col-md-12">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="{{ user_url('profile/userinfo') }}" >个人信息</a></li>
          <li class=""><a href="{{ user_url('avatar') }}" >头像设置</a></li>
          <li class=""><a href="{{ user_url('profile/password') }}" >修改密码</a></li>
        </ul>
        <div class="tab-content">
          <form action="" method="post" class="form-horizontal" role="form">
            {!! csrf_field() !!}
            <div class="form-group">
              <label class="col-md-2 control-label">用户名</label>
              <div class="col-md-6">
                <input type="text" name="" value="{{ $user->name }}" placeholder="" class="form-control" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Email</label>
              <div class="col-md-6">
                <input type="text" name="" value="{{ $user->email }}" placeholder="" class="form-control" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">昵称</label>
              <div class="col-md-6">
                <input type="text" name="nickname" value="{{ $user->nickname }}" placeholder="" class="form-control"/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">手机号</label>
              <div class="col-md-6">
                <input type="text" name="mobile" value="{{ $user->mobile }}" placeholder="" class="form-control" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">QQ号码</label>
              <div class="col-md-6">
                <input type="text" name="qq" value="{{ $user->qq }}" placeholder="" class="form-control"/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">注册时间</label>
              <div class="col-md-6">
                <input type="text" name="" value="{{ $user->created_at }}" placeholder="" class="form-control" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">最后登录时间</label>
              <div class="col-md-6">
                <input type="text" name="" value="{{ $user->last_login_at }}" placeholder="" class="form-control" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">最后登录IP</label>
              <div class="col-md-6">
                <input type="text" name="" value="{{ $user->last_login_ip }}" placeholder="" class="form-control" readonly/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-offset-2 col-md-6">
                <button type="submit" class="btn btn-primary">保存</button>
                <a href="javascript:history.go(-1);" class="btn btn-default">
                  取消 </a>
              </div>
            </div>
          </form>
        </div>
        <!-- /.tab-content -->
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
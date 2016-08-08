<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WillChat</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ vendor('bower_components/AdminLTE') }}/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link href="http://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <!-- Ionicons -->
  <link href="http://cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <!-- Theme style -->
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ css('user/login.css') }}" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition">
<div class="login-box">
  <div class="login-logo">
    <img src="{{ img('user/logo.png') }}" width="320" alt="" />
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <form class="login-form" action="/user/login" method="post">
      {!! csrf_field() !!}
      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="账户名">
      </div>
      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <input type="password" class="form-control" name="password" placeholder="密码">
      </div>
      <button type="submit" class="btn btn-primary btn-block">登录</button>
    </form>

    <!-- /.social-auth-links -->

    <a href="#">忘记密码</a><br>
    <a href="/user/register" class="text-center">注册账号</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<div class="copyright"> &copy; 2016 深圳荐货联盟网络科技有限公司 <a target="_blank" href="http://www.miitbeian.gov.cn/">粤ICP备16002610-2号</a> </div>
<!-- jQuery 2.2.3 -->
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ vendor('bower_components/AdminLTE') }}/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ js('user/login.js') }}"></script>
<script>
  $(function () {
    Login.handleLogin();
  });
</script>
</body>
</html>


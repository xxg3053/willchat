<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ $metaTitle or 'WillChat' }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ vendor('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link href="http://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <!-- Ionicons -->
  <link href="http://cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ vendor('bower_components/AdminLTE') }}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ vendor('bower_components/AdminLTE') }}/dist/css/skins/skin-blue.min.css">

  <link rel="stylesheet" href="{{ css('simple-line-icons/simple-line-icons.min.css') }}">
  <link rel="stylesheet" href="{{ css('user/all.css') }}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  @yield('css')

  @yield('pre_js')
</head>
<body class="hold-transition skin-blue full-width">
<div class="wrapper">
{{-- BEGIN MAINHEADER --}}
@include('user.layouts.pageheader')
{{-- END MAINHEADER --}}

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-3">

          <div class="box box-primary" id="dashboard-sidebar">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ $user->avatar }}" alt="User profile picture">

              <h3 class="profile-username text-center">{{ $user->nickname }}</h3>

              <p class="text-muted text-center">&nbsp;</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item active">
                  <a href="{{ user_url('/') }}">用户中心</a>
                </li>
                <li class="list-group-item">
                  <a href="{{ user_url('profile/userinfo') }}">用户信息</a>
                </li>
                <li class="list-group-item">
                  <a href="{{ user_url('document/index/guide') }}">帮助文档</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-9">
          @yield('main')
        </div>
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- BEGIN FOOTER --}}
  @include('user.layouts.pagefooter')
  {{-- END FOOTER --}}
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ vendor('bower_components/AdminLTE') }}/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ vendor('bower_components/AdminLTE') }}/dist/js/app.min.js"></script>
<script src="{{ vendor('bower_components/js-cookie/src/js.cookie.js') }}"></script>
<script src="{{ vendor('bower_components/layer/layer.js') }}"></script>
<script src="{{ js('user/all.js') }}"></script>
</body>
<script>
  $(function() {
    Base.initNormalPage();
  })
</script>

@yield('js')
</html>
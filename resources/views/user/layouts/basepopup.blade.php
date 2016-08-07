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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
          @yield('main')
        </div>
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
<script src="{{ vendor('bower_components/js-cookie/src/js.cookie.js') }}"></script>
<script src="{{ vendor('bower_components/layer/layer.js') }}"></script>
<script src="{{ js('user/all.js') }}"></script>
</body>
<script>
  $(function() {
    Base.initNormalPage();

    Base.initDialogPage(); //dialog弹窗中页面中一些操作初始化

    // 当前layer弹出层索引
    var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
    parent.layer.title(' ', index);

    // 弹出层表单底部取消按钮动作
    $('button.btn-closedialog').click(function (event) {
      parent.layer.close(index); //再执行关闭
    });
  })
</script>

@yield('js')
</html>
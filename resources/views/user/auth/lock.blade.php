<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>WillChat</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.7.0/css/amazeui.min.css"/>
  <link rel="stylesheet" href="{{ css('user/login.css') }}" />
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>WillChat</h1>
  </div>
</div>
<div class="am-g">
  <div class="am-u-lg-4 am-u-md-8 am-u-sm-centered">
    <form action="/user/login" method="post" id="login-form" class="am-form">
      {!! csrf_field() !!}
      <img src="{{ $lockedAvatar }}" alt=""/>
      <input class="form-control" type="text" name="name" id="name" value="{{ $lockedName }}" placeholder="用户名">
      <input class="form-control" type="password" name="password" id="password" value="" placeholder="密码">

      <div class="am-cf">
        <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
        <a href="" class="am-btn am-btn-default am-btn-sm am-fl">忘记密码？</a>
      </div>
    </form>
    <hr>
    <div class="copyright"> &copy; 2016 深圳荐货联盟网络科技有限公司 <a target="_blank" href="http://www.miitbeian.gov.cn/">粤ICP备16002610-2号</a> </div>
  </div>
</div>
<script src="http://cdn.amazeui.org/amazeui/2.7.0/js/amazeui.min.js"></script>
</body>
</html>
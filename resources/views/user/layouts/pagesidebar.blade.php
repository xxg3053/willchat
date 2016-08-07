<aside class="main-sidebar">
  {{-- SIDEBAR BEGIN --}}
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li class="treeview">
        <a href="{{ user_url('/') }}">
          <i class="icon-home"></i> <span>管理主页</span>
        </a>
      </li>
      <li class="treeview">
        <a href="javascript:;">
          <i class="icon-settings"></i> <span>基础设置</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ user_url('menu') }}"></i>自定义菜单</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="javascript:;">
          <i class="icon-speech"></i> <span>自动回复</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ user_url('r-text') }}"></i>文本回复</a></li>
          <li><a href="{{ user_url('reply-text') }}"></i>图文回复</a></li>
          <li><a href="{{ user_url('reply-subscribe') }}"></i>关注回复</a></li>
          <li><a href="{{ user_url('reply-default') }}"></i>默认回复</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="javascript:;">
          <i class="icon-users"></i> <span>粉丝管理</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ user_url('fans') }}"></i>粉丝列表</a></li>
          <li><a href="{{ user_url('fan-group') }}"></i>粉丝分组</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="javascript:;">
          <i class="icon-frame"></i> <span>二维码</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ user_url('qrcode?type=forever') }}"></i>临时二维码</a></li>
          <li><a href="{{ user_url('qrcode?type=temporay') }}"></i>永久二维码</a></li>
          <li><a href="{{ user_url('qrcode?type=card') }}"></i>卡券二维码</a></li>
        </ul>
      </li>
    </ul>
  </section>
  {{-- SIDEBAR END --}}
</aside>
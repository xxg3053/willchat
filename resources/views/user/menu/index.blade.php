@extends('user.layouts.base')
@section('style')
  <link rel="stylesheet" href="{{ css('user/menu.css') }}" />
@stop
@section('main')
  <div class="portlet light">
    <div class="portlet-title">
      <div class="caption">
        <i class="fa fa-list"></i> 自定义菜单
      </div>
      <div class="actions">
        <!-- <a href="{{ user_url('menu/create') }}" class="btn default blue-stripe btn-xs dialog-popup dialog-medium"><i class="fa fa-plus"></i>添加菜单</a> -->
        <a href="javascript:;" id="sync-from-wechat" class="btn default green-stripe btn-xa"><i class="fa fa-cloud-download"></i>从微信同步</a>
        <a href="javascript:;" id="sync-to-wechat" class="btn default green-stripe btn-xa"><i class="fa fa-cloud-upload"></i>同步到微信</a>
        <a href="javascript:;" class="btn default red-stripe btn-xa" id="clear-all"><i class="fa fa-trash-o"></i>清除菜单</a>
      </div>
    </div>
    <div class="portlet-body">
      <div class="col-md-6">
        <!-- 展示区 -->
        <div id="app">
          <div id="menu-demo">
            <ul class="top-menu">
              <li v-for="menu in menuTree" v-class="">
                @{{ menu.name }}

                <ul class="sub-menu">
                  <li v-for="subMenu in menu.sub_buttons">@{{ subMenu.name }}</li>
                </ul>

              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <!-- 编辑区 -->
      </div>
    </div>
  </div>
@stop
@section('js')
  <script src="{{ vendor('bower_components/vue/dist/vue.js') }}"></script>
  <script>
    $(document).ready(function () {
      var app = new Vue({
        el: '#app',
        data: {
          menuTree: {!! $menuTree !!}
        }
      });

      // 生成菜单按钮动作
      $('a#create-wxmenu').click(function (event) {
        event.preventDefault();
        var url = "{{ user_url('') }}";
        $.get(url, function (data) {
          if (data.status) {
            Base.success(data.info);
            setTimeout(function () {
              top.location.reload()
            }, 2000);
          } else {
            Base.error(data.info);
          }
        }, 'json');
      });

      // 从微信同步
      $('a#sync-from-wechat').click(function (event) {
        event.preventDefault();
        Base.confirm('从微信同步菜单将会覆盖本地保存的菜单数据，确定要进行同步？', function(){
          var url = "{{ user_url('menu/sync-from-wechat') }}";
          $.get(url, function (data) {
            if (data.status) {
              Base.success(data.info);
              setTimeout(function () {
                top.location.reload()
              }, 2000);
            } else {
              Base.error(data.info);
            }
          }, 'json');
        });
      });

      // 同步到微信（即根据本地数据重新生成菜单）
      $('a#sync-to-wechat').click(function (event) {
        event.preventDefault();

        @if(count($menuTree) == 0) {
          Base.error('本地没有有效的菜单数据');
          return false;
        }
        @endif

        Base.confirm('本操作将重新生成微信自定义菜单，确定要进行操作？', function(){
          var url = "{{ user_url('menu/sync-to-wechat') }}";
          $.get(url, function (data) {
            if (data.status) {
              Base.success(data.info);
              setTimeout(function () {
                top.location.reload()
              }, 2000);
            } else {
              Base.error(data.info);
            }
          }, 'json');
        });
      });

      // 清除全部菜单操作
      $('a#clear-all').click(function (event) {
        event.preventDefault();
        Base.confirm('该操作会清除本系统和微信上的自定义菜单数据并不可恢复，确定继续？', function(){
          var url = "{{ user_url('menu/clear') }}";
          $.get(url, function (data) {
            if (data.status) {
              Base.success(data.info);
              setTimeout(function () {
                top.location.reload()
              }, 2000);
            } else {
              Base.error(data.info);
            }
          }, 'json');
        });
      });
    });
  </script>
@stop
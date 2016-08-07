@extends('user.layouts.baseindex')

@section('main')
  <div class="row">
    <div class="col-md-12">
      <!-- BEGIN PORTLET -->
      <div class="box box-default ">
        <div class="box-header with-border">
          <h3 class="box-title"><span class="fa fa-user"></span>帮助中心</h3>
          <div class="box-tools pull-right">
            <div class="input-group">
              <span class="input-group-addon fa fa-search"></span>
              <input type="text" class="form-control" placeholder="搜索" />
            </div>
          </div>
        </div>
        <div class="box-body">
          <div id="article-main">
            <h2 class="title">{{ $article->title }}</h2>
              <span class="article-info">
                <span> 发表于 {{ $article->published_at }}</span>
                <span> 最后更新 {{ $article->updated_at }}</span>
              </span>
            <div id="contents">{{ $article->content }}</div>
            <span class="return-list">
              <a href="{{ user_url('document') }}">返回文档列表</a>
            </span>
            <span class="pagination">
              <article:prev name="prev" info="info">
                <a href="{{ user_url('document/detail/'.$prevId) }}">上一篇</a>
              </article:prev>
              <article:next name="next" info="info">
                <a href="{{ user_url('document/detail/'.$nextId) }}">下一篇</a>
              </article:next>
            </span>
          </div>
        </div>
      </div>
      <!-- END PORTLET -->
    </div>
  </div>
@endsection
@section('js')

@endsection
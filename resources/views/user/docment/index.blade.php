@extends('user.layouts.baseindex')
@section('main')
  <div class="row">
    <div class="col-md-12">
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
          <ul id="article-list">
            @foreach($articles as $key => $article)
              <li>
                <a class="title" href="{{ user_url('document/detail/'.$article->id) }}" title="{{ $article->title }}">{{ str_limit($article->title, 40) }}</a>
                <span class="time">{{ $article->published_at }}</span>
              </li>
            @endforeach
          </ul>
          {!! $articles->render() !!}
        </div>
      </div>
    </div>
  </div>
@stop
@section('js')

@stop
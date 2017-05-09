@extends('layouts.master')

@section('title', 'トップページ')

@section('content')
<div class="jumbotron">
    <p class="lead">Laravelでブログを始めませんか？</p>
    <p>
        <a class="btn btn-lg btn-success" href="/sign_up" role="button">会員登録してブログを始める</a>
        <a class="btn btn-lg btn-danger" href="#" role="button">匿名でブログを投稿して見る</a>
    </p>
</div>

<div class="row">
    <div class="col-lg-12">
      <h4>2017/04/20</h4>
      <p>
          <a href="/blog/1">記事名1</a>
      </p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
      <h4>2017/04/20</h4>
      <p>
          <a href="/blog/2">記事名２</a>
      </p>
    </div>
</div>
@endsection
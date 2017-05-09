@extends('layouts.master')
@section('title', 'ブログ投稿')
@section('content')
   <h3>投稿画面</h3>
   <form action="/blog" method="post">
       {{ csrf_field() }}
       <div class="form-group">
           <label>タイトル</label>
           <input type="text" name="title" class="form-control" value="{{$blog->title}}">
       </div>
       <div class="form-group">
           <label>本文</label>
           <textarea type="text" name="article" rows="30" class="form-control">{{$blog->article}}</textarea>
       </div>
       <button type="submit" class="btn btn-success">投稿</button>
   </form>
@endsection
@extends('layouts.master')
@section('title', 'ブログ投稿')
@section('content')
   <h3>編集画面</h3>
   <form action="/blog/{{$blog->id}}" method="post">
       {{ csrf_field() }}
       <input name="_method" type="hidden" value="PUT">
       <div class="form-group">
           <label>タイトル</label>
           <input type="text" name="title" class="form-control" value="{{$blog->title}}">
       </div>
       <div class="form-group">
           <label>本文</label>
           <textarea type="text" name="article" rows="30" class="form-control">{{$blog->article}}</textarea>
       </div>
       <button type="submit" class="btn btn-success">更新</button>
   </form>
@endsection

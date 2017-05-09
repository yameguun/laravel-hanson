@extends('layouts.master')
@section('title', $blog->title)
@section('content')
   <div>
       <h2>{{$blog->title}}</h2>
   </div>
   <div>
       <p>{{$blog->article}}</p>
   </div>
   <div>
       <a href="/blog/{{$blog->id}}/edit">編集画面</a>
       <form method="post" action="/blog/{{$blog->id}}">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
           <input name="_method" type="hidden" value="DELETE">
           <input type="submit" value="削除" class="btn btn-danger btn-sm btn-destroy">
       </form>
   </div>
@endsection

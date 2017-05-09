@extends('layouts.master')
@section('title', 'トップページ')
@section('content')
<h3>投稿一覧</h3>
@foreach ($blogs as $blog)
<div class="row">
   <div class="col-lg-12">
     <h4>{{$blog->created_at}}</h4>
     <p>
         <a href="/blog/{{$blog->id}}">{{$blog->title}}</a>
     </p>
   </div>
</div>
@endforeach
@endsection
@extends('layouts.admin')

@section ('content')

<h1> edit posts</h1>
<form action="{{ route('post.update',['post'=>$post->id]) }}" method="post">
@csrf
<input name="_method" type="hidden" value="PUT">
<input type="text" name="title" value="{{$post->title}}">
<input type="text" name="category_id"value="{{$post->category_id}}">
<input type="text" name="content"value="{{$post->content}}">
<input type="submit" name="edit">


</form>


@endsection
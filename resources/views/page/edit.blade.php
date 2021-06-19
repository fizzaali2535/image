@extends('layouts.admin')

@section ('content')

<h1> edit page</h1>
<form action="{{ route('page.update',['page'=>$page->id]) }}" method="post">
@csrf
<input name="_method" type="hidden" value="PUT">
<input type="text" name="title" value="{{$page->title}}">
<input type="text" name="content_id"value="{{$page->content_id}}">
<input type="text" name="content"value="{{$page->content}}">
<input type="submit" name="edit">


</form>


@endsection
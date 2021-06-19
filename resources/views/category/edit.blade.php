@extends('layouts.admin')

@section ('content')

<h1> edit posts</h1>
<form action="{{ route('category.update',['category'=>$category->id]) }}" method="post">
@csrf
<input name="_method" type="hidden" value="PUT">
<input type="text" name="category_id"value="{{$category->category_id}}">
<input type="text" name="category_name"value="{{$category->category_name}}">
<input type="submit" name="edit">


</form>


@endsection
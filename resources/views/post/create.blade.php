@extends('layouts.admin')

@section ('content')

<h1>create posts</h1>
<form action="{{ route('post.store') }}" method="POST">
@csrf
<label for="title">title</label>
<input type="text" name="title">

<label for="title">category_id</label>
<input type="text" name="category_id">

<label for="content">content</label>
<textarea name="content">Enter text here...</textarea>

<input type="submit" name="add">


</form>
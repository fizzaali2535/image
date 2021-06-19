@extends('layouts.admin')

@section ('content')

<h1>Create Page</h1>
<form action="{{ route('page.store') }}" method="POST">
@csrf
<label for="title">title</label>
<input type="text" name="title">

<label for="title">content_id</label>
<input type="text" name="content_id">

<label for="content">content</label>
<textarea name="content">Enter text here...</textarea>

<input type="submit" name="add">


</form>


@endsection
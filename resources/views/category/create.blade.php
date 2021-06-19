@extends('layouts.admin')

@section ('content')

<h1>create category</h1>
<form action="{{ route('category.store') }}" method="POST">
@csrf
<label for="title">category id</label>
<input type="text" name="category_id">
<label for="title">category name</label>
<input type="text" name="category_name">
<input type="submit" name="add">


</form>


@endsection
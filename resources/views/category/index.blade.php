@extends('layouts.admin')

@section ('content')
<h1> index posts</h1>
<a href="{{route('category.create')}}">ADD CATEGORY</a>

    <table border='1' cellpadding='10' cellspacing='0 '>
    <thead> 
        <tr>
        <th>category_id</th>
        <th>category_name</th>

        </tr>
        </thead>
    <tbody>   
    @if(count($categories))
    @foreach($categories as $category )
        <tr>
        <td>{{$category->category_id}}</td>
        <td>{{$category->category_name}}</td>
        <td>
        <a href="{{route('category.edit' , ['category'=>$category->id])}}"> edit </a>

        <form action="{{ route('category.destroy',['category'=>$category->id]) }}" method="post">
        @csrf
        <input name="_method" type='hidden' value="delete">
        <input type="submit" value="delete">
        </form>
        </td>
        </tr>
   
        @endforeach
@else
<tr>
<td colspan="4">No data found</td>

</tr>
@endif
</tbody>
</table>


@endsection

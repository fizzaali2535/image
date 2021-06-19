@extends('layouts.admin')

@section ('content')

<h1>Page Index</h1>
<a href="{{route('page.create')}}">ADD PAGE</a>

    <table border='1' cellpadding='10' cellspacing='0 '>
    <thead> 
        <tr>
        <th>title</th>
        <th>content_id</th>
        <th>content</th>

        </tr>
        </thead>
    <tbody>   
    @if(count($pages))
    @foreach($pages as $page )
        <tr>
        <td>{{$page->title}}</td>
        <td>{{$page->content_id}}</td>
        <td>{{$page->content}}</td>
        <td>
        <a href="{{route('page.edit' , ['page'=>$page->id])}}"> edit </a>

        <form action="{{ route('page.destroy',['page'=>$page->id]) }}" method="post">
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

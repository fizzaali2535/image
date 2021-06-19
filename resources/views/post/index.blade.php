@extends('layouts.admin')

@section ('content')

<h1> index posts</h1>
<a href="{{route('post.create')}}">ADD POST</a>

    <table border='1' cellpadding='10' cellspacing='0 '>
    <thead> 
        <tr>
        <th>title</th>
        <th>category_id</th>
        <th>content</th>

        </tr>
        </thead>
    <tbody>   
    @if(count($posts))
    @foreach($posts as $post )
        <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->category_id}}</td>
        <td>{{$post->content}}</td>
        <td>
        <a href="{{route('post.edit' , ['post'=>$post->id])}}"> edit </a>

        <form action="{{ route('post.destroy',['post'=>$post->id]) }}" method="post">
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

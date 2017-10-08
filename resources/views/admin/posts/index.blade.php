@extends('layouts.template')
@section('title','Painel admin')

@section('content')
<h1>Blog Admin</h1>
<table class="table table-sm">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{ $post->id}}</td>
        <td>{{ $post->title}}</td>
        <td><a href="{{ route('admin.posts.edit', ['id'=>$post->id]) }}">Edit</a></td>
    </tr>
    @endforeach

</table>

    {!! $posts->render() !!}
@stop
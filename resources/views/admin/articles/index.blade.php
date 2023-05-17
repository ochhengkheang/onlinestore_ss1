@extends('admin.layouts.master')
@section('title', 'Articles Listing')
@section('right')
    <h1 style="background-color: rgb(26, 96, 126); color: white; padding: 10px;">
        Welcome to Articles Listing
    </h1>
    <div id="toolbar">
        <ul>
            <li><a href="/admin/articles/create">ADD</a></li>
            <li><a href="#">TRASH</a></li>
        </ul>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Publish</th>
            <th>EDIT</th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->description }}</td>
                <td>{{ $article->publish }}</td>
                <td><a href="/admin/articles/{{ $article->id }}/edit">Edit</a></td>
            </tr>
        @endforeach
    </table>
@endsection

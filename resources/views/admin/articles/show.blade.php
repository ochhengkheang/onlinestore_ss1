@extends('admin.layouts.master')
@section('title', '')
@section('right')
    <h1 style="background-color: rgb(26, 96, 126); color: white; padding: 10px;">
        The detail information of an article
    </h1>

    <form action="/admin/articles/{{ $article->id }}" method="post">
        @csrf
        {{ method_field('delete') }}
        <div id="toolbar">
            <ul>
                <li><input type="submit" value="DELETE" name="buttonSubmit"></li>
                <li><input type="button" value="BACK"
                        onclick="window.location='/admin/articles'"></li>
            </ul>
        </div><br><br>
        <p>Title: <b>{{ $article->title }}</b></p><br>
        <p>Description: <small>{{ $article->description }}</small></p><br>
        <p>Posted Date: {{ $article->created_at }}</p><br>
        <p>Updated Date: {{ $article->updated_at }}</p>


    </form>
@endsection

@extends('admin.layouts.master')
@section('title', '')
@section('right')
    <h1 style="background-color: rgb(26, 96, 126); color: white; padding: 10px;">
        Article Editing
    </h1>
    <form action="/admin/articles/{{$article->id}}<" method="post">
        @csrf
        {{-- Cross site request Fogery --}}
        {{method_field('put')}}
        <div id="toolbar">
            <ul>
                <li><input type="submit" value="SUBMIT" name="buttonSubmit"></li>
                <li><input type="button" value="BACK"
                        onclick="window.location='/admin/articles'"></li>
            </ul>
        </div>
            <label for="title">Title: </label><br>
            <input type="text" value="{{$article->title}}" name="title" id="title"> <br><br>

            <label for="description">Description: </label><br>
            <textarea name="description" id="description"
            cols="43" rows="8">{{$article->description}}</textarea> <br><br>
            <label for="publish">Publish</label>
            @if ($article->publish==1)
            <input type="checkbox" name="publish" id="publish" value="1" checked>
            @else
            <input type="checkbox" name="publish" id="publish" value="1">
            @endif
        </div>
    </form>
@endsection

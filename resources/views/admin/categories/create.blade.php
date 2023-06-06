@extends('admin.layouts.master')
@section('title', '')
@section('right')
    <h1 style="background-color: rgb(26, 96, 126); color: white; padding: 10px;">
        Article Adding
    </h1>
    <form action="/admin/categories" method="post">
        @csrf
        {{-- Cross site request Fogery --}}
        <div id="toolbar">
            <ul>
                <li><input type="submit" value="SUBMIT" name="buttonSubmit"></li>
                <li><input type="button" value="BACK"
                        onclick="window.location='/admin/categories'"></li>
            </ul>
        </div>
            <label for="title">Title: </label><br>
            <input type="text" name="title" id="title"> <br><br>

            <label for="description">Description: </label><br>
            <textarea name="description" id="description"
                cols="43" rows="8"></textarea> <br><br>

            <label for="publish">Publish</label>
            <input type="checkbox" name="publish" id="publish" value="1" checked>
        </div>
    </form>
@endsection

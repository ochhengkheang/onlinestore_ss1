@extends('admin.layouts.master')
@section('title', 'Categories Listing')
@section('right')
    <h1 style="background-color: #672738; color: white; padding: 10px;">
        Categories Adding
    </h1>
    <form action="/admin/categories" method="post">

        @csrf
        {{-- Cross Site Request Fogery Auto create token--}}
        <div id = "toolbar">
            <ul>
                <li><input type="submit" value="SUBMIT" name="buttonSubmit"></li>
                <li><input type="button" value="BACK"
                    onclick="window.location='/admin/categories'"></li>
            </ul>
        </div><br>
        <label for="Category">Category: </label>
        <input type="text" name="Category" id= 'Category'><br><br>

        <label for="description">Description:</label><br>
        <textarea name="description" id="description"
            cols="43" rows="8"></textarea><br><br>

        <label for="publish">Publish</label>
        <input type="checkbox" name="publish" id="publish" value="1" checked>
    </form>
@endsection

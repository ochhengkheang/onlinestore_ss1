@extends('admin.layouts.master')
@section('title', 'Categories Editing')
@section('right')
    <h1 style="background-color: #672738; color: white; padding: 10px;">
        Categories Edit
    </h1>
    <form action="/admin/categories/1/" method="post">
        @csrf
        {{-- Cross Site Request Fogery Auto create token--}}
        {{ method_field('put') }}
        <div id = "toolbar">
            <ul>
                <li><input type="submit" value="SUBMIT" name="buttonSubmit"></li>
                <li><input type="button" value="BACK"
                    onclick="window.location='/admin/categories'"></li>
            </ul>
        </div><br>
        <label for="Category">Category: </label>
        <input type="text" name="Category" id= 'Category' value="This Category is for create"><br><br>

        <label for="description">Description:</label><br>
        <textarea name="description" id="description"
            cols="43" rows="8">The description of category</textarea><br><br>

        <label for="publish">Publish</label>
        <input type="checkbox" name="publish" id="publish" value="1" checked>
    </form>
@endsection

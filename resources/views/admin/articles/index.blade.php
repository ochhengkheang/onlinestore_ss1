@extends('admin.layouts.master')
@section('title', 'Articles Listing')
@section('right')
    <h1 style="background-color: rgb(26, 96, 126); color: white; padding: 10px;">
        Welcome to Articles Listing
    </h1>
    <form action="/admin/articles/deleteAll" method="POST">
    <div id="toolbar">
        <ul>
            <li><input type="button" onclick="window.location='/admin/articles/create'" value="ADD"></li>
            <li><input type="submit" value="TRASH" name="buttonTrash"></li>
        </ul>
    </div>
    @if (session('delSuccess'))
        <br><h3>{{session('delSuccess')}} </h3><br>
    @endif

    <table>
       <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Publish</th>
            <th>EDIT</th>
            <th>Show</th>
            
            {{-- <th><input type="submit" value="DELETE" name="btnDelete"></th> --}}
        </tr>
        @foreach ($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->description}}</td>
            <td>{{$article->publish}}</td>
            <td><a href="/admin/articles/{{$article->id}}/edit">EDIT</a></td>
            <td><a href="/admin/articles/{{$article->id}}">show</a></td>
            <td><input type="checkbox" name="chkIds[]" id="chkIds[]" value="{{$article->id}}"></td>
        </tr>
        @endforeach
    </table>
</form>
@endsection

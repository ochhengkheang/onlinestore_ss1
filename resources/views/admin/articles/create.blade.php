@extends('admin.layouts.master')
@section('title', '')
@section('right')
    <h1 style="background-color: rgb(26, 96, 126); color: white; padding: 10px;">
        Article Adding
    </h1>

    <form action="/admin/articles" method="post">
        @csrf
        {{-- Cross Site Request Fogery --}}
        <div id="toolbar">
            <ul>
                <li><input type="submit" value="SUBMIT" name="buttonSubmit"></li>
                <li><input type="button" value="BACK"
                        onclick="window.location='/admin/articles'"></li>
            </ul>
        </div><br>
        @if (session('successullyMessage'))
            <br><h2>{{ session('successullyMessage') }}</h2><br><br>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <h4 style="color: red;">{{ $error }}</h4>
            @endforeach
        @endif
            <label for="title">Title: </label><br>
            <input type="text" value="{{ old('title') }}" name="title" id="title"> <br>
            @error('title')
                {{ $message }}
            @enderror
            <br><br>
            <label for="description">Description: </label><br>
            <textarea name="description" id="description"
                cols="43" rows="8">{{ old('description') }}</textarea> <br>
            @error('title')
                {{ $message }}
            @enderror
            <br><br>

            <label for="email">Email: </label><br>
            <input type="text" value="{{ old('email') }}" name="email" id="email"> <br>
            @error('email')
                {{ $message }}
            @enderror
            <br><br>

            <label for="url">URL: </label><br>
            <input type="text" value="{{ old('url') }}" name="url" id="url"> <br>
            @error('url')
                {{ $message }}
            @enderror
            <br><br>

            <label for="publish">Publish</label>
            <input type="checkbox" name="publish" id="publish" value="1" checked>
        </div>
    </form>
@endsection
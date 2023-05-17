@extends('admin.layouts.master')
@section('title', 'Admin Panel')
@section('right')
    <h1 style="background-color: rgb(26, 96, 126); color: white; padding: 10px;">
        Welcome to my Admin Panel
    </h1>
    <div id="content"
        style="display: grid; grid-template-columns: auto auto auto;
               gap: 20px; margin-top: 20px; margin-bottom: 20px;">

        <div class="box" style="background: #87f0af; height: 200px;">box 1</div>
        <div class="box" style="background: #87f0af; height: 200px;">box 2</div>
        <div class="box" style="background: #87f0af; height: 200px;">box 3</div>
        <div class="box" style="background: #87f0af; height: 200px;">box 4</div>
        <div class="box" style="background: #87f0af; height: 200px;">box 5</div>
        <div class="box" style="background: #87f0af; height: 200px;">box 6</div>
    </div>
@endsection

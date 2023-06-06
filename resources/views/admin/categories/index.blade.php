@extends('admin.layouts.master')
@section('title', 'Categories Listing')
@section('right')
    <h1 style="background-color: rgb(26, 96, 126); color: white; padding: 10px;">
        Welcome Categories Listing
    </h1>
    <div id="toolbar">
        <ul>
            <li><a href="/admin/categories/create">ADD</a></li>
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
        <tr>
            <td>1</td>
            <td>Wood Street Commons’ Final Stand</td>
            <td>Oakland is clearing out what was once the city’s largest unhoused community.</td>
            <td>Yes</td>
            <td><a href="/admin/categories/9/edit">EDIT</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>In South Sudan, a new front line of climate change after historic flooding</td>
            <td>World News anchor David Muir on hundreds of thousands displaced by floods.</td>
            <td>Yes</td>
            <td><a href="/admin/categories/8/edit">EDIT</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Farmers rally over first lady's comments on banning dog meat</td>
            <td>Dozens of dog farmers in South Korea are rallying to criticize the country’s first lady over her reported comments supporting a possible ban on dog meat consumption</td>
            <td>Yes</td>
            <td><a href="/admin/categories/7/edit">EDIT</a></td>
        </tr>

    </table>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        *{ margin: 0; padding: 0; box-sizing: border-box; }
        body{ font: 14px/19px sans-serif; padding: 20px; }
        #wrapper{  display: flex; }
        #left{
            width: 25%; background-color: rgb(32, 135, 203);
            min-height: 400px;
        }
        #right{
            width: 75%; background-color: rgb(169, 185, 196);
            min-height: 400px; padding: 20px;
        }
        nav ul li{
            list-style-type: none;
            border-bottom: 1px dashed rgb(255, 255, 255);
        }
        nav ul li a{
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            padding: 8px 10px;
            color: white;
            display: block;
        }
        nav ul li a:hover{
            color: yellow;
            background-color: rgb(17, 67, 100);
        }
        #right table{ width: 100%; border-collapse: collapse; }
        #right table tr th{
            padding: 8px; background: black; color: #fff;
            border: 1px solid white;
        }
        #right table tr td{
            padding: 6px 8px; background: #fff; color: #000;
        }
        #toolbar{
            padding: 20px; background: black;
            border: 1px solid #fff;
        }
        #toolbar ul{ display: flex; }
        #toolbar ul li{ list-style-type: none; margin-right: 20px; }
        #toolbar ul li a, #right form input[type=submit],
        #right form input[type=button]{
            text-decoration: none; background: brown; color: white;
            padding: 8px 18px; border: 1px solid white;
        }
        #toolbar ul li a:hover{ color: yellow; background: black; }
        #right form label{
            font: bold 16px sans-serif; color: #373737;
        }
        #right form input[type=text]{
            padding: 8px; color: #373737; font: 16px sans-serif; width: 100%;
        }
        #right form textarea{ padding: 10px; width: 100%; }
        #right form input[type=checkbox]{
           width: 20px; height: 20px;
        }

    </style>
</head>
<body>
    <div id="wrapper">
        <div id="left">
            <nav>
                <ul>
                    <li><a href="/admin">Home</a></li>
                    <li><a href="/admin/articles">Articles</a></li>
                    <li><a href="/admin/categories">Categories</a></li>
                    <li><a href="/admin/users">Users</a></li>
                </ul>
            </nav>
        </div>
        <div id="right">
            @yield('right')
        </div>
    </div>
</body>
</html>

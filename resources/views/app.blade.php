<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My App')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
        }
        .navbar {
            width: 200px;
            background-color: #f8f9fa;
            padding: 15px;
            height: 100vh;
            position: fixed;
        }
        .navbar a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
            flex-grow: 1;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .actions form {
            display: inline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <h2>Navbar</h2>
            <a href="{{ url('/categoriesdashboard') }}">Categories</a>
            <a href="{{ url('/productsdashboard') }}">Products</a>
            <a href="{{ url('/usersdashboard') }}">Users</a>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>

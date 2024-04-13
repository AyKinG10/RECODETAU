
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            height: 100vh;
            width: 250px;
            background-color: #333;
            color: #fff;
            position: fixed;
            left: 0;
            top: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .logo-name {
            padding: 20px;
            text-align: center;
        }

        .menu-items {
            flex-grow: 1;
        }

        .nav-links {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .nav-links li {
            padding: 15px 20px;
            border-bottom: 1px solid #444;
        }

        .nav-links li a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .nav-links li a .link-name {
            margin-left: 10px;
        }

        .logout-mode {
            padding: 20px;
            border-top: 1px solid #444;
        }

        .mode-toggle {
            display: flex;
            align-items: center;
        }

        .mode-toggle .switch {
            margin-left: 10px;
            position: relative;
            display: inline-block;
            width: 40px;
            height: 20px;
            background-color: #ccc;
            border-radius: 15px;
        }

        .mode-toggle .switch .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 15px;
        }

        .mode-toggle .switch input {
            display: none;
        }

        .mode-toggle .switch input:checked + .slider {
            background-color: #2196F3;
        }

        .mode-toggle .switch input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        .mode-toggle .switch .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 50%;
        }

        .mode-toggle .switch input:checked + .slider:before {
            -webkit-transform: translateX(20px);
            -ms-transform: translateX(20px);
            transform: translateX(20px);
        }

        .dashboard {
            flex: 1; /* Оставить правую сторону широкой */
            padding: 20px;
            margin-left: 250px; /* Сдвинуть контент вправо, чтобы не перекрывать панель */
        }

        .top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .search-box {
            display: flex;
            align-items: center;
            background-color: #f3f3f3;
            border-radius: 20px;
            padding: 5px 10px;
        }

        .search-box input {
            border: none;
            outline: none;
            background: none;
            margin-left: 10px;
        }

        .sidebar-toggle {
            cursor: pointer;
        }
    </style>

    <title>{{ config('app.name', 'AlertMaster') }}</title>
</head>
<body>
<nav>
    <div class="logo-name">
        <a style="text-decoration: none" href="{{url('/')}}"><span style="font-size: 30px" class="logo_name">BackToHome</span></a>
    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li><a href="{{route('adm.home')}}">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Users</span>
                </a></li>
            <li><a href="{{route('adm.categories.index')}}">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Categories</span>
                </a></li>
            <li><a href="{{route('adm.roles.index')}}">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Roles</span>
                </a></li>
            <li><a href="{{route('articles.create')}}">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Create Post</span>
                </a></li>
            <li><a href="{{route('adm.categories.create')}}"><i class="uil uil-estate"></i>
                    <span class="link-name">Create Category</span></a></li>

        </ul>
    </div>
</nav>

<section class="dashboard">

    @yield('content')
</section>

<script src="{{asset('js/script.js')}}"></script>
</body>
</html>

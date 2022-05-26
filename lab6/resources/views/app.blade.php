<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') </title>
    <link href="{{url('/css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/css/bootstrap-grid.min.css')}}" rel="stylesheet" type="text/css">
    <style>
        .photo{
            padding: 20px 0;
        }
        a:hover{
            text-decoration-line: underline;
            color:grey;
        }
    </style>

</head>
<body>
<header class="my_header">
    <div class="container">
        <div class="header_class">
            <a href="{{url('/')}}" class="logo">
                <span class="logo">ArT</span>
            </a>

            <nav>
                <a class="menu" href="{{url('/')}}">Головна</a>
                <a class="menu" href="{{url('/paintings')}}">Картини</a>
                <a class="menu" href="{{url('/artists')}}">Художники</a>
                <a class="menu" href="{{url('/awards')}}">Нагороди</a>
            </nav>
        </div>
    </div>
</header>

<main>
    <div class="container">
        @yield('content')
    </div>
</main>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') </title>
    <link href="{{ url('../resources/css/app.css') }}" rel="stylesheet" type="text/css">
    <style>
        .container{
            margin: 0 50px;
        }
    </style>

</head>
<body>
    <header class="my_header">
        <div class="container">
            <div class="header_class">
            <a href="{{url('/')}}" class="logo">
                <span class="logo">ArKon</span>
            </a>

            <nav>
                <a class="menu" href="{{url('/')}}">Головна</a>
                <a class="menu" href="{{url('/all_products')}}">Всі товари</a>
                <a class="menu" href="{{url('/add_product')}}">Додати товар</a>
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

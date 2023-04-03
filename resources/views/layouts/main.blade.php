<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>@yield('title')</title>
</head>
<body>
<div class="wrapper">
<header>

    <nav>
        <div class="container_logo">
            <a href="#"><img src="{{asset('image/logo.jpg')}}" alt="" class="bird"></a>
        </div>
        <ul>
            <li class="nav-item"><a href="{{route('main.index')}}" class="nav-link active" aria-current="page">Главная</a></li>
            <li class="nav-item"><a href="{{route('post.index')}}" class="nav-link">Новости</a></li>
            <li class="nav-item"><a href="{{route('about.index')}}" class="nav-link">Родителям</a></li>
            <li class="nav-item"><a href="{{route('contact.index')}}" class="nav-link">Наши группы</a></li>
            <li class="nav-item"><a href="" class="nav-link">Фотогалерея</a></li>
            <li class="nav-item">@if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif</li>

        </ul>
    </nav>
</header>


@yield('content')


</div>

</body>
</html>
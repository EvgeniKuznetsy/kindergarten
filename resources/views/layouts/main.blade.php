<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>@yield('title')</title>
</head>
<body>

<header>

    <div class="container-fluid">

        <div class="navb-logo">
            <img src="{{asset('image/logo.png')}}" alt="Logo">
        </div>

        <div class="navb-items d-none d-xl-flex">

            <div class="item">
                <a href="{{asset('main')}}">Главная</a>
            </div>

            <div class="item">
                <a href="{{asset('news')}}">Новости</a>
            </div>

            <div class="item">
                <a href="{{asset('parents')}}">Родителям</a>
            </div>

            <div class="item">
                <a href="{{asset('title_group')}}">Наши группы</a>
            </div>
            <div class="item">
                <a href="{{asset('photo_gallery')}}">Фотогалерея</a>
            </div>
            @csrf
            @auth()
                @if(auth()->user()->role==='admin')
                    <div class="item">
                    <a href="{{asset('admin')}}">Админ панель</a></div>
                @endif
            @endauth


            <form method="post" action="{{route('logout')}}">
            @csrf
            @auth()
                <div class="item"><a href="{{route('logout')}}">Выход</a></div>
            @else
                <div  class="item"><a href="{{route('home')}}">Регистрация/Авторизация</a>
                </div>

                @endauth

                </form>


        </div>

        <!-- Button trigger modal -->
        <div class="mobile-toggler d-lg-none">
            <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <img src="{{asset('image/logo.png')}}" alt="Logo">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                    </div>

                    <div class="modal-body">
                        @csrf
                        @auth()
                            @if(auth()->user()->role==='admin')
                                <div class="modal-line">
                                    <i class="fa-solid fa-image-portrait"></i><a href="{{asset('admin')}}">Админ панель</a></div>
                            @endif
                        @endauth
                        <div class="modal-line">
                            <i class="fa-solid fa-house"></i><a href="{{asset('main')}}">Главная</a>
                        </div>

                        <div class="modal-line">
                            <i class="fa-solid fa-newspaper"></i><a href="{{asset('news')}}">Новости</a>
                        </div>

                        <div class="modal-line">
                            <i class="fa-solid fa-file-lines"></i> <a href="{{asset('parents')}}">Для родителей</a>
                        </div>

                        <div class="modal-line">
                            <i class="fa-solid fa-user-group"></i><a href="{{asset('title_group')}}">Наши группы</a>
                        </div>
                        <div class="modal-line">
                            <i class="fa-solid fa-images"></i><a href="{{asset('photo_gallery')}}">Фотогалерея</a>
                        </div>
                        <form method="post" action="{{route('logout')}}">
                            @csrf
                            @auth()
                                <a href="{{route('logout')}}" class="navb-button">Выход</a>
                            @else
                              <a href="{{route('home')}}" class="navb-button">Авторизация</a>


                            @endauth

                        </form>

                    </div>

                    <div class="mobile-modal-footer">

                        <a target="_blank" href="https://vk.com/guravuhka200223923" class="text-center"><i class="fa-brands fa-vk mr-3"></i>Детский сад №103"ЖУРАВУШКА</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</header>


    @yield('content')
</div>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-auto position-sticky top-100 border-top">
    <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>
        <a target="_blank" href="https://vk.com/guravuhka200223923" class="text-center"><i class="fa-brands fa-vk mr-3"></i>Детский сад №103"ЖУРАВУШКА</a>
    </div>



    </ul>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js
    "></script>
</body>
</html>

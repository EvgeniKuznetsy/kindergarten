<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>@yield('title')</title>
</head>
<body>
<header>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <div class="container-fluid">

        <div class="navb-logo">
            <a href="{{asset('main')}}"><img src="{{asset('image/logo.png')}}" alt="Logo"></a>


        </div>
        <div class="navb-logo mr-2"><img id="specialButton" style="cursor:pointer;" src="https://lidrekon.ru/images/special.png"
                                    alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ"/></div>

        <div class="navb-items d-none d-xl-flex">

            <div class="item">
                <a href="{{asset('about')}}">Об организации</a>
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
                    <div class="item"><a href="{{route('home')}}">Регистрация/Авторизация</a>
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
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa-solid fa-xmark"></i></button>
                    </div>

                    <div class="modal-body">
                        @csrf
                        @auth()
                            @if(auth()->user()->role==='admin')
                                <div class="modal-line">
                                    <i class="fa-solid fa-image-portrait"></i><a href="{{asset('admin')}}">Админ
                                        панель</a></div>
                            @endif
                        @endauth
                        <div class="modal-line">
                            <i class="fa-solid fa-house"></i><a href="{{asset('main')}}">Главная</a>
                        </div>
                        <div class="modal-line">
                            <i class="fa-solid fa-circle-info"></i><a href="{{asset('about')}}">Об организации</a>
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

                            <a target="_blank" href="https://vk.com/guravuhka200223923" class="text-center"><i
                                    class="fa-brands fa-vk mr-3"></i>Детский сад №103"ЖУРАВУШКА</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

</header>
<div class="background">
<div class="main_back">
    <div class="main">
        <div class="text-center h2 mb-2 pt-2">Mуниципальное бюджетное дошкольное образовательное учреждение города Кургана Детский сад комбинированного вида № 103
            «Журавушка»</div>

    @yield('content')
        <div class="div" style="height: 100px; width: 100%"></div>
        <div class="container-fluid mt-5 tb-5 pb-5 tb-5">

            <div class="row banner"><a class="col-md-4 ml-md-auto col-sm-6 mx-auto d-flex justify-content-center m-1" href=""><img src="{{asset('image/banner/minprosvet_8dc81.jpg')}}" alt=""></a>
                <a class="col-md-4 ml-md-auto col-sm-6 mx-auto d-flex justify-content-center m-1" href=""><img style="max-width: 100%" src="{{asset('image/banner/bus-gov-ru.gif')}}" alt=""></a>
                <a class="col-md-4 ml-md-auto col-sm-6 mx-auto d-flex justify-content-center m-1" href=""><img style="max-width: 100%" src="{{asset('image/banner/crf.jpg')}}" alt=""></a>
                <a class="col-md-4 ml-md-auto col-sm-6  d-flex justify-content-center mt-3" href=""><img style="max-width: 100%" src="{{asset('image/banner/deti.jpg')}}" alt=""></a>
                <a class="col-md-8 ml-md-auto col-sm-6 d-flex justify-content-center mt-3" href=""><img style="max-width: 100%" src="{{asset('image/banner/corr.jpg')}}" alt=""></a>
            </div>
            <div class="row mt-5 banner">
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="{{asset('image/banner/1.png')}}" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="{{asset('image/banner/2.png')}}" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="{{asset('image/banner/3.png')}}" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="{{asset('image/banner/04.jpg')}}" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="{{asset('image/banner/05.jpg')}}" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="{{asset('image/banner/05.jpg')}}" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="{{asset('image/banner/6.jpg')}}" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="{{asset('image/banner/8.jpg')}}" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="{{asset('image/banner/9.png')}}" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="{{asset('image/banner/10.jpg')}}" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="{{asset('image/banner/11.jpg')}}" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="{{asset('image/banner/12.jpg')}}" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="{{asset('image/banner/13.png')}}" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="{{asset('image/banner/14.png')}}" alt=""></a>


            </div>
            <div class="text-center">Горячая линия" по противодействию коррупции</div>
            <div class="text-center">8 (3522) 42-65-51</div>
            <div class="text-center mt-2">"Горячая линия" по вопросам незаконных сборов денежных средств в образовательных организациях</div>
            <div class="text-center">8 (3522) 64-02-81</div>
            <div class="text-center mt-2">"Горячая линия" Департамента образования и науки Курганской области.</div>
            <div class="text-center"> 8 (3522) 25-48-12      8 (3522) 25-48-31
            </div>
        </div>

    </div>
</div>
</div>
<footer class="d-flex  flex-wrap justify-content-between align-items-center py-3 position-sticky  ">
    <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>
        <a target="_blank" href="https://vk.com/guravuhka200223923" class="text-center"><i
                class="fa-brands fa-vk mr-3"></i>Детский сад №103"ЖУРАВУШКА</a>
    </div>



</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js
    "></script>
<script src="https://lidrekon.ru/slep/js/jquery.js"></script>
<script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>
</body>
</html>

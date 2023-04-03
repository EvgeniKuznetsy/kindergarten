@extends('layouts.main')
@section('content')
    <div class="main">
    <div class="w-500 text-center mt-5">
        <h1>Наши здания</h1>
    </div>

    <div id="carouselExampleDark" class="carousel carousel-dark slide w-50 mx-auto mh-50 mt-5 mb-5"  data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleDark" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleDark" data-slide-to="1"></li>
            <li data-target="#carouselExampleDark" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('image/img.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('image/logo.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('image/img.png')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators bg-dark" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only bg-dark">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators " role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only bg-dark">Next</span>
        </a>
    </div>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-auto position-sticky top-100 border-top bg-dark">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted">© 2023</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#vkontakte"></use></svg></a></li>

        </ul>
    </footer>

@endsection



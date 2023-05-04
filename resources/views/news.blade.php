@extends('layouts.main')

@section('title',"Новости")
@section('content')
    <div class="main">

            <div class="text-center">
                <h1>Новости</h1>
                @forelse($news as $index => $news)
                    <div class="card-wrap-new">
                        <div class="card-image-new">
                            <img src="{{$news->image}}"alt="{{$news->title}}">
                        </div>
                        <div class="card-text-new">
                            <p>{{$news->created_at}}</p>
                            <h2>{{$news->title}}</h2>
                            <p>{{$news->text}}</p>
                        </div>
                    </div>
                @empty
                    <h2>Новостей нет</h2>
                @endforelse
            </div>

    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-auto position-sticky top-100 border-top bg-dark">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#vkontakte"></use></svg></a></li>

        </ul>
    </footer>

@endsection

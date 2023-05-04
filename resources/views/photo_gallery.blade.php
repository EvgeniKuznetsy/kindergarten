@extends('layouts.main')
@section('title',"Фотогалерея")
@section('content')
    <div class="main">
        <div class="main">

            <div class="text-center">
                <h1>Фотогалерея</h1>
                <div class="card-wrap-new container">
                    <div class="card-text-new row">
                @forelse($title as $index => $title)
                            <div class="col-4 mt-4 {{$index=false}}">


                            @foreach ($photo as $object)

                                @if($object->title_photo_gallery_id==$title->id && $index==false)
                                    <div class="{{$index=true}}">

                                        <a href="{{route('photo',$title->id)}}" class="text-decoration-none"><h2 class="">{{$title->title}}
                                            </h2><img src="{{$object ->image}}" class="width_image " >
                                        </a>

                                    </div>

                                @endif
                            @endforeach

                            </div>
                @empty
                    <h2>Фотографий нет</h2>
                @endforelse
                    </div>
                </div>
            </div>

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

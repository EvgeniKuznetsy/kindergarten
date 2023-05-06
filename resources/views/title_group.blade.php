@extends('layouts.main')
@section('title',"Наши группы")
@section('content')
    <div class="main container">

            <h1 class='text-center m-4'>Фотогалерея</h1>

                <div class="row mt-3">
                    @forelse($group as $index =>$title)
                        <div class="{{$index=false}} col-md-4 col-sm-12">


                            @foreach ($educator as $object)

                                @if($object->educator_group_id==$title->id && $index==false)
                                    <div class="mt-3 text-center {{$index=true}}">
                                        <div class="p-3 mb-2 bg-danger text-black p-3">
                                        <a href="{{route('educator',$title->id)}}" class="text-decoration-none ">
                                            <img src="{{$object ->image}}" class="" style="max-width: 300px;max-height: 180px">

                                        </a>
                                        <h2 class="">{{$title->title}}
                                        </h2>
                                        </div>
                                    </div>

                                @endif
                            @endforeach
                            </div>
                    @empty
                        <h2>Фотографий нет</h2>
                    @endforelse
                </div>
    </div>


    <footer
        class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-auto position-sticky top-100 border-top bg-dark">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#">
                    <svg class="bi" width="24" height="24">
                        <use xlink:href="#vkontakte"></use>
                    </svg>
                </a></li>

        </ul>
    </footer>

@endsection

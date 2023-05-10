@extends('layouts.main')
@section('title',"Фотогалерея")
@section('content')

        <div class="container">
            <div class="text-center m-5"><h1>Фотогалерея</h1></div>
            <div class="row mt-3  ml-auto mr-auto">
                @forelse($title as $index =>$title)

                    <?php $index=false; ?>

                    @foreach($photo as $objects)

                        @if($objects ->image && $objects->title_photo_gallery_id==$title->id && $index==false)
                            <div class=" col-md-6 col-sm-12 mt-4 ">
                                <div class="mt-3 text-center {{$index=true}}">
                                    <div class="p-3 mb-2  text-black p-3">
                                        <a href="{{route('photo',$title->id)}}" class="text-decoration-none ">

                                            <img src="{{$objects ->image}}" class="img-fluid width: 100% \9" style="max-height: 300px">

                                        </a>
                                        <h2 class="">{{$title->title}}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                @empty
                    <h2>Фотографий нет</h2>
                @endforelse
            </div>


        </div>


@endsection

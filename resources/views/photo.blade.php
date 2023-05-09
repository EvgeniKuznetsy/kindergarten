@extends('layouts.main')
@section('title',"Фотогалерея")
@section('content')
    <div class="main">
        <div class="main">

            <div class="text-center container">
                @foreach ($title_name as $object)
                    <h2>{{ $object->title }}</h2>
                @endforeach

            </div>
            <div class="container">
                <div class="card-wrap-new row">

                @forelse($photo as $index => $photo)


                            <img src="{{$photo->image}}" class="width_image col-md-4 " >


                @empty

                @endforelse
                </div>
            </div>

        </div>
    </div>

@endsection

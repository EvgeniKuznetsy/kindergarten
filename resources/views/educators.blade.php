@extends('layouts.main')
@section('title',"Наши группы")
@section('content')
    <div class="main">

        <div class="text-center container">
            @foreach ($group as $object)
                <h2>{{ $object->title }}</h2>
            @endforeach

        </div>

        <div class="container">
            <div class="card-wrap-new row">

                    @forelse($educators as $index => $educators)

                        <img src="{{$educators->image}}" class="width_image col-md-4 " >
                        {{$educators->full_name}}

                    @empty

                    @endforelse

            </div>
        </div>
    </div>

@endsection

@extends('layouts.main')
@section('title',"Главная")
@section('content')

<div class="container-fluid mt-5">
    <div class="text-center h1">
        Последние новости

    </div>
    <div class="row mt-5">
        @foreach($news as $index)

        <div class="col-md-4 col-sm-12 ">
            <h2 class="text-center">{{$index->title}}</h2>
            <div class="d-flex justify-content-center"><img class="" style="max-height: 200px" src="{{$index->image}}" alt=""></div>
            <p class="truncate-text text-center mt-2">{{$index->text}}</p>

        </div>

        @endforeach
    </div>


</div>

@endsection



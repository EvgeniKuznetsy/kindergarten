@extends('layouts.main')

@section('title',"Новости")
@section('content')
    <div class="container">

            <div class="text-center">
                <h1 class="m-5">Новости</h1></div>
                @forelse($news as $index => $news)
                    <div class="row mt-5">
                        <div class="col-md-4 ">
                            <img  class="mt-5 img-fluid width: 100% \9 h-75 " src="{{$news->image}}"alt="{{$news->title}}">
                        </div>

                        <div class="col-md-8 mb-5">

                            <div class="h2 text-center">{{$news->title}}</div>

                            <div class="h3 truncate-text-news ">{{$news->text}}</div>
                            <div class="h2  mt-5 text-right">Добавлено {{$news->created_at}}</div>
                        </div>
                @empty
                    <h2>Новостей нет</h2>
                @endforelse
            </div>
    </div>


@endsection

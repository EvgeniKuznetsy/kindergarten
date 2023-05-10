@extends('layouts.main')

@section('title',"Новости")
@section('content')
    <div class="container">

            <div class="text-center">
                <h1 class="m-5">Новости</h1></div>
                @forelse($news as $index => $news)
                    <div class="row">
                        <div class="col-md-6">
                            <img  class="img-fluid width: 100% \9 h-75 " src="{{$news->image}}"alt="{{$news->title}}">
                        </div>

                        <div class="col-md-6">
                            <div class="h2">{{$news->title}} {{$news->created_at}}</div>

                            {{$news->text}}
                        </div>
                @empty
                    <h2>Новостей нет</h2>
                @endforelse
            </div>
    </div>


@endsection

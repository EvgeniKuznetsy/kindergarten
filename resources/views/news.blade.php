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


@endsection

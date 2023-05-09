@extends('layouts.main')

@section('title',"Родителям")
@section('content')
    <div class="main">
        <div class="container">
        <div class="text-center">
            <h1>Родителям</h1>
            @forelse($parents as $index => $parents)
                <div class="card-wrap-new">
                    <div class="card-image-new">
                        <img src="{{$parents->image}}"alt="{{$parents->title}}" class="img-fluid width: 100% \9 h-75">
                    </div>
                    <div class="card-text-new">
                        <p>{{$parents->created_at}}</p>
                        <h2>{{$parents->title}}</h2>
                        <p>{{$parents->text}}</p>
                        <p><a href="{{$parents->document}}">Просмотр pdf</a></p>
                    </div>
                </div>
            @empty
                <h2>Информации для родителей нет</h2>
            @endforelse
        </div>
        </div>
    </div>

@endsection

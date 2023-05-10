@extends('layouts.main')

@section('title',"Родителям")
@section('content')
    <div class="container">

        <div class="text-center">
            <h1 class="m-5">Новости</h1></div>
        @forelse($parents as $index => $parents)
            <div class="row">
                <div class="col-md-6">
                    <img src="{{$parents->image}}"alt="{{$parents->title}}" class="img-fluid width: 100% \9 h-75">
                </div>

                <div class="col-md-6">
                    <div class="h2">{{$parents->title}}
                        <p class="mt-2">{{$parents->created_at}}</p>
                        <p><a href="{{$parents->document}}">Просмотр pdf</a></p></div>

                    <p class="truncate-text" style="max-height: 500px">{{$parents->text}}</p>
                </div>
                @empty
                    <h2>Новостей нет</h2>
                @endforelse
            </div>
    </div>




@endsection

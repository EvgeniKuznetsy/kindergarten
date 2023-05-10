@extends('layouts.admin')

@section('content')
    <div class="text-center h1">Новости</div>
    <div class="container">
        <a href="{{route('admin.news.createPage')}}" class="btn btn-primary">Создать</a>
        <div class="card-container mt-3">
            @forelse($news as $post)
                <div class="card">
                    <img src="{{$post->image}}" class="col-5 width_image" alt="{{$post->title}}">

                        <div class="h2">{{$post->title}}</div>
                        <div class="">{{$post->text}}</div>
                        <div class="mt-2">
                            <a href="{{route('admin.news.updatePage', $post)}} " class="btn btn-primary">Редактировать</a>
                            <a href="{{route('admin.news.delete', $post)}}" class="btn btn-danger">Удалить</a>
                        </div>

                </div>
            @empty
                <div class="alert" role="alert">
                    Новостей нет
                </div>
            @endforelse
        </div>
    </div>
@endsection

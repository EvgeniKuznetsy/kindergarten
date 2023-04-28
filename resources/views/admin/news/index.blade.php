@extends('layouts.admin')

@section('content')

    <div class="admin-content">
        <a href="{{route('admin.news.createPage')}}" class="btn btn-primary">Создать</a>
        <div class="card-container">
            @forelse($news as $post)
                <div class="card">
                    <img src="{{$post->image}}" class="col-5 width_image" alt="{{$post->title}}">
                    <div class="card-text">
                        <p class="">{{$post->title}}</p>
                        <p class="">{{$post->text}}</p>
                        <a href="{{route('admin.news.updatePage', $post)}}" class="btn btn-primary">Редактировать</a>
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

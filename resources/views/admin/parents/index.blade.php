@extends('layouts.admin')

@section('content')
    <div class="text-center h1">Для родителей</div>
    <div class="container">
        <a href="{{route('admin.parents.createPage')}}" class="btn btn-primary">Создать</a>
        <div class="card-container mt-3">
            @forelse($parents as $post)
                <div class="card">
                    <img src="{{$post->image}}" class="col-5 width_image" alt="{{$post->title}}">
                    <div class="card-text">
                        <p class="h2">{{$post->title}}</p>
                        <p class="">{{$post->text}}</p>
                       <div class="mb-3"><a href="{{$post->document}}">Просмотр pdf файлов</a></div>
                        <a href="{{route('admin.parents.updatePage', $post)}}" class="btn btn-primary">Редактировать</a>
                        <a href="{{route('admin.parents.delete', $post)}}" class="btn btn-danger">Удалить</a>
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

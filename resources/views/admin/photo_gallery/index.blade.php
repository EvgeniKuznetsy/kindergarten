@extends('layouts.admin')

@section('content')

    <div class="admin-content">
        <a href="{{route('admin.title_photo_gallery.createPage')}}" class="btn btn-primary mb-2">Создать</a>
        <div class="card-container">
                @forelse($title_photo_galleries as $gallery)
                <div class="card">
                    <div class="card-text">

                        <a href="{{route('admin.photo_gallery.index',$gallery->id)}}">{{$gallery->title}}</a>

                        <div class="mt-2 mb-2"></div><a href="{{route('admin.title_photo_gallery.delete', $gallery)}}" class="btn btn-danger">Удалить</a>
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

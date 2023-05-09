@extends('layouts.admin')
@section('title', 'Создание')

@section('content')
    <div>
        <h2 class="mt-2">Редактировать название альбома</h2>
        <form method="post" action="{{route('admin.title_photo_gallery.edit', $gallery)}}" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="mb-3">
                <label class="form-label">Название группы</label>
                <input required  type="text" name="title" value="{{$gallery->title}}" class="form-control">
            </div>


            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection

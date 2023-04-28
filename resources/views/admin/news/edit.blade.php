@extends('layouts.admin')
@section('title', 'Создание')

@section('content')
    <div>
        <h2 class="mt-2">Редактировать новость</h2>
        <form method="post" action="{{route('admin.news.edit', $news)}}" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="mb-3">
                <label class="form-label">Название</label>
                <input required value="{{$news->title}}" type="text" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Текст</label>
                <input required value="{{$news->text}}" type="text" name="text" class="form-control">
            </div>
            <div class="mb-3">
                <h5 class="mb-2">Изображение</h5>
                <input  name="image" type="file" accept="image/jpeg,image/png,image/jpg,image/bpm" class="form-control" id="inputGroupFile02">
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>
    </div>
@endsection

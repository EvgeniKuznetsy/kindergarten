@extends('layouts.admin')
@section('title', 'Создание')

@section('content')
    <div>
        <h2 class="mt-2">Редактировать профиля специалистов</h2>
        <form method="post" action="{{route('admin.educators.edit', $post)}}" enctype="multipart/form-data">

            @csrf
            <div class="mb-3">
                <h5 class="mb-2">ФИО</h5>
                <input required  type="text" name="full_name" class="form-control w-50" value="{{$post->full_name}}">
            </div>
            <div class="mb-3">
                <h5 class="mb-2">Изображение</h5>
                <div class="custom-file">

                    <input required value="{{$post->image}}" type="file" accept="image/jpeg,image/png,image/jpg,image/bpm" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Выберите изображение</label>
                </div>
            </div>

            <h5 class="mb-2">Должность</h5>
            <input class="educator form-control " name="educator"
                   placeholder="Выбирете из существующих или напишите" value="{{$post->educator}}">


            <div class="form-check mb-3 mt-2">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Примите условия и соглашения
                </label>

                <div class="invalid-feedback">
                    Вы должны принять перед отправкой.
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Обновить</button>

        </form>
    </div>
@endsection

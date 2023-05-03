@extends('layouts.admin')
@section('title', 'Создание')

@section('content')
    <div>
        <h2 class="mt-2">Создать новость</h2>
        <form method="post" action="{{route('admin.post.title_photo_gallery.create')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Название</label>
                <input required  type="text" name="title" class="form-control">
            </div>


            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection

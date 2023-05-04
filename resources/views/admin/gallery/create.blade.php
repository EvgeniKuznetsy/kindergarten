@extends('layouts.admin')
@section('title', 'Создание')

@section('content')
    <div>
        <h2 class="mt-2">Создать новость</h2>
        <form method="post" action="{{route('admin.post.photo_gallery.create')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">

                <label id="custom-file">Выберите файл</label>
                <input type="file" name="image" class="form-control w-auto" id="custom-file">


                <input required type="hidden" name="title_photo_gallery_id" value="{{$id}}">

            </div>


            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection

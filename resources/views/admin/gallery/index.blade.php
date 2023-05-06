@extends('layouts.admin')

@section('content')

    <div class="admin-content">
        <div class="text-center">@foreach ($titel_photo_gallery as $title)<h1>{{$title->title}}</h1>@endforeach</div>




        <div class="card-container mt-2">
                @forelse($photo_gallery as $photo)
                <div class="card">
                    <div class="card-text">
                        <img src="{{$photo->image}}" alt="" class="col-5 width_image">

                        <div class="mt-5"><a href="{{route('admin.photo_gallery.delete', $photo)}}" class="btn btn-danger">Удалить</a></div>
                    </div>
                </div>
            @empty
                <div class="alert" role="alert">
                    Новостей нет
                </div>
            @endforelse
            <a href="{{route('admin.photo_gallery.createPage',$id)}}" class="btn btn-primary">Создать</a>
        </div>
    </div>
@endsection

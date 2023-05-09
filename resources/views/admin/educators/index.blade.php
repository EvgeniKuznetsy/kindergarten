@extends('layouts.admin')

@section('content')

    <div class="admin-content">
        <a href="{{route('admin.educators.createPage',$id)}}" class="btn btn-primary">Создать</a>
        <div class="card-container">
            @forelse($educators as $post)

                <div class="card">
                    <div class="card-text">


                        <p>
                            <img src="{{$post->image}}" alt="" class="col-1 width_image">
                        </p>
                        <p class="">{{$post->full_name}}</p>
                        <p>{{$post->educator}}</p>


                        <a href="{{route('admin.educators.updatePage', $post)}}" class="btn btn-danger">Редактировать</a>
                        <a href="{{route('admin.educators.delete', $post)}}" class="btn btn-danger">Удалить</a>
                    </div>
                </div>
            @empty
                <div class="alert" role="alert">
                    Специалисты не добавлены
                </div>
            @endforelse
        </div>
    </div>
@endsection

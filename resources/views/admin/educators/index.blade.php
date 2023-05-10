@extends('layouts.admin')

@section('content')
    <div class="text-center h1">@foreach($group as $index){{$index->title}}@endforeach</div>
    <div class="container">
        <a href="{{route('admin.educators.createPage',$id)}}" class="btn btn-primary">Создать</a>
        <div class="row mt-5 center-block w-100 ">
            @forelse($educators as $post)

                <div class="col-md-6 col-sm-12 mb-4">
                        <p>
                            <img src="{{$post->image}}" alt="" class="col-3 width_image">
                        </p>
                        <p>ФИО: {{$post->full_name}}</p>
                        <p>Специальность: {{$post->educator}}</p>


                        <a href="{{route('admin.educators.updatePage', $post)}}" class="btn btn-danger">Редактировать</a>
                        <a href="{{route('admin.educators.delete', $post)}}" class="btn btn-danger">Удалить</a>
                </div>
            @empty
                <div class="alert" role="alert">
                    Специалисты не добавлены
                </div>
            @endforelse
        </div>
    </div>
@endsection

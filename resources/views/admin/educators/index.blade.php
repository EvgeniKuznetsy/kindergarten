@extends('layouts.admin')

@section('content')

    <div class="admin-content">
        <a href="{{route('admin.educators.createPage')}}" class="btn btn-primary">Создать</a>
        <div class="card-container">
            @forelse($educators as $post)
                <div class="card">
                    <div class="card-text">
                        <p class="">{{$post->name}}</p>

{{--                        <a href="{{route('admin.groups.educators.delete', $educators)}}" class="btn btn-danger">Удалить</a>--}}
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

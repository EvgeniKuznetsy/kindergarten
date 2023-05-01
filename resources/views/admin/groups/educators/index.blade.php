@extends('layouts.admin')

@section('content')

    <div class="admin-content">
        <a href="{{route('admin.groups.createPage')}}" class="btn btn-primary">Создать</a>
        <div class="card-container">
            @forelse($groups as $post)
                <div class="card">
                    <div class="card-text">
                        <p class="">{{$post->name}}</p>

                        <a href="{{route('admin.groups.delete', $post)}}" class="btn btn-danger">Удалить</a>
                    </div>
                </div>
            @empty
                <div class="alert" role="alert">
                    Групп нет
                </div>
            @endforelse
        </div>
    </div>
@endsection

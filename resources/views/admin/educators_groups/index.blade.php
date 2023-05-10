@extends('layouts.admin')

@section('content')
    <div class="text-center h1">Группы</div>
    <div class="container">
        <a href="{{route('admin.educators_groups.createPage')}}" class="btn btn-primary mb-2">Создать</a>
        <div class="card-container">
            @forelse($educators_groups as $groups)
                <div class="card">
                    <div class="card-text">

                        <a href="{{route('admin.educators.index',$groups->id)}}" class="h2">Название группы: {{$groups->title}}</a>

                        <div class="mt-2 mb-2"></div><a href="{{route('admin.educators_groups.updatePage', $groups)}}" class="btn btn-primary">Редактировать</a>
                        <a href="{{route('admin.educators_groups.delete', $groups)}}" class="btn btn-danger">Удалить</a>

                    </div>
                </div>
            @empty
                <div class="alert" role="alert">
                    Новостей нет
                </div>
            @endforelse
        </div>
    </div>
@endsection

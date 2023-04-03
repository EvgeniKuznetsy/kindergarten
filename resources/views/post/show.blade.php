@extends('layouts.main')
@section('content')

    <div class="w-75 mx-auto">
       <div><h1>{{$post->id}}.{{$post->title}}</h1></div>
       <div><h1>{{$post->content}}</h1></div>
        <div><h1><a href="{{route('post.edit',$post->id)}}">Обновить</a></h1></div>
        <div>
            <form action="{{route('post.delete',$post->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить">

            </form>
        </div>
        <div><h1><a href="{{route('post.index')}}">Назад</a></h1></div>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-auto position-sticky top-100 border-top bg-dark">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#vkontakte"></use></svg></a></li>

        </ul>
    </footer>
@endsection

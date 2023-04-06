@extends('layouts.main')


    <div class="w-75 mx-auto">
        <form action="{{route('post.update',$post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3 w-50">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{$post->titel}}" placeholder="title" >
            </div>
            <div class="mb-3 w-50">
                <label for="content" class="form-label">Content</label>
                <textarea type="text" name="content" class="form-control" id="content"  placeholder="Content">{{$post->content}}</textarea>
            </div>
            <div class="mb-3 w-50">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="image"  placeholder="image" value="{{$post->image}}">
            </div>



            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{route('post.index')}}"><h1>Назад</h1></a>
        </form>
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

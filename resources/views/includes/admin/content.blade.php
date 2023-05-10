@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="text-center"><h1>Главная</h1></div>
        <div class="row">
            @foreach($news as $index)
                <div class="col-md-4 col-sm-12 m-3 p-4 ml-auto mr-auto p-5">
                    <div class="text-center"><a href="{{route('admin.news.index')}}"><h3>Новости</h3></a></div>
                    <img  src="{{$index->image}}" alt="" class="img-fluid width: 100% \9 h-75 ml-auto mr-auto">
                    <div class="mt-4 mb-2">Название: "{{$index->title}}"</div>
                    <div class="mt-2 mb-2 text-truncate" style="max-height: 300px">{{$index->text}}</div>

                </div>
            @endforeach
            @foreach($parents as $index)
                <div class="col-md-4  col-sm-12 m-3 p-4 ml-auto mr-auto text-truncate p-5">
                    <div class="text-center"><a href="{{route('admin.parents.index')}}"><h3>Для родителей</h3></a></div>
                    <img src="{{$index->image}}" alt="" class="img-fluid width: 100% \9 h-75">
                    <div class="mt-4 mb-2">Название: "{{$index->title}}"</div>

                    <div class="mt-2 mb-2 text-truncate">{{$index->text}}</div>
                </div>
            @endforeach
            <div class="col-md-6 col-sm-12 m-3 ml-auto mr-auto">

                <div class="text-center mt-5 mb-4">
                    <a href="{{route('admin.educators_groups.index')}}"><h3>К группам</h3></a>

                </div>

                @foreach($group as $index)
                    <div class="text-center"><a href="{{route('admin.educators.index',$index->id)}}"class="text-dark">Группы: группы №{{$index->id}}
                            Название:"{{$index->title}}</a></div>
                @endforeach

            </div>
                <div class="col-md-6 col-sm-12 m-3 ml-auto mr-auto">
                    <div class="text-center mt-5 mb-4">
                        <a href="{{route('admin.title_photo_gallery.index')}}"><h3>К альбомам</h3></a>

                    </div>
                    @foreach($title as $index)
                        <a href="{{route('admin.photo_gallery.index',$index->id)}}">
                            <div class="text-center text-dark">Номер альбома №{{$index->id}} </div>
                            <div class="text-center mb-2 text-dark">Название альбома:"{{$index->title}}"</div>
                        </a>
                    @endforeach
                </div>
        </div>
    </div>

@endsection

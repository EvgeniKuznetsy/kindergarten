@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="text-center"><h1>Главная</h1></div>
        <div class="row">
            @foreach($news as $index)
                </a><div class="col-md-4 col-sm-12 m-3">
                    <div class="text-center"><a href="{{route('admin.news.index')}}">Новости</a></div>
                    <img src="{{$index->image}}" alt="" class="img-fluid width: 100% \9 height: 100%">
                    <div>{{$index->title}}</div>
                </div>
            @endforeach
            @foreach($parents as $index)
                <div class="col-md-4 col-sm-12 m-3 ">
                    <div class="text-center "><a href="{{route('admin.parents.index')}}">Для родителей</a></div>
                    <img src="{{$index->image}}" alt="" class="img-fluid width: 100% \9 height: 100%">
                    <div>{{$index->title}}</div>
                </div>
            @endforeach
            <div class="col-md-4 col-sm-12 m-3">

                <div class="text-center mt-5 mb-4">
                    <a href="{{route('admin.educators_groups.index')}}">К группам</a>

                </div>
                @foreach($group as $index)
                    <div class="text-center"><a href="{{route('admin.educators.index',$index->id)}}">Группы: группы №{{$index->id}}
                            Название:"{{$index->title}}</a></div>
                @endforeach


            </div>
                <div class="col-md-4 col-sm-12 m-3">
                    <div class="text-center mt-5 mb-4">
                        <a href="{{route('admin.title_photo_gallery.index')}}">К альбомам</a>

                    </div>
                    @foreach($title as $index)
                        <a href="{{route('admin.photo_gallery.index',$index->id)}}">
                            <div class="text-center">Номер альбома №{{$index->id}} </div>
                            <div class="text-center mb-2">Название альбома:"{{$index->title}}"</div>
                        </a>
                    @endforeach
                </div>
        </div>
    </div>

@endsection

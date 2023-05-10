@extends('layouts.main')
@section('title',"Наши группы")
@section('content')
    <div class="container">

        <h1 class='text-center mb-4'>Группы</h1>

        <div class="row mt-3  ml-auto mr-auto">
            @forelse($group as $index =>$title)

                    <?php $index=false; ?>

                    @forelse ($educator as $objects=>$object)

                        @if($object ->image && $object->educator_group_id==$title->id && $index==false)
                            <div class=" col-md-6 col-sm-12 mt-4 ">
                                <div class="mt-3 text-center {{$index=true}}">
                                    <div class="p-3 mb-2  text-black p-3">
                                        <a href="{{route('educator',$title->id)}}" class=" text-decoration-none ">
                                            <h2 class="mb-3">{{$title->title}}
                                            </h2>
                                            <img src="{{$object ->image}}" class="img-fluid width: 100% \9 h-75">

                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endif

                    @empty
                        <h2>Нет группы</h2>
                    @endforelse

            @empty
                <h2>Фотографий нет</h2>
            @endforelse
        </div>
    </div>




@endsection

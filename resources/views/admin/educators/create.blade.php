@extends('layouts.admin')
@section('title', 'Создание')

@section('content')

    <div class="container">

        <form method="post" action="{{route('admin.post.educators.create')}}"  class="p-3 form" enctype="multipart/form-data">

            <h2 class="mt-2 p-2">Добавить специалистов</h2>
            @csrf
            <div class="mb-3">

                <h5 class="mb-2">ФИО</h5>
                <input required type="text" name="full_name" class="form-control w-50">
            </div>
            <input type="file" name="file_task[]" multiple class="custom-file-input">
            <label class="custom-file-label">Выберите файл</label>
            <div class="mb-3">
                <h5 class="mb-2">Изображение</h5>
                <div class="custom-file">

                    <input required name="image" type="file" accept="image/jpeg,image/png,image/jpg,image/bpm" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Выберите изображение</label>
                </div>
            </div>

            <h5 class="mb-2">Должность</h5>
            <input class="educator form-control " name="educator"
                   placeholder="Выбирете из существующих или напишите" value="Воспитатель">


            <div class="form-check mb-3 mt-2">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Примите условия и соглашения
                </label>

                <div class="invalid-feedback">
                    Вы должны принять перед отправкой.
                </div>
            </div>
            <div> <button type="submit" class="btn btn-primary mt-2">Создать анкеты</button>
                <input type="button" id="btnEvent" value="Добавить анкет" class="btn btn-primary mt-2 ml-2" ></div>
            <input required type="hidden" name="educator_group_id" value="{{$id}}">

        </form>


        <p></p>
    </div>
    <script>

        let btnEvent=document.getElementById('btnEvent').addEventListener('click', buttonEvent);
        function buttonEvent(){
            let btnForm=document.querySelector(".educator")
            btnForm.insertAdjacentHTML('afterend',`<h2 class="mt-2 p-2">Добавить специалистов</h2>
            @csrf
            <div class="mb-3">

                <h5 class="mb-2">ФИО</h5>
                <input required type="text" name="title" class="form-control w-50">
            </div>
            <div class="mb-3">
                <h5 class="mb-2">Изображение</h5>
                <div class="custom-file">
                    <input required name="image" type="file" accept="image/jpeg,image/png,image/jpg,image/bpm" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Выберите изображение</label>
                </div>
            </div>

            <h5 class="mb-2">Должность</h5>
            <input class="form-control " name="educator"
                   placeholder="Выбирете из существующих или напишите" value="Воспитатель">



`);
        }

    </script>
@endsection

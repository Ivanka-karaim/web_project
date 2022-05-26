@extends('app')
@section('title', 'Додавання картини')
@section('content')
    @isset($status)
        <div class="alert alert-success" role="alert">
            Картину було додано
        </div>
    @endisset
    <form action="{{url('/addPaint')}}" class="class_form" method="POST">
        @csrf
        <div class="form_block">
            <label class="form-label">Назва</label>
            <input type="text" class="form-control" placeholder="Введіть назву" name="name" required>
        </div>
        <div class="form_block">
            <label class="form-label">Рік коли намальована</label>
            <input type="number" class="form-control" placeholder="Введіть рік" name="year_drawn" required>
        </div>
        <div class="form_block">
            <label class="form-label">Фото</label>
            <input type="text" class="form-control" placeholder="Введіть назву фото" name="photo" required>
        </div>
        <div class="form_block">
            <label class="form-label">Художник</label>
            <select class="form-select"  name="artist">
                <option selected>Виберіть художника</option>
                @foreach($artists as $artist)
                    <option value="{{$artist->id}}">{{$artist->firstname.' '.$artist->lastname}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
            <button type="submit">Створити нову картину</button>
        </div>
    </form>
@endsection


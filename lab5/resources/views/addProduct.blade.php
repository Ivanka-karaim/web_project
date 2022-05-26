@extends('layout.app')
@section('title', 'Додавання продукту')
@section('content')
    @isset($status)
        <div class="alert alert-success" role="alert">
            Продукт було додано
        </div>
    @endisset
    <form action="{{url('/add_product')}}" class="class_form" method="POST">
        @csrf
        <div class="form_block">
            <label class="form-label">Назва товару</label>
            <input type="text" class="form-control" placeholder="Введіть назву" name="title" required>
        </div>
        <div class="form_block">
            <label class="form-label">Ціна</label>
            <input type="number" class="form-control" placeholder="Введіть ціну" name="price" required>
        </div>
        <div class="form_block">
            <label class="form-label">Категорія</label>
            <select class="form-select"  name="category" required>
                <option selected>Виберіть категорію товару</option>
                @foreach($categories as $key=>$category)
                    <option value="{{$key}}">{{$category}}</option>
                @endforeach
            </select>
        </div>
        <div class="form_block">
            <label class="form-label">Опис товару</label>
            <input type="text" class="form-control"  name="description" required>
        </div>
        <div class="col-12">
            <button type="submit">Створити новий продукт</button>
        </div>
    </form>
@endsection

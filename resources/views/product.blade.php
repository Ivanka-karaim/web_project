@extends('layout.app')
@section('title', $product->title)
@section('content')
    @if($product->id)
        <div class="my_products">
            <h1>{{$product->title}}</h1>
            <h2>Ціна {{$product->price}}</h2>
            <h2>Категорія {{$product->category}}</h2>
            <p>Опис {{$product->description}}</p>
            </div>
    @else
        @component('errors')
            Помилка... Тут пусто...
        @endcomponent
    @endif
@endsection


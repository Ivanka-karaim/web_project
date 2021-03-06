@extends('layout.app')
@section('title', 'Товари')
@section('content')
    @if($products)
        <h1>Усі товари за категорією: {{$name_category}}</h1>
            @foreach($products as $product)
                <div class="my_products">
                <h2>{{$product['title']}}</h2>
                <h2>Ціна {{$product['price']}}</h2>
                    <a  class="button" href="{{url('/all_products/'.$category.'/'.$product['id'])}}">Переглянути детальніше</a>
                </div>
            @endforeach
    @else
        @component('errors')
        Помилка... Тут пусто...
        @endcomponent
    @endif
@endsection

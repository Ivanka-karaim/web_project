@extends('layout.app')
@section('title', 'Каталог')
@section('content')
    <h1>Виберіть категорію товару</h1>

    <div class="categories">
        @foreach($categories as $key=>$category)
            <a href="{{url('/all_products/'. $key)}}" class="">{{$category}}</a>
        @endforeach
    </div>

@endsection

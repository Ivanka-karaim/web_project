@extends('app')
@section('title', 'Картини')
@section('content')
    <h1 class="text-center mb-4">Картини</h1>
    <div class="container">
        <div class="row">
        @foreach($paintings as $painting)

            <div class="col-md-4">
                <div class="photo">
                <img src="{{url($painting->photo)}}" alt="{{$painting->name}}" width="100%" height="400px">
                <a href="{{route('getPaintingsById',$painting->id)}}">
                    {{$painting->name}}</a>

            </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection

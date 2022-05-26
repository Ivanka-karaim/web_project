@extends('app')
@section('title', 'Картини')
@section('content')
    <h1 class="text-center mb-4">{{$painting->name}}</h1>
    <div class="container">
        <img src="{{url($painting->photo)}}" alt="" width="400px" height="400px">

            <div>
                @if($painting->artist)
                    <br>
                <p>Художник</p>
                <br>
                <a href="{{route('getArtistsById',$painting->artist->id)}}">
                    {{$painting->artist->firstname.' '.$painting->artist->lastname}}</a>
                @else
                    <br>
                    <p>Немає інформація про художника</p>
                @endif
                <br>
            </div>


    </div>
@endsection

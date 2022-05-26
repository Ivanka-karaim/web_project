@extends('app')
@section('title', 'Художники')
@section('content')
    <h1 class="text-center mb-4">Художники</h1>
    <div>
        @foreach($artists as $artist)
            <br>
            <div>
                <a href="{{route('getArtistsById',$artist->id)}}">
                    {{$artist->firstname.' '.$artist->lastname}}</a>
            </div>
        @endforeach

    </div>
@endsection

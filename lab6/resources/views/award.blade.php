@extends('app')
@section('title', 'Нагороди')
@section('content')
    <h1 class="text-center mb-4">{{$award->name}}</h1>
    <h3>{{$award->description}}</h3>
    <div>
        <br>
        @if($award->artists)
        <h2>Художники нагороджені цією нагородою</h2>
        @foreach($award->artists as $artist)
            <br>
            <div>
                <a href="{{route('getArtistsById',$artist->id)}}">
                    {{$artist->firstname.' '. $artist->lastname}}</a>
            </div>
        @endforeach
        @else
            <p>Немає інформації про художників</p>
        @endif

    </div>
@endsection

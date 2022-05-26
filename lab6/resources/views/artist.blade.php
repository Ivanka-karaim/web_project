@extends('app')
@section('title', 'Художники')
@section('content')
    <h1 class="text-center mb-4">{{$artist->firstname.' '.$artist->lastname}}</h1>
    <h2>{{($artist->year_death? 'Роки життя: '.$artist->year_birth.' - '.$artist->year_death:'Роки життя: '.$artist->year_birth.' - донині')}}</h2>
    <br>
    <div>
        <p>{{($artist->description? 'Опис: '.$artist->description: "")}}</p>
        @if($artist->paintings)
        <h2>Картини</h2>
        <br>
        <div class="row">

        @foreach($artist->paintings as $painting)
            <div class="col-6">
                <img src="{{url($painting->photo)}}" width="100%" height="500px">
                <a href="{{route('getPaintingsById',$painting->id)}}">{{$painting->name}}</a>
            </div>
        @endforeach

        </div>
        @endif
        @if($artist->awards)
        <h2>Нагороди</h2>
        @foreach($artist->awards as $award)
            <br>
            <div>
                <a href="{{route('getAwardsById',$award->id)}}">
                    {{$award->name}}</a>
            </div>
        @endforeach
        @endif

    </div>
@endsection

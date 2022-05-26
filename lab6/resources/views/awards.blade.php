@extends('app')
@section('title', 'Нагороди')
@section('content')
    <h1 class="text-center mb-4">Нагороди</h1>
    <div>
        @foreach($awards as $award)
            <br>
            <div>
                <a href="{{route('getAwardsById',$award->id)}}">
                {{$award->name}}</a>
            </div>
        @endforeach

    </div>
@endsection


@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            {{$heading}}<br>
            @foreach($players as $player)
                Player {{$player['id']}} is {{$player['name']}}<br>
            @endforeach
        </div>
    </div>
@endsection
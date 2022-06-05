@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            {{--$heading--}}<br>
            @foreach($records as $record)
                {{$loop->iteration}} {{$record->score}} {{$record->player_id}}
                {{$record->car}} {{$record->date_acheived}} {{$record->system}} {{$record->proof}}
                <br>
            @endforeach
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            {{--$heading--}}<br>
            @foreach($records as $record)
                {{--//show count(rank)--}}<br>
                {{$record->score}} {{$record->player_id}}
            @endforeach
        </div>
    </div>
@endsection
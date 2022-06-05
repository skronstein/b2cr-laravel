@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            {{-- {{$heading}}<br> --}}
            @foreach($categories as $category)
                {{-- @php dd($category); @endphp --}}
                <b>{{$category['category_name']}}</b>
                <br>
                @foreach($category['records'] as $record)
                    {{$loop->iteration}} {{$record->score}} {{$record->player_id}}
                    {{$record->car}} {{$record->date_acheived}} {{$record->system}} {{$record->proof}}
                    <br>
                @endforeach
                <br><br>
            @endforeach
        </div>
    </div>
@endsection
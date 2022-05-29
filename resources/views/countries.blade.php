@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            {{$heading}}<br>
            @foreach($countries as $country)
                Country {{$country['id']}} is {{$country['name']}}<br>
            @endforeach
        </div>
    </div>
@endsection
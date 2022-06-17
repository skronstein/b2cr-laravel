@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            {{-- {{$heading}}<br> --}}
            <div class="trackinfo">
                <div>
                    <img src="/images/tracks/{{$track_id}}.png" class="trackinfo-img">
                </div>
                <div class="tracktext"><div class="external"><div class="middle"><div class="internal">
                    {{$track_name}}
                </div></div></div></div>
                <div class="trackfilters">
                    <div class="filtergrid">
                       <div><button class="btn btn-lg btn-primary" id="traffic" onClick='toggleTraffic(); updateHalf()'>Traffic: Off</button></div>
                       <div><button class="btn btn-lg btn-primary" id="direction" onClick='toggleReverse(); updateAll()'>Direction: Forward</button></div>
                    </div>
                </div>
            </div>
            <br>
            @foreach($categories as $category)
                {{-- @php dd($category); @endphp --}}
                <b>{{$category['display_name']}}</b>
                <table>
                    <br>
                    @foreach($category['records'] as $record)
                        <tr>
                            <td class="img-cell"><img src="/images/medals/{{$loop->iteration}}.png" alt=""></td>
                            <td>{{$record->score}}</td>
                            <td>{{$record->player_id}}</td>
                            <td>{{$record->date_acheived}}</td>
                            <td class="img-cell"><img src="/images/cars/{{$record->car}}.png" alt=""></td>
                            <td>{{$record->system}}</td>
                            <td class="img-cell"><a href="{{$record->proof}}"><img src="/images/youtube2.png" alt=""></a></td>
                        </tr>    
                        <br>
                    @endforeach
                </table>
                <br><br>
            @endforeach
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            {{-- {{$heading}}<br> --}}
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
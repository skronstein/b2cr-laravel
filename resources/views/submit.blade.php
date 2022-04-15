@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            Submit a score
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="track" class="sr-only">Track</label>
                    <input type="text" name="track" id="track" placeholder="Track number" class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('track') border-red-500 @enderror" value="{{ old('track') }}">
                    @error('track')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <input style="width: 50px;" type="checkbox" name="reverse" id="reverse" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('reverse') }}">
                    <label for="reverse">Reverse</label>
                </div>
                
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="score" class="sr-only">Time/Score</label>
                    <input type="text" name="score" id="score" placeholder="Time or Score" class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('name') border-red-500 @enderror" value="{{ old('score') }}">
                    @error('score')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="date" class="sr-only">Date</label>
                    <input type="text" name="date" id="date" placeholder="Date" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('date') }}">
                </div>
                
                <div class="mb-4">
                    <label for="car" class="sr-only">Car</label>
                    <input type="text" name="car" id="car" placeholder="Car used" class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('name') border-red-500 @enderror" value="{{ old('car') }}">
                    @error('car')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <input style="width: 50px;" type="checkbox" name="emulator" id="emulator" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('emulator') }}">
                    <label for="emulator">Emulator</label>
                </div>

                <div class="mb-4">
                    <label for="proof" class="sr-only">Link</label>
                    <input type="text" name="proof" id="proof" placeholder="Video" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('proof') }}">
                    @error('proof')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Link</label>
                    <input type="text" name="email" id="email" placeholder="Email (optional)" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('email') }}">
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Submit Record</button>
                
            </form>
        </div>
    </div>
@endsection
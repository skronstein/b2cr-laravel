@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            Login
            <form action="{{ route('loginPage') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="userName" class="sr-only">username</label>
                <input type="text" name="userName" id="userName" class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('userName') border-red-500 @enderror">
                <div class="text-red-500">
                    @error('userName')Username required @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">password</label>
                <input type="password" name="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
            </div>

            <button type="submit" class="bg-red-500"></button>

            </form>
        </div>
    </div>
@endsection
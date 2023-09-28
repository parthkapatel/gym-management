@extends('master')

@section('title', 'Login')

@section('content')
    <div class="my-5 flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md w-80">
            <h1 class="text-2xl font-semibold mb-6">Login</h1>
            <form method="post" action="{{ route("users.store") }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 p-2 block w-full rounded border-gray-300">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 p-2 block w-full rounded border-gray-300">
                </div>
                <div class="mb-6">
                    <input type="submit" class="w-full py-2 px-4 text-white bg-blue-500 rounded hover:bg-blue-600" value="Login">
                </div>
            </form>
        </div>
    </div>
@endsection

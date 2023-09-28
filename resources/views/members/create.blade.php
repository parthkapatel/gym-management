@extends('master')

@section("title",'Create Member')

@section("content")
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">Create Member</h1>
        <div class="bg-white p-4 rounded shadow-md">
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route("members.store") }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="{{ old("name") }}" class="mt-1 p-2 block w-full rounded border-2 border-gray-300">
                </div>

                <div class="mb-4">
                    <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                    <input type="number" id="age" name="age" value="{{ old("age") }}" class="mt-1 p-2 block w-full rounded  border-2 border-gray-300">
                </div>

                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <textarea id="address" name="address" rows="3" class="mt-1 p-2 block w-full rounded  border-2 border-gray-300"></textarea>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="{{ old("email") }}" class="mt-1 p-2 block w-full rounded  border-2 border-gray-300">
                </div>

                <div class="mb-6">
                    <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                    <input type="tel" id="contact" name="contact" value="{{ old("contact") }}" class="mt-1 p-2 block w-full rounded  border-2 border-gray-300">
                </div>

                <div class="mb-4">
                    <input type="submit" class="w-full py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded" value="Create">
                </div>
            </form>
        </div>
    </div>
@endsection


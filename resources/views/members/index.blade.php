@extends('master')

@section("title",'Members')

@section("content")
    <div class="container mx-auto p-4">
        <div class="container flex justify-between mx-auto p-4">
            <h1 class="text-2xl font-semibold mb-4">Members List</h1>
            <a href="{{ route('members.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Create Member</a>
        </div>
        <div class="bg-white p-4 rounded shadow-md">
            @if(session()->has('message'))
                <div class="alert bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                    {{ session()->get('message') }}
                </div>
            @elseif(session()->has('error'))
                <div class="alert bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                    {{ session()->get('error') }}
                </div>
            @endif
            <table class="w-full">
                <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Age</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @if(!empty($members) && count($members) > 0)
                        @foreach($members as $member)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $member->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $member->age }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $member->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $member->contact }}</td>
                                <td class="px-6 py-4 flex justify-center">
                                    <a href="{{ route("members.edit",$member->id) }}" class="text-blue-500 hover:underline mr-2">Edit</a>
                                    <form method="POST" action="{{ route("members.destroy",$member->id) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <div class="form-group">
                                            <input type="submit" class="text-red-500 hover:underline" value="Delete">
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td  class="px-6 py-4 whitespace-nowrap text-center" colspan="6">No Records Found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

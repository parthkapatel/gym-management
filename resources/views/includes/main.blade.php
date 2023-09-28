@extends('master')

@section('title', 'GYM Management')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">Dashboard</h1>
        <div class="grid grid-cols-2 gap-4">
            <!-- Total Members -->
            @if(isset($totalMembers))
                <div class="bg-blue-500 text-white p-6 rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-xl font-semibold">Total Members</h2>
                            <p class="text-3xl font-bold">{{ $totalMembers }}</p>
                        </div>
                        <div class="bg-blue-600 p-4 rounded-full">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 19a6 6 0 01-6 6"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-2a4 4 0 014-4h14"/>
                            </svg>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Total Trainers -->
            @if(isset($totalTrainers))
                <div class="bg-green-500 text-white p-6 rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-xl font-semibold">Total Trainers</h2>
                            <p class="text-3xl font-bold">{{ $totalTrainers }}</p>
                        </div>
                        <div class="bg-green-600 p-4 rounded-full">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 19a6 6 0 01-6 6"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-2a4 4 0 014-4h14"/>
                            </svg>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

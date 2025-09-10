@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto py-12 px-6">
        <div class="bg-white p-8 rounded-2xl shadow">
            <h1 class="text-2xl font-bold mb-4">Profile</h1>
            <div class="mb-4">
                <span class="font-semibold">Name:</span> {{ $user->name }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Email:</span> {{ $user->email }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Role:</span> {{ $user->role }}
            </div>
            {{-- Logout moved to navbar for consistency --}}
        </div>
    </div>
@endsection

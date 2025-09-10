@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-cream py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-2xl shadow-lg">
            <div>
                <h2 class="mt-2 text-center text-3xl font-extrabold text-coffee">Create your account</h2>
                <p class="mt-2 text-center text-coffee/80">Sign up to get started</p>
            </div>
            <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    <div class="mb-4">
                        <label for="name" class="block text-coffee font-semibold">Name</label>
                        <input id="name" name="name" type="text" autocomplete="name" required autofocus
                            value="{{ old('name') }}"
                            class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-coffee/40 placeholder-coffee text-coffee focus:outline-none focus:ring-coffee focus:border-coffee focus:z-10 sm:text-sm">
                        @error('name')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-coffee font-semibold">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            value="{{ old('email') }}"
                            class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-coffee/40 placeholder-coffee text-coffee focus:outline-none focus:ring-coffee focus:border-coffee focus:z-10 sm:text-sm">
                        @error('email')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-coffee font-semibold">Password</label>
                        <input id="password" name="password" type="password" autocomplete="new-password" required
                            class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-coffee/40 placeholder-coffee text-coffee focus:outline-none focus:ring-coffee focus:border-coffee focus:z-10 sm:text-sm">
                        @error('password')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-coffee font-semibold">Confirm Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password"
                            autocomplete="new-password" required
                            class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-coffee/40 placeholder-coffee text-coffee focus:outline-none focus:ring-coffee focus:border-coffee focus:z-10 sm:text-sm">
                        @error('password_confirmation')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <a href="{{ route('login') }}" class="text-sm text-coffee hover:underline">Already registered?</a>
                </div>
                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-lg bg-coffee text-cream hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-coffee">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

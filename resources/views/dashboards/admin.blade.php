@extends('layouts.app')

@section('content')
    <!-- Hero header -->
    <section class="pt-12 pb-8 bg-cream">
        <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">
            <div>
                <h1 class="text-4xl font-bold text-coffee">Admin Panel</h1>
                <p class="text-coffee/80 mt-2">Manage listings, users, and site reports.</p>
            </div>
            <div class="flex items-center gap-4">
                <form method="POST" action="{{ route('logout') }}">@csrf
                    <button class="px-4 py-2 bg-coffee text-cream rounded-lg hover:bg-black">Logout</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Admin content -->
    <div class="max-w-7xl mx-auto px-6 mt-6">
        <div class="bg-white shadow-lg rounded-2xl p-8 md:p-10 grid md:grid-cols-3 gap-6 items-start">
            <div class="bg-rose p-6 rounded-2xl">
                <h3 class="font-bold text-coffee mb-2">Manage Listings</h3>
                <p class="text-coffee-700">Create, edit, and remove property listings.</p>
                <a href="#" class="inline-block mt-4 px-4 py-2 bg-coffee text-cream rounded-lg">Go</a>
            </div>

            <div class="bg-rose p-6 rounded-2xl">
                <h3 class="font-bold text-coffee mb-2">Users</h3>
                <p class="text-coffee-700">View and manage registered users and roles.</p>
                <a href="#" class="inline-block mt-4 px-4 py-2 bg-coffee text-cream rounded-lg">Go</a>
            </div>

            <div class="bg-rose p-6 rounded-2xl">
                <h3 class="font-bold text-coffee mb-2">Reports</h3>
                <p class="text-coffee-700">View site analytics and reports.</p>
                <a href="#" class="inline-block mt-4 px-4 py-2 bg-coffee text-cream rounded-lg">Go</a>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection

@extends('layouts.app')

@section('content')
    <!-- Hero-like dashboard header matching landing style -->
    <section class="pt-12 pb-8 bg-cream">
        <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">
            <div>
                <h1 class="text-4xl font-bold text-coffee">Welcome back, {{ $user->name }}</h1>
                <p class="text-coffee/80 mt-2">Manage your profile, view saved properties, and connect with agents.</p>
            </div>
            <div class="flex items-center gap-4">
                <form method="POST" action="{{ route('logout') }}">@csrf
                    <button class="px-4 py-2 bg-coffee text-cream rounded-lg hover:bg-black">Logout</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Dashboard content -->
    <div class="max-w-7xl mx-auto px-6 mt-6">
        <div class="bg-white shadow-lg rounded-2xl p-8 md:p-10 grid md:grid-cols-3 gap-6 items-start">
            <div class="md:col-span-2 flex flex-col gap-6">
                <h2 class="text-2xl font-bold text-coffee mb-4">Your Saved Properties</h2>

                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
                        <img src="/img/s1.jpg" alt="San Francisco Home" class="w-full h-44 object-cover">
                        <div class="p-4 text-left bg-rose">
                            <p class="text-coffee-500 text-sm mb-1"><span class="font-semibold">San Francisco,
                                    California</span></p>
                            <div class="flex justify-between items-center mb-3">

                                <span class="font-bold text-lg">$2,500,000</span>
                            </div>
                            <a href="#" class="bg-coffee text-white py-2 px-3 rounded-lg hover:bg-coffee/80">View</a>
                        </div>
                    </div>



                    <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
                        <img src="/img/s3.jpg" alt="Palo Alto Home" class="w-full h-44 object-cover">
                        <div class="p-4 text-left bg-rose">
                            <p class="text-coffee-500 text-sm mb-1"><span class="font-semibold">Palo Alto, California</span>
                            </p>
                            <div class="flex justify-between items-center mb-3">

                                <span class="font-bold text-lg">$3,700,000</span>
                            </div>
                            <a href="#" class="bg-coffee text-white py-2 px-3 rounded-lg hover:bg-coffee/80">View</a>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
                        <img src="/img/s2.jpg" alt="Palo Alto Home" class="w-full h-44 object-cover">
                        <div class="p-4 text-left bg-rose">
                            <p class="text-coffee-500 text-sm mb-1"><span class="font-semibold">Palo Alto, California</span>
                            </p>
                            <div class="flex justify-between items-center mb-3">

                                <span class="font-bold text-lg">$3,700,000</span>
                            </div>
                            <a href="#" class="bg-coffee text-white py-2 px-3 rounded-lg hover:bg-coffee/80">View</a>
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>

    @include('components.footer')
@endsection

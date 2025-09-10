<header class="w-full bg-cream shadow-sm fixed top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-coffee">Dwello</a>
        </div>

        <!-- Desktop nav -->
        <nav class="hidden md:flex space-x-6 text-coffee font-medium">
            <a href="#" class="hover:text-black">Home</a>
            <a href="#" class="hover:text-black">Service</a>
            <a href="#" class="hover:text-black">Agents</a>
            <a href="#" class="hover:text-black">Contact</a>
        </nav>

        <!-- Right -->
        <div class="hidden md:flex items-center gap-4">
            <button class="text-coffee hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                </svg>
            </button>

            {{-- Profile icon: link to login for guests, profile for authenticated users --}}
            @guest
                <a href="{{ route('login') }}" class="text-coffee hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 1115 0v.75H4.5v-.75z" />
                    </svg>
                </a>
            @else
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="text-coffee hover:text-black focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 1115 0v.75H4.5v-.75z" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div x-show="open" @click.away="open = false" x-cloak
                        class="absolute right-0 mt-2 w-72 bg-white rounded-2xl shadow-lg p-4 text-sm text-coffee">
                        @php $u = auth()->user(); @endphp
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-rose rounded-full flex items-center justify-center text-white font-bold">{{ strtoupper(substr($u->name,0,1)) }}</div>
                            <div>
                                <div class="font-semibold">{{ $u->name }}</div>
                                <div class="text-xs text-coffee/70">{{ $u->email }}</div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="text-xs text-coffee/70">Role</div>
                            <div class="font-medium">{{ $u->role }}</div>
                        </div>

                        <div class="mt-4">
                            <button @click="open = false"
                                class="w-full px-3 py-2 bg-rose text-coffee rounded-lg hover:opacity-90">Close</button>
                        </div>
                    </div>
                </div>
            @endguest

            {{-- Show Sign up for guests, Logout button for authenticated users --}}
            @guest
                <a href="{{ route('register') }}" class="px-4 py-2 bg-coffee text-cream rounded-lg hover:bg-black">Sign
                    up</a>
            @else
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="px-4 py-2 bg-coffee text-cream rounded-lg hover:bg-black">Logout</button>
                </form>
            @endguest
        </div>

        <!-- Mobile hamburger -->
        <div x-data="{ open: false }" class="md:hidden">
            <button @click="open = !open" class="p-2">
                <i class="fa-solid fa-bars text-coffee"></i>
            </button>

            <div x-show="open" @click.away="open = false" x-cloak
                class="absolute right-4 mt-2 w-48 bg-white rounded-lg shadow-lg py-2">
                <a href="#" class="block px-4 py-2 text-coffee">Home</a>
                <a href="#" class="block px-4 py-2 text-coffee">Service</a>
                <a href="#" class="block px-4 py-2 text-coffee">Agents</a>
                @guest
                    <a href="{{ route('login') }}" class="block px-4 py-2 text-coffee">Sign in</a>
                @else
                    <a href="{{ route('profile') }}" class="block px-4 py-2 text-coffee">Profile</a>
                @endguest
                @guest
                    <a href="{{ route('register') }}" class="block px-4 py-2 text-coffee">Sign up</a>
                @else
                    <form method="POST" action="{{ route('logout') }}" class="px-4">
                        @csrf
                        <button type="submit" class="w-full text-left block px-4 py-2 bg-coffee text-cream rounded-lg hover:bg-black">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</header>

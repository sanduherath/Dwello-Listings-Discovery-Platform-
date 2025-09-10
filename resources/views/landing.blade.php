
 @extends('layouts.app')



    <!-- Hero Section -->
    <section class="pt-28 pb-16 bg-cream">
        <div class="max-w-7xl  mx-auto px-6 flex flex-col md:flex-row items-center gap-8">

            <!-- Text Section (40%) -->
            <div class="w-full md:w-2/5">
                <h1 class="text-4xl md:text-5xl font-bold text-coffee mb-4">Find Your <br> Dream Home</h1>
                <p class="text-coffee/80 mb-6">
                    Explore our curated selection of exquisite properties meticulously tailored to your unique dream
                    home vision.
                </p>
                <a href="{{ route('register') }}" class="px-6 py-3 bg-coffee text-cream rounded-lg hover:bg-black">Sign
                    up</a>
            </div>

            <!-- Image Section (60%) -->
            <div class="w-full md:w-3/5">
                <img src="/img/h1.png" alt="Dream Home" class="w-full h-full  ">
            </div>

        </div>
    </section>
    <!-- Search Bar -->
    <div
        class="max-w-4xl mx-auto -mt-12 bg-rose shadow-lg rounded-2xl p-8 flex flex-col md:flex-row gap-4 items-center relative z-20">

        <!-- Location -->
        <input type="text" placeholder="Location"
            class="flex-1 px-4 py-3 border border-coffee/40 text-coffee rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee">

        <!-- Type -->
        <select
            class="flex-1 px-4 py-3 border border-coffee/40 text-coffee rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee">
            <option>Type</option>
            <option>House</option>
            <option>Apartment</option>
        </select>

        <!-- Price Range -->
        <select
            class="flex-1 px-4 py-3 border border-coffee/40 text-coffee rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee">
            <option>Price Range</option>
            <option>$100k - $300k</option>
            <option>$300k - $500k</option>
        </select>

        <!-- Search Button -->
        <button class="px-6 py-3 bg-coffee text-cream font-medium rounded-lg hover:bg-black transition">
            Search
        </button>
    </div>



    <!-- About Section -->
    <section class="max-w-7xl mx-auto px-6 py-0 grid md:grid-cols-2 gap-2 items-center">
        <div class="p-10">
            <img src="/img/h2.jpg" alt="Modern Home" class=" w-full h-auto ">
        </div>
        <div class="p-16">
            <h2 class="text-3xl text-coffee font-bold mb-4">We Help You To Find Your Dream Home</h2>
            <p class="text-coffee mb-6">
                From cozy cottages to luxurious estates, our dedicated team guides you through every step of the
                journey, ensuring your dream home becomes a reality.
            </p>
            <div class="grid grid-cols-3 gap-4 text-center">
                <div>
                    <h3 class="text-2xl font-bold text-coffee">8K+</h3>
                    <p class="text-gray-600 text-coffee">Houses Available</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-coffee">6K+</h3>
                    <p class="text-gray-600 text-coffee">Houses Sold</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-coffee">2K+</h3>
                    <p class="text-gray-600 text-coffee">Trusted Agents</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="bg-gray-50 py-0 mb-16 text-coffee">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <div class="w-[600px] font-bold mx-auto">
                <h2 class="text-3xl font-bold mb-4">Why Choose Us</h2>
                <p class="mb-12 text-coffee ">
                    Elevating Your Home Buying Experience with Expertise, Integrity, and Unmatched Personalized Service
                </p>
            </div>
            <div class="grid md:grid-cols-4 gap-16 ">
                <div class="bg-rose shadow-lg p-6 w-64 h-56 rounded-2xl flex flex-col items-start">
                    <div class="bg-cream h-16 w-16 flex items-center justify-center rounded-[10px] mb-4">
                        <i class="fas fa-map-marker-alt text-rose-500 text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2 text-left">Expert Guidance</h3>
                    <p class="text-coffee-600 text-base text-left font-semibold">
                        Seasoned experts for a smooth & hassle-free buying journey.
                    </p>
                </div>

                <div class="bg-rose shadow-lg p-6 w-64 h-56 rounded-2xl flex flex-col items-start">
                    <div class="bg-cream h-16 w-16 flex items-center justify-center rounded-[10px] mb-4">
                        <i class="fas fa-solid fa-user text-rose-500 text-4xl"></i>

                    </div>
                    <h3 class="font-bold text-lg mb-2 text-left">Personalized Service</h3>
                    <p class="text-coffee-600 text-base text-left font-semibold">
                        Tailored services to match your unique needs at every stage.
                    </p>
                </div>



                <div class="bg-rose shadow-lg p-6 w-64 h-56 rounded-2xl flex flex-col items-start">
                    <div class="bg-cream h-16 w-16 flex items-center justify-center rounded-[10px] mb-4">
                        <i class="fas fa-solid fa-file-alt text-rose-500 text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2 text-left">Transparent Process</h3>
                    <p class="text-coffee-600 text-base text-left font-semibold">
                        Clear communication and full transparency throughout.
                    </p>
                </div>

                <div class="bg-rose shadow-lg p-6 w-64 h-56 rounded-2xl flex flex-col items-start">
                    <div class="bg-cream h-16 w-16 flex items-center justify-center rounded-[10px] mb-4">
                        <i class="fas fa-solid fa-headset text-rose-500 text-4xl"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2 text-left">Exceptional Support</h3>
                    <p class="text-coffee-600 text-base text-left font-semibold">
                        Outstanding support for an effortless client experience.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Popular Residences Section -->
    <section class="bg-gray-50 py-16 text-coffee">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-12">Our Popular Residences</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Residence 1 -->
                <div class="bg-white shadow-lg rounded-2xl overflow-hidden">

                    <img src="/img/s1.jpg" alt="San Francisco Home" class="w-full h-64 object-cover">
                    <div class="p-6 text-left bg-rose">
                        <p class="text-coffee-500 text-sm mb-2"><span class="font-semibold">San Francisco,
                                California</span></p>
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex gap-4 text-coffe-600 text-sm">
                                <span><i class="fa-solid fa-bed p-2"></i> 4 Rooms</span>
                                <span><i class="fa-solid fa-tape p-2"></i>3,500 sq ft</span>
                            </div>
                            <span class="font-bold text-lg">$2,500,000</span>
                        </div>
                        <a href="{{ route('register') }}"
                            class="bg-coffee text-white py-2 px-4 rounded-lg hover:bg-coffee/80">Sign up</a>
                    </div>
                </div><!-- Residence 2 -->
                <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
                    <img src="/img/s2.jpg" alt="Beverly Hills Home" class="w-full h-64 object-cover">
                    <div class="p-6 text-left bg-rose">
                        <p class="text-coffee-500 text-sm mb-2"><span class="font-semibold">Beverly Hills,
                                California</span></p>
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex gap-4 text-coffee-600 text-sm">
                                <span><i class="fa-solid fa-bed p-1"></i> 3 Rooms</span>
                                <span><i class="fa-solid fa-tape p-1"></i> 1,500 sq ft</span>
                            </div>
                            <span class="font-bold text-lg">$850,000</span>
                        </div>
                        <a href="{{ route('register') }}"
                            class="bg-coffee text-white py-2 px-4 rounded-lg hover:bg-coffee/80">Sign up</a>
                    </div>
                </div>

                <!-- Residence 3 -->
                <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
                    <img src="/img/s3.jpg" alt="Palo Alto Home" class="w-full h-64 object-cover">
                    <div class="p-6 text-left bg-rose">
                        <p class="text-coffee-500 text-sm mb-2"><span class="font-semibold">Palo Alto,
                                California</span></p>
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex gap-4 text-coffee-600 text-sm">
                                <span><i class="fa-solid fa-bed p-1"></i> 6 Rooms</span>
                                <span><i class="fa-solid fa-tape p-1"></i> 4,000 sq ft</span>
                            </div>
                            <span class="font-bold text-lg">$3,700,000</span>
                        </div>
                        <a href="{{ route('register') }}"
                            class="bg-coffee text-white py-2 px-4 rounded-lg hover:bg-coffee/80">Sign up</a>
                    </div>
                </div>
    </section>
    <!-- What People Say About Dwello Section -->
    <section class="bg-cream py-16 text-coffee">
        <!-- Alpine.js CDN for interactivity -->
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

        <div x-data="{
            current: 0,
            testimonials: [{
                    img: '/img/b1.jpg',
                    userImg: '/img/p1.jpg',
                    name: 'Sarah Nguyen',
                    city: 'San Francisco',
                    rating: '⭐ 5.0',
                    text: `Dwello truly cares about their clients. They listened to my needs and preferences and helped
                                                    me find the perfect home in the Bay Area. Their professionalism and attention to detail are
                                                    unmatched.`
                },
                {
                    img: '/img/b2.jpg',
                    userImg: '/img/p2.jpg',
                    name: 'Michael Rodriguez',
                    city: 'San Diego',
                    rating: '⭐ 4.5',
                    text: `I had a fantastic experience working with Dwello. Their expertise and personalized service
                                                    exceeded my expectations. I found my dream home quickly and smoothly. Highly recommended!`
                },
                {
                    img: '/img/b3.jpg',
                    userImg: '/img/p3.jpg',
                    name: 'Emily Johnson',
                    city: 'Los Angeles',
                    rating: '⭐ 5.0',
                    text: `Dwello made my dream of owning a home a reality! Their team provided exceptional support and
                                                    guided me through every step of the process. I couldn’t be happier with my new home!`
                },
                {
                    img: '/img/b4.jpg',
                    userImg: '/img/p4.jpg',
                    name: 'Emily Johnson',
                    city: 'Los Angeles',
                    rating: '⭐ 5.0',
                    text: `Dwello made my dream of owning a home a reality! Their team provided exceptional support and
                                                    guided me through every step of the process. I couldn’t be happier with my new home!`
                },
                {
                    img: '/img/b5.jpg',
                    userImg: '/img/p5.jpg',
                    name: 'Emily Johnson',
                    city: 'Los Angeles',
                    rating: '⭐ 5.0',
                    text: `Dwello made my dream of owning a home a reality! Their team provided exceptional support and
                                                    guided me through every step of the process. I couldn’t be happier with my new home!`
                }
            ],
            visible: [],
            updateVisible() {
                this.visible = [];
                for (let i = 0; i < 3; i++) {
                    this.visible.push(this.testimonials[(this.current + i) % this.testimonials.length]);
                }
            },
            next() {
                this.current = (this.current + 1) % this.testimonials.length;
                this.updateVisible();
            },
            prev() {
                this.current = (this.current - 1 + this.testimonials.length) % this.testimonials.length;
                this.updateVisible();
            }
        }" class="max-w-7xl mx-auto px-6 flex flex-col items-center text-center" x-cloak
            x-init="updateVisible()">
            <h2 class="text-3xl font-bold mb-12">What People Say About Dwello</h2>
            <div class="w-full flex justify-center gap-8">
                <template x-for="(testimonial, idx) in visible" :key="idx">
                    <div class="bg-rose shadow-lg rounded-2xl overflow-hidden mx-2 max-w-md flex-1">
                        <img :src="testimonial.img" alt="Testimonial Home" class="w-full h-64 object-cover">

                        <div class="p-6 text-left bg-rose">
                            <div class="flex items-center gap-4 mb-4">
                                <img :src="testimonial.userImg" alt="" class="w-12 h-12 rounded-full">
                                <div>
                                    <p class="font-semibold" x-text="testimonial.name"></p>
                                    <p class="text-coffee-500 text-sm" x-text="testimonial.city"></p>
                                </div>
                                <div
                                    class="flex items-center justify-between bg-cream ml-auto px-3 py-1 rounded-full ">
                                    <span class="font-bold" x-text="testimonial.rating"></span>
                                </div>

                            </div>
                            <p class="mb-4 text-coffee-700" x-text="testimonial.text"></p>

                        </div>
                    </div>
                </template>
            </div>
            <!-- Carousel Controls -->
            <div class="flex gap-4 mt-8 justify-center">
                <button @click="prev()"
                    class="bg-coffee text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-black transition">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button @click="next()"
                    class="bg-coffee text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-black transition">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
    </section>




    <!-- Help & Footer Section -->
    <section class="bg-white py-16">
        <div class="max-w-2xl mx-auto text-center mb-8 mt-16">
            <h2 class="text-3xl text-coffee font-bold mb-6">Do You Have Any Questions?<br>Get Help From Us</h2>
            <div class="flex justify-center gap-8 my-4">
                <div class="flex items-center gap-2">
                    <i class="fa-regular fa-comments text-coffee text-xl"></i>
                    <span>Chat live with our support team</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-regular fa-circle-question text-coffee text-xl"></i>
                    <span>Browse our FAQ</span>
                </div>
            </div>
            <form class="flex justify-center mt-6 max-w-md mx-auto my-16 mt-16">
                <div class="flex items-center bg-rose rounded-lg mr-6  px-4 py-1 border border-r-0 pr-32 ">
                    <i class="fa-regular fa-envelope text-coffee mr-2"></i>
                    <input type="email" placeholder="Enter your email address..."
                        class="bg-rose outline-none w-56 border-0 focus:ring-0  text-coffee" required>
                </div>
                <button type="submit"
                    class="bg-coffee text-white px-8 py-2 rounded-lg font-semibold hover:bg-black transition">Submit</button>
            </form>
        </div>
    </section>
    @include('components.footer')


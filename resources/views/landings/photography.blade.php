@extends('layouts.landing', ['title' => 'Enoch and Mary Missions Organization'])

@section('css')

@endsection

@section('content')
    @include('layouts.shared.navbar', [
        'menuPosition' => 'sticky',
        'navItems' => [
            (object)['id' => 'home','name' => 'Home'],
            (object)['id' => 'about','name' => 'About'],
            (object)['id' => 'services','name' => 'Services'],
            (object)['id' => 'portfolio','name' => 'Portfolio'],
            (object)['id' => 'faq','name' => 'Faq'],
            ]
        ])

    <!-- Hero Section Start -->
    <section id="home" class="relative overflow-hidden px-4 md:px-10">
        <div class="border border-primary/10 bg-primary/5">
            <div class="container">
                <div class="p-6">
                    <div
                        class="relative grid grid-cols-1 items-center gap-12 lg:grid-cols-2"
                    >
                        <div>
                <span
                    class="bg-primary/10 px-3 py-1 text-sm font-medium uppercase tracking-wider text-primary shadow"
                >Animals Frame</span
                >
                            <h1
                                class="my-4 max-w-lg text-4xl font-medium text-default-950 md:text-5xl/tight"
                            >
                                Capturing the Essence of Animals, Frame by Frame
                            </h1>
                            <p class="md:text-lg">
                                Our deep affection for animals inspires us to craft
                                breathtaking and emotionally charged images that encapsulate
                                the genuine nature of these remarkable beings.
                            </p>

                            <a
                                href="#"
                                class="group mt-10 inline-flex items-center justify-center gap-2 rounded-full border border-default-200 px-1 py-1 pe-4 text-default-950 transition-all duration-300 hover:bg-primary-600 hover:text-white"
                            >
                  <span
                      class="me-2 flex size-11 items-center justify-center rounded-full bg-primary/20 text-primary transition-all duration-300 group-hover:bg-white group-hover:text-black"
                  >
                    <i data-lucide="image" class="size-5"></i>
                  </span>
                                Generate Portfolio
                            </a>
                        </div>
                        <!-- col End -->

                        <div class="mx-auto h-[695px] overflow-hidden">
                            <div class="marquee grid grid-cols-2 gap-6">
                                <div
                                    class="relative m-auto flex flex-col gap-6 overflow-hidden"
                                >
                                    <div
                                        class="marquee-hero flex min-h-full flex-shrink-0 flex-col items-center justify-around gap-6"
                                    >
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-1.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-2.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-3.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-4.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-5.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-6.jpg"
                                            alt=""
                                        />
                                    </div>

                                    <div
                                        aria-hidden="true"
                                        class="marquee-hero flex min-h-full flex-shrink-0 flex-col items-center justify-around gap-6"
                                    >
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-1.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-2.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-3.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-4.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-5.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-6.jpg"
                                            alt=""
                                        />
                                    </div>
                                </div>
                                <!-- flex End -->

                                <div
                                    class="marquee-reverse m-auto flex flex-col gap-6 overflow-hidden"
                                >
                                    <div
                                        class="marquee-hero flex min-h-full flex-shrink-0 flex-col items-center justify-around gap-6"
                                    >
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-1.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-2.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-3.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-4.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-5.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-6.jpg"
                                            alt=""
                                        />
                                    </div>

                                    <div
                                        aria-hidden="true"
                                        class="marquee-hero flex min-h-full flex-shrink-0 flex-col items-center justify-around gap-6"
                                    >
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-1.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-2.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-3.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-4.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-5.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="aspect-1 h-full w-60 object-cover"
                                            src="/images/landing/photography/img-6.jpg"
                                            alt=""
                                        />
                                    </div>
                                </div>
                                <!-- flex End -->
                            </div>
                            <!-- marquee End -->
                        </div>
                        <!-- col End -->
                    </div>
                    <!-- grid End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Hero end -->

    <!-- Start marq -->
    <section class="">
        <div class="relative m-auto flex gap-28 overflow-hidden bg-black py-6">
            <div
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <h2 class="text-4xl text-white">Wildlife photography</h2>
                <h2 class="text-4xl text-white">Pet portraits</h2>
                <h2 class="text-4xl text-white">Nature photography</h2>
                <h2 class="text-4xl text-white">Wildlife photography</h2>
                <h2 class="text-4xl text-white">Pet portraits</h2>
                <h2 class="text-4xl text-white">Nature photography</h2>
            </div>
            <!-- marquee__group End-->

            <div
                aria-hidden="true"
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <h2 class="text-4xl text-white">Wildlife photography</h2>
                <h2 class="text-4xl text-white">pet portraits</h2>
                <h2 class="text-4xl text-white">Nature photography</h2>
                <h2 class="text-4xl text-white">Wildlife photography</h2>
                <h2 class="text-4xl text-white">Pet portraits</h2>
                <h2 class="text-4xl text-white">Nature photography</h2>
            </div>
            <!-- marquee__group End-->
        </div>
        <!-- flex End -->
    </section>
    <!-- End marq -->

    <!-- Start About-->
    <section id="about" class="py-10 lg:py-20">
        <div class="container">
            <div class="grid grid-cols-1 items-end gap-6 lg:grid-cols-2">
                <div>
                    <img src="/images/landing/photography/img-7.jpg" alt="" />
                </div>
                <!-- col End -->

                <div>
                    <h2 class="text-4xl font-medium text-default-950">
                        Revealing the Splendor of the Animal Realm
                    </h2>
                    <p class="mb-6 mt-4 text-base">
                        Our profound affection and reverence for animals propel us
                        forward. We firmly believe that every living being, regardless of
                        its size, holds a unique tale, and our fervor lies in capturing
                        their extraordinary moments through the lens of our cameras.
                    </p>
                    <a
                        href="#"
                        class="inline-flex items-center justify-center gap-2 bg-primary px-7 py-2 text-base text-white transition-all hover:bg-primary-700"
                    >Read More
                        <i data-lucide="move-right" class="size-6"></i>
                    </a>

                    <div class="mt-10 grid grid-cols-3 gap-6">
                        <img src="/images/landing/photography/img-13.jpg" alt="" />
                        <img src="/images/landing/photography/img-7.jpg" alt="" />
                        <img src="/images/landing/photography/img-14.jpg" alt="" />
                    </div>
                    <!-- grid End -->
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End About-->

    <!-- Start Services-->
    <section id="services" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="border border-default-200 px-3 py-1 text-xs font-medium uppercase tracking-wider text-default-950"
            >Our Services</span
            >
                    <h2 class="my-4 text-4xl font-medium capitalize text-default-950">
                        Our Offerings
                    </h2>
                    <p class="text-base">
                        Explore a realm of exceptional animal photography services.
                    </p>
                </div>
            </div>
            <!-- end flex -->

            <div class="grid gap-6 xl:grid-cols-2">
                <div class="border border-default-100 bg-default-50 p-6">
                    <div class="flex flex-wrap gap-6 md:flex-nowrap">
                        <div>
                            <div
                                class="flex size-14 items-center justify-center border border-primary/10 bg-primary/5"
                            >
                                <i data-lucide="camera" class="size-10 text-primary"></i>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-5xl font-medium text-default-950">01</h2>
                            <h3 class="mt-2 text-3xl font-medium text-default-950">
                                Pet Portraits
                            </h3>
                            <p class="mt-4 text-base">
                                Preserve the distinct personality and soul of your cherished
                                pets with beautiful and heartwarming portraits.
                            </p>
                        </div>
                    </div>
                    <!-- flex End -->
                </div>
                <!-- col End -->

                <div class="border border-default-100 bg-default-50 p-6">
                    <div class="flex flex-wrap gap-6 md:flex-nowrap">
                        <div>
                            <div
                                class="flex size-14 items-center justify-center border border-primary/10 bg-primary/5"
                            >
                                <i
                                    data-lucide="user-square"
                                    class="size-10 text-primary"
                                ></i>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-5xl font-medium text-default-950">02</h2>
                            <h3 class="mt-2 text-3xl font-medium text-default-950">
                                Wildlife Photography
                            </h3>
                            <p class="mt-4 text-base">
                                Embark on an exhilarating adventure into the untamed, seizing
                                breathtaking instances of wildlife in their native
                                environments.
                            </p>
                        </div>
                    </div>
                    <!-- flex End -->
                </div>
                <!-- col End -->

                <div class="border border-default-100 bg-default-50 p-6">
                    <div class="flex flex-wrap gap-6 md:flex-nowrap">
                        <div>
                            <div
                                class="flex size-14 items-center justify-center border border-primary/10 bg-primary/5"
                            >
                                <i data-lucide="projector" class="size-10 text-primary"></i>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-5xl font-medium text-default-950">03</h2>
                            <h3 class="mt-2 text-3xl font-medium text-default-950">
                                Nature Videography
                            </h3>
                            <p class="mt-4 text-base">
                                These videos encompass everything from awe-inspiring
                                landscapes to intricate details of flora and fauna, showcasing
                                the tranquility and grandeur of nature in all its splendor.
                            </p>
                        </div>
                    </div>
                    <!-- flex End -->
                </div>
                <!-- col End -->

                <div class="border border-default-100 bg-default-50 p-6">
                    <div class="flex flex-wrap gap-6 md:flex-nowrap">
                        <div>
                            <div
                                class="flex size-14 items-center justify-center border border-primary/10 bg-primary/5"
                            >
                                <i data-lucide="git-fork" class="size-10 text-primary"></i>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-5xl font-medium text-default-950">04</h2>
                            <h3 class="mt-2 text-3xl font-medium text-default-950">
                                Commercial Projects
                            </h3>
                            <p class="mt-4 text-base">
                                Highlight your brand's distinctive narrative with our tailored
                                commercial photography services designed for the animal
                                industry.
                            </p>
                        </div>
                    </div>
                    <!-- flex End -->
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End Services-->

    <!-- Section Start -->
    <section id="portfolio" class="py-10 lg:py-20">
        <div class="container">
            <div class="flex flex-wrap items-center justify-between gap-5">
                <div>
                    <div class="mx-auto max-w-2xl">
                        <h2 class="mb-4 text-4xl font-medium text-default-950">
                            Our Portfolio
                        </h2>
                        <p class="text-base">
                            A visual exhibition of remarkable animal moments captured in
                            time. Each image narrates a distinct story, exalting the core
                            and vitality of animals in their full splendor.
                        </p>
                    </div>
                </div>
                <div>
                    <a
                        href="#"
                        class="inline-flex items-center justify-center gap-2 border border-default-200 bg-primary px-6 py-2 text-white transition-all duration-300 hover:bg-primary-700"
                    >View All</a
                    >
                </div>
            </div>
            <!-- flex End -->
        </div>
        <!-- container End -->

        <div class="mt-14">
            <div class="relative m-auto flex gap-8 overflow-hidden">
                <div
                    class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-8"
                >
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-3.jpg"
                        alt=""
                    />
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-2.jpg"
                        alt=""
                    />
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-6.jpg"
                        alt=""
                    />
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-10.jpg"
                        alt=""
                    />
                </div>
                <!-- marquee__group End -->

                <div
                    aria-hidden="true"
                    class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-8"
                >
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-9.jpg"
                        alt=""
                    />
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-2.jpg"
                        alt=""
                    />
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-5.jpg"
                        alt=""
                    />
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-10.jpg"
                        alt=""
                    />
                </div>
                <!-- marquee__group End -->
            </div>
            <!-- flex End -->

            <div class="marquee--reverse m-auto mt-8 flex gap-8 overflow-hidden">
                <div
                    class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-8 delay-[31s]"
                >
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-3.jpg"
                        alt=""
                    />
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-2.jpg"
                        alt=""
                    />
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-6.jpg"
                        alt=""
                    />
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-10.jpg"
                        alt=""
                    />
                </div>
                <!-- marquee__group End -->

                <div
                    aria-hidden="true"
                    class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-8 delay-[31s]"
                >
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-9.jpg"
                        alt=""
                    />
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-2.jpg"
                        alt=""
                    />
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-5.jpg"
                        alt=""
                    />
                    <img
                        class="h-72 w-full object-cover"
                        src="/images/landing/photography/img-10.jpg"
                        alt=""
                    />
                </div>
                <!-- marquee__group End -->
            </div>
            <!-- marquee--reverse End -->
        </div>

        <div class="mt-12 flex items-center justify-center">
            <a
                href="#"
                class="inline-flex items-center justify-center gap-2 rounded border border-default-200 px-6 py-2 text-base font-medium text-default-950 transition-all duration-300 hover:bg-primary hover:text-default-950"
            >View More
                <i data-lucide="move-right" class="size-5"></i>
            </a>
        </div>
        <!-- flex End -->
    </section>
    <!-- Section end -->

    <!-- Start Faq -->
    <section id="faq" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="border border-default-200 px-3 py-1 text-xs font-medium uppercase tracking-wider text-default-950"
            >Our FAQ</span
            >
                    <h2 class="my-4 text-3xl font-medium capitalize text-default-950">
                        Have Questions?
                    </h2>
                    <p class="text-base">
                        Discover solutions to frequently asked questions about booking pet
                        portrait sessions, event photography, wildlife destinations, and
                        the use of commercial images.
                    </p>
                </div>
            </div>
            <!-- flex End -->

            <div class="mx-auto max-w-3xl">
                <div class="hs-accordion-group space-y-4">
                    <div
                        class="hs-accordion active overflow-hidden border border-primary/20 hs-accordion-active:bg-primary/10"
                        id="faq-1"
                    >
                        <button
                            class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                            aria-controls="faq-accordion-1"
                        >
                            <h5 class="text-xl font-medium">
                                How can i book a pet portrait session?
                            </h5>
                            <i
                                data-lucide="plus"
                                class="size-6 transition-all duration-300 hs-accordion-active:-rotate-45"
                            ></i>
                        </button>
                        <div
                            id="faq-accordion-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-1"
                        >
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-sm">
                                    Booking a pet portrait session is a breeze! Just get in
                                    touch with us through our contact page or give us a call.
                                    We'll collaborate to determine a convenient date and
                                    location for your photoshoot.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->

                    <div
                        class="hs-accordion overflow-hidden border border-primary/20 hs-accordion-active:bg-primary/10"
                        id="faq-2"
                    >
                        <button
                            class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                            aria-controls="faq-2"
                        >
                            <h5 class="text-xl font-medium">
                                Can i bring my own pet props or accessories?
                            </h5>
                            <i
                                data-lucide="plus"
                                class="size-6 transition-all duration-300 hs-accordion-active:-rotate-45"
                            ></i>
                        </button>
                        <div
                            id="faq-2"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-2"
                        >
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-sm">
                                    Certainly! We encourage you to bring any special props or
                                    accessories that showcase your pet's unique personality. It
                                    adds a personal touch to the photos and makes the experience
                                    even more memorable.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->

                    <div
                        class="hs-accordion overflow-hidden border border-primary/20 hs-accordion-active:bg-primary/10"
                        id="faq-3"
                    >
                        <button
                            class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                            aria-controls="faq-3"
                        >
                            <h5 class="text-xl font-medium">
                                Do you offer photo packages for pet events and celebrations?
                            </h5>
                            <i
                                data-lucide="plus"
                                class="size-6 transition-all duration-300 hs-accordion-active:-rotate-45"
                            ></i>
                        </button>
                        <div
                            id="faq-3"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-3"
                        >
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-sm">
                                    Yes, we have customized photo packages for pet events and
                                    celebrations. Whether it's a birthday party or a
                                    pet-friendly gathering, we'll be there to capture the joy
                                    and excitement of the occasion.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->

                    <div
                        class="hs-accordion overflow-hidden border border-primary/20 hs-accordion-active:bg-primary/10"
                        id="faq-3"
                    >
                        <button
                            class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                            aria-controls="faq-3"
                        >
                            <h5 class="text-xl font-medium">
                                What locations do you cover for wildlife photography?
                            </h5>
                            <i
                                data-lucide="plus"
                                class="size-6 transition-all duration-300 hs-accordion-active:-rotate-45"
                            ></i>
                        </button>
                        <div
                            id="faq-3"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-3"
                        >
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-sm">
                                    Our wildlife photography services encompass a wide range of
                                    locations, from local wildlife reserves to exotic
                                    destinations. Please contact us to discuss your specific
                                    interests and preferences, and we'll plan an unforgettable
                                    wildlife photography adventure.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->

                    <div
                        class="hs-accordion overflow-hidden border border-primary/20 hs-accordion-active:bg-primary/10"
                        id="faq-3"
                    >
                        <button
                            class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                            aria-controls="faq-3"
                        >
                            <h5 class="text-xl font-medium">
                                Can you provide images for commercial use?
                            </h5>
                            <i
                                data-lucide="plus"
                                class="size-6 transition-all duration-300 hs-accordion-active:-rotate-45"
                            ></i>
                        </button>
                        <div
                            id="faq-3"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-3"
                        >
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-sm">
                                    Absolutely! We provide commercial licensing options for our
                                    images, enabling you to use them for promotional materials,
                                    websites, and other marketing purposes. Just let us know
                                    your requirements, and we'll furnish you with the relevant
                                    licensing details.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->
                </div>
            </div>
            <!-- col End-->
        </div>
        <!-- container End-->
    </section>
    <!-- End faq -->

    <!-- Start blog -->
    <section class="py-10 lg:py-20">
        <div class="container">
            <div class="flex flex-wrap items-center justify-between gap-5">
                <div>
                    <div class="mx-auto max-w-2xl">
                        <h2 class="mb-4 text-4xl font-medium text-default-950">
                            Our Latest Updates
                        </h2>
                        <p class="text-base">
                            Stay informed about the most recent developments in the realm of
                            animal photography.
                        </p>
                    </div>
                </div>
                <div>
                    <a
                        href="#"
                        class="inline-flex items-center justify-center gap-2 border border-default-200 bg-primary px-6 py-2 text-white transition-all duration-300 hover:bg-primary-700"
                    >View All</a
                    >
                </div>
            </div>
            <!-- flex End-->

            <div class="mt-10 grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                <div class="overflow-hidden border border-default-200">
                    <a href="#" class="group relative overflow-hidden">
                        <div class="overflow-hidden">
                            <img
                                src="/images/landing/photography/img-2.jpg"
                                class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1]"
                                alt=""
                            />
                        </div>
                        <div class="p-6">
                            <p class="text-lg text-primary">
                                Strategies
                                <span class="ms-4 text-sm font-medium text-default-950"
                                >5-minute Read</span
                                >
                            </p>
                            <h3 class="mt-1 text-2xl/snug font-medium text-default-950">
                                Inaights and strategies for breathtaking shots
                            </h3>
                            <p class="mt-4 text-sm">
                                Unlock the true potential wildlife photography with our expert
                                insights and techniques.
                            </p>
                        </div>
                    </a>
                </div>
                <!-- col End-->

                <div class="overflow-hidden border border-default-200">
                    <a href="#" class="group relative overflow-hidden">
                        <div class="overflow-hidden">
                            <img
                                src="/images/landing/photography/img-12.jpg"
                                class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1]"
                                alt=""
                            />
                        </div>
                        <div class="p-6">
                            <p class="text-lg text-primary">
                                Video
                                <span class="ms-4 text-sm font-medium text-default-950"
                                >5-minute Read</span
                                >
                            </p>
                            <h3 class="mt-1 text-2xl/snug font-medium text-default-950">
                                Wildlife preservation photography
                            </h3>
                            <p class="mt-4 text-sm">
                                Observe the profound influence of wildlife photography as a
                                potent instrument for preservation.
                            </p>
                        </div>
                    </a>
                </div>
                <!-- col End-->

                <div class="overflow-hidden border border-default-200">
                    <a href="#" class="group relative overflow-hidden">
                        <div class="overflow-hidden">
                            <img
                                src="/images/landing/photography/img-10.jpg"
                                class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1]"
                                alt=""
                            />
                        </div>
                        <div class="p-6">
                            <p class="text-lg text-primary">
                                Photography
                                <span class="ms-4 text-sm font-medium text-default-950"
                                >5-minute Read</span
                                >
                            </p>
                            <h3 class="mt-1 text-2xl/snug font-medium text-default-950">
                                Heartwarming Pet Portraits
                            </h3>
                            <p class="mt-4 text-sm">
                                Commend the affection and connection between pets and their
                                human counterparts through heart-touching pet portrayals.
                            </p>
                        </div>
                    </a>
                </div>
                <!-- col End-->
            </div>
            <!-- grid End-->
        </div>
        <!-- container End-->
    </section>
    <!-- End blog -->

    <section class="py-10 lg:py-20">
        <div class="container">
            <div class="border border-primary/10 bg-primary/5 p-14">
                <div class="grid items-center gap-6 lg:grid-cols-2">
                    <div>
                        <h2 class="text-4xl/tight font-medium text-default-950">
                            Embark on Your Animal Photography Adventure Now
                        </h2>
                        <p class="mb-7 mt-4 text-base">
                            Dive into the enchanting realm of animal photography alongside
                            our seasoned team.
                        </p>
                        <a
                            href="#"
                            class="inline-flex items-center justify-center gap-2 bg-primary px-8 py-2 text-base text-white transition-all hover:bg-primary-700"
                        >Contact us
                            <i data-lucide="move-right" class="size-6"></i>
                        </a>
                    </div>
                    <!-- col End-->

                    <div>
                        <img
                            src="/images/landing/photography/img-11.jpg"
                            class="mx-auto"
                            alt=""
                        />
                    </div>
                    <!-- col End-->
                </div>
                <!-- grid End-->
            </div>
        </div>
        <!-- container End-->
    </section>

    <!-- Start marq -->
    <section>
        <div class="relative m-auto flex gap-28 overflow-hidden bg-black py-6">
            <div
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <h2 class="text-4xl text-white">Wildlife photography</h2>
                <h2 class="text-4xl text-white">Pet portraits</h2>
                <h2 class="text-4xl text-white">Nature photography</h2>
                <h2 class="text-4xl text-white">Wildlife photography</h2>
                <h2 class="text-4xl text-white">Pet portraits</h2>
                <h2 class="text-4xl text-white">Nature photography</h2>
            </div>
            <!-- marquee__group End-->

            <div
                aria-hidden="true"
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <h2 class="text-4xl text-white">Wildlife photography</h2>
                <h2 class="text-4xl text-white">pet portraits</h2>
                <h2 class="text-4xl text-white">Nature photography</h2>
                <h2 class="text-4xl text-white">Wildlife photography</h2>
                <h2 class="text-4xl text-white">Pet portraits</h2>
                <h2 class="text-4xl text-white">Nature photography</h2>
            </div>
            <!-- marquee__group End-->
        </div>
        <!-- flex End -->
    </section>
    <!-- End marq -->
@endsection

@section('script-bottom')

@endsection

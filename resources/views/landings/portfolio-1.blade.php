@extends('layouts.landing', ['title' => 'Joseph School'])

@section('css')

@endsection

@section('content')
    @include('layouts.shared.navbar', [
        'menuPosition' => 'fixed',
        'navItems' => [
            (object)['id' => 'home','name' => 'Home'],
            (object)['id' => 'about','name' => 'About'],
            (object)['id' => 'services','name' => 'Services'],
            (object)['id' => 'testimonials','name' => 'Testimonials'],
            (object)['id' => 'blog','name' => 'Blog'],
            (object)['id' => 'faq','name' => 'Faq'],
            ]
        ])

    <!-- Start Hero -->
    <section
        id="home"
        class="flex items-center justify-center bg-gradient-to-l from-primary/5 via-primary/0 to-primary/10 bg-cover py-44"
    >
        <div class="container">
            <div class="grid grid-cols-1 items-center gap-6 xl:grid-cols-2">
                <div>
                    <h2 class="text-4xl font-medium text-default-950 md:text-5xl/tight">
                        Enhance Your Online Presence with Our Expertise
                    </h2>
                    <p class="mt-6 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="mt-10 flex flex-wrap items-center gap-6">
                        <a
                            href="#"
                            class="inline-flex items-center justify-center gap-2 rounded-md bg-primary px-8 py-3 text-base text-white transition-all duration-300 hover:bg-primary-700"
                        >Read More
                            <i data-lucide="move-right" class="size-6"></i>
                        </a>
                        <div class="flex -space-x-2">
                            <img
                                class="inline-block size-12 rounded-full bg-white shadow-md ring-2 ring-white"
                                src="/images/avatars/img-1.jpg"
                                alt="Image Description"
                            />
                            <img
                                class="inline-block size-12 rounded-full bg-white shadow-md ring-2 ring-white"
                                src="/images/avatars/img-2.jpg"
                                alt="Image Description"
                            />
                            <img
                                class="inline-block size-12 rounded-full bg-white shadow-md ring-2 ring-white"
                                src="/images/avatars/img-3.jpg"
                                alt="Image Description"
                            />
                            <button
                                class="size-12 rounded-full border border-primary/50 bg-primary/30 font-medium text-primary shadow-md backdrop-blur-md"
                            >
                                80+
                            </button>
                        </div>
                        <!-- flex End -->
                    </div>
                </div>
                <!-- col End -->

                <div>
                    <div class="relative">
                        <div class="flex justify-center">
                            <div
                                class="inline-block rounded-xl border border-primary/10 bg-primary/5 p-6"
                            >
                                <img
                                    src="/images/landing/portfolio/img-1.jpg"
                                    class="mx-auto rounded-md xl:h-[500px] xl:w-full"
                                    alt=""
                                />
                            </div>
                        </div>
                        <!-- flex End -->

                        <div class="hidden xl:block">
                            <div class="absolute -start-10 top-10">
                                <div
                                    class="inline-block rounded-xl border-4 border-primary/20 bg-white p-4 drop-shadow-md dark:bg-default-50"
                                >
                                    <h2 class="text-2xl font-medium text-default-950">
                                        $6,726
                                        <span class="text-base font-medium text-primary"
                                        >+12.5%</span
                                        >
                                    </h2>
                                    <p class="mt-1 text-base">Total Revenue</p>
                                </div>
                            </div>

                            <div
                                class="absolute -end-12 bottom-10 top-auto rounded-md bg-white"
                            >
                                <img
                                    src="/images/landing/portfolio/img-2.jpg"
                                    class="h-28 rounded-md border-4 border-primary/20 drop-shadow-md"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End Hero -->

    <!-- Start -->
    <section class="py-10 lg:py-20">
        <div class="container">
            <div class="grid grid-cols-1 items-center gap-6 xl:grid-cols-6">
                <div class="xl:col-span-2">
                    <h2 class="text-3xl font-medium text-default-950 md:text-4xl/tight">
                        Preferred Partner for Major Corporations
                    </h2>
                </div>

                <div class="xl:col-span-4">
                    <!-- Swiper -->
                    <div id="testimonial_directory" class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/images/brand/1.png" alt=""/>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <img src="/images/brand/2.png" alt=""/>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <img src="/images/brand/3.png" alt=""/>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <img src="/images/brand/4.png" alt=""/>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <img src="/images/brand/5.png" alt=""/>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <img src="/images/brand/1.png" alt=""/>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <img src="/images/brand/2.png" alt=""/>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <img src="/images/brand/3.png" alt=""/>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <img src="/images/brand/4.png" alt=""/>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <img src="/images/brand/5.png" alt=""/>
                            </div>
                            <!-- swiper-slide End -->
                        </div>
                    </div>
                    <!-- End Swiper -->
                </div>
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End -->

    <!-- Start -->
    <section class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our Features
            </span>
                    <h2
                        class="mt-4 text-3xl font-medium capitalize text-default-950 md:text-4xl/tight"
                    >
                        Features
                    </h2>
                    <p class="mt-4 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <!-- flex End -->

            <div class="rounded-xl border border-primary/20 bg-primary/5 p-6">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <div
                        class="rounded-lg border border-primary/20 bg-white p-6 text-center dark:bg-default-50"
                    >
                        <h2 class="text-xl font-medium text-default-950">
                            Drive Sales Growth
                        </h2>
                        <p class="mt-4 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod incididunt ut labore et dolore.
                        </p>
                    </div>
                    <!-- col End -->

                    <div
                        class="rounded-lg border border-primary/20 bg-white p-6 text-center dark:bg-default-50"
                    >
                        <h2 class="text-xl font-medium text-default-950">
                            Fuel Expansion
                        </h2>
                        <p class="mt-4 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            tempor incididunt ut labore et dolore.
                        </p>
                    </div>
                    <!-- col End -->

                    <div
                        class="rounded-lg border border-primary/20 bg-white p-6 text-center dark:bg-default-50"
                    >
                        <h2 class="text-xl font-medium text-default-950">
                            Focused Audience
                        </h2>
                        <p class="mt-4 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore.
                        </p>
                    </div>
                    <!-- col End -->
                </div>
                <!-- grid End -->
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Start About -->
    <section id="about" class="py-10 lg:py-20">
        <div class="container">
            <div class="grid items-center gap-6 2xl:grid-cols-2">
                <div class="flex justify-center">
                    <div
                        class="inline-block rounded-xl border border-primary/20 bg-primary/10 p-6"
                    >
                        <img
                            src="/images/landing/portfolio/img-6.jpg"
                            class="rounded-lg"
                            alt=""
                        />
                    </div>
                </div>
                <!-- col End -->

                <div>
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our About
            </span>
                    <h2 class="mt-6 text-3xl font-medium text-default-950 md:text-4xl">
                        Fifteen Years of SEO Mastery
                    </h2>
                    <p class="mt-4 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation.
                    </p>

                    <div class="mb-10 mt-6 grid gap-6 md:grid-cols-2">
                        <div class="flex items-center gap-3">
                            <div
                                class="flex size-8 items-center justify-center rounded-md bg-primary text-white"
                            >
                                <i data-lucide="check" class="size-6"></i>
                            </div>
                            <h3 class="text-lg font-medium text-default-950">
                                Boot Your Business
                            </h3>
                        </div>
                        <!-- col End -->

                        <div class="flex items-center gap-3">
                            <div
                                class="flex size-8 items-center justify-center rounded-md bg-primary text-white"
                            >
                                <i data-lucide="check" class="size-6"></i>
                            </div>
                            <h3 class="text-lg font-medium text-default-950">
                                Marketing Support
                            </h3>
                        </div>
                        <!-- col End -->

                        <div class="flex items-center gap-3">
                            <div
                                class="flex size-8 items-center justify-center rounded-md bg-primary text-white"
                            >
                                <i data-lucide="check" class="size-6"></i>
                            </div>
                            <h3 class="text-lg font-medium text-default-950">
                                Talented Teams
                            </h3>
                        </div>
                        <!-- col End -->

                        <div class="flex items-center gap-3">
                            <div
                                class="flex size-8 items-center justify-center rounded-md bg-primary text-white"
                            >
                                <i data-lucide="check" class="size-6"></i>
                            </div>
                            <h3 class="text-lg font-medium text-default-950">
                                24/7 Strong Support
                            </h3>
                        </div>
                        <!-- col End -->
                    </div>
                    <!-- grid End -->

                    <div class="2xl:-ms-32">
                        <div
                            class="rounded-xl border border-default-200 bg-white p-6 dark:bg-default-50"
                        >
                            <div class="grid md:grid-cols-3">
                                <div class="text-center">
                                    <h2 class="text-4xl font-medium text-default-950">247+</h2>
                                    <p class="mt-1 text-lg">Completed Projects</p>
                                </div>

                                <div class="border-default-200 text-center md:border-x">
                                    <h2 class="text-4xl font-medium text-default-950">54+</h2>
                                    <p class="mt-1 text-lg">Satisfied Customers</p>
                                </div>

                                <div class="text-center">
                                    <h2 class="text-4xl font-medium text-default-950">43+</h2>
                                    <p class="mt-1 text-lg">Winning Awards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End About -->

    <!-- Start Services -->
    <section id="services" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our Services</span
            >
                    <h2
                        class="my-4 text-3xl font-medium capitalize text-default-950 md:text-4xl"
                    >
                        Services
                    </h2>
                    <p class="text-base">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <!-- flex End -->

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                <div
                    class="rounded-xl border border-default-200 p-6 text-center transition-all duration-500 hover:border-sky-500/20 hover:bg-sky-500/5"
                >
                    <div
                        class="mx-auto flex size-16 items-center justify-center rounded-full border border-sky-500/40 bg-sky-500/20 text-sky-500"
                    >
                        <i data-lucide="airplay" class="mx-auto size-10"></i>
                    </div>

                    <h2 class="mt-4 text-3xl font-medium text-default-950">
                        SEO Solutions
                    </h2>
                    <p class="mt-3 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore.
                    </p>
                </div>
                <!-- col End -->

                <div
                    class="rounded-xl border border-default-200 p-6 text-center transition-all duration-500 hover:border-pink-500/20 hover:bg-pink-500/5"
                >
                    <div
                        class="mx-auto flex size-16 items-center justify-center rounded-full border border-pink-500/40 bg-pink-500/20 text-pink-500"
                    >
                        <i data-lucide="circle-dollar-sign" class="mx-auto size-10"></i>
                    </div>

                    <h2 class="mt-4 text-3xl font-medium text-default-950">
                        PPC Marketing
                    </h2>
                    <p class="mt-3 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore.
                    </p>
                </div>
                <!-- col End -->

                <div
                    class="rounded-xl border border-default-200 p-6 text-center transition-all duration-500 hover:border-purple-500/20 hover:bg-purple-500/5"
                >
                    <div
                        class="mx-auto flex size-16 items-center justify-center rounded-full border border-purple-500/40 bg-purple-500/20 text-purple-500"
                    >
                        <i data-lucide="mail" class="mx-auto size-10"></i>
                    </div>

                    <h2 class="mt-4 text-3xl font-medium text-default-950">
                        Email Marketing
                    </h2>
                    <p class="mt-3 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt.
                    </p>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End Services -->

    <!-- Start testimonials -->
    <section id="testimonials" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our Testimonials</span
            >
                    <h2 class="my-4 text-3xl font-medium text-default-950 md:text-4xl">
                        Client Testimonials
                    </h2>
                    <p class="text-base">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <!-- end flex -->

            <div>
                <div class="relative m-auto flex gap-8 overflow-hidden">
                    <div
                        class="marquee__group flex min-w-full flex-shrink-0 justify-around gap-8"
                    >
                        <div>
                            <div class="relative m-2 w-full lg:w-full">
                                <div class="group">
                                    <div
                                        class="w-full translate-x-1 rounded-xl border border-default-200"
                                    >
                                        <div
                                            class="relative z-10 h-full rounded-xl bg-white p-6 dark:bg-default-50"
                                        >
                                            <div class="flex items-center gap-3">
                                                <div class="rounded-full border p-1">
                                                    <img
                                                        src="/images/avatars/img-1.jpg"
                                                        class="size-12 rounded-full"
                                                        alt=""
                                                    />
                                                </div>
                                                <div>
                                                    <h3 class="text-xl font-medium text-default-950">
                                                        Ryan Delk
                                                    </h3>
                                                    <p class="mt-1 text-sm">user</p>
                                                </div>
                                            </div>
                                            <!-- flex End -->
                                            <p class="mt-4 max-w-xs text-base">
                                                I've tried other AI writing tools before, but this one
                                                is by far the best. The language is sophisticated and
                                                engaging, content to the next level.
                                            </p>

                                            <div class="mt-3 flex items-center gap-1">
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 text-yellow-300"
                                                ></i>
                                            </div>
                                            <!-- flex End -->
                                        </div>
                                    </div>
                                    <div
                                        class="absolute left-0 top-0 -z-10 h-full w-full rounded-xl bg-default-200"
                                    ></div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="relative m-2 w-full lg:w-full">
                                <div class="group">
                                    <div
                                        class="w-full translate-x-1 rounded-xl border border-default-200"
                                    >
                                        <div
                                            class="relative z-10 h-full rounded-xl bg-white p-6 dark:bg-default-50"
                                        >
                                            <div class="flex items-center gap-3">
                                                <div class="rounded-full border p-1">
                                                    <img
                                                        src="/images/avatars/img-2.jpg"
                                                        class="size-12 rounded-full"
                                                        alt=""
                                                    />
                                                </div>
                                                <div>
                                                    <h3 class="text-xl font-medium text-default-950">
                                                        Marsel Fischer
                                                    </h3>
                                                    <p class="mt-1 text-sm">user</p>
                                                </div>
                                            </div>
                                            <!-- flex End -->
                                            <p class="mt-4 max-w-xs text-base">
                                                As a content marketer, I'm always looking for ways to
                                                streamline my workflow and create high-quality for me,
                                                and I don't know how I ever managed without it.
                                            </p>
                                            <div class="mt-3 flex items-center gap-1">
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 text-yellow-300"
                                                ></i>
                                            </div>
                                            <!-- flex End -->
                                        </div>
                                    </div>
                                    <div
                                        class="absolute left-0 top-0 -z-10 h-full w-full rounded-xl bg-default-200"
                                    ></div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="relative m-2 w-full lg:w-full">
                                <div class="group">
                                    <div
                                        class="w-full translate-x-1 rounded-xl border border-default-200"
                                    >
                                        <div
                                            class="relative z-10 h-full rounded-xl bg-white p-6 dark:bg-default-50"
                                        >
                                            <div class="flex items-center gap-3">
                                                <div class="rounded-full border p-1">
                                                    <img
                                                        src="/images/avatars/img-3.jpg"
                                                        class="size-12 rounded-full"
                                                        alt=""
                                                    />
                                                </div>
                                                <div>
                                                    <h3 class="text-xl font-medium text-default-950">
                                                        John Tayes
                                                    </h3>
                                                    <p class="mt-1 text-sm">user</p>
                                                </div>
                                            </div>
                                            <!-- flex End -->
                                            <p class="mt-4 max-w-xs text-base">
                                                The solutions offered by your AI chatbots are truly
                                                impressive! We are able to communicate with our
                                                customers faster and more interacti
                                            </p>

                                            <div class="mt-3 flex items-center gap-1">
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 text-yellow-300"
                                                ></i>
                                            </div>
                                            <!-- flex End -->
                                        </div>
                                    </div>
                                    <div
                                        class="absolute left-0 top-0 -z-10 h-full w-full rounded-xl bg-default-200"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- marquee__group  End -->

                    <div
                        aria-hidden="true"
                        class="marquee__group flex min-w-full flex-shrink-0 justify-around gap-8"
                    >
                        <div>
                            <div class="relative m-2 w-full lg:w-full">
                                <div class="group">
                                    <div
                                        class="w-full translate-x-1 rounded-xl border border-default-200"
                                    >
                                        <div
                                            class="relative z-10 h-full rounded-xl bg-white p-6 dark:bg-default-50"
                                        >
                                            <div class="flex items-center gap-3">
                                                <div class="rounded-full border p-1">
                                                    <img
                                                        src="/images/avatars/img-4.jpg"
                                                        class="size-12 rounded-full"
                                                        alt=""
                                                    />
                                                </div>
                                                <div>
                                                    <h3 class="text-xl font-medium text-default-950">
                                                        Ryan Jonas
                                                    </h3>
                                                    <p class="mt-1 text-sm">user</p>
                                                </div>
                                            </div>
                                            <!-- flex End -->
                                            <p class="mt-4 max-w-xs text-base">
                                                I've tried other AI writing tools before, but this one
                                                is by far the best. The language is engaging, and it's
                                                helped me take my content to the next level.
                                            </p>
                                            <div class="mt-3 flex items-center gap-1">
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 text-yellow-300"
                                                ></i>
                                            </div>
                                            <!-- flex End -->
                                        </div>
                                    </div>
                                    <div
                                        class="absolute left-0 top-0 -z-10 h-full w-full rounded-xl bg-default-200"
                                    ></div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="relative m-2 w-full lg:w-full">
                                <div class="group">
                                    <div
                                        class="w-full translate-x-1 rounded-xl border border-default-200"
                                    >
                                        <div
                                            class="relative z-10 h-full rounded-xl bg-white p-6 dark:bg-default-50"
                                        >
                                            <div class="flex items-center gap-3">
                                                <div class="rounded-full border p-1">
                                                    <img
                                                        src="/images/avatars/img-5.jpg"
                                                        class="size-12 rounded-full"
                                                        alt=""
                                                    />
                                                </div>
                                                <div>
                                                    <h3 class="text-xl font-medium text-default-950">
                                                        Randy Hilarski
                                                    </h3>
                                                    <p class="mt-1 text-sm">user</p>
                                                </div>
                                            </div>
                                            <!-- flex End -->
                                            <p class="mt-4 max-w-xs text-base">
                                                I was surprised by the ease and speed of the video
                                                editing service based on AI technology from this site.
                                                The resylts are amazing and very satisfying.
                                            </p>
                                            <div class="mt-3 flex items-center gap-1">
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 text-yellow-300"
                                                ></i>
                                            </div>
                                            <!-- flex End -->
                                        </div>
                                    </div>
                                    <div
                                        class="absolute left-0 top-0 -z-10 h-full w-full rounded-xl bg-default-200"
                                    ></div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="relative m-2 w-full lg:w-full">
                                <div class="group">
                                    <div
                                        class="w-full translate-x-1 rounded-xl border border-default-200"
                                    >
                                        <div
                                            class="relative z-10 h-full rounded-xl bg-white p-6 dark:bg-default-50"
                                        >
                                            <div class="flex items-center gap-3">
                                                <div class="rounded-full border p-1">
                                                    <img
                                                        src="/images/avatars/img-6.jpg"
                                                        class="size-12 rounded-full"
                                                        alt=""
                                                    />
                                                </div>
                                                <div>
                                                    <h3 class="text-xl font-medium text-default-950">
                                                        Jonathan Simcoe
                                                    </h3>
                                                    <p class="mt-1 text-sm">user</p>
                                                </div>
                                            </div>
                                            <!-- flex End -->
                                            <p class="mt-4 max-w-xs text-base">
                                                The solutions offered by your AI chatbots are truly
                                                impressive! We are able to communicate with our
                                                customers faster and more interactively.
                                            </p>
                                            <div class="mt-3 flex items-center gap-1">
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 fill-yellow-300 text-yellow-300"
                                                ></i>
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 text-yellow-300"
                                                ></i>
                                            </div>
                                            <!-- flex End -->
                                        </div>
                                    </div>
                                    <div
                                        class="absolute left-0 top-0 -z-10 h-full w-full rounded-xl bg-default-200"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- marquee__group  End -->
                </div>
            </div>
            <!-- end marquee -->
        </div>
        <!-- end container -->
    </section>
    <!-- End testimonials-->

    <!-- Start Blog -->
    <section id="blog" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our Blog</span
            >
                    <h2
                        class="my-4 text-3xl font-medium capitalize text-default-950 md:text-4xl"
                    >
                        Read the latest news.
                    </h2>
                </div>
            </div>
            <!-- flex End -->

            <div class="grid gap-6 xl:grid-cols-2">
                <div class="rounded-xl border border-primary/20 bg-primary/10 p-6">
                    <div class="relative h-full w-full">
                        <img
                            src="/images/landing/portfolio/img-3.jpg"
                            class="h-full w-full rounded-md"
                            alt=""
                        />
                        <div class="absolute inset-x-0 bottom-0 top-auto hidden md:block">
                            <div class="m-2 rounded-xl bg-black/10 p-2 backdrop-blur-md">
                                <div class="group text-center">
                                    <h3 class="my-3 font-medium text-white md:text-3xl">
                                        Free advertising you online business.
                                    </h3>
                                    <a
                                        href="javascript:void(0);"
                                        class="text-lg font-medium text-white"
                                    >Read More
                                        <i
                                            data-lucide="move-right"
                                            class="inline-block size-5 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                        ></i>
                                    </a>
                                </div>
                                <!-- col-span-2 End -->
                            </div>
                            <!-- grid End -->
                        </div>
                        <!-- col End -->
                    </div>
                </div>
                <!-- col End -->

                <div>
                    <div class="rounded-md border border-default-200 p-6">
                        <div class="grid gap-6 sm:grid-cols-5">
                            <div class="group sm:col-span-3">
                                <h3 class="mb-4 text-2xl font-medium text-default-950">
                                    The Definitive SEO Guide: Enhancing Your Website's
                                    Visibility
                                </h3>
                                <p class="mb-5 mt-3 text-base">
                                    Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod
                                    tempor incididunt.
                                </p>
                                <a
                                    href="javascript:void(0);"
                                    class="text-lg font-medium text-default-950"
                                >Read More
                                    <i
                                        data-lucide="move-right"
                                        class="inline-block size-5 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                    ></i>
                                </a>
                            </div>
                            <!-- col-span-2 End -->

                            <div class="col-span-2">
                                <img
                                    src="/images/landing/portfolio/img-4.jpg"
                                    class="my-auto h-full w-full rounded-md"
                                    alt=""
                                />
                            </div>
                        </div>
                        <!-- grid End -->
                    </div>
                    <!-- col End -->

                    <div class="mt-6 rounded-md border border-default-200 p-6">
                        <div class="grid gap-6 sm:grid-cols-5">
                            <div class="group sm:col-span-3">
                                <h3 class="mb-4 text-2xl font-medium text-default-950">
                                    Effective Social Media Marketing Tactics for Small
                                    Businesses
                                </h3>
                                <p class="mb-5 mt-3 text-base">
                                    Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod
                                    tempor incididunt.
                                </p>
                                <a
                                    href="javascript:void(0);"
                                    class="text-lg font-medium text-default-950"
                                >Read More
                                    <i
                                        data-lucide="move-right"
                                        class="inline-block size-5 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                    ></i>
                                </a>
                            </div>
                            <!-- col-span-2 End -->

                            <div class="col-span-2">
                                <img
                                    src="/images/landing/portfolio/img-5.jpg"
                                    class="my-auto h-full w-full rounded-md"
                                    alt=""
                                />
                            </div>
                        </div>
                        <!-- grid End -->
                    </div>
                    <!-- col End -->
                </div>
                <!-- col End -->
            </div>
            <!-- Grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End Blog -->

    <!-- Start Faq -->
    <section id="faq" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our FAQ</span
            >
                    <h2 class="my-4 text-3xl font-medium capitalize text-default-950">
                        Find Your Answers Here
                    </h2>
                    <p class="text-base">
                        Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper
                        libero, sit amet adipiscing sem neque sed ipsum.
                    </p>
                </div>
            </div>
            <!-- flex End -->

            <div class="mx-auto max-w-3xl">
                <div class="hs-accordion-group space-y-4">
                    <div
                        class="hs-accordion active overflow-hidden rounded-lg border border-primary/20 hs-accordion-active:bg-primary/10"
                        id="faq-1"
                    >
                        <button
                            class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                            aria-controls="faq-accordion-1"
                        >
                            <h5 class="flex text-base font-medium">
                                Is Subscription Upgrading Possible?
                            </h5>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                data-lucide="chevron-up"
                                class="lucide lucide-chevron-up size-4 transition-all duration-300 hs-accordion-active:-rotate-180"
                            >
                                <path d="m18 15-6-6-6 6"></path>
                            </svg>
                        </button>
                        <div
                            id="faq-accordion-1"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-1"
                        >
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->

                    <div
                        class="hs-accordion overflow-hidden rounded-lg border border-primary/20 hs-accordion-active:bg-primary/10"
                        id="faq-2"
                    >
                        <button
                            class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                            aria-controls="faq-2"
                        >
                            <h5 class="flex text-base font-medium">
                                Guaranteed First-Page Google Placement?
                            </h5>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                data-lucide="chevron-up"
                                class="lucide lucide-chevron-up size-4 transition-all duration-300 hs-accordion-active:-rotate-180"
                            >
                                <path d="m18 15-6-6-6 6"></path>
                            </svg>
                        </button>
                        <div
                            id="faq-2"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-2"
                        >
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->

                    <div
                        class="hs-accordion overflow-hidden rounded-lg border border-primary/20 hs-accordion-active:bg-primary/10"
                        id="faq-3"
                    >
                        <button
                            class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                            aria-controls="faq-3"
                        >
                            <h5 class="flex text-base font-medium">
                                Tailored Marketing Approaches?
                            </h5>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                data-lucide="chevron-up"
                                class="lucide lucide-chevron-up size-4 transition-all duration-300 hs-accordion-active:-rotate-180"
                            >
                                <path d="m18 15-6-6-6 6"></path>
                            </svg>
                        </button>
                        <div
                            id="faq-3"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-3"
                        >
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->

                    <div
                        class="hs-accordion overflow-hidden rounded-lg border border-primary/20 hs-accordion-active:bg-primary/10"
                        id="faq-3"
                    >
                        <button
                            class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                            aria-controls="faq-3"
                        >
                            <h5 class="flex text-base font-medium">
                                Do You Offer Local SEO Services?
                            </h5>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                data-lucide="chevron-up"
                                class="lucide lucide-chevron-up size-4 transition-all duration-300 hs-accordion-active:-rotate-180"
                            >
                                <path d="m18 15-6-6-6 6"></path>
                            </svg>
                        </button>
                        <div
                            id="faq-3"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-3"
                        >
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->

                    <div
                        class="hs-accordion overflow-hidden rounded-lg border border-primary/20 hs-accordion-active:bg-primary/10"
                        id="faq-3"
                    >
                        <button
                            class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                            aria-controls="faq-3"
                        >
                            <h5 class="flex text-base font-medium">
                                Is Blogging Crucial for SEO Success?
                            </h5>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                data-lucide="chevron-up"
                                class="lucide lucide-chevron-up size-4 transition-all duration-300 hs-accordion-active:-rotate-180"
                            >
                                <path d="m18 15-6-6-6 6"></path>
                            </svg>
                        </button>
                        <div
                            id="faq-3"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-3"
                        >
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->

                    <div
                        class="hs-accordion overflow-hidden rounded-lg border border-primary/20 hs-accordion-active:bg-primary/10"
                        id="faq-3"
                    >
                        <button
                            class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                            aria-controls="faq-3"
                        >
                            <h5 class="flex text-base font-medium">
                                What's the ROI of Digital Marketing?
                            </h5>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                data-lucide="chevron-up"
                                class="lucide lucide-chevron-up size-4 transition-all duration-300 hs-accordion-active:-rotate-180"
                            >
                                <path d="m18 15-6-6-6 6"></path>
                            </svg>
                        </button>
                        <div
                            id="faq-3"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-3"
                        >
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
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

    <section class="py-10 lg:pb-20">
        <div class="container">
            <div
                class="rounded-lg border border-primary/20 bg-primary/5 bg-cover bg-no-repeat"
            >
                <div class="px-6 py-20">
                    <div class="mx-auto max-w-2xl text-center">
                        <h2
                            class="mt-5 text-3xl font-medium text-default-950 md:text-4xl"
                        >
                            Embark on Your SEO Journey with Us
                        </h2>
                        <p class="mt-6 text-base text-default-950">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                        </p>
                        <div class="inline-block">
                            <a
                                href="#"
                                class="mt-6 flex items-center justify-center gap-2 rounded-md border border-primary bg-primary/90 px-6 py-2 text-white transition-all hover:bg-primary"
                            >Get started <i data-lucide="move-right" class="size-5"></i
                                ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End container -->
    </section>
@endsection

@section('script-bottom')

@endsection

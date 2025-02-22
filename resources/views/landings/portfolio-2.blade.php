@extends('layouts.landing', ['title' => 'Enoch and Mary Missions Organization'])

@section('css')

@endsection

@section('content')
    @include('layouts.shared.navbar', [
        'menuPosition' => 'fixed',
        'navItems' => [
            (object)['id' => 'home','name' => 'Home'],
            (object)['id' => 'about','name' => 'About'],
            (object)['id' => 'project','name' => 'Project'],
            (object)['id' => 'portfolio','name' => 'Portfolio'],
            (object)['id' => 'advantage','name' => 'Advantage'],
            (object)['id' => 'testimonials','name' => 'Testimonials'],
            (object)['id' => 'blog','name' => 'Blog'],
            ]
        ])

    <!-- Start Hero -->
    <section
        id="home"
        class="flex items-center justify-center overflow-hidden bg-gradient-to-t from-red-600/40 via-violet-600/40 to-blue-600/40 py-10 dark:from-gray-700 dark:via-gray-900 dark:to-black"
    >
        <div class="container">
            <div class="grid grid-cols-1 items-center gap-6 xl:grid-cols-2">
                <div>
            <span
                class="rounded-md border border-white/40 px-3 py-1 text-xs font-medium uppercase tracking-wider text-default-950"
            >App Designer</span
            >
                    <h2 class="mt-3 text-5xl/snug font-medium text-default-950">
                        I'm Diego, an App Designer.
                    </h2>
                    <p class="mt-4 text-base">
                        Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus.
                        Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing,
                        dui.
                    </p>

                    <div class="mt-8 max-w-xl rounded-md bg-default-50">
                        <form class="flex w-full items-center justify-between">
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="w-full border-0 bg-transparent px-4 py-3 text-base text-default-950 focus:outline-none focus:ring-0"
                                placeholder="Enter Your Email"
                                autocomplete="off"
                            />
                            <button
                                class="me-2 rounded-md border-0 bg-primary/90 px-6 py-2 text-sm font-medium text-white transition-all duration-300 hover:bg-primary"
                            >
                                <div class="flex items-center justify-center gap-1">
                                    <span>Submit</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </button>
                        </form>
                    </div>

                    <div class="mt-8 flex items-center gap-6">
                        <div class="flex -space-x-2">
                            <img
                                class="inline-block size-12 rounded-full bg-white shadow-md ring-2 ring-default-50"
                                src="/images/avatars/img-1.jpg"
                                alt="Image Description"
                            />
                            <img
                                class="inline-block size-12 rounded-full bg-white shadow-md ring-2 ring-default-50"
                                src="/images/avatars/img-2.jpg"
                                alt="Image Description"
                            />
                            <img
                                class="inline-block size-12 rounded-full bg-white shadow-md ring-2 ring-default-50"
                                src="/images/avatars/img-3.jpg"
                                alt="Image Description"
                            />
                            <button
                                class="size-12 rounded-full border border-primary/50 bg-primary/30 font-medium text-primary shadow-md backdrop-blur-md"
                            >
                                80+
                            </button>
                        </div>
                        <div class="text-center">
                            <h2 class="text-2xl font-medium text-default-950">200+</h2>
                            <p class="text-sm">Happy Clients</p>
                        </div>
                    </div>
                </div>

                <div class="lg:-mb-10">
                    <img
                        src="/images/landing/portfolio-2/img-10.png"
                        class="mx-auto xl:h-full xl:w-full"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Start marq -->
    <section class="">
        <div class="relative m-auto flex gap-28 overflow-hidden bg-black py-6">
            <div
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <h2 class="text-4xl text-white">UI-UX Experience</h2>
                <h2 class="text-4xl text-white">Web Development</h2>
                <h2 class="text-4xl text-white">Digital Marketing</h2>
                <h2 class="text-4xl text-white">Product Design</h2>
                <h2 class="text-4xl text-white">Mobile Solutions</h2>
            </div>
            <!-- marquee__group End-->

            <div
                aria-hidden="true"
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <h2 class="text-4xl text-white">UI-UX Experience</h2>
                <h2 class="text-4xl text-white">Web Development</h2>
                <h2 class="text-4xl text-white">Digital Marketing</h2>
                <h2 class="text-4xl text-white">Product Design</h2>
                <h2 class="text-4xl text-white">Mobile Solutions</h2>
            </div>
            <!-- marquee__group End-->
        </div>
        <!-- flex End -->
    </section>
    <!-- End marq Section -->

    <!-- Start About -->
    <section id="about" class="py-10 lg:py-20">
        <div class="container">
            <div class="grid items-center gap-6 xl:grid-cols-5">
                <div class="xl:col-span-2">
                    <div>
                        <img
                            src="/images/avatars/img-1.jpg"
                            class="mx-auto h-80 rounded-full"
                            alt=""
                        />
                    </div>
                </div>

                <div class="xl:col-span-3">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our About</span
            >
                    <h2 class="mt-4 text-4xl font-medium text-default-950">
                        Entrepreneur of the Year
                    </h2>
                    <h4 class="mt-5 text-xl font-medium text-default-400">
                        Hello! I'm Diego, a self-taught and award-winning Digital Designer
                        and Developer with more than fifteen years of professional
                        experience. I began my journey in my childhood bedroom and honed
                        my skills at renowned digital agencies like nexum AG.
                    </h4>

                    <div class="mt-6 flex flex-wrap items-center gap-6">
                        <div
                            class="w-48 rounded-xl bg-white p-4 text-center drop-shadow-md dark:bg-default-50"
                        >
                            <h2 class="text-4xl font-medium text-default-950">200+</h2>
                            <p class="mt-2 text-base">Project Delivered</p>
                        </div>

                        <div
                            class="w-48 rounded-xl bg-white p-4 text-center drop-shadow-md dark:bg-default-50"
                        >
                            <h2 class="text-4xl font-medium text-default-950">20+</h2>
                            <p class="mt-2 text-base">Years of Experience</p>
                        </div>

                        <div
                            class="w-48 rounded-xl bg-white p-4 text-center drop-shadow-md dark:bg-default-50"
                        >
                            <h2 class="text-4xl font-medium text-default-950">45+</h2>
                            <p class="mt-2 text-base">Happy Clients</p>
                        </div>
                    </div>
                    <div class="inline-block">
                        <a
                            href="#"
                            class="mt-6 flex items-center justify-center gap-2 rounded-md border border-primary bg-primary/90 px-6 py-2 text-lg text-white transition-all hover:bg-primary"
                        >Read more <i data-lucide="move-right" class="size-7"></i
                            ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Start Project -->
    <section id="project" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our Project</span
            >
                    <h2 class="mt-4 text-4xl font-medium capitalize text-default-950">
                        Recent Endeavors
                    </h2>
                </div>
            </div>
            <!-- flex End -->

            <div class="grid grid-cols-1 items-center gap-6 md:grid-cols-2">
                <div class="group relative">
                    <img
                        src="/images/landing/portfolio-2/img-2.jpg"
                        class="h-full w-full rounded-xl"
                        alt=""
                    />

                    <div
                        class="absolute inset-x-2 bottom-2 rounded-md bg-white/10 opacity-0 backdrop-blur-xl transition-all duration-500 group-hover:opacity-100"
                    >
                        <div class="p-6 text-center">
                            <h2 class="text-3xl font-medium text-white">
                                Branding Identity
                            </h2>
                            <p class="mt-2 text-base text-white">Branding</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="group relative">
                        <img
                            src="/images/landing/portfolio-2/img-3.jpg"
                            class="h-full w-full rounded-xl"
                            alt=""
                        />

                        <div
                            class="absolute inset-x-2 bottom-2 rounded-md bg-white/10 opacity-0 backdrop-blur-xl transition-all duration-500 group-hover:opacity-100"
                        >
                            <div class="p-6 text-center">
                                <h2 class="text-3xl font-medium text-white">
                                    The Space Needle
                                </h2>
                                <p class="mt-2 text-base text-white">Branding</p>
                            </div>
                        </div>
                    </div>

                    <div class="group relative mt-5">
                        <img
                            src="/images/landing/portfolio-2/img-4.jpg"
                            class="h-full w-full rounded-xl"
                            alt=""
                        />

                        <div
                            class="absolute inset-x-2 bottom-2 rounded-md bg-white/10 opacity-0 backdrop-blur-xl transition-all duration-500 group-hover:opacity-100"
                        >
                            <div class="p-6 text-center">
                                <h2 class="text-3xl font-medium text-white">
                                    Emergency Response and Cleanup
                                </h2>
                                <p class="mt-2 text-base text-white">Branding</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 flex justify-center">
                <div class="inline-block">
                    <a
                        href="#"
                        class="mt-6 flex items-center justify-center gap-2 rounded-md border border-default-300 px-6 py-2 text-base text-default-950 transition-all hover:border-primary hover:bg-primary hover:text-white"
                    >All Project <i data-lucide="move-right" class="size-7"></i
                        ></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project -->

    <section id="advantage" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our Advantage</span
            >
                    <h2 class="mt-4 text-4xl font-medium capitalize text-default-950">
                        Abilities & Resources
                    </h2>
                    <p class="mt-4 text-base">
                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                        Cras dapibus. Vivamus elementum semper nisi.
                    </p>
                </div>
            </div>
            <!-- flex End -->

            <div class="flex flex-wrap items-center gap-6">
                <div class="mx-auto text-center">
                    <div
                        class="flex h-44 w-44 items-center justify-center rounded-full border border-primary/20 bg-primary/10"
                    >
                        <div class="text-center">
                            <i data-lucide="figma" class="size-10 text-default-950"></i>

                            <h3 class="mt-4 text-2xl font-medium text-default-950">94%</h3>
                        </div>
                    </div>
                    <h2 class="mt-5 text-2xl font-medium text-default-950">Figma</h2>
                </div>

                <div class="mx-auto text-center">
                    <div
                        class="flex h-44 w-44 items-center justify-center rounded-full border border-primary/20 bg-primary/10"
                    >
                        <div class="text-center">
                            <i
                                data-lucide="triangle"
                                class="size-10 text-default-950"
                            ></i>

                            <h3 class="mt-4 text-2xl font-medium text-default-950">82%</h3>
                        </div>
                    </div>
                    <h2 class="mt-5 text-2xl font-medium text-default-950">Sketch</h2>
                </div>

                <div class="mx-auto text-center">
                    <div
                        class="flex h-44 w-44 items-center justify-center rounded-full border border-primary/20 bg-primary/10"
                    >
                        <div class="text-center">
                            <i
                                data-lucide="instagram"
                                class="size-10 text-default-950"
                            ></i>

                            <h3 class="mt-4 text-2xl font-medium text-default-950">98%</h3>
                        </div>
                    </div>
                    <h2 class="mt-5 text-2xl font-medium text-default-950">
                        Photoshop
                    </h2>
                </div>

                <div class="mx-auto text-center">
                    <div
                        class="flex h-44 w-44 items-center justify-center rounded-full border border-primary/20 bg-primary/10"
                    >
                        <div class="text-center">
                            <i data-lucide="twitter" class="size-10 text-default-950"></i>

                            <h3 class="mt-4 text-2xl font-medium text-default-950">84%</h3>
                        </div>
                    </div>
                    <h2 class="mt-5 text-2xl font-medium text-default-950">
                        Adobe xDS
                    </h2>
                </div>

                <div class="mx-auto text-center">
                    <div
                        class="flex h-44 w-44 items-center justify-center rounded-full border border-primary/20 bg-primary/10"
                    >
                        <div class="text-center">
                            <i
                                data-lucide="linkedin"
                                class="size-10 text-default-950"
                            ></i>

                            <h3 class="mt-4 text-2xl font-medium text-default-950">78%</h3>
                        </div>
                    </div>
                    <h2 class="mt-5 text-2xl font-medium text-default-950">
                        Invisionapp
                    </h2>
                </div>

                <div class="mx-auto text-center">
                    <div
                        class="flex h-44 w-44 items-center justify-center rounded-full border border-primary/20 bg-primary/10"
                    >
                        <div class="text-center">
                            <i data-lucide="layers" class="size-10 text-default-950"></i>

                            <h3 class="mt-4 text-2xl font-medium text-default-950">84%</h3>
                        </div>
                    </div>
                    <h2 class="mt-5 text-2xl font-medium text-default-950">
                        Illustrator
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our Accolades</span
            >
                    <h2
                        class="mt-4 text-3xl font-medium capitalize text-default-950 md:text-4xl"
                    >
                        Accolades & Acknowledgments
                    </h2>
                    <p class="mt-4 text-base">
                        Praesent ac massa at ligula laoreet iaculis. Nulla neque dolor,
                        sagittis eget, iaculis quis, molestie non, velit.
                    </p>
                </div>
            </div>
            <!-- flex End -->

            <div>
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                    <div>
                        <a href="#" class="group">
                            <div class="flex items-center justify-between p-5">
                                <div>
                                    <h2 class="text-2xl font-medium text-default-950">
                                        Awwwards Site of the Day
                                    </h2>
                                    <p class="mt-1 text-base">For Exhibition in 2023</p>
                                </div>
                                <div>
                                    <div
                                        class="flex size-10 items-center justify-center rounded-full border border-default-200 text-default-950 transition-all duration-500 group-hover:border-transparent group-hover:bg-black group-hover:text-white"
                                    >
                                        <i data-lucide="arrow-up-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="group">
                            <div
                                class="flex items-center justify-between border-y border-default-200 p-5"
                            >
                                <div>
                                    <h2 class="text-2xl font-medium text-default-950">
                                        coderthemes.com
                                    </h2>
                                    <p class="mt-1 text-base">Interview 2023</p>
                                </div>
                                <div>
                                    <div
                                        class="flex size-10 items-center justify-center rounded-full border border-default-200 text-default-950 transition-all duration-500 group-hover:border-transparent group-hover:bg-black group-hover:text-white"
                                    >
                                        <i data-lucide="arrow-up-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="group">
                            <div class="flex items-center justify-between p-5">
                                <div>
                                    <h2 class="text-2xl font-medium text-default-950">
                                        CSS Awardssa
                                    </h2>
                                    <p class="mt-1 text-base">Featured in 2023</p>
                                </div>
                                <div>
                                    <div
                                        class="flex size-10 items-center justify-center rounded-full border border-default-200 text-default-950 transition-all duration-500 group-hover:border-transparent group-hover:bg-black group-hover:text-white"
                                    >
                                        <i data-lucide="arrow-up-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="#" class="group">
                            <div class="flex items-center justify-between p-5">
                                <div>
                                    <h2 class="text-2xl font-medium text-default-950">Muzli</h2>
                                    <p class="mt-1 text-base">Featured in 2023</p>
                                </div>
                                <div>
                                    <div
                                        class="flex size-10 items-center justify-center rounded-full border border-default-200 text-default-950 transition-all duration-500 group-hover:border-transparent group-hover:bg-black group-hover:text-white"
                                    >
                                        <i data-lucide="arrow-up-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="group">
                            <div
                                class="flex items-center justify-between border-y border-default-200 p-5"
                            >
                                <div>
                                    <h2 class="text-2xl font-medium text-default-950">
                                        Awwwards
                                    </h2>
                                    <p class="mt-1 text-base">Awarded to Muteza in 2023</p>
                                </div>
                                <div>
                                    <div
                                        class="flex size-10 items-center justify-center rounded-full border border-default-200 text-default-950 transition-all duration-500 group-hover:border-transparent group-hover:bg-black group-hover:text-white"
                                    >
                                        <i data-lucide="arrow-up-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="group">
                            <div class="flex items-center justify-between p-5">
                                <div>
                                    <h2 class="text-2xl font-medium text-default-950">
                                        Chapters Studio
                                    </h2>
                                    <p class="mt-1 text-base">On Display in 2023</p>
                                </div>
                                <div>
                                    <div
                                        class="flex size-10 items-center justify-center rounded-full border border-default-200 text-default-950 transition-all duration-500 group-hover:border-transparent group-hover:bg-black group-hover:text-white"
                                    >
                                        <i data-lucide="arrow-up-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Testimonials -->
    <section id="testimonials" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our Testimonials</span
            >
                    <h2 class="mt-4 text-4xl font-medium capitalize text-default-950">
                        Feedback from Our Clients
                    </h2>
                    <p class="mt-4 text-base">
                        Sed hendrerit. Morbi ac felis. Nunc egestas, augue at pellentesque
                        laoreet, felis eros vehicula leo, at malesuada velit leo quis
                        pede.
                    </p>
                </div>
            </div>
            <!-- flex End -->

            <div class="rounded-xl bg-default-100 p-6">
                <div class="grid grid-cols-1 lg:grid-cols-5">
                    <div class="col-span-2">
                        <div>
                            <img
                                src="/images/landing/portfolio-2/img-1.jpg"
                                class="rounded-xl"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- col End -->

                    <div class="relative col-span-3">
                        <!--Start Swiper -->
                        <div class="swiper testimonials relative rounded-md">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="pt-3">
                                        <div class="flex items-center gap-5">
                                            <img
                                                src="/images/avatars/img-3.jpg"
                                                class="size-16 rounded-full border-4 border-white/20"
                                                alt=""
                                            />
                                            <div>
                                                <h3 class="text-xl font-medium text-default-950">
                                                    Farhan Firoz
                                                </h3>
                                                <p class="text-base">Founder & CEO</p>
                                            </div>
                                        </div>
                                        <!-- flex End -->
                                        <p class="mt-5 text-base">
                                            "This template is exquisitely designed and offers
                                            fantastic new features. It receives regular updates,
                                            ensuring top-notch quality. The support team is
                                            unparalleled, providing prompt, courteous, premium, and
                                            exceptionally helpful assistance!"
                                        </p>
                                        <div class="mt-5 flex items-center gap-2">
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                        </div>
                                        <!-- flex End -->
                                    </div>
                                </div>
                                <!-- swiper-slide End -->

                                <div class="swiper-slide">
                                    <div class="pt-3">
                                        <div class="flex items-center gap-5">
                                            <img
                                                src="/images/avatars/img-1.jpg"
                                                class="size-16 rounded-full border-4 border-white/20"
                                                alt=""
                                            />
                                            <div>
                                                <h3 class="text-xl font-medium text-default-950">
                                                    Robert Henricks
                                                </h3>
                                                <p class="text-base">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <!-- flex End -->
                                        <p class="mt-5 text-base">
                                            "Optimization and structure are excellent for SEO
                                            fundamentals. An impressive model, everything has been
                                            meticulously crafted, from the design to the various
                                            adaptations. A beautiful template with clean code that's
                                            easy to customize."
                                        </p>
                                        <div class="mt-5 flex items-center gap-2">
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                        </div>
                                        <!-- flex End -->
                                    </div>
                                </div>
                                <!-- swiper-slide End -->

                                <div class="swiper-slide">
                                    <div class="pt-3">
                                        <div class="flex items-center gap-5">
                                            <img
                                                src="/images/avatars/img-5.jpg"
                                                class="size-16 rounded-full border-4 border-white/20"
                                                alt=""
                                            />
                                            <div>
                                                <h3 class="text-xl font-medium text-default-950">
                                                    Albert Flores
                                                </h3>
                                                <p class="text-base">Marketing Officer</p>
                                            </div>
                                        </div>
                                        <!-- flex End -->
                                        <p class="mt-5 text-base">
                                            "This template is exquisitely designed and offers
                                            fantastic new features. It receives regular updates,
                                            ensuring top-notch quality. The support team is
                                            unparalleled, providing prompt, courteous, premium, and
                                            exceptionally helpful assistance!"
                                        </p>
                                        <div class="mt-5 flex items-center gap-2">
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                        </div>
                                        <!-- flex End -->
                                    </div>
                                </div>
                                <!-- swiper-slide End -->

                                <div class="swiper-slide">
                                    <div class="pt-3">
                                        <div class="flex items-center gap-5">
                                            <img
                                                src="/images/avatars/img-4.jpg"
                                                class="size-16 rounded-full border-4 border-white/20"
                                                alt=""
                                            />
                                            <div>
                                                <h3 class="text-xl font-medium text-default-950">
                                                    Rudra Ghosh
                                                </h3>
                                                <p class="text-base">Founder & CEO</p>
                                            </div>
                                        </div>
                                        <!-- flex End -->
                                        <p class="mt-5 text-base">
                                            "Optimization and structure are excellent for SEO
                                            fundamentals. An impressive model, everything has been
                                            meticulously crafted, from the design to the various
                                            adaptations. A beautiful template with clean code that's
                                            easy to customize."
                                        </p>
                                        <div class="mt-5 flex items-center gap-2">
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 stroke-yellow-300"
                                            ></i>
                                        </div>
                                        <!-- flex End -->
                                    </div>
                                </div>
                                <!-- swiper-slide End -->
                            </div>
                        </div>
                        <!--End Swiper -->

                        <div
                            class="relative flex items-center justify-start gap-5 py-4 pe-10"
                        >
                            <div class="testimonials-button-prev">
                                <div
                                    class="flex size-10 items-center justify-center rounded-lg border border-default-300 bg-default-50 transition-all duration-500 hover:border-primary hover:bg-primary hover:text-white"
                                >
                                    <i data-lucide="chevron-left" class="size-6"></i>
                                </div>
                            </div>
                            <div class="testimonials-button-next">
                                <div
                                    class="flex size-10 items-center justify-center rounded-lg border border-default-300 bg-default-50 transition-all duration-500 hover:border-primary hover:bg-primary hover:text-white"
                                >
                                    <i data-lucide="chevron-right" class="size-6"></i>
                                </div>
                            </div>
                        </div>
                        <!-- flex end -->
                    </div>
                    <!-- col End -->
                </div>
                <!-- grid End -->
            </div>
        </div>
        <!-- container End -->
    </section>
    <!-- End Testimonials -->

    <!-- Start Blog -->
    <section id="blog" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our Blog</span
            >
                    <h2 class="mt-4 text-4xl font-medium capitalize text-default-950">
                        Tools for Advancement
                    </h2>
                    <p class="mt-4 text-base">
                        Proin viverra, ligula sit amet ultrices semper, ligula arcu
                        tristique sapien, a accumsan nisi mauris ac eros.
                    </p>
                </div>
            </div>
            <!-- flex End -->

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                <div class="overflow-hidden rounded-xl border border-default-200">
                    <img src="/images/landing/portfolio-2/img-7.jpg" alt=""/>
                    <div class="p-4">
                        <div class="flex items-center gap-6">
                            <div class="flex items-center gap-2">
                                <i
                                    data-lucide="calendar-days"
                                    class="size-5 text-default-950"
                                ></i>
                                <p class="text-base text-default-950">OSctober 10,2023</p>
                            </div>
                            <p class="text-base text-default-950">Branding</p>
                        </div>
                        <a href="#">
                            <h2 class="mt-3 text-2xl font-medium text-default-950">
                                Six Hands-On Exercises for Mastering UI/UX Design.
                            </h2>
                        </a>
                    </div>
                </div>

                <div class="overflow-hidden rounded-xl border border-default-200">
                    <img src="/images/landing/portfolio-2/img-5.jpg" alt=""/>
                    <div class="p-4">
                        <div class="flex items-center gap-6">
                            <div class="flex items-center gap-2">
                                <i
                                    data-lucide="calendar-days"
                                    class="size-5 text-default-950"
                                ></i>
                                <p class="text-base text-default-950">June 16,2023</p>
                            </div>
                            <p class="text-base text-default-950">Branding</p>
                        </div>
                        <a href="#">
                            <h2 class="mt-3 text-2xl font-medium text-default-950">
                                Designing a Photoshoot Environment
                            </h2>
                        </a>
                    </div>
                </div>

                <div class="overflow-hidden rounded-xl border border-default-200">
                    <img src="/images/landing/portfolio-2/img-6.jpg" alt=""/>
                    <div class="p-4">
                        <div class="flex items-center gap-6">
                            <div class="flex items-center gap-2">
                                <i
                                    data-lucide="calendar-days"
                                    class="size-5 text-default-950"
                                ></i>
                                <p class="text-base text-default-950">May 25,2023</p>
                            </div>
                            <p class="text-base text-default-950">Branding</p>
                        </div>
                        <a href="#">
                            <h2 class="mt-3 text-2xl font-medium text-default-950">
                                The Essentials of Conversion-Oriented Design
                            </h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog -->

    <section class="bg-default-100 py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto text-center">
                <h2
                    class="mt-5 text-3xl font-medium text-default-950 md:text-4xl/tight"
                >
                    Let's Explore the Next Major Innovation
                </h2>
                <p class="mt-6 text-base text-default-950">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris.
                </p>
                <div class="mt-7 flex flex-wrap items-center justify-center gap-6">
                    <a
                        href="#"
                        class="flex items-center justify-center gap-2 rounded-lg bg-primary/90 px-8 py-3 text-lg text-white transition-all hover:bg-primary"
                    >Write A Message <i data-lucide="move-right" class="size-7"></i
                        ></a>
                    <a
                        href="#"
                        class="flex items-center justify-center gap-2 rounded-lg bg-black px-8 py-3 text-lg text-white transition-all"
                    >Discuss Project <i data-lucide="move-right" class="size-7"></i
                        ></a>
                </div>
            </div>
            <!-- flex End -->
        </div>
        <!-- container End -->
    </section>
@endsection

@section('script-bottom')

@endsection

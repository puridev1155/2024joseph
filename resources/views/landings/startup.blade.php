@extends('layouts.landing', ['title' => 'Enoch and Mary Missions Organization'])

@section('css')

@endsection

@section('content')
    @include('layouts.shared.navbar', [
        'menuPosition' => 'fixed',
        'navItems' => [
            (object)['id' => 'home','name' => 'Home'],
            (object)['id' => 'about','name' => 'About'],
            (object)['id' => 'services','name' => 'Services'],
            (object)['id' => 'work','name' => 'Work'],
            (object)['id' => 'testimonials','name' => 'Testimonials'],
            (object)['id' => 'blog','name' => 'Blog'],
            ]
        ])

    <!-- Hero Section Start -->
    <section
        id="home"
        class="relative flex items-center justify-center overflow-hidden bg-default-100 bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat pb-10 pt-24 dark:bg-default-50 dark:bg-[url('/public/images/other/bg-lines-2-dark.png')] lg:py-28"
    >
        <div class="container">
            <div class="relative">
                <div class="grid items-center gap-6 lg:grid-cols-2">
                    <div class="max-w-xl">
              <span
                  class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
              >startups Marketing</span
              >
                        <h2
                            class="my-5 text-4xl font-medium text-default-950 md:text-5xl/tight"
                        >
                            Easily, Quickly Craft Your Stunning Online Presence
                        </h2>
                        <p class="mb-10 text-base">
                            We're a renowned studio with expertise in design and
                            engineering. Our objective is to bring significance to the work
                            process.
                        </p>
                        <a
                            href="#"
                            class="rounded-md bg-primary px-6 py-3 text-white transition-all duration-300 hover:bg-primary-500"
                        >Reach Out to Us</a
                        >
                    </div>
                    <!-- col End -->

                    <div>
                        <div class="relative">
                            <div class="relative z-10 hidden xl:block">
                                <div
                                    class="before:absolute before:-end-10 before:-top-10 before:-z-10 before:h-28 before:w-28 before:bg-[url('/public/images/other/dot.svg')]"
                                ></div>
                            </div>

                            <!-- Slider -->
                            <div
                                data-hs-carousel='{"loadingClasses": "opacity-0","isAutoPlay": true}'
                                class="relative z-20"
                            >
                                <div
                                    class="hs-carousel relative min-h-[350px] w-full overflow-hidden rounded-lg lg:min-h-[650px]"
                                >
                                    <div
                                        class="hs-carousel-body absolute bottom-0 start-0 top-0 flex flex-nowrap opacity-0 transition-transform duration-700"
                                    >
                                        <div class="hs-carousel-slide">
                                            <img
                                                src="/images/landing/startup/img-11.jpg"
                                                alt=""
                                                class="h-full w-full"
                                            />
                                        </div>
                                        <div class="hs-carousel-slide">
                                            <img
                                                src="/images/landing/startup/img-12.jpg"
                                                alt=""
                                                class="h-full w-full"
                                            />
                                        </div>
                                    </div>
                                </div>

                                <div class="hidden xl:block">
                                    <button
                                        type="button"
                                        class="hs-carousel-prev hs-carousel:disabled:opacity-50 absolute inset-y-0 start-0 inline-flex h-full w-[46px] -translate-x-1/2 items-center justify-center text-gray-800 disabled:pointer-events-none"
                                    >
                                        <div
                                            class="inline-flex size-10 items-center justify-center rounded-full bg-gray-100 text-primary shadow transition-all hover:bg-primary hover:text-white"
                                        >
                                            <i data-lucide="chevron-left" class="size-6"></i>
                                        </div>
                                        <span class="sr-only">Previous</span>
                                    </button>
                                    <button
                                        type="button"
                                        class="hs-carousel-next hs-carousel:disabled:opacity-50 absolute inset-y-0 end-0 inline-flex h-full w-[46px] translate-x-1/2 items-center justify-center text-gray-800 disabled:pointer-events-none"
                                    >
                                        <span class="sr-only">Next</span>
                                        <div
                                            class="inline-flex size-10 items-center justify-center rounded-full bg-gray-100 text-primary shadow transition-all hover:bg-primary hover:text-white"
                                        >
                                            <i data-lucide="chevron-right" class="size-6"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <!-- End Slider -->

                            <div class="relative z-10 hidden xl:block">
                                <div
                                    class="after:absolute after:-bottom-10 after:-start-10 after:-z-10 after:h-28 after:w-28 after:bg-[url('/public/images/other/dot.svg')]"
                                ></div>
                            </div>
                        </div>
                    </div>
                    <!-- col End -->
                </div>
                <!-- grid End -->
            </div>
        </div>
        <!-- container End -->
    </section>
    <!-- Hero Section End -->

    <!-- About Start -->
    <section id="about" class="py-10 lg:py-20">
        <div class="container">
            <div class="grid grid-cols-1 items-center gap-6 xl:grid-cols-2">
                <div class="relative mb-20 lg:mb-0">
                    <div class="relative">
                        <img
                            src="/images/landing/startup/img-3.jpg"
                            class="mx-auto rounded-xl"
                            alt=""
                        />
                    </div>
                    <div class="absolute inset-x-0 -bottom-14 hidden sm:block">
                        <img
                            src="/images/landing/startup/img-10.jpg"
                            class="h-full rounded-xl"
                            alt=""
                        />
                    </div>
                </div>
                <!-- col End -->

                <div>
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >About Our Studio</span
            >
                    <h2 class="mt-6 text-4xl/tight font-medium text-default-950">
                        We trust designers driven by passion
                    </h2>
                    <p class="mt-5 text-base">
                        Etiam fermentum vehicula faucibus. Praesent ullamcorper urna id
                        arcu molestie scelerisque. Sed imperdiet tristique mauris et
                        faucibus. Maecenas semper augue non fringilla placerat. Curabitur
                        luctus erat sit amet ultricies aliquam. Donec dictum convallis
                        mauris et maximus. Nullam massa arcu, porta quis felis et,
                        eleifend varius quam.
                    </p>
                    <ul role="list" class="mt-6 space-y-2">
                        <li class="flex items-center gap-2">
                            <!-- svg icon -->
                            <i
                                data-lucide="minus"
                                class="inline-block size-7 text-primary"
                            ></i>
                            <span class="text-base"
                            >Lorem ipsum dolor sit amet, consectetur adipiscing.</span
                            >
                        </li>
                        <li class="flex items-center gap-2">
                            <!-- svg icon -->
                            <i
                                data-lucide="minus"
                                class="inline-block size-7 text-primary"
                            ></i>
                            <span class="text-base"
                            >Vivamus hendrerit eros vitae tincidunt vulputate.</span
                            >
                        </li>
                        <li class="flex items-center gap-2">
                            <!-- svg icon -->
                            <i
                                data-lucide="minus"
                                class="inline-block size-7 text-primary"
                            ></i>
                            <span class="text-base"
                            >Aenean at bibendum enim. In auctor consectetur urna.</span
                            >
                        </li>
                        <li class="flex items-center gap-2">
                            <!-- svg icon -->
                            <i
                                data-lucide="minus"
                                class="inline-block size-7 text-primary"
                            ></i>
                            <span class="text-base"
                            >Proin ut gravida lorem, quis scelerisque metus.</span
                            >
                        </li>
                    </ul>
                    <!-- End list -->
                    <div class="mt-10">
                        <a
                            href="#"
                            class="inline-flex items-center justify-center gap-2 rounded-md border border-default-300 px-8 py-2 text-base text-default-900 transition-all hover:border-primary hover:bg-primary hover:text-white"
                        >Read More
                            <i data-lucide="move-right" class="size-6"></i>
                        </a>
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- About End -->

    <!-- Start Steps Section -->
    <section id="services" class="p-8 md:p-16">
        <div
            class="rounded-xl bg-default-100 bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat px-6 py-20 dark:bg-default-50 dark:bg-[url('/public/images/other/bg-lines-2-dark.png')]"
        >
            <div class="container">
                <div class="relative">
                    <div class="rounded-md p-6">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-4">
                            <div
                                class="rounded-xl bg-white p-6 py-12 text-center drop-shadow-md dark:bg-default-100"
                            >
                                <h2 class="text-5xl font-medium text-default-950">180+</h2>
                                <p class="mt-3 text-base text-default-950">
                                    Completed Projects
                                </p>
                            </div>
                            <!-- col End -->

                            <div
                                class="rounded-xl bg-white p-6 py-12 text-center drop-shadow-md dark:bg-default-100"
                            >
                                <h2 class="text-5xl font-medium text-default-950">90+</h2>
                                <p class="mt-3 text-base text-default-950">
                                    Satisfied Clients
                                </p>
                            </div>
                            <!-- col End -->

                            <div
                                class="rounded-xl bg-white p-6 py-12 text-center drop-shadow-md dark:bg-default-100"
                            >
                                <h2 class="text-5xl font-medium text-default-950">30k</h2>
                                <p class="mt-3 text-base text-default-950">Cups of Coffee</p>
                            </div>
                            <!-- col End -->

                            <div
                                class="rounded-xl bg-white p-6 py-12 text-center drop-shadow-md dark:bg-default-100"
                            >
                                <h2 class="text-5xl font-medium text-default-950">Zero</h2>
                                <p class="mt-3 text-base text-default-950">
                                    Negative Reviews
                                </p>
                            </div>
                            <!-- col End -->
                        </div>
                        <!-- grid End -->
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
    </section>
    <!-- End Steps Section -->

    <section class="py-24">
        <div class="container">
            <div class="grid items-center gap-6 xl:grid-cols-5">
                <div class="xl:col-span-3">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div class="xl:-mt-8">
                            <div
                                class="group relative cursor-pointer rounded-xl border border-default-200 p-6"
                            >
                                <i
                                    data-lucide="layout-grid"
                                    class="size-10 text-default-950"
                                ></i>
                                <h2
                                    class="text-default mt-5 text-2xl font-medium transition-all group-hover:text-primary"
                                >
                                    Brand Strategy
                                </h2>
                                <p class="mt-3 text-base">
                                    Curabitur vel molestie dolor vulputate diam. Etiam ornare
                                    facilisis eu euismod cras blandit vel purus nec varius.
                                </p>
                                <div class="mt-5">
                                    <a
                                        href="javascript:void(0);"
                                        class="text-lg font-medium text-default-900 after:absolute after:inset-0"
                                    >Read More
                                        <i
                                            data-lucide="move-right"
                                            class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                        ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End col -->

                        <div>
                            <div
                                class="group relative cursor-pointer rounded-xl border border-default-200 p-6"
                            >
                                <i data-lucide="figma" class="size-10 text-default-950"></i>
                                <h2
                                    class="text-default mt-5 text-2xl font-medium transition-all group-hover:text-primary"
                                >
                                    UI/UX Design
                                </h2>
                                <p class="mt-3 text-base">
                                    Quisque accumsan augue nec ligula gravida, eleifend
                                    volutpat, vulputate imperdiet quis sed odio.
                                </p>
                                <div class="mt-5">
                                    <a
                                        href="javascript:void(0);"
                                        class="text-lg font-medium text-default-900 after:absolute after:inset-0"
                                    >Read More
                                        <i
                                            data-lucide="move-right"
                                            class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                        ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End col -->

                        <div class="xl:-mt-8">
                            <div
                                class="group relative cursor-pointer rounded-xl border border-default-200 p-6"
                            >
                                <i
                                    data-lucide="layers "
                                    class="size-10 text-default-950"
                                ></i>
                                <h2
                                    class="text-default mt-5 text-2xl font-medium transition-all group-hover:text-primary"
                                >
                                    Motion Design
                                </h2>
                                <p class="mt-3 text-base">
                                    Maecenas finibus ipsum orci, sit amet eleifend purus rutrum
                                    fringilla. Nunc quis lobortis nulla.
                                </p>
                                <div class="mt-5">
                                    <a
                                        href="javascript:void(0);"
                                        class="text-lg font-medium text-default-900 after:absolute after:inset-0"
                                    >Read More
                                        <i
                                            data-lucide="move-right"
                                            class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                        ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End col -->

                        <div>
                            <div
                                class="group relative cursor-pointer rounded-xl border border-default-200 p-6"
                            >
                                <i
                                    data-lucide="airplay"
                                    class="size-10 text-default-950"
                                ></i>
                                <h2
                                    class="text-default mt-5 text-2xl font-medium transition-all group-hover:text-primary"
                                >
                                    Research & Solutions
                                </h2>
                                <p class="mt-3 text-base">
                                    Cras nisl ex, fermentum id volutpat luctus, interdum luctus
                                    tortor. Nunc vestibulum accumsan.
                                </p>
                                <div class="mt-5">
                                    <a
                                        href="javascript:void(0);"
                                        class="text-lg font-medium text-default-900 after:absolute after:inset-0"
                                    >Read More
                                        <i
                                            data-lucide="move-right"
                                            class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                        ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End col -->
                    </div>
                    <!-- End grid -->
                </div>
                <!-- End col -->

                <div class="xl:col-span-2">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our Services</span
            >
                    <h2 class="mt-6 text-4xl/tight font-medium text-default-950">
                        Delivering Top-Notch Development Solutions.
                    </h2>
                    <p class="mt-5 text-base">
                        Leveraging the power of design to solve complex problems and
                        foster business solutions.
                    </p>
                    <div class="mt-10">
                        <a
                            href="#"
                            class="inline-flex items-center justify-center gap-2 rounded-md bg-primary px-8 py-2 text-base text-white transition-all hover:bg-primary-700"
                        >Read More
                            <i data-lucide="move-right" class="size-6"></i>
                        </a>
                    </div>
                </div>
                <!-- End col-span-2 -->
            </div>
            <!-- End grid -->
        </div>
        <!-- End container -->
    </section>

    <!-- Start Portfolio -->
    <section id="work" class="overflow-hidden pb-10 pt-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-3xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Showcase of Work</span
            >
                    <h2 class="my-4 text-4xl/tight font-medium text-default-950">
                        Explore Work
                    </h2>
                    <p class="text-base">
                        A static website preserves a distinct file for every page of the
                        site. Whenever a user requests a specific page, the same content
                        is delivered.
                    </p>
                </div>
            </div>
            <!-- flex End -->

            <div class="grid gap-6 md:grid-cols-3">
                <a
                    href="/images/landing/startup/img-5.jpg"
                    class="glightbox block overflow-hidden rounded-lg"
                >
                    <div class="group relative h-full w-full">
                        <img
                            src="/images/landing/startup/img-5.jpg"
                            class="h-full w-full"
                            alt=""
                        />
                        <div class="absolute inset-0 bg-black/40"></div>
                        <div
                            class="absolute inset-x-0 bottom-0 top-auto m-2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                        >
                            <div class="flex justify-center">
                                <div
                                    class="shadows w-full rounded-md bg-white py-3 text-center text-default-950 dark:bg-default-50"
                                >
                                    <h2 class="text-2xl font-medium">Medium Scene</h2>
                                    <p class="mt-1 text-base">Lightbox</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <div class="md:col-span-2">
                    <a
                        href="/images/landing/startup/img-6.jpg"
                        class="glightbox block overflow-hidden rounded-lg"
                    >
                        <div class="group relative">
                            <img
                                src="/images/landing/startup/img-6.jpg"
                                class="h-full w-full"
                                alt=""
                            />
                            <div class="absolute inset-0 bg-black/40"></div>
                            <div
                                class="absolute inset-x-0 bottom-0 top-auto m-2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                            >
                                <div class="flex justify-center">
                                    <div
                                        class="shadows w-full rounded-md bg-white py-3 text-center text-default-950 dark:bg-default-50"
                                    >
                                        <h2 class="text-2xl font-medium">Visual Stranger</h2>
                                        <p class="mt-1 text-base">External Page</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <a
                    href="/images/landing/startup/img-2.jpg"
                    class="glightbox block overflow-hidden rounded-lg"
                >
                    <div class="group relative">
                        <img
                            src="/images/landing/startup/img-2.jpg"
                            class="h-full w-full"
                            alt=""
                        />
                        <div class="absolute inset-0 bg-black/40"></div>
                        <div
                            class="absolute inset-x-0 bottom-0 top-auto m-2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                        >
                            <div class="flex justify-center">
                                <div
                                    class="shadows w-full rounded-md bg-white py-3 text-center text-default-950 dark:bg-default-50"
                                >
                                    <h2 class="text-2xl font-medium">Amplitude</h2>
                                    <p class="mt-1 text-base">External Page</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a
                    href="/images/landing/startup/img-1.jpg"
                    class="glightbox block overflow-hidden rounded-lg"
                >
                    <div class="group relative">
                        <img
                            src="/images/landing/startup/img-1.jpg"
                            class="h-full w-full"
                            alt=""
                        />
                        <div class="absolute inset-0 bg-black/40"></div>
                        <div
                            class="absolute inset-x-0 bottom-0 top-auto m-2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                        >
                            <div class="flex justify-center">
                                <div
                                    class="shadows w-full rounded-md bg-white py-3 text-center text-default-950 dark:bg-default-50"
                                >
                                    <h2 class="text-2xl font-medium">Rise of Design</h2>
                                    <p class="mt-1 text-base">External Page</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a
                    href="/images/landing/startup/img-7.jpg"
                    class="glightbox block overflow-hidden rounded-lg"
                >
                    <div class="group relative">
                        <img
                            src="/images/landing/startup/img-7.jpg"
                            class="h-full w-full"
                            alt=""
                        />
                        <div class="absolute inset-0 bg-black/40"></div>
                        <div
                            class="absolute inset-x-0 bottom-0 top-auto m-2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                        >
                            <div class="flex justify-center">
                                <div
                                    class="shadows w-full rounded-md bg-white py-3 text-center text-default-950 dark:bg-default-50"
                                >
                                    <h2 class="text-2xl font-medium">Design System</h2>
                                    <p class="mt-1 text-base">Lightbox</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- End Portfolio -->

    <!-- Start Testimonials -->
    <section id="testimonials" class="py-10 lg:py-20">
        <div class="container">
            <div class="grid grid-cols-1 items-center gap-6 lg:grid-cols-2">
                <div class="me-0 lg:mx-auto">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Testimonials</span
            >
                    <h2 class="my-5 text-4xl font-medium capitalize text-default-950">
                        We're trusted by leading companies.
                    </h2>
                    <p class="text-base">
                        A static website stores a unique file for every page of a static
                        website. Each time that page is requested, the same content is
                        returned.
                    </p>
                    <div class="mt-10 flex items-center gap-10">
                        <div class="text-center">
                            <h2 class="text-4xl font-medium text-default-950">5,000+</h2>
                            <p class="mt-2 text-base">Customer Reviews</p>
                        </div>

                        <div class="text-center">
                            <h2 class="text-4xl font-medium text-default-950">99.9%</h2>
                            <p class="mt-2 text-base">Satisfaction Rate</p>
                        </div>
                    </div>
                </div>
                <!-- col End -->

                <div>
                    <div class="relative">
                        <!--Start Swiper -->
                        <div class="swiper testimonials relative rounded-md">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="rounded-xl border border-default-200 p-6">
                                        <div class="flex items-center gap-6">
                                            <div>
                                                <img
                                                    src="/images/avatars/img-4.jpg"
                                                    class="h-16 rounded-full"
                                                    alt=""
                                                />
                                            </div>
                                            <div>
                                                <h3 class="text-2xl font-medium text-default-950">
                                                    Alice Watson
                                                </h3>
                                                <p class="mt-1 text-base">Product Designer</p>
                                            </div>
                                        </div>
                                        <!-- flex End -->
                                        <p class="mt-5 text-lg">
                                            A remarkable model, everything has been thought out with
                                            skill – the design, the responsiveness, and the various
                                            adaptations.
                                        </p>
                                        <div class="mt-5 flex items-center gap-2">
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
                                <!-- swiper-slide End -->

                                <div class="swiper-slide">
                                    <div class="rounded-xl border border-default-200 p-6">
                                        <div class="flex items-center gap-6">
                                            <div>
                                                <img
                                                    src="/images/avatars/img-3.jpg"
                                                    class="h-16 rounded-full"
                                                    alt=""
                                                />
                                            </div>
                                            <div>
                                                <h3 class="text-2xl font-medium text-default-950">
                                                    Thomas Johnson
                                                </h3>
                                                <p class="mt-1 text-base">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <!-- flex End -->
                                        <p class="mt-5 text-lg">
                                            Beautiful template with clean code, easily customizable.
                                            Optimal structure for SEO basics.
                                        </p>
                                        <div class="mt-5 flex items-center gap-2">
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
                                <!-- swiper-slide End -->

                                <div class="swiper-slide">
                                    <div class="rounded-xl border border-default-200 p-6">
                                        <div class="flex items-center gap-6">
                                            <div>
                                                <img
                                                    src="/images/avatars/img-1.jpg"
                                                    class="h-16 rounded-full"
                                                    alt=""
                                                />
                                            </div>
                                            <div>
                                                <h3 class="text-2xl font-medium text-default-950">
                                                    Emma Kande
                                                </h3>
                                                <p class="mt-1 text-base">3D Artist</p>
                                            </div>
                                        </div>
                                        <!-- flex End -->
                                        <p class="mt-5 text-lg">
                                            The support is among the best I've ever had the pleasure
                                            of interacting with. Quick, courteous, and exceptionally
                                            helpful!
                                        </p>
                                        <div class="mt-5 flex items-center gap-2">
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
                                <!-- swiper-slide End -->

                                <div class="swiper-slide">
                                    <div class="rounded-xl border border-default-200 p-6">
                                        <div class="flex items-center gap-6">
                                            <div>
                                                <img
                                                    src="/images/avatars/img-5.jpg"
                                                    class="h-16 rounded-full"
                                                    alt=""
                                                />
                                            </div>
                                            <div>
                                                <h3 class="text-2xl font-medium text-default-950">
                                                    Peter Rebel
                                                </h3>
                                                <p class="mt-1 text-base">Business Owner</p>
                                            </div>
                                        </div>
                                        <!-- flex End -->
                                        <p class="mt-5 text-lg">
                                            This template is exceptionally beautiful and offers
                                            fantastic new options. Its frequent updates add to its
                                            quality.
                                        </p>
                                        <div class="mt-5 flex items-center gap-2">
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
                                <!-- swiper-slide End -->
                            </div>
                        </div>
                        <!--End Swiper -->

                        <div class="absolute -bottom-14 start-0 z-10">
                            <div
                                class="relative flex w-full items-center justify-end gap-5"
                            >
                                <div class="testimonials-button-prev">
                                    <div
                                        class="flex size-10 items-center justify-center rounded-lg border border-default-300 bg-default-100 text-default-900 transition-all duration-300 hover:border-primary hover:bg-primary hover:text-white"
                                    >
                                        <i data-lucide="move-left" class="size-6"></i>
                                    </div>
                                </div>
                                <div class="testimonials-button-next">
                                    <div
                                        class="flex size-10 items-center justify-center rounded-lg border border-default-300 bg-default-100 text-default-900 transition-all duration-300 hover:border-primary hover:bg-primary hover:text-white"
                                    >
                                        <i data-lucide="move-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- flex end -->
                        </div>
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
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
                    <h2 class="my-4 text-4xl font-medium text-default-950">
                        Explore Blog
                    </h2>
                    <p class="text-base">
                        Web development offers three primary specializations: front-end
                        developer, back-end developer, and full-stack developer.
                    </p>
                </div>
            </div>
            <!-- flex End -->

            <div class="grid gap-6 xl:grid-cols-2">
                <div class="rounded-md border border-default-200 p-6">
                    <div class="grid items-center gap-6 sm:grid-cols-5">
                        <div class="col-span-2">
                            <img
                                src="/images/landing/startup/img-8.jpg"
                                class="my-auto h-full w-full rounded-md"
                                alt=""
                            />
                        </div>

                        <div class="group sm:col-span-3">
                            <h3 class="mb-4 text-2xl font-medium text-default-950">
                                Elegant Branding Work for Red Circle by Oddone
                            </h3>
                            <p class="mb-5 mt-3 text-sm">
                                Oddone collaborated with brand strategist Caren Williams to
                                create elegant branding for Red Circle, a San Francisco-based
                                startup.
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
                    </div>
                    <!-- grid End -->
                </div>
                <!-- col End -->

                <div class="rounded-md border border-default-200 p-6">
                    <div class="grid items-center gap-6 sm:grid-cols-5">
                        <div class="col-span-2">
                            <img
                                src="/images/landing/startup/img-9.jpg"
                                class="my-auto h-full w-full rounded-md"
                                alt=""
                            />
                        </div>

                        <div class="group sm:col-span-3">
                            <h3 class="mb-4 text-2xl font-medium text-default-950">
                                Random Explorations with Cinema 4D and Redshift
                            </h3>
                            <p class="mb-5 mt-3 text-sm">
                                Nidia Dias, a 3D designer from Portugal, showcases her
                                impressive portfolio in random explorations with Cinema 4D and
                                Redshift.
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
                    </div>
                    <!-- grid End -->
                </div>
                <!-- col End -->
            </div>
            <!-- Grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End Blog -->

    <section class="pb-10 lg:pb-20">
        <div class="container">
            <div
                class="rounded-lg bg-default-100 bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat px-6 py-20 dark:bg-default-50 dark:bg-[url('/public/images/other/bg-lines-2-dark.png')]"
            >
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Domain names</span
            >
                    <h2 class="mt-5 text-3xl font-medium text-default-950 md:text-4xl">
                        Stay up-to-date with our newsletter.
                    </h2>
                    <p class="mt-6 text-base text-default-950">
                        Nunc egestas, augue at pellentesque laoreet, felis eros vehicula
                        leo, at malesuada velit leo quis pede.
                    </p>
                    <form class="mx-auto mt-6 max-w-2xl space-y-2">
                        <div class="relative">
                            <input
                                type="email"
                                id="subcribe"
                                class="h-12 w-full rounded-md border-default-200 bg-default-50 py-4 pe-14 ps-4 text-default-950 focus:border-default-200 focus:ring-0"
                                placeholder="Type Your Email"
                                name="email"
                            />
                            <button
                                type="submit"
                                class="absolute end-[6px] top-[6px] inline-flex h-9 items-center justify-center gap-2 px-3"
                            >
                                <i data-lucide="search" class="size-6 text-default-950"></i>
                            </button>
                            <small
                            >By submitting the form, you acknowledge and agree to our
                                Terms & Conditions and Privacy Policy.</small
                            >
                        </div>
                    </form>
                    <!-- form End -->
                </div>
            </div>
        </div>
        <!-- End container -->
    </section>
@endsection

@section('script-bottom')
    @vite(['resources/js/glightbox.js'])
@endsection

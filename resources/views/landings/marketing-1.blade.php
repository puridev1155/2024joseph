@extends('layouts.landing', ['title' => 'Enoch and Mary Missions Organization'])

@section('css')

@endsection

@section('content')
    @include('layouts.shared.navbar', [
        'menuPosition' => 'fixed',
        'navItems' => [
            (object)['id' => 'home','name' => 'Home'],
            (object)['id' => 'features','name' => 'Features'],
            (object)['id' => 'about','name' => 'About'],
            (object)['id' => 'services','name' => 'Services'],
            (object)['id' => 'portfolio','name' => 'Portfolio'],
            (object)['id' => 'faq','name' => 'Faq'],
            (object)['id' => 'testimonial','name' => 'Testimonial'],
            (object)['id' => 'blog','name' => 'Blog'],
            ]
        ])

    <!-- Hero Section Start -->
    <section
        id="home"
        class="relative flex items-center justify-center overflow-hidden bg-[url('/public/images/landing/marketing/bg-1.png')] bg-cover bg-no-repeat py-40 dark:bg-[url('/public/images/landing/marketing/bg-1-dark.jpg')]"
    >
        <div class="container">
            <div class="relative">
                <div class="grid items-center gap-6 lg:grid-cols-2">
                    <div class="mx-auto max-w-md text-center lg:ms-0 lg:text-start">
              <span
                  class="rounded-md border border-default-300 px-3 py-1 text-xs font-medium uppercase tracking-wider text-default-900"
              >startups Marketing</span
              >
                        <h2
                            class="my-5 text-4xl font-medium text-default-900 md:text-5xl/tight"
                        >
                            Digital marketing the new way.
                        </h2>
                        <p class="text-base">
                            We are a creative studio specializing in UI/UX design,
                            development and strategy. Aenean massa. Cum sociis natoques
                            penatibus et magnis dis parturient montes, nascetur ridiculus
                            mus.
                        </p>
                        <a
                            href="#"
                            class="mt-6 inline-flex items-center justify-center gap-2 rounded-md border border-primary bg-primary/90 px-6 py-2 text-white transition-all duration-300 hover:bg-primary hover:text-default-950"
                        >Get Solution
                            <i data-lucide="arrow-up-right" class="size-6"></i>
                        </a>
                    </div>
                    <!-- col End -->

                    <div>
                        <div class="tilt flex items-center gap-4 md:gap-6">
                            <div class="flex w-full flex-col gap-4 md:gap-6">
                                <img
                                    src="/images/landing/marketing/img-1.jpg"
                                    class="h-full w-full rounded-lg object-cover"
                                    alt=""
                                />
                            </div>
                            <div
                                class="relative flex w-full flex-col gap-4 pb-10 md:gap-6 md:pb-16"
                            >
                                <img
                                    src="/images/landing/marketing/img-2.jpg"
                                    class="h-40 w-full rounded-lg object-cover md:h-[278px]"
                                    alt=""
                                />
                                <img
                                    src="/images/landing/marketing/img-3.jpg"
                                    class="h-40 w-full rounded-lg object-cover md:h-[278px]"
                                    alt=""
                                />
                            </div>
                        </div>
                        <!-- flex End -->
                    </div>
                    <!-- col End -->
                </div>
                <!-- grid End -->
            </div>
        </div>
        <!-- container End -->
    </section>
    <!-- Hero Section End -->

    <!-- Start marq -->
    <section class="">
        <div
            class="relative m-auto flex gap-28 overflow-hidden border border-default-200 py-6"
        >
            <div
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <h2 class="text-4xl font-medium text-default-950">
                    UI-UX Experience
                </h2>
                <h2 class="text-4xl font-medium text-default-950">Web Development</h2>
                <h2 class="text-4xl font-medium text-default-950">
                    Digital Marketing
                </h2>
                <h2 class="text-4xl font-medium text-default-950">Product Design</h2>
                <h2 class="text-4xl font-medium text-default-950">
                    Mobile Solutions
                </h2>
            </div>
            <!-- marquee__group End-->

            <div
                aria-hidden="true"
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <h2 class="text-4xl font-medium text-default-950">
                    UI-UX Experience
                </h2>
                <h2 class="text-4xl font-medium text-default-950">Web Development</h2>
                <h2 class="text-4xl font-medium text-default-950">
                    Digital Marketing
                </h2>
                <h2 class="text-4xl font-medium text-default-950">Product Design</h2>
                <h2 class="text-4xl font-medium text-default-950">
                    Mobile Solutions
                </h2>
            </div>
            <!-- marquee__group End-->
        </div>
        <!-- flex End -->
    </section>
    <!-- End marq Section -->

    <!-- Start Services -->
    <section id="features" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Services</span
            >
                    <h2 class="my-4 text-3xl font-medium capitalize text-default-950">
                        We want to bring business & the digital world together.
                    </h2>
                </div>
            </div>
            <!-- flex End -->

            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div>
                    <div
                        class="grid grid-cols-1 items-center overflow-hidden rounded-md border border-default-200"
                    >
                        <div class="group">
                            <div class="flex flex-wrap items-center gap-6 p-6">
                                <div>
                                    <i
                                        data-lucide="layers"
                                        class="size-14 text-default-950"
                                    ></i>
                                </div>
                                <div>
                                    <h2 class="mb-4 text-2xl font-medium text-default-950">
                                        Product Design
                                    </h2>
                                    <p class="mb-6 text-base">
                                        Lorem ipsum dummy text are used in this design
                                    </p>
                                    <a
                                        href="javascript:void(0);"
                                        class="text-lg text-default-950"
                                    >Read More
                                        <i
                                            data-lucide="move-right"
                                            class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                        ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="group border-y border-default-200">
                            <div class="flex flex-wrap items-center gap-6 p-6">
                                <div>
                                    <i
                                        data-lucide="monitor"
                                        class="size-14 text-default-950"
                                    ></i>
                                </div>
                                <div>
                                    <h2 class="mb-4 text-2xl font-medium text-default-950">
                                        Marketing Strategy
                                    </h2>
                                    <p class="mb-6 text-base">
                                        Nullam dictum felis eu pede mollis pretium.
                                    </p>
                                    <a
                                        href="javascript:void(0);"
                                        class="text-lg text-default-950"
                                    >Read More
                                        <i
                                            data-lucide="move-right"
                                            class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                        ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="group">
                            <div class="flex flex-wrap items-center gap-6 p-6">
                                <div>
                                    <i
                                        data-lucide="boxes"
                                        class="size-14 text-default-950"
                                    ></i>
                                </div>
                                <div>
                                    <h2 class="mb-4 text-2xl font-medium text-default-950">
                                        E-Commerce
                                    </h2>
                                    <p class="mb-6 text-base">
                                        Maecenas malesuada. Praesent congue erat at massa.
                                    </p>
                                    <a
                                        href="javascript:void(0);"
                                        class="text-lg text-default-950"
                                    >Read More
                                        <i
                                            data-lucide="move-right"
                                            class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                        ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- grid End -->
                </div>
                <!-- col End -->

                <div>
                    <img
                        src="/images/landing/marketing/img-4.jpg"
                        class="mx-auto"
                        alt=""
                    />
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End Services -->

    <!-- Start About -->
    <section id="about" class="bg-white py-10 dark:bg-default-50 lg:py-20">
        <div class="grid items-center gap-6 lg:grid-cols-2">
            <div class="relative h-[650px]">
                <div
                    class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                    style="
              background-image: url('/images/landing/marketing/img-5.jpg');
            "
                >
                    <div class="bg-black/2 0 absolute inset-0 h-full w-full"></div>
                </div>
                <div class="relative h-full">
                    <div class="flex h-full items-center justify-center">
                        <button
                            class="relative flex size-20 items-center justify-center gap-2.5 rounded-full bg-primary text-base font-medium text-white ring-4 ring-primary/25 transition-all duration-300 hover:bg-primary"
                            data-hs-overlay="#watchvideomodal"
                        >
                            <i data-lucide="play" class="size-7 fill-white"></i>
                        </button>
                    </div>
                    <!-- col end -->
                </div>
            </div>
            <!-- Container End -->

            <div class="py-10">
                <div class="max-w-lg px-10 md:ms-20">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >About</span
            >
                    <h2 class="mt-5 text-4xl font-medium text-default-950">
                        Our mission is to bridge the gap between business and the digital
                        world.
                    </h2>
                    <p class="mt-4 text-base">
                        Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper
                        libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
                        blandit vel, luctus pulvinar, hendrerit id, lorem.
                    </p>
                    <div class="group mt-6">
                        <a href="javascript:void(0);" class="text-lg text-default-950"
                        >Read More
                            <i
                                data-lucide="move-right"
                                class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                            ></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Watch Video Modal Start -->
    <div
        id="watchvideomodal"
        class="hs-overlay pointer-events-none fixed start-0 top-0 z-[80] hidden h-full w-full overflow-y-auto overflow-x-hidden"
    >
        <div
            class="m-3 mt-0 flex min-h-[calc(100%-3.5rem)] items-center opacity-0 transition-all ease-out hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 sm:mx-auto sm:w-full sm:max-w-xl"
        >
            <div
                class="pointer-events-auto flex w-full flex-col overflow-x-hidden rounded-xl"
            >
                <iframe
                    class="w-full"
                    height="400"
                    src="https://www.youtube.com/embed/NbR-wVOpJwA?si=OlR2e-UItbGilVlu"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                ></iframe>
            </div>
        </div>
    </div>
    <!-- Watch Video Modal End -->

    <!-- Start Services -->
    <section id="services" class="py-10 lg:py-20">
        <div class="container">
            <div>
                <div class="mb-10 flex items-end justify-center">
                    <div class="mx-auto max-w-md text-center">
              <span
                  class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
              >Services</span
              >
                        <h2 class="mt-4 text-3xl font-medium capitalize text-default-950">
                            Highlighted Services
                        </h2>
                    </div>
                </div>
                <!-- flex End -->

                <div
                    class="rounded-md border border-default-200 bg-white dark:bg-default-50"
                >
                    <div class="grid 2xl:grid-cols-2">
                        <div class="divide-y divide-default-200">
                            <div class="flex items-center justify-between p-6">
                                <h3 class="text-2xl font-medium text-default-950">
                                    Brand Development Services
                                </h3>
                                <div>
                                    <div
                                        class="flex size-12 cursor-pointer items-center justify-center rounded-md border border-default-200 bg-default-50 text-default-950 transition-all duration-300 hover:bg-white hover:text-primary"
                                    >
                                        <i data-lucide="move-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between p-6">
                                <h3 class="text-2xl font-medium text-default-950">
                                    Digital Product Development
                                </h3>
                                <div>
                                    <div
                                        class="flex size-12 cursor-pointer items-center justify-center rounded-md border border-default-200 bg-default-50 text-default-950 transition-all duration-300 hover:bg-white hover:text-primary"
                                    >
                                        <i data-lucide="move-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between p-6">
                                <h3 class="text-2xl font-medium text-default-950">
                                    Media Strategy
                                </h3>
                                <div>
                                    <div
                                        class="flex size-12 cursor-pointer items-center justify-center rounded-md border border-default-200 bg-default-50 text-default-950 transition-all duration-300 hover:bg-white hover:text-primary"
                                    >
                                        <i data-lucide="move-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col End -->

                        <div
                            class="divide-y divide-default-200 border-t border-default-200 2xl:border-s 2xl:border-t-0"
                        >
                            <div class="flex items-center justify-between p-6">
                                <h3 class="text-2xl font-medium text-default-950">
                                    Marketing Services
                                </h3>
                                <div>
                                    <div
                                        class="flex size-12 cursor-pointer items-center justify-center rounded-md border border-default-200 bg-default-50 text-default-950 transition-all duration-300 hover:bg-white hover:text-primary"
                                    >
                                        <i data-lucide="move-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between p-6">
                                <h3 class="text-2xl font-medium text-default-950">
                                    Information Technology Consulting
                                </h3>
                                <div>
                                    <div
                                        class="flex size-12 cursor-pointer items-center justify-center rounded-md border border-default-200 bg-default-50 text-default-950 transition-all duration-300 hover:bg-white hover:text-primary"
                                    >
                                        <i data-lucide="move-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between p-6">
                                <h3 class="text-2xl font-medium text-default-950">
                                    Brand Identity Services
                                </h3>
                                <div>
                                    <div
                                        class="flex size-12 cursor-pointer items-center justify-center rounded-md border border-default-200 bg-default-50 text-default-950 transition-all duration-300 hover:bg-white hover:text-primary"
                                    >
                                        <i data-lucide="move-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col End -->
                    </div>
                    <!-- grid End -->
                </div>

                <div class="mt-7 flex justify-center">
                    <a
                        href="#"
                        class="inline-flex items-center justify-center gap-2 rounded-md border border-default-200 px-8 py-2 text-default-950 backdrop-blur-3xl transition-all hover:border-primary hover:bg-primary hover:text-white"
                    >Get Solution
                        <i data-lucide="arrow-right" class="size-6"></i>
                    </a>
                </div>
            </div>
            <!-- col End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End Services -->

    <!-- Start Portfolio -->
    <section id="portfolio" class="pb-10 pt-20">
        <div class="mb-10 flex items-end justify-between">
            <div class="mx-auto max-w-2xl text-center">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >Our Portfolio</span
          >
                <h2 class="my-4 text-4xl font-medium capitalize text-default-950">
                    Selected Projects.
                </h2>
            </div>
        </div>
        <!-- flex End -->

        <div>
            <!--Start Swiper -->
            <div id="auth_swiper" class="swiper relative rounded-md">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="group relative overflow-hidden rounded-3xl">
                            <img
                                src="/images/landing/marketing/img-6.jpg"
                                class="h-full w-full"
                                alt=""
                            />
                            <div class="absolute inset-0 bg-black/40"></div>
                            <div
                                class="absolute inset-x-0 top-1/2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                            >
                                <div class="text-center">
                                    <h5
                                        class="mb-1 inline-block bg-default-50 px-3 py-1 text-xl font-medium text-default-950"
                                    >
                                        Brand
                                    </h5>
                                    <br/>
                                    <h2
                                        class="inline-block bg-default-50 px-3 py-1 text-2xl font-medium text-default-950"
                                    >
                                        Coder Studio
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="group relative overflow-hidden rounded-3xl">
                            <img
                                src="/images/landing/marketing/img-7.jpg"
                                class="h-full w-full"
                                alt=""
                            />
                            <div class="absolute inset-0 bg-black/40"></div>
                            <div
                                class="absolute inset-x-0 top-1/2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                            >
                                <div class="text-center">
                                    <h5
                                        class="mb-1 inline-block bg-default-50 px-3 py-1 text-xl font-medium text-default-950"
                                    >
                                        Brand
                                    </h5>
                                    <br/>
                                    <h2
                                        class="inline-block bg-default-50 px-3 py-1 text-2xl font-medium text-default-950"
                                    >
                                        Coder Studio
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="group relative overflow-hidden rounded-3xl">
                            <img
                                src="/images/landing/marketing/img-8.jpg"
                                class="h-full w-full"
                                alt=""
                            />
                            <div class="absolute inset-0 bg-black/40"></div>
                            <div
                                class="absolute inset-x-0 top-1/2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                            >
                                <div class="text-center">
                                    <h5
                                        class="mb-1 inline-block bg-default-50 px-3 py-1 text-xl font-medium text-default-950"
                                    >
                                        Brand
                                    </h5>
                                    <br/>
                                    <h2
                                        class="inline-block bg-default-50 px-3 py-1 text-2xl font-medium text-default-950"
                                    >
                                        Coder Studio
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="group relative overflow-hidden rounded-3xl">
                            <img
                                src="/images/landing/marketing/img-6.jpg"
                                class="h-full w-full"
                                alt=""
                            />
                            <div class="absolute inset-0 bg-black/40"></div>
                            <div
                                class="absolute inset-x-0 top-1/2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                            >
                                <div class="text-center">
                                    <h5
                                        class="mb-1 inline-block bg-default-50 px-3 py-1 text-xl font-medium text-default-950"
                                    >
                                        Brand
                                    </h5>
                                    <br/>
                                    <h2
                                        class="inline-block bg-default-50 px-3 py-1 text-2xl font-medium text-default-950"
                                    >
                                        Coder Studio
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="group relative overflow-hidden rounded-3xl">
                            <img
                                src="/images/landing/marketing/img-7.jpg"
                                class="h-full w-full"
                                alt=""
                            />
                            <div class="absolute inset-0 bg-black/40"></div>
                            <div
                                class="absolute inset-x-0 top-1/2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                            >
                                <div class="text-center">
                                    <h5
                                        class="mb-1 inline-block bg-default-50 px-3 py-1 text-xl font-medium text-default-950"
                                    >
                                        Brand
                                    </h5>
                                    <br/>
                                    <h2
                                        class="inline-block bg-default-50 px-3 py-1 text-2xl font-medium text-default-950"
                                    >
                                        Coder Studio
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="group relative overflow-hidden rounded-3xl">
                            <img
                                src="/images/landing/marketing/img-8.jpg"
                                class="h-full w-full"
                                alt=""
                            />
                            <div class="absolute inset-0 bg-black/40"></div>
                            <div
                                class="absolute inset-x-0 top-1/2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                            >
                                <div class="text-center">
                                    <h5
                                        class="mb-1 inline-block bg-default-50 px-3 py-1 text-xl font-medium text-default-950"
                                    >
                                        Brand
                                    </h5>
                                    <br/>
                                    <h2
                                        class="inline-block bg-default-50 px-3 py-1 text-2xl font-medium text-default-950"
                                    >
                                        Coder Studio
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->
                </div>
            </div>
            <!--End Swiper -->
        </div>
    </section>
    <!-- End Portfolio -->

    <!-- Start Faq -->
    <section id="faq" class="bg-white py-10 dark:bg-default-50 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our FAQ</span
            >
                    <h2 class="my-4 text-3xl font-medium capitalize text-default-950">
                        Frequently Asked Questions ?
                    </h2>
                </div>
            </div>
            <!-- flex End-->

            <div class="grid grid-cols-1 items-center gap-6 lg:grid-cols-2">
                <div class="relative mb-20 lg:mb-0">
                    <div class="relative">
                        <img
                            src="/images/landing/marketing/img-9.jpg"
                            class="mx-auto"
                            alt=""
                        />
                    </div>
                    <div class="absolute inset-x-0 -bottom-14 hidden sm:block">
                        <img
                            src="/images/landing/marketing/img-10.jpg"
                            class="h-full"
                            alt=""
                        />
                    </div>
                </div>
                <!-- col End -->

                <div class="lg:pb-20">
                    <div class="hs-accordion-group space-y-4">
                        <div
                            class="hs-accordion active overflow-hidden rounded-lg border border-default-200 bg-white dark:bg-default-50"
                            id="faq-1"
                        >
                            <button
                                class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                aria-controls="faq-accordion-1"
                            >
                                <h5 class="flex text-base font-medium">
                                    How can digital marketing benefit my business?
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
                                        It can increase brand visibility, drive website traffic,
                                        generate leads, and ultimately boost sales and revenue.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- col End-->

                        <div
                            class="hs-accordion overflow-hidden rounded-lg border border-default-200 bg-white dark:bg-default-50"
                            id="faq-2"
                        >
                            <button
                                class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                aria-controls="faq-2"
                            >
                                <h5 class="flex text-base font-medium">
                                    Do I need to have a large budget for digital marketing?
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
                                        We work with businesses of various budgets and can create
                                        strategies that align with your financial resources while
                                        delivering meaningful results.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- col End-->

                        <div
                            class="hs-accordion overflow-hidden rounded-lg border border-default-200 bg-white dark:bg-default-50"
                            id="faq-3"
                        >
                            <button
                                class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                aria-controls="faq-3"
                            >
                                <h5 class="flex text-base font-medium">
                                    Unique and Influential Design
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
                                        provides a comprehensive range of digital services,
                                        including website design and development, digital
                                        marketing, search engine optimization
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- col End-->

                        <div
                            class="hs-accordion overflow-hidden rounded-lg border border-default-200 bg-white dark:bg-default-50"
                            id="faq-2"
                        >
                            <button
                                class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                aria-controls="faq-2"
                            >
                                <h5 class="flex text-base font-medium">
                                    The Power of Influencer Marketing
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
                                        Absolutely! We offer content creation services, including
                                        blog posts, social media content, and multimedia .
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- col End-->
                    </div>
                </div>
                <!-- col End-->
            </div>
            <!-- grid End-->
        </div>
        <!-- container End-->
    </section>
    <!-- End faq -->

    <!-- Start Testimonials -->
    <section id="testimonial" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Testimonials</span
            >
                    <h2 class="my-4 text-3xl font-medium capitalize text-default-950">
                        What People Says?
                    </h2>
                </div>
            </div>
            <!-- flex End -->

            <div class="grid grid-cols-1 items-center gap-6 lg:grid-cols-2">
                <div class="relative">
                    <!--Start Swiper -->
                    <div class="swiper testimonials relative rounded-md">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="rounded-md bg-default-100 p-6 dark:bg-default-50">
                                    <div class="flex items-center gap-5">
                                        <img
                                            src="/images/avatars/img-3.jpg"
                                            class="size-14 rounded-full border-4 border-white/20"
                                            alt=""
                                        />
                                        <h3 class="text-lg font-medium text-default-950">
                                            Leonard Heiser
                                        </h3>
                                    </div>
                                    <p class="mt-4 text-base">
                                        There are many variations of passages of Lorem Ipsum
                                        available but the maj have suffered alteration in some
                                        form, by injected humour, or randomis words which don't
                                        look even slightly believable. If you are going
                                    </p>
                                    <div class="mt-4 flex items-center gap-2">
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
                                <div class="rounded-md bg-default-100 p-6 dark:bg-default-50">
                                    <div class="flex items-center gap-5">
                                        <img
                                            src="/images/avatars/img-2.jpg"
                                            class="size-14 rounded-full border-4 border-white/20"
                                            alt=""
                                        />
                                        <h3 class="text-lg font-medium text-default-950">
                                            Leonard Heiser
                                        </h3>
                                    </div>
                                    <p class="mt-4 text-base">
                                        Sed ut perspiciatis unde omnis iste nate error sitsau an
                                        voluptatem accusantium dolore mque laudantium, totamrem
                                        aperiam, inventore the ver quasi architecto again is there
                                        anyone who loves or pursues Variouses versions have
                                        evolved over the years.
                                    </p>
                                    <div class="mt-4 flex items-center gap-2">
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

                    <div class="z-10 hidden pt-6 md:block">
                        <div class="relative flex items-center justify-end gap-5 pe-10">
                            <div class="testimonials-button-prev">
                                <div
                                    class="flex size-14 items-center justify-center rounded-full bg-primary/90 text-white hover:bg-primary"
                                >
                                    <i data-lucide="arrow-left" class="size-7"></i>
                                </div>
                            </div>
                            <div class="testimonials-button-next">
                                <div
                                    class="flex size-14 items-center justify-center rounded-full bg-primary/90 text-white hover:bg-primary"
                                >
                                    <i data-lucide="arrow-right" class="size-7"></i>
                                </div>
                            </div>
                        </div>
                        <!-- flex end -->
                    </div>
                </div>
                <!-- col End -->

                <div class="me-0 lg:mx-auto">
                    <div class="relative z-10">
                        <div
                            class="absolute inset-y-0 -start-20 -z-10 hidden h-full w-full rounded-full border-2 border-primary/10 bg-primary/5 lg:block"
                        ></div>
                        <img
                            src="/images/landing/marketing/img-11.png"
                            class="mx-auto rounded-full"
                            alt=""
                        />
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- Start Testimonials -->

    <!-- Start Blog -->
    <section id="blog" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our Blog</span
            >
                    <h2 class="my-4 text-3xl font-medium capitalize text-default-950">
                        Latest from our blog
                    </h2>
                    <p class="text-base">
                        In this guide, we're going to share the essential SEO ranking
                        factors you need to dominate search. By the end of this post,
                        you'll have a well-optimized site
                    </p>
                </div>
            </div>
            <!-- flex End-->

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                <div class="overflow-hidden rounded-md border border-default-200">
                    <div class="group">
                        <img src="/images/landing/marketing/img-12.jpg" alt=""/>

                        <div class="p-6">
                            <h2 class="mb-5 text-lg font-medium text-default-950">
                                We craft elements to pave the way for your future success and
                                growth.
                            </h2>
                            <a
                                href="javascript:void(0);"
                                class="text-lg font-medium text-default-900"
                            >Read More
                                <i
                                    data-lucide="move-right"
                                    class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- col End -->

                <div class="overflow-hidden rounded-md border border-default-200">
                    <div class="group">
                        <img src="/images/landing/marketing/img-13.jpg" alt=""/>

                        <div class="p-6">
                            <h2 class="mb-5 text-lg font-medium text-default-950">
                                Creative advertising in our life became a info noise
                            </h2>
                            <a
                                href="javascript:void(0);"
                                class="text-lg font-medium text-default-900"
                            >Read More
                                <i
                                    data-lucide="move-right"
                                    class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- col End -->

                <div class="overflow-hidden rounded-md border border-default-200">
                    <div class="group">
                        <img
                            src="/images/landing/marketing/img-14.jpg"
                            class="rounded"
                            alt=""
                        />

                        <div class="p-6">
                            <h2 class="mb-5 text-lg font-medium text-default-950">
                                Creative advertising in our lives has evolved into a sea of
                                information noise.
                            </h2>
                            <a
                                href="javascript:void(0);"
                                class="text-lg font-medium text-default-900"
                            >Read More
                                <i
                                    data-lucide="move-right"
                                    class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- Grid End -->
        </div>
        <!-- container End-->
    </section>
    <!-- End Blog -->
@endsection

@section('script-bottom')

@endsection

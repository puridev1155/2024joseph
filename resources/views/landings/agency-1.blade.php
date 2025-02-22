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
            (object)['id' => 'blog','name' => 'Blog'],
            (object)['id' => 'contact','name' => 'Contact'],
            ]
        ])

    <!-- Hero Section Start -->
    <section
        id="home"
        class="bg-[url('/public/images/other/bg-lines-1.svg')] bg-cover bg-no-repeat">
        <div class="relative grid grid-cols-1 items-center xl:grid-cols-5">
            <div
                class="relative z-10 order-2 -mt-24 p-6 xl:order-none xl:col-span-2 xl:-me-24 xl:mt-0 xl:p-0">
                <div
                    class="mx-auto max-w-xl rounded-xl bg-default-100 dark:bg-default-50 xl:me-0 xl:ms-auto">
                    <div class="p-6">
                        <!-- Swiper -->
                        <div class="swiper mySwiper2 relative">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div
                                        class="flex flex-col items-start justify-end xl:h-full">
                      <span
                          class="text-base font-medium uppercase tracking-wider text-default-800"
                      >Digital agency</span
                      >
                                        <h2
                                            class="mt-6 text-3xl font-semibold text-default-950 md:text-4xl/snug"
                                        >
                                            Beyond a Design Agency
                                        </h2>
                                        <p class="mb-7 mt-5 text-base md:w-3/4">
                                            Their ability to understand our vision and translate it
                                            into a comprehensive marketing strategy is truly
                                            exceptional.
                                        </p>
                                        <a
                                            href="#"
                                            class="inline-flex items-center justify-center gap-2 rounded-md border border-default-200 px-6 py-2 text-default-950 transition-all duration-300 hover:bg-primary hover:text-white"
                                        >Get Solution
                                            <i data-lucide="arrow-up-right" class="size-6"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- swiper-slide End-->

                                <div class="swiper-slide">
                                    <div
                                        class="flex flex-col items-start justify-end xl:h-full"
                                    >
                      <span
                          class="text-base font-medium uppercase tracking-wider text-default-800"
                      >Digital agency</span
                      >
                                        <h2
                                            class="mt-6 text-3xl font-semibold text-default-950 md:text-4xl/snug"
                                        >
                                            Beyond a Design Agency
                                        </h2>
                                        <p class="mb-7 mt-5 text-base md:w-3/4">
                                            Their ability to understand our vision and translate it
                                            into a comprehensive marketing strategy is truly
                                            exceptional.
                                        </p>
                                        <a
                                            href="#"
                                            class="inline-flex items-center justify-center gap-2 rounded-md border border-default-200 px-6 py-2 text-default-950 transition-all duration-300 hover:bg-primary hover:text-white"
                                        >Get Solution
                                            <i data-lucide="arrow-up-right" class="size-6"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- swiper-slide End-->

                                <div class="swiper-slide">
                                    <div
                                        class="flex flex-col items-start justify-end xl:h-full"
                                    >
                      <span
                          class="text-base font-medium uppercase tracking-wider text-default-800"
                      >Digital agency</span
                      >
                                        <h2
                                            class="mt-6 text-3xl font-semibold text-default-950 md:text-4xl/snug"
                                        >
                                            Beyond a Design Agency
                                        </h2>
                                        <p class="mb-7 mt-5 text-base md:w-3/4">
                                            Their ability to understand our vision and translate it
                                            into a comprehensive marketing strategy is truly
                                            exceptional.
                                        </p>
                                        <a
                                            href="#"
                                            class="inline-flex items-center justify-center gap-2 rounded-md border border-default-200 px-6 py-2 text-default-950 transition-all duration-300 hover:bg-primary hover:text-white"
                                        >Get Solution
                                            <i data-lucide="arrow-up-right" class="size-6"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- swiper-slide End-->
                            </div>
                        </div>
                        <!-- Swiper End-->
                    </div>
                </div>
            </div>
            <!-- col-span-2 End-->

            <div class="order-1 xl:order-none xl:col-span-3">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide relative">
                            <img
                                src="/images/landing/agency/img-1.jpg"
                                class="h-full w-full"
                            />
                            <div class="absolute inset-0 bg-black/25"></div>
                        </div>
                        <!-- swiper-slide End-->

                        <div class="swiper-slide relative">
                            <img
                                src="/images/landing/agency/img-2.jpg"
                                class="h-full w-full"
                            />
                            <div class="absolute inset-0 bg-black/25"></div>
                        </div>
                        <!-- swiper-slide End-->

                        <div class="swiper-slide relative">
                            <img
                                src="/images/landing/agency/img-3.jpg"
                                class="h-full w-full"
                            />
                            <div class="absolute inset-0 bg-black/25"></div>
                        </div>
                        <!-- swiper-slide End-->
                    </div>
                </div>
                <!-- Swiper End-->
            </div>
            <!-- col-span-3 End-->
        </div>
        <!-- grid End-->
    </section>
    <!-- Hero end -->

    <!-- Start marq -->
    <section class="lg:pb-10">
        <div
            class="relative m-auto flex gap-28 overflow-hidden border border-default-200 py-6"
        >
            <div
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">
                        UI-UX Experience
                    </h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">
                        Web Development
                    </h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">
                        Digital Marketing
                    </h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">
                        Product Design
                    </h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">
                        Mobile Solutions
                    </h2>
                </div>
            </div>
            <!-- marquee__group End-->

            <div
                aria-hidden="true"
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">
                        UI-UX Experience
                    </h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">
                        Web Development
                    </h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">
                        Digital Marketing
                    </h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">
                        Product Design
                    </h2>
                </div>
                <div class="py-2">
                    <h2 class="text-4xl font-medium text-default-950">
                        Mobile Solutions
                    </h2>
                </div>
            </div>
            <!-- marquee__group End-->
        </div>
        <!-- flex End -->
    </section>
    <!-- End marq Section -->

    <!-- Start about -->
    <section id="about" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >About</span
            >
                    <h2 class="my-4 text-4xl font-medium capitalize text-default-950">
                        About Us
                    </h2>
                    <!-- <p class="text-base">There are many variations of passages of passages of lorem lpsum available but the majority have suffered alteration in some form by inject rated humour or randomised this like.</p> -->
                </div>
            </div>
            <!-- flex End-->

            <div class="grid grid-cols-1 gap-x-16 gap-y-10 md:grid-cols-2">
                <div class="grid items-center gap-6 sm:grid-cols-2">
                    <div class="space-y-6">
                        <div>
                            <img
                                src="/images/landing/agency/img-3.jpg"
                                alt=""
                                class="h-full max-w-full rounded-lg"
                            />
                        </div>
                        <div>
                            <img
                                src="/images/landing/agency/img-4.jpg"
                                alt=""
                                class="h-full max-w-full rounded-lg"
                            />
                        </div>
                    </div>
                    <div>
                        <img
                            src="/images/landing/agency/img-5.jpg"
                            alt=""
                            class="h-full max-w-full rounded-lg"
                        />
                    </div>
                </div>
                <!-- grid End-->

                <div>
                    <h2 class="text-3xl font-medium text-default-950">
                        The Best of Product Your Business
                    </h2>
                    <div class="mt-10 flex justify-center gap-6">
                        <div>
                            <i
                                data-lucide="component"
                                class="size-10 text-default-950"
                            ></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-medium text-default-950">
                                High Standerd
                            </h2>
                            <p class="mt-4 text-base">
                                Adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <!-- flex End-->

                    <div class="my-10 flex justify-center gap-6">
                        <div>
                            <i data-lucide="layers" class="size-10 text-default-950"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-medium text-default-950">
                                Ease of Communication
                            </h2>
                            <p class="mt-4 text-base">
                                Adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <!-- flex End-->

                    <a
                        href="#"
                        class="inline-flex items-center justify-center gap-2 rounded-md border border-default-200 px-6 py-2 text-default-950 transition-all hover:bg-primary hover:text-white"
                    >View All Our News
                        <i data-lucide="arrow-up-right" class="size-6"></i>
                    </a>
                </div>
                <!-- col End-->
            </div>
            <!-- grid End-->
        </div>
    </section>
    <!-- End about -->

    <!-- Start Services -->
    <section id="services" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Services</span
            >
                    <h2 class="my-4 text-4xl font-medium capitalize text-default-950">
                        Our Services
                    </h2>
                    <p class="text-base">
                        Lorem ipsum dummy text are usually use print and website industry.
                    </p>
                </div>
            </div>
            <!-- flex End-->

            <div
                class="grid grid-cols-1 items-center divide-y divide-default-200 overflow-hidden rounded-md bg-default-100 dark:bg-default-50 lg:grid-cols-3 lg:divide-x lg:divide-y-0"
            >
                <div class="group">
                    <div class="p-8 sm:p-10">
              <span>
                <i
                    data-lucide="component"
                    class="size-14 text-default-950"
                ></i>
              </span>
                        <h2 class="mb-4 mt-8 text-2xl font-medium text-default-950">
                            Developer
                        </h2>
                        <p class="mb-6 text-base">
                            Lorem ipsum dummy text are usually use in these section. Lorem
                            ipsum dummy text are used in this design
                        </p>
                        <a href="javascript:void(0);" class="text-lg text-default-950"
                        >Read More
                            <i
                                data-lucide="move-right"
                                class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                            ></i>
                        </a>
                    </div>
                </div>
                <!-- end col -->

                <div class="group">
                    <div class="p-8 sm:p-10">
              <span>
                <i data-lucide="layers" class="size-14 text-default-950"></i>
              </span>
                        <h2 class="mb-4 mt-8 text-2xl font-medium text-default-950">
                            Digital Product Design
                        </h2>
                        <p class="mb-6 text-base">
                            Lorem ipsum dummy text are usually use in these section. Lorem
                            ipsum dummy text are used in this design
                        </p>
                        <a href="javascript:void(0);" class="text-lg text-default-950"
                        >Read More
                            <i
                                data-lucide="move-right"
                                class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                            ></i>
                        </a>
                    </div>
                </div>
                <!-- end col -->

                <div class="group">
                    <div class="p-8 sm:p-10">
              <span>
                <i
                    data-lucide="layout-grid"
                    class="size-14 text-default-950"
                ></i>
              </span>
                        <h2 class="mb-4 mt-8 text-2xl font-medium text-default-950">
                            Branding & Design
                        </h2>
                        <p class="mb-6 text-base">
                            Lorem ipsum dummy text are usually use in these section. Lorem
                            ipsum dummy text are used in this design
                        </p>
                        <a href="javascript:void(0);" class="text-lg text-default-950"
                        >Read More
                            <i
                                data-lucide="move-right"
                                class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                            ></i>
                        </a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- grid End-->
        </div>
        <!-- container End-->
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
                                src="/images/landing/agency/img-6.jpg"
                                class="h-full w-full"
                                alt=""
                            />
                            <div class="absolute inset-0 bg-black/60"></div>
                            <div
                                class="absolute inset-x-0 top-1/2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                            >
                                <div class="text-center">
                                    <h5
                                        class="mb-1 inline-block bg-black px-3 py-1 text-xl font-medium text-white"
                                    >
                                        Web Design
                                    </h5>
                                    <br/>
                                    <h2
                                        class="inline-block bg-black px-3 py-1 text-2xl font-medium text-white"
                                    >
                                        Branding Process
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="group relative overflow-hidden rounded-3xl">
                            <img
                                src="/images/landing/agency/img-7.jpg"
                                class="h-full w-full"
                                alt=""
                            />
                            <div class="absolute inset-0 bg-black/60"></div>
                            <div
                                class="absolute inset-x-0 top-1/2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                            >
                                <div class="text-center">
                                    <h5
                                        class="mb-1 inline-block bg-black px-3 py-1 text-xl font-medium text-white"
                                    >
                                        Web Design
                                    </h5>
                                    <br/>
                                    <h2
                                        class="inline-block bg-black px-3 py-1 text-2xl font-medium text-white"
                                    >
                                        Digital Platform
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="group relative overflow-hidden rounded-3xl">
                            <img
                                src="/images/landing/agency/img-8.jpg"
                                class="h-full w-full"
                                alt=""
                            />
                            <div class="absolute inset-0 bg-black/60"></div>
                            <div
                                class="absolute inset-x-0 top-1/2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                            >
                                <div class="text-center">
                                    <h5
                                        class="mb-1 inline-block bg-black px-3 py-1 text-xl font-medium text-white"
                                    >
                                        Brand
                                    </h5>
                                    <br/>
                                    <h2
                                        class="inline-block bg-black px-3 py-1 text-2xl font-medium text-white"
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
                                src="/images/landing/agency/img-9.jpg"
                                class="h-full w-full"
                                alt=""
                            />
                            <div class="absolute inset-0 bg-black/60"></div>
                            <div
                                class="absolute inset-x-0 top-1/2 opacity-0 transition-all duration-700 group-hover:opacity-100"
                            >
                                <div class="text-center">
                                    <h5
                                        class="mb-1 inline-block bg-black px-3 py-1 text-xl font-medium text-white"
                                    >
                                        Web Design
                                    </h5>
                                    <br/>
                                    <h2
                                        class="inline-block bg-black px-3 py-1 text-2xl font-medium text-white"
                                    >
                                        New Gadgets
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

    <!-- Start Services -->
    <section id="serice" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Services</span
            >
                    <p class="mt-5 text-lg font-medium text-default-800">
                        We help you to go online and increase your conversion rate Better
                        design for your digital products.
                    </p>
                </div>
            </div>
            <!-- flex End-->

            <div class="grid grid-cols-1 items-center gap-6 lg:grid-cols-2">
                <div class="relative -z-10 overflow-hidden">
                    <img
                        src="/images/landing/agency/img-10.jpg"
                        class="h-full w-full rounded-md"
                        alt=""
                    />
                    <div class="absolute inset-0 rounded-md bg-black/40"></div>
                </div>
                <!-- col End-->

                <div class="lg:-ms-20">
                    <div
                        class="divide-y divide-default-200 rounded-md bg-default-50 shadow"
                    >
                        <div class="flex flex-wrap items-center gap-6 p-6 sm:flex-nowrap">
                            <div>
                                <div
                                    class="flex size-12 items-center justify-center rounded-md border border-default-200 bg-white/5 text-xl text-default-950"
                                >
                                    01
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-medium text-default-950">
                                    Graphic Design
                                </h3>
                                <p class="mt-3 text-base">
                                    Donec venenatis vulputate lorem. Morbi nec metus. Phasellus
                                    blandit leo ut odio.
                                </p>
                            </div>
                        </div>
                        <!-- flex End-->

                        <div class="flex flex-wrap items-center gap-6 p-6 sm:flex-nowrap">
                            <div>
                                <div
                                    class="flex size-12 items-center justify-center rounded-md border border-default-200 bg-white/5 text-xl text-default-950"
                                >
                                    02
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-medium text-default-950">
                                    Web Design
                                </h3>
                                <p class="mt-3 text-base">
                                    Suspendisse enim turpis, dictum sed, iaculis a, condimentum
                                    nec, nisi. Praesent nec nisl a purus blandit viverra.
                                </p>
                            </div>
                        </div>
                        <!-- flex End-->

                        <div class="flex flex-wrap items-center gap-6 p-6 sm:flex-nowrap">
                            <div>
                                <div
                                    class="flex size-12 items-center justify-center rounded-md border border-default-200 bg-white/5 text-xl text-default-950"
                                >
                                    03
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-medium text-default-950">
                                    Digital Marketing
                                </h3>
                                <p class="mt-3 text-base">
                                    Vestibulum rutrum, mi nec elementum vehicula, eros quam
                                    gravida nisl, id fringilla neque ante vel mi.
                                </p>
                            </div>
                        </div>
                        <!-- flex End-->
                    </div>
                </div>
                <!-- col End-->
            </div>
            <!-- grid End-->
        </div>
        <!-- container End-->
    </section>
    <!-- End Services -->

    <!-- Start Faq -->
    <section id="faq" class="py-20">
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

            <div class="relative">
                <div class="hidden lg:block">
                    <div
                        class="before:absolute before:-start-10 before:-top-10 before:-z-10 before:h-24 before:w-24 before:rotate-180 before:bg-[url('/public/images/landing/agency/dot.svg')] after:absolute after:-bottom-10 after:-end-10 after:-z-10 after:h-24 after:w-24 after:bg-[url('/public/images/landing/agency/dot.svg')]"
                    ></div>
                </div>

                <div
                    class="grid grid-cols-1 items-center gap-8 lg:grid-cols-2 lg:gap-16"
                >
                    <div class="lg:pb-20">
                        <div class="hs-accordion-group space-y-4">
                            <div
                                class="hs-accordion active overflow-hidden rounded-lg border border-default-200 bg-default-50"
                                id="faq-1"
                            >
                                <button
                                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                    aria-controls="faq-accordion-1"
                                >
                                    <h5 class="flex text-base font-medium">
                                        What is web design, and why is it important?
                                    </h5>
                                    <i
                                        data-lucide="chevron-up"
                                        class="size-4 transition-all duration-300 hs-accordion-active:-rotate-180"
                                    ></i>
                                </button>
                                <div
                                    id="faq-accordion-1"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="faq-1"
                                >
                                    <div class="px-6 pb-4 pt-0">
                                        <p class="text-sm">
                                            Web design is the process of creating the visual and
                                            functional elements of a website.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- col End-->

                            <div
                                class="hs-accordion overflow-hidden rounded-lg border border-default-200 bg-default-50"
                                id="faq-2"
                            >
                                <button
                                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                    aria-controls="faq-2"
                                >
                                    <h5 class="flex text-base font-medium">
                                        Are these projects real or concepts?
                                    </h5>
                                    <i
                                        data-lucide="chevron-up"
                                        class="size-4 transition-all duration-300 hs-accordion-active:-rotate-180"
                                    ></i>
                                </button>
                                <div
                                    id="faq-2"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="faq-2"
                                >
                                    <div class="px-6 pb-4 pt-0">
                                        <p class="text-sm">
                                            The projects featured in my portfolio are a mix of
                                            real-world projects I've completed and conceptual
                                            designs that showcase my creative thinking and design
                                            skills.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- col End-->

                            <div
                                class="hs-accordion overflow-hidden rounded-lg border border-default-200 bg-default-50"
                                id="faq-3"
                            >
                                <button
                                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                    aria-controls="faq-3"
                                >
                                    <h5 class="flex text-base font-medium">
                                        How often is the portfolio updated?
                                    </h5>
                                    <i
                                        data-lucide="chevron-up"
                                        class="size-4 transition-all duration-300 hs-accordion-active:-rotate-180"
                                    ></i>
                                </button>
                                <div
                                    id="faq-3"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="faq-3"
                                >
                                    <div class="px-6 pb-4 pt-0">
                                        <p class="text-sm">
                                            I strive to keep my portfolio up-to-date with my latest
                                            work and projects. I regularly update it to reflect my
                                            evolving skills and design philosophy.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- col End-->

                            <div
                                class="hs-accordion overflow-hidden rounded-lg border border-default-200 bg-default-50"
                                id="faq-2"
                            >
                                <button
                                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                    aria-controls="faq-2"
                                >
                                    <h5 class="flex text-base font-medium">
                                        Can I leave feedback or comments on the portfolio
                                        projects?
                                    </h5>
                                    <i
                                        data-lucide="chevron-up"
                                        class="size-4 transition-all duration-300 hs-accordion-active:-rotate-180"
                                    ></i>
                                </button>
                                <div
                                    id="faq-2"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="faq-2"
                                >
                                    <div class="px-6 pb-4 pt-0">
                                        <p class="text-sm">
                                            At the moment, I don't have a comments section on the
                                            portfolio pages. However, I welcome feedback and
                                            inquiries.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- col End-->
                        </div>
                    </div>
                    <!-- col End-->

                    <div>
                        <div class="relative -z-10">
                            <img
                                src="/images/landing/agency/img-11.jpg"
                                class="h-full rounded-md lg:h-72"
                                alt=""
                            />
                        </div>
                        <div class="-mt-28 hidden text-end xl:block">
                            <div
                                class="ms-auto inline-block rounded-md bg-default-100 p-2 text-end dark:bg-default-50"
                            >
                                <img
                                    src="/images/landing/agency/img-12.jpg"
                                    class="ms-auto rounded"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                    <!-- col End-->
                </div>
                <!-- grid End-->
            </div>
        </div>
        <!-- container End-->
    </section>
    <!-- End faq -->

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
                <div class="overflow-hidden rounded-lg border border-default-200">
                    <div class="group p-6">
                        <div class="relative overflow-hidden rounded-md">
                            <img
                                src="/images/landing/agency/img-13.jpg"
                                class="rounded-md"
                                alt=""
                            />
                            <div class="absolute inset-0 bg-black/40"></div>
                        </div>

                        <div class="mt-6 flex gap-5">
                            <div>
                                <h2 class="text-3xl font-medium text-default-950">06</h2>
                                <p class="text-lg uppercase text-default-800">Sep</p>
                            </div>
                            <div>
                                <h2 class="text-2xl font-medium text-default-950">
                                    Brilliant minds.
                                </h2>
                                <p class="mb-5 mt-3 text-base">
                                    Lorem ipsum dolor sit amet, proin gravida nibh vel velit
                                    auctor aliquet. Aenean sollictudin, lorem quis bibendum
                                    auctor...
                                </p>
                                <a href="javascript:void(0);" class="text-lg text-default-950"
                                >Read More
                                    <i
                                        data-lucide="move-right"
                                        class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                    ></i>
                                </a>
                            </div>
                        </div>
                        <!-- flex End -->
                    </div>
                </div>
                <!-- col End -->

                <div class="overflow-hidden rounded-lg border border-default-200">
                    <div class="group p-6">
                        <div class="relative overflow-hidden rounded-md">
                            <img
                                src="/images/landing/agency/img-14.jpg"
                                class="rounded-md"
                                alt=""
                            />
                            <div class="absolute inset-0 bg-black/40"></div>
                        </div>

                        <div class="mt-6 flex gap-5">
                            <div>
                                <h2 class="text-3xl font-medium text-default-950">05</h2>
                                <p class="text-lg uppercase text-default-800">Sep</p>
                            </div>
                            <div>
                                <h2 class="text-2xl font-medium text-default-950">
                                    Digital Marketing.
                                </h2>
                                <p class="mb-5 mt-3 text-base">
                                    Lorem ipsum dolor sit amet, proin gravida nibh vel velit
                                    auctor aliquet. Aenean sollictudin, lorem quis bibendum
                                    auctor...
                                </p>
                                <a href="javascript:void(0);" class="text-lg text-default-950"
                                >Read More
                                    <i
                                        data-lucide="move-right"
                                        class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                    ></i>
                                </a>
                            </div>
                        </div>
                        <!-- flex End -->
                    </div>
                </div>
                <!-- col End -->

                <div class="overflow-hidden rounded-lg border border-default-200">
                    <div class="group p-6">
                        <div class="relative overflow-hidden rounded-md">
                            <img
                                src="/images/landing/agency/img-15.jpg"
                                class="rounded-md"
                                alt=""
                            />
                            <div class="absolute inset-0 bg-black/40"></div>
                        </div>

                        <div class="mt-6 flex gap-5">
                            <div>
                                <h2 class="text-3xl font-medium text-default-950">04</h2>
                                <p class="text-lg uppercase text-default-800">Sep</p>
                            </div>
                            <div>
                                <h2 class="text-2xl font-medium text-default-950">
                                    Good thinking.
                                </h2>
                                <p class="mb-5 mt-3 text-base">
                                    Lorem ipsum dolor sit amet, proin gravida nibh vel velit
                                    auctor aliquet. Aenean sollictudin, lorem quis bibendum
                                    auctor...
                                </p>
                                <a href="javascript:void(0);" class="text-lg text-default-950"
                                >Read More
                                    <i
                                        data-lucide="move-right"
                                        class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                    ></i>
                                </a>
                            </div>
                        </div>
                        <!-- flex End -->
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- Grid End -->
        </div>
        <!-- container End-->
    </section>
    <!-- End Blog -->

    <!-- Start Contact -->
    <section id="contact" class="py-10 lg:py-20">
        <div class="container">
            <div class="flex flex-wrap items-center justify-around gap-6">
                <div class="text-center">
                    <div
                        class="mx-auto flex size-20 items-center justify-center rounded-md border border-default-200 bg-white/5 text-default-950"
                    >
                        <i data-lucide="phone" class="size-10"></i>
                    </div>
                    <h4 class="mt-5 text-xl font-medium text-default-950">Call Me</h4>
                    <p class="mt-1 text-base text-default-800">+0088 66956 66</p>
                </div>
                <!-- col End -->

                <div class="text-center">
                    <div
                        class="mx-auto flex size-20 items-center justify-center rounded-md border border-default-200 bg-white/5 text-default-950"
                    >
                        <i data-lucide="mail" class="size-10"></i>
                    </div>
                    <h4 class="mt-5 text-xl font-medium text-default-950">Email me</h4>
                    <p class="mt-1 text-base text-default-800">Dgnr@gmail.com</p>
                </div>
                <!-- col End -->

                <div class="text-center">
                    <div
                        class="mx-auto flex size-20 items-center justify-center rounded-md border border-default-200 bg-white/5 text-default-950"
                    >
                        <i data-lucide="line-chart" class="size-10"></i>
                    </div>
                    <h4 class="mt-5 text-xl font-medium text-default-950">Flow Me</h4>
                    <p class="mt-1 text-base text-default-800">Facebook.com</p>
                </div>
                <!-- col End -->

                <div class="text-center">
                    <div
                        class="mx-auto flex size-20 items-center justify-center rounded-md border border-default-200 bg-white/5 text-default-950"
                    >
                        <i data-lucide="save" class="size-10"></i>
                    </div>
                    <h4 class="mt-5 text-xl font-medium text-default-950">My Work</h4>
                    <p class="mt-1 text-base text-default-800">Coderthemes.com</p>
                </div>
                <!-- col End -->
            </div>
            <!-- flex End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End Contact -->
@endsection

@section('script-bottom')

@endsection

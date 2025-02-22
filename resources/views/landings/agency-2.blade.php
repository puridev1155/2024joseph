@extends('layouts.landing', ['title' => 'Joseph School'])

@section('css')

@endsection

@section('content')
    @include('layouts.shared.navbar-two', [
        'menuPosition' => 'fixed',
        'navItems' => [
            (object)['id' => 'home', 'name' => 'Home'],
            (object)['id' => 'features','name' => 'Features'],
            (object)['id' => 'faq','name' => 'Faq'],
            (object)['id' => 'portfolio','name' => 'Portfolio'],
            (object)['id' => 'pricing','name' => 'Pricing'],
            (object)['id' => 'service','name' => 'Service'],
            (object)['id' => 'blog','name' => 'Blog'],
            ]
        ])

    <!-- Hero Section Start -->
    <section
        id="home"
        class="bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat py-40 dark:bg-[url('/public/images/other/bg-lines-2-dark.png')]"
    >
        <div class="container">
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div>
                    <div class="max-w-lg text-center lg:text-start">
                        <h2
                            class="text-4xl font-medium text-default-950 sm:text-5xl lg:text-6xl/tight"
                        >
                            Better design for your digital products.
                        </h2>
                        <p class="my-6 text-base">
                            We are a creative studio specializing in UI/UX design, <br/>
                            development and strategy.
                        </p>
                        <a
                            href="#"
                            class="inline-flex items-center justify-center gap-2 rounded-md border border-primary/50 bg-primary/10 px-6 py-2 text-primary transition-all duration-300 hover:bg-primary hover:text-white"
                        >Get Solution
                            <i data-lucide="arrow-up-right" class="size-6"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <img
                        src="/images/landing/agency-2/hero.png"
                        class="h-full w-full"
                        alt=""
                    />
                </div>
            </div>
            <!-- grid End -->
        </div>
    </section>
    <!-- Hero end -->

    <!-- Start features -->
    <section id="features" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Features Services</span
            >
                    <h2 class="my-4 text-4xl font-medium capitalize text-default-950">
                        Features
                    </h2>
                </div>
            </div>
            <!-- flex End-->

            <div
                class="grid grid-cols-1 items-center overflow-hidden rounded-md border border-default-200 md:grid-cols-2 xl:grid-cols-3"
            >
                <div class="group border-default-200">
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
                        <p class="mb-6 text-base text-default-600">
                            Lorem ipsum dummy text are usually use in these section. Lorem
                            ipsum dummy text are used in this design
                        </p>
                        <a
                            href="javascript:void(0);"
                            class="text-lg font-medium text-default-950"
                        >Read More
                            <i
                                data-lucide="move-right"
                                class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                            ></i>
                        </a>
                    </div>
                </div>
                <!-- end col -->

                <div class="group border-default-200 xl:border-s">
                    <div class="p-8 sm:p-10">
              <span>
                <i data-lucide="layers" class="size-14 text-default-950"></i>
              </span>
                        <h2 class="mb-4 mt-8 text-2xl font-medium text-default-950">
                            Digital Product Design
                        </h2>
                        <p class="mb-6 text-base text-default-600">
                            Lorem ipsum dummy text are usually use in these section. Lorem
                            ipsum dummy text are used in this design
                        </p>
                        <a
                            href="javascript:void(0);"
                            class="text-lg font-medium text-default-950"
                        >Read More
                            <i
                                data-lucide="move-right"
                                class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                            ></i>
                        </a>
                    </div>
                </div>
                <!-- end col -->

                <div class="group border-default-200 md:border-s">
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
                        <p class="mb-6 text-base text-default-600">
                            Lorem ipsum dummy text are usually use in these section. Lorem
                            ipsum dummy text are used in this design
                        </p>
                        <a
                            href="javascript:void(0);"
                            class="text-lg font-medium text-default-950"
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
    <!-- End features -->

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
                        Frequently Asked Questions ?
                    </h2>
                </div>
            </div>
            <!-- flex End-->

            <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
                <div>
                    <img src="/images/landing/agency-2/4.svg" alt=""/>
                </div>
                <!-- col End-->

                <div class="lg:pb-20">
                    <div class="hs-accordion-group space-y-4">
                        <div
                            class="hs-accordion active overflow-hidden rounded-lg border border-default-200"
                            id="faq-1"
                        >
                            <button
                                class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                aria-controls="faq-accordion-1"
                            >
                                <h5 class="flex text-base font-medium">
                                    How can digital marketing benefit my business?
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
                                        It can increase brand visibility, drive website traffic,
                                        generate leads, and ultimately boost sales and revenue.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- col End-->

                        <div
                            class="hs-accordion overflow-hidden rounded-lg border border-default-200"
                            id="faq-2"
                        >
                            <button
                                class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                aria-controls="faq-2"
                            >
                                <h5 class="flex text-base font-medium">
                                    Do I need to have a large budget for digital marketing?
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
                                        We work with businesses of various budgets and can create
                                        strategies that align with your financial resources while
                                        delivering meaningful results.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- col End-->

                        <div
                            class="hs-accordion overflow-hidden rounded-lg border border-default-200"
                            id="faq-3"
                        >
                            <button
                                class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                aria-controls="faq-3"
                            >
                                <h5 class="flex text-base font-medium">
                                    What services does [Your Digital Agency] offer?
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
                                        provides a comprehensive range of digital services,
                                        including website design and development, digital
                                        marketing, search engine optimization
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- col End-->

                        <div
                            class="hs-accordion overflow-hidden rounded-lg border border-default-200"
                            id="faq-2"
                        >
                            <button
                                class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                aria-controls="faq-2"
                            >
                                <h5 class="flex text-base font-medium">
                                    Can help with content creation and social media management?
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
                        <div class="group relative overflow-hidden rounded-xl">
                            <img
                                src="/images/landing/agency-2/img-1.jpg"
                                class="h-full w-full"
                                alt=""
                            />
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
                        <div class="group relative overflow-hidden rounded-xl">
                            <img
                                src="/images/landing/agency-2/img-2.jpg"
                                class="h-full w-full"
                                alt=""
                            />
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
                        <div class="group relative overflow-hidden rounded-xl">
                            <img src="/images/landing/agency-2/img-3.jpg" alt=""/>
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
                                        Branding Studio
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="group relative overflow-hidden rounded-xl">
                            <img
                                src="/images/landing/agency-2/img-1.jpg"
                                class="h-full w-full"
                                alt=""
                            />
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
                        <div class="group relative overflow-hidden rounded-xl">
                            <img
                                src="/images/landing/agency-2/img-2.jpg"
                                class="h-full w-full"
                                alt=""
                            />
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
                        <div class="group relative overflow-hidden rounded-xl">
                            <img src="/images/landing/agency-2/img-3.jpg" alt=""/>
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
                                        Branding Studio
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

    <!-- Start Pricing -->
    <section id="pricing" class="py-10 lg:py-20">
        <div class="container">
            <div class="grid gap-6 xl:grid-cols-5">
                <div class="xl:col-span-2">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Pricing</span
            >
                    <h2 class="mt-6 text-4xl font-medium text-default-950">
                        Affordable Pricing. <br/>
                        Easy scaling.
                    </h2>
                    <hr
                        class="my-6 hidden border border-dashed text-default-800 xl:block"
                    />
                    <p class="text-base">
                        Things go wrong have questions. We’ve understand. So we have
                        people
                    </p>

                    <ul role="list" class="text-default-white mt-4 text-sm">
                        <li class="flex items-center gap-2 py-1">
                            <!-- svg icon -->
                            <i
                                data-lucide="move-right"
                                class="inline-block size-6 stroke-primary"
                            ></i>
                            <span class="text-base text-default-950"
                            >Amazing communication.</span
                            >
                        </li>
                        <li class="flex items-center gap-2 py-1">
                            <!-- svg icon -->
                            <i
                                data-lucide="move-right"
                                class="inline-block size-6 stroke-primary"
                            ></i>
                            <span class="text-base text-default-950"
                            >Best trendinf designing experience.</span
                            >
                        </li>
                        <li class="flex items-center gap-2 py-1">
                            <!-- svg icon -->
                            <i
                                data-lucide="move-right"
                                class="inline-block size-6 stroke-primary"
                            ></i>
                            <span class="text-base text-default-950"
                            >Email & Live chat.</span
                            >
                        </li>
                    </ul>
                </div>

                <div class="mt-8 lg:mt-0 xl:col-span-3">
                    <div class="lg:ms-8">
                        <div class="grid grid-cols-1 gap-x-10 gap-y-6 md:grid-cols-2">
                            <div
                                class="z-2 group relative rounded-md bg-default-100 shadow dark:bg-default-50"
                            >
                                <div class="p-6 py-8">
                                    <h6 class="mb-5 font-bold uppercase text-primary">
                                        Advanced
                                    </h6>

                                    <div class="mb-2 flex text-default-950">
                                        <span class="text-xl font-semibold">$</span>
                                        <span class="price mb-0 text-4xl font-semibold">24</span>
                                        <span class="mb-1 self-end text-xl font-semibold"
                                        >/mo</span
                                        >
                                    </div>
                                    <p>14 days free</p>

                                    <ul
                                        role="list"
                                        class="text-default-white -ms-3 mb-5 mt-4 text-sm"
                                    >
                                        <li class="flex items-center gap-2 py-1">
                                            <!-- svg icon -->
                                            <i
                                                data-lucide="dot"
                                                class="inline-block size-8 stroke-primary"
                                            ></i>
                                            <span class="text-base text-default-950"
                                            >Guaranteed quality control</span
                                            >
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <!-- svg icon -->
                                            <i
                                                data-lucide="dot"
                                                class="inline-block size-8 stroke-primary"
                                            ></i>
                                            <span class="text-base text-default-950"
                                            >Top quality service</span
                                            >
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <!-- svg icon -->
                                            <i
                                                data-lucide="dot"
                                                class="inline-block size-8 stroke-primary"
                                            ></i>
                                            <span class="text-base text-default-950"
                                            >Best experts at your lease</span
                                            >
                                        </li>
                                    </ul>
                                    <a
                                        href="#"
                                        class="inline-block rounded-md border border-primary/50 bg-primary/10 px-6 py-2 text-primary transition-all duration-300 hover:bg-primary hover:text-white"
                                    >Sign up</a
                                    >
                                </div>
                            </div>

                            <div
                                class="z-3 group relative rounded-md bg-default-100 shadow dark:bg-default-50"
                            >
                                <div class="p-6 py-8">
                                    <h6 class="mb-5 font-bold uppercase text-primary">
                                        Enterprise
                                    </h6>

                                    <div class="mb-2 flex text-default-950">
                                        <span class="text-xl font-semibold">$</span>
                                        <span class="price mb-0 text-4xl font-semibold">87</span>
                                        <span class="mb-1 self-end text-xl font-semibold"
                                        >/mo</span
                                        >
                                    </div>
                                    <p>14 days free</p>

                                    <ul
                                        role="list"
                                        class="text-default-white -ms-3 mb-5 mt-4 text-sm"
                                    >
                                        <li class="flex items-center gap-2 py-1">
                                            <!-- svg icon -->
                                            <i
                                                data-lucide="dot"
                                                class="inline-block size-8 stroke-primary"
                                            ></i>
                                            <span class="text-base text-default-950"
                                            >Guaranteed quality control</span
                                            >
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <!-- svg icon -->
                                            <i
                                                data-lucide="dot"
                                                class="inline-block size-8 stroke-primary"
                                            ></i>
                                            <span class="text-base text-default-950"
                                            >Top quality service</span
                                            >
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <!-- svg icon -->
                                            <i
                                                data-lucide="dot"
                                                class="inline-block size-8 stroke-primary"
                                            ></i>
                                            <span class="text-base text-default-950"
                                            >Best experts at your lease</span
                                            >
                                        </li>
                                    </ul>
                                    <a
                                        href="#"
                                        class="inline-block rounded-md border border-primary/50 bg-primary/10 px-6 py-2 text-primary transition-all duration-300 hover:bg-primary hover:text-white"
                                    >Sign up</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing -->

    <!-- Start Services -->
    <section id="service" class="py-10 lg:py-20">
        <div class="container">
            <div class="grid grid-cols-1 gap-x-10 gap-y-6 xl:grid-cols-2">
                <div>
                    <div class="mb-10 flex items-end justify-between">
                        <div class="mx-auto max-w-lg text-center lg:text-start xl:ms-0">
                <span
                    class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
                >Services</span
                >
                            <p class="mt-5 text-lg text-default-950">
                                We help you to go online and increase your conversion rate
                                Better design for your digital products.
                            </p>
                        </div>
                    </div>
                    <!-- flex End -->

                    <div>
                        <div
                            class="mx-auto max-w-md rounded-md border border-default-200 xl:ms-0"
                        >
                            <div class="divide-y divide-default-200">
                                <div class="flex items-center justify-between p-6">
                                    <h3 class="text-2xl font-medium text-default-950">
                                        Graphic Design
                                    </h3>
                                    <div
                                        class="flex size-12 items-center justify-center rounded-full border border-default-200 bg-white/5 text-default-950 transition-all duration-200 hover:bg-primary hover:text-white"
                                    >
                                        <i data-lucide="chevron-right" class="size-6"></i>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between p-6">
                                    <h3 class="text-2xl font-medium text-default-950">
                                        Web Design
                                    </h3>
                                    <div
                                        class="flex size-12 items-center justify-center rounded-full border border-default-200 bg-white/5 text-default-950 transition-all duration-200 hover:bg-primary hover:text-white"
                                    >
                                        <i data-lucide="chevron-right" class="size-6"></i>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between p-6">
                                    <h3 class="text-2xl font-medium text-default-950">
                                        Digital Marketing
                                    </h3>
                                    <div
                                        class="flex size-12 items-center justify-center rounded-full border border-default-200 bg-white/5 text-default-950 transition-all duration-200 hover:bg-primary hover:text-white"
                                    >
                                        <i data-lucide="chevron-right" class="size-6"></i>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between p-6">
                                    <h3 class="text-2xl font-medium text-default-950">
                                        UI/UX Design
                                    </h3>
                                    <div
                                        class="flex size-12 items-center justify-center rounded-full border border-default-200 bg-white/5 text-default-950 transition-all duration-200 hover:bg-primary hover:text-white"
                                    >
                                        <i data-lucide="chevron-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col End -->

                <div class="relative flex flex-col gap-y-6">
                    <img
                        src="/images/landing/agency-2/img-4.jpg"
                        class="h-full w-full rounded-xl"
                        alt=""
                    />
                    <div
                        class="top-auto md:absolute md:bottom-10 md:start-10 xl:-start-28"
                    >
                        <div
                            class="group max-w-sm rounded-lg bg-default-100 p-6 dark:bg-default-50"
                        >
                            <h3 class="mb-3 text-2xl font-medium text-default-950">
                                Development
                            </h3>
                            <p class="mb-5 text-base">
                                Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel,
                                lacus. Sed augue ipsum, egestas nec, vestibulum et, malesuada
                                adipiscing, dui.
                            </p>
                            <a
                                href="javascript:void(0);"
                                class="text-lg font-medium text-default-950"
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
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End Services -->

    <!-- Start marq -->
    <section>
        <div
            class="relative m-auto flex gap-28 overflow-hidden border border-default-200 py-8"
        >
            <div
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <div class="py-3">
                    <h2 class="flex text-5xl font-medium text-default-950">
                        UI-UX Experience
                    </h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">
                        Web Development
                    </h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">
                        Digital Marketing
                    </h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">
                        Product Design
                    </h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">
                        Mobile Solutions
                    </h2>
                </div>
            </div>
            <!-- marquee__group End-->

            <div
                aria-hidden="true"
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <div class="py-3">
                    <h2 class="flex text-5xl font-medium text-default-950">
                        UI-UX Experience
                    </h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">
                        Web Development
                    </h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">
                        Digital Marketing
                    </h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">
                        Product Design
                    </h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">
                        Mobile Solutions
                    </h2>
                </div>
            </div>
            <!-- marquee__group End-->
        </div>
        <!-- flex End -->
    </section>
    <!-- End marq Section -->

    <!-- since Start -->
    <section class="relative py-10 lg:py-20 xl:py-0">
        <div class="container">
            <div
                class="relative grid grid-cols-1 items-center gap-12 xl:grid-cols-2"
            >
                <div class="mx-auto">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Since From</span
            >
                    <h1
                        class="my-4 max-w-lg text-4xl font-medium text-default-950 md:text-5xl/tight"
                    >
                        Keep pushing forward. We've got your back.
                    </h1>
                    <p class="max-w-md md:text-lg">
                        Thing go wrong have questions. We've understand. So we have people
                    </p>

                    <div class="mt-10 flex flex-wrap items-center gap-16">
                        <div class="flex items-center gap-6">
                            <h2 class="text-5xl font-medium text-default-950">10k</h2>
                            <p class="text-base">Happy Users <br/>Around World</p>
                        </div>

                        <div class="flex items-center gap-6">
                            <h2 class="text-5xl font-medium text-default-950">120k</h2>
                            <p class="text-base">Projects <br/>Already Done</p>
                        </div>
                    </div>
                    <!-- flex end -->
                </div>
                <!-- col end -->

                <div class="relative mx-auto h-[600px] overflow-hidden">
                    <div class="marquee">
                        <div class="relative m-auto flex flex-col gap-6 overflow-hidden">
                            <div
                                class="marquee-hero flex min-h-full flex-shrink-0 flex-col items-center justify-around gap-6"
                            >
                                <div>
                                    <div
                                        class="max-w-xl rounded-md border border-default-200 bg-default-50 p-6"
                                    >
                                        <div class="flex items-center gap-5">
                                            <img
                                                src="/images/avatars/img-1.jpg"
                                                class="size-16 rounded-full border-4 border-default-200"
                                            />
                                            <h3 class="text-lg font-medium text-default-950">
                                                Leonard Heiser
                                            </h3>
                                        </div>
                                        <!-- flex end -->
                                        <p class="my-5 text-xl text-default-600">
                                            I have been hiring people in this space for and numbers
                                            of years and I have to be never seen this level of
                                            professionalism.
                                        </p>
                                        <div class="flex items-center gap-1">
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                        </div>
                                        <!-- flex end -->
                                    </div>
                                </div>
                                <!-- col end -->

                                <div>
                                    <div
                                        class="max-w-xl rounded-md border border-default-200 bg-default-50 p-6"
                                    >
                                        <div class="flex items-center gap-5">
                                            <img
                                                src="/images/avatars/img-2.jpg"
                                                class="size-16 rounded-full border-4 border-default-200"
                                            />
                                            <h3 class="text-lg font-medium text-default-950">
                                                Leonard Heiser
                                            </h3>
                                        </div>
                                        <!-- flex end -->
                                        <p class="my-5 text-xl text-default-600">
                                            I have been hiring people in this space for and numbers
                                            of years and I have to be never seen this level of
                                            professionalism.
                                        </p>
                                        <div class="flex items-center gap-1">
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                        </div>
                                        <!-- flex end -->
                                    </div>
                                </div>
                                <!-- col end -->

                                <div>
                                    <div
                                        class="max-w-xl rounded-md border border-default-200 bg-default-50 p-6"
                                    >
                                        <div class="flex items-center gap-5">
                                            <img
                                                src="/images/avatars/img-3.jpg"
                                                class="size-16 rounded-full border-4 border-default-200"
                                            />
                                            <h3 class="text-lg font-medium text-default-950">
                                                Leonard Heiser
                                            </h3>
                                        </div>
                                        <!-- flex end -->
                                        <p class="my-5 text-xl text-default-600">
                                            I have been hiring people in this space for and numbers
                                            of years and I have to be never seen this level of
                                            professionalism.
                                        </p>
                                        <div class="flex items-center gap-1">
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                        </div>
                                        <!-- flex end -->
                                    </div>
                                </div>
                                <!-- col end -->

                                <div>
                                    <div
                                        class="max-w-xl rounded-md border border-default-200 bg-default-50 p-6"
                                    >
                                        <div class="flex items-center gap-5">
                                            <img
                                                src="/images/avatars/img-4.jpg"
                                                class="size-16 rounded-full border-4 border-default-200"
                                            />
                                            <h3 class="text-lg font-medium text-default-950">
                                                Leonard Heiser
                                            </h3>
                                        </div>
                                        <!-- flex end -->
                                        <p class="my-5 text-xl text-default-600">
                                            I have been hiring people in this space for and numbers
                                            of years and I have to be never seen this level of
                                            professionalism.
                                        </p>
                                        <div class="flex items-center gap-1">
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                        </div>
                                        <!-- flex end -->
                                    </div>
                                </div>
                                <!-- col end -->

                                <div>
                                    <div
                                        class="max-w-xl rounded-md border border-default-200 bg-default-50 p-6"
                                    >
                                        <div class="flex items-center gap-5">
                                            <img
                                                src="/images/avatars/img-5.jpg"
                                                class="size-16 rounded-full border-4 border-default-200"
                                            />
                                            <h3 class="text-lg font-medium text-default-950">
                                                Leonard Heiser
                                            </h3>
                                        </div>
                                        <!-- flex end -->
                                        <p class="my-5 text-xl text-default-600">
                                            I have been hiring people in this space for and numbers
                                            of years and I have to be never seen this level of
                                            professionalism.
                                        </p>
                                        <div class="flex items-center gap-1">
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                        </div>
                                        <!-- flex end -->
                                    </div>
                                </div>
                                <!-- col end -->
                            </div>
                            <!-- marquee-hero end -->

                            <div
                                aria-hidden="true"
                                class="marquee-hero flex min-h-full flex-shrink-0 flex-col items-center justify-around gap-6"
                            >
                                <div>
                                    <div
                                        class="max-w-xl rounded-md border border-default-200 bg-default-50 p-6"
                                    >
                                        <div class="flex items-center gap-5">
                                            <img
                                                src="/images/avatars/img-1.jpg"
                                                class="size-16 rounded-full border-4 border-default-200"
                                            />
                                            <h3 class="text-lg font-medium text-default-950">
                                                Leonard Heiser
                                            </h3>
                                        </div>
                                        <!-- flex end -->
                                        <p class="my-5 text-xl text-default-600">
                                            I have been hiring people in this space for and numbers
                                            of years and I have to be never seen this level of
                                            professionalism.
                                        </p>
                                        <div class="flex items-center gap-1">
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                        </div>
                                        <!-- flex end -->
                                    </div>
                                </div>
                                <!-- col end -->

                                <div>
                                    <div
                                        class="max-w-xl rounded-md border border-default-200 bg-default-50 p-6"
                                    >
                                        <div class="flex items-center gap-5">
                                            <img
                                                src="/images/avatars/img-2.jpg"
                                                class="size-16 rounded-full border-4 border-default-200"
                                            />
                                            <h3 class="text-lg font-medium text-default-950">
                                                Leonard Heiser
                                            </h3>
                                        </div>
                                        <!-- flex end -->
                                        <p class="my-5 text-xl text-default-600">
                                            I have been hiring people in this space for and numbers
                                            of years and I have to be never seen this level of
                                            professionalism.
                                        </p>
                                        <div class="flex items-center gap-1">
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                        </div>
                                        <!-- flex end -->
                                    </div>
                                </div>
                                <!-- col end -->

                                <div>
                                    <div
                                        class="max-w-xl rounded-md border border-default-200 bg-default-50 p-6"
                                    >
                                        <div class="flex items-center gap-5">
                                            <img
                                                src="/images/avatars/img-3.jpg"
                                                class="size-16 rounded-full border-4 border-default-200"
                                            />
                                            <h3 class="text-lg font-medium text-default-950">
                                                Leonard Heiser
                                            </h3>
                                        </div>
                                        <!-- flex end -->
                                        <p class="my-5 text-xl text-default-600">
                                            I have been hiring people in this space for and numbers
                                            of years and I have to be never seen this level of
                                            professionalism.
                                        </p>
                                        <div class="flex items-center gap-1">
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                        </div>
                                        <!-- flex end -->
                                    </div>
                                </div>
                                <!-- col end -->

                                <div>
                                    <div
                                        class="max-w-xl rounded-md border border-default-200 bg-default-50 p-6"
                                    >
                                        <div class="flex items-center gap-5">
                                            <img
                                                src="/images/avatars/img-4.jpg"
                                                class="size-16 rounded-full border-4 border-default-200"
                                            />
                                            <h3 class="text-lg font-medium text-default-950">
                                                Leonard Heiser
                                            </h3>
                                        </div>
                                        <!-- flex end -->
                                        <p class="my-5 text-xl text-default-600">
                                            I have been hiring people in this space for and numbers
                                            of years and I have to be never seen this level of
                                            professionalism.
                                        </p>
                                        <div class="flex items-center gap-1">
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                        </div>
                                        <!-- flex end -->
                                    </div>
                                </div>
                                <!-- col end -->

                                <div>
                                    <div
                                        class="max-w-xl rounded-md border border-default-200 bg-default-50 p-6"
                                    >
                                        <div class="flex items-center gap-5">
                                            <img
                                                src="/images/avatars/img-5.jpg"
                                                class="size-16 rounded-full border-4 border-default-200"
                                            />
                                            <h3 class="text-lg font-medium text-default-950">
                                                Leonard Heiser
                                            </h3>
                                        </div>
                                        <!-- flex end -->
                                        <p class="my-5 text-xl text-default-600">
                                            I have been hiring people in this space for and numbers
                                            of years and I have to be never seen this level of
                                            professionalism.
                                        </p>
                                        <div class="flex items-center gap-1">
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                            <i
                                                data-lucide="star"
                                                class="size-5 fill-yellow-400 stroke-yellow-400"
                                            ></i>
                                        </div>
                                        <!-- flex end -->
                                    </div>
                                </div>
                                <!-- col end -->
                            </div>
                            <!-- marquee-hero end -->
                        </div>
                        <!-- flex end -->
                    </div>
                    <!-- marquee end -->
                </div>
                <!-- col end -->
            </div>
            <!-- grid end -->
        </div>
        <!-- container end -->
    </section>
    <!-- since end  -->

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
                        Read the latest news.
                    </h2>
                </div>
            </div>
            <!-- flex End -->

            <div class="grid gap-6 xl:grid-cols-3">
                <div class="overflow-hidden rounded-lg border border-default-200">
                    <div class="flex flex-col">
                        <div class="">
                            <img
                                src="/images/landing/agency-2/img-1.jpg"
                                class="h-full max-w-full"
                                alt=""
                            />
                        </div>

                        <div class="group p-6">
                            <h3 class="mb-4 text-xl font-medium text-default-950">
                                Free advertising you online business.
                            </h3>
                            <p class="mb-5 mt-3 text-base">
                                Content king that means bringing and strategic approach.
                            </p>
                            <a
                                href="javascript:void(0);"
                                class="text-lg font-medium text-default-950"
                            >Read More
                                <i
                                    data-lucide="move-right"
                                    class="duration-400 inline-block size-5 opacity-0 transition-all will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                ></i>
                            </a>
                        </div>
                    </div>
                    <!-- grid End -->
                </div>
                <!-- col End -->

                <div class="overflow-hidden rounded-lg border border-default-200">
                    <div class="flex flex-col">
                        <div class="">
                            <img
                                src="/images/landing/agency-2/img-2.jpg"
                                class="h-full max-w-full"
                                alt=""
                            />
                        </div>

                        <div class="group p-6">
                            <h3 class="mb-4 text-xl font-medium text-default-950">
                                Investment monitor top 2023
                            </h3>
                            <p class="mb-5 mt-3 text-base">
                                We are thrilled to the Investment Top 2023, recognizing the
                                excellence and innovation.
                            </p>
                            <a
                                href="javascript:void(0);"
                                class="text-lg font-medium text-default-950"
                            >Read More
                                <i
                                    data-lucide="move-right"
                                    class="duration-400 inline-block size-5 opacity-0 transition-all will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                ></i>
                            </a>
                        </div>
                    </div>
                    <!-- grid End -->
                </div>
                <!-- col End -->

                <div class="overflow-hidden rounded-lg border border-default-200">
                    <div class="flex flex-col">
                        <div class="">
                            <img
                                src="/images/landing/agency-2/img-3.jpg"
                                class="h-full max-w-full"
                                alt=""
                            />
                        </div>

                        <div class="group p-6">
                            <h3 class="mb-4 text-xl font-medium text-default-950">
                                Advancing Innovation and Collaboration
                            </h3>
                            <p class="mb-5 mt-3 text-base">
                                Join us for a transformative event focused on Advancing
                                Innovation and Collaboration.
                            </p>
                            <a
                                href="javascript:void(0);"
                                class="text-lg font-medium text-default-950"
                            >Read More
                                <i
                                    data-lucide="move-right"
                                    class="duration-400 inline-block size-5 opacity-0 transition-all will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                ></i>
                            </a>
                        </div>
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
@endsection

@section('script-bottom')

@endsection

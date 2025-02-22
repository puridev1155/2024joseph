@extends('layouts.landing', ['title' => 'Joseph School'])

@section('css')

@endsection

@section('content')
    @include('layouts.shared.navbar', [
        'menuPosition' => 'fixed',
        'navItems' => [
            (object)['id' => 'home','name' => 'Home'],
            (object)['id' => 'services','name' => 'Services'],
            (object)['id' => 'faq','name' => 'Faq'],
            (object)['id' => 'testimonials','name' => 'Testimonials'],
            (object)['id' => 'blog','name' => 'Blog'],
            ]
        ])

    <!-- Hero Section Start -->
    <section
        id="home"
        class="relative overflow-hidden bg-primary/5 py-24 lg:py-40"
    >
        <div class="container">
            <div
                class="mb-10 grid grid-cols-1 items-center gap-x-6 gap-y-12 lg:grid-cols-2"
            >
                <div class="max-w-xl">
                    <div
                        class="inline-block rounded-full border border-primary/20 pe-5"
                    >
                        <div class="flex items-center gap-2">
                            <div
                                class="flex size-6 items-center justify-center rounded-full bg-primary/20"
                            >
                                <i data-lucide="bell" class="size-4 text-default-950"></i>
                            </div>
                            <span class="text-xs font-medium text-default-950 md:text-sm"
                            >Startup Business</span
                            >
                        </div>
                    </div>
                    <h1
                        class="my-4 max-w-lg text-4xl font-medium text-default-950 md:text-4xl/tight"
                    >
                        Empowering startups to fuel their business growth
                    </h1>
                    <p class="md:text-lg">
                        Eu posuere mi sed purus proin quisque molestie. Ut amet, at amet,
                        velit <br/>
                        nibh arcu eu. Id sem varius malesuada tincidunt sodales.
                    </p>

                    <div class="inline-block">
                        <a
                            href="#"
                            class="mt-6 flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2 text-base font-medium text-white transition-all duration-300 hover:bg-primary-700"
                        >Get started now</a
                        >
                    </div>
                </div>
                <!-- col End -->

                <div class="">
                    <img src="/images/landing/company/hero-img.png" alt=""/>
                </div>
            </div>

            <div class="grid gap-6 lg:grid-cols-3">
                <div
                    class="rounded-xl border border-primary/20 bg-primary/5 p-6 text-center sm:text-start"
                >
                    <div
                        class="flex flex-wrap items-center justify-center gap-6 sm:flex-nowrap sm:justify-start sm:gap-0"
                    >
                        <div class="sm:pe-5">
                            <i
                                data-lucide="settings"
                                class="mx-auto size-10 text-default-950"
                            ></i>
                        </div>

                        <div class="border-primary/20 sm:border-s sm:ps-5">
                            <h2 class="text-xl font-medium text-default-950">
                                Immediate Deployment
                            </h2>
                            <p class="mt-3 text-base">
                                Et vero eos et accusamus et iusto odio dignissimos
                            </p>
                        </div>
                    </div>
                    <!-- flex End -->
                </div>
                <!-- col End -->

                <div
                    class="rounded-xl border border-primary/20 bg-primary/5 p-6 text-center sm:text-start"
                >
                    <div
                        class="flex flex-wrap items-center justify-center gap-6 sm:flex-nowrap sm:justify-start sm:gap-0"
                    >
                        <div class="sm:pe-5">
                            <i
                                data-lucide="app-window"
                                class="mx-auto size-10 text-default-950"
                            ></i>
                        </div>

                        <div class="border-primary/20 sm:border-s sm:ps-5">
                            <h2 class="text-xl font-medium text-default-950">
                                DOS Protection
                            </h2>
                            <p class="mt-3 text-base">
                                But I need to clarify how this erroneous concept is
                            </p>
                        </div>
                    </div>
                    <!-- flex End -->
                </div>
                <!-- col End -->

                <div
                    class="rounded-xl border border-primary/20 bg-primary/5 p-6 text-center sm:text-start"
                >
                    <div
                        class="flex flex-wrap items-center justify-center gap-6 sm:flex-nowrap sm:justify-start sm:gap-0"
                    >
                        <div class="sm:pe-5">
                            <i
                                data-lucide="headphones"
                                class="mx-auto size-10 text-default-950"
                            ></i>
                        </div>

                        <div class="border-primary/20 sm:border-s sm:ps-5">
                            <h2 class="text-xl font-medium text-default-950">
                                Premium Support
                            </h2>
                            <p class="mt-3 text-base">
                                we disapprove of those who uphold righteous indignation.
                            </p>
                        </div>
                    </div>
                    <!-- flex End -->
                </div>
                <!-- col End -->
            </div>
        </div>
    </section>

    <section
        class="bg-default-100 bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat py-10 dark:bg-default-50 dark:bg-[url('/images/other/bg-lines-2-dark.png')] lg:py-20"
    >
        <div class="container">
            <div class="grid grid-cols-1 items-center gap-6 xl:grid-cols-2">
                <div>
                    <h2 class="text-3xl font-medium text-default-950 md:text-4xl">
                        Assisting you in securing a competitive advantage
                    </h2>
                    <p class="my-5 text-base font-medium text-default-600">
                        Placerat nunc amet sapien neque, purus cras. Elementum viverra
                        egestas fames ornare sed arcu. Consectetur cras vitae orci.
                    </p>
                    <a
                        href="#"
                        class="inline-flex h-10 items-center justify-center rounded-md bg-primary/20 px-4 text-primary transition-all hover:bg-primary hover:text-white"
                    >
                        <i data-lucide="move-right" class="size-6"></i>
                    </a>
                </div>

                <div class="rounded-lg p-8">
                    <div class="rounded-md bg-white p-6 dark:bg-default-100">
                        <h3 class="text-2xl font-medium text-default-950">
                            Feel free to get in touch with us!
                        </h3>
                        <p class="mt-3 text-base">
                            Placerat nunc amet sapien neque, purus cras. Elementum viverra
                            egestas fames ornare sed arcu.
                        </p>

                        <form class="mt-6 space-y-4">
                            <div>
                                <label
                                    for="name"
                                    class="mb-2 inline-block text-base font-medium text-default-950"
                                >Name</label
                                >
                                <input
                                    type="text"
                                    id="name"
                                    class="h-12 w-full rounded border-default-200 py-4 ps-4 text-default-950 focus:border-default-200 focus:ring-0 dark:bg-default-50"
                                    placeholder="Your Name"
                                    name="name"
                                />
                            </div>
                            <div>
                                <label
                                    for="email"
                                    class="mb-2 inline-block text-base font-medium text-default-950"
                                >Email</label
                                >
                                <input
                                    type="email"
                                    id="email"
                                    class="h-12 w-full rounded border-default-200 py-4 ps-4 text-default-950 focus:border-default-200 focus:ring-0 dark:bg-default-50"
                                    placeholder="Type Your email"
                                    name="email"
                                />
                            </div>
                            <div>
                                <label
                                    for="subject"
                                    class="mb-2 inline-block text-base font-medium text-default-950"
                                >Subject</label
                                >
                                <input
                                    type="text"
                                    id="subject"
                                    class="h-12 w-full rounded border-default-200 py-4 ps-4 text-default-950 focus:border-default-200 focus:ring-0 dark:bg-default-50"
                                    placeholder="Your message subject"
                                    name="subject"
                                />
                            </div>
                            <button class="rounded bg-black px-6 py-2 text-lg text-white">
                                Send
                            </button>
                        </form>
                        <!-- form End -->
                    </div>
                </div>
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>

    <!-- Start Services -->
    <section id="services" class="py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto mb-12 max-w-xl text-center">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >Our Services</span
          >
                <h2 class="mt-3 text-3xl font-medium text-default-950 md:text-4xl">
                    Comprehensive Plan
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 2xl:grid-cols-3">
                <div class="rounded-lg bg-default-100 text-center dark:bg-default-50">
                    <div class="p-6">
                        <div class="flex justify-center">
                            <i data-lucide="truck" class="size-12 text-default-950"></i>
                        </div>
                        <h3
                            class="mb-4 mt-6 text-xl font-medium text-default-950 md:text-2xl"
                        >
                            Fuel Delivery
                        </h3>
                        <p class="mb-4 md:text-base">
                            Efficiently delivers diverse fuels (gasoline, diesel, propane,
                            etc.) promptly to residential, commercial, or industrial sites.
                        </p>
                        <a
                            href="javascript:void(0);"
                            class="inline-flex items-center gap-2 text-lg font-medium text-default-950"
                        >Read more <i data-lucide="move-right" class="size-5"></i
                            ></a>
                    </div>
                </div>
                <!-- col End -->

                <div class="rounded-lg bg-default-100 text-center dark:bg-default-50">
                    <div class="p-6">
                        <div class="flex justify-center">
                            <i
                                data-lucide="database"
                                class="size-12 text-default-950"
                            ></i>
                        </div>
                        <h3
                            class="mb-4 mt-6 text-xl font-medium text-default-950 md:text-2xl"
                        >
                            Fuel Storage Solutions
                        </h3>
                        <p class="mb-4 md:text-base">
                            Supplying secure fuel storage solutions with tanks or
                            containers, ensuring adherence to safety standards and
                            regulations.
                        </p>
                        <a
                            href="javascript:void(0);"
                            class="inline-flex items-center gap-2 text-lg font-medium text-default-950"
                        >Read more <i data-lucide="move-right" class="size-5"></i
                            ></a>
                    </div>
                </div>
                <!-- col End -->

                <div class="rounded-lg bg-default-100 text-center dark:bg-default-50">
                    <div class="p-6">
                        <div class="flex justify-center">
                            <i
                                data-lucide="codesandbox"
                                class="size-12 text-default-950"
                            ></i>
                        </div>
                        <h3
                            class="mb-4 mt-6 text-xl font-medium text-default-950 md:text-2xl"
                        >
                            Equipment Maintenanceegies
                        </h3>
                        <p class="mb-4 md:text-base">
                            Providing maintenance for fuel-related equipment like pumps,
                            tanks, and generators to ensure safety compliance and
                            functionality.
                        </p>
                        <a
                            href="javascript:void(0);"
                            class="inline-flex items-center gap-2 text-lg font-medium text-default-950"
                        >Read more <i data-lucide="move-right" class="size-5"></i
                            ></a>
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- End grid -->
        </div>
        <!-- End container -->
    </section>
    <!-- End Services -->

    <section class="bg-default-100 py-10 dark:bg-default-50 lg:py-20">
        <div class="container">
            <div class="relative z-20">
                <div class="hidden xl:block">
                    <div
                        class="before:absolute before:-end-10 before:-top-10 before:-z-10 before:h-24 before:w-24 before:bg-[url('/public/images/landing/company/dot.svg')] after:absolute after:-bottom-10 after:-start-10 after:-z-10 after:h-24 after:w-24 after:bg-[url('/public/images/landing/company/dot.svg')]"
                    ></div>
                </div>

                <div class="grid grid-cols-1 gap-6 xl:grid-cols-2">
                    <div>
                        <img
                            src="/images/landing/company/img-2.jpg"
                            alt=""
                            class="rounded-lg"
                        />
                    </div>
                    <!-- col End -->

                    <div>
                        <div class="rounded-lg bg-white p-10 dark:bg-default-100">
                            <h2 class="text-3xl font-medium text-default-950">
                                Transforming Challenges into Profit
                            </h2>
                            <p class="mt-6 text-base text-default-800">
                                Intuition and strategy form the foundation of our research
                                methodology, which we apply to both traditional and digital
                                media.
                            </p>
                            <p class="mt-4 text-base text-default-800">
                                We firmly believe that the human element is vital in
                                initiating any successful project, as it is here that
                                meaningful emotional connections between the company and
                                individuals are cultivated.
                            </p>
                        </div>

                        <div class="p-9">
                            <div class="flex items-center gap-7">
                                <div class="text-center">
                                    <h3 class="text-5xl font-medium text-default-950">200+</h3>
                                    <p class="mt-1 text-base">Clients served</p>
                                </div>
                                <div class="text-center">
                                    <h3 class="text-5xl font-medium text-default-950">95%</h3>
                                    <p class="mt-1 text-base">Growth rate</p>
                                </div>
                            </div>
                            <!-- flex End -->
                        </div>
                    </div>
                    <!-- col End -->
                </div>
                <!-- grid End -->
            </div>
        </div>
        <!-- container End -->
    </section>

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
                        Commonly Asked Questions
                    </h2>
                </div>
            </div>
            <!-- flex End-->

            <div
                class="grid grid-cols-1 items-center gap-6 lg:grid-cols-2 lg:gap-12"
            >
                <div>
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
                                    How do you address my concepts?
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
                                    <p class="text-sm text-default-600">
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
                                    In which industries do you have expertise?
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
                                    <p class="text-sm text-default-600">
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
                                    How do you approach my ideas?
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
                                    <p class="text-sm text-default-600">
                                        provides a comprehensive range of digital services,
                                        including website design and development, digital
                                        marketing, search engine optimization
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- col End-->
                    </div>
                </div>
                <!-- col End-->

                <div class="relative mb-20 lg:mb-0">
                    <div class="relative">
                        <img
                            src="/images/landing/company/img-4.jpg"
                            class="mx-auto rounded-lg"
                            alt=""
                        />
                    </div>
                    <div class="absolute inset-x-0 -bottom-14 hidden sm:block">
                        <img
                            src="/images/landing/company/img-3.jpg"
                            class="h-full rounded-lg"
                            alt=""
                        />
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End-->
        </div>
        <!-- container End-->
    </section>
    <!-- End faq -->

    <!-- Start Testimonials -->
    <section id="testimonials">
        <div class="container">
            <div class="rounded-lg bg-default-100 dark:bg-default-50">
                <div
                    class="bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat p-10 dark:bg-[url('/public/images/other/bg-lines-2-dark.png')] md:p-20"
                >
                    <div class="mx-auto mb-12 max-w-2xl text-center">
              <span
                  class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
              >Our Testimonials</span
              >
                        <h2
                            class="mt-3 text-3xl font-medium text-default-950 md:text-4xl"
                        >
                            Explore the feedback from our clients.
                        </h2>
                    </div>
                    <div class="relative">
                        <!--Start Swiper -->
                        <div class="swiper testimonials relative">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="mx-auto max-w-4xl text-center">
                                        <div class="p-6">
                                            <i
                                                data-lucide="quote"
                                                class="mx-auto size-9 text-default-400"
                                            ></i>
                                            <p class="mb-6 mt-4 md:text-xl">
                                                "We've been utilizing Vault for the past five years.
                                                Vault is exceptional. It goes without saying that we
                                                are incredibly content with the outcomes. Training was
                                                not even necessary."
                                            </p>
                                            <img
                                                src="/images/avatars/img-1.jpg"
                                                class="mx-auto size-14 rounded-full"
                                                alt=""
                                            />
                                            <h3 class="mt-5 text-xl font-medium text-default-950">
                                                Enagol Ame
                                            </h3>
                                            <p class="text-base">Brazil</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- swiper-slide End -->

                                <div class="swiper-slide">
                                    <div class="mx-auto max-w-4xl text-center">
                                        <div class="p-6">
                                            <i
                                                data-lucide="quote"
                                                class="mx-auto size-9 text-default-400"
                                            ></i>
                                            <p class="mb-6 mt-4 md:text-xl">
                                                "Setting up was incredibly straightforward. I had no
                                                prior experience with hosting, but Vault has made
                                                everything appear easy."
                                            </p>
                                            <img
                                                src="/images/avatars/img-2.jpg"
                                                class="mx-auto size-14 rounded-full"
                                                alt=""
                                            />
                                            <h3 class="mt-5 text-xl font-medium text-default-950">
                                                Rashed ka.
                                            </h3>
                                            <p class="text-base">Italy</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- swiper-slide End -->

                                <div class="swiper-slide">
                                    <div class="mx-auto max-w-4xl text-center">
                                        <div class="p-6">
                                            <i
                                                data-lucide="quote"
                                                class="mx-auto size-9 text-default-400"
                                            ></i>
                                            <p class="mb-6 mt-4 md:text-xl">
                                                "Vault is the next game-changing application. I'm at a
                                                loss for words. I'll definitely inform my mom about
                                                this; she could benefit greatly from using Vault!"
                                            </p>
                                            <img
                                                src="/images/avatars/img-3.jpg"
                                                class="mx-auto size-14 rounded-full"
                                                alt=""
                                            />
                                            <h3 class="mt-5 text-xl font-medium text-default-950">
                                                Jackma Kalin
                                            </h3>
                                            <p class="text-base">USA</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- swiper-slide End -->
                            </div>
                        </div>
                        <!--End Swiper -->

                        <div
                            class="absolute start-0 top-1/2 z-10 -translate-x-1/2 -translate-y-1/2"
                        >
                            <div class="testimonials-button-prev">
                                <div class="relative">
                    <span
                        class="absolute -start-1.5 top-1/2 -z-10 size-8 -translate-y-1/2 rounded-full border-2 border-primary"
                    ></span>
                                    <i
                                        data-lucide="move-left"
                                        class="size-10 text-default-950"
                                    ></i>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute end-0 top-1/2 z-10 -translate-y-1/2 translate-x-1/2"
                        >
                            <div class="testimonials-button-next">
                                <div class="relative">
                    <span
                        class="absolute -end-1.5 top-1/2 -z-10 size-8 -translate-y-1/2 rounded-full border-2 border-primary"
                    ></span>
                                    <i
                                        data-lucide="move-right"
                                        class="size-10 text-default-950"
                                    ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col End -->
                </div>
            </div>
        </div>
        <!-- container End -->
    </section>
    <!-- Start Testimonials -->

    <!-- Start Blog -->
    <section id="blog" class="py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto mb-12 max-w-2xl text-center">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >Our Blog</span
          >
                <h2 class="mt-3 text-3xl font-medium text-default-950 md:text-4xl">
                    News and Knowledge
                </h2>
                <p class="mt-5 text-base">
                    Nulla aenean ipsum elit, adipiscing tristique nisi. Eget ultrices
                    urna arcu quis. Tristique potenti vitae in adipiscing. Eu augue cras
                    quis nec proin pharetra netus massa.
                </p>
            </div>

            <div class="relative">
                <!--Start Swiper -->
                <div class="swiper testimonials_swiper relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="mx-auto max-w-4xl text-center">
                                <div class="mb-5">
                                    <img
                                        src="/images/landing/company/img-5.jpg"
                                        class="rounded-lg"
                                        alt=""
                                    />
                                </div>
                                <a href="#" class="text-xl font-medium text-default-950"
                                >10 Easy Habits to Enhance Your Daily Progress by 1%</a
                                >
                            </div>
                        </div>
                        <!-- swiper-slide End -->

                        <div class="swiper-slide">
                            <div class="mx-auto max-w-4xl text-center">
                                <div class="mb-5">
                                    <img
                                        src="/images/landing/company/img-6.jpg"
                                        class="rounded-lg"
                                        alt=""
                                    />
                                </div>
                                <a href="#" class="mt-5 text-xl font-medium text-default-950"
                                >5 Mind-Blowing Applications of Artificial Intelligence</a
                                >
                            </div>
                        </div>
                        <!-- swiper-slide End -->

                        <div class="swiper-slide">
                            <div class="mx-auto max-w-4xl text-center">
                                <div class="mb-5">
                                    <img
                                        src="/images/landing/company/img-7.jpg"
                                        class="rounded-lg"
                                        alt=""
                                    />
                                </div>
                                <a href="#" class="mt-5 text-xl font-medium text-default-950"
                                >This Highly Anticipated Technology Could Finally Transform
                                    the World</a
                                >
                            </div>
                        </div>
                        <!-- swiper-slide End -->

                        <div class="swiper-slide">
                            <div class="mx-auto max-w-4xl text-center">
                                <div class="mb-5">
                                    <img
                                        src="/images/landing/company/img-8.jpg"
                                        class="rounded-lg"
                                        alt=""
                                    />
                                </div>
                                <a href="#" class="mt-5 text-xl font-medium text-default-950"
                                >Design Thinking: Crafting a Design System for an
                                    Established Product</a
                                >
                            </div>
                        </div>
                        <!-- swiper-slide End -->

                        <div class="swiper-slide">
                            <div class="mx-auto max-w-4xl text-center">
                                <div class="mb-5">
                                    <img
                                        src="/images/landing/company/img-9.jpg"
                                        class="rounded-lg"
                                        alt=""
                                    />
                                </div>
                                <a href="#" class="mt-5 text-xl font-medium text-default-950"
                                >If You Possess Self-Discipline, Begin Cultivating These 4
                                    Habits Now</a
                                >
                            </div>
                        </div>
                        <!-- swiper-slide End -->

                        <div class="swiper-slide">
                            <div class="mx-auto max-w-4xl text-center">
                                <div class="mb-5">
                                    <img
                                        src="/images/landing/company/img-10.jpg"
                                        class="rounded-lg"
                                        alt=""
                                    />
                                </div>
                                <a href="#" class="mt-5 text-xl font-medium text-default-950"
                                >This Highly Anticipated Technology Could Finally Transform
                                    the World</a
                                >
                            </div>
                        </div>
                        <!-- swiper-slide End -->
                    </div>
                </div>
                <!--End Swiper -->
            </div>
            <!-- col End -->
        </div>
        <!-- container End -->
    </section>
    <!-- Eng Blog -->
@endsection

@section('script-bottom')

@endsection

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
            (object)['id' => 'portfolio','name' => 'Portfolio'],
            (object)['id' => 'testimonial','name' => 'Testimonial'],
            (object)['id' => 'blog','name' => 'Blog'],
            (object)['id' => 'contact','name' => 'Contact'],
            ]
        ])

    <!-- Hero Section Start -->
    <section
        id="home"
        class="relative flex items-center justify-center overflow-hidden py-[164px]"
    >
        <div class="absolute inset-0">
            <img
                src="/images/landing/marketing-2/bg-2.png"
                class="h-full w-full dark:hidden"
                alt=""
            />
            <img
                src="/images/landing/marketing-2/bg-2-dark.jpg"
                class="hidden h-full w-full dark:block"
                alt=""
            />
        </div>

        <div class="container">
            <div class="relative">
                <div class="grid items-center gap-6 lg:grid-cols-2">
                    <div class="mx-auto max-w-md text-center lg:ms-0 lg:text-start">
              <span
                  class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
              >startups Marketing</span
              >
                        <h2
                            class="my-5 text-4xl font-medium text-default-950 md:text-5xl/tight"
                        >
                            Global Marketing Consulting Firm
                        </h2>
                        <p class="mb-10 text-base">
                            We are a worldwide marketing consultancy providing innovative
                            solutions to our clientele.
                        </p>
                        <a
                            href="#"
                            class="rounded-md bg-primary px-6 py-3 text-white transition-all duration-300 hover:bg-primary-700"
                        >Reach Out to Us</a
                        >
                    </div>
                    <!-- col End -->

                    <div>
                        <div class="relative">
                            <img
                                src="/images/landing/marketing-2/img-1.jpg"
                                class="mx-auto rounded-3xl"
                                alt=""
                            />

                            <div class="hidden xl:block">
                                <div class="absolute -start-52 top-10">
                                    <div class="inline-block">
                                        <div
                                            class="rounded-full border border-default-200 bg-white/80 shadow backdrop-blur-lg dark:bg-black/80"
                                        >
                                            <div class="max-w-sm px-4 py-4 text-center">
                                                <p class="text-base text-default-950">
                                                    Donec pede justo, fringilla vel, aliquet nec,
                                                    vulputate eget, arcu.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="absolute -end-40 bottom-20 top-auto">
                                    <div>
                                        <div
                                            class="inline-block rounded-full border border-default-200 bg-white/80 shadow backdrop-blur-lg dark:bg-black/80"
                                        >
                                            <div class="px-5 py-3">
                                                <h5 class="text-base font-medium">
                                                    Marketing Consulting
                                                </h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="my-2">
                                        <div
                                            class="inline-block rounded-full border border-default-200 bg-white/80 shadow backdrop-blur-lg dark:bg-black/80"
                                        >
                                            <div class="px-5 py-3">
                                                <h5 class="text-base font-medium">
                                                    Social Media Marketing
                                                </h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div
                                            class="inline-block rounded-full border border-default-200 bg-white/80 shadow backdrop-blur-lg dark:bg-black/80"
                                        >
                                            <div class="px-5 py-3">
                                                <h5 class="text-base font-medium">
                                                    Search Engine Optimization
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

    <!-- Start marq -->
    <section class="lg:-mt-[72px]">
        <div
            class="relative m-auto flex gap-28 overflow-hidden bg-default-100 dark:bg-default-50"
        >
            <div
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <h2 class="py-6 text-4xl text-default-950">UI-UX Experience</h2>
                <h2 class="py-6 text-4xl text-default-950">Web Development</h2>
                <h2 class="py-6 text-4xl text-default-950">Digital Marketing</h2>
                <h2 class="py-6 text-4xl text-default-950">Product Design</h2>
                <h2 class="py-6 text-4xl text-default-950">Mobile Solutions</h2>
            </div>
            <!-- marquee__group End-->

            <div
                aria-hidden="true"
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <h2 class="py-6 text-4xl text-default-950">UI-UX Experience</h2>
                <h2 class="py-6 text-4xl text-default-950">Web Development</h2>
                <h2 class="py-6 text-4xl text-default-950">Digital Marketing</h2>
                <h2 class="py-6 text-4xl text-default-950">Product Design</h2>
                <h2 class="py-6 text-4xl text-default-950">Mobile Solutions</h2>
            </div>
            <!-- marquee__group End-->
        </div>
        <!-- flex End -->
    </section>
    <!-- End marq Section -->

    <!-- Start About -->
    <section id="about" class="py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto mb-14 max-w-xl text-center">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >Our About</span
          >
                <h2 class="mt-4 text-4xl/tight font-medium text-default-950">
                    Top-Tier Online Marketing Firm Located in New York
                </h2>
                <p class="mt-5 text-base">
                    Marketing encompasses the activities, institutions, and procedures
                    aimed at generating, conveying, delivering, and exchanging valuable
                    offerings for customers, partners, and society as a whole.
                </p>
            </div>

            <div class="rounded-xl border border-default-200">
                <div
                    class="grid grid-cols-1 items-center divide-y divide-default-200 lg:grid-cols-3 lg:divide-x lg:divide-y-0"
                >
                    <div class="p-8 text-center">
                        <h5 class="text-xl font-medium text-default-950">
                            "Extremely impressed with the service and the outcomes!"
                        </h5>
                        <p class="mt-4 text-lg text-default-950">
                            Rated 4.5 on Trustpilot
                        </p>

                        <div class="mt-5 flex items-center justify-center gap-1">
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                        </div>
                        <!-- flex End -->
                    </div>
                    <!-- col End -->

                    <div class="p-8 text-center">
                        <h5 class="text-xl font-medium text-default-950">
                            "Outstanding service for precision-targeted lead generation."
                        </h5>
                        <p class="mt-4 text-lg text-default-950">
                            Rated 4.5 on Trustpilot
                        </p>

                        <div class="mt-5 flex items-center justify-center gap-1">
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                        </div>
                        <!-- flex End -->
                    </div>
                    <!-- col End -->

                    <div class="p-8 text-center">
                        <h5 class="text-xl font-medium text-default-950">
                            "I've thoroughly enjoyed my collaboration with Resonance."
                        </h5>
                        <p class="mt-4 text-lg text-default-950">
                            Rated 4.5 on Trustpilot
                        </p>

                        <div class="mt-5 flex items-center justify-center gap-1">
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                            <i
                                data-lucide="star"
                                class="size-6 fill-yellow-300 text-yellow-300"
                            ></i>
                        </div>
                        <!-- flex End -->
                    </div>
                    <!-- col End -->
                </div>
                <!-- grid End -->
            </div>

            <div class="mt-10 flex justify-center">
                <a
                    href="#"
                    class="inline-flex items-center justify-center gap-2 rounded-md border border-default-200 px-8 py-2 text-default-950 backdrop-blur-3xl transition-all hover:border-primary hover:bg-primary hover:text-white"
                >Read More
                    <i data-lucide="arrow-right" class="size-6"></i>
                </a>
            </div>
            <!-- flex End -->
        </div>
        <!-- Container End -->
    </section>
    <!-- Start About -->

    <!-- Start Services -->
    <section id="services" class="py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto mb-14 max-w-xl text-center">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >Our Services</span
          >
                <h2 class="mt-4 text-4xl/tight font-medium text-default-950">
                    Marketing Solutions
                </h2>
                <p class="mt-5 text-base">
                    The marketing mix symbolizes the fundamental instruments that
                    marketers can employ to introduce their products or services to the
                    market.
                </p>
            </div>

            <div class="border border-default-200">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                    <div
                        class="border-b border-default-200 p-6 md:border-e xl:border-0"
                    >
                        <div class="mx-auto">
                            <i
                                data-lucide="file-text"
                                class="inline-block size-12 text-default-950"
                            ></i>
                        </div>
                        <h2 class="mt-5 text-2xl font-medium text-default-950">
                            Media Relations
                        </h2>
                        <p class="mt-5 text-base">
                            Price need not be exclusively monetary; it can also encompass
                            what is traded for the product or services, including energy or
                            any sacrifices consumers make to acquire them.
                        </p>

                        <ul
                            role="list"
                            class="text-default-white -ms-3 mb-3 mt-4 text-sm"
                        >
                            <li class="flex items-center gap-2 py-1">
                                <!-- svg icon -->
                                <i
                                    data-lucide="dot"
                                    class="inline-block size-8 stroke-primary"
                                ></i>
                                <span class="text-base text-default-950"
                                >Seasonal Campaigns</span
                                >
                            </li>
                            <li class="flex items-center gap-2 py-1">
                                <!-- svg icon -->
                                <i
                                    data-lucide="dot"
                                    class="inline-block size-8 stroke-primary"
                                ></i>
                                <span class="text-base text-default-950"
                                >Digital Marketing</span
                                >
                            </li>
                            <li class="flex items-center gap-2 py-1">
                                <!-- svg icon -->
                                <i
                                    data-lucide="dot"
                                    class="inline-block size-8 stroke-primary"
                                ></i>
                                <span class="text-base text-default-950">Sponsorships</span>
                            </li>
                        </ul>
                        <!-- list End -->

                        <a
                            href="javascript:void(0);"
                            class="group text-lg font-medium text-default-950"
                        >Read More
                            <i
                                data-lucide="move-right"
                                class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                            ></i>
                        </a>
                    </div>
                    <!-- col End -->

                    <div
                        class="border-b border-default-200 p-6 xl:border-x xl:border-b-0"
                    >
                        <div class="mx-auto">
                            <i
                                data-lucide="boxes"
                                class="inline-block size-12 text-default-950"
                            ></i>
                        </div>
                        <h2 class="mt-5 text-2xl font-medium text-default-950">
                            Marketing Consultancy
                        </h2>
                        <p class="mt-5 text-base">
                            The product facets of marketing involve the specifications of
                            the relevant products, goods, or services, and their alignment
                            with the needs and desires of the end-users.
                        </p>

                        <ul
                            role="list"
                            class="text-default-white -ms-3 mb-3 mt-4 text-sm"
                        >
                            <li class="flex items-center gap-2 py-1">
                                <!-- svg icon -->
                                <i
                                    data-lucide="dot"
                                    class="inline-block size-8 stroke-primary"
                                ></i>
                                <span class="text-base text-default-950"
                                >Search Engine Optimization</span
                                >
                            </li>
                            <li class="flex items-center gap-2 py-1">
                                <!-- svg icon -->
                                <i
                                    data-lucide="dot"
                                    class="inline-block size-8 stroke-primary"
                                ></i>
                                <span class="text-base text-default-950"
                                >Strategic Marketing</span
                                >
                            </li>
                            <li class="flex items-center gap-2 py-1">
                                <!-- svg icon -->
                                <i
                                    data-lucide="dot"
                                    class="inline-block size-8 stroke-primary"
                                ></i>
                                <span class="text-base text-default-950">Collaborations</span>
                            </li>
                        </ul>
                        <!-- list End -->
                        <a
                            href="javascript:void(0);"
                            class="group text-lg font-medium text-default-950"
                        >Read More
                            <i
                                data-lucide="move-right"
                                class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                            ></i>
                        </a>
                    </div>
                    <!-- col End -->

                    <div class="p-6">
                        <div class="mx-auto">
                            <i
                                data-lucide="rocket"
                                class="inline-block size-12 text-default-950"
                            ></i>
                        </div>
                        <h2 class="mt-5 text-2xl font-medium text-default-950">
                            Online Advertising
                        </h2>
                        <p class="mt-5 text-base">
                            This pertains to how the product reaches the customer, including
                            intermediaries such as wholesalers and retailers who facilitate
                            convenient access to products or services.
                        </p>

                        <ul
                            role="list"
                            class="text-default-white -ms-3 mb-3 mt-4 text-sm"
                        >
                            <li class="flex items-center gap-2 py-1">
                                <!-- svg icon -->
                                <i
                                    data-lucide="dot"
                                    class="inline-block size-8 stroke-primary"
                                ></i>
                                <span class="text-base text-default-950"
                                >Experiential Marketing</span
                                >
                            </li>
                            <li class="flex items-center gap-2 py-1">
                                <!-- svg icon -->
                                <i
                                    data-lucide="dot"
                                    class="inline-block size-8 stroke-primary"
                                ></i>
                                <span class="text-base text-default-950"
                                >Event Marketing</span
                                >
                            </li>
                            <li class="flex items-center gap-2 py-1">
                                <!-- svg icon -->
                                <i
                                    data-lucide="dot"
                                    class="inline-block size-8 stroke-primary"
                                ></i>
                                <span class="text-base text-default-950"
                                >Seasonal Campaigns</span
                                >
                            </li>
                        </ul>
                        <!-- list End -->
                        <a
                            href="javascript:void(0);"
                            class="group text-lg font-medium text-default-950"
                        >Read More
                            <i
                                data-lucide="move-right"
                                class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                            ></i>
                        </a>
                    </div>
                    <!-- col End -->
                </div>
                <!-- grid End -->
            </div>
        </div>
        <!-- Container End -->
    </section>
    <!-- End Services -->

    <!-- Start Portfolio -->
    <section id="portfolio" class="py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto mb-14 max-w-3xl text-center">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >Our Portfolio</span
          >
                <h2 class="mt-4 text-4xl/tight font-medium text-default-950">
                    Case Studies
                </h2>
                <p class="mt-5 text-lg">
                    We assist brands and enterprises in distinguishing themselves in the
                    evolving digital terrain.
                </p>
            </div>

            <div class="relative">
                <!--Start Swiper -->
                <div class="swiper testimonials_swiper relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="overflow-hidden">
                                <div class="group relative overflow-hidden">
                                    <div class="overflow-hidden rounded-xl">
                                        <img
                                            src="/images/landing/marketing-2/img-2.jpg"
                                            class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1]"
                                            alt=""
                                        />
                                    </div>
                                    <div class="mt-6 text-center">
                                        <h3
                                            class="text-xl font-medium text-default-950 transition-all duration-700 group-hover:text-primary"
                                        >
                                            How Marketing Wire's Support Led to a 70% Increase in
                                            Data Accuracy
                                        </h3>
                                        <p class="mt-4 text-base text-default-900">
                                            70% Growth Achieved withs
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper-slide End -->

                        <div class="swiper-slide">
                            <div class="overflow-hidden">
                                <div class="group relative overflow-hidden">
                                    <div class="overflow-hidden rounded-xl">
                                        <img
                                            src="/images/landing/marketing-2/img-3.jpg"
                                            class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1]"
                                            alt=""
                                        />
                                    </div>
                                    <div class="mt-6 text-center">
                                        <h3
                                            class="text-xl font-medium text-default-950 transition-all duration-700 group-hover:text-primary"
                                        >
                                            How Surface Mobility Achieved a Increase in Sales in the
                                            Six Months
                                        </h3>
                                        <p class="mt-4 text-base text-default-900">
                                            Sales Tripled with ResonanceF
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper-slide End -->

                        <div class="swiper-slide">
                            <div class="overflow-hidden">
                                <div class="group relative overflow-hidden">
                                    <div class="overflow-hidden rounded-xl">
                                        <img
                                            src="/images/landing/marketing-2/img-4.jpg"
                                            class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1]"
                                            alt=""
                                        />
                                    </div>
                                    <div class="mt-6 text-center">
                                        <h3
                                            class="text-xl font-medium text-default-950 transition-all duration-700 group-hover:text-primary"
                                        >
                                            How Gen Machine Utilizes Automation to Expand Their
                                            Subscriber Base
                                        </h3>
                                        <p class="mt-4 text-base text-default-900">
                                            Zero Negative Reviews with Resonance
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper-slide End -->

                        <div class="swiper-slide">
                            <div class="overflow-hidden">
                                <div class="group relative overflow-hidden">
                                    <div class="overflow-hidden rounded-xl">
                                        <img
                                            src="/images/landing/marketing-2/img-5.jpg"
                                            class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1]"
                                            alt=""
                                        />
                                    </div>
                                    <div class="mt-6 text-center">
                                        <h3
                                            class="text-xl font-medium text-default-950 transition-all duration-700 group-hover:text-primary"
                                        >
                                            How Surface Mobility Achieved a Twofold Increase in
                                            Sales in the Six Months
                                        </h3>
                                        <p class="mt-4 text-base text-default-900">
                                            Sales Doubled with Resonance
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper-slide End -->

                        <div class="swiper-slide">
                            <div class="overflow-hidden">
                                <div class="group relative overflow-hidden">
                                    <div class="overflow-hidden rounded-xl">
                                        <img
                                            src="/images/landing/marketing-2/img-6.jpg"
                                            class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1]"
                                            alt=""
                                        />
                                    </div>
                                    <div class="mt-6 text-center">
                                        <h3
                                            class="text-xl font-medium text-default-950 transition-all duration-700 group-hover:text-primary"
                                        >
                                            How Marketing Wire's Support Led to an 80% Improvement
                                            in Data Accuracy
                                        </h3>
                                        <p class="mt-4 text-base text-default-900">
                                            80% Growth Achieved with Resonances
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper-slide End -->

                        <div class="swiper-slide">
                            <div class="overflow-hidden">
                                <div class="group relative overflow-hidden">
                                    <div class="overflow-hidden rounded-xl">
                                        <img
                                            src="/images/landing/marketing-2/img-7.jpg"
                                            class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1]"
                                            alt=""
                                        />
                                    </div>
                                    <div class="mt-6 text-center">
                                        <h3
                                            class="text-xl font-medium text-default-950 transition-all duration-700 group-hover:text-primary"
                                        >
                                            How Gen Machine Harnesses Automation to Expand Their
                                            Subscriber Base
                                        </h3>
                                        <p class="mt-4 text-base text-default-900">
                                            Zero Adverse Reviews with Resonance
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper-slide End -->
                    </div>
                </div>
                <!--End Swiper -->
            </div>
            <!-- col End -->

            <div class="mt-10 flex justify-center">
                <a
                    href="#"
                    class="inline-flex items-center justify-center gap-2 rounded-md border border-default-200 px-8 py-2 text-default-950 backdrop-blur-3xl transition-all duration-700 hover:border-primary hover:bg-primary hover:text-white"
                >Read All Case Studies
                    <i data-lucide="arrow-right" class="size-6"></i>
                </a>
            </div>
            <!-- flex End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End Portfolio -->

    <!-- Start Steps Section -->
    <section class="relative h-full py-16 lg:py-32">
        <div class="container">
            <div
                class="absolute inset-0 bg-[url('/public/images/landing/marketing-2/img-8.jpg')] bg-cover bg-center bg-repeat"
            >
                <div class="absolute inset-0 h-full w-full bg-black/50"></div>
            </div>

            <div class="relative">
                <div class="grid items-center gap-6 sm:grid-cols-3">
                    <div class="sm:col-span-2">
                        <div class="rounded-md p-6">
                            <h2 class="text-center text-4xl font-medium text-white">
                                Achieving Success in Three Simple Investment Steps
                            </h2>

                            <div class="mt-10 grid grid-cols-1 gap-6">
                                <div
                                    class="rounded-md bg-white/60 p-6 backdrop-blur-xl dark:bg-black/60"
                                >
                                    <div
                                        class="flex flex-wrap items-center gap-6 md:flex-nowrap"
                                    >
                                        <div>
                                            <i
                                                data-lucide="map-pin"
                                                class="size-12 stroke-primary"
                                            ></i>
                                        </div>
                                        <div>
                                            <h2 class="text-2xl font-medium text-default-950">
                                                Crafting Your Path Forward
                                            </h2>
                                            <p class="mt-3 text-base text-default-950">
                                                Businesses purchase products in substantial quantities
                                                for distribution to consumers.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- flex End -->
                                </div>
                                <!-- col End -->

                                <div
                                    class="rounded-md bg-white/60 p-6 backdrop-blur-xl dark:bg-black/60"
                                >
                                    <div
                                        class="flex flex-wrap items-center gap-6 md:flex-nowrap"
                                    >
                                        <div>
                                            <i
                                                data-lucide="send"
                                                class="size-12 stroke-primary"
                                            ></i>
                                        </div>
                                        <div>
                                            <h2 class="text-2xl font-medium text-default-950">
                                                Executing Your Strategy
                                            </h2>
                                            <p class="mt-3 text-base text-default-950">
                                                Consumers acquire products in smaller volumes suited
                                                for personal use.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- flex End -->
                                </div>
                                <!-- col End -->

                                <div
                                    class="rounded-md bg-white/60 p-6 backdrop-blur-xl dark:bg-black/60"
                                >
                                    <div
                                        class="flex flex-wrap items-center gap-6 md:flex-nowrap"
                                    >
                                        <div>
                                            <i
                                                data-lucide="network"
                                                class="size-12 stroke-primary"
                                            ></i>
                                        </div>
                                        <div>
                                            <h2 class="text-2xl font-medium text-default-950">
                                                Enhancing Through Empowerment
                                            </h2>
                                            <p class="mt-3 text-base text-default-950">
                                                The market for businesses to target is relatively
                                                smaller compared to direct consumers.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- flex End -->
                                </div>
                                <!-- col End -->
                            </div>
                            <!-- Grid End -->
                        </div>
                    </div>
                    <!-- col-span-2 End -->

                    <div class="relative h-full">
                        <div class="flex h-full items-center justify-center">
                            <button
                                class="relative flex size-20 items-center justify-center gap-2.5 rounded-full bg-primary text-base font-medium text-white ring-4 ring-primary/25 transition-all duration-300 hover:bg-primary"
                                data-hs-overlay="#watchvideomodal"
                            >
                                <i data-lucide="play" class="size-7 fill-current"></i>
                            </button>
                        </div>
                    </div>
                    <!-- col end -->
                </div>
                <!-- Grid End -->
            </div>
        </div>
        <!-- Container End -->
    </section>
    <!-- End Steps Section -->

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
                        Client Success Stories
                    </h2>
                </div>
            </div>
            <!-- flex End -->

            <div class="grid grid-cols-1 items-center lg:grid-cols-2">
                <div class="me-0 lg:mx-auto">
                    <div class="relative z-10">
                        <div
                            class="absolute inset-y-0 -start-20 -z-10 hidden h-full w-full rounded-full border-2 border-primary/10 bg-primary/5 lg:block"
                        ></div>
                        <img
                            src="/images/landing/marketing-2/img-9.png"
                            class="mx-auto rounded-full"
                            alt=""
                        />
                    </div>
                </div>
                <!-- col End -->

                <div class="relative">
                    <!--Start Swiper -->
                    <div class="swiper testimonials relative rounded-md">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="pb-10 sm:p-10">
                                    <div class="mt-5 flex items-center gap-6">
                                        <div>
                                            <img
                                                src="/images/avatars/img-1.jpg"
                                                class="h-14 rounded-full"
                                                alt=""
                                            />
                                        </div>
                                        <div>
                                            <h3 class="text-2xl font-medium text-default-950">
                                                Adam Peterson
                                            </h3>
                                            <p class="mt-2 text-base">Marketing Consultant</p>
                                        </div>
                                    </div>
                                    <!-- flex End -->
                                    <p class="mt-5 text-lg">
                                        "This template is exquisitely designed and offers
                                        fantastic new features. It receives regular updates,
                                        ensuring top-notch quality. The support team is
                                        unparalleled, providing prompt, courteous, premium, and
                                        exceptionally helpful assistance!"
                                    </p>
                                    <div class="mt-5 flex items-center gap-2">
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
                                    <!-- flex End -->
                                </div>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <div class="pb-10 sm:p-10">
                                    <div class="mt-5 flex items-center gap-6">
                                        <div>
                                            <img
                                                src="/images/avatars/img-2.jpg"
                                                class="h-14 rounded-full"
                                                alt=""
                                            />
                                        </div>
                                        <div>
                                            <h3 class="text-2xl font-medium text-default-950">
                                                Jordan Harvey
                                            </h3>
                                            <p class="mt-2 text-base">SEO/SMO Expert</p>
                                        </div>
                                    </div>
                                    <!-- flex End -->
                                    <p class="mt-5 text-lg">
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

                    <div class="absolute -bottom-8 z-10 sm:start-10">
                        <div class="relative flex items-center justify-end gap-5 pe-10">
                            <div class="testimonials-button-prev">
                                <div
                                    class="flex size-10 items-center justify-center rounded-lg border border-default-300 bg-default-50/90 hover:bg-default-50"
                                >
                                    <i
                                        data-lucide="move-left"
                                        class="size-6 stroke-default-950"
                                    ></i>
                                </div>
                            </div>
                            <div class="testimonials-button-next">
                                <div
                                    class="flex size-10 items-center justify-center rounded-lg border border-default-300 bg-default-50/90 hover:bg-default-50"
                                >
                                    <i
                                        data-lucide="move-right"
                                        class="size-6 stroke-default-950"
                                    ></i>
                                </div>
                            </div>
                        </div>
                        <!-- flex end -->
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End Testimonials -->

    <!--start Call to Action Section -->
    <section class="relative h-full py-56">
        <div class="container">
            <div
                class="absolute inset-0 bg-[url('/public/images/landing/marketing-2/img-10.jpg')] bg-cover bg-no-repeat"
            >
                <div class="absolute inset-0 h-full w-full bg-black/60"></div>
            </div>

            <div class="relative">
                <div class="grid gap-6 lg:grid-cols-2">
                    <div>
                        <h2 class="mb-4 text-4xl font-medium text-white">
                            Marketing Boost for Your Business
                        </h2>
                        <p class="mb-10 text-lg text-zinc-300">
                            The marketing audit is typically carried out by a third party,
                            not an internal member of the organization.
                        </p>
                        <a
                            href="#"
                            class="rounded-md bg-primary px-6 py-3 text-sm text-white transition-all hover:bg-primary-700"
                        >Get a Consultation</a
                        >

                        <div class="mt-10 grid gap-5 md:grid-cols-2">
                            <div class="flex items-center gap-4">
                                <i
                                    data-lucide="check-circle-2"
                                    class="size-6 text-primary"
                                ></i>
                                <p class="text-base text-zinc-300">Business-to-Business</p>
                            </div>
                            <!-- flex End -->

                            <div class="flex items-center gap-4">
                                <i
                                    data-lucide="check-circle-2"
                                    class="size-6 text-primary"
                                ></i>
                                <p class="text-base text-zinc-300">Business-to-Customer</p>
                            </div>
                            <!-- flex End -->

                            <div class="flex items-center gap-4">
                                <i
                                    data-lucide="check-circle-2"
                                    class="size-6 text-primary"
                                ></i>
                                <p class="text-base text-zinc-300">Nonprofit Organization</p>
                            </div>
                            <!-- flex End -->

                            <div class="flex items-center gap-4">
                                <i
                                    data-lucide="check-circle-2"
                                    class="size-6 text-primary"
                                ></i>
                                <p class="text-base text-zinc-300">Ecommerce</p>
                            </div>
                            <!-- flex End -->
                        </div>
                        <!-- grid End -->
                    </div>
                </div>
                <!-- grid End -->
            </div>
        </div>
        <!-- container End -->
    </section>
    <!--End Call to Action Section -->

    <!-- Start Blog -->
    <section id="blog" class="py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto mb-14 max-w-3xl text-center">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >Our Bolg</span
          >
                <h2 class="mt-4 text-4xl/tight font-medium text-default-950">
                    Explore Our Blog
                </h2>
                <p class="mt-5 text-lg">
                    Discover top-notch marketing resources and stay updated with the
                    latest news about our company.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                <div class="overflow-hidden rounded-lg border border-default-200 p-6">
                    <div class="group relative overflow-hidden">
                        <div class="overflow-hidden rounded-md">
                            <img
                                src="/images/landing/marketing-2/img-11.jpg"
                                class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1]"
                                alt=""
                            />
                        </div>
                        <div class="mt-6 flex items-center gap-5">
                            <div class="group flex items-center gap-3">
                                <i
                                    data-lucide="calendar-days"
                                    class="size-5 text-default-300 transition-all duration-700 group-hover:text-primary"
                                ></i>
                                <p class="text-base text-default-950">February 13, 2022</p>
                            </div>
                            <div class="group flex items-center gap-3">
                                <i
                                    data-lucide="message-square"
                                    class="size-5 text-default-300 transition-all duration-700 group-hover:text-primary"
                                ></i>
                                <p class="text-base text-default-950">Articles</p>
                            </div>
                        </div>
                        <!-- flex End -->
                        <h2
                            class="mt-4 text-xl font-medium text-default-950 transition-all duration-700 group-hover:underline"
                        >
                            Steps in Content Marketing to Accelerate Business Growth
                        </h2>
                        <p class="mt-4 text-base">
                            The macro-environment, beyond the control of a firm, encompasses
                            a multitude of external factors that operate on a broad scale.
                        </p>
                    </div>
                </div>
                <!-- col End -->

                <div class="overflow-hidden rounded-lg border border-default-200 p-6">
                    <div class="group relative overflow-hidden">
                        <div class="overflow-hidden rounded-md">
                            <img
                                src="/images/landing/marketing-2/img-12.jpg"
                                class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1]"
                                alt=""
                            />
                        </div>
                        <div class="mt-6 flex items-center gap-5">
                            <div class="group flex items-center gap-3">
                                <i
                                    data-lucide="calendar-days"
                                    class="size-5 text-default-300 transition-all duration-700 group-hover:text-primary"
                                ></i>
                                <p class="text-base text-default-950">February 11, 2023</p>
                            </div>
                            <div class="group flex items-center gap-3">
                                <i
                                    data-lucide="message-square"
                                    class="size-5 text-default-300 transition-all duration-700 group-hover:text-primary"
                                ></i>
                                <p class="text-base text-default-950">Tutorials</p>
                            </div>
                        </div>
                        <!-- flex End -->
                        <h2
                            class="mt-4 text-xl font-medium text-default-950 transition-all duration-700 group-hover:underline"
                        >
                            Effective Content Marketing Strategies for Business Expansion
                        </h2>
                        <p class="mt-4 text-base">
                            The micro-environment, where a firm has more control, usually
                            encompasses employees, suppliers, and the media.
                        </p>
                    </div>
                </div>
                <!-- col End -->

                <div class="overflow-hidden rounded-lg border border-default-200 p-6">
                    <div class="group relative overflow-hidden">
                        <div class="overflow-hidden rounded-md">
                            <img
                                src="/images/landing/marketing-2/img-5.jpg"
                                class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1]"
                                alt=""
                            />
                        </div>
                        <div class="mt-6 flex items-center gap-5">
                            <div class="group flex items-center gap-3">
                                <i
                                    data-lucide="calendar-days"
                                    class="size-5 text-default-300 transition-all duration-700 group-hover:text-primary"
                                ></i>
                                <p class="text-base text-default-950">February 28, 2022</p>
                            </div>
                            <div class="group flex items-center gap-3">
                                <i
                                    data-lucide="message-square"
                                    class="size-5 text-default-300 transition-all duration-700 group-hover:text-primary"
                                ></i>
                                <p class="text-base text-default-950">Articles</p>
                            </div>
                        </div>
                        <!-- flex End -->
                        <h2
                            class="mt-4 text-xl font-medium text-default-950 transition-all duration-700 group-hover:underline"
                        >
                            Mastering Content Propelling Business Towards Success
                        </h2>
                        <p class="mt-4 text-base">
                            The macro-environment, beyond the control of a firm, encompasses
                            a multitude of external factors that operate on a broad scale.
                        </p>
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- End Blog -->

    <section>
        <div class="container">
            <div
                class="rounded-lg bg-[url('/public/images/landing/marketing-2/bg-2.png')] bg-cover bg-no-repeat"
            >
                <div
                    class="bg-[url('/public/images/landing/marketing-2/bg-1.png')] bg-cover bg-no-repeat px-6 py-20"
                >
                    <div class="mx-auto max-w-2xl text-center">
              <span
                  class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
              >Domain names</span
              >
                        <h2
                            class="mt-5 text-3xl font-medium text-default-950 md:text-4xl"
                        >
                            Stay updated with our weekly newsletter.
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
                                    <i
                                        data-lucide="search"
                                        class="size-6 text-default-950"
                                    ></i>
                                </button>
                                <small class="text-default-700"
                                >By submitting the form, you acknowledge and agree to our
                                    Terms & Conditions and Privacy Policy.</small
                                >
                            </div>
                        </form>
                        <!-- form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End container -->
    </section>

    <!-- contact start -->
    <section id="contact" class="py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto mb-14 max-w-3xl text-center">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >Our Contact Us</span
          >
                <h2 class="mt-4 text-4xl/tight font-medium text-default-950">
                    Let's Begin a Dialogue
                </h2>
                <p class="mt-5 text-lg">
                    We're eager to engage with like-minded individuals. Simply greet us,
                    and we'll embark on a productive collaboration. Launch your own
                    journey to success.
                </p>
            </div>

            <div class="mx-auto mt-16 max-w-3xl">
                <div>
                    <div class="rounded-md border border-default-200 bg-default-50 p-8">
                        <form class="relative">
                            <h2 class="mb-5 text-2xl font-medium text-default-950">
                                We welcome your feedback
                            </h2>
                            <div class="grid gap-6 sm:grid-cols-2">
                                <div>
                                    <label
                                        for="formFirstName"
                                        class="mb-2 block text-base font-medium text-default-500"
                                    >Name</label
                                    >
                                    <input
                                        type="text"
                                        class="block w-full rounded-md border-default-200 bg-default-50 px-3 py-2 text-sm text-default-950 focus:border-default-300 focus:ring-transparent"
                                        id="formFirstName"
                                        placeholder="Your first name..."
                                        required=""
                                    />
                                </div>
                                <!-- col End -->

                                <div>
                                    <label
                                        for="formEmail"
                                        class="mb-2 block text-base font-medium text-default-500"
                                    >Email</label
                                    >
                                    <input
                                        type="email"
                                        class="block w-full rounded-md border-default-200 bg-default-50 px-3 py-2 text-sm text-default-950 focus:border-default-300 focus:ring-transparent"
                                        id="formEmail"
                                        placeholder="Your email..."
                                        required=""
                                    />
                                </div>
                                <!-- col End -->

                                <div class="sm:col-span-2">
                                    <div class="mb-3">
                                        <label
                                            for="formSubject"
                                            class="mb-2 block text-base font-medium text-default-500"
                                        >Subject</label
                                        >
                                        <input
                                            type="text"
                                            class="block w-full rounded-md border-default-200 bg-default-50 px-3 py-2 text-sm text-default-950 focus:border-default-300 focus:ring-transparent"
                                            id="formSubject"
                                            placeholder="Type subject..."
                                            required=""
                                        />
                                    </div>
                                </div>
                                <!-- col-span-2 End -->

                                <div class="sm:col-span-2">
                                    <div class="mb-4">
                                        <label
                                            for="formMessages"
                                            class="mb-2 block text-base font-medium text-default-500"
                                        >Messages</label
                                        >
                                        <textarea
                                            class="block w-full rounded-md border-default-200 bg-default-50 px-3 py-2 text-sm text-default-950 focus:border-default-300 focus:ring-transparent"
                                            id="formMessages"
                                            rows="4"
                                            placeholder="Type messages..."
                                            required=""
                                        ></textarea>
                                    </div>
                                </div>
                                <!-- col-span-2 End -->
                            </div>
                            <!-- grid End -->

                            <button
                                type="submit"
                                class="flex items-center rounded-md bg-primary/90 px-6 py-2 text-white transition-all hover:bg-primary"
                            >
                                Send Messages
                                <i data-lucide="send" class="ms-2 size-5 rotate-45"></i>
                            </button>
                        </form>
                        <!-- From End -->
                    </div>
                </div>
            </div>
            <!-- Grid End -->
        </div>
        <!-- Container End -->
    </section>
    <!-- contact end -->
@endsection

@section('script-bottom')

@endsection

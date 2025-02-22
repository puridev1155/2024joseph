@extends('layouts.landing', ['title' => 'Enoch and Mary Missions Organization'])

@section('css')

@endsection

@section('content')
    @include('layouts.shared.navbar', [
        'menuPosition' => 'sticky',
        'navItems' => [
            (object)['id' => 'home','name' => 'Home'],
            (object)['id' => 'solutions','name' => 'Solutions'],
            (object)['id' => 'projects','name' => 'Projects'],
            (object)['id' => 'features','name' => 'Features'],
            (object)['id' => 'faq','name' => 'Faq'],
            ]
        ])

    <!-- Hero Section Start -->
    <section id="home" class="relative overflow-hidden">
        <div class="px-4 md:px-10">
            <div
                class="overflow-hidden rounded-2xl bg-cover bg-center bg-no-repeat"
                style="background-image: url('/images/landing/marketing-3/img-1.jpg');">
                <div class="rounded-2xl bg-black/60">
                    <div class="container">
                        <div class="relative p-6">
                            <div class="flex h-full items-center justify-center py-36">
                                <div class="relative mx-auto max-w-3xl text-center">
                    <span
                        class="rounded-md bg-white/10 px-3 py-1 text-sm font-medium uppercase tracking-wider text-white"
                    >AI knowledge hub</span>
                                    <h1
                                        class="mt-10 text-3xl font-medium text-white md:text-5xl/snug"
                                    >
                                        Build Quickly, Earn More
                                    </h1>
                                    <p class="mx-auto mt-5 w-3/4 text-base text-white/80">
                                        Leverage customer data to create exceptional and robust
                                        product experiences that drive conversions.
                                    </p>

                                    <div class="mt-10 flex justify-center">
                                        <a
                                            href="#"
                                            class="inline-flex items-center justify-center gap-2 rounded-md bg-primary px-8 py-2 text-base text-white transition-all duration-300 hover:bg-primary-700"
                                        >Read More
                                            <i data-lucide="move-right" class="size-6"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- flex End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>
    <!-- Hero end  -->

    <section id="solutions" class="py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto mb-14 max-w-xl text-center">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >Business Solutions</span
          >
                <h2 class="mt-4 text-4xl/tight font-medium text-default-950">
                    Our Offered Services
                </h2>
                <p class="mt-5 text-base">
                    Adaptable layouts and immediate outcomes! Select a pre-designed
                    header or craft a personalized layout that precisely aligns with
                    your requirements.
                </p>
            </div>

            <!-- Start marq -->
            <div class="relative m-auto flex gap-8 overflow-hidden">
                <div
                    class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-8"
                >
                    <div class="w-60 py-5">
                        <div
                            class="rounded-xl bg-white p-6 text-center shadow-lg dark:bg-default-50"
                        >
                            <div class="flex justify-center">
                                <i data-lucide="newspaper" class="size-10 text-primary"></i>
                            </div>
                            <h4 class="mt-5 text-lg font-medium text-default-950">
                                Search Engine Optimization
                            </h4>
                        </div>
                    </div>

                    <div class="w-60">
                        <div
                            class="rounded-xl bg-white p-6 text-center shadow-lg dark:bg-default-50"
                        >
                            <div class="flex justify-center">
                                <i
                                    data-lucide="folder-kanban"
                                    class="size-10 text-primary"
                                ></i>
                            </div>
                            <h4 class="mt-5 text-lg font-medium text-default-950">
                                Social Media Marketing
                            </h4>
                        </div>
                    </div>

                    <div class="w-60">
                        <div
                            class="rounded-xl bg-white p-6 text-center shadow-lg dark:bg-default-50"
                        >
                            <div class="flex justify-center">
                                <i
                                    data-lucide="clipboard-signature"
                                    class="size-10 text-primary"
                                ></i>
                            </div>
                            <h4 class="mt-5 text-lg font-medium text-default-950">
                                E-commerce Solutions
                            </h4>
                        </div>
                    </div>

                    <div class="w-60">
                        <div
                            class="rounded-xl bg-white p-6 text-center shadow-lg dark:bg-default-50"
                        >
                            <div class="flex justify-center">
                                <i data-lucide="store" class="size-10 text-primary"></i>
                            </div>
                            <h4 class="mt-5 text-lg font-medium text-default-950">
                                Pay-Per-Click Advertising
                            </h4>
                        </div>
                    </div>

                    <div class="w-60">
                        <div
                            class="rounded-xl bg-white p-6 text-center shadow-lg dark:bg-default-50"
                        >
                            <div class="flex justify-center">
                                <i data-lucide="contact-2" class="size-10 text-primary"></i>
                            </div>
                            <h4 class="mt-5 text-lg font-medium text-default-950">
                                Branding <br/>
                                Strategy
                            </h4>
                        </div>
                    </div>

                    <div class="w-60">
                        <div
                            class="rounded-xl bg-white p-6 text-center shadow-lg dark:bg-default-50"
                        >
                            <div class="flex justify-center">
                                <i data-lucide="image" class="size-10 text-primary"></i>
                            </div>
                            <h4 class="mt-5 text-lg font-medium text-default-950">
                                Marketing Copywriting
                            </h4>
                        </div>
                    </div>
                </div>
                <!-- marquee__group End-->

                <div
                    aria-hidden="true"
                    class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-8"
                >
                    <div class="w-60 py-5">
                        <div
                            class="rounded-xl bg-white p-6 text-center shadow-lg dark:bg-default-50"
                        >
                            <div class="flex justify-center">
                                <i data-lucide="newspaper" class="size-10 text-primary"></i>
                            </div>
                            <h4 class="mt-5 text-lg font-medium text-default-950">
                                Search Engine Optimization
                            </h4>
                        </div>
                    </div>

                    <div class="w-60">
                        <div
                            class="rounded-xl bg-white p-6 text-center shadow-lg dark:bg-default-50"
                        >
                            <div class="flex justify-center">
                                <i
                                    data-lucide="folder-kanban"
                                    class="size-10 text-primary"
                                ></i>
                            </div>
                            <h4 class="mt-5 text-lg font-medium text-default-950">
                                Social Media Marketing
                            </h4>
                        </div>
                    </div>

                    <div class="w-60">
                        <div
                            class="rounded-xl bg-white p-6 text-center shadow-lg dark:bg-default-50"
                        >
                            <div class="flex justify-center">
                                <i
                                    data-lucide="clipboard-signature"
                                    class="size-10 text-primary"
                                ></i>
                            </div>
                            <h4 class="mt-5 text-lg font-medium text-default-950">
                                E-commerce Solutions
                            </h4>
                        </div>
                    </div>

                    <div class="w-60">
                        <div
                            class="rounded-xl bg-white p-6 text-center shadow-lg dark:bg-default-50"
                        >
                            <div class="flex justify-center">
                                <i data-lucide="store" class="size-10 text-primary"></i>
                            </div>
                            <h4 class="mt-5 text-lg font-medium text-default-950">
                                Pay-Per-Click Advertising
                            </h4>
                        </div>
                    </div>

                    <div class="w-60">
                        <div
                            class="rounded-xl bg-white p-6 text-center shadow-lg dark:bg-default-50"
                        >
                            <div class="flex justify-center">
                                <i data-lucide="contact-2" class="size-10 text-primary"></i>
                            </div>
                            <h4 class="mt-5 text-lg font-medium text-default-950">
                                Branding <br/>
                                Strategy
                            </h4>
                        </div>
                    </div>

                    <div class="w-60">
                        <div
                            class="rounded-xl bg-white p-6 text-center shadow-lg dark:bg-default-50"
                        >
                            <div class="flex justify-center">
                                <i data-lucide="image" class="size-10 text-primary"></i>
                            </div>
                            <h4 class="mt-5 text-lg font-medium text-default-950">
                                Marketing Copywriting
                            </h4>
                        </div>
                    </div>
                </div>
                <!-- marquee__group End-->
            </div>
            <!-- flex End -->
            <!-- End marq Section -->
        </div>
    </section>

    <!-- Start About -->
    <section id="projects" class="overflow-hidden py-10">
        <div class="container">
            <div
                class="relative overflow-hidden rounded-3xl bg-white shadow-[rgba(17,_17,_26,_0.1)_0px_0px_24px] dark:bg-default-50"
            >
                <div class="grid items-center gap-6 lg:grid-cols-2">
                    <div class="relative p-6 text-center">
              <span
                  class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
              >Highlighted Projects</span
              >
                        <h2 class="mt-4 text-3xl font-medium text-default-950">
                            Innovative Design Solutions 💡
                        </h2>
                        <p class="mb-8 mt-5 text-base">
                            Customize your design using a variety of theme options in the
                            WordPress Customizer and witness instant changes.
                        </p>
                        <a
                            href="#"
                            class="inline-flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2 text-white transition-all duration-300 hover:bg-primary-700"
                        >Read More
                            <i data-lucide="move-right" class="size-6"></i>
                        </a>
                    </div>
                    <img
                        src="/images/landing/marketing-3/img-2.jpg"
                        class="h-full w-full"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <section class="overflow-hidden py-10">
        <div class="container">
            <div
                class="relative overflow-hidden rounded-3xl bg-white shadow-[rgba(17,_17,_26,_0.1)_0px_0px_24px] dark:bg-default-50"
            >
                <div class="grid items-center gap-6 lg:grid-cols-2">
                    <img
                        src="/images/landing/marketing-3/img-3.jpg"
                        class="h-full w-full"
                        alt=""
                    />

                    <div class="relative p-6">
              <span
                  class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
              >Exploratory Studies</span
              >
                        <h2 class="mt-4 text-3xl font-medium text-default-950">
                            Ideas Driven byPassion. ✏️
                        </h2>
                        <p class="mb-8 mt-5 text-base">
                            We strongly hold that partnering with our clients to develop
                            products and services is the most efficient method to achieve
                            our objectives.
                        </p>

                        <div>
                            <div class="flex items-center justify-between gap-6">
                                <h2 class="text-lg font-medium text-default-950">
                                    Search Engine
                                </h2>
                                <h4 class="text-lg font-medium text-default-950">75</h4>
                            </div>
                            <div
                                class="mt-1 flex h-4 w-full overflow-hidden rounded-full bg-default-200"
                            >
                                <div
                                    class="flex flex-col justify-center overflow-hidden bg-primary"
                                    role="progressbar"
                                    style="width: 75%"
                                    aria-valuenow="46"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                        </div>

                        <div class="my-10">
                            <div class="flex items-center justify-between gap-6">
                                <h2 class="text-lg font-medium text-default-950">
                                    Digital marketing
                                </h2>
                                <h4 class="text-lg font-medium text-default-950">95</h4>
                            </div>
                            <div
                                class="mt-1 flex h-4 w-full overflow-hidden rounded-full bg-default-200"
                            >
                                <div
                                    class="flex flex-col justify-center overflow-hidden bg-primary"
                                    role="progressbar"
                                    style="width: 95%"
                                    aria-valuenow="46"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between gap-6">
                                <h2 class="text-lg font-medium text-default-950">
                                    App Development
                                </h2>
                                <h4 class="text-lg font-medium text-default-950">85</h4>
                            </div>
                            <div
                                class="mt-1 flex h-4 w-full overflow-hidden rounded-full bg-default-200"
                            >
                                <div
                                    class="flex flex-col justify-center overflow-hidden bg-primary"
                                    role="progressbar"
                                    style="width: 85%"
                                    aria-valuenow="46"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="py-10 lg:py-20">
        <div class="container">
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div>
                    <i
                        data-lucide="activity-square"
                        class="size-12 text-default-950"
                    ></i>
                    <h2 class="mt-5 text-4xl font-medium text-default-950">
                        Flexibility and Expansion.
                    </h2>
                    <p class="mt-4 text-base">
                        Transform your concepts into reality using an intuitive visual
                        editor. we's Build, modify, and personalize your website visually
                        without any coding required!
                    </p>

                    <ul role="list" class="mt-6 text-sm text-default-700">
                        <li class="flex items-center gap-2">
                            <!-- svg icon -->
                            <i
                                data-lucide="dot"
                                class="inline-block size-9 text-primary"
                            ></i>
                            <span class="text-base font-medium"
                            >99.9% Uptime Assurance</span
                            >
                        </li>
                        <li class="flex items-center gap-2">
                            <!-- svg icon -->
                            <i
                                data-lucide="dot"
                                class="inline-block size-9 text-primary"
                            ></i>
                            <span class="text-base font-medium"
                            >Endless Photos and Videos</span
                            >
                        </li>
                        <li class="flex items-center gap-2">
                            <!-- svg icon -->
                            <i
                                data-lucide="dot"
                                class="inline-block size-9 text-primary"
                            ></i>
                            <span class="text-base font-medium">Premium Support</span>
                        </li>
                    </ul>
                    <!-- End list -->
                </div>

                <div class="h-[500px]">
                    <img
                        src="/images/landing/marketing-3/img-4.svg"
                        class="h-full w-full"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 lg:py-20">
        <div class="container">
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div>
                    <div class="flex flex-wrap items-center justify-center gap-6">
                        <div
                            class="h-40 w-52 rounded-xl bg-purple-500/10 p-6 text-center"
                        >
                            <div class="flex justify-center">
                                <i
                                    data-lucide="shopping-bag"
                                    class="size-12 text-purple-600"
                                ></i>
                            </div>
                            <h3 class="mt-3 text-xl font-medium text-purple-600">
                                Ecommerce
                            </h3>
                        </div>

                        <div
                            class="h-40 w-52 rounded-xl bg-green-500/10 p-6 text-center md:-mt-14"
                        >
                            <div class="flex justify-center">
                                <i
                                    data-lucide="activity-square"
                                    class="size-12 text-green-600"
                                ></i>
                            </div>
                            <h3 class="mt-3 text-xl font-medium text-green-600">
                                Branding
                            </h3>
                        </div>
                    </div>

                    <div class="mt-6 flex flex-wrap items-center justify-center gap-5">
                        <div class="h-40 w-52 rounded-xl bg-red-500/10 p-6 text-center">
                            <div class="flex justify-center">
                                <i
                                    data-lucide="toggle-right"
                                    class="size-12 text-red-600"
                                ></i>
                            </div>
                            <h3 class="mt-3 text-xl font-medium text-red-600">
                                Consultation
                            </h3>
                        </div>
                        <div
                            class="h-40 w-52 rounded-xl bg-sky-500/10 p-6 text-center md:-mt-14"
                        >
                            <div class="flex justify-center">
                                <i data-lucide="component" class="size-12 text-sky-600"></i>
                            </div>
                            <h3 class="mt-3 text-xl font-medium text-sky-600">Marketing</h3>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="text-3xl font-medium text-default-950">
                        Marketing Solutions ⚡
                    </h2>
                    <p class="mb-10 mt-5 text-base">
                        With a wealth of over 25 years in the field, we have developed
                        numerous strategic discovery processes that empower us to uncover
                        the layers necessary to comprehend, link, and represent
                        effectively.
                    </p>
                    <a
                        href="#"
                        class="inline-flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2 text-white transition-all hover:bg-primary-700"
                    >Read More
                        <i data-lucide="move-right" class="size-6"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 lg:py-20">
        <div class="container">
            <div class="grid items-end gap-6 lg:grid-cols-2">
                <div>
                    <h2 class="mb-8 text-4xl font-medium text-default-950">
                        Powered by Enthusiasm.
                    </h2>

                    <div class="rounded-xl border border-default-200">
                        <div class="grid md:grid-cols-2">
                            <div class="p-6">
                                <h2 class="text-xl font-medium text-default-950">
                                    Mobile Development
                                </h2>
                                <p class="mt-3 text-sm">
                                    At Hub IT, we empower your business and technology to
                                    harness the potential of big data in the digital realm.
                                </p>
                            </div>

                            <div class="border-s border-default-200 p-6">
                                <h2 class="text-xl font-medium text-default-950">
                                    Digital Branding
                                </h2>
                                <p class="mt-3 text-sm">
                                    At Hub IT, we empower your business and technology to
                                    harness the potential of big data in the digital realm.
                                </p>
                            </div>

                            <div class="border-e border-t border-default-200 p-6">
                                <h2 class="text-xl font-medium text-default-950">
                                    Consultation
                                </h2>
                                <p class="mt-3 text-sm">
                                    At Hub IT, we empower your business and technology to
                                    harness the potential of big data in the digital realm.
                                </p>
                            </div>

                            <div class="border-t border-default-200 p-6">
                                <h2 class="text-xl font-medium text-default-950">
                                    Social Media
                                </h2>
                                <p class="mt-3 text-sm">
                                    At Hub IT, we empower your business and technology to
                                    harness the potential of big data in the digital realm.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative mb-20 lg:mb-0">
                    <div class="relative">
                        <img
                            src="/images/landing/marketing-3/img-5.jpg"
                            class="mx-auto rounded-xl"
                            alt=""
                        />
                    </div>
                    <div class="absolute inset-x-0 -bottom-14 hidden sm:block">
                        <img
                            src="/images/landing/marketing-3/img-6.jpg"
                            class="h-full rounded-xl"
                            alt=""
                        />
                    </div>
                </div>
                <!-- col End -->
            </div>
        </div>
    </section>

    <!-- Start marq -->
    <section class="pb-10 pt-20">
        <div
            class="relative m-auto flex gap-10 overflow-hidden border-y border-default-200 py-8"
        >
            <div
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-10"
            >
                <div class="py-3">
                    <h2 class="flex text-5xl font-medium text-default-950">
                        Built for online marketing
                    </h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">eCommerce</h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">Development</h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">Social media</h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">Consultation</h2>
                </div>
            </div>
            <!-- marquee__group End -->

            <div
                aria-hidden="true"
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-10"
            >
                <div class="py-3">
                    <h2 class="flex text-5xl font-medium text-default-950">
                        Built for online marketing
                    </h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">eCommerce</h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">Development</h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">Social media</h2>
                </div>
                <div class="py-3">
                    <h2 class="text-5xl font-medium text-default-950">Consultation</h2>
                </div>
            </div>
            <!-- marquee__group End -->
        </div>
        <!-- flex End -->
    </section>
    <!-- End marq Section -->

    <!-- Start Faq -->
    <section id="faq" class="bg-white py-10 dark:bg-default-50 lg:py-20">
        <div class="container">
            <div class="grid grid-cols-1 items-center gap-6 lg:grid-cols-2">
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
                                    Monetize Your App with Google Mobile
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
                                    Performance-Optimized Hosting in Your Account
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
                                    Monitor Your Car's Location
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
                            id="faq-3"
                        >
                            <button
                                class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                aria-controls="faq-3"
                            >
                                <h5 class="flex text-base font-medium">
                                    Leverage Google Mobile to Monetize Your App
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
                    </div>
                </div>
                <!-- col End-->

                <div>
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our FAQ</span
            >
                    <h2 class="mt-5 text-4xl/tight font-medium text-default-950">
                        Frequently Asked Questions ?
                    </h2>
                    <p class="mb-10 mt-5 text-base">
                        Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper
                        libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
                        blandit vel, luctus pulvinar, hendrerit id, lorem.
                    </p>
                    <a
                        href="#"
                        class="inline-flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2 text-white transition-all hover:bg-primary-700"
                    >Read More
                        <i data-lucide="move-right" class="size-6"></i>
                    </a>
                </div>
            </div>
            <!-- grid End-->
        </div>
        <!-- container End-->
    </section>
    <!-- End faq -->

    <!-- start -->
    <section class="py-10 lg:py-20">
        <div class="container">
            <div class="rounded-xl bg-primary/20 p-6">
                <div class="grid items-center gap-6 md:grid-cols-3">
                    <div class="">
                        <img
                            src="/images/landing/marketing-3/img-7.png"
                            class="max-w-full"
                            alt=""
                        />
                    </div>
                    <div class="md:col-span-2">
                        <div class="flex flex-col">
                            <div class="">
                                <h3 class="mb-2 text-3xl/snug font-medium text-default-950">
                                    Transform your concepts into reality <br/>
                                    and construct your website visually.
                                </h3>
                                <p class="mb-6 text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                                    tempora dolorem incidunt ex at possimus laborum nemo dolor.
                                    Nam doloremque inventore dolor. Id maxime quos odio natus
                                    sit repellat fugiat.
                                </p>
                            </div>
                            <div class="">
                                <a
                                    href="#"
                                    class="inline-flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2 text-white transition-all hover:bg-primary-700"
                                >Sign up free
                                    <i data-lucide="move-right" class="size-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end flex -->
            </div>
            <!-- end bg -->
        </div>
        <!-- end container -->
    </section>
    <!-- end -->
@endsection

@section('script-bottom')
    @vite(['resources/js/swiper.js'])
@endsection

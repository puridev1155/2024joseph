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
            (object)['id' => 'work','name' => 'Work'],
            (object)['id' => 'faq','name' => 'Faq'],
            (object)['id' => 'stories','name' => 'Stories'],
            (object)['id' => 'contact','name' => 'Contact'],
            ]
        ])

    <!-- Hero Section Start -->
    <section
        id="home"
        class="relative flex items-center justify-center overflow-hidden bg-[url('/public/images/landing/web-designer/img-11.png')] bg-cover bg-no-repeat py-28 dark:bg-[url('/public/images/landing/web-designer/img-11-dark.png')]"
    >
        <div class="bg- absolute inset-0"></div>

        <div class="container relative">
            <div class="grid items-center gap-10 lg:grid-cols-2">
                <div class="">
                    <span class="text-base font-medium">I'm Ronald Smith</span>
                    <h2 class="mt-3 text-4xl/snug font-medium text-default-900">
                        Visual & Web Designer Located in Melbourne.
                    </h2>
                    <p class="mt-1 text-lg">
                        Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                        imperdiet, leo.
                    </p>

                    <div class="mb-10">
                        <div
                            class="max-w-xl rounded-md bg-default-950/20 backdrop-blur-2xl"
                        >
                            <form class="mt-6 flex w-full items-center justify-between">
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="w-full border-0 bg-transparent p-4 text-base text-default-950 placeholder:text-default-950 focus:outline-none focus:ring-0"
                                    placeholder="Enter Your Email"
                                    autocomplete="off"
                                />
                                <button
                                    class="me-2 rounded-md border-0 bg-primary px-6 py-2 text-base font-semibold text-white backdrop-blur-2xl transition-all hover:bg-primary-700 hover:text-white"
                                >
                                    <div class="flex items-center justify-center gap-1">
                                        <span>Submit</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </button>
                            </form>
                        </div>
                        <small class="mb-6 mt-2 text-sm"
                        >Don't miss out on your favourite username.</small
                        >
                    </div>

                    <a
                        href="#"
                        class="inline-flex items-center justify-center gap-2 rounded-md bg-primary px-8 py-2 text-white backdrop-blur-3xl transition-all duration-300 hover:border-primary hover:bg-primary-700"
                    >Read More
                        <i data-lucide="move-right" class="size-6"></i>
                    </a>
                </div>

                <div class="lg:ms-auto">
                    <img src="/images/landing/web-designer/img.png" alt=""/>
                </div>
            </div>
        </div>
        <!-- container End -->
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="py-10 lg:py-20">
        <div class="container">
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div>
                    <img
                        src="/images/landing/web-designer/img-8.jpg"
                        class="rounded-xl"
                        alt=""
                    />
                </div>

                <div class="p-6">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our About</span
            >
                    <h2 class="mt-4 text-4xl font-medium text-default-950">
                        Why choose us
                    </h2>
                    <p class="mt-5 text-base text-default-950">
                        The role of the graphic designer in the communication process is
                        that of an encoder or interpreter of the message. They focus on
                        interpreting, organizing, and presenting visual messages.
                    </p>

                    <div class="my-5 grid grid-cols-1">
                        <div class="flex items-center gap-2">
                            <div>
                                <i data-lucide="dot" class="size-9 text-primary"></i>
                            </div>
                            <h3 class="text-xl text-default-950">Business Consultancy</h3>
                        </div>

                        <div class="flex items-center gap-2">
                            <div>
                                <i data-lucide="dot" class="size-9 text-primary"></i>
                            </div>
                            <h3 class="text-xl text-default-950">Art direction</h3>
                        </div>

                        <div class="flex items-center gap-2">
                            <div>
                                <i data-lucide="dot" class="size-9 text-primary"></i>
                            </div>
                            <h3 class="text-xl text-default-950">Web development</h3>
                        </div>
                    </div>

                    <a
                        href="#"
                        class="inline-flex items-center justify-center gap-2 rounded-md border border-default-200 px-8 py-2 text-default-950 backdrop-blur-3xl transition-all hover:border-primary hover:bg-primary hover:text-white"
                    >Read More
                        <i data-lucide="move-right" class="size-6"></i>
                    </a>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
    <!-- About Section Start -->

    <!-- Start Services -->
    <section id="services" class="py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto mb-12 max-w-xl text-center">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >Our Services</span
          >
                <h2 class="mt-3 text-3xl font-medium text-default-950 md:text-4xl">
                    In-Depth Strategy
                </h2>
                <p class="mt-5 text-base">
                    Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec,
                    nisi. Praesent nec nisl a purus blandit viverra.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 2xl:grid-cols-3">
                <div>
                    <div
                        class="flex flex-wrap gap-5 rounded-lg border border-default-200 bg-white p-6 shadow dark:bg-default-50 md:flex-nowrap"
                    >
                        <div>
                            <div
                                class="flex size-10 items-center justify-center rounded-md bg-default-900 text-xl text-default-50"
                            >
                                1
                            </div>
                        </div>
                        <div>
                            <h3
                                class="mb-4 text-xl font-medium text-default-950 md:text-2xl"
                            >
                                Business Consultancy
                            </h3>
                            <p class="mb-4 font-medium md:text-base">
                                Massa est senectus sapien ultrices volutpat. Fermentum,
                                posuere risus proin integer. Adipiscing elit.
                            </p>
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
                    </div>
                </div>
                <!-- col End -->

                <div>
                    <div
                        class="flex flex-wrap gap-5 rounded-lg border border-default-200 bg-white p-6 shadow dark:bg-default-50 md:flex-nowrap"
                    >
                        <div>
                            <div
                                class="flex size-10 items-center justify-center rounded-md bg-default-900 text-xl text-default-50"
                            >
                                2
                            </div>
                        </div>
                        <div>
                            <h3
                                class="mb-4 text-xl font-medium text-default-950 md:text-2xl"
                            >
                                Web Design
                            </h3>
                            <p class="mb-4 font-medium md:text-base">
                                Suspendisse consectetur elit, purus quis id sem quam quisque.
                                Eget tortor tortor leo faucibus.
                            </p>
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
                    </div>
                </div>
                <!-- col End -->

                <div>
                    <div
                        class="flex flex-wrap gap-5 rounded-lg border border-default-200 bg-white p-6 shadow dark:bg-default-50 md:flex-nowrap"
                    >
                        <div>
                            <div
                                class="flex size-10 items-center justify-center rounded-md bg-default-900 text-xl text-default-50"
                            >
                                3
                            </div>
                        </div>
                        <div>
                            <h3
                                class="mb-4 text-xl font-medium text-default-950 md:text-2xl"
                            >
                                Production
                            </h3>
                            <p class="mb-4 font-medium md:text-base">
                                Tempor dolor eros luctus at sagittis ut egestas tristique. Non
                                massa ut accumsan, ornare.
                            </p>
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
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- End grid -->
        </div>
        <!-- End container -->
    </section>
    <!-- End Services -->

    <!-- ======= Projects start ======= -->
    <section id="work" class="py-20">
        <div class="container">
            <div class="mb-10">
                <div class="flex flex-wrap items-center justify-between gap-6">
                    <h2 class="text-4xl font-medium text-default-950">Works</h2>

                    <div class="filters-group-wrap text-center">
                        <div class="filters-group">
                            <div
                                class="filter-options flex list-none flex-wrap justify-center gap-4"
                            >
                                <a href="javascript:void(0);" class="active" data-group="all"
                                >All</a
                                >
                                <a href="javascript:void(0);" data-group="web design"
                                >Web Design</a
                                >
                                <a href="javascript:void(0);" data-group="graphic design"
                                >Graphic Design</a
                                >
                                <a href="javascript:void(0);" data-group="illustrator"
                                >Illustrator</a
                                >
                                <a href="javascript:void(0);" data-group="photography"
                                >Photography</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End flex -->
            </div>

            <div id="gallery-wrapper" class="flex items-center">
                <div
                    class="picture-item w-full p-3 xl:w-1/2"
                    data-groups='["web design"]'
                >
                    <div
                        class="group space-y-6 overflow-hidden rounded-lg bg-default-200 p-3"
                    >
                        <div class="relative overflow-hidden rounded-lg">
                            <img
                                class="ransition mx-auto h-full w-full object-cover object-top duration-500 group-hover:scale-105"
                                src="/images/landing/web-designer/img-2.jpg"
                                alt="woman"
                                loading="lazy"
                                width="640"
                                height="805"
                            />
                            <div class="absolute inset-0">
                                <div class="h-full w-full rounded bg-black/60">
                                    <div class="flex h-full items-end p-4">
                                        <div class="overflow-hidden">
                                            <p class="mb-2 font-medium text-white">27 Aug 2021</p>
                                            <h5 class="mb-2 text-3xl font-medium text-white">
                                                Medium Scene
                                            </h5>
                                            <p
                                                class="mb-8 truncate whitespace-nowrap text-base text-white/80 md:whitespace-normal"
                                            >
                                                Explore a medium scene where creativity meets
                                                innovation. Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt
                                                labore et dolore magna aliqua.
                                            </p>
                                            <a
                                                href="javascript:void(0);"
                                                class="group text-lg font-medium text-white"
                                            >Read More
                                                <i
                                                    data-lucide="move-right"
                                                    class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                                ></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End flex -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="picture-item w-full p-3 xl:w-1/2"
                    data-groups='["graphic design"]'
                >
                    <div
                        class="group space-y-6 overflow-hidden rounded-lg bg-default-200 p-3"
                    >
                        <div class="relative overflow-hidden rounded-lg">
                            <img
                                class="ransition mx-auto h-full w-full object-cover object-top duration-500 group-hover:scale-105"
                                src="/images/landing/web-designer/img-3.jpg"
                                alt="woman"
                                loading="lazy"
                                width="640"
                                height="805"
                            />
                            <div class="absolute inset-0">
                                <div class="h-full w-full rounded bg-black/60">
                                    <div class="flex h-full items-end p-4">
                                        <div class="overflow-hidden">
                                            <p class="mb-2 font-medium text-white">27 Aug 2021</p>
                                            <h5 class="mb-2 text-3xl font-medium text-white">
                                                The Emergence of Design
                                            </h5>
                                            <p
                                                class="mb-8 truncate whitespace-nowrap text-base text-white/80 md:whitespace-normal"
                                            >
                                                Proin elementum ipsum vel mauris pellentesque
                                                accumsan. Nulla in erat ligula, vivamus sed egestas
                                                elit, sit amet convallis metus.
                                            </p>
                                            <a
                                                href="javascript:void(0);"
                                                class="group text-lg font-medium text-white"
                                            >Read More
                                                <i
                                                    data-lucide="move-right"
                                                    class="inline-block size-6 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                                ></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End flex -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="picture-item w-full p-3 xl:w-1/2"
                    data-groups='["illustrator"]'
                >
                    <div
                        class="group space-y-6 overflow-hidden rounded-lg bg-default-200 p-3"
                    >
                        <div class="relative overflow-hidden rounded-lg">
                            <img
                                class="ransition mx-auto h-full w-full object-cover object-top duration-500 group-hover:scale-105"
                                src="/images/landing/web-designer/img-4.jpg"
                                alt="woman"
                                loading="lazy"
                                width="640"
                                height="805"
                            />
                            <div class="absolute inset-0">
                                <div class="h-full w-full rounded bg-black/60">
                                    <div class="flex h-full items-end p-4">
                                        <div class="overflow-hidden">
                                            <p class="mb-2 font-medium text-white">27 Aug 2021</p>
                                            <h5 class="mb-2 text-3xl font-medium text-white">
                                                Amplitude
                                            </h5>
                                            <p
                                                class="mb-8 truncate whitespace-nowrap text-base text-white/80 md:whitespace-normal"
                                            >
                                                Aliquam tempus nunc nec rutrum malesuada. Proin
                                                pulvinar augue quis pharetra vulputate. Sed lacinia
                                                convallis orci vitae condimentum.
                                            </p>
                                            <a
                                                href="javascript:void(0);"
                                                class="group text-lg font-medium text-white"
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
                        </div>
                    </div>
                </div>

                <div
                    class="picture-item w-full p-3 xl:w-1/2"
                    data-groups='["photography"]'
                >
                    <div
                        class="group space-y-6 overflow-hidden rounded-lg bg-default-200 p-3"
                    >
                        <div class="relative overflow-hidden rounded-lg">
                            <img
                                class="ransition mx-auto h-full w-full object-cover object-top duration-500 group-hover:scale-105"
                                src="/images/landing/web-designer/img-5.jpg"
                                alt="woman"
                                loading="lazy"
                                width="640"
                                height="805"
                            />
                            <div class="absolute inset-0">
                                <div class="h-full w-full rounded bg-black/60">
                                    <div class="flex h-full items-end p-4">
                                        <div class="overflow-hidden">
                                            <p class="mb-2 font-medium text-white">27 Aug 2021</p>
                                            <h5 class="mb-2 text-3xl font-medium text-white">
                                                Visual Enigma
                                            </h5>
                                            <p
                                                class="mb-8 truncate whitespace-nowrap text-base text-white/80 md:whitespace-normal"
                                            >
                                                Suspendisse scelerisque convallis nibh. Maecenas
                                                bibendum porta mattis. Donec quis nibh porta dolor
                                                ultrices bibendum vel quis leo.
                                            </p>
                                            <a
                                                href="javascript:void(0);"
                                                class="group text-lg font-medium text-white"
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- Grid End -->
        </div>
        <!-- Container End -->
    </section>
    <!-- ======= Projects end ======= -->

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
                                    What is web design?
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
                                        Explore the world of brand strategy as we dive into the
                                        realms of consumer perception, market positioning, and
                                        effective communication.
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
                                    How long does it take to design a website?
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
                                        Immerse yourself in the art of web design, where
                                        creativity and functionality converge. Our designs are
                                        tailored to captivate your audience, ensuring a memorable
                                        online presence.
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
                                    Can I update my website's design after it's live?
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
                                        Experience the impact of compelling visual direction. Our
                                        artistic vision guides your brand's aesthetics, leaving a
                                        lasting impression on your audience.
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
                                    What is user experience UI design in web design?
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
                                        Discover the realm of web development where innovation
                                        meets functionality. We bring your digital ideas to life,
                                        creating seamless and user-friendly experiences.
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
                                    What is responsive web design?
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
                                        Unleash the power of strategic marketing. Our marketing
                                        techniques are designed to help your brand reach new
                                        heights, ensuring it's heard loud and clear in the digital
                                        landscape.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- col End-->
                    </div>
                </div>
                <!-- col End-->

                <div class="relative">
                    <div class="relative">
                        <img
                            src="/images/landing/web-designer/img-7.jpg"
                            class="mx-auto rounded-xl"
                            alt=""
                        />
                    </div>
                    <div class="absolute inset-x-0 hidden lg:-bottom-14 lg:block">
                        <img
                            src="/images/landing/web-designer/img-6.jpg"
                            class="h-full rounded-xl"
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
    <!-- End Faq -->

    <section id="stories" class="py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto mb-12 max-w-xl text-center">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >Featured Stories</span
          >
                <h2 class="mt-3 text-3xl font-medium text-default-950 md:text-4xl">
                    Latest News
                </h2>
                <p class="mt-5 text-base">
                    Proin faucibus arcu quis ante. In consectetuer turpis ut velit.
                </p>
            </div>

            <div>
                <div class="relative border-y border-default-200 p-10">
                    <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">
                        <div class="lg:col-span-3">
                            <div class="flex items-center">
                                <div class="mr-5">
                                    <div class="img size-14 overflow-hidden rounded-full">
                                        <img
                                            src="/images/avatars/img-1.jpg"
                                            class="h-full w-full"
                                            alt=""
                                        />
                                    </div>
                                </div>
                                <div>
                                    <span class="mb-5 text-sm font-medium">Posted by</span>
                                    <h6 class="text-xl font-medium text-default-950">
                                        Olivia Rhye
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- col-span-3 End -->

                        <div class="lg:col-span-6">
                            <h5 class="mb-10 underline">
                                <a href="#" class="text-xl font-medium text-default-950"
                                >Natura Insects Series: Shaping Insects from Flowers</a
                                >
                            </h5>
                            <div class="flex items-center gap-7">
                                <a
                                    href="#"
                                    class="text-sm uppercase tracking-widest text-default-950"
                                >Design</a
                                >
                                <a
                                    href="#"
                                    class="text-sm uppercase tracking-widest text-default-950"
                                >Marketing</a
                                >
                            </div>
                        </div>
                        <!-- col-span-6 End -->
                        <div class="flex items-center lg:col-span-3 lg:justify-end">
                            <span class="text-base font-medium">December 3, 2023</span>
                        </div>
                        <!-- col-span-3 End -->
                    </div>
                    <!-- Grid End -->
                    <div
                        class="background absolute left-0 top-0 h-full w-full bg-cover bg-top text-center opacity-0 hover:bg-bottom hover:opacity-100"
                        style="
                background-image: url('/images/landing/web-designer/img-10.jpg');
                transition:
                  opacity 0.4s,
                  background-position 10s linear;
              "
                    >
                        <div class="flex h-full items-center justify-center">
                            <a
                                href="#"
                                class="inline-flex items-center justify-center gap-1 rounded-md bg-primary px-6 py-2 text-white transition-all duration-300 hover:bg-primary-700"
                            >
                                Read More<i data-lucide="move-right" class="size-5"></i>
                            </a>
                        </div>
                        <!-- flex End -->
                    </div>
                </div>

                <div class="relative p-10">
                    <div class="grid gap-6 lg:grid-cols-12">
                        <div class="lg:col-span-3">
                            <div class="flex items-center">
                                <div class="mr-5">
                                    <div class="img size-14 overflow-hidden rounded-full">
                                        <img
                                            src="/images/avatars/img-3.jpg"
                                            class="h-full w-full"
                                            alt=""
                                        />
                                    </div>
                                </div>
                                <div>
                                    <span class="mb-5 text-sm font-medium">Posted by</span>
                                    <h6 class="text-xl font-medium text-default-950">
                                        Olivia Rhye
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- col-span-3 End -->
                        <div class="lg:col-span-6">
                            <h5 class="mb-10 underline">
                                <a href="#" class="text-xl font-medium text-default-950"
                                >Minimalistic Design Concept for Balmain Online Store</a
                                >
                            </h5>
                            <div class="flex items-center gap-7">
                                <a
                                    href="#"
                                    class="text-sm uppercase tracking-widest text-default-950"
                                >Design</a
                                >
                                <a
                                    href="#"
                                    class="text-sm uppercase tracking-widest text-default-950"
                                >Marketing</a
                                >
                            </div>
                        </div>
                        <!-- col-span-6 End -->
                        <div class="flex items-center lg:col-span-3 lg:justify-end">
                            <span class="text-base font-medium">December 2, 2023</span>
                        </div>
                        <!-- col-span-3 End -->
                    </div>
                    <!-- Grid End -->
                    <div
                        class="background absolute left-0 top-0 h-full w-full bg-cover bg-top text-center opacity-0 hover:bg-bottom hover:opacity-100"
                        style="
                background-image: url('/images/landing/web-designer/img-9.jpg');
                transition:
                  opacity 0.4s,
                  background-position 10s linear;
              "
                    >
                        <div class="flex h-full items-center justify-center">
                            <a
                                href="#"
                                class="inline-flex items-center justify-center gap-1 rounded-md bg-primary px-6 py-2 text-white transition-all duration-300 hover:bg-primary-700"
                            >
                                Read More<i data-lucide="move-right" class="size-5"></i>
                            </a>
                        </div>
                        <!-- flex End -->
                    </div>
                </div>

                <div class="relative border-y border-default-200 p-10">
                    <div class="grid gap-6 lg:grid-cols-12">
                        <div class="lg:col-span-3">
                            <div class="flex items-center">
                                <div class="mr-5">
                                    <div class="img size-14 overflow-hidden rounded-full">
                                        <img
                                            src="/images/avatars/img-2.jpg"
                                            class="h-full w-full"
                                            alt=""
                                        />
                                    </div>
                                </div>
                                <div>
                                    <span class="mb-5 text-sm font-medium">Posted by</span>
                                    <h6 class="text-xl font-medium text-default-950">
                                        Olivia Rhye
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- col-span-3 End -->
                        <div class="lg:col-span-6">
                            <h5 class="mb-10 underline">
                                <a href="#" class="text-xl font-medium text-default-950"
                                >Spotlight on the Equinox Collection by Shane Griffin</a
                                >
                            </h5>
                            <div class="flex items-center gap-7">
                                <a
                                    href="#"
                                    class="text-sm uppercase tracking-widest text-default-950"
                                >Design</a
                                >
                                <a
                                    href="#"
                                    class="text-sm uppercase tracking-widest text-default-950"
                                >Marketing</a
                                >
                            </div>
                        </div>
                        <!-- col-span-6 End -->
                        <div class="flex items-center lg:col-span-3 lg:justify-end">
                            <span class="text-base font-medium">November 29, 2023</span>
                        </div>
                        <!-- col-span-3 End -->
                    </div>
                    <!-- Grid End -->
                    <div
                        class="background absolute left-0 top-0 h-full w-full bg-cover bg-top text-center opacity-0 hover:bg-bottom hover:opacity-100"
                        style="
                background-image: url('/images/landing/web-designer/img-8.jpg');
                transition:
                  opacity 0.4s,
                  background-position 10s linear;
              "
                    >
                        <div class="flex h-full items-center justify-center">
                            <a
                                href="#"
                                class="inline-flex items-center justify-center gap-1 rounded-md bg-primary px-6 py-2 text-white transition-all duration-300 hover:bg-primary-700"
                            >
                                Read More<i data-lucide="move-right" class="size-5"></i>
                            </a>
                        </div>
                        <!-- flex End -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact start -->
    <section id="contact" class="py-20">
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

            <div class="mx-auto max-w-4xl">
                <div
                    class="rounded-md border border-default-300 bg-white p-8 dark:bg-default-50"
                >
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
                                    class="block w-full rounded-md border-default-200 px-3 py-2 text-sm text-default-950 focus:border-default-300 focus:ring-transparent dark:bg-default-100"
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
                                    class="block w-full rounded-md border-default-200 px-3 py-2 text-sm text-default-950 focus:border-default-300 focus:ring-transparent dark:bg-default-100"
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
                                        class="block w-full rounded-md border-default-200 px-3 py-2 text-sm text-default-950 focus:border-default-300 focus:ring-transparent dark:bg-default-100"
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
                                        class="block w-full rounded-md border-default-200 px-3 py-2 text-sm text-default-950 focus:border-default-300 focus:ring-transparent dark:bg-default-100"
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
        <!-- Container End -->
    </section>
    <!-- contact end -->
@endsection

@section('script-bottom')
    @vite(['resources/js/gallery.js','resources/js/glightbox.js'])
@endsection

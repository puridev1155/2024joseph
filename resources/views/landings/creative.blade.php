@extends('layouts.landing', ['title' => 'Joseph School'])

@section('css')

@endsection

@section('content')
    @include('layouts.shared.navbar', [
        'menuPosition' => 'sticky',
        'navItems' => [
            (object)['id' => 'home','name' => 'Home'],
            (object)['id' => 'features','name' => 'Features'],
            (object)['id' => 'portfolio','name' => 'Portfolio'],
            (object)['id' => 'testimonial','name' => 'Testimonial'],
            (object)['id' => 'faq','name' => 'Faq'],
            (object)['id' => 'blog','name' => 'Blog'],
            ]
        ])

    <!-- Hero Section Start -->
    <section
        id="home"
        class="bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat dark:bg-[url('/public/images/other/bg-lines-2-dark.png')]"
    >
        <div class="grid grid-cols-1 items-end gap-6 xl:grid-cols-5">
            <div class="xl:col-span-3">
                <!-- Swiper -->
                <div class="swiper mySwiper swiper-hero">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide relative">
                            <img
                                src="/images/landing/creative/img-2.jpg"
                                class="h-full w-full"
                            />
                            <div class="absolute inset-0 bg-black/40"></div>
                        </div>
                        <!-- swiper-slide end -->

                        <div class="swiper-slide relative">
                            <img
                                src="/images/landing/creative/img-3.jpg"
                                class="h-full w-full"
                            />
                            <div class="absolute inset-0 bg-black/40"></div>
                        </div>
                        <!-- swiper-slide end -->

                        <div class="swiper-slide relative">
                            <img
                                src="/images/landing/creative/img-1.jpg"
                                class="h-full w-full"
                            />
                            <div class="absolute inset-0 bg-black/40"></div>
                        </div>
                        <!-- swiper-slide end -->
                    </div>
                </div>
                <!-- Swiper end -->
            </div>
            <!-- col-span-3 end -->

            <div class="relative p-6 xl:col-span-2 xl:p-0">
                <!-- Swiper -->
                <div class="swiper mySwiper2 swiper-hero relative me-10">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="flex flex-col items-start justify-end pb-28 xl:h-full"
                            >
                                <!-- <span class="text-base font-medium uppercase tracking-wider text-default-800">Digital agency</span> -->
                                <h2
                                    class="mt-6 max-w-2xl text-4xl font-semibold text-default-950"
                                >
                                    Crafting Vision into Reality: Design Agency at Your Service
                                </h2>
                                <p class="mt-5 w-3/4 text-base font-medium">
                                    Their ability to understand our vision and translate it into
                                    a comprehensive marketing strategy is truly exceptional.
                                </p>
                            </div>
                        </div>
                        <!-- swiper-slide end -->

                        <div class="swiper-slide">
                            <div
                                class="flex flex-col items-start justify-end pb-28 xl:h-full"
                            >
                                <!-- <span class="text-base font-medium uppercase tracking-wider text-default-800">Digital agency</span> -->
                                <h2
                                    class="mt-6 max-w-2xl text-4xl font-semibold text-default-950"
                                >
                                    Innovative Design Solutions: Unleashing Creativity for You
                                </h2>
                                <p class="mt-5 w-3/4 text-base font-medium">
                                    Their ability to understand our vision and translate it into
                                    a comprehensive marketing strategy is truly exceptional.
                                </p>
                            </div>
                        </div>
                        <!-- swiper-slide end -->

                        <div class="swiper-slide">
                            <div
                                class="flex flex-col items-start justify-end pb-28 xl:h-full"
                            >
                                <!-- <span class="text-base font-medium uppercase tracking-wider text-default-800">Digital agency</span> -->
                                <h2
                                    class="mt-6 max-w-2xl text-4xl font-semibold text-default-950"
                                >
                                    Design Excellence Redefined: Elevate Your Brand with Our
                                    Agency
                                </h2>
                                <p class="mt-5 w-3/4 text-base font-medium">
                                    Their ability to understand our vision and translate it into
                                    a comprehensive marketing strategy is truly exceptional.
                                </p>
                            </div>
                        </div>
                        <!-- swiper-slide end -->
                    </div>
                </div>
                <!-- Swiper end -->

                <div class="absolute inset-x-0 bottom-8 z-10">
                    <div class="relative flex items-center justify-end gap-5 pe-10">
                        <div class="cre-button-prev">
                            <div
                                class="flex size-14 items-center justify-center rounded-full border border-default-200 bg-default-50 text-default-900 hover:bg-primary hover:text-white"
                            >
                                <i data-lucide="arrow-left" class="size-7"></i>
                            </div>
                        </div>
                        <div class="cre-button-next">
                            <div
                                class="flex size-14 items-center justify-center rounded-full border border-default-200 bg-default-50 text-default-900 hover:bg-primary hover:text-white"
                            >
                                <i data-lucide="arrow-right" class="size-7"></i>
                            </div>
                        </div>
                    </div>
                    <!-- flex end -->
                </div>
            </div>
            <!-- col end -->
        </div>
        <!-- grid end -->
    </section>

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
            <!-- marquee__group End -->

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
            <!-- marquee__group End -->
        </div>
        <!-- flex End -->
    </section>

    <!-- Start Services -->
    <section id="features" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Featureo Features</span
            >
                    <h2 class="mt-4 text-4xl font-medium capitalize text-default-950">
                        Our Features
                    </h2>
                </div>
            </div>
            <!-- flex End -->

            <div
                class="grid grid-cols-1 items-center overflow-hidden rounded-md border border-default-200 md:grid-cols-2 xl:grid-cols-3"
            >
                <div class="group h-full border-b border-default-200">
                    <div class="p-8 sm:p-10">
              <span class="">
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

                <div class="group h-full border-b border-default-200 md:border-s">
                    <div class="p-8 sm:p-10">
              <span class="">
                <i data-lucide="monitor" class="size-14 text-default-950"></i>
              </span>
                        <h2 class="mb-4 mt-8 text-2xl font-medium text-default-950">
                            Web Design
                        </h2>
                        <p class="mb-6 text-base">
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                            Nullam dictum felis eu pede mollis pretium.
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

                <div class="group h-full border-b border-default-200 xl:border-s">
                    <div class="p-8 sm:p-10">
              <span class="">
                <i data-lucide="layers" class="size-14 text-default-950"></i>
              </span>
                        <h2 class="mb-4 mt-8 text-2xl font-medium text-default-950">
                            Digital Product Design
                        </h2>
                        <p class="mb-6 text-base">
                            Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien
                            ut libero venenatis faucibus.
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

                <div
                    class="group h-full border-b border-s border-default-200 xl:border-0"
                >
                    <div class="p-8 sm:p-10">
              <span class="">
                <i
                    data-lucide="layout-grid"
                    class="size-14 text-default-950"
                ></i>
              </span>
                        <h2 class="mb-4 mt-8 text-2xl font-medium text-default-950">
                            Branding & Design
                        </h2>
                        <p class="mb-6 text-base">
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere Curae; In ac dui quis mi consectetuer lacinia.
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

                <div
                    class="group h-full border-b border-default-200 md:border-b-0 xl:border-s"
                >
                    <div class="p-8 sm:p-10">
              <span class="">
                <i data-lucide="figma" class="size-14 text-default-950"></i>
              </span>
                        <h2 class="mb-4 mt-8 text-2xl font-medium text-default-950">
                            Ui/Ux & Design
                        </h2>
                        <p class="mb-6 text-base">
                            Maecenas malesuada. Praesent congue erat at massa. Sed cursus
                            turpis vitae tortor. Donec posuere vulputate arcu.
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

                <div class="group h-full border-default-200 md:border-s">
                    <div class="p-8 sm:p-10">
              <span class="">
                <i
                    data-lucide="paintbrush"
                    class="size-14 text-default-950"
                ></i>
              </span>
                        <h2 class="mb-4 mt-8 text-2xl font-medium text-default-950">
                            Graphic Design
                        </h2>
                        <p class="mb-6 text-base">
                            Aenean posuere, tortor sed cursus feugiat, nunc augue blandit
                            nunc, eu sollicitudin urna dolor sagittis lacus.
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
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>

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
                                src="/images/landing/creative/img-2.jpg"
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
                        <div class="group relative overflow-hidden rounded-xl">
                            <img
                                src="/images/landing/creative/img-4.jpg"
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
                        <div class="group relative overflow-hidden rounded-xl">
                            <img
                                src="/images/landing/creative/img-5.jpg"
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
                        <div class="group relative overflow-hidden rounded-xl">
                            <img
                                src="/images/landing/creative/img-2.jpg"
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
                        <div class="group relative overflow-hidden rounded-xl">
                            <img
                                src="/images/landing/creative/img-4.jpg"
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
                        <div class="group relative overflow-hidden rounded-xl">
                            <img
                                src="/images/landing/creative/img-5.jpg"
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
                </div>
            </div>
            <!--End Swiper -->
        </div>
    </section>

    <!-- Start Services -->
    <section id="testimonial" class="py-10 lg:py-20">
        <div class="container">
            <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
                <div class="2xl:py-20">
                    <div class="mb-10 flex items-end justify-between">
                        <div class="mx-auto max-w-md text-center lg:text-start xl:ms-0">
                <span
                    class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
                >Services</span
                >
                            <p class="mt-5 text-base">
                                We help you to go online and increase your conversion rate
                                Better design for your digital products.
                            </p>
                        </div>
                    </div>
                    <!-- flex End -->

                    <div class="rounded-md bg-default-50">
                        <div class="grid 2xl:grid-cols-2">
                            <div class="divide-y divide-white/10">
                                <div class="flex items-center justify-between p-6">
                                    <h3 class="text-2xl font-medium text-default-950">
                                        Graphic Design
                                    </h3>
                                    <div
                                        class="flex size-12 cursor-pointer items-center justify-center rounded-md border border-default-200 bg-white/5 text-default-950 transition-all hover:bg-white hover:text-primary"
                                    >
                                        <i data-lucide="move-right" class="size-6"></i>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between p-6">
                                    <h3 class="text-2xl font-medium text-default-950">
                                        Web Design
                                    </h3>
                                    <div
                                        class="flex size-12 cursor-pointer items-center justify-center rounded-md border border-default-200 bg-white/5 text-default-950 transition-all hover:bg-white hover:text-primary"
                                    >
                                        <i data-lucide="move-right" class="size-6"></i>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between p-6">
                                    <h3 class="text-2xl font-medium text-default-950">
                                        Digital Marketing
                                    </h3>
                                    <div
                                        class="flex size-12 cursor-pointer items-center justify-center rounded-md border border-default-200 bg-white/5 text-default-950 transition-all hover:bg-white hover:text-primary"
                                    >
                                        <i data-lucide="move-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- col End -->

                            <div
                                class="divide-y divide-white/10 border-t border-default-200 2xl:border-s 2xl:border-t-0"
                            >
                                <div class="flex items-center justify-between p-6">
                                    <h3 class="text-2xl font-medium text-default-950">
                                        Development
                                    </h3>
                                    <div
                                        class="flex size-12 cursor-pointer items-center justify-center rounded-md border border-default-200 bg-white/5 text-default-950 transition-all hover:bg-white hover:text-primary"
                                    >
                                        <i data-lucide="move-right" class="size-6"></i>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between p-6">
                                    <h3 class="text-2xl font-medium text-default-950">
                                        UI/UX Design
                                    </h3>
                                    <div
                                        class="flex size-12 cursor-pointer items-center justify-center rounded-md border border-default-200 bg-white/5 text-default-950 transition-all hover:bg-white hover:text-primary"
                                    >
                                        <i data-lucide="move-right" class="size-6"></i>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between p-6">
                                    <h3 class="text-2xl font-medium text-default-950">
                                        Branding
                                    </h3>
                                    <div
                                        class="flex size-12 cursor-pointer items-center justify-center rounded-md border border-default-200 bg-white/5 text-default-950 transition-all hover:bg-white hover:text-primary"
                                    >
                                        <i data-lucide="move-right" class="size-6"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- col End -->
                        </div>
                        <!-- grid End -->
                    </div>
                </div>
                <!-- col End -->

                <div class="relative overflow-hidden rounded-md">
                    <img
                        src="/images/landing/creative/img-3.jpg"
                        class="h-full w-full rounded-md"
                        alt=""
                    />
                    <div class="absolute inset-0 bg-black/60"></div>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>

    <!-- Start Testimonials -->
    <section class="py-10 lg:py-20">
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
                <div class="mx-auto">
                    <div class="relative z-10">
                        <div
                            class="absolute inset-y-0 -start-20 -z-10 hidden h-full w-full rounded-full border-2 border-default-200 sm:block"
                        ></div>
                        <img
                            src="/images/landing/creative/img-6.png"
                            class="rounded-full"
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
                                <div class="rounded-md bg-default-50 p-6">
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
                                    <p class="mt-4 text-base text-default-700">
                                        There are many variations of passages of Lorem Ipsum
                                        available but the maj have suffered alteration in some
                                        form, by injected humour, or randomis words which don't
                                        look even slightly believable. If you are going
                                    </p>
                                    <div class="mt-4 flex items-center gap-2">
                                        <i
                                            data-lucide="star"
                                            class="size-5 fill-current text-yellow-300"
                                        ></i>
                                        <i
                                            data-lucide="star"
                                            class="size-5 fill-current text-yellow-300"
                                        ></i>
                                        <i
                                            data-lucide="star"
                                            class="size-5 fill-current text-yellow-300"
                                        ></i>
                                        <i
                                            data-lucide="star"
                                            class="size-5 fill-current text-yellow-300"
                                        ></i>
                                        <i
                                            data-lucide="star"
                                            class="size-5 fill-current text-yellow-300"
                                        ></i>
                                    </div>
                                    <!-- flex End -->
                                </div>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <div class="rounded-md bg-default-50 p-6">
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
                                    <p class="mt-4 text-base text-default-700">
                                        Sed ut perspiciatis unde omnis iste nate error sitsau an
                                        voluptatem accusantium dolore mque laudantium, totamrem
                                        aperiam, inventore the ver quasi architecto again is there
                                        anyone who loves or pursues Variouses versions have
                                        evolved over the years.
                                    </p>
                                    <div class="mt-4 flex items-center gap-2">
                                        <i
                                            data-lucide="star"
                                            class="size-5 fill-current text-yellow-300"
                                        ></i>
                                        <i
                                            data-lucide="star"
                                            class="size-5 fill-current text-yellow-300"
                                        ></i>
                                        <i
                                            data-lucide="star"
                                            class="size-5 fill-current text-yellow-300"
                                        ></i>
                                        <i
                                            data-lucide="star"
                                            class="size-5 fill-current text-yellow-300"
                                        ></i>
                                        <i
                                            data-lucide="star"
                                            class="size-5 fill-current text-yellow-300"
                                        ></i>
                                    </div>
                                    <!-- flex End -->
                                </div>
                            </div>
                            <!-- swiper-slide End -->
                        </div>
                    </div>
                    <!--End Swiper -->
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>

    <!-- Start Faq -->
    <section class="py-10 lg:py-20" id="faq">
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
            <!-- flex End -->

            <div class="relative">
                <div class="hidden lg:block">
                    <div
                        class="before:absolute before:-start-10 before:-top-10 before:h-24 before:w-24 before:bg-[url('/public/images/other/dot.svg')]"
                    ></div>
                    <div
                        class="after:absolute after:-bottom-10 after:-end-10 after:h-24 after:w-24 after:bg-[url('/public/images/other/dot.svg')]"
                    ></div>
                </div>

                <div class="grid grid-cols-1 items-center gap-6 lg:grid-cols-2">
                    <div>
                        <div class="relative z-10">
                            <img
                                src="/images/landing/creative/img-2.jpg"
                                class="h-full rounded-md shadow lg:h-72"
                                alt=""
                            />
                        </div>
                        <div class="-mt-28 hidden xl:block">
                            <img
                                src="/images/landing/creative/img-7.jpg"
                                class="ms-auto h-72 rounded-md shadow"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- col End -->

                    <div>
                        <div class="hs-accordion-group space-y-4">
                            <div
                                class="hs-accordion overflow-hidden rounded-lg border border-default-200 bg-default-50 backdrop-blur-3xl"
                                id="faq-2"
                            >
                                <button
                                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                    aria-controls="faq-2"
                                >
                                    <h5 class="flex text-base font-medium">
                                        <i
                                            data-lucide="help-circle"
                                            class="me-3 size-5 stroke-default-950 align-middle"
                                        ></i>
                                        How do you stay updated with the latest trends in digital
                                        marketing?
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
                                        <p class="mb-2 text-sm">
                                            I regularly participate in industry webinars, attend
                                            conferences, and subscribe to leading digital marketing
                                            publications.
                                        </p>
                                        <p class="text-sm">
                                            Duis leo. Sed fringilla mauris sit amet nibh.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="hs-accordion overflow-hidden rounded-lg border border-default-200 bg-default-50 backdrop-blur-3xl"
                                id="faq-3"
                            >
                                <button
                                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                    aria-controls="faq-3"
                                >
                                    <h5 class="flex text-base font-medium">
                                        <i
                                            data-lucide="help-circle"
                                            class="me-3 size-5 stroke-default-950 align-middle"
                                        ></i>
                                        Can you provide examples of successful projects you've
                                        worked on?
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
                                        <p class="mb-2 text-sm">
                                            Certainly! I have a portfolio section on my website
                                            where you can find detailed case studies of some of my
                                            most successful projects. These case studies include
                                            data-driven results and client testimonials to give you
                                            a clear picture of my capabilities and achievements.
                                        </p>
                                        <p class="text-sm">
                                            Nullam dictum felis eu pede mollis pretium. Integer
                                            tincidunt. Cras dapibus.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="hs-accordion overflow-hidden rounded-lg border border-default-200 bg-default-50 backdrop-blur-3xl"
                                id="faq-2"
                            >
                                <button
                                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                    aria-controls="faq-2"
                                >
                                    <h5 class="flex text-base font-medium">
                                        <i
                                            data-lucide="help-circle"
                                            class="me-3 size-5 stroke-default-950 align-middle"
                                        ></i>
                                        How do you measure the success of a digital marketing
                                        campaign?
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
                                        <p class="mb-2 text-sm">
                                            I adhere to industry-standard security practices and use
                                            secure tools and platforms for data handling and
                                            communication. Your data is treated with the utmost
                                            confidentiality and is only used for the purposes of our
                                            digital marketing projects.
                                        </p>
                                        <p class="text-sm">
                                            Duis leo. Sed fringilla mauris sit amet nibh.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="hs-accordion active overflow-hidden rounded-lg border border-default-200 bg-default-50 backdrop-blur-3xl"
                                id="faq-1"
                            >
                                <button
                                    class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all"
                                    aria-controls="faq-accordion-1"
                                >
                                    <h5 class="flex text-base font-medium">
                                        <i
                                            data-lucide="help-circle"
                                            class="me-3 size-5 stroke-default-950 align-middle"
                                        ></i>
                                        How can I get in touch with you to discuss a potential
                                        project Design?
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
                                        <p class="mb-2 text-sm">
                                            Molestie at id integet venenatis, fermentum luctus.
                                            Ullamcorper, ac morbi augue laoreet aenean sit faucibus
                                            scelerisque. Interdum risus sagittis faucibus pharetra.
                                            Faucibus sed consectetur mattis nunc, feugiat.
                                        </p>
                                        <p class="text-sm">
                                            Nullam dictum felis eu pede mollis pretium. Integer
                                            tincidunt. Cras dapibus.
                                        </p>
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

            <div class="grid gap-6 xl:grid-cols-2">
                <div class="rounded-md border border-default-200 p-6">
                    <div class="grid items-center gap-6 sm:grid-cols-5">
                        <div class="col-span-2">
                            <img
                                src="/images/landing/creative/img-6.png"
                                class="my-auto h-full w-full rounded-md"
                                alt=""
                            />
                        </div>

                        <div class="group sm:col-span-3">
                            <h3 class="mb-4 mt-3 text-3xl font-medium text-default-950">
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
                                    class="inline-block size-4 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
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
                        <div class="group sm:col-span-3">
                            <h3 class="mb-4 mt-3 text-3xl font-medium text-default-950">
                                Investment monitor top 2023
                            </h3>
                            <p class="mb-5 mt-3 text-base">
                                Content king that means bringing and strategic approach.
                            </p>
                            <a
                                href="javascript:void(0);"
                                class="group text-lg font-medium text-default-950"
                            >Read More
                                <i
                                    data-lucide="move-right"
                                    class="inline-block size-4 opacity-0 transition-all duration-500 will-change-transform group-hover:translate-x-2 group-hover:opacity-100"
                                ></i>
                            </a>
                        </div>
                        <!-- col-span-2 End -->

                        <div class="col-span-2">
                            <img
                                src="/images/landing/creative/img-8.png"
                                class="my-auto h-full w-full rounded-md"
                                alt=""
                            />
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
@endsection

@section('script-bottom')

@endsection

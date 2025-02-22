@extends('layouts.landing', ['title' => 'Enoch and Mary Missions Organization'])

@section('css')

@endsection

@section('content')
@include('layouts.shared.navbar', [
'menuPosition' => 'fixed',
'navItems' => [
(object)['id' => 'home','name' => 'Home'],
(object)['id' => 'pricing','name' => 'Pricing'],
(object)['id' => 'services','name' => 'Services'],
(object)['id' => 'features','name' => 'Features'],
(object)['id' => 'testimonial','name' => 'Testimonial'],
(object)['id' => 'faq','name' => 'Faq'],
]
])

<!-- Hero Section Start -->
<section id="home" class="flex items-center justify-center bg-default-100 py-20 dark:bg-default-50 lg:py-44">
    <div class="container">
        <div class="grid grid-cols-1 gap-6 xl:grid-cols-2">
            <div>
                <span class="truncate border border-default-200 px-3 py-2 text-xs text-default-950 md:text-base">Limited-time offer until Friday: $1.99 per month</span>
                <h2 class="mt-5 text-4xl font-medium text-default-950 md:text-6xl/tight">
                    Place your trust in the world's no.1 web hosting provider.
                </h2>
                <p class="my-6 text-base">
                    Already have a website? Revive it with our industry-leading load
                    times.
                </p>
                <div class="flex items-center gap-6 pt-4">
                    <div class="relative z-20 w-60">
                        <div class="group">
                            <div class="w-full transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                                <a class="flex h-[68px] items-center justify-center bg-primary p-6 text-white transition-all duration-200 md:text-xl" href="#">
                                    $3.95 per month
                                </a>
                            </div>
                            <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                        </div>
                    </div>
                </div>
                <!-- flex End -->
            </div>
            <!-- col End -->

            <div>
                <img src="/images/landing/hosting/4.svg" alt="" />
            </div>
            <!-- col End -->
        </div>
        <!-- grid End -->
    </div>
    <!-- container End -->
</section>
<!-- Hero end -->

<!-- Start brands -->
<section class="py-10 lg:py-20">
    <div class="container">
        <!-- Swiper -->
        <div id="testimonial_directory" class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/images/brand/1.png" alt="" />
                </div>
                <!-- swiper-slide End -->

                <div class="swiper-slide">
                    <img src="/images/brand/2.png" alt="" />
                </div>
                <!-- swiper-slide End -->

                <div class="swiper-slide">
                    <img src="/images/brand/3.png" alt="" />
                </div>
                <!-- swiper-slide End -->

                <div class="swiper-slide">
                    <img src="/images/brand/4.png" alt="" />
                </div>
                <!-- swiper-slide End -->

                <div class="swiper-slide">
                    <img src="/images/brand/5.png" alt="" />
                </div>
                <!-- swiper-slide End -->

                <div class="swiper-slide">
                    <img src="/images/brand/1.png" alt="" />
                </div>
                <!-- swiper-slide End -->

                <div class="swiper-slide">
                    <img src="/images/brand/2.png" alt="" />
                </div>
                <!-- swiper-slide End -->

                <div class="swiper-slide">
                    <img src="/images/brand/3.png" alt="" />
                </div>
                <!-- swiper-slide End -->

                <div class="swiper-slide">
                    <img src="/images/brand/4.png" alt="" />
                </div>
                <!-- swiper-slide End -->

                <div class="swiper-slide">
                    <img src="/images/brand/5.png" alt="" />
                </div>
                <!-- swiper-slide End -->
            </div>
        </div>
        <!-- End Swiper -->
    </div>
    <!-- container End -->
</section>
<!-- End brands -->

<!-- Start Pricing -->
<section id="pricing" class="py-10 lg:py-20">
    <div class="container">
        <div class="mx-auto mb-12 max-w-xl text-center">
            <h2 class="text-3xl font-medium text-default-950 md:text-4xl">
                Our Pricing
            </h2>
        </div>

        <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 2xl:px-10">
            <div>
                <div class="relative mx-auto w-full lg:w-full">
                    <div class="group">
                        <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                            <div class="bg-white p-6 dark:bg-default-50">
                                <h5 class="text-center text-2xl font-medium text-default-950">
                                    Shared
                                </h5>
                                <p class="mt-1 text-center text-xs uppercase tracking-widest text-default-950">
                                    For individuals and teams
                                </p>
                                <div class="mt-6 flex items-center gap-4 bg-default-100 p-5 text-default-950">
                                    <h2 class="text-5xl font-semibold">
                                        <sup class="text-xl">$</sup>8
                                    </h2>
                                    <div>
                                        <p class="text-lg">Per editor,monthly</p>
                                        <p class="text-xs">With Unlimited email</p>
                                    </div>
                                </div>
                                <!-- End flex -->

                                <ul role="list" class="mt-3 text-sm text-default-700">
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Unlimited Email</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Unlimited Updates</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Free 5 host & domain</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">24/7 Dedicated Support</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Backing</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Up to 10 users monthly</span>
                                    </li>
                                </ul>
                                <!-- End list -->

                                <div class="relative z-20 mx-auto mt-5 w-full lg:w-56">
                                    <div class="group">
                                        <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2 group-hover:border-transparent">
                                            <div class="relative z-10 flex h-4 items-center justify-center bg-primary p-6">
                                                <a class="button bg-primary text-white" href="#">
                                                    Get Started
                                                </a>
                                            </div>
                                        </div>
                                        <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                    </div>
                    <!-- group end -->
                </div>
            </div>
            <!-- col end -->

            <div>
                <div class="relative mx-auto w-full lg:w-full">
                    <div class="group">
                        <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                            <div class="bg-white p-6 dark:bg-default-50">
                                <h5 class="text-center text-2xl font-medium text-default-950">
                                    Wordpress
                                </h5>
                                <p class="mt-1 text-center text-xs uppercase tracking-widest text-default-950">
                                    For individuals and teams
                                </p>
                                <div class="mt-6 flex items-center gap-4 bg-default-100 p-5 text-default-950">
                                    <h2 class="text-5xl font-semibold">
                                        <sup class="text-xl">$</sup>12
                                    </h2>
                                    <div>
                                        <p class="text-lg">For team,monthly</p>
                                        <p class="text-xs">team With 8 users</p>
                                    </div>
                                </div>
                                <!-- End flex -->

                                <ul role="list" class="mt-3 text-sm text-default-700">
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Unlimited Email</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Unlimited Updates</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Free 5 host & domain</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">24/7 Dedicated Support</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Backing</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Up to 30 users monthly</span>
                                    </li>
                                </ul>
                                <!-- End list -->

                                <div class="relative z-20 mx-auto mt-5 w-full lg:w-56">
                                    <div class="group">
                                        <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2 group-hover:border-transparent">
                                            <div class="relative z-10 flex h-4 items-center justify-center bg-primary p-6">
                                                <a class="button bg-primary text-white" href="#">
                                                    Get Started
                                                </a>
                                            </div>
                                        </div>
                                        <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                    </div>
                    <!-- group end -->
                </div>
            </div>
            <!-- col end -->

            <div>
                <div class="relative mx-auto w-full lg:w-full">
                    <div class="group">
                        <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                            <div class="bg-white p-6 dark:bg-default-50">
                                <h5 class="text-center text-2xl font-medium text-default-950">
                                    VPS
                                </h5>
                                <p class="mt-1 text-center text-xs uppercase tracking-widest text-default-950">
                                    For individuals and teams
                                </p>
                                <div class="mt-6 flex items-center gap-4 bg-default-100 p-5 text-default-950">
                                    <h2 class="text-5xl font-semibold">
                                        <sup class="text-xl">$</sup>37
                                    </h2>
                                    <div>
                                        <p class="text-lg">All users, monthly</p>
                                        <p class="text-xs">for Unlimited users</p>
                                    </div>
                                </div>
                                <!-- End flex -->

                                <ul role="list" class="mt-3 text-sm text-default-700">
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Unlimited Email</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Unlimited Updates</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Free 5 host & domain</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">24/7 Dedicated Support</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Backing</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <!-- svg icon -->
                                        <i data-lucide="dot" class="inline-block size-9 text-primary"></i>
                                        <span class="text-base text-default-950">Up to 80 users monthly</span>
                                    </li>
                                </ul>
                                <!-- End list -->

                                <div class="relative z-20 mx-auto mt-5 w-full lg:w-56">
                                    <div class="group">
                                        <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2 group-hover:border-transparent">
                                            <div class="relative z-10 flex h-4 items-center justify-center bg-primary p-6">
                                                <a class="button bg-primary text-white" href="#">
                                                    Get Started
                                                </a>
                                            </div>
                                        </div>
                                        <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                    </div>
                    <!-- group end -->
                </div>
            </div>
            <!-- col end -->

            <div class="lg:col-span-3">
                <div class="relative w-full lg:w-full">
                    <div class="group">
                        <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                            <div class="bg-white p-6 dark:bg-default-50">
                                <div class="grid gap-6 md:grid-cols-3">
                                    <div class="md:col-span-2">
                                        <h5 class="text-2xl font-medium text-default-950">
                                            Dedicated
                                        </h5>
                                        <p class="mt-2 text-xs uppercase tracking-widest text-default-950">
                                            For Businesses and large organisations.
                                        </p>

                                        <p class="w-3/4 py-5 text-base/7 font-medium text-default-600">
                                            For advanced security and more flexible contrals,the
                                            Enterprise plan helps you extend your design processes
                                            enterprise-wide.
                                        </p>
                                        <div class="flex items-center">
                                            <a href="javascript:void(0);" class="group inline-flex items-center text-lg font-semibold text-default-900">Learn more
                                                <i data-lucide="move-right" class="size-4 opacity-0 transition-all duration-500 group-hover:translate-x-2 group-hover:opacity-100"></i>
                                            </a>
                                        </div>
                                        <!-- End flex -->
                                    </div>
                                    <!-- col-span-2 end -->

                                    <div>
                                        <div class="flex items-center gap-4 bg-default-100 p-5 text-default-950">
                                            <h2 class="text-5xl font-semibold">
                                                <sup class="text-xl">$</sup>79
                                            </h2>
                                            <div>
                                                <p class="text-lg">All users, monthly</p>
                                                <p class="text-xs">for Unlimited users</p>
                                            </div>
                                        </div>
                                        <!-- End flex -->

                                        <div class="relative z-20 mx-auto mt-5 w-full lg:w-56">
                                            <div class="group">
                                                <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2 group-hover:border-transparent">
                                                    <div class="relative z-10 flex h-4 items-center justify-center bg-primary p-6">
                                                        <a class="button bg-primary text-white" href="#">
                                                            Get Started
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col end -->
                                </div>
                                <!-- grid end -->
                            </div>
                        </div>
                        <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                    </div>
                    <!-- group end -->
                </div>
            </div>
            <!-- col-span-3 end -->
        </div>
        <!-- grid end -->
    </div>
    <!-- container end -->
</section>
<!-- End Pricing -->

<!-- Start Services -->
<section id="services" class="py-10 lg:py-20">
    <div class="container">
        <div class="mx-auto mb-12 max-w-xl text-center">
            <h2 class="text-3xl font-medium text-default-950 md:text-4xl">
                Comprehensive Plan
            </h2>
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 2xl:grid-cols-3">
            <div class="relative order-1 mx-auto h-fit w-full">
                <div class="group">
                    <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                        <div class="bg-white p-6 text-center dark:bg-default-50">
                            <i data-lucide="navigation" class="inline-block size-12 text-default-950"></i>
                            <h2 class="mt-5 text-2xl font-medium text-default-950">
                                Domain name configuration
                            </h2>
                            <p class="mt-4 text-base">
                                Streamline the connection of your site to your domain name
                                with Vault.
                            </p>
                        </div>
                    </div>
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>
                <!-- group end -->
            </div>

            <div class="relative order-2 mx-auto h-fit w-full">
                <div class="group">
                    <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                        <div class="bg-white p-6 text-center dark:bg-default-50">
                            <i data-lucide="layers" class="inline-block size-12 text-default-950"></i>
                            <h2 class="mt-5 text-2xl font-medium text-default-950">
                                20/8 network security
                            </h2>
                            <p class="mt-4 text-base">
                                Enjoy peace of mind with constant network security for your
                                visitors.
                            </p>
                        </div>
                    </div>
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>
                <!-- group end -->
            </div>

            <div class="relative order-3 mx-auto h-fit w-full">
                <div class="group">
                    <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                        <div class="bg-white p-6 text-center dark:bg-default-50">
                            <i data-lucide="shield" class="inline-block size-12 text-default-950"></i>
                            <h2 class="mt-5 text-2xl font-medium text-default-950">
                                User-friendly control panel
                            </h2>
                            <p class="mt-4 text-base">
                                Effortlessly manage app installations and backups with the
                                industry-standard cPanel.
                            </p>
                        </div>
                    </div>
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>
                <!-- group end -->
            </div>

            <div class="relative mx-auto h-fit w-full 2xl:order-4">
                <div class="group">
                    <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                        <div class="bg-white p-6 text-center dark:bg-default-50">
                            <i data-lucide="table-2" class="inline-block size-12 text-default-950"></i>
                            <h2 class="mt-5 text-2xl font-medium text-default-950">
                                Scalable resources
                            </h2>
                            <p class="mt-4 text-base">
                                Easily boost your site's CPU/RAM for increased performance.
                            </p>
                        </div>
                    </div>
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>
                <!-- group end -->
            </div>

            <div class="relative order-4 mx-auto h-fit w-full 2xl:order-5">
                <div class="group">
                    <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                        <div class="bg-white p-6 text-center dark:bg-default-50">
                            <i data-lucide="folder-down" class="inline-block size-12 text-default-950"></i>
                            <h2 class="mt-5 text-2xl font-medium text-default-950">
                                Worldwide Data Centers
                            </h2>
                            <p class="mt-4 text-base">
                                Enhance page loading speed and improve the customer
                                experience with Vault hosting.
                            </p>
                        </div>
                    </div>
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>
                <!-- group end -->
            </div>

            <div class="relative mx-auto h-fit w-full 2xl:order-5">
                <div class="group">
                    <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                        <div class="bg-white p-6 text-center dark:bg-default-50">
                            <i data-lucide="bring-to-front" class="inline-block size-12 text-default-950"></i>
                            <h2 class="mt-5 text-2xl font-medium text-default-950">
                                click installation
                            </h2>
                            <p class="mt-4 text-base">
                                Simplify app integration effortlessly with Installatron.
                            </p>
                        </div>
                    </div>
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>
                <!-- group end -->
            </div>

            <div class="relative mx-auto h-fit w-full">
                <div class="group h-full">
                    <div class="h-full w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                        <div class="h-full bg-white p-6 text-center dark:bg-default-50">
                            <i data-lucide="file" class="inline-block size-12 text-default-950"></i>
                            <h2 class="mt-5 text-2xl font-medium text-default-950">
                                Submit Support Request
                            </h2>
                            <p class="mt-4 text-base">
                                Initiate a Support Request for Prompt Assistance and Timely
                                Resolution.
                            </p>
                        </div>
                    </div>
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>
                <!-- group end -->
            </div>

            <div class="relative mx-auto h-fit w-full">
                <div class="group">
                    <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                        <div class="bg-white p-6 text-center dark:bg-default-50">
                            <i data-lucide="layers" class="inline-block size-12 text-default-950"></i>
                            <h2 class="mt-5 text-2xl font-medium text-default-950">
                                Choose Site Transfer
                            </h2>
                            <p class="mt-4 text-base">
                                Streamline the migration process with added security
                                measures.
                            </p>
                        </div>
                    </div>
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>
                <!-- group end -->
            </div>

            <div class="relative mx-auto h-fit w-full">
                <div class="group">
                    <div class="w-full border border-default-200 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                        <div class="bg-white p-6 text-center dark:bg-default-50">
                            <i data-lucide="check" class="inline-block size-12 text-default-950"></i>
                            <h2 class="mt-5 text-2xl font-medium text-default-950">
                                Completion
                            </h2>
                            <p class="mt-4 text-base">
                                Your request is now fulfilled. Thank you for choosing us!
                            </p>
                        </div>
                    </div>
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>
                <!-- group end -->
            </div>
        </div>
        <!-- End grid -->
    </div>
    <!-- End container -->
</section>
<!-- End Services -->

<section class="py-10 lg:py-20">
    <div class="container">
        <div class="bg-default-100 dark:bg-default-50">
            <div class="bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat px-6 py-20 dark:bg-[url('/public/images/other/bg-lines-2-dark.png')]">
                <div class="mx-auto text-center">
                    <span class="text-sm uppercase text-default-950">Domain names</span>
                    <h2 class="mt-5 text-3xl font-medium text-default-950 md:text-4xl">
                        Every exceptional website deserves a remarkable name.
                    </h2>
                    <p class="mt-6 text-base text-default-950">
                        Your domain name is the address of your website. While <br />
                        .com names are widely favored, consider options like <br />
                        .org, .tech, .co, and beyond.
                    </p>
                    <form class="mx-auto mt-6 max-w-xl space-y-2">
                        <div class="relative">
                            <input type="email" id="subcribe" class="h-12 w-full border-default-200 bg-white py-4 pe-16 ps-4 text-default-950 focus:border-default-200 focus:ring-0 dark:bg-default-50" placeholder="Type Your Email" name="email" />
                            <button type="submit" class="absolute end-[6px] top-[6px] inline-flex h-9 items-center justify-center gap-2 px-3">
                                <i data-lucide="search" class="size-6 text-default-950"></i>
                            </button>
                        </div>
                    </form>
                    <!-- form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- End container -->
</section>

<section id="features" class="py-10 lg:py-20">
    <div class="container">
        <div class="grid items-center gap-6 md:grid-cols-2">
            <div>
                <img src="/images/landing/hosting/5.svg" alt="" />
            </div>
            <!-- col End -->

            <div>
                <span class="text-sm uppercase text-default-950">Trusted security</span>
                <h2 class="my-5 text-3xl font-medium text-default-950 md:text-4xl">
                    Reliable security right from the start.
                </h2>
                <p class="mb-5 text-base text-default-950">
                    Lorem ipsum originated from the scrambled, Latin text of Cicero's
                    1st-century BC work, De Finibus, and has since become ubiquitous
                    lorem ipsum.
                </p>
                <a href="#" class="group relative inline-flex items-center gap-2 text-xl text-primary">
                    <span class="absolute -bottom-0 h-px w-7/12 rounded bg-primary/80 transition-all duration-500 group-hover:w-full"></span>
                    Discover more by clicking here
                    <i data-lucide="move-right" class="size-5"></i>
                </a>
            </div>
            <!-- col End -->
        </div>
        <!-- grid End -->
    </div>
    <!-- container End -->
</section>

<section class="py-10 lg:py-20">
    <div class="container">
        <div class="grid items-center gap-6 md:grid-cols-2">
            <div>
                <span class="text-sm uppercase text-default-950">Site transfer</span>
                <h2 class="my-5 text-3xl font-medium text-default-950 md:text-4xl">
                    Seamless migration with lightning speed and zero downtime.
                </h2>
                <p class="mb-5 text-base text-default-950">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="#" class="group relative inline-flex items-center gap-2 text-xl text-primary">
                    <span class="absolute -bottom-0 h-px w-7/12 rounded bg-primary/80 transition-all duration-500 group-hover:w-full"></span>
                    Discover more by clicking here
                    <i data-lucide="move-right" class="size-5"></i>
                </a>
            </div>
            <!-- col End -->

            <div>
                <img src="/images/landing/hosting/3.svg" class="h-96" alt="" />
            </div>
            <!-- col End -->
        </div>
        <!-- grid End -->
    </div>
    <!-- container End -->
</section>

<!-- Start Testimonials -->
<section id="testimonial">
    <div class="container">
        <div class="bg-default-100 dark:bg-default-50">
            <div class="bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat py-20 dark:bg-[url('/public/images/other/bg-lines-2-dark.png')]">
                <div class="relative">
                    <!--Start Swiper -->
                    <div class="swiper testimonials relative">
                        <div class="mx-auto mb-12 max-w-2xl text-center">
                            <h2 class="text-3xl font-medium text-default-950 md:text-4xl">
                                Explore the feedback from our clients.
                            </h2>
                        </div>

                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="mx-auto max-w-4xl text-center">
                                    <div class="p-6">
                                        <!-- <div class="flex items-center gap-5"> -->
                                        <img src="/images/avatars/img-3.jpg" class="mx-auto size-14 rounded-full" alt="" />
                                        <h3 class="mt-5 text-xl font-medium text-default-950">
                                            Enagol Ame
                                        </h3>
                                        <p class="text-base">Brazil</p>
                                        <!-- </div> -->
                                        <p class="mt-4 md:text-2xl">
                                            "We've been utilizing Vault for the past five years.
                                            Vault is exceptional. It goes without saying that we
                                            are incredibly content with the outcomes. Training was
                                            not even necessary."
                                        </p>
                                        <div class="mt-4 flex items-center justify-center gap-2">
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                        </div>
                                        <!-- flex End -->
                                    </div>
                                </div>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <div class="mx-auto max-w-4xl text-center">
                                    <div class="p-6">
                                        <!-- <div class="flex items-center gap-5"> -->
                                        <img src="/images/avatars/img-1.jpg" class="mx-auto size-14 rounded-full" alt="" />
                                        <h3 class="mt-5 text-xl font-medium text-default-950">
                                            Rashed ka.
                                        </h3>
                                        <p class="text-base">Italy</p>
                                        <!-- </div> -->
                                        <p class="mt-4 md:text-2xl">
                                            "Setting up was incredibly straightforward. I had no
                                            prior experience with hosting, but Vault has made
                                            everything appear easy."
                                        </p>
                                        <div class="mt-4 flex items-center justify-center gap-2">
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                        </div>
                                        <!-- flex End -->
                                    </div>
                                </div>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <div class="mx-auto max-w-4xl text-center">
                                    <div class="p-6">
                                        <!-- <div class="flex items-center gap-5"> -->
                                        <img src="/images/avatars/img-2.jpg" class="mx-auto size-14 rounded-full" alt="" />
                                        <h3 class="mt-5 text-xl font-medium text-default-950">
                                            Jackma Kalin
                                        </h3>
                                        <p class="text-base">USA</p>
                                        <!-- </div> -->
                                        <p class="mt-4 md:text-2xl">
                                            "Vault is the next game-changing application. I'm at a
                                            loss for words. I'll definitely inform my mom about
                                            this; she could benefit greatly from using Vault!"
                                        </p>
                                        <div class="mt-4 flex items-center justify-center gap-2">
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                            <i data-lucide="star" class="size-5 stroke-yellow-300"></i>
                                        </div>
                                        <!-- flex End -->
                                    </div>
                                </div>
                            </div>
                            <!-- swiper-slide End -->
                        </div>
                    </div>
                    <!--End Swiper -->

                    <div class="absolute start-0 top-1/2 z-10 -translate-y-1/2 translate-x-1/2">
                        <div class="testimonials-button-prev">
                            <div class="relative">
                                <span class="absolute -start-1.5 top-1/2 -z-10 size-8 -translate-y-1/2 rounded-full border-2 border-primary"></span>
                                <i data-lucide="move-left" class="size-10 text-default-950"></i>
                            </div>
                        </div>
                    </div>
                    <div class="absolute end-0 top-1/2 z-10 -translate-x-1/2 -translate-y-1/2">
                        <div class="testimonials-button-next">
                            <div class="relative">
                                <span class="absolute -end-1.5 top-1/2 -z-10 size-8 -translate-y-1/2 rounded-full border-2 border-primary"></span>
                                <i data-lucide="move-right" class="size-10 text-default-950"></i>
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

<!-- Start Faq -->
<section id="faq" class="py-20">
    <div class="container">
        <div class="mx-auto mb-12 max-w-xl text-center">
            <h2 class="text-3xl font-medium text-default-950 md:text-4xl">
                Frequently Asked Questions ?
            </h2>
        </div>

        <div class="mx-auto max-w-4xl">
            <div class="hs-accordion-group space-y-4">
                <div class="relative z-20 w-full lg:w-full">
                    <div class="hs-accordion active overflow-hidden border border-default-200 bg-white transition-all duration-500 hs-accordion-active:-translate-y-2 hs-accordion-active:translate-x-2 dark:bg-default-50" id="faq-1">
                        <button class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all" aria-controls="faq-accordion-1">
                            <h5 class="text-xl font-medium">
                                How Do We Evaluate Different Criteria in Our Process?
                            </h5>
                            <i data-lucide="chevron-up" class="size-6 stroke-default-950 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-accordion-1" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-1">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-base">
                                    I am item content. Click edit button to change this text.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Ut elit tellus, luctus nec ullamcorper mattis, pulvinar
                                    dapibus leo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>

                <div class="relative z-20 w-full lg:w-full">
                    <div class="hs-accordion overflow-hidden border border-default-200 bg-white transition-all duration-500 hs-accordion-active:-translate-y-2 hs-accordion-active:translate-x-2 dark:bg-default-50" id="faq-2">
                        <button class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all" aria-controls="faq-2">
                            <h5 class="text-xl font-medium">
                                What Tools Can I Use to Create My Website?
                            </h5>
                            <i data-lucide="chevron-up" class="size-6 stroke-default-950 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-2" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-2">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-base">
                                    We work with businesses of various budgets and can create
                                    strategies that align with your financial resources while
                                    delivering meaningful results.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>

                <div class="relative z-20 w-full lg:w-full">
                    <div class="hs-accordion overflow-hidden border border-default-200 bg-white transition-all duration-500 hs-accordion-active:-translate-y-2 hs-accordion-active:translate-x-2 dark:bg-default-50" id="faq-3">
                        <button class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all" aria-controls="faq-3">
                            <h5 class="text-xl font-medium">
                                Can I Transfer an Existing Website to Your Hosting?
                            </h5>
                            <i data-lucide="chevron-up" class="size-6 stroke-default-950 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-3" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-3">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-base">
                                    provides a comprehensive range of digital services,
                                    including website design and development, digital
                                    marketing, search engine optimization
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>

                <div class="relative z-20 w-full lg:w-full">
                    <div class="hs-accordion overflow-hidden border border-default-200 bg-white transition-all duration-500 hs-accordion-active:-translate-y-2 hs-accordion-active:translate-x-2 dark:bg-default-50" id="faq-2">
                        <button class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all" aria-controls="faq-2">
                            <h5 class="text-xl font-medium">
                                How Can I Accept Online Credit Card Payments?
                            </h5>
                            <i data-lucide="chevron-up" class="size-6 stroke-default-950 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-2" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-2">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-base">
                                    Absolutely! We offer content creation services, including
                                    blog posts, social media content, and multimedia .
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>

                <div class="relative z-20 w-full lg:w-full">
                    <div class="hs-accordion overflow-hidden border border-default-200 bg-white transition-all duration-500 hs-accordion-active:-translate-y-2 hs-accordion-active:translate-x-2 dark:bg-default-50" id="faq-2">
                        <button class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-4 text-left capitalize text-default-950 transition-all" aria-controls="faq-2">
                            <h5 class="text-xl font-medium">
                                Are There Any Additional Requirements I Should Be Aware Of?
                            </h5>
                            <i data-lucide="chevron-up" class="size-6 stroke-default-950 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-2" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-2">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-base">
                                    Absolutely! We offer content creation services, including
                                    blog posts, social media content, and multimedia .
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col End-->
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>
            </div>
        </div>
        <!-- col End-->
    </div>
    <!-- container End-->
</section>
<!-- End faq -->

<section class="py-10 lg:py-20">
    <div class="container">
        <div class="mx-auto mb-12 max-w-xl text-center">
            <h2 class="text-3xl font-medium text-default-950 md:text-4xl">
                Didn't find the answer you were looking for?
            </h2>

            <div class="relative mx-auto mt-6 w-full lg:w-96">
                <div class="group">
                    <div class="w-full transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                        <div class="relative z-10 flex h-[68px] items-center justify-center bg-primary p-6">
                            <a class="bg-primary text-xl text-white" href="#">
                                Feel free to submit your question
                            </a>
                        </div>
                    </div>
                    <div class="absolute left-0 top-0 -z-10 h-full w-full bg-default-950"></div>
                </div>
            </div>
        </div>

        <div class="bg-default-100 dark:bg-default-50">
            <div class="bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat p-10 text-center dark:bg-[url('/public/images/other/bg-lines-2-dark.png')] md:p-20">
                <h2 class="text-3xl font-medium text-default-950 md:text-4xl">
                    Sign up today for top-notch web hosting services.
                </h2>

                <div class="mt-7 flex flex-wrap items-center justify-center gap-6">
                    <a href="#" class="group relative inline-flex items-center gap-2 text-default-950 hover:text-primary md:text-xl">
                        <span class="absolute -bottom-0 h-px w-7/12 rounded bg-default-50 transition-all duration-500 group-hover:w-full group-hover:bg-primary"></span>
                        Discover more by clicking here
                        <i data-lucide="move-right" class="size-5"></i>
                    </a>

                    <div class="relative">
                        <div class="group">
                            <div class="relative z-10 transition-all duration-500 group-hover:-translate-y-2 group-hover:translate-x-2">
                                <div class="bg-primary px-6 py-2">
                                    <a class="bg-primary text-xl text-white" href="#">
                                        Get Started
                                    </a>
                                </div>
                            </div>
                            <div class="absolute left-0 top-0 z-0 h-full w-full bg-default-950"></div>
                        </div>
                    </div>

                    <!-- <a href="#" class="inline-flex items-center justify-center gap-2 text-white py-2 px-6 bg-primary hover:bg-primary-500 transition-all duration-500">
                          Get Started
                        </a> -->
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('script-bottom')

@endsection
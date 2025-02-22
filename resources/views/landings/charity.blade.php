@extends('layouts.landing', ['title' => 'Joseph School'])

@section('css')

@endsection

@section('content')
    @include('layouts.shared.navbar-two', [
        'menuPosition' => 'fixed',
        'navItems' => [
            (object)['id' => 'home','name' => 'Home'],
            (object)['id' => 'join','name' => 'Join'],
            (object)['id' => 'causes','name' => 'Causes'],
            (object)['id' => 'blog','name' => 'Blog'],
            (object)['id' => 'contact','name' => 'Contact'],
            ]
        ])

    <!-- ======= hero start ======= -->
    <section
        id="home"
        class="relative bg-default-100 bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat py-24 dark:bg-default-50 dark:bg-[url('/public/images/other/bg-lines-2-dark.png')] lg:py-32"
    >
        <div
            class="flex items-center overflow-hidden before:absolute before:inset-0 before:left-[63.67%] before:hidden before:rounded-bl-3xl before:bg-primary/80 lg:before:block"
        >
            <div
                class="absolute -top-44 bottom-0 right-0 w-2/6 bg-contain bg-right bg-no-repeat"
                style="background-image: url(/images/landing/charity/bg-1.png)"
            ></div>

            <div class="container">
                <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
                    <div class="">
                        <div class="flex flex-col justify-center">
                            <h2
                                class="mb-4 text-2xl font-medium text-default-950 sm:text-3xl xl:text-5xl/tight"
                            >
                                Let's Collaborate and Achieve Greatness Together!
                            </h2>
                            <p class="mt-5 text-base">
                                Sed consequat, leo eget bibendum sodales, augue velit cursus
                                nunc, quis gravida magna mi a libero.
                            </p>
                            <div class="mt-10">
                                <a
                                    href="#"
                                    class="inline-flex items-center justify-center gap-2 rounded-md bg-primary px-8 py-2 text-base text-white transition-all duration-300 hover:bg-primary-700"
                                >Read More
                                    <i data-lucide="move-right" class="size-6"></i>
                                </a>
                            </div>
                        </div>
                        <!-- flex End -->
                    </div>

                    <div class="z-10">
                        <div class="tilt flex items-center gap-4 md:gap-6">
                            <div class="flex w-full flex-col gap-4 md:gap-6">
                                <img
                                    src="/images/landing/charity/img-1.jpg"
                                    class="h-full w-full rounded-lg object-cover"
                                    alt=""
                                />
                            </div>
                            <div
                                class="relative flex w-full flex-col gap-4 pb-10 md:gap-6 md:pb-16"
                            >
                                <img
                                    src="/images/landing/charity/img-2.jpg"
                                    class="h-40 w-full rounded-lg object-cover md:h-[278px]"
                                    alt=""
                                />
                                <img
                                    src="/images/landing/charity/img-3.jpg"
                                    class="h-40 w-full rounded-lg object-cover md:h-[278px]"
                                    alt=""
                                />
                            </div>
                        </div>
                        <!-- flex End -->
                    </div>
                </div>
                <!-- Grid End -->
            </div>
            <!-- Container End -->
        </div>
    </section>
    <!-- ======= hero end ======= -->

    <section class="relative -mt-40 py-10 md:-mt-32">
        <div class="container">
            <div
                class="mx-auto max-w-6xl rounded-xl bg-gradient-to-t from-default-50 via-default-100 to-default-200 shadow"
            >
                <div
                    class="grid divide-y divide-default-300 lg:grid-cols-3 lg:divide-x lg:divide-y-0"
                >
                    <div class="p-8">
                        <i data-lucide="book-copy" class="size-12 text-default-950"></i>
                        <h2 class="mt-5 text-xl font-medium text-default-950">
                            Nutritious Meals
                        </h2>
                        <p class="mt-4 text-base">
                            Praesent vestibulum dapibus nibh. Etiam iaculis nunc ac metus.
                        </p>
                        <div class="group mt-5">
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

                    <div class="p-8">
                        <i data-lucide="send" class="size-12 text-default-950"></i>
                        <h2 class="mt-5 text-xl font-medium text-default-950">
                            Pure Drinking Water
                        </h2>
                        <p class="mt-4 text-base">
                            Praesent vestibulum dapibus nibh. Etiam iaculis nunc ac metus.
                        </p>
                        <div class="group mt-5">
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

                    <div class="p-8">
                        <i data-lucide="book-copy" class="size-12 text-default-950"></i>
                        <h2 class="mt-5 text-xl font-medium text-default-950">
                            Quality Education
                        </h2>
                        <p class="mt-4 text-base">
                            Praesent vestibulum dapibus nibh. Etiam iaculis nunc ac metus.
                        </p>
                        <div class="group mt-5">
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
            </div>
        </div>
    </section>

    <section id="join" class="py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto max-w-2xl text-center">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >Starting with a Child</span
          >
                <h2 class="mt-4 text-3xl/snug font-medium text-default-950">
                    Starting with a Child
                </h2>
                <p class="mt-5 text-base">
                    Children growing up in poverty encounter significant challenges
                    education and healthcare, social discrimination, and isolation.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-2">
                        <div class="group relative h-full">
                            <img
                                src="/images/landing/charity/img-4.jpg"
                                class="h-full w-full rounded-xl"
                                alt=""
                            />

                            <div
                                class="opacity-0 transition-all duration-700 group-hover:opacity-100"
                            >
                                <div
                                    class="absolute inset-0 flex h-full items-center justify-center rounded-xl bg-black/50"
                                >
                                    <button
                                        class="relative flex size-20 items-center justify-center gap-2.5 rounded-full bg-primary text-base font-medium text-default-950 ring-4 ring-primary/25 transition-all duration-300 hover:bg-primary"
                                        data-hs-overlay="#watchvideomodal"
                                    >
                                        <i
                                            data-lucide="play"
                                            class="size-7 fill-white stroke-white"
                                        ></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-span-2 End -->

                    <div class="space-y-5">
                        <div class="group relative">
                            <img
                                src="/images/landing/charity/img-5.jpg"
                                class="rounded-xl"
                                alt=""
                            />

                            <div
                                class="opacity-0 transition-all duration-700 group-hover:opacity-100"
                            >
                                <div
                                    class="absolute inset-0 flex h-full items-center justify-center rounded-xl bg-black/50"
                                >
                                    <button
                                        class="relative flex size-14 items-center justify-center gap-2.5 rounded-full bg-primary text-base font-medium text-default-950 ring-4 ring-primary/25 transition-all duration-300 hover:bg-primary"
                                        data-hs-overlay="#watchvideomodal"
                                    >
                                        <i
                                            data-lucide="play"
                                            class="size-5 fill-white stroke-white"
                                        ></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- col End -->

                        <div class="group relative">
                            <img
                                src="/images/landing/charity/img-2.jpg"
                                class="rounded-xl"
                                alt=""
                            />

                            <div
                                class="opacity-0 transition-all duration-700 group-hover:opacity-100"
                            >
                                <div
                                    class="absolute inset-0 flex h-full items-center justify-center rounded-xl bg-black/50"
                                >
                                    <button
                                        class="relative flex size-14 items-center justify-center gap-2.5 rounded-full bg-primary text-base font-medium text-default-950 ring-4 ring-primary/25 transition-all duration-300 hover:bg-primary"
                                        data-hs-overlay="#watchvideomodal"
                                    >
                                        <i
                                            data-lucide="play"
                                            class="size-5 fill-white stroke-white"
                                        ></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- col End -->
                    </div>
                    <!-- col End -->
                </div>
                <!-- grid End -->
            </div>
        </div>
        <!-- Container End -->
    </section>

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

    <section
        class="bg-black bg-[url('/public/images/landing/charity/bg-2.png')] bg-bottom py-20"
    >
        <div class="container">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="text-center">
                    <h2 class="text-4xl font-medium text-white">20 Billion</h2>
                    <p class="mt-2 text-base text-white/80">Raised to Date</p>
                </div>
                <!-- col End -->

                <div class="text-center">
                    <h2 class="text-4xl font-medium text-white">123</h2>
                    <p class="mt-2 text-base text-white/80">Countries Impacting</p>
                </div>
                <!-- col End -->

                <div class="text-center">
                    <h2 class="text-4xl font-medium text-white">30K+</h2>
                    <p class="mt-2 text-base text-white/80">Volunteers</p>
                </div>
                <!-- col End -->

                <div class="text-center">
                    <h2 class="text-4xl font-medium text-white">218</h2>
                    <p class="mt-2 text-base text-white/80">Successful Projects</p>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- Container End -->
    </section>

    <!-- Start causes -->
    <section id="causes" class="py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto mb-12 max-w-2xl text-center">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >Highlighted Causes</span
          >
                <h2 class="mt-4 text-4xl/snug font-medium text-default-950">
                    Small Contributions
                </h2>
                <p class="mt-5 text-base">
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                    per inceptos hymenaeos.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                <div
                    class="group overflow-hidden rounded-lg border border-default-200"
                >
                    <div class="group relative overflow-hidden">
                        <div class="overflow-hidden">
                            <img
                                src="/images/landing/charity/img-6.jpg"
                                class="h-full w-full scale-[1.2] transition-all duration-500 group-hover:scale-[1.05]"
                                alt=""
                            />
                        </div>

                        <div class="p-6">
                            <h2
                                class="text-xl font-medium text-default-950 transition-all duration-500 group-hover:underline"
                            >
                                Providing Education for Everyone
                            </h2>
                            <p class="my-4 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing. Vivamus in
                                magna tellus fringilla eleifend.
                            </p>
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

                <div
                    class="group overflow-hidden rounded-lg border border-default-200"
                >
                    <div class="group relative overflow-hidden">
                        <div class="overflow-hidden">
                            <img
                                src="/images/landing/charity/img-3.jpg"
                                class="h-full w-full scale-[1.2] transition-all duration-500 group-hover:scale-[1.05]"
                                alt=""
                            />
                        </div>
                        <div class="p-6">
                            <h2
                                class="text-xl font-medium text-default-950 transition-all duration-500 group-hover:underline"
                            >
                                Feeding African Children
                            </h2>
                            <p class="my-4 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing. Vivamus in
                                magna tellus fringilla eleifend.
                            </p>
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

                <div
                    class="group overflow-hidden rounded-lg border border-default-200"
                >
                    <div class="group relative overflow-hidden">
                        <div class="overflow-hidden">
                            <img
                                src="/images/landing/charity/img-7.jpg"
                                class="h-full w-full scale-[1.2] transition-all duration-500 group-hover:scale-[1.05]"
                                alt=""
                            />
                        </div>
                        <div class="p-6">
                            <h2
                                class="text-xl font-medium text-default-950 transition-all duration-500 group-hover:underline"
                            >
                                Building a Brighter Future
                            </h2>
                            <p class="my-4 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing. Vivamus in
                                magna tellus fringilla eleifend.
                            </p>
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
            <!-- grid End -->

            <div
                class="mt-10 rounded-xl bg-default-100 p-10 dark:bg-default-50 lg:mt-20"
            >
                <div class="flex flex-wrap items-center justify-between gap-6">
                    <div>
                        <h2 class="text-3xl font-medium text-default-950">
                            Click the button to view all the causes.
                        </h2>
                    </div>
                    <div>
                        <a
                            href="#"
                            class="inline-flex items-center justify-center gap-2 rounded-full bg-primary px-8 py-2 text-lg text-white transition-all hover:bg-primary-700"
                        >See all campaigns
                            <i data-lucide="arrow-up-right" class="size-6"></i>
                        </a>
                    </div>
                </div>
                <!-- flex End -->
            </div>
        </div>
        <!-- Container End -->
    </section>
    <!-- End causes -->

    <!-- Start Testimonials -->
    <section class="pb-10 lg:pb-20">
        <div class="relative">
            <!--Start Swiper -->
            <div class="swiper testimonials_swiper relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="mx-auto max-w-4xl text-center">
                            <div class="group relative">
                                <div class="absolute inset-0 rounded-xl bg-black/60"></div>
                                <img
                                    src="/images/landing/charity/img-6.jpg"
                                    class="rounded-xl"
                                    alt=""
                                />

                                <div class="absolute inset-0 m-6 rounded-md bg-white/20">
                                    <div class="flex h-full items-center justify-center">
                                        <div class="text-default-950">
                                            <div class="flex justify-center">
                                                <i
                                                    data-lucide="badge-dollar-sign"
                                                    class="size-12 text-white"
                                                ></i>
                                            </div>
                                            <h2 class="mt-5 text-3xl font-medium text-white">
                                                Make a Contribution
                                            </h2>
                                            <p
                                                class="mx-auto mt-4 w-3/4 text-base font-medium text-white/90"
                                            >
                                                Children growing up in poverty encounter challenges
                                                such as hunger and malnutrition.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- fle End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="mx-auto max-w-4xl text-center">
                            <div class="group relative">
                                <div class="absolute inset-0 rounded-xl bg-black/50"></div>
                                <img
                                    src="/images/landing/charity/img-9.jpg"
                                    class="rounded-xl"
                                    alt=""
                                />

                                <div class="absolute inset-0 m-6 rounded-md bg-white/20">
                                    <div class="flex h-full items-center justify-center">
                                        <div class="text-default-950">
                                            <div class="flex justify-center">
                                                <i
                                                    data-lucide="hand"
                                                    class="size-12 text-white"
                                                ></i>
                                            </div>
                                            <h2 class="mt-5 text-3xl font-medium text-white">
                                                Become a Volunteer
                                            </h2>
                                            <p
                                                class="mx-auto mt-4 w-3/4 text-base font-medium text-white/90"
                                            >
                                                Children growing up in poverty encounter challenges
                                                like hunger and malnutrition.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- flex End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="mx-auto max-w-4xl text-center">
                            <div class="group relative">
                                <div class="absolute inset-0 rounded-xl bg-black/50"></div>
                                <img
                                    src="/images/landing/charity/img-10.jpg"
                                    class="rounded-xl"
                                    alt=""
                                />

                                <div class="absolute inset-0 m-6 rounded-md bg-white/20">
                                    <div class="flex h-full items-center justify-center">
                                        <div class="text-default-950">
                                            <div class="flex justify-center">
                                                <i
                                                    data-lucide="dollar-sign"
                                                    class="size-12 text-white"
                                                ></i>
                                            </div>
                                            <h2 class="mt-5 text-3xl font-medium text-white">
                                                Fundraising
                                            </h2>
                                            <p
                                                class="mx-auto mt-4 w-3/4 text-base font-medium text-white/90"
                                            >
                                                Children growing up in poverty face challenges such as
                                                hunger and malnutrition.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- flex End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="mx-auto max-w-4xl text-center">
                            <div class="group relative">
                                <div class="absolute inset-0 rounded-xl bg-black/60"></div>
                                <img
                                    src="/images/landing/charity/img-11.jpg"
                                    class="rounded-xl"
                                    alt=""
                                />

                                <div class="absolute inset-0 m-6 rounded-md bg-white/20">
                                    <div class="flex h-full items-center justify-center">
                                        <div class="text-default-950">
                                            <div class="flex justify-center">
                                                <i
                                                    data-lucide="indian-rupee"
                                                    class="size-12 text-white"
                                                ></i>
                                            </div>
                                            <h2 class="mt-5 text-3xl font-medium text-white">
                                                Make a Contribution
                                            </h2>
                                            <p
                                                class="mx-auto mt-4 w-3/4 text-base font-medium text-white/90"
                                            >
                                                Children growing up in poverty encounter challenges
                                                such as hunger and malnutrition.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- flex End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="mx-auto max-w-4xl text-center">
                            <div class="group relative">
                                <div class="absolute inset-0 rounded-xl bg-black/60"></div>
                                <img
                                    src="/images/landing/charity/img-6.jpg"
                                    class="rounded-xl"
                                    alt=""
                                />

                                <div class="absolute inset-0 m-6 rounded-md bg-white/20">
                                    <div class="flex h-full items-center justify-center">
                                        <div class="text-default-950">
                                            <div class="flex justify-center">
                                                <i
                                                    data-lucide="badge-dollar-sign"
                                                    class="size-12 text-white"
                                                ></i>
                                            </div>
                                            <h2 class="mt-5 text-3xl font-medium text-white">
                                                Make a Contribution
                                            </h2>
                                            <p
                                                class="mx-auto mt-4 w-3/4 text-base font-medium text-white/90"
                                            >
                                                Children growing up in poverty encounter challenges
                                                such as hunger and malnutrition.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- flex End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="mx-auto max-w-4xl text-center">
                            <div class="group relative">
                                <div class="absolute inset-0 rounded-xl bg-black/50"></div>
                                <img
                                    src="/images/landing/charity/img-9.jpg"
                                    class="rounded-xl"
                                    alt=""
                                />

                                <div class="absolute inset-0 m-6 rounded-md bg-white/20">
                                    <div class="flex h-full items-center justify-center">
                                        <div class="text-default-950">
                                            <div class="flex justify-center">
                                                <i
                                                    data-lucide="hand"
                                                    class="size-12 text-white"
                                                ></i>
                                            </div>
                                            <h2 class="mt-5 text-3xl font-medium text-white">
                                                Become a Volunteer
                                            </h2>
                                            <p
                                                class="mx-auto mt-4 w-3/4 text-base font-medium text-white/90"
                                            >
                                                Children growing up in poverty encounter challenges
                                                like hunger and malnutrition.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- flex End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->

                    <div class="swiper-slide">
                        <div class="mx-auto max-w-4xl text-center">
                            <div class="group relative">
                                <div class="absolute inset-0 rounded-xl bg-black/50"></div>
                                <img
                                    src="/images/landing/charity/img-10.jpg"
                                    class="rounded-xl"
                                    alt=""
                                />

                                <div class="absolute inset-0 m-6 rounded-md bg-white/20">
                                    <div class="flex h-full items-center justify-center">
                                        <div class="text-default-950">
                                            <div class="flex justify-center">
                                                <i
                                                    data-lucide="dollar-sign"
                                                    class="size-12 text-white"
                                                ></i>
                                            </div>
                                            <h2 class="mt-5 text-3xl font-medium text-white">
                                                Fundraising
                                            </h2>
                                            <p
                                                class="mx-auto mt-4 w-3/4 text-base font-medium text-white/90"
                                            >
                                                Children growing up in poverty face challenges such as
                                                hunger and malnutrition.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- flex End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide End -->
                </div>
                <div class="swiper-pagination !static mt-6"></div>
            </div>
            <!--End Swiper -->
        </div>
        <!-- col End -->
    </section>
    <!-- End Testimonials -->

    <section id="blog" class="py-10 lg:pb-20">
        <div class="container">
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div>
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >How You Can Make a Difference</span
            >
                    <h2 class="mt-4 text-4xl/snug font-medium text-default-950">
                        It's incredibly straightforward.
                    </h2>
                    <p class="mt-5 text-base">
                        Children growing up in poverty encounter significant challenges:
                        hunger and malnutrition, restricted access to education and
                        healthcare, social discrimination, and isolation.
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
                <!-- col End -->

                <div>
                    <div class="choose-image relative">
                        <img src="/images/landing/charity/img-8.png" alt="image" />

                        <div class="choose-image-shape hidden md:block">
                            <div
                                class="absolute left-0 top-0 z-10 animate-[moveLeftBounce_3s_linear_infinite]"
                            >
                                <img
                                    src="/images/landing/charity/bg-3.png"
                                    alt="image"
                                />
                            </div>
                            <div
                                class="absolute right-[-10%] top-2/4 -z-10 -translate-y-2/4 animate-[moveLeftBounce_3s_linear_infinite]"
                            >
                                <img
                                    src="/images/landing/charity/bg-4.png"
                                    alt="image"
                                />
                            </div>
                            <div
                                class="absolute bottom-[10%] left-[12%] -z-10 animate-[moveLeftBounce_3s_linear_infinite]"
                            >
                                <img
                                    src="/images/landing/charity/bg-5.png"
                                    alt="image"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- Container End -->
    </section>

    <section
        class="relative bg-[url('/public/images/landing/charity/img-3.jpg')] bg-cover bg-center bg-no-repeat py-20"
    >
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="container">
            <div class="relative mx-auto mb-12 max-w-2xl text-center">
                <h2 class="mt-4 text-4xl/snug font-medium text-white">
                    Stay Informed by Subscribing to Our Newsletter
                </h2>
                <p class="mt-5 text-base text-white/80">
                    Receive instant news by subscribing to our daily newsletter.
                </p>

                <form class="mx-auto mt-6 max-w-xl space-y-2">
                    <div class="relative">
                        <input
                            type="email"
                            id="subcribe"
                            class="h-12 w-full rounded-full border-default-200 bg-default-50 py-4 pe-16 ps-4 text-default-950 focus:border-default-200 focus:ring-0"
                            placeholder="Type Your Email"
                            name="email"
                        />
                        <button
                            type="submit"
                            class="absolute end-[6px] top-[6px] inline-flex h-9 items-center justify-center gap-2 rounded-full bg-primary px-6 text-white transition-all hover:bg-primary-700"
                        >
                            <i data-lucide="move-right" class="size-6"></i>
                        </button>
                    </div>
                </form>
                <!-- form End -->
            </div>
        </div>
        <!-- Container End -->
    </section>

    <section id="contact" class="py-10 lg:py-20">
        <div class="container">
            <div class="relative z-20">
                <div class="hidden xl:block">
                    <div
                        class="before:absolute before:-end-10 before:-top-10 before:-z-10 before:h-24 before:w-24 before:bg-[url('/public/images/other/dot.svg')]"
                    ></div>
                    <div
                        class="after:absolute after:-bottom-10 after:-start-10 after:-z-10 after:h-24 after:w-24 after:bg-[url('/public/images/other/dot.svg')]"
                    ></div>
                </div>

                <div class="grid gap-6 xl:grid-cols-2">
                    <div class="group relative">
                        <img
                            src="/images/landing/charity/img-11.jpg"
                            class="h-full w-full rounded-xl"
                            alt=""
                        />
                        <div class="absolute inset-0 rounded-xl">
                            <div class="flex h-full items-end justify-center">
                                <div
                                    class="m-6 mx-auto max-w-md rounded-xl bg-white/10 p-4 text-center backdrop-blur-xl"
                                >
                                    <h2 class="text-4xl/snug font-medium text-white">
                                        Would you like to support our mission?
                                    </h2>
                                    <p class="mt-5 text-base text-white/80">
                                        Complete the form and become a part of our community.
                                    </p>
                                </div>
                            </div>
                            <!-- flex  End -->
                        </div>
                    </div>
                    <!-- col End -->

                    <div>
                        <div class="rounded-md bg-default-100 p-8 dark:bg-default-50">
                            <form class="relative">
                                <h2 class="text-2xl font-medium text-default-950">
                                    Join Us Today!
                                </h2>
                                <div class="my-6 space-y-6">
                                    <div>
                                        <input
                                            type="text"
                                            class="block w-full rounded-full border-default-200 px-4 py-3 text-base text-default-950 focus:border-default-300 focus:ring-transparent dark:bg-default-50"
                                            id="formFirstName"
                                            placeholder="Your first name..."
                                            required=""
                                        />
                                    </div>
                                    <!-- col End -->

                                    <div>
                                        <input
                                            type="email"
                                            class="block w-full rounded-full border-default-200 px-4 py-3 text-base text-default-950 focus:border-default-300 focus:ring-transparent dark:bg-default-50"
                                            id="formEmail"
                                            placeholder="Your email..."
                                            required=""
                                        />
                                    </div>
                                    <!-- col End -->

                                    <div>
                                        <input
                                            type="text"
                                            class="block w-full rounded-full border-default-200 px-4 py-3 text-base text-default-950 focus:border-default-300 focus:ring-transparent dark:bg-default-50"
                                            id="formSubject"
                                            placeholder="Studying Class"
                                            required=""
                                        />
                                    </div>
                                    <!-- col End -->

                                    <div>
                                        <input
                                            type="text"
                                            class="block w-full rounded-full border-default-200 px-4 py-3 text-base text-default-950 focus:border-default-300 focus:ring-transparent dark:bg-default-50"
                                            id="formSubject"
                                            placeholder="Type Your Requirements"
                                            required=""
                                        />
                                    </div>
                                    <!-- col End -->
                                </div>
                                <!-- grid End -->

                                <button
                                    type="submit"
                                    class="flex w-full items-center justify-center rounded-full bg-primary py-3 text-base text-white transition-all hover:bg-primary-700"
                                >
                                    Submit Now
                                </button>
                            </form>
                            <!-- From End -->
                        </div>
                    </div>
                    <!-- col End -->
                </div>
                <!-- grid End -->
            </div>
        </div>
        <!-- Container End -->
    </section>
@endsection

@section('script-bottom')

@endsection

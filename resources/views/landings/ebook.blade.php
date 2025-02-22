@extends('layouts.landing', ['title' => 'Joseph School'])

@section('css')

@endsection

@section('content')
    @include('layouts.shared.navbar', [
        'menuPosition' => 'fixed',
        'navItems' => [
            (object)['id' => 'home','name' => 'Home'],
            (object)['id' => 'about','name' => 'About'],
            (object)['id' => 'benefits','name' => 'Benefits'],
            (object)['id' => 'courses','name' => 'Courses'],
            (object)['id' => 'testimonials','name' => 'Testimonials'],
            ]
        ])

    <!-- Hero Section Start -->
    <section
        id="home"
        class="relative flex items-center justify-center overflow-hidden bg-gradient-to-l from-primary-500/5 via-primary-500/0 to-primary-500/10 bg-cover pb-40 pt-40"
    >
        <div class="-z-1 absolute start-[10%] top-1/4 hidden 2xl:block">
            <img src="/images/landing/ebook/bg-2.png" class="h-28" alt="" />
        </div>

        <div class="container">
            <div
                class="relative grid grid-cols-1 items-center gap-6 xl:grid-cols-2"
            >
                <div class="col-span-1">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Digital Ebooks</span
            >
                    <h2
                        class="my-5 text-4xl font-medium text-default-950 md:text-5xl/tight"
                    >
                        Ebooks to Foster Your Personal and Professional Development
                    </h2>
                    <p class="mb-10 text-base text-default-950">
                        Our meticulously selected ebooks ensure a top-notch reading
                        journey, spanning across fiction, non-fiction, self-help, and
                        educational genres.
                    </p>
                    <div class="mt-10 flex flex-wrap items-center gap-6">
                        <a
                            href="#"
                            class="rounded-lg border border-primary bg-primary/90 px-8 py-2 text-lg text-white transition-all duration-300 hover:border-primary hover:bg-primary"
                        >Download Now</a
                        >
                        <a
                            href="#"
                            class="rounded-lg border border-primary px-8 py-2 text-lg font-medium text-primary transition-all duration-300 hover:border-primary hover:bg-primary hover:text-white"
                        >Browse Ebook</a
                        >
                    </div>
                    <!-- flex End -->
                </div>
                <div class="col-span-1">
                    <div class="flex items-end justify-center">
                        <div class="z-10 -me-40 hidden md:block">
                            <img
                                src="/images/landing/ebook/img-17.jpg"
                                class="h-60 rounded-bl-[90px] rounded-tr-[90px] border-4 border-default-100"
                                alt=""
                            />
                        </div>
                        <div class="relative">
                            <img
                                src="/images/landing/ebook/img-16.jpg"
                                class="h-[500px] rounded-t-full"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container End -->
    </section>
    <!-- Hero end -->

    <!-- About Start -->
    <section id="about" class="py-10 lg:py-20">
        <div class="container">
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div>
                    <img
                        src="/images/landing/ebook/img-15.jpg"
                        class="mx-auto h-[500px] rounded-xl"
                        alt=""
                    />
                </div>

                <div>
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >our About</span
            >
                    <h2 class="mt-5 text-4xl font-medium text-default-950">
                        About the Alchemist
                    </h2>
                    <p class="mt-4 text-base">
                        Lorem ipsum is simply Dummy text of the Printing and typesetting
                        industry. lorem is simply dummy text
                    </p>

                    <ul role="list" class="my-6 space-y-2">
                        <li class="flex items-center gap-2">
                            <!-- svg icon -->
                            <i
                                data-lucide="dot"
                                class="inline-block size-10 text-primary"
                            ></i>
                            <p class="text-base">
                                Lorem ipsum is smiply dummy text of the printing.
                            </p>
                        </li>
                        <li class="flex items-center gap-2">
                            <!-- svg icon -->
                            <i
                                data-lucide="dot"
                                class="inline-block size-10 text-primary"
                            ></i>
                            <p class="text-base">
                                Lorem ipsum is smiply dummy text of the printing and lorem
                                <br />
                                Donec posuere vulputate.
                            </p>
                        </li>
                        <li class="flex items-center gap-2">
                            <!-- svg icon -->
                            <i
                                data-lucide="dot"
                                class="inline-block size-10 text-primary"
                            ></i>
                            <p class="text-base">
                                Aenean at bibendum enim. In auctor consectetur urna.
                            </p>
                        </li>
                        <li class="flex items-center gap-2">
                            <!-- svg icon -->
                            <i
                                data-lucide="dot"
                                class="inline-block size-10 text-primary"
                            ></i>
                            <p class="text-base">
                                Lorem ipsum is smiply dummy text of the printing.
                            </p>
                        </li>
                    </ul>
                    <!-- End list -->

                    <a
                        href="#"
                        class="inline-flex items-center justify-center gap-2 rounded-md bg-primary/90 px-8 py-3 text-base text-white transition-all duration-500 hover:bg-primary"
                    >Read More
                        <i data-lucide="move-right" class="size-6"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Start -->

    <section id="benefits" class="py-10 lg:py-20">
        <div class="container">
            <div class="mx-auto max-w-2xl text-center">
          <span
              class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
          >Benefits</span
          >
                <h2
                    class="my-5 text-4xl font-medium text-default-950 md:text-4xl/tight"
                >
                    Discover your Benefits
                </h2>
                <p class="mb-10 text-base">
                    Plus, enjoy the convenience of offline access to our ebooks,
                    allowing you to read at your convenience, anytime, and anywhere.
                </p>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-6 lg:grid-cols-3">
                <div class="space-y-6">
                    <div>
                        <div
                            class="group rounded-xl bg-white p-6 drop-shadow-md dark:bg-default-50"
                        >
                            <div
                                class="flex size-14 items-center justify-center rounded-full bg-primary/10"
                            >
                                <i data-lucide="clapperboard" class="size-7 text-primary"></i>
                            </div>
                            <h2 class="mt-5 text-2xl font-medium text-default-950">
                                Cost-Effective Option
                            </h2>
                            <p class="mt-3 text-base">
                                Ebooks typically come at a lower price point compared to
                                printed books, making them accessible to a broader audience of
                                readers.
                            </p>
                            <div class="mt-5">
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
                    <!-- End col -->

                    <div>
                        <div
                            class="group rounded-xl bg-white p-6 drop-shadow-md dark:bg-default-50"
                        >
                            <div
                                class="flex size-14 items-center justify-center rounded-full bg-primary/10"
                            >
                                <i data-lucide="shield" class="size-7 text-primary"></i>
                            </div>
                            <h2 class="mt-5 text-2xl font-medium text-default-950">
                                Eco-Conscious Choice
                            </h2>
                            <p class="mt-3 text-base">
                                Ebooks are environmentally friendly as they are digital,
                                eliminating the need for paper, ink, and sustainable option
                                compared to print books.
                            </p>
                            <div class="mt-5">
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
                    <!-- End col -->
                </div>

                <div class="rounded-xl bg-white drop-shadow-md">
                    <img
                        src="/images/landing/ebook/img-1.jpg"
                        class="h-full w-full rounded-xl"
                        alt=""
                    />
                </div>

                <div class="space-y-6">
                    <div>
                        <div
                            class="group rounded-xl bg-white p-6 drop-shadow-md dark:bg-default-50"
                        >
                            <div
                                class="flex size-14 items-center justify-center rounded-full bg-primary/10"
                            >
                                <i data-lucide="layers" class="size-7 text-primary"></i>
                            </div>
                            <h2 class="mt-5 text-2xl font-medium text-default-950">
                                Enhanced Visibility
                            </h2>
                            <p class="mt-3 text-base">
                                Ebooks can be effortlessly searched and shared across the
                                internet, readers and enabling readers to discover new books
                                more readily.
                            </p>
                            <div class="mt-5">
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
                    <!-- End col -->

                    <div>
                        <div
                            class="group rounded-xl bg-white p-6 drop-shadow-md dark:bg-default-50"
                        >
                            <div
                                class="flex size-14 items-center justify-center rounded-full bg-primary/10"
                            >
                                <i data-lucide="user-check-2" class="size-7 text-primary"></i>
                            </div>
                            <h2 class="mt-5 text-2xl font-medium text-default-950">
                                Enhanced Convenience
                            </h2>
                            <p class="mt-3 text-base">
                                Ebooks have the capacity to incorporate interactive features
                                like videos, audio, and elevating the overall reading
                                experience.
                            </p>
                            <div class="mt-5">
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
                    <!-- End col -->
                </div>
            </div>

            <div class="mt-10 flex justify-center">
                <a
                    href="#"
                    class="inline-flex items-center justify-center gap-2 rounded-md bg-primary/90 px-8 py-3 text-base text-white transition-all duration-500 hover:bg-primary"
                >Read More
                    <i data-lucide="move-right" class="size-6"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Features Start -->
    <section id="courses" class="bg-default-100 py-10 lg:py-20">
        <div class="container">
            <div class="grid items-center gap-8 lg:grid-cols-5 lg:gap-12">
                <div class="order-2 lg:order-1 lg:col-span-2">
                    <img
                        src="/images/landing/ebook/img-5.jpg"
                        class="h-full w-full rounded-xl shadow-md"
                        alt=""
                    />
                </div>

                <div class="order-1 lg:order-2 lg:col-span-3">
                    <h2 class="text-4xl font-medium text-default-950">
                        Our Featured Courses
                    </h2>
                    <p class="font-me mt-4 text-base">
                        Lorem ipsum dolor sit amet, consectetur, adipiscing elit.
                        pellentesque quils arcu nisl. pellentesque quis arcu nisl.
                        pellentesque ac tortor et est dignissim vulputate. proin quis
                        sagittis est. phasellus dignissim dui et ipsum elementum, et
                        auctor risus posuere.
                    </p>

                    <div class="mt-6">
                        <div
                            class="overflow-hidden rounded-lg bg-white shadow-md dark:bg-default-50"
                        >
                            <div class="grid sm:grid-cols-5">
                                <div>
                                    <img
                                        src="/images/landing/ebook/img-2.jpg"
                                        class="h-full w-full"
                                        alt=""
                                    />
                                </div>

                                <div class="group p-6 sm:col-span-4">
                                    <h3
                                        class="cursor-pointer text-2xl font-medium text-default-950 transition-all hover:text-primary"
                                    >
                                        Digital Marketing Course
                                    </h3>
                                    <p class="mt-3 text-base text-default-950">Jane willow</p>
                                    <div class="mt-5 flex items-center justify-between">
                                        <p class="text-base text-default-950">June 13,2018</p>
                                        <div class="flex items-center gap-4">
                                            <a href="#">
                                                <i
                                                    data-lucide="clock-10"
                                                    class="size-5 transition-all hover:text-primary"
                                                ></i>
                                            </a>
                                            <a href="#">
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 transition-all hover:text-primary"
                                                ></i>
                                            </a>
                                            <a href="#">
                                                <i
                                                    data-lucide="airplay"
                                                    class="size-5 transition-all hover:text-primary"
                                                ></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- col-span-2 End -->
                            </div>
                            <!-- grid End -->
                        </div>
                        <!-- col End -->

                        <div
                            class="my-6 overflow-hidden rounded-lg bg-white shadow-md dark:bg-default-50"
                        >
                            <div class="grid sm:grid-cols-5">
                                <div>
                                    <img
                                        src="/images/landing/ebook/img-3.jpg"
                                        class="h-full w-full"
                                        alt=""
                                    />
                                </div>

                                <div class="group p-6 sm:col-span-4">
                                    <h3
                                        class="cursor-pointer text-2xl font-medium text-default-950 transition-all hover:text-primary"
                                    >
                                        Graphic Design Coures
                                    </h3>
                                    <p class="mt-3 text-base text-default-950">Stiven oswald</p>
                                    <div class="mt-5 flex items-center justify-between">
                                        <p class="text-base text-default-950">June 17,2018</p>
                                        <div class="flex items-center gap-4">
                                            <a href="#">
                                                <i
                                                    data-lucide="brush"
                                                    class="size-5 transition-all hover:text-primary"
                                                ></i>
                                            </a>
                                            <a href="#">
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 transition-all hover:text-primary"
                                                ></i>
                                            </a>
                                            <a href="#">
                                                <i
                                                    data-lucide="panel-right"
                                                    class="size-5 transition-all hover:text-primary"
                                                ></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- col-span-2 End -->
                            </div>
                            <!-- grid End -->
                        </div>
                        <!-- col End -->

                        <div
                            class="overflow-hidden rounded-lg bg-white shadow-md dark:bg-default-50"
                        >
                            <div class="grid sm:grid-cols-5">
                                <div>
                                    <img
                                        src="/images/landing/ebook/img-4.jpg"
                                        class="h-full w-full"
                                        alt=""
                                    />
                                </div>

                                <div class="group p-6 sm:col-span-4">
                                    <h3
                                        class="cursor-pointer text-2xl font-medium text-default-950 transition-all hover:text-primary"
                                    >
                                        Financial Analyst Course
                                    </h3>
                                    <p class="mt-3 text-base text-default-950">
                                        Andrew clarkson
                                    </p>
                                    <div class="mt-5 flex items-center justify-between">
                                        <p class="text-base text-default-950">June 24,2018</p>
                                        <div class="flex items-center gap-4">
                                            <a href="#">
                                                <i
                                                    data-lucide="clock-10"
                                                    class="size-5 transition-all hover:text-primary"
                                                ></i>
                                            </a>
                                            <a href="#">
                                                <i
                                                    data-lucide="star"
                                                    class="size-5 transition-all hover:text-primary"
                                                ></i>
                                            </a>
                                            <a href="#">
                                                <i
                                                    data-lucide="airplay"
                                                    class="size-5 transition-all hover:text-primary"
                                                ></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- col-span-2 End -->
                            </div>
                            <!-- grid End -->
                        </div>
                        <!-- col End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features End -->

    <!-- Start Testimonials -->
    <section id="testimonials" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Testimonials</span
            >
                    <h2 class="my-4 text-4xl font-medium text-default-950">
                        Success Stories
                    </h2>
                    <p class="text-base">
                        Uncover a realm of opportunities within our extensive ebook
                        collection.
                    </p>
                </div>
            </div>
            <!-- flex End -->

            <div class="mx-auto max-w-6xl">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-5">
                    <div class="col-span-2">
                        <div class="h-full w-full">
                            <img
                                src="/images/landing/ebook/img-18.png"
                                class="h-full max-w-full rounded-xl"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- col End -->

                    <div class="relative col-span-3">
                        <!--Start Swiper -->
                        <div class="swiper testimonials relative rounded-md">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="pt-3">
                                        <div class="flex items-center gap-6">
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
                                        <p class="mt-5 text-base">
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
                                    <div class="pt-3">
                                        <div class="flex items-center gap-6">
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
                                        <p class="mt-5 text-base">
                                            "Optimization and structure are excellent for SEO
                                            fundamentals. An impressive model, everything has been
                                            meticulously crafted, from the design to the various
                                            adaptations. A beautiful template with clean code that's
                                            easy to customize."
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
                            </div>
                        </div>
                        <!--End Swiper -->

                        <div class="hidden lg:block">
                            <div class="absolute bottom-0 start-0 z-10">
                                <div
                                    class="relative flex items-center justify-end gap-5 pe-10"
                                >
                                    <div class="testimonials-button-prev">
                                        <div
                                            class="flex size-10 items-center justify-center rounded-lg border border-default-300 bg-default-50/90 hover:bg-default-50"
                                        >
                                            <i
                                                data-lucide="chevron-left"
                                                class="size-6 stroke-default-950"
                                            ></i>
                                        </div>
                                    </div>
                                    <div class="testimonials-button-next">
                                        <div
                                            class="flex size-10 items-center justify-center rounded-lg border border-default-300 bg-default-50/90 hover:bg-default-50"
                                        >
                                            <i
                                                data-lucide="chevron-right"
                                                class="size-6 stroke-default-950"
                                            ></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- flex end -->
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
    <!-- End Testimonials -->

    <section class="bg-default-100 dark:bg-default-50">
        <div class="container">
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div>
                    <h2 class="text-4xl/tight font-medium text-default-950">
                        Elevate Your Life with Ebooks Authored by Experts
                    </h2>
                    <p class="mt-4 text-base">
                        Aenean posuere, tortor sed cursus feugiat, nunc augue blandit
                        nunc, eu sollicitudin and urna dolor sagittis lacus. Vestibulum
                        fringilla pede sit amet augue.
                    </p>
                    <div
                        class="mt-10 max-w-xl rounded-md bg-white backdrop-blur-2xl dark:bg-default-100"
                    >
                        <form class="flex w-full items-center justify-between">
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="w-full border-0 bg-transparent p-4 text-base text-default-950 placeholder:text-default-950 focus:outline-none focus:ring-0"
                                placeholder="Enter Your Email"
                                autocomplete="off"
                            />
                            <button
                                class="me-2 rounded-md border-0 bg-primary px-6 py-2 text-base font-semibold text-white backdrop-blur-2xl transition-all hover:bg-primary-700"
                            >
                                <div class="flex items-center justify-center gap-1">
                                    <span>Submit</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </button>
                        </form>
                        <!-- form End -->
                    </div>
                </div>
                <!-- col End -->

                <div>
                    <div class="mx-auto h-[495px] overflow-hidden">
                        <div class="marquee grid grid-cols-2 gap-4 lg:gap-0">
                            <div
                                class="relative m-auto flex flex-col gap-6 overflow-hidden"
                            >
                                <div
                                    class="marquee-hero flex h-full min-h-full flex-shrink-0 flex-col items-center justify-around gap-6"
                                >
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-6.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-7.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-8.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-9.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-10.jpg"
                                        alt=""
                                    />
                                </div>

                                <div
                                    aria-hidden="true"
                                    class="marquee-hero flex min-h-full flex-shrink-0 flex-col items-center justify-around gap-6"
                                >
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-6.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-7.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-8.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-9.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-10.jpg"
                                        alt=""
                                    />
                                </div>
                            </div>

                            <div
                                class="marquee-reverse m-auto flex flex-col gap-6 overflow-hidden"
                            >
                                <div
                                    class="marquee-hero flex min-h-full flex-shrink-0 flex-col items-center justify-around gap-6"
                                >
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-6.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-7.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-8.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-9.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-10.jpg"
                                        alt=""
                                    />
                                </div>

                                <div
                                    aria-hidden="true"
                                    class="marquee-hero flex min-h-full flex-shrink-0 flex-col items-center justify-around gap-6"
                                >
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-6.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-7.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-8.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-9.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="aspect-1 h-full w-60 object-cover"
                                        src="/images/landing/ebook/img-10.jpg"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- container End -->
    </section>
@endsection

@section('script-bottom')

@endsection

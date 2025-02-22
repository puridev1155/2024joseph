@extends('layouts.landing', ['title' => 'Enoch and Mary Missions Organization'])

@section('css')

@endsection

@section('content')
    @include('layouts.shared.navbar', [
        'menuPosition' => 'fixed',
        'navItems' => [
            (object)['id' => 'home','name' => 'Home'],
            (object)['id' => 'experts','name' => 'Experts'],
            (object)['id' => 'features','name' => 'Features'],
            (object)['id' => 'assets','name' => 'Assets'],
            (object)['id' => 'onboarding','name' => 'Onboarding'],
            ]
        ])

    <!-- Hero Section Start -->
    <section
        id="home"
        class="relative flex items-center justify-center overflow-hidden bg-gradient-to-l from-primary/5 via-primary/0 to-primary/10 bg-cover md:py-20"
    >
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 2xl:gap-20">
                <div class="pb-20 pt-[132px]">
                    <h2 class="text-3xl font-medium text-default-950 xl:text-5xl/tight">
                        A Financial Planning and Growth Platform for Entrepreneurs
                    </h2>
                    <p class="mt-6 sm:text-lg">
                        Pellentesque lectus, with neque cursus sapien, massa laoreet
                        varius. Ultricies faucibus donec tellus cras ornare. Aliquam
                        mattis neque sed sit arcu egestas quisque quisque.
                    </p>
                    <div class="mt-10 flex flex-wrap items-center gap-6">
                        <a
                            href="#"
                            class="inline-flex items-center justify-center gap-2 rounded-full bg-primary px-10 py-3 text-base text-white transition-all duration-300 hover:bg-primary-700"
                        >Get Started <i data-lucide="move-right" class="size-6"></i
                            ></a>
                        <button
                            class="group relative flex items-center justify-center gap-4 text-base"
                            data-hs-overlay="#watchvideomodal"
                        >
                <span
                    class="flex size-12 items-center justify-center gap-4 rounded-full bg-primary/40 text-base font-medium text-primary ring-4 ring-primary/20 transition-all duration-300 group-hover:bg-primary/80 group-hover:text-white"
                ><i data-lucide="play" class="size-5"></i
                    ></span>
                            <span class="text-base font-medium">See How it Works</span>
                        </button>
                    </div>
                    <!-- flex End -->
                </div>
                <!-- col End -->

                <div>
                    <div class="relative z-20 opacity-100">
                        <img
                            src="/images/landing/finance/img-1.png"
                            class="mx-auto h-[700px] rounded-b-full"
                            alt=""
                        />
                        <div class="absolute end-0 top-40 -z-10">
                            <img
                                src="/images/landing/finance/bg-1.png"
                                class="mx-auto h-[250px]"
                                alt=""
                            />
                        </div>
                        <div class="absolute inset-x-0 bottom-5 top-auto -z-10">
                            <img
                                src="/images/landing/finance/bg-2.png"
                                class="mx-auto h-[450px]"
                                alt=""
                            />
                        </div>

                        <div class="absolute bottom-0 end-0 z-20">
                            <div class="max-w-xs overflow-hidden rounded-md shadow">
                                <div class="swiper testimonials">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="relative">
                                                <div
                                                    class="relative rounded-md bg-white p-4 dark:bg-default-50"
                                                >
                                                    <div class="flex items-center gap-5">
                                                        <img
                                                            src="/images/avatars/img-1.jpg"
                                                            class="w-12 rounded-full"
                                                            alt=""
                                                        />
                                                        <div>
                                                            <h6 class="text-sm text-default-600">
                                                                Very convenient to use project manager!
                                                            </h6>
                                                            <p class="mt-2">
                                  <span
                                      class="flex items-center gap-1 text-base text-yellow-300"
                                  >
                                    <i
                                        data-lucide="star"
                                        class="size-5 fill-yellow-300"
                                    ></i>
                                    <i
                                        data-lucide="star"
                                        class="size-5 fill-yellow-300"
                                    ></i>
                                    <i
                                        data-lucide="star"
                                        class="size-5 fill-yellow-300"
                                    ></i>
                                    <i
                                        data-lucide="star"
                                        class="size-5 fill-yellow-300"
                                    ></i>
                                    <i data-lucide="star" class="size-5"></i>
                                  </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="absolute bottom-0 end-1">
                                                        <i
                                                            class="fa-solid fa-quote-right text-2xl text-orange-500/20"
                                                        ></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div
                                                class="relative rounded-md bg-white p-4 dark:bg-default-50"
                                            >
                                                <div class="flex items-center gap-5">
                                                    <div>
                                                        <img
                                                            src="/images/avatars/img-3.jpg"
                                                            class="w-14 rounded-full"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <div>
                                                        <h6 class="text-sm text-default-600">
                                                            Very convenient to use project manager!
                                                        </h6>
                                                        <p class="mt-2">
                                <span
                                    class="flex items-center gap-1 text-base text-yellow-300"
                                >
                                  <i
                                      data-lucide="star"
                                      class="size-5 fill-yellow-300"
                                  ></i>
                                  <i
                                      data-lucide="star"
                                      class="size-5 fill-yellow-300"
                                  ></i>
                                  <i
                                      data-lucide="star"
                                      class="size-5 fill-yellow-300"
                                  ></i>
                                  <i
                                      data-lucide="star"
                                      class="size-5 fill-yellow-300"
                                  ></i>
                                  <i data-lucide="star" class="size-5"></i>
                                </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
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
        <!-- container End -->
    </section>
    <!-- Hero end  -->

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

    <!-- Start marq -->
    <section>
        <div
            class="relative m-auto flex gap-28 overflow-hidden bg-default-100 py-4 dark:bg-default-50"
        >
            <div
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <h2 class="text-4xl text-default-950">UI-UX Experience</h2>
                <h2 class="text-4xl text-default-950">Web Development</h2>
                <h2 class="text-4xl text-default-950">Digital Marketing</h2>
                <h2 class="text-4xl text-default-950">Product Design</h2>
                <h2 class="text-4xl text-default-950">Mobile Solutions</h2>
            </div>
            <!-- marquee__group End-->

            <div
                aria-hidden="true"
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-28"
            >
                <h2 class="text-4xl text-default-950">UI-UX Experience</h2>
                <h2 class="text-4xl text-default-950">Web Development</h2>
                <h2 class="text-4xl text-default-950">Digital Marketing</h2>
                <h2 class="text-4xl text-default-950">Product Design</h2>
                <h2 class="text-4xl text-default-950">Mobile Solutions</h2>
            </div>
            <!-- marquee__group End-->
        </div>
        <!-- flex End -->
    </section>
    <!-- End marq Section -->

    <!-- Start -->
    <section id="experts" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-between">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our Experts</span
            >
                    <h2 class="mt-4 text-4xl font-medium text-default-950">
                        You're the expert in business; we're the numbers experts.
                    </h2>
                </div>
            </div>
            <!-- end flex -->

            <div class="grid gap-px overflow-hidden rounded-xl lg:grid-cols-2">
                <div class="bg-default-100 dark:bg-default-50">
                    <div class="p-8 sm:p-10">
                        <div class="mb-6 flex items-center gap-5">
                            <img
                                src="/images/avatars/img-1.jpg"
                                class="h-14 rounded-full"
                                alt=""
                            />
                            <div>
                                <a href="#">
                                    <h4 class="text-xl font-medium text-default-950">
                                        Eric Houston
                                    </h4>
                                </a>
                                <p class="text-base">Founder & CEO of Luminous</p>
                            </div>
                        </div>
                        <p class="text-base text-default-900">
                            "Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Donec quam felis, ultricies nec,
                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                            enim. Sed fringilla mauris sit amet nibh.Sed consequat."
                        </p>
                    </div>
                </div>
                <!-- end card -->

                <div class="bg-default-100 dark:bg-default-50">
                    <div class="p-8 sm:p-10">
                        <div class="mb-6 flex items-center gap-5">
                            <img
                                src="/images/avatars/img-3.jpg"
                                class="h-14 rounded-full"
                                alt=""
                            />
                            <div>
                                <a href="#">
                                    <h4 class="text-xl font-medium text-default-950">
                                        Robby Winston
                                    </h4>
                                </a>
                                <p class="text-base">CEO of Product</p>
                            </div>
                        </div>
                        <p class="text-base text-default-900">
                            "Vault's expert support enabled us to secure the necessary
                            capital for our expansion. Plus, it's quicker and more
                            cost-effective than hiring a consultant. Sed fringilla mauris
                            sit amet nibh.Sed consequat, leo eget bibendum sodales, augue
                            velit cursus nunc,"
                        </p>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end flex -->
        </div>
        <!-- end container -->
    </section>
    <!-- end -->

    <section id="features" class="pt-10 lg:pt-20">
        <div class="container">
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div>
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Highlighted Projects</span
            >
                    <h2 class="mt-4 text-4xl/tight font-medium text-default-950">
                        Streamline Data Integrations: Simplify finance with Vault
                    </h2>
                    <p class="mt-5 text-base text-default-900">
                        Save time on financial tasks by automating them with Vault.
                        Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                    <div class="group mt-5">
                        <a
                            href="javascript:void(0);"
                            class="inline-flex items-center justify-center gap-2 rounded-full bg-primary/20 px-4 py-2 text-sm text-primary transition-all duration-200 hover:bg-primary hover:text-white"
                        >Read More
                            <i data-lucide="move-right" class="inline-block size-6"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <img
                        src="/images/landing/finance/img-8.png"
                        class="h-full w-full rounded-lg"
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
                    <img
                        src="/images/landing/finance/img-9.png"
                        class="h-full w-full rounded-lg"
                        alt=""
                    />
                </div>

                <div>
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Investor ready reporting</span
            >
                    <h2 class="mt-4 text-4xl/tight font-medium text-default-950">
                        Streamline Data Integrations: Simplify finance with Vault
                    </h2>
                    <ul
                        role="list"
                        class="-ms-3 mt-6 space-y-2 ps-6 text-sm text-default-700"
                    >
                        <li class="flex items-center gap-3">
                            <i
                                data-lucide="circle"
                                class="inline-block size-2 shrink fill-primary text-primary"
                            ></i>
                            <span class="grow text-base font-medium"
                            >Demonstrate your firm grasp of business finances by having
                  instant access.</span
                            >
                        </li>
                        <li class="flex items-center gap-3">
                            <i
                                data-lucide="circle"
                                class="inline-block size-2 shrink fill-primary text-primary"
                            ></i>
                            <span class="grow text-base font-medium"
                            >Effortlessly collaborate with investors by sharing live
                  reports and models.</span
                            >
                        </li>
                        <li class="flex items-center gap-3">
                            <i
                                data-lucide="circle"
                                class="inline-block size-2 shrink fill-primary text-primary"
                            ></i>
                            <span class="grow text-base font-medium"
                            >Simplify investor collaboration by seamlessly sharing
                  real-time Sheets.</span
                            >
                        </li>
                    </ul>
                    <!-- End list -->
                    <div class="group mt-5">
                        <a
                            href="javascript:void(0);"
                            class="inline-flex items-center justify-center gap-2 rounded-full bg-primary/20 px-4 py-2 text-sm text-primary transition-all duration-200 hover:bg-primary hover:text-white"
                        >Read More
                            <i data-lucide="move-right" class="inline-block size-6"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 lg:py-20">
        <div class="container">
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div>
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Access Advisors</span
            >
                    <h2 class="mt-4 text-4xl/tight font-medium text-default-950">
                        Personalized Expert Support and Feedback
                    </h2>
                    <p class="mt-5 text-base">
                        Receive expert support and valuable feedback tailored to your
                        business's needs. Our advisors are here to help you navigate
                        financial challenges and make informed decisions.
                    </p>
                    <div class="group mt-5">
                        <a
                            href="javascript:void(0);"
                            class="inline-flex items-center justify-center gap-2 rounded-full bg-primary/20 px-4 py-2 text-sm text-primary transition-all duration-200 hover:bg-primary hover:text-white"
                        >Read More
                            <i data-lucide="move-right" class="inline-block size-6"></i>
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <img
                        src="/images/landing/finance/img-10.jpg"
                        class="rounded-xl"
                        alt=""
                    />
                    <div class="hidden lg:block">
                        <div class="absolute -end-20 -top-20">
                            <div class="max-w-md">
                                <div
                                    class="rounded-xl border border-default-200 bg-white p-6 dark:bg-default-50"
                                >
                                    <h2 class="text-xl font-medium text-default-950">
                                        Obtain Financing and Fundraising Advice
                                    </h2>
                                    <p class="mt-4 text-base">
                                        Schedule a free consultation with our financing and
                                        fundraising expert.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -bottom-8 -start-20">
                            <div class="inline-block">
                                <div
                                    class="rounded-xl border border-default-200 bg-white p-5 dark:bg-default-50"
                                >
                                    <h4 class="text-xl font-medium text-default-950">
                                        Priority Support
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start features -->
    <section id="" class="py-10 lg:py-20">
        <div class="container">
            <div class="mb-10 flex items-end justify-center">
                <div class="mx-auto max-w-2xl text-center">
            <span
                class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
            >Our Assets</span
            >
                    <h2 class="mt-4 text-4xl font-medium text-default-950">
                        Valuable Assets
                    </h2>
                </div>
            </div>
            <!-- end flex -->

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                <div
                    class="group overflow-hidden rounded-lg border border-default-200"
                >
                    <div class="group relative overflow-hidden">
                        <div class="overflow-hidden">
                            <img
                                src="/images/landing/finance/img-3.jpg"
                                class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1.05]"
                                alt=""
                            />
                        </div>

                        <div class="p-6">
                            <h2
                                class="text-xl font-medium text-default-950 transition-all duration-700"
                            >
                                10 Straightforward Techniques to Improve by 1% Daily
                            </h2>
                            <p class="my-4 text-base">
                                Customers are constantly seeking ways to enhance their lives.
                                Utilize this phrase as a substitute for...
                            </p>
                            <a
                                href="javascript:void(0);"
                                class="inline-flex items-center justify-center gap-2 rounded-full bg-primary/20 px-4 py-2 text-sm text-primary transition-all duration-200 hover:bg-primary hover:text-white"
                            >Read More
                                <i data-lucide="move-right" class="inline-block size-6"></i>
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
                                src="/images/landing/finance/img-4.jpg"
                                class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1.05]"
                                alt=""
                            />
                        </div>
                        <div class="p-6">
                            <h2
                                class="text-xl font-medium text-default-950 transition-all duration-700"
                            >
                                Explore 5 Astonishing Uses of Artificial Intelligence
                            </h2>
                            <p class="my-4 text-base">
                                Customers appreciate simplicity and perceive it as excellent
                                customer service. Customers strongly dislike complexity...
                            </p>
                            <a
                                href="javascript:void(0);"
                                class="inline-flex items-center justify-center gap-2 rounded-full bg-primary/20 px-4 py-2 text-sm text-primary transition-all duration-200 hover:bg-primary hover:text-white"
                            >Read More
                                <i data-lucide="move-right" class="inline-block size-6"></i>
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
                                src="/images/landing/finance/img-5.jpg"
                                class="h-full w-full scale-[1.2] transition-all duration-700 group-hover:scale-[1.05]"
                                alt=""
                            />
                        </div>
                        <div class="p-6">
                            <h2
                                class="text-xl font-medium text-default-950 transition-all duration-700"
                            >
                                This Long-Awaited Innovation Could Finally Transform the World
                            </h2>
                            <p class="my-4 text-base">
                                This phrase is a variation of "new and improved," indicating
                                that the product is the most up-to-date and advanced.
                            </p>
                            <a
                                href="javascript:void(0);"
                                class="inline-flex items-center justify-center gap-2 rounded-full bg-primary/20 px-4 py-2 text-sm text-primary transition-all duration-200 hover:bg-primary hover:text-white"
                            >Read More
                                <i data-lucide="move-right" class="inline-block size-6"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- col End -->
            </div>
            <!-- grid End -->
        </div>
        <!-- Container End -->
    </section>
    <!-- End features -->

    <!-- start -->
    <section id="onboarding" class="py-10 lg:py-20">
        <div class="container">
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div>
                    <div class="max-w-2xl">
              <span
                  class="rounded-md border border-primary bg-primary/20 px-3 py-1 text-xs font-medium uppercase tracking-wider text-primary"
              >Smooth Onboarding</span
              >
                        <h2 class="mt-4 text-4xl font-medium text-default-950">
                            Effortless Integrations for a Quick Start
                        </h2>
                        <p class="mt-5 text-base">
                            Link Vault with your current financial technology stack to
                            simplify data comprehension and decision-making.
                        </p>
                    </div>

                    <div class="mt-10 grid gap-6 sm:grid-cols-2 md:grid-cols-3">
                        <div class="rounded-xl border border-default-200 p-10">
                            <img src="/images/brand/1.png" alt=""/>
                        </div>
                        <div class="rounded-xl border border-default-200 p-10">
                            <img src="/images/brand/2.png" alt=""/>
                        </div>
                        <div class="rounded-xl border border-default-200 p-10">
                            <img src="/images/brand/3.png" alt=""/>
                        </div>
                        <div class="rounded-xl border border-default-200 p-10">
                            <img src="/images/brand/4.png" alt=""/>
                        </div>
                        <div class="rounded-xl border border-default-200 p-10">
                            <img src="/images/brand/5.png" alt=""/>
                        </div>
                        <div class="rounded-xl border border-default-200 p-10">
                            <img src="/images/brand/6.png" alt=""/>
                        </div>
                    </div>
                </div>

                <div class="relative lg:mb-0">
                    <div class="relative h-full">
                        <img
                            src="/images/landing/finance/img-6.jpg"
                            class="mx-auto h-full rounded-xl"
                            alt=""
                        />
                    </div>
                    <div class="absolute inset-x-0 -bottom-14 hidden sm:block">
                        <img
                            src="/images/landing/finance/img-7.png"
                            class="h-full rounded-xl"
                            alt=""
                        />
                    </div>
                </div>
                <!-- col End -->
            </div>
        </div>
    </section>
    <!-- end -->

    <section class="py-10 lg:py-20">
        <div class="container">
            <div
                class="rounded-lg bg-gradient-to-l from-primary/5 via-primary/0 to-primary/10 bg-cover shadow"
            >
                <div
                    class="bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat px-6 py-20"
                >
                    <div class="mx-auto max-w-2xl text-center">
                        <h2
                            class="mt-5 text-3xl font-medium text-default-950 md:text-4xl"
                        >
                            Obtain Your Customizable Financial Survival Plan.
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
                            </div>
                        </form>
                        <!-- form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End container -->
    </section>
@endsection

@section('script-bottom')

@endsection

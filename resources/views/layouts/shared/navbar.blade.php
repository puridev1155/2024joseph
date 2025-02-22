<!-- Main Navigation Menu -->
<header
    id="navbar"
    class="{{$menuPosition}} inset-x-0 top-0 z-60 transition-all duration-500 py-4 flex items-center bg-white dark:bg-default-50 lg:bg-transparent [&.nav-sticky]:bg-white/90 [&.nav-sticky]:backdrop-blur-3xl [&.nav-sticky]:shadow-md dark:[&.nav-sticky]:bg-default-50/80"
>
    <div class="container">
        <div class="flex items-center justify-between gap-4">
            <div class="shrink">
                <!-- Navbar Brand Logo -->
                <a href="">
                    <img
                        src="/images/logo-dark.png"
                        alt="logo"
                        class="flex h-10 dark:hidden"
                    />
                    <img
                        src="/images/logo-light.png"
                        alt="logo"
                        class="hidden h-10 dark:flex"
                    />
                </a>
            </div>

            <!-- Navigation Menu -->
            <ul
                class="menu relative mx-auto hidden grow items-center justify-center lg:flex">

                @foreach ($navItems as $item)
                    <li
                        class="menu-item mx-2 text-default-800 transition-all duration-300 hover:text-primary [&.active]:text-primary">
                        <a
                            class="inline-flex items-center rounded-full px-2 py-0.5 text-sm font-medium capitalize lg:text-base"
                            href="#{{$item->id}}"
                        >{{$item->name}}
                        </a>
                    </li>
                @endforeach


                <!-- Dropdown Menu -->
                <li class="menu-item group">
                    <div
                        class="hs-dropdown relative inline-flex [--trigger:hover] [--placement:bottom]"
                    >
                        <a
                            class="hs-dropdown-toggle inline-flex items-center rounded-full px-4 py-2 text-sm font-medium text-default-700 after:absolute after:inset-0 hover:text-primary group-hover:after:-bottom-16 lg:text-base"
                            href="javascript:void(0)"
                        >
                            Landing <i class="ms-2 size-4" data-lucide="chevron-down"></i>
                        </a>

                        <div
                            class="hs-dropdown-menu z-10 mt-4 hidden min-w-48 rounded-lg border border-default-100 bg-white p-1.5 opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                        >
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Agency</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Agency Two</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Charity</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Company</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Creative</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >eBook</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Finance</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Hosting</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Marketing</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Marketing Two</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Marketing Three</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Photography</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Portfolio</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Portfolio Two</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Startup</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                    >Web Designer</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="ms-auto inline-flex shrink gap-2">
                <a
                    href="/login/form"
                    class="inline-flex items-center gap-2 rounded-full bg-primary px-6 py-1.5 text-base text-white transition-all hover:bg-primary-700">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg>
                      
                    <span class="hidden sm:block">로그인</span>
                </a>
                <!-- Mobile Menu Toggle Button -->
                <button class="inline-block lg:hidden" data-hs-overlay="#mobile-menu">
                    <i
                        data-lucide="menu"
                        class="size-7 text-default-600 hover:text-default-900"
                    ></i>
                </button>
            </div>

        </div>
    </div>
</header>

<!-- Mobile Menu (Sidebar Menu) -->
<div
    id="mobile-menu"
    class="hs-overlay fixed bottom-0 left-0 top-0 z-[61] hidden h-screen w-full max-w-[270px] -translate-x-full transform border-r border-default-200 bg-white transition-all hs-overlay-open:translate-x-0 dark:bg-default-50"
    tabindex="-1"
>
    <div
        class="flex h-16 items-center justify-center border-b border-dashed border-default-200 transition-all duration-300"
    >
        <a href="">
            <img
                src="/images/logo-dark.png"
                alt="logo"
                class="flex h-10 dark:hidden"
            />
            <img
                src="/images/logo-light.png"
                alt="logo"
                class="hidden h-10 dark:flex"
            />
        </a>
    </div>
    <div class="h-[calc(100%-4rem)] overflow-y-auto">
        <nav class="hs-accordion-group flex h-full w-full flex-col flex-wrap p-4">
            <ul class="space-y-1">

                @foreach ($navItems as $item)
                    <li
                        class="rounded text-sm font-medium capitalize text-default-900 transition-all duration-300 hover:bg-default-100 hover:text-primary [&.active]:bg-default-100 [&.active]:text-primary">
                        <a class="block w-full px-4 py-2.5" href="#{{$item->id}}">
                            {{$item->name}}</a>
                    </li>
                @endforeach

                <li class="hs-accordion" id="landing-accordion">
                    <a
                        class="hs-accordion-toggle flex items-center rounded px-4 py-2.5 text-sm font-medium capitalize text-default-900 transition-all duration-300 hover:bg-default-100 hover:text-primary hs-accordion-active:bg-default-400/10 [&.active]:bg-default-100 [&.active]:text-primary"
                        href="javascript:;"
                    >
                        Landing
                        <i
                            data-lucide="chevron-down"
                            class="ms-auto size-5 transition-all hs-accordion-active:rotate-180"
                        ></i>
                    </a>

                    <div
                        id="landing-accordion"
                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height]"
                    >
                        <ul class="ps-2 pt-2">
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                        href=""
                                >Agency</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >Agency Two</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >Charity</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >Company</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >Creative</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >eBook</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >Finance</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >Hosting</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >Marketing</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >Marketing Two</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >Marketing Three</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >Photography</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >Portfolio</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >Portfolio Two</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >Startup</a
                                >
                            </li>
                            <li>
                                <a
                                    class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                    href=""
                                >Web Designer</a
                                >
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>

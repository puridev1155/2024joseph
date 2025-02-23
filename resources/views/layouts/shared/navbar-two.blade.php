<!-- Main Navigation Menu -->
<header
    id="navbar"
    class="{{$menuPosition}} inset-x-0 top-0 z-60 transition-all duration-500 py-4 flex items-center bg-white dark:bg-default-50 lg:bg-transparent [&.nav-sticky]:bg-white/90 [&.nav-sticky]:backdrop-blur-3xl [&.nav-sticky]:shadow-md dark:[&.nav-sticky]:bg-default-50/80"
>
    <div class="container">
        <div
            class="flex flex-wrap items-center justify-between gap-4 lg:flex-nowrap"
        >
            <div class="flex w-full items-center justify-between lg:w-auto">
                <!-- Navbar Brand Logo -->
                <a href="">
                    <div>
                        <div class="temp-logo relative inline-block">
                            <!-- Container for Ping Effect and Logo -->
                            <a href="/" class="block relative">
                                <img src="{{ asset('images/joseph_logo.png') }}" width="180" alt="Logo" class="relative">
                            </a>
                        </div>
                    </div>
                </a>

                <!-- Mobile Menu Toggle Button -->
                <button
                    class="hs-collapse-toggle inline-block lg:hidden"
                    id="hs-unstyled-collapse"
                    data-hs-collapse="#mobileMenu"
                    data-hs-type="collapse"
                >
                    <i
                        data-lucide="menu"
                        class="size-7 text-default-600 hover:text-default-900"
                    ></i>
                </button>
            </div>

    <style>
        /* Custom style to ensure visibility control if Tailwind doesn't work as expected */
                @media (max-width: 767px) {
            .lg-only { display: none !important; }
        }

        @media (min-width: 768px) {
            .mobile-only { display: none !important; }
        }
    </style>

            <div
                id="mobileMenu"
                class="hs-collapse mx-auto mt-2 hidden grow basis-full items-center justify-center overflow-hidden transition-all duration-300 lg:mt-0 lg:flex lg:basis-auto">
                <!-- Navigation Menu -->
            <nav class="mobile-only mt-2 h-screen">
                    <div class="grid grid-cols-2 sm:gap-x-4"><!--[-->
                    @foreach ($navItems as $item)
                    @if($item->name != '홈')
                    <div href="#" class="-m-3 flex rounded-lg p-3 hover:bg-gray-100">
                        <div class="ml-4 text-base font-medium text-gray-900 mb-5">
                            <p class="text-xl text-yellow-700">{{ $item->name }}</p>
                            @if (isset($item->subMenu))
                            <ul><!--[-->
                                @foreach ($item->subMenu as $subItem)
                                <li class="mt-1 text-lg py-1"><a href="{{ $subItem->url }}" class="">{{ $subItem->name }}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="text-center">
                    @guest
                    <a
                    href="https://www.youtube.com/@enochmarymissions"
                    class="inline-flex items-center px-11
                     rounded-full bg-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
                      </svg>
                    </a>
                    <a
                        href="/login/form"
                        class="inline-flex items-center px-11 rounded-full bg-primary py-1.5 text-base text-white transition-all hover:bg-primary-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                          </svg>
                    </a>
                    @else
                    <a
                    href="https://www.youtube.com/@enochmarymissions"
                    class="inline-flex items-center px-11 rounded-full bg-red-600 py-1.5 text-base text-white transition-all hover:bg-primary-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
                      </svg>
                    </a>
                    <a
                    href="/mypage"
                    class="inline-flex items-center px-11 rounded-full bg-primary py-1.5 text-base text-white transition-all hover:bg-primary-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg>
                </a>
                @endguest
            </div>
            </nav>
            <div class="lg-only">
                <ul
                    class="flex flex-col justify-center gap-y-10 lg:flex-row lg:items-center">

                    @foreach ($navItems as $item)
                    <li class="menu-item group text-default-800 lg:mx-2">
                        <div class="hs-dropdown relative inline-flex [--placement:bottom]">
                            <a
                                class="hs-dropdown-toggle inline-flex items-center rounded-full px-2 py-0.5 text-sm font-medium after:absolute after:inset-0 after:-bottom-20 hover:text-primary lg:text-base"
                                href="{{ $item->url }}"
                            >
                            {{ $item->name }} 
                            @if (isset($item->subMenu))
                                        <i class="ms-2 size-4" data-lucide="chevron-down"></i>
                            @endif
                            </a>

      
                            @if (isset($item->subMenu))
                            <div
                                class="hs-dropdown-menu z-10 mt-4 hidden min-w-48 rounded-lg border border-default-100 bg-white p-1.5 opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                            >
                                <ul class="grid grid-cols-2 gap-1">
                                    @foreach ($item->subMenu as $subItem)
                                    <li>
                                        <a
                                            class="flex items-center rounded px-3 py-2 text-sm font-medium text-default-600 transition-all hover:bg-default-400/10 hover:text-default-700"
                                            href="{{ $subItem->url }}"
                                        >{{ $subItem->name }}</a>
                                    </li>
                                    @endforeach
                                
                                </ul>
                            
                            </div>
                            @endif
                        </div>
                    </li>
                    @endforeach
                   
                

                    <!-- Dropdown Menu -->
                    <!-- -->
                </ul>
            </div>
            </div>

            <div class="ms-auto hidden shrink gap-2 lg:inline-flex">
                @guest
                <a
                href="/donation"
                class="inline-flex items-center gap-2 rounded-full bg-blue-600 px-6 py-1.5 text-base text-white transition-all hover:bg-primary-700">
                    <span class="hidden lg:block">후원하기</span>
                </a>
                <a
                href="https://www.youtube.com/@enochmarymissions"
                class="inline-flex items-center gap-2 rounded-full bg-red-600 px-6 py-1.5 text-base text-white transition-all hover:bg-primary-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
                  </svg>
                    <span class="hidden lg:block">유튜브 보기</span>
                </a>
                <a
                    href="/login/form"
                    class="inline-flex items-center gap-2 rounded-full bg-primary px-6 py-1.5 text-base text-white transition-all hover:bg-primary-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg>
                      
                    <span class="hidden sm:block">로그인</span>
                </a>
                @else
                <a
                href="/donation"
                class="inline-flex items-center gap-2 rounded-full bg-blue-600 px-6 py-1.5 text-base text-white transition-all hover:bg-primary-700">
                    <span class="hidden lg:block">후원하기</span>
                </a>
                <a
                href="https://www.youtube.com/@enochmarymissions"
                class="inline-flex items-center gap-2 rounded-full bg-red-600 px-6 py-1.5 text-base text-white transition-all hover:bg-primary-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
                  </svg>
                    <span class="hidden lg:block">유튜브 보기</span>
                </a>
                <a
                href="/mypage"
                class="inline-flex items-center gap-2 rounded-full bg-primary px-6 py-1.5 text-base text-white transition-all hover:bg-primary-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>
                  
                <span class="hidden lg:block">내정보</span>
            </a>
            @endguest
            </div>

        </div>
    </div>
</header>

@extends('layouts.base', ['title' => 'Joseph School'])

@section('css')

@endsection

@section('content')
@include('layouts.shared.navbar-two', [
    'menuPosition' => 'fixed',
    'navItems' => [
        (object)['id' => '홈','name' => '홈', 'url' => '/'],
        (object)['id' => '소개','name' => '소개', 'url' => '#', 'subMenu' => 
        [
            (object)['name' => '학교소개', 'url' => '/school'],
            (object)['name' => '교사소개', 'url' => '/school-organization'],
            (object)['name' => '커리큘럼', 'url' => '/school-curriculum'],
            
        ]],
        (object)['id' => '입학안내','name' => '입학안내', 'url' => '#', 'subMenu' => 
        [
            (object)['name' => '입학안내정보', 'url' => '/admission'],
        ]],
        (object)['id' => '공지사항','name' => '공지사항', 'url' => '/notice'],
        (object)['id' => '후원안내','name' => '후원안내', 'url' => '#', 'subMenu' => 
        [
            (object)['name' => '후원안내', 'url' => '/donation'],            
        ]],
        ]
    ])


<!-- SLIDER -->
<section
id="home"
class="bg-cover bg-no-repeat py-40"
style="background-image: url('{{ $slider[2]->getSliderUrl() }}');"
>
<div class="container">
    <div class="grid items-center gap-6 lg:grid-cols-2">
        <div>
            <div class="max-w-lg text-center lg:text-start">
                
                <img
                src="{{ $slider[0]->getSliderUrl() }}"
                class="h-full w-full"
                alt=""
            />
            </div>
        </div>

        <div>
            <a href="/scholarship-register"><img
                src="{{ $slider[1]->getSliderUrl() }}"
                class="h-full w-full"
                alt=""
            /></a>
        </div>
    </div>
    <!-- grid End -->
</div>
</section>
<!-- SLIDER END -->
<!-- Start NOTICE 3 COLUMN -->
<section id="causes" class="py-10 lg:py-20">
    <div class="container">
        <div class="mx-auto mb-12 max-w-2xl text-center">
            <span
            class="rounded-md bg-amber-200 px-3 py-1 text-md uppercase tracking-wider text-amber-500"
        >Scholarship Notice </span>
              <h2 class="mt-4 text-4xl/snug font-bold text-black-800">
               장학생 모집 공고             
              </h2>
        </div>
        

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
            @foreach($posts as $row)
                <div
                    class="group overflow-hidden rounded-lg border border-default-200 pb-4">
                    <a href="">
                    <div class="group relative overflow-hidden">
                        <div class="overflow-hidden">
                            <a href="/notice/{{$row->id}}">
                            <!-- { "738a7250-ab4d-465e-bf33-fa706eea35a5": "post-thumbnail\/1702887937-1.jpg" } -->
                            <img
                                src="{{ $row->getThumbnailUrl() }}"
                                class="h-full w-full scale-[0.94] transition-all duration-500 group-hover:scale-[1]"
                                alt=""
                            />
                            </a>
                            <div class="relative w-full h-full">
                                <span class="absolute bottom-4 left-0 bg-sky-500 text-white text-lg font-medium me-2 pl-1 pr-3 py-0.4 dark:bg-blue-900 dark:text-blue-300">
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute p-1 size-7">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                      </svg>
                                      <!-- <span class="ml-7"></span>{{ $row->created_at }} -->
                                </span>
                            </div>
                        
                        </div>
                    
                        <div class="p-6 text-center">

                            <h2
                                class="text-2xl font-bold text-default-950 transition-all duration-500 mb-2"
                            >
                            {{ $row->title }} 1
                            </h2>
                            <a href="#" class="mr-2 text-sm font-medium text-slate-500">공지사항 <span class="px-2 text-slate-400">/</span> 관리자</a>

                        </div>
                    </div>
                    </a>
                </div>
                <!-- col End -->
            @endforeach
            <!-- col End -->
        </div>
        <!-- grid End -->
    </div>
    <!-- Container End -->
</section>
<!-- End causes -->


<!-- Start About -->
<section id="projects" class="overflow-hidden py-10 bg-slate-50 bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat px-6 py-20 dark:bg-default-50 dark:bg-[url('/public/images/other/bg-lines-2-dark.png')]">
    <div class="container">
        <div
            class="relative overflow-hidden rounded-3xl bg-white shadow-[rgba(17,_17,_26,_0.1)_0px_0px_24px] dark:bg-default-50"
        >
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <div class="relative p-6 py-16 text-center">
                    <span
                    class="rounded-md bg-amber-200 px-3 py-1 text-md uppercase tracking-wider text-amber-500"
                >Registeration</span>
                      <h2 class="mt-4 text-4xl/snug font-bold text-black-800">
                          장학금 신청서
                      </h2>
                    <p class="mb-8 mt-5 text-xl text-neutral-500">
                        꿈이 있는 목회자 및 선교사 자녀들과 일반 청소년들을 <br />선발하여 장학금을 수여합니다. 참여하세요.


                    </p>
                    <a
                        href="/scholarship-register"
                        class="inline-flex text-lg items-center justify-center gap-2 rounded-md bg-amber-200 px-6 py-2 text-amber-600 transition-all duration-300 hover:bg-amber-400"
                    ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                      </svg>
                       신청하러 가기 
                        <i data-lucide="move-right" class="size-6"></i>
                    </a>
                </div>
                <img
                    src="{{ $slider[3]->getSliderUrl() }}"
                    class="h-full w-full"
                    alt=""
                />
            </div>
        </div>
    </div>
</section>
<!-- End About -->
<section class="overflow-hidden py-10 pt-20">
    <div class="container">
        <div
            class="relative overflow-hidden rounded-3xl bg-white shadow-[rgba(17,_17,_26,_0.1)_0px_0px_24px] dark:bg-default-50"
        >
            <div class="grid items-center gap-6 lg:grid-cols-2">
                <img
                    src="{{ $slider[4]->getSliderUrl() }}"
                    class="h-full w-full"
                    alt=""
                />

                <div class="relative p-6 py-16 text-center">
                    <span
                    class="rounded-md bg-emerald-100 px-3 py-1 text-md uppercase tracking-wider text-emerald-600"
                >Support</span>
                      <h2 class="mt-4 text-4xl/snug font-bold text-black-800">
                        후원하기
                          
                      </h2>
                              <p class="mb-8 mt-5 text-xl font-bold text-black">
                                우리은행 1005-104-249618 (에녹메리선교회)
                              </p>
                              <a
                                  href="/donation"
                                  class="inline-flex text-lg items-center justify-center gap-2 rounded-md bg-emerald-600 px-6 py-2 text-white transition-all duration-300 hover:bg-amber-300"
                              ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                              </svg> 후원하러 가기 <i data-lucide="move-right" class="size-6"></i>
                              </a>
                              
                          </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Start -->
<section id="portfolio" class="py-10 lg:py-20">
    <div class="container">
        <div class="flex flex-wrap items-center justify-between gap-5">
            <div>
                <div class="mx-auto max-w-2xl">
                    <h2 class="mb-4 text-4xl font-bold text-default-950">
                        졸업 기수
                    </h2>
                    <p class="text-xl text-neutral-500">
                        에녹메리선교회가 전액 후원하는 다음세대 인재양육 프로그램 엔젤리더스 졸업생
                    </p>
                </div>
            </div>
            <div>
                <a
                href="/leader-graduate#"
                class="inline-flex text-lg items-center justify-center gap-2 rounded-md bg-white-200 px-6 py-2 text-amber-600 bg-slate-100 transition-all duration-300 hover:bg-amber-300"
            ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
              </svg>
               기수별 더보기
                <i data-lucide="move-right" class="size-6"></i>
            </a>
            </div>
        </div>
        <!-- flex End -->
    </div>
    <!-- container End -->

    <div class="mt-14">
        <div class="relative m-auto flex gap-8 overflow-hidden">
            <div
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-8"
            >
            @foreach($graduates as $row)
                <img
                class="h-80 w-full object-cover"
                src="{{ $row->getThumbnailUrl() }}"
                alt=""
            />
            @endforeach
            </div>
            <!-- marquee__group End -->

            <div
                aria-hidden="true"
                class="marquee__group flex min-w-full flex-shrink-0 items-center justify-around gap-8"
            >
            @foreach($graduates as $row)
                <img
                class="h-80 w-full object-cover"
                src="{{ $row->getThumbnailUrl() }}"
                alt=""
                />
            @endforeach
            </div>
            <!-- marquee__group End -->
        </div>
        <!-- flex End -->

    </div>
    <!-- flex End -->
</section>
<!-- Section end -->

<section id="blog" class="py-10 lg:pb-20">
    <div class="container">
        <div class="grid items-center gap-6 lg:grid-cols-2">
            <div>
                <span
                class="rounded-md bg-amber-200 px-3 py-1 text-md uppercase tracking-wider text-amber-500"
            >Marriage Story of Mary</span>
                  <h2 class="mt-4 text-4xl/snug font-bold text-black-800">
                    메리의 결혼 이야기               
                  </h2>
                <p class="mt-5 mr-20 text-xl text-neutral-500">
                    조선시대도 아닌 21세기에 메리는 왜 처음 만난 사람과 결혼을 결심하고, 6개월 만에 결혼한 것일까? 『메리의 결혼이야기』는 
                    하나님께서 준비하시고 인도하신 배우자를 발견하고, 자신의 지.정.의를 죽이고 하나님의 뜻을 따라가는 양메리의 삶과 신앙의 이야기가 담겨 있다.
                </p>
                <div class="mt-10">
                    <a
                                  href="{{ $books[1]->url }}"
                                  class="inline-flex text-lg items-center justify-center gap-2 rounded-md bg-emerald-600 px-6 py-2 text-white transition-all duration-300 hover:bg-amber-300"
                              >구매하기 <i data-lucide="move-right" class="size-6"></i>
                              </a>
                </div>
            </div>
            <!-- col End -->

            <div>
                <div class="choose-image relative">
                    <div class="ml-40">
                    <img src="{{ $books[1]->getBookUrl() }}" width="70%" alt="image" />
                    </div>
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
<!-- 섹션 2번쨰 -->


    
<footer>
    <div class="border-y border-default-200">
        <div class="container py-20">
            <div class="grid xl:grid-cols-5 md:grid-cols-3 gap-10 lg:gap-16">
                <div class="xl:col-span-2 md:col-span-3">
                    <div>
                        <a href="#">
                            <img src="{{ asset('images/logo.png') }}" width="180" alt="Logo">
                        </a>
                        <p class="text-base font-medium  text-default-800 mt-6">에녹메리선교회 장학금 신청은 회원가입 이후에 가능합니다. 아래 버튼을 클릭하여 가입하세요.</p>
                        <p class="text-base font-medium  text-default-800 mt-6">우리은행 1005-104-249618 (에녹메리선교회)</p>
                        <div class="relative mt-5">
                            <a href="/registration/form" class="inline-flex text-lg items-center justify-center gap-2 rounded-md bg-primary px-8 py-2 text-white transition-all hover:bg-primary-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z"></path>
                              </svg>
                               회원가입 하기
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="move-right" class="lucide lucide-move-right size-6"><path d="M18 8L22 12L18 16"></path><path d="M2 12H22"></path></svg>
                            </a>
                        </div>
                    </div>
                </div><!-- col End -->

                <div class="">
                    <ul class="flex flex-col gap-3">
                        <h5 class="xl:text-xl lg:text-lg font-medium text-default-800 mb-2">Mission</h5>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">선교회</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">장학회</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">엔젤리더스</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">게시판</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">후원안내</a>
                        </li>
                    </ul>
                </div><!-- col End -->

                <div class="">
                    <ul class="flex flex-col gap-3">
                        <h5 class="xl:text-xl lg:text-lg font-medium text-default-800 mb-2">Social Media</h5>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-5 group">
                                <a href="https://pf.kakao.com/_MSxcmG" class="relative">
                                <img src="images/kakao_icon.png" width="40px" class="absolute" />
                                <h5 class="text-base font-medium text-default-800 ml-14 mt-2">카카오톡 채널</h5>
                                </a>
                            </li>
                            <li class="flex items-center gap-5 group">
                                <a href="https://youtube.com/@enochmarymissions?feature=shared" class="relative">
                                <img src="images/youtube_icon.png" width="40px" class="absolute mt-2" />
                                <h5 class="text-base font-medium text-default-800 ml-14 mt-4">유튜브 채널</h5>
                                </a>
                            </li>
                        </ul>
                    </ul>
                </div><!-- col End -->

                <div class="">
                    <ul class="flex flex-col gap-3">
                        <h5 class="xl:text-xl lg:text-lg font-medium text-default-800 mb-2">Legal &amp; Term</h5>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div><!-- col End -->
            </div><!-- grid End -->
        </div><!-- Container End -->
    </div>

    <div class="py-4">
        <div class="container flex flex-wrap justify-center items-center h-full md:justify-between text-center md:text-start">
            <p class="text-base font-medium text-default-800">
                <script>document.write(new Date().getFullYear())</script>
                © Enoch & Mary Missions Organization</a>
            </p>
            <p class="text-base font-medium text-default-800">
                <a href="#">Terms Conditions &amp; Policy</a>
            </p>
        </div><!-- Flex End -->
    </div>
</footer>
@endsection

@section('script-bottom')
@vite(['resources/js/swiper.js'])
@endsection

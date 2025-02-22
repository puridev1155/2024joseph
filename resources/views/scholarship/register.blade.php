@extends('layouts.base', ['title' => 'Joseph School'])

@section('css')

@endsection

@section('content')
@include('layouts.shared.navbar-two', [
    'menuPosition' => 'fixed',
    'navItems' => [
        (object)['id' => '홈','name' => '홈', 'url' => '/'],
        (object)['id' => '선교회','name' => '선교회', 'url' => '#', 'subMenu' => 
        [
            (object)['name' => '소개', 'url' => '/mission'],
            (object)['name' => '조직도', 'url' => '/mission-organization'],
            (object)['name' => '로고', 'url' => '/mission-logo'],
            
        ]],
        (object)['id' => '장학회','name' => '장학회', 'url' => '#', 'subMenu' => 
        [
            (object)['name' => '소개', 'url' => '/scholarship'],
            (object)['name' => '장학금 신청', 'url' => '/scholarship-register'],
            
        ]],
        (object)['id' => '엔젤리더스','name' => '엔젤리더스', 'url' => '#', 'subMenu' => 
        [
            (object)['name' => '소개', 'url' => '/leader'],
            (object)['name' => '졸업생 사진', 'url' => '/leader-graduate'],
           
            
        ]],
        (object)['id' => '게시판','name' => '게시판', 'url' => '#', 'subMenu' => 
        [
            (object)['name' => '공지사항', 'url' => '/notice'],
            (object)['name' => '게시판', 'url' => '/notice-ask'],
            (object)['name' => 'FAQ', 'url' => '/notice-faq'],
            
        ]],
        (object)['id' => '후원안내','name' => '후원안내', 'url' => '#', 'subMenu' => 
        [
            (object)['name' => '후원안내', 'url' => '/donation'],            
        ]],
        ]
    ])
@php
$id= request()->query('id');
@endphp
<section id="home" class="relative overflow-hidden active mt-24">
    <div class="px-4 md:px-10">
        <div class="rounded-2xl overflow-hidden bg-no-repeat bg-cover bg-center" style="background-image: url(/images/header_image.png);">
            <div class="bg-black/20 rounded-2xl">
                <div class="container">
                    <div class="p-6 relative">
                        <div class="flex h-full items-center justify-center py-5">
                            <div class="text-center max-w-3xl mx-auto relative">
                                <span class="py-1 px-3 rounded-md text-sm font-medium uppercase tracking-wider text-white bg-white/10">Scholarship</span>
                                <h1 class="md:text-5xl/snug text-3xl font-bold text-white mt-3"> 장학금 신청하기</h1>
                            
                            </div>
                        </div><!-- flex End -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container End -->
</section>
<!-- Start Services -->
<section id="serice" class="py-10 lg:py-20">
    <div class="container max-w-4xl">
     @if(session('error'))
        <div class="alert alert-danger text-2xl font-bold text-center mb-5" style="color: red">
            {{ session('error') }}
        </div>
    @endif
        <div class="grid lg:grid-cols-2 grid-cols-2 items-center rounded-md overflow-hidden bg-default-100 dark:bg-default-50 divide-y lg:divide-y-0 lg:divide-x divide-default-200">
            <div class="relative w-full lg:w-full mx-auto order-1">
                <a href="/scholarship-register">
                <div class="group">
                    <div class="w-full group-hover:translate-x-2 group-hover:-translate-y-2 transition-all duration-500">
                        <div class="p-6 bg-orange text-center dark:bg-default-50 {{ $id == NULL ? 'bg-orange' : 'bg-white' }}">
                            
                            <h2 class="text-xl font-medium text-default-950 ">일반 신청하기</h2>
                           
                        </div>
                    </div>
                    <div class="absolute bg-default-950 h-full left-0 top-0 w-full -z-10"></div>
                </div><!-- group end -->
                </a>
            </div>
            <div class="relative w-full lg:w-full mx-auto order-1">
                <a href="/scholarship-register?id=2">
                <div class="group">
                    <div class="w-full group-hover:translate-x-2 group-hover:-translate-y-2 transition-all duration-500">
                        <div class="p-6 {{ $id == 2 ? 'bg-orange' : 'bg-white' }} text-center dark:bg-default-50">
                        
                            <h2 class="text-xl font-medium text-default-950 ">목회자/선교사 자녀 신청하기</h2>
                            
                        </div>
                    </div>
                    <div class="absolute bg-default-950 h-full left-0 top-0 w-full -z-10"></div>
                </div><!-- group end -->
                </a>
            </div>
        </div>
        <div class="mb-10 flex items-end justify-between">
            <div class="mx-auto max-w-2xl text-center">
                
    
            <h1 class="md:text-5xl/snug text-3xl font-bold mt-10">{{ $single->title }}</h1>
                <p class="mt-10 text-2xl font-medium text-default-800">
                    에녹메리선교회 상반기와 하반기 장학금은 모두 일회성 장학금 지급이며 추후에 재신청이 가능합니다.
                </p>
            </div>
        </div>
        <!-- flex End-->

        <div class="grid grid-cols-1 items-center w-100">
            @if(!$single->register_agree)
            <div class="md:container md:mx-auto">
                <div class="divide-y divide-default-200 rounded-md bg-default-50 shadow">
                    <div class="flex flex-wrap items-center gap-6 p-6 sm:flex-nowrap">
                        <div>
                            <div class="flex size-12 items-center justify-center rounded-md border border-default-200 bg-white/5 text-xl text-default-950">
                                종료
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-medium text-default-950">
                                신청기간 종료
                            </h3>
                            <p class="mt-3 text-base">
                                이번 기수는 마감되었습니다. 다음에 신청바랍니다. 감사합니다.
                            </p>
                        </div>
                    </div>
                    <!-- flex End-->
                </div>
            </div>
            @else
            <div class="max-w-4xl mx-auto">
                <div class="divide-y divide-default-200 rounded-md bg-default-50 shadow">
                    <div class="flex flex-wrap items-center gap-6 p-6 sm:flex-nowrap">
                        <div class="hidden md:block">
                            <div class="flex size-12 items-center justify-center rounded-md border border-default-200 bg-white/5 text-xl text-default-950">
                                01
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-medium text-default-950">
                                신청기간
                            </h3>
                            <p class="mt-3 text-base">
                                {!! $single->register_date !!}
                            </p>
                        </div>
                    </div>
                    <!-- flex End-->

                    <div class="flex flex-wrap items-center gap-6 p-6 sm:flex-nowrap">
                        <div class="hidden md:block">
                            <div
                                class="flex size-12 items-center justify-center rounded-md border border-default-200 bg-white/5 text-xl text-default-950"
                            >
                                02
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-medium text-default-950">
                               지원대상
                            </h3>
                            <p class="mt-3 text-base">
                                {!! $single->register_target !!}
                            </p>
                        </div>
                    </div>
                    <!-- flex End-->

                    <div class="flex flex-wrap items-center gap-6 p-6 sm:flex-nowrap">
                        <div class="hidden md:block">
                            <div
                                class="flex size-12 items-center justify-center rounded-md border border-default-200 bg-white/5 text-xl text-default-950"
                            >
                                03
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-medium text-default-950">
                                지원자격
                            </h3>
                            <p class="mt-3 text-base">
                                {!! $single->register_qualification !!}
                            </p>
                        </div>
                    </div>
                    <!-- flex End-->

                    <div class="flex flex-wrap items-center gap-6 p-6 sm:flex-nowrap">
                        <div class="hidden md:block">
                            <div
                                class="flex size-12 items-center justify-center rounded-md border border-default-200 bg-white/5 text-xl text-default-950"
                            >
                                04
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-medium text-default-950">
                                지원금액
                            </h3>
                            <p class="mt-3 text-base">
                                {!! $single->register_price !!}
                            </p>
                        </div>
                    </div>
                    <!-- flex End-->

                    <div class="flex flex-wrap items-center gap-6 p-6 sm:flex-nowrap">
                        <div class="hidden md:block">
                            <div
                                class="flex size-12 items-center justify-center rounded-md border border-default-200 bg-white/5 text-xl text-default-950"
                            >
                                05
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-medium text-default-950">
                                지원절차
                            </h3>
                            <p class="mt-3 text-base">
                                {!! $single->register_process !!}
                            </p>
                        </div>
                    </div>
                    <!-- flex End-->

                    <div class="flex flex-wrap items-center gap-6 p-6 sm:flex-nowrap">
                        <div class="hidden md:block">
                            <div
                                class="flex size-12 items-center justify-center rounded-md border border-default-200 bg-white/5 text-xl text-default-950"
                            >
                                06
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-medium text-default-950">
                                제출서류
                            </h3>
                            <p class="mt-3 text-base">
                                {!! $single->register_document !!}
                            </p>
                        </div>
                    </div>
                    <!-- flex End-->

                    <div class="flex flex-wrap items-center gap-6 p-6 sm:flex-nowrap">
                        <div class="hidden md:block">
                            <div
                                class="flex size-12 items-center justify-center rounded-md border border-default-200 bg-white/5 text-xl text-default-950"
                            >
                                07
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-medium text-default-950">
                                온라인신청
                            </h3>
                            <p class="mt-3 text-base">
                                @if (Auth::guest())
    <!-- 게스트인 경우 -->
    <a href="/login/form" class="inline-flex items-center justify-center gap-2 text-base py-3 px-8 rounded-md text-white bg-primary/90 hover:bg-primary transition-all duration-700">로그인하기
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="move-right" class="lucide lucide-move-right h-6 w-6"><path d="M18 8L22 12L18 16"></path><path d="M2 12H22"></path></svg>
    </a> *신청은 로그인 회원만 가능합니다.
@else
    <!-- 로그인한 경우 -->
    <a href="/scholarship-application?id={{$single->id}}" class="inline-flex items-center justify-center gap-2 text-base py-3 px-8 rounded-md text-white bg-primary/90 hover:bg-primary transition-all duration-700">신청하기
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="move-right" class="lucide lucide-move-right h-6 w-6"><path d="M18 8L22 12L18 16"></path><path d="M2 12H22"></path></svg>
    </a> *신청은 로그인 회원만 가능합니다.
@endif
                               
                            </p>
                        </div>
                    </div>
                    <!-- flex End-->

                    <div class="flex flex-wrap items-center gap-6 p-6 sm:flex-nowrap">
                        <div class="hidden md:block">
                            <div
                                class="flex size-12 items-center justify-center rounded-md border border-default-200 bg-white/5 text-xl text-default-950"
                            >
                                08
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-medium text-default-950">
                                문의처
                            </h3>
                            <p class="mt-3 text-base">
                                {!! $single->register_contact !!}
                            </p>
                        </div>
                    </div>
                    <!-- flex End-->
                </div>
            </div>
            <!-- col End-->
            @endif
            
        </div>
        <!-- grid End-->
    </div>
    <!-- container End-->
</section>
<!-- End Services -->


    
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

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
                                <span class="py-1 px-3 rounded-md text-sm font-medium uppercase tracking-wider text-white bg-white/10">New Student</span>
                                <h1 class="md:text-5xl/snug text-3xl font-bold text-white mt-3"> 신입생 </h1>
                            
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
                <a href="/admission">
                <div class="group">
                    <div class="w-full group-hover:translate-x-2 group-hover:-translate-y-2 transition-all duration-500">
                        <div class="p-6 {{ $id == 2 ? 'bg-orange' : 'bg-white' }} text-center dark:bg-default-50">
                            
                            <h2 class="text-xl font-medium text-default-950 ">신입생</h2>
                           
                        </div>
                    </div>
                    <div class="absolute bg-default-950 h-full left-0 top-0 w-full -z-10"></div>
                </div><!-- group end -->
                </a>
            </div>
            <div class="relative w-full lg:w-full mx-auto order-1">
                <a href="/admission?id=2">
                <div class="group">
                    <div class="w-full group-hover:translate-x-2 group-hover:-translate-y-2 transition-all duration-500">
                        <div class="p-6 {{ $id == 2 ? 'bg-orange' : 'bg-white' }} text-center dark:bg-default-50">
                        
                            <h2 class="text-xl font-medium text-default-950 ">재학생</h2>
                            
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
                
                </p>
            </div>
        </div>
        <!-- flex End-->

        <div class="grid grid-cols-1 items-center w-100">
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
                                입학 안내
                            </h3>
                            <p class="mt-3 text-base">
                                입학 상담: 학교 측으로 연락을 주시면, 입학 가능 여부를 상담해 드립니다. <br />
                                입학 신청서 작성 및 제출: 입학 상담 후, 학교 측에서 본교 소정양식으로 제출 서류를 보내드립니다. <br />
                                학습능력 진단 테스트(Diagnostic Test): 영어로 된 능력평가 시험을 통해 각 과목별 학년을 평가합니다. <br />
                                최종 입학 결정: 합격 통보를 받으면, 각종 서류 제출 및 등록금 납부를 합니다. <br />
                                학부모 학생 오리엔테이션: 입학 결정 후, 오리엔테이션이 진행됩니다. <br />

                            </p>
                        </div>
                    </div>
                    <!-- flex End-->
                    <div class="flex flex-wrap items-center gap-6 p-6 sm:flex-nowrap">
                        <div class="hidden md:block">
                            <div class="flex size-12 items-center justify-center rounded-md border border-default-200 bg-white/5 text-xl text-default-950">
                                02
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-medium text-default-950">
                                입학 자격 
                            </h3>
                            <p class="mt-3 text-base">
                                학부모-학생 오리엔테이션 참석,<br />
학부모 <가정치유학교> 참석<br />
(매주 목요일 저녁 7시반, 80% 참석율) <br /><br />
학부모-학생 오리엔테이션 참석,<br />
                                학부모 <가정치유학교> 참석<br />
                                (매주 목요일 저녁 7시반) 

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
                                모집 학생 인원
                            </h3>
                            <p class="mt-3 text-base">
                                전학년(Pre-K: 5~6세) : 8명 
                                <br />
                                초~중1 : 12명<br /> 
                                (SOT 커리큘럼은 전 과정이 영어로 진행되기 때문에 최소한 3년의 교육기간이 필요하므로, 중학교 1학년 이상의 학생은 받지 않습니다.)    
                                <br /><br />
                                입학 문의는 아래 번호로 연락 부탁드립니다.  <br />
02-900-1163 (요셉학교 사무실) <br />
서울특별시 노원구 월계동 951-1 (301호) 

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
                                후원 안내 
                            </h3>
                            <p class="mt-3 text-base">
                                “후원자를 사역의 동역자로” <br /><br />
                                요셉학교는 후원자를 사역의 동역자로 생각합니다. 우리가 하나님과 사람들로부터 관대한 후원을 받은 것같이 우리도 하나님의 손길이 필요한 자들에게 관대한 후원자들이 되어야 한다고 믿습니다. 
                                <br /><br />
                                신한은행 140-009-275680 열방제자교회(요셉학교) 
                                
                            </p>
                        </div>
                    </div>
                    <!-- flex End-->

                    
                    
                </div>
            </div>
            <!-- col End-->
            
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
                            <img src="{{ asset('images/joseph_logo.png') }}" width="180" alt="Logo">
                        </a>
                        <p class="text-base font-medium  text-default-800 mt-6"></p>
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
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">소개</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">입학안내</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-base text-default-700 hover:text-default-950 transition-all">공지사항</a>
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
                                <a href="https://youtube.com/@요셉학교JosephSchool?feature=shared" class="relative">
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
                © Joseph School</a>
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

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


<section id="home" class="relative overflow-hidden active mt-24">
    <div class="px-4 md:px-10">
        <div class="rounded-2xl overflow-hidden bg-no-repeat bg-cover bg-center" style="background-image: url(/images/header_image.png);">
            <div class="bg-black/20 rounded-2xl">
                <div class="container">
                    <div class="p-6 relative">
                        <div class="flex h-full items-center justify-center py-5">
                            <div class="text-center max-w-3xl mx-auto relative">
                                <span class="py-1 px-3 rounded-md text-sm font-medium uppercase tracking-wider text-white bg-white/10">Donation & Support</span>
                                <h1 class="md:text-5xl/snug text-3xl font-bold text-white mt-3">후원하기</h1>
                            
                            </div>
                        </div><!-- flex End -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container End -->
</section>
<!-- Start Services-->
<section class="py-10 lg:py-20">
    <div class="container">
        <div class="flex items-end justify-between mb-10">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="md:text-4xl/tight text-3xl font-medium capitalize text-default-950 mt-4">후원자를 사역의 동역자로</h2>
                <p class="text-base font-medium mt-4">에녹메리선교회는 후원자를 사역의 동역자로 생각합니다. 우리가 하나님과 사람들로부터 관대한 후원을 받은 것같이 우리도 하나님의 손길이 필요한 자들에게 관대한 후원자들이 되어야 한다고 믿습니다.</p>
                <p class="text-base font-medium mt-6">에녹메리선교회를 후원하실 수 있는 영역은 다음과 같습니다.</p>
                <p class="text-3xl font-bold mt-8"><a href="#" onclick='copyToClipboard("1005104249618")'>우리은행 1005-104-249618 (에녹메리선교회)</a></p>
            </div>
        </div><!-- flex End -->
    </div>
</section>
<!-- ======= hero start ======= -->
<section
id="home"
class="relative bg-default-100 bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat py-24 dark:bg-default-50 dark:bg-[url('/public/images/other/bg-lines-2-dark.png')] lg:py-32"
>
<div
    class="flex items-center overflow-hidden before:absolute before:inset-0 before:left-[63.67%] before:hidden before:rounded-bl-3xl lg:before:block"
>
    <div
        class="absolute -top-44 bottom-0 right-0 w-2/6 bg-contain bg-right bg-no-repeat"
        style="background-image: url(/images/landing/charity/bg-1.png)"
    ></div>

    <div class="container">
        <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2">
            <div class="">
                <div class="border border-default-100 bg-default-50 p-6 mb-10 shadow">
                    <div class="flex flex-wrap gap-6 md:flex-nowrap">
                        <div>
                            <div
                                class="flex size-14 items-center justify-center border border-primary/10 bg-primary/5"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-orange-700">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                              </svg>
                              
                            </div>
                        </div>
                        <div>
                            <h3 class="mt-2 text-3xl font-medium text-default-950">
                                에녹메리장학회
                            </h3>
                            <p class="mt-4 text-base">
                                만17-30세 청소년과 청년을 재정적으로 지원하는 사역
                            </p>
                        </div>
                    </div>
                    <!-- flex End -->
                </div>
                <!-- col End -->
                <div class="border border-default-100 bg-default-50 p-6 mb-10 shadow">
                    <div class="flex flex-wrap gap-6 md:flex-nowrap">
                        <div>
                            <div
                                class="flex size-14 items-center justify-center border border-primary/10 bg-primary/5"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-orange-700">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                              </svg>                              
                            </div>
                        </div>
                        <div>
                            <h3 class="mt-2 text-3xl font-medium text-default-950">
                                엔젤리더스
                            </h3>
                            <p class="mt-4 text-base">
                                차세대 리더 양육을 위해 필요한 강사비용, 시설비용 및 운영비용을 지원하는 사역
                            </p>
                        </div>
                    </div>
                    <!-- flex End -->
                </div>
                <!-- col End -->
                <div class="border border-default-100 bg-default-50 p-6 mb-10 shadow">
                    <div class="flex flex-wrap gap-6 md:flex-nowrap">
                        <div>
                            <div
                                class="flex size-14 items-center justify-center border border-primary/10 bg-primary/5"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-orange-700">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                              </svg>
                              
                            </div>
                        </div>
                        <div>
                            <h3 class="mt-2 text-3xl font-medium text-default-950">
                                문의
                            </h3>
                            <p class="mt-4 text-base">
                                문의는 에녹메리선교회 이메일 (contact@enochmary.org)이나, 에녹메리선교회 사이트 (enochmary.org) 홈페이지에서 [게시판 > 게시판]을 통해서 주시면 됩니다
                            </p>
                        </div>
                    </div>
                    <!-- flex End -->
                    
                </div>
            </div>

            <div class="z-10">
                <div class="tilt flex items-center gap-4 md:gap-6">
                    <div class="flex w-full flex-col gap-4 md:gap-6">
                        
                        <img
                            src="{{ $graduates[0]->getThumbnailUrl() }}"
                            class="h-full w-full rounded-lg object-cover"
                            alt=""
                        />
                        <img
                        src="{{ $graduates[24]->getThumbnailUrl() }}"
                        class="h-full w-full rounded-lg object-cover"
                        alt=""
                    />
                    </div>
                    <div
                        class="relative flex w-full flex-col gap-4 pb-10 md:gap-6 md:pb-16"
                    >
                        <img
                            src="{{ $graduates[11]->getThumbnailUrl() }}"
                            class="h-40 w-full rounded-lg object-cover md:h-[278px]"
                            alt=""
                        />
                        <img
                            src="{{ $graduates[37]->getThumbnailUrl() }}"
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

    
<footer>
    <div class="border-y border-default-200">
        <div class="container py-20">
            <div class="grid xl:grid-cols-5 md:grid-cols-3 gap-10 lg:gap-16">
                <div class="xl:col-span-2 md:col-span-3">
                    <div>
                        <a href="#">
                            <img src="{{ asset('images/joseph_logo.png') }}" width="180" alt="Logo">
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
<script>
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(function() {
            alert("계좌 정보가 복사되었습니다: " + text);
        }, function(err) {
            console.error("복사 실패: ", err);
        });
    }
    </script>
@endsection

@section('script-bottom')
@vite(['resources/js/swiper.js'])
@endsection

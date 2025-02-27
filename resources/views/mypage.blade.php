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
                              <span class="py-1 px-3 rounded-md text-sm font-medium uppercase tracking-wider text-white bg-white/10">My Profile</span>
                              <h1 class="md:text-5xl/snug text-3xl font-bold text-white mt-3">내 프로필</h1>
                              <a
                            href="/logout"
                            class="inline-flex text-lg items-center justify-center gap-2 mt-5 rounded-md bg-indigo-500 px-6 py-2 text-white transition-all duration-300 hover:bg-amber-300"
                        >로그아웃 <i data-lucide="move-right" class="size-6"></i>
                        </a>
                          
                          </div>
                      </div><!-- flex End -->
                  </div>
              </div>
          </div>
      </div>
  </div><!-- Container End -->
</section>
<section>
    <div class="bg-white py-5">
      <div class="container">
        <div class="grid xl:grid-cols-5 gap-6 mt-5">
            <div class="xl:col-span-2">
                <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                    <dt>
                      <div class="absolute rounded-md bg-indigo-500 p-3">
                       
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                      </div>
                      <p class="ml-16 truncate text-sm font-medium text-gray-500">회원정보</p>
                    </dt>
                    <dd class="ml-16 flex items-baseline">
                      <p class="text-2xl font-semibold text-gray-900">{{ $data->name }}</p>
                    </dd>
                    <div>
                        <ul role="list" class="mt-4 text-default-white">
                            <li class="flex items-center gap-2 py-1">
                                <!-- svg icon -->
                                
                                <span class="text-base text-default-950">연락처 : {{ $data->phone }}</span>
                            </li>
                            <li class="flex items-center gap-2 py-1">
                                <!-- svg icon -->
                               
                                <span class="text-base text-default-950">생년월일 : {{ $data->birth }}</span>
                            </li>
                            <li class="flex items-center gap-2 py-1">
                              <!-- svg icon -->
                            
                              <span class="text-base text-default-950">Email : {{ $data->email }}</span>
                          </li>
                          <div class="mt-5">
                            <a
                                          href="#"
                                          class="inline-flex text-md items-center justify-center gap-2 rounded-md bg-indigo-500 px-6 py-2 text-white transition-all duration-300 hover:bg-amber-300"
                                      >수정하기</i>
                                      </a> 
                        </div>
                    </div>
                  </div>
                
              
              </div>
            <div class="xl:col-span-3 mt-8 lg:mt-0">
                <div class="lg:ms-8">
                    <div class="grid md:grid-cols-1 grid-cols-1 gap-x-10 gap-y-6">
                      <div class="bg-white rounded">
                       
    
                        <div class="p-6 flex items-center justify-between">
                            <h3 class="text-2xl font-medium text-default-950">내 질문 답변</h3>
                            <div class="h-12 w-12 rounded-full flex items-center justify-center transition-all duration-500 border border-default-200 text-default-950 hover:text-white bg-white/5 hover:bg-primary">
                              <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-right" class="lucide lucide-chevron-right w-6 h-6"><path d="m9 18 6-6-6-6"></path></svg>
                              </a>
                            </div>
                        </div>

                        <div class="p-6 flex items-center justify-between">
                            <h3 class="text-2xl font-medium text-default-950">개인약관동의</h3>
                            <div class="h-12 w-12 rounded-full flex items-center justify-center transition-all duration-500 border border-default-200 text-default-950 hover:text-white bg-white/5 hover:bg-primary">
                              <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-right" class="lucide lucide-chevron-right w-6 h-6"><path d="m9 18 6-6-6-6"></path></svg>
                              </a>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="mx-auto">
        
        </div>
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

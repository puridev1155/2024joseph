@extends('layouts.base', ['title' => 'Register'])

@section('css')

@endsection

@section('content')
    <div
        class="relative bg-center bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat p-2 lg:p-0">
        <div class="absolute inset-0 bg-black/4"></div>

        <div class="flex h-screen items-center justify-center">
            <div
                class="w-full max-w-3xl overflow-hidden rounded-lg backdrop-blur-3xl"> 
                <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
                  <div class="mx-auto">
                    <a href="/"><img src="{{ asset('images/logo.png') }}" width="230" alt="Logo"></a>
                    
                  </div>
                  <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-[480px]">
                    <div class="bg-white px-6 py-12 shadow-lg sm:rounded-lg sm:px-12">
                      {{-- display flash message here --}}
                 @if (Session::has('success'))
                 <div class="alert alert-success font-bold" style="color: green">{{Session::get('success')}}</div>
                 @endif
                      <form class="row g-3" action="{{ route('LoginUser')}}" method="POST">
                        @csrf
                        <div>
                          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">이메일 주소</label>
                          <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" placeholder="이메일 입력" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 bg-slate-200 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                          </div>
                        </div>
                
                        <div class="pt-3">
                          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">비밀번호</label>
                          <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" placeholder="비밀번호 입력" required class="block w-full rounded-md border-0 py-1.5 bg-slate-200 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">                
                            <span class="text-danger">@error('password'){{$message}}@enderror</span>
                          </div>
                          @if (Session::has('error'))
                          <div class="alert alert-danger color-red">{{Session::get('error')}}</div>
                          @endif
                        </div>
                
                        <div class="flex items-center justify-between mt-3">
                          <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="remember-me" class="ml-3 block text-sm leading-6 text-gray-900">아이디 저장</label>
                          </div>
              
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">로그인</button>
                        </div>
                        <div class="mt-5">
                          <p class="small mb-0">비밀번호를 잊어버리셨나요? <a href="/forgot/password" style="color: blue">비밀번호 찾기</a></p>
                        </div>

                        <div class="mt-5">
                          <a href="/registration/form" class="flex w-full justify-center rounded-md bg-orange-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">가입하기</a>
                        </div>
                      </form>
                    </div>  
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-bottom')
    @vite(['resources/js/auth.js'])
@endsection

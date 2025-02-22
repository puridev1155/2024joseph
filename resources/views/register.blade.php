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
                      <p class="text-center">에녹메리선교회에 <span class="font-bold">회원가입</span>하기 <br />장학금 신청은 회원만 가능합니다.</p>
                      {{-- display flash message here --}}
                  @if (Session::has('success'))
                  <div class="alert alert-success" style="color: green">{{Session::get('success')}}</div>
              @endif
              @if (Session::has('error'))
                  <div class="alert alert-danger" style="color: red">{{Session::get('error')}}</div>
              @endif
                      <form class="row g-3" action="{{ route('registerUser')}}" method="POST">
                        @csrf
                        <div>
                          <div class="mt-2">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">회원 ID</label>
                            <input id="username" name="username" type="text" autocomplete="username" placeholder="한글이름 입력" required class="block w-full rounded-md border-0 py-1.5 bg-slate-200 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <span class="text-danger">@error('name'){{$message}}@enderror</span>
                          </div>
                          
                          <div class="mt-2">
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">이름</label>
                            <input id="name" name="name" type="text" autocomplete="name" placeholder="한글이름 입력" required class="block w-full rounded-md border-0 py-1.5 bg-slate-200 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <span class="text-danger">@error('name'){{$message}}@enderror</span>
                          </div>
                        </div>
                        <div>
                          
                          <div class="mt-2">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">이메일 주소</label>
                            <input id="email" name="email" type="email" autocomplete="email" placeholder="이메일 @ 필수" required class="block w-full rounded-md border-0 py-1.5 bg-slate-200 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                          </div>
                        </div>
                
                        <div>

                          <div>
                            <div class="mt-2">
                              <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">연락처 (11자리) 예) 01033334444</label>
                              <input id="phone" name="phone" type="number" autocomplete="name" placeholder="연락처 입력" required class="block w-full rounded-md border-0 py-1.5 bg-slate-200 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              <span class="text-danger">@error('name'){{$message}}@enderror</span>
                            </div>
                          </div>
                          <div>
                            <div class="mt-2">
                              <label for="birth" class="block text-sm font-medium leading-6 text-gray-900">생년월일 (8자리) 예) 19990404</label>
                              <input id="birth" name="birth" type="number" autocomplete="phone" placeholder=생년월일 입력" required class="block w-full rounded-md border-0 py-1.5 bg-slate-200 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              <span class="text-danger">@error('name'){{$message}}@enderror</span>
                            </div>
                          </div>
                          
                          <div class="mt-2">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">비밀번호</label>
                            <input id="password" name="password" type="password" autocomplete="current-password" placeholder="비밀번호 입력" required class="block w-full rounded-md border-0 py-1.5 bg-slate-200 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            
                            <span class="text-danger">@error('password'){{$message}}@enderror</span>
                          </div>
                          <div class="mt-2">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">비밀번호 다시 입력</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" placeholder="비밀번호 다시 입력" r required class="block w-full rounded-md border-0 py-1.5 bg-slate-200 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <span class="text-danger">@error('password'){{$message}}@enderror</span>
                          </div>
                          <div class="mt-2">
                            <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">성별</label>
                            <select id="gender" name="gender"  autocomplete="gender" class="block w-full rounded-md border-0 py-1.5 bg-slate-200 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              <option selected>성별 선택</option>
                              <option value="남">남성</option>
                              <option value="여">여성</option>
                            </select>
                          </div>
                        </div>
                        <div class="mt-10">
                          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">가입하기</button>
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

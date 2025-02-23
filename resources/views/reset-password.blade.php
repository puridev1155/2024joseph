@extends('layouts.base', ['title' => '비밀번호 변경하기'])

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
                    <a href="/"><img src="{{ asset('images/joseph_logo.png') }}" width="230" alt="Logo"></a>
                  </div>
                  <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-[480px]">
                    <div class="bg-white px-6 py-12 shadow-lg sm:rounded-lg sm:px-12">
                      <p class="text-center"><span class="font-bold">비밀번호 변경하기</span></p>
                      {{-- display flash message here --}}
                  @if (Session::has('success'))
                  <div class="alert alert-success" style="color: green">{{Session::get('success')}}</div>
              @endif
              @if (Session::has('error'))
                  <div class="alert alert-danger" style="color: red">{{Session::get('error')}}</div>
              @endif
                      <form class="row g-3" action="{{ route('ResetPassword')}}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
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
                
                        
                        <div class="mt-10">
                          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">비밀번호 찾기</button>
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

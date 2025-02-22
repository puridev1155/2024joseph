@extends('layouts.base', ['title' => '비밀번호 찾기'])

@section('css')

@endsection

@section('content')
    <div class="relative bg-center bg-[url('/public/images/other/bg-lines-2.png')] bg-cover bg-no-repeat p-2 lg:p-0">
        <div class="absolute inset-0 bg-black/4"></div>
        <div class="flex h-screen items-center justify-center">
            <div class="w-full max-w-3xl overflow-hidden rounded-lg backdrop-blur-3xl"> 
                <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
                    <div class="mx-auto">
                        <a href="/"><img src="{{ asset('images/logo.png') }}" width="230" alt="Logo"></a>
                    </div>
                    <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-[480px]">
                        <div class="bg-white px-6 py-12 shadow-lg sm:rounded-lg sm:px-12">
                            @if (!Session::has('emailSent'))
                            <p class="text-center"><span class="font-bold">비밀번호 재설정을 위해 메일주소를 입력하세요.<br /> (발송되는 1-2초 걸립니다.)</span></p>
                            {{-- Display flash message here --}}
                            @if (Session::has('success'))
                            <div class="alert alert-success font-bold text-2xl" style="color: green">{{ Session::get('success') }}</div>
                            @endif
                            @if (Session::has('error'))
                            <div class="alert alert-danger text-2xl" style="color: red">{{ Session::get('error') }}</div>
                            @endif
                            <form id="resetForm" class="row g-3" action="{{ route('forgot') }}" method="POST" onsubmit="handleFormSubmit(event)">
                                @csrf
                                <div class="mt-2">
                                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">이메일 주소</label>
                                    <input id="email" name="email" type="email" autocomplete="email" placeholder="이메일 입력하기" required class="block w-full rounded-md border-0 py-1.5 bg-slate-200 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                </div>
                                <div id="submitButton" class="mt-10">
                                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" @if (Session::has('success')) style="display: none;" @endif>비밀번호 찾기</button>
                                </div>
                            </form>
                            @else
                            <p class="text-center"><span class="font-bold">이메일이 발송되었습니다. 확인 후 이메일을 확인하세요.</span></p>
                            @endif
                            <a href="/login/form" class="flex w-full justify-center mt-10 px-3 py-1.5 text-sm font-semibold leading-6 text-black">뒤로가기</a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-bottom')
    <script>
        function handleFormSubmit(event) {
            event.preventDefault(); // Prevent form submission
            
            // Hide the submit button
            document.getElementById('submitButton').style.display = 'none';
            
            // Submit the form
            document.getElementById('resetForm').submit();
        }
        
        // Optional: Hide the submit button initially if email has been sent
        window.onload = function() {
            if (document.getElementById('submitButton') && document.getElementById('emailSent').value) {
                document.getElementById('submitButton').style.display = 'none';
            }
        };
    </script>
    @vite(['resources/js/auth.js'])
@endsection

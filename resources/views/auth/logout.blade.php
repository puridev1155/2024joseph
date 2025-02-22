d@extends('layouts.base', ['title' => 'Logout'])

@section('css')

@endsection

@section('content')
    <div
        class="relative bg-cover bg-center bg-no-repeat p-2 lg:p-0"
        style="background-image: url('/images/other/auth-bg.jpg')"
    >
        <div class="absolute inset-0 bg-black/10"></div>

        <div class="flex h-screen items-center justify-center">
            <div
                class="max-w-4xl overflow-hidden rounded-lg bg-black/60 backdrop-blur-3xl"
            >
                <div class="grid lg:grid-cols-2">
                    <div class="hidden py-2.5 ps-2.5 lg:block">
                        <div class="relative h-full">
                            <div class="absolute inset-0 bg-black/40"></div>
                            <img
                                src="/images/other/auth-img.jpg"
                                alt=""
                                class="h-full w-full rounded-md"
                            />
                        </div>
                    </div>
                    <div class="h-full">
                        <div class="flex h-full flex-col p-6">
                            <a href="{{route('any', 'index')}}" class="mb-8 block shrink">
                                <img
                                    class="h-8"
                                    src="/images/logo-light.png"
                                    alt="images"
                                />
                            </a>

                            <div class="my-auto text-center">
                                <h4 class="mb-4 text-2xl font-bold text-white">
                                    See you Again!
                                </h4>
                                <p class="mx-auto mb-5 max-w-sm text-default-300">
                                    You are now successfully sign out.
                                </p>
                                <div class="flex items-start justify-center">
                                    <img
                                        src="/images/other/logout.png"
                                        alt=""
                                        class="h-40"
                                    />
                                </div>
                            </div>

                            <p class="shrink text-center text-zinc-200">
                                Already have an account ?<a
                                    href="{{ route('second', [ 'auth' , 'login']) }}"
                                    class="ms-1 text-primary"
                                ><b>Login</b></a>
                            </p>
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

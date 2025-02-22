@extends('layouts.admin', ['title' => 'Chat','subtitle' => 'Admin'])

@section('css')

@endsection

@section('content')
    <section>
        <div class="container">
            <div class="my-6 space-y-6">
                <div class="grid gap-4 lg:grid-cols-3">
                    <!-- Chat List -->
                    <div class="lg:col-span-1">
                        <div
                            class="overflow-hidden rounded-xl border border-default-200 bg-white dark:bg-default-50 lg:min-w-96"
                        >
                            <div class="border-b border-default-200 px-6 py-4">
                                <h6 class="text-lg font-medium text-default-900">Contacts</h6>
                            </div>
                            <div
                                class="h-[calc(100vh-370px)] divide-y divide-default-200 overflow-y-auto [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-default-300 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar]:w-1"
                            >
                                <div>
                                    <div class="flex items-center gap-3 px-4 py-3">
                                        <img
                                            src="/images/avatars/img-2.jpg"
                                            class="h-10 rounded-full"
                                            alt="Brandon Smith"
                                        />
                                        <div class="w-full">
                                            <div class="flex justify-between">
                                                <h6 class="text-default-900">Brandon Smith</h6>
                                                <small class="text-default-400">4:30am</small>
                                            </div>
                                            <div class="flex justify-between">
                          <span class="font-light text-default-400"
                          >How are you today?</span>
                                                <span class=""
                                                ><span
                                                        class="rounded-full bg-red-500/25 px-1 py-0.5 text-xs text-red-500"
                                                    >3</span
                                                    ></span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center gap-3 px-4 py-3">
                                        <img
                                            src="/images/avatars/img-4.jpg"
                                            class="h-10 rounded-full"
                                            alt="Brandon Smith"
                                        />
                                        <div class="w-full">
                                            <div class="flex justify-between">
                                                <h6 class="text-default-900">Sky Adams</h6>
                                                <small class="text-default-400">4:30am</small>
                                            </div>
                                            <div class="flex justify-between">
                          <span class="font-light text-default-400"
                          >We can play game Today?</span
                          >
                                                <span class=""
                                                ><span
                                                        class="rounded-full bg-red-500/25 px-1 py-0.5 text-xs text-red-500"
                                                    >3</span
                                                    ></span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div
                                        class="flex items-center gap-2 bg-default-100 px-4 py-3"
                                    >
                                        <img
                                            src="/images/avatars/img-5.jpg"
                                            class="h-10 rounded-full"
                                            alt=" John Kish"
                                        />
                                        <div class="w-full">
                                            <div class="flex justify-between">
                                                <h6 class="text-default-900">John Kish</h6>
                                                <small class="text-default-400">5:30am</small>
                                            </div>
                                            <span class="font-light text-default-400"
                                            >typing...</span
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center gap-3 px-4 py-3">
                                        <img
                                            src="/images/avatars/img-7.jpg"
                                            class="h-10 rounded-full"
                                            alt="Maria C"
                                        />
                                        <div class="w-full">
                                            <div class="flex justify-between">
                                                <h6 class="text-default-900">Maria C</h6>
                                                <small class="text-default-400">Thu</small>
                                            </div>
                                            <div class="flex justify-between">
                          <span class="font-light text-default-400"
                          >Are we going to have planning meeting today?</span
                          >
                                                <span class=""
                                                ><span
                                                        class="rounded-full bg-red-500/25 px-1 py-0.5 text-xs text-red-500"
                                                    >2</span
                                                    ></span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center gap-3 px-4 py-3">
                                        <img
                                            src="/images/avatars/img-6.jpg"
                                            class="h-10 rounded-full"
                                            alt="Rhonda D"
                                        />
                                        <div class="w-full">
                                            <div class="flex justify-between">
                                                <h6 class="text-default-900">Rhonda D</h6>
                                                <small class="text-default-400">Wed</small>
                                            </div>
                                            <span class="font-light text-default-400"
                                            >Please check these design assets...</span
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center gap-3 px-4 py-3">
                                        <img
                                            src="/images/avatars/img-3.jpg"
                                            class="h-10 rounded-full"
                                            alt="Michael H"
                                        />
                                        <div class="w-full">
                                            <div class="flex justify-between">
                                                <h6 class="text-default-900">Michael H</h6>
                                                <small class="text-default-400">Tue</small>
                                            </div>
                                            <span class="font-light text-default-400"
                                            >I something have awesome...</span
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center gap-3 px-4 py-3">
                                        <img
                                            src="/images/avatars/img-6.jpg"
                                            class="h-10 rounded-full"
                                            alt="Michael H"
                                        />
                                        <div class="w-full">
                                            <div class="flex justify-between">
                                                <h6 class="text-default-900">Thomas R</h6>
                                                <small class="text-default-400">Tue</small>
                                            </div>
                                            <span class="font-light text-default-400"
                                            >You and Tony Meet Today...</span
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center gap-3 px-4 py-3">
                                        <img
                                            src="/images/avatars/img-8.jpg"
                                            class="h-10 rounded-full"
                                            alt="Michael H"
                                        />
                                        <div class="w-full">
                                            <div class="flex justify-between">
                                                <h6 class="text-default-900">Jonsy K</h6>
                                                <small class="text-default-400">Tue</small>
                                            </div>
                                            <span class="font-light text-default-400">Howdy?</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center gap-3 px-4 py-3">
                                        <img
                                            src="/images/avatars/img-4.jpg"
                                            class="h-10 rounded-full"
                                            alt="Michael H"
                                        />
                                        <div class="w-full">
                                            <div class="flex justify-between">
                                                <h6 class="text-default-900">Ricky J</h6>
                                                <small class="text-default-400">Mon</small>
                                            </div>
                                            <span class="font-light text-default-400"
                                            >Are you interested in learning?</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chat Conversation -->
                    <div class="lg:col-span-2">
                        <div
                            class="w-full overflow-hidden rounded-xl border border-default-200 bg-white dark:bg-default-50"
                        >
                            <div class="border-b border-default-200 px-6 py-3">
                                <div
                                    class="flex flex-wrap items-center justify-between gap-3 py-1.5"
                                >
                                    <div class="sm:w-7/12">
                                        <div class="flex items-center gap-2">
                                            <img
                                                src="/images/avatars/img-5.jpg"
                                                class="me-2 h-9 rounded-full"
                                                alt="Brandon Smith"
                                            />
                                            <div>
                                                <h5 class="text-base font-medium text-default-700">
                                                    John Kish
                                                </h5>
                                                <p
                                                    class="mt-1.5 flex items-center text-xs text-default-400"
                                                >
                                                    <small
                                                        class="ti ti-circle-filled me-1 text-red-400"
                                                    ></small>
                                                    Offline
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-auto">
                                        <a href="javascript: void(0);" class="inline-block p-1.5">
                                            <i class="ti ti-phone text-xl text-default-900"></i>
                                        </a>
                                        <a href="javascript: void(0);" class="inline-block p-1.5">
                                            <i class="ti ti-video text-xl text-default-900"></i>
                                        </a>
                                        <a href="javascript: void(0);" class="inline-block p-1.5">
                                            <i class="ti ti-users text-xl text-default-900"></i>
                                        </a>
                                        <a href="javascript: void(0);" class="inline-block p-1.5">
                                            <i class="ti ti-trash text-xl text-default-900"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="h-[calc(100vh-480px)] overflow-y-auto p-6 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-default-300 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar]:w-1"
                            >
                                <div class="space-y-4">
                                    <!-- Chat Left -->
                                    <div
                                        class="group flex w-11/12 items-start gap-3 text-start"
                                    >
                                        <div class="text-center">
                                            <img
                                                src="/images/avatars/img-5.jpg"
                                                class="h-8 rounded-md"
                                            />
                                            <p class="pt-0.5 text-xs">10:00</p>
                                        </div>

                                        <div class="max-w-3/4 rounded bg-default-100 p-3">
                                            <p class="relative text-xs font-bold text-default-800">
                                                John K
                                            </p>
                                            <p class="pt-1">Hello!</p>
                                        </div>
                                    </div>

                                    <!-- Chat Right -->
                                    <div
                                        class="group ms-auto flex w-11/12 flex-row-reverse items-start gap-3 text-end"
                                    >
                                        <div class="text-center">
                                            <img
                                                src="/images/avatars/img-1.jpg"
                                                class="h-8 rounded-md"
                                            />
                                            <p class="pt-0.5 text-xs">10:01</p>
                                        </div>

                                        <div class="max-w-3/4 rounded bg-primary p-3">
                                            <p class="relative block text-xs font-bold text-white">
                                                Diane B
                                            </p>
                                            <p class="pt-1 text-white/90">
                                                Hi, How are you? What about our next meeting?
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Chat Left -->
                                    <div
                                        class="group flex w-11/12 items-start gap-3 text-start"
                                    >
                                        <div class="text-center">
                                            <img
                                                src="/images/avatars/img-5.jpg"
                                                class="h-8 rounded-md"
                                            />
                                            <p class="pt-0.5 text-xs">10:01</p>
                                        </div>

                                        <div class="max-w-3/4 rounded bg-default-100 p-3">
                                            <p
                                                class="relative block text-xs font-bold text-default-800"
                                            >
                                                John K
                                            </p>
                                            <p class="pt-1">Yeah everything is fine</p>
                                        </div>
                                    </div>

                                    <!-- Chat Right -->
                                    <div
                                        class="group ms-auto flex w-11/12 flex-row-reverse items-start gap-3 text-end"
                                    >
                                        <div class="text-center">
                                            <img
                                                src="/images/avatars/img-1.jpg"
                                                class="h-8 rounded-md"
                                            />
                                            <p class="pt-0.5 text-xs">10:02</p>
                                        </div>

                                        <div class="max-w-3/4 rounded bg-primary p-3">
                                            <p class="relative block text-xs font-bold text-white">
                                                Diane B
                                            </p>
                                            <p class="pt-1 text-white/90">Wow that's great</p>
                                        </div>
                                    </div>

                                    <!-- Chat Left -->
                                    <div
                                        class="group flex w-11/12 items-start gap-3 text-start"
                                    >
                                        <div class="text-center">
                                            <img
                                                src="/images/avatars/img-5.jpg"
                                                class="h-8 rounded-md"
                                            />
                                            <p class="pt-0.5 text-xs">10:02</p>
                                        </div>

                                        <div class="max-w-3/4 rounded bg-default-100 p-3">
                                            <p
                                                class="relative block text-xs font-bold text-default-800"
                                            >
                                                John K
                                            </p>
                                            <p class="pt-1">Let's have it today if you are free</p>
                                        </div>
                                    </div>

                                    <!-- Chat Right -->
                                    <div
                                        class="group ms-auto flex w-11/12 flex-row-reverse items-start gap-3 text-end"
                                    >
                                        <div class="text-center">
                                            <img
                                                src="/images/avatars/img-1.jpg"
                                                class="h-8 rounded-md"
                                            />
                                            <p class="pt-0.5 text-xs">10:03</p>
                                        </div>

                                        <div class="max-w-3/4 rounded bg-primary p-3">
                                            <p class="relative block text-xs font-bold text-white">
                                                Diane B
                                            </p>
                                            <p class="pt-1 text-white/90">
                                                Sure thing! let me know if 2pm works for you
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Chat Left -->
                                    <div
                                        class="group flex w-11/12 items-start gap-3 text-start"
                                    >
                                        <div class="text-center">
                                            <img
                                                src="/images/avatars/img-5.jpg"
                                                class="h-8 rounded-md"
                                            />
                                            <p class="pt-0.5 text-xs">10:04</p>
                                        </div>

                                        <div class="max-w-3/4 rounded bg-default-100 p-3">
                                            <p
                                                class="relative block text-xs font-bold text-default-800"
                                            >
                                                John K
                                            </p>
                                            <p class="pt-1">
                                                Sorry, I have another meeting scheduled at 2pm. Can we
                                                have it at 3pm instead?
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Chat Left -->
                                    <div
                                        class="group flex w-11/12 items-start gap-3 text-start"
                                    >
                                        <div class="text-center">
                                            <img
                                                src="/images/avatars/img-5.jpg"
                                                class="h-8 rounded-md"
                                            />
                                            <p class="pt-0.5 text-xs">10:04</p>
                                        </div>

                                        <div class="max-w-3/4 rounded bg-default-100 p-3">
                                            <p
                                                class="relative block text-xs font-bold text-default-800"
                                            >
                                                John K
                                            </p>
                                            <p class="pt-1">
                                                We can also discuss about the presentation talk format
                                                if you have some extra mins
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Chat Right -->
                                    <div
                                        class="group ms-auto flex w-11/12 flex-row-reverse items-start gap-3 text-end"
                                    >
                                        <div class="text-center">
                                            <img
                                                src="/images/avatars/img-1.jpg"
                                                class="h-8 rounded-md"
                                            />
                                            <p class="pt-0.5 text-xs">10:05</p>
                                        </div>

                                        <div class="max-w-3/4">
                                            <div class="rounded bg-primary p-3">
                                                <p
                                                    class="relative block text-xs font-bold text-white"
                                                >
                                                    Diane B
                                                </p>
                                                <p class="pt-1 text-white/90">
                                                    3pm it is. Sure, let's discuss about presentation
                                                    format, it would be great to finalize today. I am
                                                    attaching the last year format and assets here...
                                                </p>
                                            </div>
                                            <div class="mt-3 rounded border border-default-200">
                                                <div class="p-3">
                                                    <div
                                                        class="flex items-center justify-between gap-3"
                                                    >
                                                        <div class="flex items-center gap-3">
                                                            <div class="size-12">
                                  <span
                                      class="inline-flex h-full w-full items-center justify-center rounded bg-primary text-white"
                                  >
                                    .ZIP
                                  </span>
                                                            </div>
                                                            <div class="text-start text-default-400">
                                                                <a
                                                                    href="javascript:void(0);"
                                                                    class="text-sm font-bold"
                                                                >sketch.zip</a
                                                                >
                                                                <p class="text-sm">2.3 MB</p>
                                                            </div>
                                                        </div>
                                                        <a
                                                            href="javascript:void(0);"
                                                            class="btn !text-xl"
                                                        >
                                                            <i class="ti ti-download"></i>
                                                        </a>
                                                    </div>
                                                    <!-- end flex -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="border-t border-default-200 bg-white p-6 dark:bg-default-50"
                            >
                                <form name="chat-form" class="flex items-center gap-2">
                                    <input
                                        type="text"
                                        class="form-input w-full rounded border-none bg-default-100 text-default-900 placeholder:text-default-600 focus:ring-primary"
                                        placeholder="Enter your text"
                                        required=""
                                    />
                                    <div class="flex w-auto gap-1">
                                        <a
                                            href="#"
                                            class="rounded bg-default-200 px-3 py-2 text-default-800 hover:bg-default-800/20"
                                        ><i class="ti ti-paperclip"></i
                                            ></a>
                                        <button
                                            class="inline-flex items-center justify-center gap-2 rounded bg-primary px-3 py-2 text-white transition-all duration-300 hover:bg-primary-700"
                                        >
                                            Send <i class="ti ti-send"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script-bottom')

@endsection

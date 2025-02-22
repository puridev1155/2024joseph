@extends('layouts.admin', ['title' => 'Project','subtitle' => 'Admin'])

@section('css')

@endsection

@section('content')
    <section>
        <div class="container">
            <div class="my-6 space-y-6">
                <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                    <div
                        class="overflow-hidden rounded-md border border-default-200 bg-white dark:bg-default-50"
                    >
                        <div
                            class="flex items-center justify-between border-b border-default-200 px-4 py-3"
                        >
                            <h5 class="text-lg text-default-900">Web Design</h5>
                            <div
                                class="rounded-md bg-teal-500 px-1.5 py-1 text-xs font-medium text-white"
                                role="alert"
                            >
                                <span>Completed</span>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="px-6 py-3">
                                <h5 class="my-2">
                                    <a href="#" class="text-default-900"
                                    >Landing page Design</a
                                    >
                                </h5>
                                <p class="mb-9 text-sm text-default-500">
                                    If several languages coalesce, the grammar of the resulting
                                    language is more regular.
                                </p>

                                <div class="flex -space-x-2">
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-2.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-3.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                    <a href="javascript: void(0);">
                                        <div class="relative inline-flex">
                                            <button
                                                class="inline-flex size-12 items-center justify-center rounded-full border-2 border-white bg-default-200 align-middle text-sm font-medium text-default-700 shadow-sm transition-all hover:bg-default-300 dark:border-default-50"
                                            >
                                                <span class="font-medium leading-none">2+</span>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="border-t border-default-200 p-5">
                                <div class="grid gap-4 lg:grid-cols-2">
                                    <div class="flex items-center justify-between gap-2">
                                        <a href="#" class="text-sm">
                                            <i class="mgc_calendar_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">15 Dec</span>
                                        </a>

                                        <a href="#" class="text-sm">
                                            <i class="mgc_align_justify_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">56</span>
                                        </a>

                                        <a href="#" class="text-sm">
                                            <i class="mgc_comment_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">224</span>
                                        </a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="h-1.5 w-full rounded-full bg-default-200">
                                            <div class="h-1.5 w-2/3 rounded-full bg-teal-500"></div>
                                        </div>
                                        <span>66%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="overflow-hidden rounded-md border border-default-200 bg-white dark:bg-default-50"
                    >
                        <div
                            class="flex items-center justify-between border-b border-default-200 px-4 py-3"
                        >
                            <h5 class="text-lg text-default-900">Android</h5>
                            <div
                                class="rounded-md bg-amber-500 px-1.5 py-1 text-xs font-medium text-white"
                                role="alert"
                            >
                                <span>Pending</span>
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <div class="px-6 py-3">
                                <h5 class="my-2">
                                    <a href="#" class="text-default-900"
                                    >App Design and Develop</a
                                    >
                                </h5>
                                <p class="mb-9 text-sm text-default-500">
                                    To achieve this, it would be necessary to have uniform
                                    grammar and more common words.
                                </p>

                                <div class="flex -space-x-2">
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-4.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-5.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-6.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-7.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                    <a href="javascript: void(0);">
                                        <div class="relative inline-flex">
                                            <button
                                                id=""
                                                class="inline-flex size-12 items-center justify-center rounded-full border-2 border-white bg-default-200 align-middle text-sm font-medium text-default-700 shadow-sm transition-all hover:bg-default-300 dark:border-default-50"
                                            >
                                                <span class="font-medium leading-none">4+</span>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="border-t border-default-200 p-5">
                                <div class="grid gap-4 lg:grid-cols-2">
                                    <div class="flex items-center justify-between gap-2">
                                        <a href="#" class="text-sm">
                                            <i class="mgc_calendar_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">28 nov</span>
                                        </a>

                                        <a href="#" class="text-sm">
                                            <i class="mgc_align_justify_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">62</span>
                                        </a>

                                        <a href="#" class="text-sm">
                                            <i class="mgc_comment_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">196</span>
                                        </a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="h-1.5 w-full rounded-full bg-default-200">
                                            <div
                                                class="h-1.5 w-1/3 rounded-full bg-amber-500"
                                            ></div>
                                        </div>
                                        <span>33%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="overflow-hidden rounded-md border border-default-200 bg-white dark:bg-default-50"
                    >
                        <div
                            class="flex items-center justify-between border-b border-default-200 px-4 py-3"
                        >
                            <h5 class="text-lg text-default-900">Web Design</h5>
                            <div
                                class="rounded-md bg-teal-500 px-1.5 py-1 text-xs font-medium text-white"
                                role="alert"
                            >
                                <span>Frontend Completed</span>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="px-6 py-3">
                                <h5 class="my-2">
                                    <a href="#" class="text-default-900"
                                    >New Admin Design</a
                                    >
                                </h5>
                                <p class="mb-9 text-sm text-default-500">
                                    If several languages coalesce, the grammar of the resulting
                                    language is more regular.
                                </p>

                                <div class="flex -space-x-2">
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-9.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-8.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-1.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                    <a href="javascript: void(0);">
                                        <div class="relative inline-flex">
                                            <button
                                                id=""
                                                class="inline-flex size-12 items-center justify-center rounded-full border-2 border-white bg-default-200 align-middle text-sm font-medium text-default-700 shadow-sm transition-all hover:bg-default-300 dark:border-default-50"
                                            >
                                                <span class="font-medium leading-none">3+</span>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="border-t border-default-200 p-5">
                                <div class="grid gap-4 lg:grid-cols-2">
                                    <div class="flex items-center justify-between gap-2">
                                        <a href="#" class="text-sm">
                                            <i class="mgc_calendar_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">19 Nov</span>
                                        </a>

                                        <a href="#" class="text-sm">
                                            <i class="mgc_align_justify_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">69</span>
                                        </a>

                                        <a href="#" class="text-sm">
                                            <i class="mgc_comment_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">102</span>
                                        </a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="h-1.5 w-full rounded-full bg-default-200">
                                            <div class="h-1.5 w-1/2 rounded-full bg-teal-500"></div>
                                        </div>
                                        <span>50%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="overflow-hidden rounded-md border border-default-200 bg-white dark:bg-default-50"
                    >
                        <div
                            class="flex items-center justify-between border-b border-default-200 px-4 py-3"
                        >
                            <h5 class="text-lg text-default-900">Android</h5>
                            <div
                                class="rounded-md bg-amber-500 px-1.5 py-1 text-xs font-medium text-white"
                                role="alert"
                            >
                                <span>Pending</span>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="px-6 py-3">
                                <h5 class="my-2">
                                    <a href="#" class="text-default-900"
                                    >Custom Software Development</a
                                    >
                                </h5>
                                <p class="mb-9 text-sm text-default-500">
                                    Their separate existence is a myth. For science, music,
                                    sport, etc uses the vocabulary.
                                </p>

                                <div class="flex -space-x-2">
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-2.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-8.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-9.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                </div>
                            </div>

                            <div class="border-t border-default-200 p-5">
                                <div class="grid gap-4 lg:grid-cols-2">
                                    <div class="flex items-center justify-between gap-2">
                                        <a href="#" class="text-sm">
                                            <i class="mgc_calendar_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">02 Nov</span>
                                        </a>

                                        <a href="#" class="text-sm">
                                            <i class="mgc_align_justify_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">72</span>
                                        </a>

                                        <a href="#" class="text-sm">
                                            <i class="mgc_comment_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">184</span>
                                        </a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="h-1.5 w-full rounded-full bg-default-200">
                                            <div
                                                class="h-1.5 w-1/4 rounded-full bg-amber-500/80"
                                            ></div>
                                        </div>
                                        <span>25%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="overflow-hidden rounded-md border border-default-200 bg-white dark:bg-default-50"
                    >
                        <div
                            class="flex items-center justify-between border-b border-default-200 px-4 py-3"
                        >
                            <h5 class="text-lg text-default-900">Web Design</h5>
                            <div
                                class="rounded-md bg-primary px-1.5 py-1 text-xs font-medium text-white"
                                role="alert"
                            >
                                <span>In Progress</span>
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <div class="px-6 py-3">
                                <h5 class="my-2">
                                    <a href="#" class="text-default-900"
                                    >Brand logo design</a
                                    >
                                </h5>
                                <p class="mb-9 text-sm text-default-500">
                                    Everyone realizes why a new common language refuse to pay
                                    expensive translators.
                                </p>

                                <div class="flex -space-x-2">
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-6.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                </div>
                            </div>

                            <div class="border-t border-default-200 p-5">
                                <div class="grid gap-4 lg:grid-cols-2">
                                    <div class="flex items-center justify-between gap-2">
                                        <a href="#" class="text-sm">
                                            <i class="mgc_calendar_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">19 Nov</span>
                                        </a>

                                        <a href="#" class="text-sm">
                                            <i class="mgc_align_justify_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">69</span>
                                        </a>

                                        <a href="#" class="text-sm">
                                            <i class="mgc_comment_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">102</span>
                                        </a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="h-1.5 w-full rounded-full bg-default-200">
                                            <div class="h-1.5 w-3/4 rounded-full bg-primary"></div>
                                        </div>
                                        <span>75%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="overflow-hidden rounded-md border border-default-200 bg-white dark:bg-default-50"
                    >
                        <div
                            class="flex items-center justify-between border-b border-default-200 px-4 py-3"
                        >
                            <h5 class="text-lg text-default-900">Web Design</h5>
                            <div
                                class="rounded-md bg-teal-500 px-1.5 py-1 text-xs font-medium text-white"
                                role="alert"
                            >
                                <span>Completed</span>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="px-6 py-3">
                                <h5 class="my-2">
                                    <a href="#" class="text-default-900"
                                    >Website Redesign</a
                                    >
                                </h5>
                                <p class="mb-9 text-sm text-default-500">
                                    The languages only differ in their grammar pronunciation and
                                    their most common words.
                                </p>

                                <div class="flex -space-x-2">
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-3.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img
                                            class="inline-block size-12 rounded-full border-2 border-default-50"
                                            src="/images/avatars/img-9.jpg"
                                            alt="Image Description"
                                        />
                                    </a>
                                </div>
                            </div>

                            <div class="border-t border-default-200 p-5">
                                <div class="grid gap-4 lg:grid-cols-2">
                                    <div class="flex items-center justify-between gap-2">
                                        <a href="#" class="text-sm">
                                            <i class="mgc_calendar_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">19 Nov</span>
                                        </a>

                                        <a href="#" class="text-sm">
                                            <i class="mgc_align_justify_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">69</span>
                                        </a>

                                        <a href="#" class="text-sm">
                                            <i class="mgc_comment_line me-2 text-lg"></i>
                                            <span class="align-text-bottom">102</span>
                                        </a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="h-1.5 w-full rounded-full bg-default-200">
                                            <div class="h-1.5 w-1/2 rounded-full bg-teal-500"></div>
                                        </div>
                                        <span>50%</span>
                                    </div>
                                </div>
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

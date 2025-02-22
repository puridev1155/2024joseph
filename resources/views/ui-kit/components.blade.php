@extends('layouts.admin', ['title' => 'Components','subtitle' => 'Ui Kit'])

@section('css')

@endsection

@section('content')
    <section class="pb-10">
        <div class="container relative">
            <div class="grid gap-6 lg:grid-cols-4">
                <div class="lg:col-span-3">
                    <div class="space-y-6">
                        <div id="buttons" class="scroll-mt-40">
                            <h4 class="mb-4 text-xl text-default-900">Buttons</h4>
                            <div class="space-y-4">
                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Default Buttons</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                                            <a
                                                href="#"
                                                class="inline-block rounded-md bg-primary px-6 py-2 text-center text-base text-white transition-all hover:bg-primary-700"
                                            >Primary</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md bg-gray-500 px-6 py-2 text-center text-base text-white transition-all hover:bg-gray-600"
                                            >Gray</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md bg-emerald-600 px-6 py-2 text-center text-base text-white transition-all hover:bg-emerald-700"
                                            >Emerald</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md bg-red-600 px-6 py-2 text-center text-base text-white transition-all hover:bg-red-700"
                                            >Red</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md bg-blue-600 px-6 py-2 text-center text-base text-white transition-all hover:bg-blue-700"
                                            >Blue</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md bg-yellow-500 px-6 py-2 text-center text-base text-white transition-all hover:bg-yellow-600"
                                            >Yellow</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md bg-sky-600 px-6 py-2 text-center text-base text-white transition-all hover:bg-sky-700"
                                            >Sky</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md bg-cyan-600 px-6 py-2 text-center text-base text-white transition-all hover:bg-cyan-700"
                                            >Cyan</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md bg-indigo-600 px-6 py-2 text-center text-base text-white transition-all hover:bg-indigo-700"
                                            >Indigo</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md bg-purple-600 px-6 py-2 text-center text-base text-white transition-all hover:bg-purple-700"
                                            >Purple</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md bg-gray-700 px-6 py-2 text-center text-base text-white transition-all hover:bg-gray-800"
                                            >Dark</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md bg-gray-100 px-6 py-2 text-center text-base text-gray-900 transition-all hover:bg-gray-200"
                                            >Light</a
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Rounded Buttons</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                                            <a
                                                href="#"
                                                class="inline-block rounded-full bg-primary px-6 py-2 text-center text-base text-white transition-all hover:bg-primary-700"
                                            >Primary</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full bg-gray-500 px-6 py-2 text-center text-base text-white transition-all hover:bg-gray-600"
                                            >Gray</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full bg-emerald-600 px-6 py-2 text-center text-base text-white transition-all hover:bg-emerald-700"
                                            >Emerald</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full bg-red-600 px-6 py-2 text-center text-base text-white transition-all hover:bg-red-700"
                                            >Red</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full bg-blue-600 px-6 py-2 text-center text-base text-white transition-all hover:bg-blue-700"
                                            >Blue</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full bg-yellow-500 px-6 py-2 text-center text-base text-white transition-all hover:bg-yellow-600"
                                            >Yellow</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full bg-sky-600 px-6 py-2 text-center text-base text-white transition-all hover:bg-sky-700"
                                            >Sky</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full bg-cyan-600 px-6 py-2 text-center text-base text-white transition-all hover:bg-cyan-700"
                                            >Cyan</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full bg-indigo-600 px-6 py-2 text-center text-base text-white transition-all hover:bg-indigo-700"
                                            >Indigo</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full bg-purple-600 px-6 py-2 text-center text-base text-white transition-all hover:bg-purple-700"
                                            >Purple</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full bg-gray-700 px-6 py-2 text-center text-base text-white transition-all hover:bg-gray-800"
                                            >Dark</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full bg-gray-100 px-6 py-2 text-center text-base text-gray-900 transition-all hover:bg-gray-200"
                                            >Light</a
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Outline Buttons</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-primary px-6 py-2 text-center text-base text-primary transition-all hover:bg-primary hover:text-white"
                                            >Primary</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-gray-500 px-6 py-2 text-center text-base text-gray-500 transition-all hover:bg-gray-500 hover:text-white"
                                            >Gray</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-emerald-600 px-6 py-2 text-center text-base text-emerald-600 transition-all hover:bg-emerald-600 hover:text-white"
                                            >Emerald</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-red-600 px-6 py-2 text-center text-base text-red-600 transition-all hover:bg-red-600 hover:text-white"
                                            >Red</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-blue-600 px-6 py-2 text-center text-base text-blue-600 transition-all hover:bg-blue-600 hover:text-white"
                                            >Blue</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-yellow-500 px-6 py-2 text-center text-base text-yellow-500 transition-all hover:bg-yellow-500 hover:text-white"
                                            >Yellow</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-sky-600 px-6 py-2 text-center text-base text-sky-600 transition-all hover:bg-sky-600 hover:text-white"
                                            >Sky</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-cyan-600 px-6 py-2 text-center text-base text-cyan-600 transition-all hover:bg-cyan-600 hover:text-white"
                                            >Cyan</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-indigo-600 px-6 py-2 text-center text-base text-indigo-600 transition-all hover:bg-indigo-600 hover:text-white"
                                            >Indigo</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-purple-600 px-6 py-2 text-center text-base text-purple-600 transition-all hover:bg-purple-600 hover:text-white"
                                            >Purple</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-gray-700 px-6 py-2 text-center text-base text-gray-700 transition-all hover:bg-gray-700 hover:text-white"
                                            >Dark</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-gray-100 px-6 py-2 text-center text-base text-gray-100 transition-all hover:bg-gray-100 hover:text-gray-900"
                                            >Light</a
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">
                                            Outline Rounded Buttons
                                        </h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-primary px-6 py-2 text-center text-base text-primary transition-all hover:bg-primary hover:text-white"
                                            >Primary</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-gray-500 px-6 py-2 text-center text-base text-gray-500 transition-all hover:bg-gray-500 hover:text-white"
                                            >Gray</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-emerald-600 px-6 py-2 text-center text-base text-emerald-600 transition-all hover:bg-emerald-600 hover:text-white"
                                            >Emerald</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-red-600 px-6 py-2 text-center text-base text-red-600 transition-all hover:bg-red-600 hover:text-white"
                                            >Red</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-blue-600 px-6 py-2 text-center text-base text-blue-600 transition-all hover:bg-blue-600 hover:text-white"
                                            >Blue</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-yellow-500 px-6 py-2 text-center text-base text-yellow-500 transition-all hover:bg-yellow-500 hover:text-white"
                                            >Yellow</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-sky-600 px-6 py-2 text-center text-base text-sky-600 transition-all hover:bg-sky-600 hover:text-white"
                                            >Sky</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-cyan-600 px-6 py-2 text-center text-base text-cyan-600 transition-all hover:bg-cyan-600 hover:text-white"
                                            >Cyan</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-indigo-600 px-6 py-2 text-center text-base text-indigo-600 transition-all hover:bg-indigo-600 hover:text-white"
                                            >Indigo</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-purple-600 px-6 py-2 text-center text-base text-purple-600 transition-all hover:bg-purple-600 hover:text-white"
                                            >Purple</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-gray-700 px-6 py-2 text-center text-base text-gray-700 transition-all hover:bg-gray-700 hover:text-white"
                                            >Dark</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-gray-100 px-6 py-2 text-center text-base text-gray-100 transition-all hover:bg-gray-100 hover:text-gray-900"
                                            >Light</a
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Soft Buttons</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-primary/20 bg-primary/5 px-6 py-2 text-center text-base text-primary transition-all hover:bg-primary hover:text-white"
                                            >Primary</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-gray-500/20 bg-gray-500/5 px-6 py-2 text-center text-base text-gray-500 transition-all hover:bg-gray-500 hover:text-white"
                                            >Gray</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-emerald-600/20 bg-emerald-600/5 px-6 py-2 text-center text-base text-emerald-600 transition-all hover:bg-emerald-600 hover:text-white"
                                            >Emerald</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-red-600/20 bg-red-600/5 px-6 py-2 text-center text-base text-red-600 transition-all hover:bg-red-600 hover:text-white"
                                            >Red</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-blue-600/20 bg-blue-600/5 px-6 py-2 text-center text-base text-blue-600 transition-all hover:bg-blue-600 hover:text-white"
                                            >Blue</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-yellow-500/20 bg-yellow-500/5 px-6 py-2 text-center text-base text-yellow-500 transition-all hover:bg-yellow-500 hover:text-white"
                                            >Yellow</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-sky-600/20 bg-sky-600/5 px-6 py-2 text-center text-base text-sky-600 transition-all hover:bg-sky-600 hover:text-white"
                                            >Sky</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-cyan-600/20 bg-cyan-600/5 px-6 py-2 text-center text-base text-cyan-600 transition-all hover:bg-cyan-600 hover:text-white"
                                            >Cyan</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-indigo-600/20 bg-indigo-600/5 px-6 py-2 text-center text-base text-indigo-600 transition-all hover:bg-indigo-600 hover:text-white"
                                            >Indigo</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-purple-600/20 bg-purple-600/5 px-6 py-2 text-center text-base text-purple-600 transition-all hover:bg-purple-600 hover:text-white"
                                            >Purple</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-gray-700/20 bg-gray-700/5 px-6 py-2 text-center text-base text-gray-700 transition-all hover:bg-gray-700 hover:text-white"
                                            >Dark</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md border border-gray-100/20 bg-gray-100/5 px-6 py-2 text-center text-base text-gray-100 transition-all hover:bg-gray-100 hover:text-gray-900"
                                            >Light</a
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">
                                            Soft Rounded Buttons
                                        </h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-primary/20 bg-primary/5 px-6 py-2 text-center text-base text-primary transition-all hover:bg-primary hover:text-white"
                                            >Primary</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-gray-500/20 bg-gray-500/5 px-6 py-2 text-center text-base text-gray-500 transition-all hover:bg-gray-500 hover:text-white"
                                            >Gray</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-emerald-600/20 bg-emerald-600/5 px-6 py-2 text-center text-base text-emerald-600 transition-all hover:bg-emerald-600 hover:text-white"
                                            >Emerald</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-red-600/20 bg-red-600/5 px-6 py-2 text-center text-base text-red-600 transition-all hover:bg-red-600 hover:text-white"
                                            >Red</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-blue-600/20 bg-blue-600/5 px-6 py-2 text-center text-base text-blue-600 transition-all hover:bg-blue-600 hover:text-white"
                                            >Blue</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-yellow-500/20 bg-yellow-500/5 px-6 py-2 text-center text-base text-yellow-500 transition-all hover:bg-yellow-500 hover:text-white"
                                            >Yellow</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-sky-600/20 bg-sky-600/5 px-6 py-2 text-center text-base text-sky-600 transition-all hover:bg-sky-600 hover:text-white"
                                            >Sky</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-cyan-600/20 bg-cyan-600/5 px-6 py-2 text-center text-base text-cyan-600 transition-all hover:bg-cyan-600 hover:text-white"
                                            >Cyan</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-indigo-600/20 bg-indigo-600/5 px-6 py-2 text-center text-base text-indigo-600 transition-all hover:bg-indigo-600 hover:text-white"
                                            >Indigo</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-purple-600/20 bg-purple-600/5 px-6 py-2 text-center text-base text-purple-600 transition-all hover:bg-purple-600 hover:text-white"
                                            >Purple</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-gray-700/20 bg-gray-700/5 px-6 py-2 text-center text-base text-gray-700 transition-all hover:bg-gray-700 hover:text-white"
                                            >Dark</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full border border-gray-100/20 bg-gray-100/5 px-6 py-2 text-center text-base text-gray-100 transition-all hover:bg-gray-100 hover:text-gray-900"
                                            >Light</a
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Ghost Buttons</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                                            <a
                                                href="#"
                                                class="inline-block rounded-md px-6 py-2 text-center text-base text-primary-500 transition-all hover:bg-primary/20"
                                            >Primary</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md px-6 py-2 text-center text-base text-gray-500 transition-all hover:bg-gray-500/20"
                                            >Gray</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md px-6 py-2 text-center text-base text-emerald-600 transition-all hover:bg-emerald-500/20"
                                            >Emerald</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md px-6 py-2 text-center text-base text-red-600 transition-all hover:bg-red-500/20"
                                            >Red</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md px-6 py-2 text-center text-base text-blue-600 transition-all hover:bg-blue-500/20"
                                            >Blue</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md px-6 py-2 text-center text-base text-yellow-500 transition-all hover:bg-yellow-500/20"
                                            >Yellow</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md px-6 py-2 text-center text-base text-sky-600 transition-all hover:bg-sky-500/20"
                                            >Sky</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md px-6 py-2 text-center text-base text-cyan-600 transition-all hover:bg-cyan-500/20"
                                            >Cyan</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md px-6 py-2 text-center text-base text-indigo-600 transition-all hover:bg-indigo-500/20"
                                            >Indigo</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md px-6 py-2 text-center text-base text-purple-600 transition-all hover:bg-purple-500/20"
                                            >Purple</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md px-6 py-2 text-center text-base text-gray-700 transition-all hover:bg-gray-700/20"
                                            >Dark</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md px-6 py-2 text-center text-base text-gray-100 transition-all hover:bg-gray-200/20"
                                            >Light</a
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">
                                            Ghost Rounded Buttons
                                        </h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                                            <a
                                                href="#"
                                                class="inline-block rounded-full px-6 py-2 text-center text-base text-primary-500 transition-all hover:bg-primary/20"
                                            >Primary</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full px-6 py-2 text-center text-base text-gray-500 transition-all hover:bg-gray-500/20"
                                            >Gray</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full px-6 py-2 text-center text-base text-emerald-600 transition-all hover:bg-emerald-500/20"
                                            >Emerald</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full px-6 py-2 text-center text-base text-red-600 transition-all hover:bg-red-500/20"
                                            >Red</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full px-6 py-2 text-center text-base text-blue-600 transition-all hover:bg-blue-500/20"
                                            >Blue</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full px-6 py-2 text-center text-base text-yellow-500 transition-all hover:bg-yellow-500/20"
                                            >Yellow</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full px-6 py-2 text-center text-base text-sky-600 transition-all hover:bg-sky-500/20"
                                            >Sky</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full px-6 py-2 text-center text-base text-cyan-600 transition-all hover:bg-cyan-500/20"
                                            >Cyan</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full px-6 py-2 text-center text-base text-indigo-600 transition-all hover:bg-indigo-500/20"
                                            >Indigo</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full px-6 py-2 text-center text-base text-purple-600 transition-all hover:bg-purple-500/20"
                                            >Purple</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full px-6 py-2 text-center text-base text-gray-700 transition-all hover:bg-gray-700/20"
                                            >Dark</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-full px-6 py-2 text-center text-base text-gray-100 transition-all hover:bg-gray-200/20"
                                            >Light</a
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Button Size</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                                            <a
                                                href="#"
                                                class="inline-block rounded bg-primary px-4 py-1 text-center text-sm text-white transition-all hover:bg-primary-700"
                                            >Small</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-md bg-primary px-6 py-2 text-center text-base text-white transition-all hover:bg-primary-700"
                                            >Default</a
                                            >
                                            <a
                                                href="#"
                                                class="inline-block rounded-lg bg-primary px-8 py-2.5 text-center text-lg text-white transition-all hover:bg-primary-700"
                                            >Large</a
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Button Icons</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                                            <a
                                                href="#"
                                                class="inline-flex size-10 items-center justify-center rounded-md bg-blue-500 text-white transition-all hover:bg-blue-600"
                                            ><i data-lucide="facebook" class="size-5"></i
                                                ></a>
                                            <a
                                                href="#"
                                                class="inline-flex size-10 items-center justify-center rounded-full bg-pink-500 text-white transition-all hover:bg-pink-600"
                                            ><i data-lucide="instagram" class="size-5"></i
                                                ></a>
                                            <a
                                                href="#"
                                                class="inline-flex size-10 items-center justify-center rounded-md border border-blue-700 text-blue-700 transition-all hover:bg-blue-700 hover:text-white"
                                            ><i data-lucide="linkedin" class="size-5"></i
                                                ></a>
                                            <a
                                                href="#"
                                                class="inline-flex size-10 items-center justify-center rounded-full border border-pink-500 text-pink-500 transition-all hover:bg-pink-500 hover:text-white"
                                            ><i data-lucide="dribbble" class="size-5"></i
                                                ></a>
                                            <a
                                                href="#"
                                                class="inline-flex size-10 items-center justify-center rounded-md border border-emerald-500/40 bg-emerald-500/10 text-emerald-500 transition-all hover:bg-emerald-600 hover:text-white"
                                            ><i data-lucide="codesandbox" class="size-5"></i
                                                ></a>
                                            <a
                                                href="#"
                                                class="inline-flex size-10 items-center justify-center rounded-full border border-gray-800/40 bg-gray-800/10 text-gray-800 transition-all hover:bg-gray-800 hover:text-white"
                                            ><i data-lucide="github" class="size-5"></i
                                                ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="badges" class="scroll-mt-40">
                            <h4 class="mb-4 text-xl text-default-900">Badges</h4>
                            <div class="space-y-4">
                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Default Badges</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="inline-flex items-center gap-x-1.5 rounded-md bg-primary px-3 py-1.5 text-xs font-medium text-white"
                        >Primary</span
                        >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md bg-gray-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Gray</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md bg-emerald-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Emerald</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md bg-red-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Red</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md bg-blue-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Blue</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md bg-yellow-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Yellow</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md bg-sky-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Sky</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md bg-cyan-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Cyan</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md bg-purple-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Purple</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md bg-gray-800 px-3 py-1.5 text-xs font-medium text-white"
                                            >Dark</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md bg-gray-100 px-3 py-1.5 text-xs font-medium text-gray-900"
                                            >Light</span
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Rounded Badges</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="inline-flex items-center gap-x-1.5 rounded-full bg-primary px-3 py-1.5 text-xs font-medium text-white"
                        >Primary</span
                        >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full bg-gray-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Gray</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full bg-emerald-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Emerald</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full bg-red-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Red</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full bg-blue-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Blue</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full bg-yellow-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Yellow</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full bg-sky-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Sky</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full bg-cyan-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Cyan</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full bg-purple-600 px-3 py-1.5 text-xs font-medium text-white"
                                            >Purple</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full bg-gray-800 px-3 py-1.5 text-xs font-medium text-white"
                                            >Dark</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full bg-gray-100 px-3 py-1.5 text-xs font-medium text-gray-900"
                                            >Light</span
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Outline Badges</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="inline-flex items-center gap-x-1.5 rounded-md border border-primary px-3 py-1.5 text-xs font-medium text-primary"
                        >Primary</span
                        >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-gray-600 px-3 py-1.5 text-xs font-medium text-gray-600"
                                            >Gray</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-emerald-600 px-3 py-1.5 text-xs font-medium text-emerald-600"
                                            >Emerald</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-red-600 px-3 py-1.5 text-xs font-medium text-red-600"
                                            >Red</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-blue-600 px-3 py-1.5 text-xs font-medium text-blue-600"
                                            >Blue</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-yellow-600 px-3 py-1.5 text-xs font-medium text-yellow-600"
                                            >Yellow</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-sky-600 px-3 py-1.5 text-xs font-medium text-sky-600"
                                            >Sky</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-cyan-600 px-3 py-1.5 text-xs font-medium text-cyan-600"
                                            >Cyan</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-purple-600 px-3 py-1.5 text-xs font-medium text-purple-600"
                                            >Purple</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-gray-800 px-3 py-1.5 text-xs font-medium text-gray-800"
                                            >Dark</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-gray-100 px-3 py-1.5 text-xs font-medium text-gray-100"
                                            >Light</span
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">
                                            Outline Rounded Badges
                                        </h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="inline-flex items-center gap-x-1.5 rounded-full border border-primary px-3 py-1.5 text-xs font-medium text-primary"
                        >Primary</span
                        >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-gray-600 px-3 py-1.5 text-xs font-medium text-gray-600"
                                            >Gray</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-emerald-600 px-3 py-1.5 text-xs font-medium text-emerald-600"
                                            >Emerald</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-red-600 px-3 py-1.5 text-xs font-medium text-red-600"
                                            >Red</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-blue-600 px-3 py-1.5 text-xs font-medium text-blue-600"
                                            >Blue</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-yellow-600 px-3 py-1.5 text-xs font-medium text-yellow-600"
                                            >Yellow</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-sky-600 px-3 py-1.5 text-xs font-medium text-sky-600"
                                            >Sky</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-cyan-600 px-3 py-1.5 text-xs font-medium text-cyan-600"
                                            >Cyan</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-purple-600 px-3 py-1.5 text-xs font-medium text-purple-600"
                                            >Purple</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-gray-800 px-3 py-1.5 text-xs font-medium text-gray-800"
                                            >Dark</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-gray-100 px-3 py-1.5 text-xs font-medium text-gray-100"
                                            >Light</span
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Soft Badges</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="inline-flex items-center gap-x-1.5 rounded-md border border-primary/20 bg-primary/10 px-3 py-1.5 text-xs font-medium text-primary"
                        >Primary</span
                        >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-gray-600/20 bg-gray-600/10 px-3 py-1.5 text-xs font-medium text-gray-600"
                                            >Gray</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-emerald-600/20 bg-emerald-600/10 px-3 py-1.5 text-xs font-medium text-emerald-600"
                                            >Emerald</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-red-600/20 bg-red-600/10 px-3 py-1.5 text-xs font-medium text-red-600"
                                            >Red</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-blue-600/20 bg-blue-600/10 px-3 py-1.5 text-xs font-medium text-blue-600"
                                            >Blue</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-yellow-600/20 bg-yellow-600/10 px-3 py-1.5 text-xs font-medium text-yellow-600"
                                            >Yellow</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-sky-600/20 bg-sky-600/10 px-3 py-1.5 text-xs font-medium text-sky-600"
                                            >Sky</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-cyan-600/20 bg-cyan-600/10 px-3 py-1.5 text-xs font-medium text-cyan-600"
                                            >Cyan</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-purple-600/20 bg-purple-600/10 px-3 py-1.5 text-xs font-medium text-purple-600"
                                            >Purple</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-gray-800/20 bg-gray-800/10 px-3 py-1.5 text-xs font-medium text-gray-800"
                                            >Dark</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-md border border-gray-100/20 bg-gray-100/10 px-3 py-1.5 text-xs font-medium text-gray-100"
                                            >Light</span
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">
                                            Soft Rounded Badges
                                        </h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                        <span
                            class="inline-flex items-center gap-x-1.5 rounded-full border border-primary/20 bg-primary/10 px-3 py-1.5 text-xs font-medium text-primary"
                        >Primary</span
                        >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-gray-600/20 bg-gray-600/10 px-3 py-1.5 text-xs font-medium text-gray-600"
                                            >Gray</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-emerald-600/20 bg-emerald-600/10 px-3 py-1.5 text-xs font-medium text-emerald-600"
                                            >Emerald</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-red-600/20 bg-red-600/10 px-3 py-1.5 text-xs font-medium text-red-600"
                                            >Red</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-blue-600/20 bg-blue-600/10 px-3 py-1.5 text-xs font-medium text-blue-600"
                                            >Blue</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-yellow-600/20 bg-yellow-600/10 px-3 py-1.5 text-xs font-medium text-yellow-600"
                                            >Yellow</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-sky-600/20 bg-sky-600/10 px-3 py-1.5 text-xs font-medium text-sky-600"
                                            >Sky</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-cyan-600/20 bg-cyan-600/10 px-3 py-1.5 text-xs font-medium text-cyan-600"
                                            >Cyan</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-purple-600/20 bg-purple-600/10 px-3 py-1.5 text-xs font-medium text-purple-600"
                                            >Purple</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-gray-800/20 bg-gray-800/10 px-3 py-1.5 text-xs font-medium text-gray-800"
                                            >Dark</span
                                            >
                                            <span
                                                class="inline-flex items-center gap-x-1.5 rounded-full border border-gray-100/20 bg-gray-100/10 px-3 py-1.5 text-xs font-medium text-gray-100"
                                            >Light</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="alerts" class="scroll-mt-40">
                            <h4 class="mb-4 text-xl text-default-900">Alerts</h4>
                            <div class="space-y-4">
                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Alerts</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-col flex-wrap gap-2">
                                            <div
                                                class="w-full rounded-md bg-primary px-4 py-3 text-sm text-white"
                                                role="alert"
                                            >
                                                <b>Primary</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md bg-gray-500 px-4 py-3 text-sm text-white"
                                                role="alert"
                                            >
                                                <b>Gray</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md bg-emerald-600 px-4 py-3 text-sm text-white"
                                                role="alert"
                                            >
                                                <b>Emerald</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md bg-red-600 px-4 py-3 text-sm text-white"
                                                role="alert"
                                            >
                                                <b>Red</b> alert! You should check in on some of those
                                                fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md bg-blue-600 px-4 py-3 text-sm text-white"
                                                role="alert"
                                            >
                                                <b>Blue</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md bg-yellow-600 px-4 py-3 text-sm text-white"
                                                role="alert"
                                            >
                                                <b>Yellow</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md bg-sky-600 px-4 py-3 text-sm text-white"
                                                role="alert"
                                            >
                                                <b>Sky</b> alert! You should check in on some of those
                                                fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md bg-cyan-600 px-4 py-3 text-sm text-white"
                                                role="alert"
                                            >
                                                <b>Cyan</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md bg-gray-800 px-4 py-3 text-sm text-white"
                                                role="alert"
                                            >
                                                <b>Dark</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md bg-gray-100 px-4 py-2.5 text-sm text-gray-900"
                                                role="alert"
                                            >
                                                <b>Light</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Outline Alerts</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-col flex-wrap gap-2">
                                            <div
                                                class="w-full rounded-md border border-primary px-4 py-3 text-sm text-primary"
                                                role="alert"
                                            >
                                                <b>Primary</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-gray-500 px-4 py-3 text-sm text-gray-500"
                                                role="alert"
                                            >
                                                <b>Gray</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-emerald-600 px-4 py-3 text-sm text-emerald-600"
                                                role="alert"
                                            >
                                                <b>Emerald</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-red-600 px-4 py-3 text-sm text-red-600"
                                                role="alert"
                                            >
                                                <b>Red</b> alert! You should check in on some of those
                                                fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-blue-600 px-4 py-3 text-sm text-blue-600"
                                                role="alert"
                                            >
                                                <b>Blue</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-yellow-600 px-4 py-3 text-sm text-yellow-600"
                                                role="alert"
                                            >
                                                <b>Yellow</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-sky-600 px-4 py-3 text-sm text-sky-600"
                                                role="alert"
                                            >
                                                <b>Sky</b> alert! You should check in on some of those
                                                fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-cyan-600 px-4 py-3 text-sm text-cyan-600"
                                                role="alert"
                                            >
                                                <b>Cyan</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-gray-800 px-4 py-3 text-sm text-gray-800"
                                                role="alert"
                                            >
                                                <b>Dark</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-gray-100 px-4 py-2.5 text-sm text-gray-100"
                                                role="alert"
                                            >
                                                <b>Light</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Soft Alerts</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-col flex-wrap gap-2">
                                            <div
                                                class="w-full rounded-md border border-primary/20 bg-primary/10 px-4 py-3 text-sm text-primary"
                                                role="alert"
                                            >
                                                <b>Primary</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-gray-500/20 bg-gray-500/10 px-4 py-3 text-sm text-gray-500"
                                                role="alert"
                                            >
                                                <b>Gray</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-emerald-600/20 bg-emerald-600/10 px-4 py-3 text-sm text-emerald-600"
                                                role="alert"
                                            >
                                                <b>Emerald</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-red-600/20 bg-red-600/10 px-4 py-3 text-sm text-red-600"
                                                role="alert"
                                            >
                                                <b>Red</b> alert! You should check in on some of those
                                                fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-blue-600/20 bg-blue-600/10 px-4 py-3 text-sm text-blue-600"
                                                role="alert"
                                            >
                                                <b>Blue</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-yellow-600/20 bg-yellow-600/10 px-4 py-3 text-sm text-yellow-600"
                                                role="alert"
                                            >
                                                <b>Yellow</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-sky-600/20 bg-sky-600/10 px-4 py-3 text-sm text-sky-600"
                                                role="alert"
                                            >
                                                <b>Sky</b> alert! You should check in on some of those
                                                fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-cyan-600/20 bg-cyan-600/10 px-4 py-3 text-sm text-cyan-600"
                                                role="alert"
                                            >
                                                <b>Cyan</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-gray-800/20 bg-gray-800/10 px-4 py-3 text-sm text-gray-800"
                                                role="alert"
                                            >
                                                <b>Dark</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-gray-100/20 bg-gray-100/10 px-4 py-2.5 text-sm text-gray-100"
                                                role="alert"
                                            >
                                                <b>Light</b> alert! You should check in on some of
                                                those fields below.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Alert with icon</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-col flex-wrap gap-2">
                                            <div
                                                class="inline-flex w-full items-center rounded-md border border-primary/20 bg-primary/10 px-4 py-3 text-sm text-primary"
                                                role="alert"
                                            >
                                                <i
                                                    data-lucide="circle-dot-dashed"
                                                    class="me-2 size-4"
                                                ></i>
                                                <span
                                                ><b>Primary</b> alert! You should check in on some
                            of those fields below.</span
                                                >
                                            </div>
                                            <div
                                                class="inline-flex w-full items-center rounded-md border border-emerald-600/20 bg-emerald-600/10 px-4 py-3 text-sm text-emerald-600"
                                                role="alert"
                                            >
                                                <i
                                                    data-lucide="check-circle"
                                                    class="me-2 size-4"
                                                ></i>
                                                <span
                                                ><b>Emerald</b> alert! You should check in on some
                            of those fields below.</span
                                                >
                                            </div>
                                            <div
                                                class="inline-flex w-full items-center rounded-md border border-red-600/20 bg-red-600/10 px-4 py-3 text-sm text-red-600"
                                                role="alert"
                                            >
                                                <i data-lucide="skull" class="me-2 size-4"></i>
                                                <span
                                                ><b>Red</b> alert! You should check in on some of
                            those fields below.</span
                                                >
                                            </div>
                                            <div
                                                class="inline-flex w-full items-center rounded-md border border-yellow-600/20 bg-yellow-600/10 px-4 py-3 text-sm text-yellow-600"
                                                role="alert"
                                            >
                                                <i
                                                    data-lucide="alert-triangle"
                                                    class="me-2 size-4"
                                                ></i>
                                                <span
                                                ><b>Yellow</b> alert! You should check in on some of
                            those fields below.</span
                                                >
                                            </div>
                                            <div
                                                class="inline-flex w-full items-center rounded-md border border-sky-600/20 bg-sky-600/10 px-4 py-3 text-sm text-sky-600"
                                                role="alert"
                                            >
                                                <i
                                                    data-lucide="alert-octagon"
                                                    class="me-2 size-4"
                                                ></i>
                                                <span
                                                ><b>Sky</b> alert! You should check in on some of
                            those fields below.</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Alert with Link</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-col flex-wrap gap-2">
                                            <div
                                                class="w-full rounded-md border border-primary/20 bg-primary/10 px-4 py-3 text-sm text-primary"
                                                role="alert"
                                            >
                                                <b>Primary</b> alert! You should check
                                                <a href="#" class="font-bold">Click Here</a>
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-emerald-600/20 bg-emerald-600/10 px-4 py-3 text-sm text-emerald-600"
                                                role="alert"
                                            >
                                                <b>Emerald</b> alert! You should check
                                                <a href="#" class="font-bold">Click Here</a>
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-red-600/20 bg-red-600/10 px-4 py-3 text-sm text-red-600"
                                                role="alert"
                                            >
                                                <b>Red</b> alert! You should check
                                                <a href="#" class="font-bold">Click Here</a>
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-yellow-600/20 bg-yellow-600/10 px-4 py-3 text-sm text-yellow-600"
                                                role="alert"
                                            >
                                                <b>Yellow</b> alert! You should check
                                                <a href="#" class="font-bold">Click Here</a>
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-sky-600/20 bg-sky-600/10 px-4 py-3 text-sm text-sky-600"
                                                role="alert"
                                            >
                                                <b>Sky</b> alert! You should check
                                                <a href="#" class="font-bold">Click Here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="dropdowns" class="scroll-mt-40">
                            <h4 class="mb-4 text-xl text-default-900">Dropdowns</h4>
                            <div class="space-y-4">
                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">
                                            Default Dropdowns
                                        </h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap gap-2">
                                            <div class="hs-dropdown">
                                                <button
                                                    class="hs-dropdown-toggle inline-flex items-center gap-2 rounded-md bg-primary px-6 py-2 text-center text-base text-white transition-all duration-500 hover:bg-primary-700"
                                                >
                                                    Primary
                                                    <i data-lucide="chevron-down" class="size-4"></i>
                                                </button>
                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <ul class="flex flex-col gap-1 py-1.5">
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Another Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Menu Item</a
                                                            >
                                                        </li>
                                                        <hr class="border-default-200"/>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Something else here</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hs-dropdown">
                                                <button
                                                    class="hs-dropdown-toggle inline-flex items-center gap-2 rounded-md bg-gray-500 px-6 py-2 text-center text-base text-white transition-all duration-500 hover:bg-gray-600"
                                                >
                                                    Gray
                                                    <i data-lucide="chevron-down" class="size-4"></i>
                                                </button>
                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <ul class="flex flex-col gap-1 py-1.5">
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Another Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Menu Item</a
                                                            >
                                                        </li>
                                                        <hr class="border-default-200"/>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Something else here</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hs-dropdown">
                                                <button
                                                    class="hs-dropdown-toggle inline-flex items-center gap-2 rounded-md bg-emerald-600 px-6 py-2 text-center text-base text-white transition-all duration-500 hover:bg-emerald-700"
                                                >
                                                    Emerald
                                                    <i data-lucide="chevron-down" class="size-4"></i>
                                                </button>
                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <ul class="flex flex-col gap-1 py-1.5">
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Another Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Menu Item</a
                                                            >
                                                        </li>
                                                        <hr class="border-default-200"/>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Something else here</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hs-dropdown">
                                                <button
                                                    class="hs-dropdown-toggle inline-flex items-center gap-2 rounded-md bg-red-600 px-6 py-2 text-center text-base text-white transition-all duration-500 hover:bg-red-700"
                                                >
                                                    Red
                                                    <i data-lucide="chevron-down" class="size-4"></i>
                                                </button>
                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <ul class="flex flex-col gap-1 py-1.5">
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Another Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Menu Item</a
                                                            >
                                                        </li>
                                                        <hr class="border-default-200"/>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Something else here</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hs-dropdown">
                                                <button
                                                    class="hs-dropdown-toggle inline-flex items-center gap-2 rounded-md bg-blue-600 px-6 py-2 text-center text-base text-white transition-all duration-500 hover:bg-blue-700"
                                                >
                                                    Blue
                                                    <i data-lucide="chevron-down" class="size-4"></i>
                                                </button>
                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <ul class="flex flex-col gap-1 py-1.5">
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Another Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Menu Item</a
                                                            >
                                                        </li>
                                                        <hr class="border-default-200"/>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Something else here</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hs-dropdown">
                                                <button
                                                    class="hs-dropdown-toggle inline-flex items-center gap-2 rounded-md bg-yellow-500 px-6 py-2 text-center text-base text-white transition-all duration-500 hover:bg-yellow-600"
                                                >
                                                    Yellow
                                                    <i data-lucide="chevron-down" class="size-4"></i>
                                                </button>
                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <ul class="flex flex-col gap-1 py-1.5">
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Another Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Menu Item</a
                                                            >
                                                        </li>
                                                        <hr class="border-default-200"/>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Something else here</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hs-dropdown">
                                                <button
                                                    class="hs-dropdown-toggle inline-flex items-center gap-2 rounded-md bg-sky-600 px-6 py-2 text-center text-base text-white transition-all duration-500 hover:bg-sky-700"
                                                >
                                                    Sky
                                                    <i data-lucide="chevron-down" class="size-4"></i>
                                                </button>
                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <ul class="flex flex-col gap-1 py-1.5">
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Another Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Menu Item</a
                                                            >
                                                        </li>
                                                        <hr class="border-default-200"/>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Something else here</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hs-dropdown">
                                                <button
                                                    class="hs-dropdown-toggle inline-flex items-center gap-2 rounded-md bg-cyan-600 px-6 py-2 text-center text-base text-white transition-all duration-500 hover:bg-cyan-700"
                                                >
                                                    Cyan
                                                    <i data-lucide="chevron-down" class="size-4"></i>
                                                </button>
                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <ul class="flex flex-col gap-1 py-1.5">
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Another Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Menu Item</a
                                                            >
                                                        </li>
                                                        <hr class="border-default-200"/>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Something else here</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hs-dropdown">
                                                <button
                                                    class="hs-dropdown-toggle inline-flex items-center gap-2 rounded-md bg-gray-800 px-6 py-2 text-center text-base text-white transition-all duration-500 hover:bg-gray-900"
                                                >
                                                    Dark
                                                    <i data-lucide="chevron-down" class="size-4"></i>
                                                </button>
                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <ul class="flex flex-col gap-1 py-1.5">
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Another Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Menu Item</a
                                                            >
                                                        </li>
                                                        <hr class="border-default-200"/>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Something else here</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hs-dropdown">
                                                <button
                                                    class="hs-dropdown-toggle inline-flex items-center gap-2 rounded-md bg-gray-100 px-6 py-2 text-center text-base text-gray-900 transition-all duration-500 hover:bg-gray-200"
                                                >
                                                    Light
                                                    <i data-lucide="chevron-down" class="size-4"></i>
                                                </button>
                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <ul class="flex flex-col gap-1 py-1.5">
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Another Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Menu Item</a
                                                            >
                                                        </li>
                                                        <hr class="border-default-200"/>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Something else here</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">
                                            Dropdowns Variants
                                        </h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap gap-2">
                                            <div class="hs-dropdown [--auto-close:inside]">
                                                <button
                                                    type="button"
                                                    class="hs-dropdown-toggle inline-flex items-center gap-2 rounded-md bg-primary px-6 py-2 text-center text-base text-white transition-all duration-500 hover:bg-primary-700"
                                                >
                                                    Radio
                                                    <i
                                                        data-lucide="chevron-down"
                                                        class="ms-1 size-4"
                                                    ></i>
                                                </button>

                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white p-1.5 opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <div
                                                        class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                    >
                                                        <div class="flex items-center">
                                                            <input
                                                                type="radio"
                                                                name="default-radio"
                                                                class="size-4 border-default-200 bg-default-50 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary/60 focus:ring-offset-0"
                                                                id="default-radio"
                                                            />
                                                            <label
                                                                for="default-radio"
                                                                class="ms-2 text-sm text-default-700"
                                                            >Default radio</label
                                                            >
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                    >
                                                        <div class="flex items-center">
                                                            <input
                                                                type="radio"
                                                                name="default-radio"
                                                                class="size-4 border-default-200 bg-default-50 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary/60 focus:ring-offset-0"
                                                                id="checked-radio"
                                                                checked=""
                                                            />
                                                            <label
                                                                for="checked-radio"
                                                                class="ms-2 text-sm text-default-700"
                                                            >Checked radio</label
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="hs-dropdown [--auto-close:inside]">
                                                <button
                                                    type="button"
                                                    class="hs-dropdown-toggle inline-flex items-center gap-2 rounded-md bg-primary px-6 py-2 text-center text-base text-white transition-all duration-500 hover:bg-primary-700"
                                                >
                                                    CheckBox
                                                    <i
                                                        data-lucide="chevron-down"
                                                        class="ms-1 size-4"
                                                    ></i>
                                                </button>

                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white p-1.5 opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <div
                                                        class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                    >
                                                        <div class="flex items-center">
                                                            <input
                                                                type="checkbox"
                                                                class="size-4 rounded border-default-200 bg-default-50 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary/60 focus:ring-offset-0"
                                                                id="default-checkbox"
                                                            />
                                                            <label
                                                                for="default-checkbox"
                                                                class="ms-2 text-sm text-default-700"
                                                            >Default checkbox</label
                                                            >
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                    >
                                                        <div class="flex items-center">
                                                            <input
                                                                type="checkbox"
                                                                class="size-4 rounded border-default-200 bg-default-50 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary/60 focus:ring-offset-0"
                                                                id="checked-checkbox"
                                                                checked=""
                                                            />
                                                            <label
                                                                for="checked-checkbox"
                                                                class="ms-2 text-sm text-default-700"
                                                            >Checked checkbox</label
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="hs-dropdown [--auto-close:inside]">
                                                <button
                                                    type="button"
                                                    class="hs-dropdown-toggle inline-flex items-center gap-2 rounded-md bg-primary px-6 py-2 text-center text-base text-white transition-all duration-500 hover:bg-primary-700"
                                                >
                                                    Form
                                                    <i
                                                        data-lucide="chevron-down"
                                                        class="ms-1 size-4"
                                                    ></i>
                                                </button>

                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white p-4 opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <form class="">
                                                        <div class="mb-3 space-y-1">
                                                            <label
                                                                for="exampleInputEmail1"
                                                                class="font-medium text-default-800"
                                                            >Email address</label
                                                            >
                                                            <input
                                                                type="email"
                                                                class="text-defa-900 block w-full rounded border-default-200 bg-transparent px-3 py-1.5 focus:border-default-200 focus:ring-transparent"
                                                                id="exampleInputEmail1"
                                                                aria-describedby="emailHelp"
                                                                placeholder="Enter email"
                                                            />
                                                            <span class="inline-block"
                                                            ><small
                                                                    id="emailHelp"
                                                                    class="form-text text-sm text-default-700"
                                                                >We'll never share your email with anyone
                                    else.</small
                                                                ></span
                                                            >
                                                        </div>
                                                        <div class="mb-3 space-y-1">
                                                            <label
                                                                for="exampleInputPassword1"
                                                                class="font-medium text-default-800"
                                                            >Password</label
                                                            >
                                                            <input
                                                                type="password"
                                                                class="text-defa-900 block w-full rounded border-default-200 bg-transparent px-3 py-1.5 focus:border-default-200 focus:ring-transparent"
                                                                id="exampleInputPassword1"
                                                                placeholder="Password"
                                                            />
                                                        </div>
                                                        <div class="mb-3 flex items-center gap-2">
                                                            <input
                                                                type="checkbox"
                                                                class="size-4 rounded border-default-200 bg-default-50 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary/60 focus:ring-offset-0"
                                                                id="checkmeout0"
                                                            />
                                                            <label
                                                                class="inline-block text-sm font-medium text-default-700"
                                                                for="checkmeout0"
                                                            >Check me out !</label
                                                            >
                                                        </div>
                                                        <button
                                                            type="submit"
                                                            class="inline-block rounded bg-primary px-4 py-2 text-center text-sm text-white transition-all duration-500 hover:bg-primary-700"
                                                        >
                                                            Submit
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="hs-dropdown">
                                                <button
                                                    class="hs-dropdown-toggle hs-dropdown-toggle inline-flex items-center gap-2 rounded-full border border-default-200 py-1 pe-2 ps-1 text-center text-base text-default-900 transition-all duration-500 hover:border-primary/40 hover:bg-primary/5 hover:text-primary"
                                                >
                            <span
                                class="inline-flex size-9 items-center overflow-hidden rounded-full"
                            ><img
                                    src="/images/avatars/img-1.jpg"
                                    alt=""
                                    class="h-full max-w-full"
                                /></span>
                                                    Jesica<i
                                                        data-lucide="chevron-down"
                                                        class="size-4"
                                                    ></i>
                                                </button>
                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <ul class="flex flex-col gap-1 py-1.5">
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            ><i
                                                                    data-lucide="user-circle"
                                                                    class="me-2 size-4"
                                                                ></i>
                                                                Profile</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            ><i
                                                                    data-lucide="cog"
                                                                    class="me-2 size-4"
                                                                ></i>
                                                                Settings</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            ><i
                                                                    data-lucide="mic"
                                                                    class="me-2 size-4"
                                                                ></i>
                                                                Support</a
                                                            >
                                                        </li>
                                                        <hr class="border-default-200"/>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-red-500/20 hover:text-red-500"
                                                                href="{{ route('second', [ 'auth' , 'logout']) }}"
                                                            ><i
                                                                    data-lucide="log-out"
                                                                    class="me-2 size-4"
                                                                ></i>
                                                                Log Out</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="hs-dropdown">
                                                <button
                                                    class="hs-dropdown-toggle inline-flex size-10 items-center justify-center rounded-md bg-primary text-white transition-all duration-500 hover:bg-primary-700"
                                                >
                                                    <i data-lucide="more-vertical" class="size-4"></i>
                                                </button>
                                                <div
                                                    class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                                >
                                                    <ul class="flex flex-col gap-1 py-1.5">
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Another Action</a
                                                            >
                                                        </li>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Menu Item</a
                                                            >
                                                        </li>
                                                        <hr class="border-default-200"/>
                                                        <li class="mx-1.5">
                                                            <a
                                                                class="flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                                href="#"
                                                            >Something else here</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="accordions" class="scroll-mt-40">
                            <h4 class="mb-4 text-xl text-default-900">Accordions</h4>
                            <div class="space-y-4">
                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">
                                            Accordion Example
                                        </h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap items-center gap-2">
                                            <div class="hs-accordion-group">
                                                <div
                                                    class="hs-accordion active"
                                                    id="hs-basic-heading-one"
                                                >
                                                    <button
                                                        class="hs-accordion-toggle inline-flex w-full items-center gap-x-3 rounded-lg py-3 text-start font-semibold text-default-800 hover:text-default-950 disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary"
                                                        aria-controls="hs-basic-collapse-one"
                                                    >
                                                        <i
                                                            data-lucide="minus"
                                                            class="hidden size-4 hs-accordion-active:block"
                                                        ></i>
                                                        <i
                                                            data-lucide="plus"
                                                            class="size-4 hs-accordion-active:hidden"
                                                        ></i>
                                                        Accordion #1
                                                    </button>
                                                    <div
                                                        id="hs-basic-collapse-one"
                                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                        aria-labelledby="hs-basic-heading-one"
                                                    >
                                                        <p class="text-default-800">
                                                            <em
                                                            >This is the third item's accordion body.</em
                                                            >
                                                            It is hidden by default, until the collapse
                                                            plugin adds the appropriate classes that we use
                                                            to style each element. These classes control the
                                                            overall appearance, as well as the showing and
                                                            hiding via CSS transitions.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="hs-accordion" id="hs-basic-heading-two">
                                                    <button
                                                        class="hs-accordion-toggle inline-flex w-full items-center gap-x-3 rounded-lg py-3 text-start font-semibold text-default-800 hover:text-default-950 disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary"
                                                        aria-controls="hs-basic-collapse-two"
                                                    >
                                                        <i
                                                            data-lucide="minus"
                                                            class="hidden size-4 hs-accordion-active:block"
                                                        ></i>
                                                        <i
                                                            data-lucide="plus"
                                                            class="size-4 hs-accordion-active:hidden"
                                                        ></i>
                                                        Accordion #2
                                                    </button>
                                                    <div
                                                        id="hs-basic-collapse-two"
                                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                        aria-labelledby="hs-basic-heading-two"
                                                    >
                                                        <p class="text-default-800">
                                                            <em
                                                            >This is the third item's accordion body.</em
                                                            >
                                                            It is hidden by default, until the collapse
                                                            plugin adds the appropriate classes that we use
                                                            to style each element. These classes control the
                                                            overall appearance, as well as the showing and
                                                            hiding via CSS transitions.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="hs-accordion" id="hs-basic-heading-three">
                                                    <button
                                                        class="hs-accordion-toggle inline-flex w-full items-center gap-x-3 rounded-lg py-3 text-start font-semibold text-default-800 hover:text-default-950 disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary"
                                                        aria-controls="hs-basic-collapse-three"
                                                    >
                                                        <i
                                                            data-lucide="minus"
                                                            class="hidden size-4 hs-accordion-active:block"
                                                        ></i>
                                                        <i
                                                            data-lucide="plus"
                                                            class="size-4 hs-accordion-active:hidden"
                                                        ></i>
                                                        Accordion #3
                                                    </button>
                                                    <div
                                                        id="hs-basic-collapse-three"
                                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                        aria-labelledby="hs-basic-heading-three"
                                                    >
                                                        <p class="text-default-800">
                                                            <em
                                                            >This is the third item's accordion body.</em
                                                            >
                                                            It is hidden by default, until the collapse
                                                            plugin adds the appropriate classes that we use
                                                            to style each element. These classes control the
                                                            overall appearance, as well as the showing and
                                                            hiding via CSS transitions.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Card Accordion</h4>
                                    </div>
                                    <div class="p-6">
                                        <div>
                                            <!-- Accordion -->
                                            <div class="hs-accordion-group space-y-3">
                                                <div class="rounded-md border border-default-200">
                                                    <div
                                                        class="hs-accordion"
                                                        id="hs-basic-with-title-and-arrow-stretched-heading-one"
                                                    >
                                                        <button
                                                            class="hs-accordion-toggle group inline-flex w-full items-center gap-x-3 p-3 text-left font-semibold text-default-600 transition hover:text-default-950"
                                                            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one"
                                                        >
                                                            What is Lorem Ipsum?
                                                            <i
                                                                data-lucide="chevron-down"
                                                                class="ms-auto size-4 transition-all hs-accordion-active:rotate-180"
                                                            ></i>
                                                        </button>
                                                        <div
                                                            id="hs-basic-with-title-and-arrow-stretched-collapse-one"
                                                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                            aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one"
                                                        >
                                                            <div class="border-t border-default-200 p-3">
                                                                <p class="text-default-800">
                                                                    Anim pariatur cliche reprehenderit, enim
                                                                    eiusmod high life accusamus terry richardson
                                                                    ad squid. 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food
                                                                    truck quinoa nesciunt laborum eiusmod.
                                                                    Brunch 3 wolf moon tempor, sunt aliqua put a
                                                                    bird on it squid single-origin coffee nulla
                                                                    assumenda shoreditch et. Nihil anim keffiyeh
                                                                    helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably
                                                                    haven't heard of them accusamus labore
                                                                    sustainable VHS.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="rounded-md border border-default-200">
                                                    <div
                                                        class="hs-accordion"
                                                        id="hs-basic-with-title-and-arrow-stretched-heading-two"
                                                    >
                                                        <button
                                                            class="hs-accordion-toggle group inline-flex w-full items-center gap-x-3 p-3 text-left font-semibold text-default-600 transition hover:text-default-950"
                                                            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two"
                                                        >
                                                            Why do we use it?
                                                            <i
                                                                data-lucide="chevron-down"
                                                                class="ms-auto size-4 transition-all hs-accordion-active:rotate-180"
                                                            ></i>
                                                        </button>
                                                        <div
                                                            id="hs-basic-with-title-and-arrow-stretched-collapse-two"
                                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                            aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two"
                                                        >
                                                            <div class="border-t border-default-200 p-3">
                                                                <p class="text-default-800">
                                                                    Anim pariatur cliche reprehenderit, enim
                                                                    eiusmod high life accusamus terry richardson
                                                                    ad squid. 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food
                                                                    truck quinoa nesciunt laborum eiusmod.
                                                                    Brunch 3 wolf moon tempor, sunt aliqua put a
                                                                    bird on it squid single-origin coffee nulla
                                                                    assumenda shoreditch et. Nihil anim keffiyeh
                                                                    helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably
                                                                    haven't heard of them accusamus labore
                                                                    sustainable VHS.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="rounded-md border border-default-200">
                                                    <div
                                                        class="hs-accordion"
                                                        id="hs-basic-with-title-and-arrow-stretched-heading-three"
                                                    >
                                                        <button
                                                            class="hs-accordion-toggle group inline-flex w-full items-center gap-x-3 p-3 text-left font-semibold text-default-600 transition hover:text-default-950"
                                                            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three"
                                                        >
                                                            Where does it come from?
                                                            <i
                                                                data-lucide="chevron-down"
                                                                class="ms-auto size-4 transition-all hs-accordion-active:rotate-180"
                                                            ></i>
                                                        </button>
                                                        <div
                                                            id="hs-basic-with-title-and-arrow-stretched-collapse-three"
                                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                            aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three"
                                                        >
                                                            <div class="border-t border-default-200 p-3">
                                                                <p class="text-default-800">
                                                                    Anim pariatur cliche reprehenderit, enim
                                                                    eiusmod high life accusamus terry richardson
                                                                    ad squid. 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food
                                                                    truck quinoa nesciunt laborum eiusmod.
                                                                    Brunch 3 wolf moon tempor, sunt aliqua put a
                                                                    bird on it squid single-origin coffee nulla
                                                                    assumenda shoreditch et. Nihil anim keffiyeh
                                                                    helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably
                                                                    haven't heard of them accusamus labore
                                                                    sustainable VHS.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Accordion -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="nav-tabs" class="scroll-mt-40">
                            <h4 class="mb-4 text-xl text-default-900">Nav Tabs</h4>
                            <div class="space-y-4">
                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">
                                            Horizontal Nav Tabs
                                        </h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-col flex-wrap items-start gap-2">
                                            <div class="flex">
                                                <nav
                                                    class="flex w-full items-center justify-center gap-2"
                                                    aria-label="Tabs"
                                                    role="tablist"
                                                >
                                                    <button
                                                        type="button"
                                                        class="active inline-flex items-center justify-center gap-x-2 rounded-lg bg-default-200 px-6 py-2.5 text-sm font-medium text-default-500 hover:text-default-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-primary hs-tab-active:text-white"
                                                        id="segment-item-1"
                                                        data-hs-tab="#segment-1"
                                                        aria-controls="segment-1"
                                                        role="tab"
                                                    >
                                                        Tab 1
                                                    </button>
                                                    <button
                                                        type="button"
                                                        class="inline-flex items-center justify-center gap-x-2 rounded-lg bg-default-200 px-6 py-2.5 text-sm font-medium text-default-500 hover:text-default-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-primary hs-tab-active:text-white"
                                                        id="segment-item-2"
                                                        data-hs-tab="#segment-2"
                                                        aria-controls="segment-2"
                                                        role="tab"
                                                    >
                                                        Tab 2
                                                    </button>
                                                    <button
                                                        type="button"
                                                        class="inline-flex items-center justify-center gap-x-2 rounded-lg bg-default-200 px-6 py-2.5 text-sm font-medium text-default-500 hover:text-default-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-primary hs-tab-active:text-white"
                                                        id="segment-item-3"
                                                        data-hs-tab="#segment-3"
                                                        aria-controls="segment-3"
                                                        role="tab"
                                                    >
                                                        Tab 3
                                                    </button>
                                                </nav>
                                            </div>

                                            <div class="mt-3">
                                                <div
                                                    id="segment-1"
                                                    role="tabpanel"
                                                    aria-labelledby="segment-item-1"
                                                >
                                                    <p class="text-default-500">
                                                        Lorem ipsum dolor sit amet, consectetuer
                                                        adipiscing elit. Aenean commodo ligula eget dolor.
                                                        Aenean massa. Cum sociis natoque penatibus et
                                                        magnis dis parturient montes, nascetur ridiculus
                                                        mus. Donec quam felis, ultricies nec, pellentesque
                                                        eu, pretium quis, sem. Nulla consequat massa quis
                                                        enim. Donec pede justo, fringilla vel, aliquet
                                                        nec, vulputate eget, arcu. In enim justo, rhoncus
                                                        ut, imperdiet a, venenatis vitae, justo. Nullam
                                                        dictum felis eu pede mollis pretium. Integer
                                                        tincidunt. Cras dapibus. Vivamus elementum semper
                                                        nisi.
                                                    </p>
                                                </div>
                                                <div
                                                    id="segment-2"
                                                    class="hidden"
                                                    role="tabpanel"
                                                    aria-labelledby="segment-item-2"
                                                >
                                                    <p class="text-default-500">
                                                        Aenean vulputate eleifend tellus. Aenean leo
                                                        ligula, porttitor eu, consequat vitae, eleifend
                                                        ac, enim. Aliquam lorem ante, dapibus in, viverra
                                                        quis, feugiat a, tellus. Phasellus viverra nulla
                                                        ut metus varius laoreet. Quisque rutrum. Aenean
                                                        imperdiet. Etiam ultricies nisi vel augue.
                                                        Curabitur ullamcorper ultricies nisi. Nam eget
                                                        dui. Etiam rhoncus. Maecenas tempus, tellus eget
                                                        condimentum rhoncus, sem quam semper libero, sit
                                                        amet adipiscing sem neque sed ipsum. Nam quam
                                                        nunc, blandit vel, luctus pulvinar, hendrerit id,
                                                        lorem.
                                                    </p>
                                                </div>
                                                <div
                                                    id="segment-3"
                                                    class="hidden"
                                                    role="tabpanel"
                                                    aria-labelledby="segment-item-3"
                                                >
                                                    <p class="text-default-500">
                                                        Maecenas nec odio et ante tincidunt tempus. Donec
                                                        vitae sapien ut libero venenatis faucibus. Nullam
                                                        quis ante. Etiam sit amet orci eget eros faucibus
                                                        tincidunt. Duis leo. Sed fringilla mauris sit amet
                                                        nibh. Donec sodales sagittis magna.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">
                                            Vertical Nav Tabs
                                        </h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="grid grid-cols-4 gap-6">
                                            <div class="flex">
                                                <nav
                                                    class="flex w-full flex-col gap-2"
                                                    aria-label="Tabs"
                                                    role="tablist"
                                                >
                                                    <button
                                                        type="button"
                                                        class="active inline-flex items-center justify-center gap-x-2 rounded-lg bg-default-200 px-6 py-2.5 text-sm font-medium text-default-500 hover:text-default-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-primary hs-tab-active:text-white"
                                                        id="vr-item-1"
                                                        data-hs-tab="#vr-1"
                                                        aria-controls="vr-1"
                                                        role="tab"
                                                    >
                                                        Tab 1
                                                    </button>
                                                    <button
                                                        type="button"
                                                        class="inline-flex items-center justify-center gap-x-2 rounded-lg bg-default-200 px-6 py-2.5 text-sm font-medium text-default-500 hover:text-default-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-primary hs-tab-active:text-white"
                                                        id="vr-item-2"
                                                        data-hs-tab="#vr-2"
                                                        aria-controls="vr-2"
                                                        role="tab"
                                                    >
                                                        Tab 2
                                                    </button>
                                                    <button
                                                        type="button"
                                                        class="inline-flex items-center justify-center gap-x-2 rounded-lg bg-default-200 px-6 py-2.5 text-sm font-medium text-default-500 hover:text-default-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-primary hs-tab-active:text-white"
                                                        id="vr-item-3"
                                                        data-hs-tab="#vr-3"
                                                        aria-controls="vr-3"
                                                        role="tab"
                                                    >
                                                        Tab 3
                                                    </button>
                                                </nav>
                                            </div>

                                            <div class="col-span-3">
                                                <div
                                                    id="vr-1"
                                                    role="tabpanel"
                                                    aria-labelledby="vr-item-1"
                                                >
                                                    <p class="text-default-500">
                                                        Lorem ipsum dolor sit amet, consectetuer
                                                        adipiscing elit. Aenean commodo ligula eget dolor.
                                                        Aenean massa. Cum sociis natoque penatibus et
                                                        magnis dis parturient montes, nascetur ridiculus
                                                        mus. Donec quam felis, ultricies nec, pellentesque
                                                        eu, pretium quis, sem. Nulla consequat massa quis
                                                        enim. Donec pede justo, fringilla vel, aliquet
                                                        nec, vulputate eget, arcu. In enim justo, rhoncus
                                                        ut, imperdiet a, venenatis vitae, justo. Nullam
                                                        dictum felis eu pede mollis pretium. Integer
                                                        tincidunt. Cras dapibus. Vivamus elementum semper
                                                        nisi.
                                                    </p>
                                                </div>
                                                <div
                                                    id="vr-2"
                                                    class="hidden"
                                                    role="tabpanel"
                                                    aria-labelledby="vr-item-2"
                                                >
                                                    <p class="text-default-500">
                                                        Aenean vulputate eleifend tellus. Aenean leo
                                                        ligula, porttitor eu, consequat vitae, eleifend
                                                        ac, enim. Aliquam lorem ante, dapibus in, viverra
                                                        quis, feugiat a, tellus. Phasellus viverra nulla
                                                        ut metus varius laoreet. Quisque rutrum. Aenean
                                                        imperdiet. Etiam ultricies nisi vel augue.
                                                        Curabitur ullamcorper ultricies nisi. Nam eget
                                                        dui. Etiam rhoncus. Maecenas tempus, tellus eget
                                                        condimentum rhoncus, sem quam semper libero, sit
                                                        amet adipiscing sem neque sed ipsum. Nam quam
                                                        nunc, blandit vel, luctus pulvinar, hendrerit id,
                                                        lorem.
                                                    </p>
                                                </div>
                                                <div
                                                    id="vr-3"
                                                    class="hidden"
                                                    role="tabpanel"
                                                    aria-labelledby="vr-item-3"
                                                >
                                                    <p class="text-default-500">
                                                        Maecenas nec odio et ante tincidunt tempus. Donec
                                                        vitae sapien ut libero venenatis faucibus. Nullam
                                                        quis ante. Etiam sit amet orci eget eros faucibus
                                                        tincidunt. Duis leo. Sed fringilla mauris sit amet
                                                        nibh. Donec sodales sagittis magna.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="pagination" class="scroll-mt-40">
                            <h4 class="mb-4 text-xl text-default-900">Pagination</h4>
                            <div class="space-y-4">
                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">
                                            Simple Pagination
                                        </h4>
                                    </div>
                                    <div class="p-6">
                                        <!-- Pagination -->
                                        <nav class="flex items-center gap-x-1">
                                            <button
                                                type="button"
                                                class="inline-flex size-10 items-center justify-center gap-x-2 rounded-lg border border-transparent px-2.5 py-2 text-sm text-default-800 hover:bg-default-100 focus:bg-default-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                                            >
                                                <i data-lucide="chevron-left" class="size-4"></i>
                                            </button>
                                            <div class="flex items-center gap-x-1">
                                                <button
                                                    type="button"
                                                    class="flex size-10 items-center justify-center rounded-lg border border-default-200 px-3 py-2 text-sm text-default-800 focus:bg-default-50 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                                                    aria-current="page"
                                                >
                                                    1
                                                </button>
                                                <button
                                                    type="button"
                                                    class="flex size-10 items-center justify-center rounded-lg border border-transparent px-3 py-2 text-sm text-default-800 hover:bg-default-100 focus:bg-default-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                                                >
                                                    2
                                                </button>
                                                <button
                                                    type="button"
                                                    class="flex size-10 items-center justify-center rounded-lg border border-transparent px-3 py-2 text-sm text-default-800 hover:bg-default-100 focus:bg-default-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                                                >
                                                    3
                                                </button>
                                            </div>
                                            <button
                                                type="button"
                                                class="inline-flex size-10 items-center justify-center gap-x-2 rounded-lg border border-transparent px-2.5 py-2 text-sm text-default-800 hover:bg-default-100 focus:bg-default-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                                            >
                                                <i data-lucide="chevron-right" class="size-4"></i>
                                            </button>
                                        </nav>
                                        <!-- End Pagination -->
                                    </div>
                                </div>

                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">
                                            Bordered Group Pagination
                                        </h4>
                                    </div>
                                    <div class="p-6">
                                        <!-- Pagination -->
                                        <nav class="flex items-center -space-x-px">
                                            <button
                                                type="button"
                                                class="inline-flex min-h-[38px] min-w-[38px] items-center justify-center gap-x-1.5 border border-default-200 px-2.5 py-2 text-sm text-default-800 first:rounded-s-lg last:rounded-e-lg hover:bg-default-100 focus:bg-default-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                                            >
                                                <i data-lucide="chevron-left" class="size-4"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-default-200 bg-default-200 px-3 py-2 text-sm text-default-800 first:rounded-s-lg last:rounded-e-lg focus:bg-default-300 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                                                aria-current="page"
                                            >
                                                1
                                            </button>
                                            <button
                                                type="button"
                                                class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-default-200 px-3 py-2 text-sm text-default-800 first:rounded-s-lg last:rounded-e-lg hover:bg-default-100 focus:bg-default-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                                            >
                                                2
                                            </button>
                                            <button
                                                type="button"
                                                class="flex min-h-[38px] min-w-[38px] items-center justify-center border border-default-200 px-3 py-2 text-sm text-default-800 first:rounded-s-lg last:rounded-e-lg hover:bg-default-100 focus:bg-default-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                                            >
                                                3
                                            </button>
                                            <button
                                                type="button"
                                                class="inline-flex min-h-[38px] min-w-[38px] items-center justify-center gap-x-1.5 border border-default-200 px-2.5 py-2 text-sm text-default-800 first:rounded-s-lg last:rounded-e-lg hover:bg-default-100 focus:bg-default-100 focus:outline-none disabled:pointer-events-none disabled:opacity-50"
                                            >
                                                <i data-lucide="chevron-right" class="size-4"></i>
                                            </button>
                                        </nav>
                                        <!-- End Pagination -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="modals" class="scroll-mt-40">
                            <h4 class="mb-4 text-xl text-default-900">Modals</h4>
                            <div class="space-y-4">
                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Simple Modal</h4>
                                    </div>
                                    <div class="p-6">
                                        <div>
                                            <button
                                                type="button"
                                                class="inline-block rounded-md border border-primary bg-primary px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-white duration-500 hover:border-primary-700 hover:bg-primary-700"
                                                data-hs-overlay="#hs-basic-modal"
                                            >
                                                Standard Modal
                                            </button>

                                            <div
                                                id="hs-basic-modal"
                                                class="hs-overlay fixed left-0 top-0 z-[60] hidden h-full w-full overflow-y-auto overflow-x-hidden"
                                            >
                                                <div
                                                    class="m-3 opacity-0 transition-all hs-overlay-open:opacity-100 hs-overlay-open:duration-500 sm:mx-auto sm:w-full sm:max-w-lg"
                                                >
                                                    <div
                                                        border-default-200=""
                                                        class="flex flex-col rounded border border-default-200 bg-white shadow-sm dark:bg-default-50"
                                                    >
                                                        <div
                                                            class="flex items-center justify-between border-b border-default-200 px-4 py-3"
                                                        >
                                                            <h3 class="font-bold text-default-800">
                                                                Modal Heading
                                                            </h3>
                                                            <button
                                                                type="button"
                                                                class="inline-flex size-8 flex-shrink-0 items-center justify-center rounded text-sm text-default-500 transition-all hover:text-default-400 focus:outline-none focus:ring-2 focus:ring-default-400 focus:ring-offset-2 focus:ring-offset-default-50"
                                                                data-hs-overlay="#hs-basic-modal"
                                                            >
                                                                <span class="sr-only">Close</span>
                                                                <i data-lucide="x" class="size-5"></i>
                                                            </button>
                                                        </div>
                                                        <div class="overflow-y-auto p-4">
                                                            <h5 class="mb-2.5 text-base font-semibold">
                                                                Text in a modal
                                                            </h5>
                                                            <p class="mb-4 text-sm font-medium">
                                                                Duis mollis, est non commodo luctus, nisi erat
                                                                porttitor ligula.
                                                            </p>
                                                            <hr class="my-5 border-default-200"/>
                                                            <h5 class="mb-2.5 text-base font-semibold">
                                                                Overflowing text to show scroll behavior
                                                            </h5>
                                                            <p
                                                                class="mb-4 text-sm font-medium text-default-600"
                                                            >
                                                                Cras mattis consectetur purus sit amet
                                                                fermentum. Cras justo odio, dapibus ac
                                                                facilisis in, egestas eget quam. Morbi leo
                                                                risus, porta ac consectetur ac, vestibulum at
                                                                eros.
                                                            </p>
                                                            <p
                                                                class="mb-4 text-sm font-medium text-default-600"
                                                            >
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus
                                                                vel augue laoreet rutrum faucibus dolor
                                                                auctor.
                                                            </p>
                                                            <p class="text-sm text-default-600">
                                                                Aenean lacinia bibendum nulla sed consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor fringilla.
                                                            </p>
                                                        </div>
                                                        <!-- End Modal Details -->
                                                        <div
                                                            class="flex items-center justify-end gap-2 border-t border-default-200 p-4"
                                                        >
                                                            <button
                                                                class="inline-block rounded-md border border-primary/20 bg-primary/10 px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-primary hover:border-primary hover:bg-primary hover:text-white"
                                                                type="button"
                                                                data-hs-overlay="#hs-basic-modal"
                                                            >
                                                                Close
                                                            </button>
                                                            <a
                                                                class="inline-block rounded-md border border-primary bg-primary px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-white hover:border-primary-700 hover:bg-primary-700"
                                                                href="javascript:void(0)"
                                                            >Save Changes</a
                                                            >
                                                        </div>
                                                        <!-- End Modal Footer -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Modal Content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="popover" class="scroll-mt-40">
                            <h4 class="mb-4 text-xl text-default-900">Popover</h4>
                            <div class="space-y-4">
                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Popovers</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap gap-3">
                                            <div
                                                class="hs-tooltip inline-block [--placement:top] [--trigger:click]"
                                            >
                                                <a
                                                    class="hs-tooltip-toggle block text-center"
                                                    href="javascript:;"
                                                >
                                                    <div
                                                        class="inline-block rounded-md border border-primary bg-primary px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-white hover:border-primary-700 hover:bg-primary-700"
                                                    >
                                                        Popover on Top
                                                    </div>
                                                    <div
                                                        class="hs-tooltip-content relative z-50 hidden w-60 rounded border bg-default-800 px-3 py-1 font-medium text-default-200 opacity-0 transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Vivamus sagittis lacus vel augue laoreet rutrum
                                                        faucibus.
                                                    </div>
                                                </a>
                                            </div>

                                            <div
                                                class="hs-tooltip inline-block [--placement:bottom] [--trigger:click]"
                                            >
                                                <a
                                                    class="hs-tooltip-toggle block text-center"
                                                    href="javascript:;"
                                                >
                                                    <div
                                                        class="inline-block rounded-md border border-primary bg-primary px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-white hover:border-primary-700 hover:bg-primary-700"
                                                    >
                                                        Popover on Bottom
                                                    </div>
                                                    <div
                                                        class="hs-tooltip-content relative z-50 hidden w-60 rounded border bg-default-800 px-3 py-1 font-medium text-default-200 opacity-0 transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Vivamus sagittis lacus vel augue laoreet rutrum
                                                        faucibus.
                                                    </div>
                                                </a>
                                            </div>

                                            <div
                                                class="hs-tooltip inline-block [--trigger:click] [--placement:left]"
                                            >
                                                <a
                                                    class="hs-tooltip-toggle block text-center"
                                                    href="javascript:;"
                                                >
                                                    <div
                                                        class="inline-block rounded-md border border-primary bg-primary px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-white hover:border-primary-700 hover:bg-primary-700"
                                                    >
                                                        Popover on Left
                                                    </div>
                                                    <div
                                                        class="hs-tooltip-content relative z-50 hidden w-60 rounded border bg-default-800 px-3 py-1 font-medium text-default-200 opacity-0 transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Vivamus sagittis lacus vel augue laoreet rutrum
                                                        faucibus.
                                                    </div>
                                                </a>
                                            </div>

                                            <div
                                                class="hs-tooltip inline-block [--trigger:click] [--placement:right]"
                                            >
                                                <a
                                                    class="hs-tooltip-toggle block text-center"
                                                    href="javascript:;"
                                                >
                                                    <div
                                                        class="inline-block rounded-md border border-primary bg-primary px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-white hover:border-primary-700 hover:bg-primary-700"
                                                    >
                                                        Popover on Right
                                                    </div>
                                                    <div
                                                        class="hs-tooltip-content relative z-50 hidden w-60 rounded border bg-default-800 px-3 py-1 font-medium text-default-200 opacity-0 transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Vivamus sagittis lacus vel augue laoreet rutrum
                                                        faucibus.
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="tooltip" class="scroll-mt-40">
                            <h4 class="mb-4 text-xl text-default-900">Tooltip</h4>
                            <div class="space-y-4">
                                <div
                                    class="rounded-lg border border-default-200 bg-white dark:bg-default-50"
                                >
                                    <div class="border-b border-default-200 px-6 py-3">
                                        <h4 class="text-lg text-default-900">Tooltips</h4>
                                    </div>
                                    <div class="p-6">
                                        <div class="flex flex-wrap gap-3">
                                            <div
                                                class="hs-tooltip inline-block [--placement:top] [--trigger:hover]"
                                            >
                                                <a
                                                    class="hs-tooltip-toggle block text-center"
                                                    href="javascript:;"
                                                >
                                                    <div
                                                        class="inline-block rounded-md border border-primary bg-primary px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-white hover:border-primary-700 hover:bg-primary-700"
                                                    >
                                                        Tooltip on Top
                                                    </div>
                                                    <div
                                                        class="hs-tooltip-content relative z-50 hidden rounded bg-default-800 px-3 py-1 font-semibold text-default-200 opacity-0 transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Top Tooltip
                                                        <div
                                                            class="absolute -bottom-1 start-1/2 -z-10 h-2.5 w-2.5 rotate-45 rounded-[1px] bg-default-800"
                                                        ></div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div
                                                class="hs-tooltip show inline-block [--trigger:hover] [--placement:bottom]"
                                            >
                                                <a
                                                    class="hs-tooltip-toggle block text-center"
                                                    href="javascript:;"
                                                >
                                                    <div
                                                        class="inline-block rounded-md border border-primary bg-primary px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-white hover:border-primary-700 hover:bg-primary-700"
                                                    >
                                                        Tooltip on Bottom
                                                    </div>
                                                    <div
                                                        class="hs-tooltip-content relative z-50 hidden rounded bg-default-800 px-3 py-1 font-semibold text-default-200 opacity-0 transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Bottom Tooltip
                                                        <div
                                                            class="absolute -top-1 start-1/2 -z-10 h-2.5 w-2.5 rotate-45 rounded-[1px] bg-default-800"
                                                        ></div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div
                                                class="hs-tooltip show inline-block [--trigger:hover] [--placement:left]"
                                            >
                                                <a
                                                    class="hs-tooltip-toggle block text-center"
                                                    href="javascript:;"
                                                >
                                                    <div
                                                        class="inline-block rounded-md border border-primary bg-primary px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-white hover:border-primary-700 hover:bg-primary-700"
                                                    >
                                                        Tooltip on Left
                                                    </div>
                                                    <div
                                                        class="hs-tooltip-content relative z-50 hidden rounded bg-default-800 px-3 py-1 font-semibold text-default-200 opacity-0 transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Left Tooltip
                                                        <div
                                                            class="absolute -end-1 top-1/3 -z-10 h-2.5 w-2.5 rotate-45 rounded-[1px] bg-default-800 rtl:-start-1"
                                                        ></div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div
                                                class="hs-tooltip inline-block [--trigger:hover] [--placement:right]"
                                            >
                                                <a
                                                    class="hs-tooltip-toggle block text-center"
                                                    href="javascript:;"
                                                >
                                                    <div
                                                        class="inline-block rounded-md border border-primary bg-primary px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-white hover:border-primary-700 hover:bg-primary-700"
                                                    >
                                                        Tooltip on Right
                                                    </div>
                                                    <div
                                                        class="hs-tooltip-content relative z-50 hidden rounded bg-default-800 px-3 py-1 font-semibold text-default-200 opacity-0 transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Right Tooltip
                                                        <div
                                                            class="absolute -start-1 top-1/3 -z-10 h-2.5 w-2.5 rotate-45 rounded-[1px] bg-default-800 rtl:-end-1"
                                                        ></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 hidden md:block">
                    <div
                        class="sticky top-40 rounded-lg border border-default-200 bg-white px-4 py-6 dark:bg-default-50"
                    >
                        <ul class="sidebar-nav mb-0 flex flex-col gap-1 py-0" id="ui-nav">
                            <li class="group p-0">
                                <a
                                    href="#buttons"
                                    class="inline-flex items-center gap-2 rounded-full border border-transparent px-4 py-1 text-base text-default-900 transition-all duration-500 hover:text-primary group-[.active]:border-primary/20 group-[.active]:bg-primary/5 group-[.active]:text-primary"
                                >Buttons</a
                                >
                            </li>
                            <li class="group p-0">
                                <a
                                    href="#badges"
                                    class="inline-flex items-center gap-2 rounded-full border border-transparent px-4 py-1 text-base text-default-900 transition-all duration-500 hover:text-primary group-[.active]:border-primary/20 group-[.active]:bg-primary/5 group-[.active]:text-primary"
                                >Badges</a
                                >
                            </li>
                            <li class="group p-0">
                                <a
                                    href="#alerts"
                                    class="inline-flex items-center gap-2 rounded-full border border-transparent px-4 py-1 text-base text-default-900 transition-all duration-500 hover:text-primary group-[.active]:border-primary/20 group-[.active]:bg-primary/5 group-[.active]:text-primary"
                                >Alerts</a
                                >
                            </li>
                            <li class="group p-0">
                                <a
                                    href="#dropdowns"
                                    class="inline-flex items-center gap-2 rounded-full border border-transparent px-4 py-1 text-base text-default-900 transition-all duration-500 hover:text-primary group-[.active]:border-primary/20 group-[.active]:bg-primary/5 group-[.active]:text-primary"
                                >Dropdowns</a
                                >
                            </li>
                            <li class="group p-0">
                                <a
                                    href="#accordions"
                                    class="inline-flex items-center gap-2 rounded-full border border-transparent px-4 py-1 text-base text-default-900 transition-all duration-500 hover:text-primary group-[.active]:border-primary/20 group-[.active]:bg-primary/5 group-[.active]:text-primary"
                                >Accordions</a
                                >
                            </li>
                            <li class="group p-0">
                                <a
                                    href="#nav-tabs"
                                    class="inline-flex items-center gap-2 rounded-full border border-transparent px-4 py-1 text-base text-default-900 transition-all duration-500 hover:text-primary group-[.active]:border-primary/20 group-[.active]:bg-primary/5 group-[.active]:text-primary"
                                >Nav Tabs</a
                                >
                            </li>
                            <li class="group p-0">
                                <a
                                    href="#pagination"
                                    class="inline-flex items-center gap-2 rounded-full border border-transparent px-4 py-1 text-base text-default-900 transition-all duration-500 hover:text-primary group-[.active]:border-primary/20 group-[.active]:bg-primary/5 group-[.active]:text-primary"
                                >Paginations</a
                                >
                            </li>
                            <li class="group p-0">
                                <a
                                    href="#modals"
                                    class="inline-flex items-center gap-2 rounded-full border border-transparent px-4 py-1 text-base text-default-900 transition-all duration-500 hover:text-primary group-[.active]:border-primary/20 group-[.active]:bg-primary/5 group-[.active]:text-primary"
                                >Modals</a
                                >
                            </li>
                            <li class="group p-0">
                                <a
                                    href="#popover"
                                    class="inline-flex items-center gap-2 rounded-full border border-transparent px-4 py-1 text-base text-default-900 transition-all duration-500 hover:text-primary group-[.active]:border-primary/20 group-[.active]:bg-primary/5 group-[.active]:text-primary"
                                >Popover</a
                                >
                            </li>
                            <li class="group p-0">
                                <a
                                    href="#tooltip"
                                    class="inline-flex items-center gap-2 rounded-full border border-transparent px-4 py-1 text-base text-default-900 transition-all duration-500 hover:text-primary group-[.active]:border-primary/20 group-[.active]:bg-primary/5 group-[.active]:text-primary"
                                >Tooltip</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script-bottom')

@endsection

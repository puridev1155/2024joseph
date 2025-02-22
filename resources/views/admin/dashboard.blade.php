@extends('layouts.admin', ['title' => 'Dashboard','subtitle' => 'Admin'])

@section('css')

@endsection

@section('content')
    <section>
        <div class="container">
            <div class="my-6 space-y-6">
                <div class="grid gap-6 lg:grid-cols-3">
                    <div
                        class="rounded-md border border-default-200 bg-white dark:bg-default-50"
                    >
                        <div class="p-5">
                            <div class="">
                                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-default-600"
                    >Today Revenue</span
                    >
                                    <span class="text-teal-500"
                                    ><i
                                            data-lucide="trending-up"
                                            class="me-1 inline size-4"
                                        ></i>
                      +10.21%</span
                                    >
                                </div>
                                <div class="flex items-end justify-between gap-4">
                                    <h3 class="text-3xl font-medium text-default-800">$2100</h3>
                                    <div id="today_revenue_chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="rounded-md border border-default-200 bg-white dark:bg-default-50"
                    >
                        <div class="p-5">
                            <div class="">
                                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-default-600"
                    >Product Sold</span
                    >
                                    <span class="text-red-500"
                                    ><i
                                            data-lucide="trending-down"
                                            class="me-1 inline size-4"
                                        ></i>
                      -5.05%</span
                                    >
                                </div>
                                <div class="flex items-end justify-between gap-4">
                                    <h3 class="text-3xl font-medium text-default-800">558</h3>
                                    <div id="toda_product_sold_chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="rounded-md border border-default-200 bg-white dark:bg-default-50"
                    >
                        <div class="p-5">
                            <div class="">
                                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-default-600"
                    >New Customers</span
                    >
                                    <span class="text-teal-500"
                                    ><i
                                            data-lucide="trending-up"
                                            class="me-1 inline size-4"
                                        ></i>
                      +25.16%</span
                                    >
                                </div>
                                <div class="flex items-end justify-between gap-4">
                                    <h3 class="text-3xl font-medium text-default-800">65</h3>
                                    <div
                                        id="today_new_customer_chart"
                                        class="apex-charts"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid gap-6 lg:grid-cols-2">
                    <div
                        class="overflow-hidden rounded-md border border-default-200 bg-white dark:bg-default-50"
                    >
                        <div
                            class="inline-flex w-full items-center bg-green-600/10 px-4 py-3 text-sm text-green-600"
                            role="alert"
                        >
                            <i data-lucide="party-popper" class="me-2 size-4"></i>
                            <span>Congratulations John.</span>
                        </div>
                        <div class="p-5">
                            <div class="grid grid-cols-4 items-center justify-between">
                                <div class="col-span-3 h-full">
                                    <div class="flex h-full flex-col items-start">
                                        <div class="mb-4 grow">
                                            <p class="text-lg text-default-900">
                                                You have done <span class="">68%</span>😎 more sales
                                                today
                                            </p>
                                            <p class="text-base text-default-600">
                                                Check your new badge in your profile.
                                            </p>
                                        </div>
                                        <a
                                            href="#"
                                            class="inline-flex shrink-0 items-center justify-center rounded-full bg-primary-500 px-6 py-2 text-center text-sm text-white transition-all hover:bg-primary-600"
                                        >View Profile
                                            <i data-lucide="eye" class="ms-1 size-4"></i
                                            ></a>
                                    </div>
                                </div>
                                <div class="">
                                    <img
                                        src="/images/other/dashboard-hero.png"
                                        alt=""
                                        class="h-full max-w-full"
                                    />
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
                            <h4 class="text-lg text-default-900">Sources</h4>
                            <a
                                href="javascript:void(0);"
                                class="inline-flex items-center gap-x-1.5 rounded-full bg-primary px-3 py-1.5 text-xs font-medium text-white transition-all duration-300 hover:bg-primary-700"
                            >Export <i data-lucide="upload" class="ms-1.5 size-4"></i
                                ></a>
                        </div>

                        <div class="">
                            <table class="w-full">
                                <thead class="border-b border-default-200 bg-default-100">
                                <tr>
                                    <th
                                        class="p-2 text-start text-sm font-semibold text-default-900"
                                    >
                                        Types
                                    </th>
                                    <th
                                        class="p-2 text-start text-sm font-semibold text-default-900"
                                    >
                                        Sessions
                                    </th>
                                    <th
                                        class="p-2 text-start text-sm font-semibold text-default-900"
                                    >
                                        Views
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y dark:divide-default-200">
                                <tr>
                                    <td class="p-2">Direct</td>
                                    <td class="p-2">358</td>
                                    <td class="p-2">250</td>
                                </tr>
                                <tr>
                                    <td class="p-2">Referal</td>
                                    <td class="p-2">501</td>
                                    <td class="p-2">50</td>
                                </tr>
                                <tr>
                                    <td class="p-2">Email</td>
                                    <td class="p-2">460</td>
                                    <td class="p-2">600</td>
                                </tr>
                                <tr>
                                    <td class="p-2">Organic</td>
                                    <td class="p-2">920</td>
                                    <td class="p-2">150</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end p-6-->
                    </div>
                </div>

                <div class="grid gap-6 lg:grid-cols-3">
                    <div class="lg:col-span-2">
                        <div
                            class="rounded-md border border-default-200 bg-white dark:bg-default-50"
                        >
                            <div class="border-b border-default-200 px-6 py-3">
                                <h4 class="text-lg text-default-900">Revenue</h4>
                            </div>
                            <div class="p-5">
                                <div id="revenue_chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="rounded-md border border-default-200 bg-white dark:bg-default-50"
                    >
                        <div class="border-b border-default-200 px-6 py-3">
                            <h4 class="text-lg text-default-900">Top Performers</h4>
                        </div>

                        <div
                            class="h-[440px] divide-y divide-default-200 overflow-y-auto [&::-webkit-scrollbar-track]:!bg-transparent [&::-webkit-scrollbar]:w-1"
                        >
                            <div class="flex items-center p-2.5">
                                <img
                                    src="/images/avatars/img-7.jpg"
                                    class="me-3 h-12 rounded-full"
                                    alt="shreyu"
                                />
                                <div class="flex-grow">
                                    <h5 class="mt-1 text-default-900">Saske N</h5>
                                    <h6 class="mt-1 text-default-600">Senior Sales Guy</h6>
                                </div>
                                <div class="h-4">
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:bottom-left]"
                                    >
                                        <button type="button" class="hs-dropdown-toggle rounded">
                                            <i data-lucide="more-vertical" class="size-4"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white py-1.5 opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                        >
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="pencil" class="me-1.5 size-4"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="log-out" class="me-1.5 size-4"></i>
                                                <span>Remove from Team</span>
                                            </a>
                                            <hr class="my-2 border-default-200"/>
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-red-500 transition-all hover:bg-red-500/10"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="trash-2" class="me-1.5 size-4"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center p-2.5">
                                <img
                                    src="/images/avatars/img-9.jpg"
                                    class="me-3 h-12 rounded-full"
                                    alt="shreyu"
                                />
                                <div class="flex-grow">
                                    <h5 class="mt-1 text-default-900">Greeva Y</h5>
                                    <h6 class="mt-1 text-default-600">Social Campaign</h6>
                                </div>
                                <div class="h-4">
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:bottom-left]"
                                    >
                                        <button type="button" class="hs-dropdown-toggle rounded">
                                            <i data-lucide="more-vertical" class="size-4"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white py-1.5 opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                        >
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="pencil" class="me-1.5 size-4"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="log-out" class="me-1.5 size-4"></i>
                                                <span>Remove from Team</span>
                                            </a>
                                            <hr class="my-2 border-default-200"/>
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-red-500 transition-all hover:bg-red-500/10"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="trash-2" class="me-1.5 size-4"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center p-2.5">
                                <img
                                    src="/images/avatars/img-4.jpg"
                                    class="me-3 h-12 rounded-full"
                                    alt="shreyu"
                                />
                                <div class="flex-grow">
                                    <h5 class="mt-1 text-default-900">Nik G</h5>
                                    <h6 class="mt-1 text-default-600">Inventory Manager</h6>
                                </div>
                                <div class="h-4">
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:bottom-left]"
                                    >
                                        <button type="button" class="hs-dropdown-toggle rounded">
                                            <i data-lucide="more-vertical" class="size-4"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white py-1.5 opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                        >
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="pencil" class="me-1.5 size-4"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="log-out" class="me-1.5 size-4"></i>
                                                <span>Remove from Team</span>
                                            </a>
                                            <hr class="my-2 border-default-200"/>
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-red-500 transition-all hover:bg-red-500/10"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="trash-2" class="me-1.5 size-4"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center p-2.5">
                                <img
                                    src="/images/avatars/img-1.jpg"
                                    class="me-3 h-12 rounded-full"
                                    alt="shreyu"
                                />
                                <div class="flex-grow">
                                    <h5 class="mt-1 text-default-900">Hardik G</h5>
                                    <h6 class="mt-1 text-default-600">Sales Person</h6>
                                </div>
                                <div class="h-4">
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:bottom-left]"
                                    >
                                        <button type="button" class="hs-dropdown-toggle rounded">
                                            <i data-lucide="more-vertical" class="size-4"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white py-1.5 opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                        >
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="pencil" class="me-1.5 size-4"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="log-out" class="me-1.5 size-4"></i>
                                                <span>Remove from Team</span>
                                            </a>
                                            <hr class="my-2 border-default-200"/>
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-red-500 transition-all hover:bg-red-500/10"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="trash-2" class="me-1.5 size-4"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center p-2.5">
                                <img
                                    src="/images/avatars/img-8.jpg"
                                    class="me-3 h-12 rounded-full"
                                    alt="shreyu"
                                />
                                <div class="flex-grow">
                                    <h5 class="mt-1 text-default-900">GB Patel G</h5>
                                    <h6 class="mt-1 text-default-600">Sales Person</h6>
                                </div>
                                <div class="h-4">
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:bottom-left]"
                                    >
                                        <button type="button" class="hs-dropdown-toggle rounded">
                                            <i data-lucide="more-vertical" class="size-4"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white py-1.5 opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                        >
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="pencil" class="me-1.5 size-4"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="log-out" class="me-1.5 size-4"></i>
                                                <span>Remove from Team</span>
                                            </a>
                                            <hr class="my-2 border-default-200"/>
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-red-500 transition-all hover:bg-red-500/10"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="trash-2" class="me-1.5 size-4"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center p-2.5">
                                <img
                                    src="/images/avatars/img-2.jpg"
                                    class="me-3 h-12 rounded-full"
                                    alt="shreyu"
                                />
                                <div class="flex-grow">
                                    <h5 class="mt-1 text-default-900">Jessica B</h5>
                                    <h6 class="mt-1 text-default-600">
                                        Inventory Senior Manager
                                    </h6>
                                </div>
                                <div class="h-4">
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:bottom-left]"
                                    >
                                        <button type="button" class="hs-dropdown-toggle rounded">
                                            <i data-lucide="more-vertical" class="size-4"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white py-1.5 opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                        >
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="pencil" class="me-1.5 size-4"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="log-out" class="me-1.5 size-4"></i>
                                                <span>Remove from Team</span>
                                            </a>
                                            <hr class="my-2 border-default-200"/>
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-red-500 transition-all hover:bg-red-500/10"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="trash-2" class="me-1.5 size-4"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center p-2.5">
                                <img
                                    src="/images/avatars/img-3.jpg"
                                    class="me-3 h-12 rounded-full"
                                    alt="shreyu"
                                />
                                <div class="flex-grow">
                                    <h5 class="mt-1 text-default-900">Tony S</h5>
                                    <h6 class="mt-1 text-default-600">Sales Guy</h6>
                                </div>
                                <div class="h-4">
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:left-top] rtl:[--placement:bottom-left]"
                                    >
                                        <button type="button" class="hs-dropdown-toggle rounded">
                                            <i data-lucide="more-vertical" class="size-4"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu z-10 mt-4 hidden min-w-[200px] rounded-lg border border-default-100 bg-white py-1.5 opacity-0 shadow-lg transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50"
                                        >
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="pencil" class="me-1.5 size-4"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-default-600 transition-all hover:bg-default-100 hover:text-default-700"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="log-out" class="me-1.5 size-4"></i>
                                                <span>Remove from Team</span>
                                            </a>
                                            <hr class="my-2 border-default-200"/>
                                            <a
                                                class="mx-1.5 flex items-center rounded px-3 py-2 text-red-500 transition-all hover:bg-red-500/10"
                                                href="javascript:;"
                                            >
                                                <i data-lucide="trash-2" class="me-1.5 size-4"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div
                        class="overflow-hidden rounded-md border border-default-200 bg-white dark:bg-default-50"
                    >
                        <div
                            class="flex items-center justify-between border-b border-default-200 px-4 py-3"
                        >
                            <h4 class="uppercase">Recent Orders</h4>
                            <a
                                href="javascript:void(0);"
                                class="inline-flex items-center gap-x-1.5 rounded-full bg-primary px-3 py-1.5 text-xs font-medium text-white transition-all duration-300 hover:bg-primary-700"
                            >Export <i data-lucide="upload" class="ms-1.5 size-4"></i
                                ></a>
                        </div>

                        <div class="overflow-auto">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden">
                                    <table class="min-w-full divide-y divide-default-200">
                                        <thead>
                                        <tr class="bg-default-100">
                                            <th
                                                scope="col"
                                                class="px-4 py-4 text-start text-sm font-semibold text-default-900"
                                            >
                                                #
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-4 py-4 text-start text-sm font-semibold text-default-900"
                                            >
                                                Product
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-4 py-4 text-start text-sm font-semibold text-default-900"
                                            >
                                                Customer
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-4 py-4 text-start text-sm font-semibold text-default-900"
                                            >
                                                Price
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-4 py-4 text-start text-sm font-semibold text-default-900"
                                            >
                                                Status
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="divide-y divide-default-200">
                                        <tr class="hover:bg-default-100">
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm font-medium text-default-600"
                                            >
                                                #98754
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm text-default-600"
                                            >
                                                ASOS Ridley High
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm text-default-600"
                                            >
                                                Otto B
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-start text-default-600"
                                            >
                                                $79.49
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-start text-default-600"
                                            >
                            <span
                                class="inline-flex items-center gap-1.5 rounded bg-yellow-500/10 px-1.5 py-0.5 text-xs font-medium text-yellow-500"
                            >Pending</span
                            >
                                            </td>
                                        </tr>

                                        <tr class="hover:bg-default-100">
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm font-medium text-default-600"
                                            >
                                                #98753
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm text-default-600"
                                            >
                                                Marco Lightweight Shirt
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm text-default-600"
                                            >
                                                Mark P
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-start text-default-600"
                                            >
                                                $125.49
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-start text-default-600"
                                            >
                            <span
                                class="inline-flex items-center gap-1.5 rounded bg-teal-500/10 px-1.5 py-0.5 text-xs font-medium text-teal-500"
                            >Delivered</span
                            >
                                            </td>
                                        </tr>

                                        <tr class="hover:bg-default-100">
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm font-medium text-default-600"
                                            >
                                                #98752
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm text-default-600"
                                            >
                                                Half Sleeve Shirt
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm text-default-600"
                                            >
                                                Dave B
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-start text-default-600"
                                            >
                                                $35.49
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-start text-default-600"
                                            >
                            <span
                                class="inline-flex items-center gap-1.5 rounded bg-red-500/10 px-1.5 py-0.5 text-xs font-medium text-red-500"
                            >Declined</span
                            >
                                            </td>
                                        </tr>

                                        <tr class="hover:bg-default-100">
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm font-medium text-default-600"
                                            >
                                                #98751
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm text-default-600"
                                            >
                                                Lightweight Jacket
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm text-default-600"
                                            >
                                                Shreyu N
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-start text-default-600"
                                            >
                                                $49.49
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-start text-default-600"
                                            >
                            <span
                                class="inline-flex items-center gap-1.5 rounded bg-teal-500/10 px-1.5 py-0.5 text-xs font-medium text-teal-500"
                            >Declined</span
                            >
                                            </td>
                                        </tr>

                                        <tr class="hover:bg-default-100">
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm font-medium text-default-600"
                                            >
                                                #98750
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm text-default-600"
                                            >
                                                Marco Shoes
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-sm text-default-600"
                                            >
                                                Rik N
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-start text-default-600"
                                            >
                                                $69.49
                                            </td>
                                            <td
                                                class="whitespace-nowrap px-4 py-4 text-start text-default-600"
                                            >
                            <span
                                class="inline-flex items-center gap-1.5 rounded bg-red-500/10 px-1.5 py-0.5 text-xs font-medium text-red-500"
                            >Declined</span
                            >
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end table-responsive-->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script-bottom')
  @vite(['resources/js/admin.js'])
@endsection

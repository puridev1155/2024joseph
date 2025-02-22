<div class="grid grid-cols-1">
    <div class="bg-white rounded-md dark:bg-default-50 overflow-hidden">
        <div class="py-3 flex justify-between items-center">
            <h4 class="uppercase dark:text-gray-300 text-xl font-bold">공지사항</h4>
            <div class="grid">
                <div class="mt-6 md:flex md:items-center md:justify-between">        
                    <form wire:submit.prevent="submitSearch">
                        <div class="relative flex items-center mt-4 md:mt-0 mb-6">
                            <span class="absolute">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                                </svg>
                            </span>
                            <div class="">
                                <input type="text" wire:model="search" placeholder="검색하기" style="border-bottom: 2px solid rgb(145, 145, 145)"
                                    class="block w-full py-1.5 pr-5 text-gray-700 bg-white border-white md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300">
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <div class="overflow-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-default-200 mt-5">
                        <thead style="background-color: rgb(241 241 241)">
                            <tr>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-semibold text-default-900">ID</th>
                                <th scope="col" class="px-4 w-300 py-4 text-start text-sm font-semibold text-default-900">제목</th>
                                <th scope="col" class="px-4 py-4 text-right text-sm font-semibold text-default-900">작성자</th>
                                <th scope="col" class="px-4 py-4 text-right text-sm font-semibold text-default-900">작성일</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-default-200">
                            @foreach($single as $row)
                            <tr class="hover:bg-default-100">
                                <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-default-600">
                                    <a href="/notice/{{$row->id}}" class="text-default-600 hover:text-blue-600">
                                        {{ $row->id }}
                                    </a>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-default-600">
                                    <a href="/notice/{{$row->id}}" class="text-blue-600 hover:text-blue-600">
                                        {{ $row->title }}
                                    </a>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-right text-default-600">관리자</td>
                                <td class="px-4 py-4 whitespace-nowrap text-right text-default-600">{{ $row->created_at->format('Y.m.d') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end table-responsive-->
    </div>
    
</div>
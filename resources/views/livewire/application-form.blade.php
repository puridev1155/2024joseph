<div class="p-6 bg-white shadow rounded-lg">
 <style>
    ::placeholder {
          color:darkgray !important;
          opacity: 1; /* Firefox */
    }

    ::-ms-input-placeholder { /* Edge 12 -18 */
            color:darkgray !important;
    }
</style>
@guest 
<script type="text/javascript">
  window.location = "{{ route('login.form') }}"; // TODO 로그인 백엔등에서 처리 필요
</script>
@endguest
@php
if(isset($formState['opening']) && $formState['opening'] == '0') {
    session()->flash('error', '이미 접수완료되어 수정이 불가합니다.');
    return redirect()->route('scholarship.register');
}

@endphp
    <div class="max-w-4xl mx-auto">
        <div class="divide-y divide-default-200 rounded-md">
          <nav aria-label="Progress">
            <ol role="list" class="divide-y divide-gray-300 rounded-md border border-white md:flex md:divide-y-0">
              <li class="relative md:flex md:flex-1">
                <!-- Completed Step -->
                <a href="/scholarship-application?id={{$id}}" class="group flex w-full items-center" id="scrollUp">
                  <span class="flex items-center px-6 py-4 text-sm font-medium">
                    
                    <span class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 {{ $currentSection == 1 || $currentSection == NULL ? 'border-indigo-600 group-hover:border-gray-400' : 'border-gray-300 group-hover:border-gray-400' }}">
                      <span class="{{ $currentSection == 1 || $currentSection == NULL ? 'text-indigo-600' : 'text-gray-600' }}">01</span>
                    </span>
                    
                    <span class="ml-4 text-sm font-medium {{ $currentSection == 1 || $currentSection == NULL ? 'text-indigo-600' : 'text-gray-600' }}">내 정보</span>
                  </span>
                </a>
                <!-- Arrow separator for lg screens and up -->
                <div class="absolute right-0 top-0 hidden h-full w-5 md:block" aria-hidden="true">
                  <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                    <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round" />
                  </svg>
                </div>
              </li>
              <li class="relative md:flex md:flex-1">
                <!-- Current Step -->
                <a href="/scholarship-application?id={{$id}}&section=2" class="flex items-center px-6 py-4 text-sm font-medium" aria-current="step">
                  <span class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 {{ $currentSection == 2 ? 'border-indigo-600 group-hover:border-gray-400' : 'border-gray-300 group-hover:border-gray-400' }}">
                    <span class="{{ $currentSection == 2 ? 'text-indigo-600' : 'text-gray-600' }}">02</span>
                  </span>
                  <span class="ml-4 text-sm font-medium {{ $currentSection == 2 ? 'text-indigo-600' : 'text-gray-600' }}">자기 소개</span>
                </a>
                <!-- Arrow separator for lg screens and up -->
                <div class="absolute right-0 top-0 hidden h-full w-5 md:block" aria-hidden="true">
                  <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                    <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round" />
                  </svg>
                </div>
              </li>
              <li class="relative md:flex md:flex-1">
                <!-- Current Step -->
                <a href="/scholarship-application?id={{$id}}&section=3" class="flex items-center px-6 py-4 text-sm font-medium" aria-current="step">
                  <span class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 {{ $currentSection == 3 ? 'border-indigo-600 group-hover:border-gray-400' : 'border-gray-300 group-hover:border-gray-400' }}">
                    <span class="{{ $currentSection == 3 ? 'text-indigo-600' : 'text-gray-600' }}">03</span>
                  </span>
                  <span class="ml-4 text-sm font-medium {{ $currentSection == 3 ? 'text-indigo-600' : 'text-gray-600' }}">서류 제출</span>
                </a>
                <!-- Arrow separator for lg screens and up -->
                <div class="absolute right-0 top-0 hidden h-full w-5 md:block" aria-hidden="true">
                  <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                    <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round" />
                  </svg>
                </div>
              </li>
              <li class="relative md:flex md:flex-1">
                <!-- Upcoming Step -->
                <a href="#" class="group flex items-center">
                  <span class="flex items-center px-6 py-4 text-sm font-medium">
                    <span class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full border-2 {{ $currentSection == 4 ? 'border-indigo-600 group-hover:border-gray-400' : 'border-gray-300 group-hover:border-gray-400' }} ">
                      <span class="{{ $currentSection == 4 ? 'text-indigo-600' : 'text-gray-600' }}">04</span>
                    </span>
                    <span class="ml-4 text-sm font-medium text-gray-500 {{ $currentSection == 4 ? 'text-indigo-600' : 'text-gray-600' }}">접수완료</span>
                  </span>
                </a>
              </li>
            </ol>
          </nav>

              @if($currentSection == 1)
              <!-- 개인정보 -->
              <form wire:submit.prevent="submit"  enctype="multipart/form-data" id="section1">
                <div class="p-6 flex items-center justify-center">
                    <div class="bg-white rounded p-2 px-4 md:p-8">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                          <div class="text-gray-600">
                            <p class="font-bold text-xl">내 정보 입력</p>
                            <p class="mt-2 pr-3"><span style="color: red">*</span>저장하기 버튼 클릭시에만 데이터가 저장됩니다. 저장하기를 꼭 눌러주세요.</p>
                          </div>
                
                          <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                              <div class="md:col-span-3">
                                <label for="korean_name">한글 이름</label>
                                <input type="text" name="korean_name" id="korean_name" wire:model="formState.korean_name" placeholder="홍길동" class="h-10 mt-1 border border-slate-300 rounded px-4 w-full" value="" />
                                @error('korean_name') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-2">
                                <label for="english_name">영문 이름</label>
                                <input type="text" name="english_name" id="english_name" wire:model="formState.english_name" placeholder="John" class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('english_name') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                  
                              <div class="md:col-span-2 mt-2">
                                <label for="ssn">주민등록번호 (숫자만 입력)</label>
                                <input type="number" name="ssn" id="ssn" wire:model="formState.ssn" placeholder="99030220..." class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('ssn') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-3 mt-2">
                                <label for="phone">연락처 (숫자마 입력)</label>
                                <input type="number" name="phone" id="phone" wire:model="formState.phone" placeholder="0109999...." class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-5 mt-2">
                                <label for="address">주소</label>
                                <input type="text" name="address" id="address" wire:model="formState.address" placeholder="서울특별시 성북구..." class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('address') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-5 mt-2">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">프로필 사진  <span class="mt-1 text-sm text-gray-500" style="color: red">SVG, PNG, JPG or GIF (MAX. 800x400px).</span></label>
<input type="file" wire:model="formState.my_thumbnail" id="my_thumbnail" class="block file:mr-4 file:py-2 file:px-4 file:rounded-md
file:border-0 file:text-sm file:font-semibold
file:bg-blue-50 file:text-blue-500
hover:file:bg-pink-100 w-full text-sm text-gray-900  py-5 px-5 border border-slate-300 shadow-md rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                             
                                <img id="preview" class="img-preview" src="#" alt="Image Preview" style="display: none; max-width: 100%; height: auto;" />
                               
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                   </div>
                  </div>

                  <div class="p-6 flex items-center justify-center">
                    <div class="bg-white rounded p-2 px-4 md:p-8">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                          <div class="text-gray-600">
                            <p class="font-bold text-xl">보호자정보 입력</p>
                            <p class="mt-2 pr-3"><span style="color: red">*</span>저장하기 버튼 클릭시에만 데이터가 저장됩니다. 저장하기를 꼭 눌러주세요.</p>
                          </div>
                
                          <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                              <div class="md:col-span-2">
                                <label for="korean_name">이름</label>
                                <input type="text" name="guardian_name" id="guardian_name" wire:model="formState.guardian_name" placeholder="이름 입력" class="h-10 mt-1  border border-slate-300 rounded px-4 w-full" value="" />
                                @error('guardian_name') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-2">
                                <label for="guardian_church">교회</label>
                                <input type="text" name="guardian_church" id="guardian_church" wire:model="formState.guardian_church" placeholder="교회명 입력" class="h-10  border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('guardian_church') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-1">
                                <label for="guardian_status">직위</label>
                                <input type="text" name="guardian_status" id="guardian_status" wire:model="formState.guardian_status" placeholder="입력" class="h-10  border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('guardian_status') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-2">
                                <label for="guardian_relationship">가족관계</label>
                                <input type="text" name="guardian_relationship" id="guardian_relationship" wire:model="formState.guardian_relationship" placeholder="가족 관계" class="h-10  border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('guardian_relationship') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-3">
                                <label for="guardian_address">주소</label>
                                <input type="text" name="guardian_address" id="guardian_address" wire:model="formState.guardian_address" placeholder="보호자 주소" class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('guardian_address') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-2">
                                <label for="guardian_phone">전화번호</label>
                                <input type="text" name="guardian_phone" id="guardian_phone" wire:model="formState.guardian_phone" placeholder="99030220..." class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('guardian_phone') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-3">
                                <label for="guardian_email">이메일</label>
                                <input type="text" name="guardian_email" id="guardian_email" wire:model="formState.guardian_email" placeholder="name@email.com.." class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('guardian_email') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-2">
                                <label for="home_status">보호자 주택보유사항(선택사항)</label>
                                <select id="home_status"  wire:model="formState.home_status"  class="mt-1 bg-gray-50 border border-slate-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option selected>선택하세요</option>
                                  <option value="자가">자가</option>
                                  <option value="전세">전세</option>
                                  <option value="월세">월세</option>
                                </select>
                                @error('home_status') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-3">
                                <label for="guardian_salary">보호자 소득</label>
                                <input type="text" name="guardian_salary" id="guardian_salary" wire:model="formState.guardian_salary" placeholder="200만원.." class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('guardian_salary') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>

                              <!-- <div class="lg:col-span-5">
                               <div class="md:col-span-5 text-right mt-5 mb-5">
                                <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="addFamilyMember()">가족일원 추가</button>
                               </div>
                             
                             </div> -->
                           </div>
                         </div>
                       </div>
                   </div>
                  </div>
                   <!-- 학교 정보 -->
                   <div class="p-6 flex items-center justify-center">
                    <div class="bg-white rounded p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                          <div class="text-gray-600">
                            <p class="font-bold text-xl">학교 정보</p>
                            <p class="mt-2 pr-3"><span style="color: red">*</span>저장하기 버튼 클릭시에만 데이터가 저장됩니다. 저장하기를 꼭 눌러주세요.</p>
                          </div>
                          
                          <div class="lg:col-span-2">
                            
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                              <div class="md:col-span-3">
                                <label for="school">학교 이름</label>
                                <input type="text" name="school" id="school" wire:model="formState.school" placeholder="학교이름" class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('school') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-1">
                                <label for="department">학과</label>
                                <input type="text" name="department" id="department" wire:model="formState.department" placeholder="학과" class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('department') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-1">
                                <label for="grade">학년</label>
                                <input type="text" name="grade" id="grade" wire:model="formState.grade" placeholder="학년" class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('grade') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-1">
                                <label for="korean_name">1학년</label>
                                <input type="text" name="year1" id="year1" wire:model="formState.year1" placeholder="점수" class="h-10 mt-1  border border-slate-300 rounded px-4 w-full" value="" />
                                @error('year1') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-1">
                                <label for="year2">2학년</label>
                                <input type="text" name="year1" id="year2" wire:model="formState.year2" placeholder="점수" class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('year2') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-1">
                                <label for="year3">3학년</label>
                                <input type="text" name="year3" id="year3" wire:model="formState.year3" placeholder="점수" class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('year3') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-1">
                                <label for="year4">4학년</label>
                                <input type="text" name="year4" id="year4" wire:model="formState.year4" placeholder="점수" class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('year4') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-1">
                                <label for="yearly">전체 평균</label>
                                <input type="text" name="yearly" id="yearly" wire:model="formState.yearly" placeholder="학년" class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('yearly') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-2">
                                <label for="language">어학능력</label>
                                <input type="text" name="language" id="language" wire:model="formState.language" placeholder="언어 입력" class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('language') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-3">
                                <label for="award">수상능력</label>
                                <input type="text" name="award" id="award" wire:model="formState.award" placeholder="수상 입력"  class="h-10 border border-slate-300 mt-1 rounded px-4 w-full placeholder-gray-500" value="" />
                                @error('award') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>                           
                            </div>

                              <div class="md:col-span-5 text-right mt-5">
                                <p class="mt-2 text-xl font-bold"><span style="color: red">* 다음 페이지로 넘어가기 전에 '저장하기' 버튼을 클릭해 주세요. 클릭하지 않으면, 데이터가 저장되지 않습니다.</span></p>
                                <div class="inline-flex items-end mt-5">
                                  <button  type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2.5 px-4 rounded">저장하기</button>
                                  <a  href="/scholarship-application?id=1&section=2" class="inline-flex text-sm items-center justify-center bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 ml-5 rounded">다음</a>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  
              </form>

              @elseif ($currentSection == 2)
              <form wire:submit.prevent="submit2"  enctype="multipart/form-data" id="section2">
                <div class="p-6 flex items-center justify-center">
                    <div class="bg-white rounded p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                          <div class="text-gray-600">
                            <p class="font-bold text-xl">자기 소개</p>
                            <p class="mt-2 pr-3"><span style="color: red">*</span>저장하기 버튼 클릭시에만 데이터가 저장됩니다. 저장하기를 꼭 눌러주세요.</p>
                          </div>
                          
                          <div class="lg:col-span-2">
                            
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                             
                              <div class="md:col-span-5">
                                <label for="content1">자기소개 및 간단한 성장과정 (TELL US ABOUT YOU AND YOUR BACKGROUND.)</label>
                                <textarea  name="content2" id="content1" wire:model="formState.content1" placeholder="입력하세요" rows="15" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 border border-slate-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                                @error('award') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-5">
                                <label for="award">장래 포부와 향후계획 (TELL US ABOUT YOUR FUTURE PLANS.)</label>
                                <textarea name="content1" id="content2" wire:model="formState.content2" rows="15" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 border border-slate-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="입력하세요"></textarea>
                                @error('award') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              <div class="md:col-span-5">
                                <label for="award">장학금 신청 이유 (TELL US ABOUT YOUR REASONS FOR APPLYING.)</label>
                                <textarea name="content3" id="content3" wire:model="formState.content3" rows="15" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rborder border-slate-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="입력하세요"></textarea>
                                @error('award') <span class="text-red-500">{{ $message }}</span> @enderror  
                              </div>
                              

                             
                            </div>
                            <p class="mt-2 text-xl font-bold"><span style="color: red">* 다음 페이지로 넘어가기 전에 '저장하기' 버튼을 클릭해 주세요. 클릭하지 않으면, 데이터가 저장되지 않습니다.</span></p>
                              <div class="md:col-span-5 text-right mt-5">
                                <div class="inline-flex items-end">
                                  <a href="/scholarship-application?id=1&section=1" class="inline-flex text-sm items-center justify-center bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 mr-5 rounded">이전</a>
                                  <button  type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2.5 px-4 rounded">저장하기</button>
                                  <a href="/scholarship-application?id=1&section=3" class="inline-flex text-sm items-center justify-center bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 ml-5 rounded">다음</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </form>

      
              @elseif ($currentSection == 3)
              <!-- 학교 정보 -->
              
              <!-- 자료 접수 -->
              <form wire:submit.prevent="submit3"  enctype="multipart/form-data" id="section3">
                <div class="p-6 flex items-center justify-center">
                    <div class="bg-white rounded p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                          <div class="text-gray-600">
                            <p class="font-bold text-xl">서류 접수</p>
                            <p class="mt-2 pr-3"><span style="color: red">*접수완료 클릭시 제출이 완료되며, 더이상 수정이 불가합니다.</span></p>
                          </div>
                          
                          <div class="lg:col-span-2">
                            <label class="block mb-2 mt-5 text-xl text-gray-900 dark:text-white" for="multiple_files">추천서 (1부)</label>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">프로필 사진  <span class="mt-1 text-sm text-gray-500" style="color: red">1MB 미만</span></label>
<input type="file" wire:model="formState.my_recommend_thumbnail" id="my_recommend_thumbnail" class="block file:mr-4 file:py-2 file:px-4 file:rounded-md
file:border-0 file:text-sm file:font-semibold
file:bg-blue-50 file:text-blue-500
hover:file:bg-pink-100 w-full text-sm text-gray-900  py-5 px-5 border border-slate-300 shadow-md rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                            <div id="recommendPreviewContainer" class="mt-3">
                              <img id="recommendPreview" class="img-recommend-preview" src="#" alt="Image Preview" style="display: none; max-width: 100%; height: auto;" />
                          </div> 
                          @if(is_string($formState['my_recommend_thumbnail'] ?? NULL))
                              <div class="mt-3">
                                  <img src="{{ $formState['my_recommend_thumbnail'] }}" alt="Image Preview" style="max-width: 100%; height: auto;" />
                              </div>
                          @endif
            
                                <label class="block mb-2 mt-5 text-xl text-gray-900 dark:text-white" for="multiple_files">추천서2 (1부) <span class="mt-1 text-sm text-gray-500" style="color: red">1MB 미만</span></label>
                                <input type="file" wire:model="formState.my_instructor_thumbnail" id="my_instructor_thumbnail" class="block file:mr-4 file:py-2 file:px-4 file:rounded-md
file:border-0 file:text-sm file:font-semibold
file:bg-blue-50 file:text-blue-500
hover:file:bg-pink-100 w-full text-sm text-gray-900  py-5 px-5 border border-slate-300 shadow-md rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                <img id="instructordPreview" class="img-instructor-preview" src="#" alt="Image Preview" style="display: none; max-width: 100%; height: auto;" />
                                @if(is_string($formState['my_instructor_thumbnail'] ?? NULL))
                                <div class="mt-3">
                                    <img src="{{ $formState['my_instructor_thumbnail'] }}" alt="Image Preview" style="max-width: 100%; height: auto;" />
                                </div>
                            @endif

                                <label class="block mb-2 mt-5 text-xl text-gray-900 dark:text-white" for="multiple_files">가족관계증명서 (1부) <span class="mt-1 text-sm text-gray-500" style="color: red">1MB 미만</span></label>
                                <input type="file" wire:model="formState.my_family_thumbnail" id="my_family_thumbnail"  class="block file:mr-4 file:py-2 file:px-4 file:rounded-md
file:border-0 file:text-sm file:font-semibold
file:bg-blue-50 file:text-blue-500
hover:file:bg-pink-100 w-full text-sm text-gray-900  py-5 px-5 border border-slate-300 shadow-md rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                <img id="familyPreview" class="img-family-preview" src="#" alt="Image Preview" style="display: none; max-width: 100%; height: auto;" />
                                @if(is_string($formState['my_family_thumbnail'] ?? NULL))
                                <div class="mt-3">
                                    <img src="{{ $formState['my_family_thumbnail'] }}" alt="Image Preview" style="max-width: 100%; height: auto;" />
                                </div>
                            @endif
                                <label class="block mb-2 mt-5 text-xl text-gray-900 dark:text-white" for="multiple_files">성적증명서 (1부) <span class="mt-1 text-sm text-gray-500" style="color: red">1MB 미만</span></label>
                                <input type="file" wire:model="formState.my_grade_thumbnail" id="my_grade_thumbnail"  class="block file:mr-4 file:py-2 file:px-4 file:rounded-md
                                file:border-0 file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-500
                                hover:file:bg-pink-100 w-full text-sm text-gray-900  py-5 px-5 border border-slate-300 shadow-md rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                                                
                                <img id="gradePreview" class="img-grade-preview" src="#" alt="Image Preview" style="display: none; max-width: 100%; height: auto;" />
                                @if(is_string($formState['my_grade_thumbnail'] ?? NULL))
                                <div class="mt-3">
                                    <img src="{{ $formState['my_grade_thumbnail'] }}" alt="Image Preview" style="max-width: 100%; height: auto;" />
                                </div>
                            @endif
                                <label class="block mb-2 mt-5 text-xl text-gray-900 dark:text-white" for="multiple_files">통장사진 <span class="mt-1 text-sm text-gray-500" style="color: red">1MB 미만</span></label>
                                <input type="file" wire:model="formState.my_bank_thumbnail" id="my_bank_thumbnail" class="block file:mr-4 file:py-2 file:px-4 file:rounded-md
                                file:border-0 file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-500
                                hover:file:bg-pink-100 w-full text-sm text-gray-900  py-5 px-5 border border-slate-300 shadow-md rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                            <img id="bankPreview" class="img-bank-preview" src="#" alt="Image Preview" style="display: none; max-width: 100%; height: auto;" />  
                            @if(is_string($formState['my_bank_thumbnail'] ?? NULL))
                            <div class="mt-3">
                                <img src="{{ $formState['my_bank_thumbnail'] }}" alt="Image Preview" style="max-width: 100%; height: auto;" />
                            </div>
                        @endif
                          </div>

                              <div class="md:col-span-5 text-right mt-5">
                                <div class="inline-flex items-end">
                                  <a href="/scholarship-application?id=1&section=2" class="inline-flex text-sm items-center justify-center bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 mr-5 rounded">이전</a>
                                  <button  type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2.5 px-4 rounded">저장하기</button>             
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </form>
              <form wire:submit.prevent="submit4" enctype="multipart/form-data" id="section4">
                <div class="text-center">
                  <p class="mt-2 text-xl font-bold"><span style="color: red">
                    * '접수완료' 버튼을 클릭하기 전에, '저장하기' 버튼을 클릭해 주세요. 클릭하지 않으면, 데이터가 저장되지 않습니다. 
                    <br />
                    * '접수완료' 클릭시 제출이 완료되며, 더 이상 수정이 불가합니다. </span></p>
                    <div class="inline-flex items-center justify-center mt-3 mb-20">
                        <button type="submit" class="bg-red-500 hover:bg-red-700 shadow-md text-white font-bold text-xl py-2.5 px-20 rounded">접수완료 클릭</button>
                    </div>
                </div>
              </form>
             
              @endif
              

          </div>
        </div>
    </div>
    <!-- col End-->
</div>
<script>
 function addFamilyMember() {
       const container = document.getElementById('family-container');
       const memberDiv = document.createElement('div');
       memberDiv.classList.add('family-member', 'md:col-span-5', 'border', 'p-4', 'rounded', 'mb-4');
 
       memberDiv.innerHTML = `
           <div class="md:col-span-1">
               <label for="family_name">이름</label>
               <input type="text" name="family_name[]" placeholder="이름 입력" class="h-10 border border-gray-300 mt-1 rounded px-4 w-full" />
           </div>
           <div class="md:col-span-1">
               <label for="family_age">나이</label>
               <input type="number" name="family_age[]" placeholder="나이 입력" class="h-10 border border-gray-300 mt-1 rounded px-4 w-full" />
           </div>
           <div class="md:col-span-1">
               <label for="family_relationship">가족관계</label>
               <input type="text" name="family_relationship[]" placeholder="가족 관계" class="h-10 border border-gray-300 mt-1 rounded px-4 w-full" />
           </div>
           <div class="md:col-span-2">
               <label for="family_job">직업</label>
               <input type="text" name="family_job[]" placeholder="직업 입력" class="h-10 border border-gray-300 mt-1 rounded px-4 w-full" />
           </div>
           <div class="md:col-span-1 text-right mt-2">
               <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded" onclick="removeFamilyMember(this)">삭제</button>
           </div>
       `;
 
       container.appendChild(memberDiv);
   }
 
   function removeFamilyMember(button) {
       button.parentElement.parentElement.remove();
   }
 
   document.addEventListener('DOMContentLoaded', (event) => {
        
        //my_thumbnail
        const fileUrl = "{{ $formState['my_thumbnail'] ?? null }}";

        const preview = document.getElementById('preview');
        //my_family
        const familyFileUrl = "{{ $formState['my_family_thumbnail'] ?? null }}";
        console.log(familyFileUrl)

        const familyPreview = document.getElementById('familyPreview');
        //my_grade
        const gradeFileUrl = "{{ $formState['my_grade_thumbnail'] ?? null }}";
        const gradePreview = document.getElementById('gradePreview');
        //my_bank
        const bankFileUrl = "{{ $formState['my_bank_thumbnail'] ?? null }}";
        const bankPreview = document.getElementById('bankPreview');
        //my_recommend
        const recommendFileUrl = "{{ $formState['my_recommend_thumbnail'] ?? null }}";
        const recommendPreview = document.getElementById('recommendPreview');
        //my_instructor
        const instructorFileUrl = "{{ $formState['my_instructor_thumbnail'] ?? null }}";
        const instructorPreview = document.getElementById('instructorPreview');

        // Display the image if URL is available 
        if (fileUrl) {
            preview.src = fileUrl;
            preview.style.display = 'block';
        }
        if (familyFileUrl) {
            familyPreview.src = familyFileUrl;
            familyPreview.style.display = 'block';
        }
        if (bankFileUrl) {
          bankPreview.src = bankFileUrl;
          bankPreview.style.display = 'block';
        }
        if (gradeFileUrl) {
          gradePreview.src = gradeFileUrl;
          gradePreview.style.display = 'block';
        }
        if (recommendFileUrl) {
          recommendPreview.src = recommendFileUrl;
          recommendPreview.style.display = 'block';
        }
        if (instructorFileUrl) {
          instructorPreview.src = instructorFileUrl;
          instructorPreview.style.display = 'block';
        }

        // Handle image preview for file input
        document.getElementById('my_thumbnail').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        });

        // Handle image preview for file input
        document.getElementById('my_family_thumbnail').addEventListener('change', function(event) {
            const file = event.target.files[1];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    familyPreview.src = e.target.result;
                    familyPreview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                familyPreview.src = '#';
                familyPreview.style.display = 'none';
            }
        });

        // Handle image preview for file input
        document.getElementById('my_bank_thumbnail').addEventListener('change', function(event) {
            const file = event.target.files[2];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    bankPreview.src = e.target.result;
                    bankPreview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                bankPreview.src = '#';
                bankPreview.style.display = 'none';
            }
        });

        // Handle image preview for file input
        document.getElementById('my_grade_thumbnail').addEventListener('change', function(event) {
            const file = event.target.files[3];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    gradePreview.src = e.target.result;
                    gradePreview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                gradePreview.src = '#';
                gradePreview.style.display = 'none';
            }
        });

        // Handle image preview for file input
        document.getElementById('my_recommend_thumbnail').addEventListener('change', function(event) {
            const file = event.target.files[4];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    recommendPreview.src = e.target.result;
                    recommendPreview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                recommendPreview.src = '#';
                recommendPreview.style.display = 'none';
            }
        });

        // Handle image preview for file input
        document.getElementById('my_instructor_thumbnail').addEventListener('change', function(event) {
            const file = event.target.files[5];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                  instructorPreview.src = e.target.result;
                  instructorPreview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                instructorPreview.src = '#';
                instructorPreview.style.display = 'none';
            }
        });
        
    });
 
</script>

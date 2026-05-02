<div>
    @if ($selectedConversation)
        <div class="w-[412px] lg:w-[412px] border-l border-gray-200 bg-white 2xl:block fixed 2xl:relative bottom-0 right-[0] group-[&.closeChatDetails]/item:right-[-412px] 2xl:bottom-auto 2xl:right-auto 2xl:group-[&.closeChatDetails]/item:block  2xl:group-[&.closeChatDetails]/item:right-[0px] z-[50] transition-all duration-300 ">
            <div class="w-full p-5 flex flex-col relative">
                <a href="#" x-on:click="closeChatDetails = true"  class="absolute right-5 top-5 z-10 block xl:hidden">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.4099 8.99994L16.7099 2.70994C16.8982 2.52164 17.004 2.26624 17.004 1.99994C17.004 1.73364 16.8982 1.47825 16.7099 1.28994C16.5216 1.10164 16.2662 0.99585 15.9999 0.99585C15.7336 0.99585 15.4782 1.10164 15.2899 1.28994L8.99994 7.58994L2.70994 1.28994C2.52164 1.10164 2.26624 0.99585 1.99994 0.99585C1.73364 0.99585 1.47824 1.10164 1.28994 1.28994C1.10164 1.47825 0.995847 1.73364 0.995847 1.99994C0.995847 2.26624 1.10164 2.52164 1.28994 2.70994L7.58994 8.99994L1.28994 15.2899C1.19621 15.3829 1.12182 15.4935 1.07105 15.6154C1.02028 15.7372 0.994141 15.8679 0.994141 15.9999C0.994141 16.132 1.02028 16.2627 1.07105 16.3845C1.12182 16.5064 1.19621 16.617 1.28994 16.7099C1.3829 16.8037 1.4935 16.8781 1.61536 16.9288C1.73722 16.9796 1.86793 17.0057 1.99994 17.0057C2.13195 17.0057 2.26266 16.9796 2.38452 16.9288C2.50638 16.8781 2.61698 16.8037 2.70994 16.7099L8.99994 10.4099L15.2899 16.7099C15.3829 16.8037 15.4935 16.8781 15.6154 16.9288C15.7372 16.9796 15.8679 17.0057 15.9999 17.0057C16.132 17.0057 16.2627 16.9796 16.3845 16.9288C16.5064 16.8781 16.617 16.8037 16.7099 16.7099C16.8037 16.617 16.8781 16.5064 16.9288 16.3845C16.9796 16.2627 17.0057 16.132 17.0057 15.9999C17.0057 15.8679 16.9796 15.7372 16.9288 15.6154C16.8781 15.4935 16.8037 15.3829 16.7099 15.2899L10.4099 8.99994Z" fill="#707070"/>
                    </svg>
                </a>
                <div class="text-center mb-2 md:mb-3">
                    <img src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}" class="inline-block h-[75px] w-[75px] lg:h-[100px] lg:w-[100px] rounded-full">
                </div>
                <div class="text-center text-xl md:text-2xl font-bold text-text mb-0 leading-tight whitespace-nowrap">Brownie</div>
                <div class="text-center text-lg md:text-xl font-medium text-gray-500 mb-0 leading-tight whitespace-nowrap">Brownie</div>

                <div class="block md:hidden text-center pt-3">
                    <ul class="mb-0 inline-block">
                        <li class="align-top mr-2 lg:mr-3 inline-block">
                            <a href="" class="group w-10 h-10 lg:w-12 lg:h-12 rounded-full inline-block text-center bg-blue-50 hover:bg-olive transition-all relative">
                                <svg class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 fill-olive group-hover:fill-white transition-all" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 0H3C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.316071 1.44129 0 2.20435 0 3V13C0 13.7956 0.316071 14.5587 0.87868 15.1213C1.44129 15.6839 2.20435 16 3 16H17C17.7956 16 18.5587 15.6839 19.1213 15.1213C19.6839 14.5587 20 13.7956 20 13V3C20 2.20435 19.6839 1.44129 19.1213 0.87868C18.5587 0.316071 17.7956 0 17 0ZM16.59 2L10.71 7.88C10.617 7.97373 10.5064 8.04812 10.3846 8.09889C10.2627 8.14966 10.132 8.1758 10 8.1758C9.86799 8.1758 9.73728 8.14966 9.61542 8.09889C9.49356 8.04812 9.38296 7.97373 9.29 7.88L3.41 2H16.59ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14H3C2.73478 14 2.48043 13.8946 2.29289 13.7071C2.10536 13.5196 2 13.2652 2 13V3.41L7.88 9.29C8.4425 9.8518 9.205 10.1674 10 10.1674C10.795 10.1674 11.5575 9.8518 12.12 9.29L18 3.41V13Z"/>
                                </svg>
                            </a>
                        </li>

                        <li class="align-top mr-2 lg:mr-3 inline-block">
                            <a href="" class="group w-10 h-10 lg:w-12 lg:h-12 rounded-full inline-block text-center bg-blue-50 hover:bg-olive transition-all relative">
                                <svg class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 fill-olive group-hover:fill-white transition-all" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.4396 11.0001C18.2196 11.0001 17.9896 10.9301 17.7696 10.8801C17.3241 10.7819 16.8863 10.6516 16.4596 10.4901C15.9957 10.3213 15.4858 10.3301 15.0279 10.5147C14.5701 10.6993 14.1967 11.0467 13.9796 11.4901L13.7596 11.9401C12.7856 11.3983 11.8906 10.7253 11.0996 9.94011C10.3144 9.14913 9.64143 8.25411 9.09961 7.28011L9.51961 7.00011C9.96298 6.78303 10.3104 6.40964 10.495 5.9518C10.6796 5.49396 10.6884 4.98402 10.5196 4.52011C10.3608 4.09253 10.2305 3.65491 10.1296 3.21011C10.0796 2.99011 10.0396 2.76011 10.0096 2.53011C9.88818 1.82573 9.51924 1.18785 8.96923 0.731352C8.41923 0.274849 7.72431 0.0297211 7.00961 0.0401122H4.00961C3.57864 0.0360657 3.15186 0.124926 2.75832 0.300643C2.36478 0.47636 2.01372 0.734808 1.72904 1.05839C1.44436 1.38198 1.23275 1.76311 1.1086 2.17583C0.984454 2.58855 0.950692 3.02317 1.00961 3.45011C1.54235 7.63949 3.45564 11.532 6.44726 14.5127C9.43889 17.4935 13.3383 19.3926 17.5296 19.9101H17.9096C18.647 19.9112 19.359 19.6406 19.9096 19.1501C20.226 18.8672 20.4787 18.5203 20.6511 18.1324C20.8235 17.7446 20.9116 17.3245 20.9096 16.9001V13.9001C20.8974 13.2055 20.6444 12.5367 20.194 12.0078C19.7435 11.4789 19.1234 11.1227 18.4396 11.0001ZM18.9396 17.0001C18.9394 17.1421 18.909 17.2824 18.8504 17.4117C18.7918 17.5411 18.7063 17.6564 18.5996 17.7501C18.4879 17.8466 18.3572 17.9187 18.216 17.9617C18.0748 18.0048 17.9262 18.0178 17.7796 18.0001C14.0345 17.5199 10.5558 15.8066 7.89233 13.1304C5.22881 10.4542 3.53202 6.96745 3.06961 3.22011C3.0537 3.07363 3.06765 2.92544 3.11061 2.7845C3.15358 2.64356 3.22468 2.5128 3.31961 2.40011C3.41332 2.29344 3.52867 2.20795 3.65799 2.14933C3.78731 2.09071 3.92763 2.06029 4.06961 2.06011H7.06961C7.30216 2.05494 7.52924 2.13099 7.71176 2.27518C7.89428 2.41937 8.02082 2.62268 8.06961 2.85011C8.10961 3.12345 8.15961 3.39345 8.21961 3.66011C8.33513 4.18726 8.48887 4.70529 8.67961 5.21011L7.27961 5.86011C7.15991 5.91503 7.05223 5.99306 6.96277 6.08971C6.87331 6.18636 6.80381 6.29973 6.75828 6.42331C6.71275 6.54689 6.69208 6.67824 6.69746 6.80983C6.70284 6.94142 6.73415 7.07066 6.78961 7.19011C8.22881 10.2729 10.7069 12.7509 13.7896 14.1901C14.0331 14.2901 14.3062 14.2901 14.5496 14.1901C14.6743 14.1455 14.7889 14.0766 14.8868 13.9873C14.9846 13.898 15.0638 13.7902 15.1196 13.6701L15.7396 12.2701C16.2566 12.455 16.7842 12.6086 17.3196 12.7301C17.5863 12.7901 17.8563 12.8401 18.1296 12.8801C18.357 12.9289 18.5604 13.0554 18.7045 13.238C18.8487 13.4205 18.9248 13.6476 18.9196 13.8801L18.9396 17.0001Z"/>
                                </svg>
                            </a>
                        </li>

                        <li class="align-top mr-2 lg:mr-3 inline-block">
                            <a href="" class="group w-10 h-10 lg:w-12 lg:h-12 rounded-full inline-block text-center bg-blue-50 hover:bg-olive transition-all relative">
                                <svg class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 fill-olive group-hover:fill-white transition-all" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 11.18V8C13.9986 6.58312 13.4958 5.21247 12.5806 4.13077C11.6655 3.04908 10.3971 2.32615 9 2.09V1C9 0.734784 8.89464 0.48043 8.70711 0.292893C8.51957 0.105357 8.26522 0 8 0C7.73478 0 7.48043 0.105357 7.29289 0.292893C7.10536 0.48043 7 0.734784 7 1V2.09C5.60294 2.32615 4.33452 3.04908 3.41939 4.13077C2.50425 5.21247 2.00144 6.58312 2 8V11.18C1.41645 11.3863 0.910998 11.7681 0.552938 12.2729C0.194879 12.7778 0.00173951 13.3811 0 14V16C0 16.2652 0.105357 16.5196 0.292893 16.7071C0.48043 16.8946 0.734784 17 1 17H4.14C4.37028 17.8474 4.873 18.5954 5.5706 19.1287C6.26819 19.6621 7.1219 19.951 8 19.951C8.8781 19.951 9.73181 19.6621 10.4294 19.1287C11.127 18.5954 11.6297 17.8474 11.86 17H15C15.2652 17 15.5196 16.8946 15.7071 16.7071C15.8946 16.5196 16 16.2652 16 16V14C15.9983 13.3811 15.8051 12.7778 15.4471 12.2729C15.089 11.7681 14.5835 11.3863 14 11.18ZM4 8C4 6.93913 4.42143 5.92172 5.17157 5.17157C5.92172 4.42143 6.93913 4 8 4C9.06087 4 10.0783 4.42143 10.8284 5.17157C11.5786 5.92172 12 6.93913 12 8V11H4V8ZM8 18C7.65097 17.9979 7.30857 17.9045 7.00683 17.7291C6.70509 17.5536 6.45451 17.3023 6.28 17H9.72C9.54549 17.3023 9.29491 17.5536 8.99317 17.7291C8.69143 17.9045 8.34903 17.9979 8 18ZM14 15H2V14C2 13.7348 2.10536 13.4804 2.29289 13.2929C2.48043 13.1054 2.73478 13 3 13H13C13.2652 13 13.5196 13.1054 13.7071 13.2929C13.8946 13.4804 14 13.7348 14 14V15Z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        
            <div class="w-full h-px bg-gray-200 mx-5"></div>
            
            <ul class="nav nav-tabs flex flex-row flex-wrap list-none border-b-0 px-5 mb-0" id="tabs-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="#tabs-media" class=" nav-link block font-medium text-base leading-tight border-x-0 border-t-0 border-b-2 border-transparent px-3 py-1 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent hover:bg-transparent focus:bg-transparent active [&.active]:!text-olive [&.active]:!border-b-olive" id="tabs-media-tab" data-bs-toggle="pill" data-bs-target="#tabs-media" role="tab" aria-controls="tabs-media" aria-selected="true">Media</a>
                </li>
            </ul>
            <div class="pl-5 py-3">
                <div class="tab-content" id="tabs-tabContent">
                    <div class="tab-pane fade show active" id="tabs-media" role="tabpanel" aria-labelledby="tabs-media-tab">
                        <div class="pr-5 overflow-y-auto overflow-x-hidden">
                            <div class="grid gap-2 grid-cols-4">
                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>

                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>

                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>
                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>

                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>

                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>
                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>

                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>

                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>
                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>

                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>

                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>
                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>

                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>

                                <a class="pt-[100%] relative" data-bs-toggle="modal" data-bs-target="#ModalPreviewFile" href="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover object-center rounded" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    @endif
</div>

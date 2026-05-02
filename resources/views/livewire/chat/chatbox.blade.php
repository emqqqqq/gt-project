<div>

    @if ($selectedConversation)
        <div class="absolute top-0 w-full h-[60px] sm:h-[48px] md:h-[100px] flex border-b border-solid border-b-gray-200 px-4 md:px-5 shadow-sm bg-white dflex items-center justify-between">
            <div>

                <div class="flex items-center">
                    <div class="block md:hidden">
                        <div class="mr-[8px] md:mr-[12px] relative">
                            <a href="#"  x-on:click="openChat = true" class="group ">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.29 9.29C6.19896 9.3851 6.12759 9.49725 6.08 9.62C5.97998 9.86346 5.97998 10.1365 6.08 10.38C6.12759 10.5028 6.19896 10.6149 6.29 10.71L9.29 13.71C9.4783 13.8983 9.7337 14.0041 10 14.0041C10.2663 14.0041 10.5217 13.8983 10.71 13.71C10.8983 13.5217 11.0041 13.2663 11.0041 13C11.0041 12.7337 10.8983 12.4783 10.71 12.29L9.41 11H13C13.2652 11 13.5196 10.8946 13.7071 10.7071C13.8946 10.5196 14 10.2652 14 10C14 9.73478 13.8946 9.48043 13.7071 9.29289C13.5196 9.10536 13.2652 9 13 9H9.41L10.71 7.71C10.8037 7.61704 10.8781 7.50644 10.9289 7.38458C10.9797 7.26272 11.0058 7.13201 11.0058 7C11.0058 6.86799 10.9797 6.73728 10.9289 6.61542C10.8781 6.49356 10.8037 6.38296 10.71 6.29C10.617 6.19627 10.5064 6.12188 10.3846 6.07111C10.2627 6.02034 10.132 5.9942 10 5.9942C9.86799 5.9942 9.73728 6.02034 9.61542 6.07111C9.49356 6.12188 9.38296 6.19627 9.29 6.29L6.29 9.29ZM0 10C0 11.9778 0.58649 13.9112 1.6853 15.5557C2.78412 17.2002 4.3459 18.4819 6.17317 19.2388C8.00043 19.9957 10.0111 20.1937 11.9509 19.8079C13.8907 19.422 15.6725 18.4696 17.0711 17.0711C18.4696 15.6725 19.422 13.8907 19.8079 11.9509C20.1937 10.0111 19.9957 8.00043 19.2388 6.17317C18.4819 4.3459 17.2002 2.78412 15.5557 1.6853C13.9112 0.58649 11.9778 0 10 0C8.68678 0 7.38642 0.258658 6.17317 0.761205C4.95991 1.26375 3.85752 2.00035 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10ZM18 10C18 11.5823 17.5308 13.129 16.6518 14.4446C15.7727 15.7602 14.5233 16.7855 13.0615 17.391C11.5997 17.9965 9.99113 18.155 8.43928 17.8463C6.88743 17.5376 5.46197 16.7757 4.34315 15.6569C3.22433 14.538 2.4624 13.1126 2.15372 11.5607C1.84504 10.0089 2.00346 8.40034 2.60896 6.93853C3.21447 5.47672 4.23984 4.22729 5.55544 3.34824C6.87103 2.46919 8.41775 2 10 2C12.1217 2 14.1566 2.84285 15.6569 4.34315C17.1571 5.84344 18 7.87827 18 10Z" fill="#95CAA2"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="hidden xl:flex items-center transition-all">
                        <div class="w-[38px] md:w-[54px] mr-[8px] md:mr-[12px] relative">
                            <img class="w-[38px] md:w-[54px] h-[38px] md:h-[54px] rounded-full" src="https://ui-avatars.com/api/?name={{$receiverInstance->name }}">
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-col flex-wrap justify-between w-full">
                                <strong class="text-text text-base md:text-lg font-medium">{{ $receiverInstance->name }}</strong>
                            </div>
                        </div>
                    </div>

                    <div class="flex xl:hidden items-center transition-all cursor-pointer" x-on:click="closeChatDetails = false">
                        <div class="w-[38px] md:w-[54px] mr-[8px] md:mr-[12px] relative">
                            <img class="w-[38px] md:w-[54px] h-[38px] md:h-[54px] rounded-full" src="https://ui-avatars.com/api/?name={{ $receiverInstance->name }}">
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-col flex-wrap justify-between w-full">
                                <strong class="text-text text-base md:text-lg font-medium">{{ $receiverInstance->name }}</strong>
                            </div>
                        </div>
                    </div>
                </div>


                
            </div>
            <div>
                <a href="" class="group w-10 h-10 lg:w-12 lg:h-12 rounded-full inline-block text-center bg-blue-50 hover:bg-olive transition-all relative">
                    <svg class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 fill-olive group-hover:fill-white transition-all" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.4396 11.0001C18.2196 11.0001 17.9896 10.9301 17.7696 10.8801C17.3241 10.7819 16.8863 10.6516 16.4596 10.4901C15.9957 10.3213 15.4858 10.3301 15.0279 10.5147C14.5701 10.6993 14.1967 11.0467 13.9796 11.4901L13.7596 11.9401C12.7856 11.3983 11.8906 10.7253 11.0996 9.94011C10.3144 9.14913 9.64143 8.25411 9.09961 7.28011L9.51961 7.00011C9.96298 6.78303 10.3104 6.40964 10.495 5.9518C10.6796 5.49396 10.6884 4.98402 10.5196 4.52011C10.3608 4.09253 10.2305 3.65491 10.1296 3.21011C10.0796 2.99011 10.0396 2.76011 10.0096 2.53011C9.88818 1.82573 9.51924 1.18785 8.96923 0.731352C8.41923 0.274849 7.72431 0.0297211 7.00961 0.0401122H4.00961C3.57864 0.0360657 3.15186 0.124926 2.75832 0.300643C2.36478 0.47636 2.01372 0.734808 1.72904 1.05839C1.44436 1.38198 1.23275 1.76311 1.1086 2.17583C0.984454 2.58855 0.950692 3.02317 1.00961 3.45011C1.54235 7.63949 3.45564 11.532 6.44726 14.5127C9.43889 17.4935 13.3383 19.3926 17.5296 19.9101H17.9096C18.647 19.9112 19.359 19.6406 19.9096 19.1501C20.226 18.8672 20.4787 18.5203 20.6511 18.1324C20.8235 17.7446 20.9116 17.3245 20.9096 16.9001V13.9001C20.8974 13.2055 20.6444 12.5367 20.194 12.0078C19.7435 11.4789 19.1234 11.1227 18.4396 11.0001ZM18.9396 17.0001C18.9394 17.1421 18.909 17.2824 18.8504 17.4117C18.7918 17.5411 18.7063 17.6564 18.5996 17.7501C18.4879 17.8466 18.3572 17.9187 18.216 17.9617C18.0748 18.0048 17.9262 18.0178 17.7796 18.0001C14.0345 17.5199 10.5558 15.8066 7.89233 13.1304C5.22881 10.4542 3.53202 6.96745 3.06961 3.22011C3.0537 3.07363 3.06765 2.92544 3.11061 2.7845C3.15358 2.64356 3.22468 2.5128 3.31961 2.40011C3.41332 2.29344 3.52867 2.20795 3.65799 2.14933C3.78731 2.09071 3.92763 2.06029 4.06961 2.06011H7.06961C7.30216 2.05494 7.52924 2.13099 7.71176 2.27518C7.89428 2.41937 8.02082 2.62268 8.06961 2.85011C8.10961 3.12345 8.15961 3.39345 8.21961 3.66011C8.33513 4.18726 8.48887 4.70529 8.67961 5.21011L7.27961 5.86011C7.15991 5.91503 7.05223 5.99306 6.96277 6.08971C6.87331 6.18636 6.80381 6.29973 6.75828 6.42331C6.71275 6.54689 6.69208 6.67824 6.69746 6.80983C6.70284 6.94142 6.73415 7.07066 6.78961 7.19011C8.22881 10.2729 10.7069 12.7509 13.7896 14.1901C14.0331 14.2901 14.3062 14.2901 14.5496 14.1901C14.6743 14.1455 14.7889 14.0766 14.8868 13.9873C14.9846 13.898 15.0638 13.7902 15.1196 13.6701L15.7396 12.2701C16.2566 12.455 16.7842 12.6086 17.3196 12.7301C17.5863 12.7901 17.8563 12.8401 18.1296 12.8801C18.357 12.9289 18.5604 13.0554 18.7045 13.238C18.8487 13.4205 18.9248 13.6476 18.9196 13.8801L18.9396 17.0001Z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <div class="w-full h-[calc(100vh_-_223px)] md:h-[calc(100vh_-_270px)] xl:h-[calc(100vh_-_322px)] absolute top-[60px] sm:top-[48px] md:top-[100px] p-5">
            <div class="h-full overflow-x-hidden overflow-y-auto pr-3 flex flex-col chat_wrapper">
                <div class="flex flex-row flex-wrap mt-10 chatbox_body">

                    @foreach ($messages as $message)
                        @if(auth()->id() == $message->sender_id)
                            <div class="w-full">
                                <div class="text-right mt-10">
                                    <div wire:key='{{ $message->id }}' class="text-left clear-both mb-1 text-base leading-normal px-2.5 py-2 bg-olive text-white rounded-lg shadow-sm inline-block">{{ $message->body }}</div>
                                    <div class="flex justify-end items-center">
                                        <div class="text-sm text-olive pt-1 pl-0.5 mr-1">{{ $message->created_at->format('m: i a') }}</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><style>svg{fill:#95caa2}</style>
                                            <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        @else 
                            <div class="w-[calc(100%_-_54px)] min-[2842px]:w-[calc(100%_-_298px)] mt-10">
                                <div class="flex flex-nowrap">
                                    <div class="w-[54px]">
                                        <img class="w-[42px] h-[42px] rounded-full" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}">
                                    </div>   
                                    <div>
                                        <div class="text-left w-fit mb-1 text-base text-text leading-normal px-2.5 py-2 bg-white rounded-lg shadow-sm inline-block">{{ $message->body }}</div>
                                        <div class="f-full h-px clear-both"></div>                        
                                        <div class="flex justify-between items-center">
                                            <div class="text-sm text-olive pt-1 pl-0.5 mr-1">{{ $message->created_at->format('m: i a') }}</div>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><style>svg{fill:#95caa2}</style>
                                                <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                            </svg>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    
                </div>
              {{--      <div class="flex flex-row flex-wrap mt-10">
                    <div class="w-[54px]"><img class="w-[42px] h-[42px] rounded-full" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}"></div>
                    <div class="w-[calc(100%_-_54px)] min-[2842px]:w-[calc(100%_-_298px)]">
                        <div class="flex flex-nowrap">
                            <div class="text-left w-fit mb-1 text-base text-text leading-normal px-2.5 py-2 bg-white rounded-lg shadow-sm inline-block">I'd like a classic chocolate cake with cherries, please</div>
                            <div class="f-full h-px clear-both"></div>
                        </div>
                        <div class="text-sm text-olive pt-1 pl-0.5">Today 11:38</div>
                    </div>
                </div>

                <div class="text-right mt-10">
                    <div class="text-left clear-both mb-1 text-base leading-normal px-2.5 py-2 bg-olive text-white rounded-lg shadow-sm inline-block max-w-[80%]">Great choice! Would you like any specific decorations or toppings on your chocolate cake?</div>
                    <div class="text-sm text-olive pt-1 pl-0.5">Today 11:38</div>
                </div>

                <div class="flex flex-row flex-wrap mt-10">
                    <div class="w-[54px]"><img class="w-[42px] h-[42px] rounded-full" src="{{ Vite::asset('resources/images/avatar-2.jpeg')}}"></div>
                    <div class="w-[calc(100%_-_54px)] min-[2842px]:w-[calc(100%_-_298px)]">
                        <div class="flex flex-nowrap">
                            <div class="text-left w-fit mb-1 text-base text-text leading-normal px-2.5 py-2 bg-white rounded-lg shadow-sm inline-block"> I'd like some chocolate shavings and a "Happy Birthday" message written in icing on the cake, please. It's for a special occasion.</div>
                            <div class="f-full h-px clear-both"></div>
                        </div>
                        <div class="text-sm text-olive pt-1 pl-0.5">Today 11:38</div>
                    </div>
                </div>
                
                <div class="text-right mt-10">
                    <div class="text-left clear-both mb-1 text-base leading-normal px-2.5 py-2 bg-olive text-white rounded-lg shadow-sm inline-block max-w-[80%]">Certainly!</div>
                    <div class="text-left clear-both mb-1 text-base leading-normal px-2.5 py-2 bg-olive text-white rounded-lg shadow-sm inline-block max-w-[80%]">We'll prepare a delicious chocolate cake with chocolate shavings and a "Happy Birthday" message. When do you need it?</div>
                    <div class="text-sm text-olive pt-1 pl-0.5">Today 11:38</div>
                </div>
                 --}}
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            window.addEventListener('rowChatToBottom', event=>{
                $('.chat_wrapper').scrollTop($('.chatbox_body').height());
            });
            $('.chat_wrapper').on('scroll', function(){
                var height = $('.chatbox_body').scrollTop();
                console.log(height);
                if(height==0){
                    //dd('zdr');
                    window.livewire.emit('loadmore');
                }
            });
        </script>
        
        <script>
            window.addEventListener('updatedHeight', event=>{
                let old = event.detail.height;
                let newHeight = $('.chatbox_body')[0].scrollHeight();
                let height = $('.chatbox_body').scrollTop(newHeight-old);

                window.livewire.emit('updateHeight',{
                    height:height,
                });
            })
        </script>
    @else
        <strong class="text-text text-base md:text-lg font-medium flex justify-center items-center my-auto">No Conversation Selected.</strong>
    @endif

</div>

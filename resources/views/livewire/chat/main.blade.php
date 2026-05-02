<div>
    @section('page-title')
        Custom Cake
    @endsection

    <section class="pl-0 pt-[70px] sm:pt-[90px] xl:pt-[139px] relative h-auto z-30 transition-all duration-300 text-text" x-data="{ openChat: true, closeChatDetails: true }" >

        <div class="border border-t border-b  flex flex-row flex-wrap items-stretch w-full group/item" x-bind:class="{'closeChatDetails' : closeChatDetails}">
            <div class="w-full chat_list_container md:w-[320px] lg:w-[412px] border-r-solid border-r-gray-200 border-r bg-white">
                <div class="px-5 py-6 h-[145px]">
                    <h1 class="font-bold text-[25px] sm:text-[30px] md:text-[35px] lg:text-[42px]">Chats</h1>
                    @livewire('search-user')
                    
                </div>
                <div class=" h-[calc(100vh_-_270px)] md:h-[calc(100vh_-_225px)] xl:h-[calc(100vh_-_277px)] overflow-y-auto overflow-x-hidden">
                    @livewire('chat.chat-list')
                </div>
            </div>
            <div x-bind:class="{'hidden' : openChat}" class="chat_box_container w-full md:w-[calc(100%_-_320px)] lg:w-[calc(100%_-_412px)] xl:w-[calc(100%_-_824px)] hidden md:!block fixed md:relative right-0 bottom-0 pb-5 md:pb-0 md:right-auto md:bottom-auto z-[49] md:z-auto bg-white md:bg-transparent md:group-[&.closeChatDetails]/item:w-[calc(100%_-_320px)] lg:group-[&.closeChatDetails]/item:w-[calc(100%_-_412px)] 2xl:group-[&.closeChatDetails]/item:w-[calc(100%_-_824px)] top-[75px] sm:top-[90px] md:top-0 ">
                @livewire('chat.chatbox')
                @livewire('chat.send-message')

            </div>
            @livewire('chat.chatinfo')
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        // window.addEventListener('chatSelected', event=>{

        //     if(window.innerWidth < 768){
        //         $('.chat_list_container').hide();
        //         $('.chat_box_container').show();
        //     }

        //     $('.chatbox_body').scrollTop($('.chatbox_body')[0].scrollHeight);

        //     let height = $('.chatbox_body').height();
        //     //alert(height);
        //     console.log(height);
        //     window.livewire.emit('updateHeight', {
        //         height:height,
        //     });
        // });

        // $(window).resize(function(){            
        //     console.log('chatSelected event triggered');
        //     if(window.innerWidth > 768){
        //         $('.chat_list_container').show();
        //         $('.chat_box_container').show();
        //     }
        // });
    </script>
    
</div>

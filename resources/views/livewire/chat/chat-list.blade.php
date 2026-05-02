<div>
    <div wire:listen="chatlist">
        @if (count($conversations) > 0)
            @foreach($conversations as $conversation)
                <div class="flex items-center px-5 py-3 w-full hover:cursor-pointer hover:bg-gray-200 transition-all" wire:key='{{ $conversation->id }}' wire:click="$emit('chatUserSelected', {{ $conversation }}, {{ $this->getChatUserInstance($conversation, $name='id') }})">
                    <div class="w-[54px] mr-[12px] relative z-0">
                        <img class="w-[54px] h-[54px] rounded-full" src="https://ui-avatars.com/api/?name={{ $this->getChatUserInstance($conversation, $name='name') }}">
                    </div>
                    <div class="flex flex-col w-[calc(100%_-_66px)]">
                        <div class="flex flex-row flex-wrap justify-between w-full">
                            <strong class="text-lg font-medium">{{ $this->getChatUserInstance($conversation, $name='name') }}</strong>
                            <span class="text-gray-500 text-sm">{{ $conversation->messages->last()->created_at->shortAbsoluteDiffForHumans() }}</span>
                        </div>

                        <div class="flex flex-row flex-wrap justify-between items-center w-full">
                            <span class="text-gray-500 text-base">{{ $conversation->messages->last()->body }}</span>
                            <div class="h-6 w-6 rounded-full text-white bg-olive text-center">
                                2
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else   
            <div class="flex items-center px-5 py-3 w-full " >
                <div class="flex flex-row flex-wrap justify-between items-center w-full">
                    <span class="text-gray-500 text-base">You have no conversations.</span>
                </div>
            </div>
        @endif  
    </div>
</div>

<div>
    <div class="relative" x-data="{ isOpen: false }" @click.away="isOpen = false, $refs.friend.value = ''">
        <input
            wire:model.debounce.500ms="search" type="text" class="rounded w-full p-2 pl-[52px] border-solid border-gray-300 text-gray-800 placeholder-gray-500 focus:border-gray-400 ring-0 focus:ring-0" placeholder="Search"
            @focus="isOpen = true"
            @keydown="isOpen = true"
            @keydown.escape="isOpen = false"
            @keydown.shift.tab="isOpen = false"
            x-ref="friend"
        >
        <img src="{{ Vite::asset('resources/images/icon-search.svg')}}"  class="w-[25px] h-[25px] absolute left-3 top-1/2 -translate-y-1/2 z-10 inline-block z-0">
        <div wire:loading class="absolute top-0 right-0 h-4 w-4 mr-2 mt-2">
            <svg class="animate-spin text-olive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sync-alt" class="svg-inline--fa fa-sync-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M370.72 133.28C339.458 104.008 298.888 87.962 255.848 88c-77.458.068-144.328 53.178-162.791 126.85-1.344 5.363-6.122 9.15-11.651 9.15H24.103c-7.498 0-13.194-6.807-11.807-14.176C33.933 94.924 134.813 8 256 8c66.448 0 126.791 26.136 171.315 68.685L463.03 40.97C478.149 25.851 504 36.559 504 57.941V192c0 13.255-10.745 24-24 24H345.941c-21.382 0-32.09-25.851-16.971-40.971l41.75-41.749zM32 296h134.059c21.382 0 32.09 25.851 16.971 40.971l-41.75 41.75c31.262 29.273 71.835 45.319 114.876 45.28 77.418-.07 144.315-53.144 162.787-126.849 1.344-5.363 6.122-9.15 11.651-9.15h57.304c7.498 0 13.194 6.807 11.807 14.176C478.067 417.076 377.187 504 256 504c-66.448 0-126.791-26.136-171.315-68.685L48.97 471.03C33.851 486.149 8 475.441 8 454.059V320c0-13.255 10.745-24 24-24z"></path></svg>
        </div>
    
        @if (strlen($search) >= 3)
            <div
                class="z-10 absolute bg-white text-sm w-full mt-4 border border-olive rounded-l-lg bg-opacity-90 overflow-y-scroll max-h-64 ring-olive"
                x-show="isOpen"
            >
                @if (count($searchResults) > 0)
                    <ul>
                        @foreach ($searchResults as $result)
                            @if ($loop->last)
                                <li>
                            @else
                                <li class="border-b border-olive">
                            @endif
                                <a href="#" class="block hover:bg-olive hover:bg-opacity-50 focus:bg-olive focus:bg-opacity-50 focus:outline-none px-3 py-3 flex items-center
                                transition ease-in-out duration-150 z-bigger"
                                wire:click="checkconversation({{ $result->id }})"
                                wire:keydown.enter="checkconversation({{ $result->id }})"
                                @click = "isOpen = false"
                                @keydown.enter="isOpen = false"
                                @keydown.escape="isOpen = false"
                                @if ($loop->last)
                                    @keydown.tab="isOpen = false"
                                    @keydown.shift.tab="isOpen = true"
                                @endif
                                >
                                    @if ($result->profile_photo_path)
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('storage/' . $result->profile_photo_path) }}" alt="{{ $result->name }}"/>
                                    @else
                                        <svg class="h-8 w-8 rounded-full object-cover text-olive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" class="svg-inline--fa fa-question-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg>
                                    @endif
    
                                    <span class="ml-4">{{ $result->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <div class="px-3 py-3">No results found for "{{ $search }}"</div>
                @endif
            </div>
        @endif
    </div>
</div>

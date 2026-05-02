<button {{ $attributes->merge(['type' => 'button', 'class' => 'font-bold text-base md:text-lg lg:text-[20px] text-white bg-red-600 rounded-full py-[10px] px-[40px] hover:bg-red-500 transition-all ease-in-out']) }}>
    {{ $slot }}
</button>

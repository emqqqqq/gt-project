<button {{ $attributes->merge(['type' => 'submit', 'class' => 'font-bold text-base md:text-lg lg:text-[20px] text-white bg-olive rounded-full py-[10px] px-[40px] hover:bg-[#69A87C] transition-all ease-in-out']) }}>
    {{ $slot }}
</button>

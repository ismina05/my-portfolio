<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex justify-center items-center px-6 py-3 bg-[#596B8A] text-white text-base font-semibold rounded-full hover:bg-opacity-90 hover:shadow-md transition-all duration-300 ease-in-out']) }}>
    {{ $slot }}
</button>

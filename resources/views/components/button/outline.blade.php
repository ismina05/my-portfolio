@if ($attributes->has('href'))
    <a {{ $attributes->merge(['class' => 'inline-flex justify-center items-center px-6 py-3 bg-transparent text-[#0F2C59] dark:text-[#5FA8FF] text-base font-semibold border-2 border-[#0F2C59] dark:border-[#5FA8FF] rounded-full hover:bg-[#0F2C59] dark:hover:bg-[#5FA8FF] hover:text-white dark:hover:text-[#0F172A] hover:-translate-y-0.5 active:scale-95 transition-all duration-300 ease-in-out']) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex justify-center items-center px-6 py-3 bg-transparent text-[#0F2C59] dark:text-[#5FA8FF] text-base font-semibold border-2 border-[#0F2C59] dark:border-[#5FA8FF] rounded-full hover:bg-[#0F2C59] dark:hover:bg-[#5FA8FF] hover:text-white dark:hover:text-[#0F172A] hover:-translate-y-0.5 active:scale-95 transition-all duration-300 ease-in-out']) }}>
        {{ $slot }}
    </button>
@endif

@if ($attributes->has('href'))
    <a {{ $attributes->merge(['class' => 'inline-flex justify-center items-center px-6 py-3 bg-[#0F2C59] dark:bg-[#5FA8FF] text-white dark:text-[#0F172A] text-base font-semibold rounded-full hover:bg-opacity-90 dark:hover:bg-opacity-90 hover:shadow-md hover:-translate-y-0.5 active:scale-95 transition-all duration-300 ease-in-out']) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex justify-center items-center px-6 py-3 bg-[#0F2C59] dark:bg-[#5FA8FF] text-white dark:text-[#0F172A] text-base font-semibold rounded-full hover:bg-opacity-90 dark:hover:bg-opacity-90 hover:shadow-md hover:-translate-y-0.5 active:scale-95 transition-all duration-300 ease-in-out']) }}>
        {{ $slot }}
    </button>
@endif

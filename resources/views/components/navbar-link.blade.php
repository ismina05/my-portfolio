@props(['section' => null])

@php
$baseClasses = 'transition duration-300 ease-in-out cursor-pointer text-sm xl:text-base whitespace-nowrap';
@endphp

<a @if($section) 
    :class="activeSection === '{{ $section }}' ? 'text-[#0F2C59] dark:text-[#5FA8FF] font-semibold border-b-2 border-[#0F2C59] dark:border-[#5FA8FF] pb-1' : 'text-[#4A5568] dark:text-[#CBD5E1] hover:text-[#0F2C59] dark:hover:text-[#F8FAFC] font-medium'"
   @endif
   {{ $attributes->merge(['class' => $baseClasses]) }}>
    {{ $slot }}
</a>

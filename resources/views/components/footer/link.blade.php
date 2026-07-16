@props(['href' => '#'])

<li>
    <a href="{{ $href }}" class="text-[#8A9CBB] hover:text-[#3B82F6] hover:translate-x-2 inline-block transition-all duration-300 font-medium text-sm">
        {{ $slot }}
    </a>
</li>

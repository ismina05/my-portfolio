@props(['title', 'items' => [], 'icon' => null, 'description' => null])

<div class="bg-white dark:bg-[#1E293B] p-6 sm:p-8 rounded-2xl shadow-sm border border-[#E2E8F0] dark:border-[#334155] hover:shadow-lg hover:border-[#3B82F6] dark:hover:border-[#5FA8FF] transition-all duration-300 group h-full flex flex-col">
    <div class="flex items-center mb-6">
        @if($icon)
            <div class="w-12 h-12 rounded-xl bg-[#F8FAFC] dark:bg-[#0F172A] flex items-center justify-center text-[#3B82F6] dark:text-[#5FA8FF] group-hover:bg-[#3B82F6] dark:group-hover:bg-[#5FA8FF] group-hover:text-white dark:group-hover:text-[#0F172A] transition-colors duration-300 mr-4 shrink-0">
                {{ $icon }}
            </div>
        @endif
        <h3 class="text-xl font-bold text-[#0F2C59] dark:text-[#F8FAFC] group-hover:text-[#3B82F6] dark:group-hover:text-[#5FA8FF] transition-colors duration-300">{{ $title }}</h3>
    </div>
    
    @if($description)
        <p class="text-[#4A5568] dark:text-[#CBD5E1] text-sm mb-4 leading-relaxed">{{ $description }}</p>
    @endif

    @if(count($items) > 0)
    <ul class="space-y-3 mt-auto">
        @foreach($items as $item)
        <li class="flex items-start">
            <svg class="w-5 h-5 mr-3 text-[#3B82F6] dark:text-[#5FA8FF] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <span class="text-[#4A5568] dark:text-[#CBD5E1] font-medium text-sm md:text-base">{{ $item }}</span>
        </li>
        @endforeach
    </ul>
    @endif

    @if($slot->isNotEmpty())
        <div class="mt-auto">
            {{ $slot }}
        </div>
    @endif
</div>

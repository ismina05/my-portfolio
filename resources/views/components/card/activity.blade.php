@props(['title', 'year', 'description', 'icon' => null])

<div class="group bg-white dark:bg-[#1E293B] rounded-3xl p-6 sm:p-8 shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-[#E2E8F0] dark:border-[#334155] hover:border-[#3B82F6] dark:hover:border-[#5FA8FF] flex flex-col h-full relative overflow-hidden">
    <!-- Background Decor (Blue hover effect) -->
    <div class="absolute -right-8 -top-8 w-24 h-24 bg-[#3B82F6]/5 dark:bg-[#5FA8FF]/5 rounded-full group-hover:scale-[2] transition-transform duration-500 ease-out z-0"></div>

    <div class="relative z-10">
        <div class="flex justify-between items-start mb-6">
            @if($icon || $slot->isNotEmpty())
                <div class="w-14 h-14 rounded-2xl bg-[#F8FAFC] dark:bg-[#0F172A] flex items-center justify-center text-[#0F2C59] dark:text-[#F8FAFC] group-hover:bg-[#3B82F6] dark:group-hover:bg-[#5FA8FF] group-hover:text-white dark:group-hover:text-[#0F172A] transition-colors duration-300 shadow-sm border border-[#E2E8F0] dark:border-[#334155] group-hover:border-[#3B82F6] dark:group-hover:border-[#5FA8FF]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        {!! $icon ?? $slot !!}
                    </svg>
                </div>
            @endif
            
            <span class="inline-flex items-center px-3 py-1 rounded-full bg-[#F8FAFC] dark:bg-[#0F172A] text-xs font-bold text-[#4A5568] dark:text-[#CBD5E1] group-hover:bg-[#3B82F6]/10 dark:group-hover:bg-[#5FA8FF]/20 group-hover:text-[#3B82F6] dark:group-hover:text-[#5FA8FF] border border-[#E2E8F0] dark:border-[#334155] transition-colors duration-300">
                {{ $year }}
            </span>
        </div>
        
        <h3 class="text-xl font-bold text-[#0F2C59] dark:text-[#F8FAFC] mb-3 group-hover:text-[#3B82F6] dark:group-hover:text-[#5FA8FF] transition-colors duration-300">{{ $title }}</h3>
        <p class="text-[#4A5568] dark:text-[#CBD5E1] text-sm leading-relaxed group-hover:text-[#0F2C59] dark:group-hover:text-[#F8FAFC] transition-colors duration-300">
            {{ $description }}
        </p>
    </div>
</div>

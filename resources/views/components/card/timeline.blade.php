@props(['title', 'subtitle', 'period', 'status' => null, 'gpa' => null])

<div class="relative pl-8 sm:pl-10 pb-8 group">
    <!-- Timeline Line -->
    <div class="absolute left-0 top-0 h-full w-0.5 bg-[#E2E8F0] dark:bg-[#334155]">
        <!-- Animated Draw Line -->
        <div class="absolute top-0 left-0 w-full bg-[#3B82F6] dark:bg-[#5FA8FF] h-0 group-hover:h-full transition-all duration-700 ease-out"></div>
    </div>
    
    <!-- Timeline Dot/Icon -->
    <div class="absolute left-[-11px] top-0 w-6 h-6 rounded-full bg-white dark:bg-[#1E293B] border-2 border-[#3B82F6] dark:border-[#5FA8FF] flex items-center justify-center transition-transform duration-300 group-hover:scale-125 group-hover:bg-[#3B82F6] dark:group-hover:bg-[#5FA8FF] z-10">
        <div class="w-2 h-2 rounded-full bg-[#3B82F6] dark:bg-[#5FA8FF] group-hover:bg-white dark:group-hover:bg-[#0F172A] transition-colors duration-300"></div>
    </div>

    <!-- Content -->
    <div class="bg-white dark:bg-[#1E293B] p-6 rounded-2xl shadow-sm border border-[#E2E8F0] dark:border-[#334155] group-hover:shadow-lg transition-all duration-300 group-hover:border-[#3B82F6] dark:group-hover:border-[#5FA8FF] relative top-[-16px]">
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start mb-2">
            <h3 class="text-xl font-bold text-[#0F2C59] dark:text-[#F8FAFC] group-hover:text-[#3B82F6] dark:group-hover:text-[#5FA8FF] transition-colors duration-300">{{ $title }}</h3>
            <span class="inline-block mt-2 sm:mt-0 text-sm font-semibold text-[#3B82F6] dark:text-[#5FA8FF] bg-[#3B82F6]/10 dark:bg-[#5FA8FF]/20 px-3 py-1 rounded-full whitespace-nowrap">{{ $period }}</span>
        </div>
        <p class="text-base font-medium text-[#4A5568] dark:text-[#CBD5E1] mb-4">{{ $subtitle }}</p>
        
        <div class="flex flex-wrap gap-4 mt-4 pt-4 border-t border-[#E2E8F0] dark:border-[#334155]">
            @if($status)
            <div class="flex items-center text-sm font-medium text-[#4A5568] dark:text-[#CBD5E1]">
                <svg class="w-4 h-4 mr-1.5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                {{ $status }}
            </div>
            @endif
            @if($gpa)
            <div class="flex items-center text-sm font-medium text-[#4A5568] dark:text-[#CBD5E1]">
                <svg class="w-4 h-4 mr-1.5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                GPA: {{ $gpa }}
            </div>
            @endif
        </div>
    </div>
</div>

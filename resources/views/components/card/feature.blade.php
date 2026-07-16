@props(['title', 'description' => null, 'skills' => null, 'icon' => null])

<div class="group h-full bg-[#FFFFFF] dark:bg-[#1E293B] rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 ease-in-out transform hover:-translate-y-1 border border-[#E2E8F0] dark:border-[#334155] hover:border-[#5FA8FF] dark:hover:border-[#5FA8FF] flex flex-col items-center text-center">
    @if($icon || $slot->isNotEmpty())
        <div class="w-12 h-12 rounded-full bg-[#F5F7FA] dark:bg-[#0F172A] flex items-center justify-center text-[#173B63] dark:text-[#F8FAFC] group-hover:bg-[#5FA8FF] group-hover:text-white dark:group-hover:text-[#0F172A] transition-colors duration-300 mb-4 shrink-0">
            {{ $icon ?? $slot }}
        </div>
    @endif
    
    <h3 class="text-lg font-bold text-[#173B63] dark:text-[#F8FAFC] mb-5 group-hover:text-[#5FA8FF] transition-colors duration-300">{{ $title }}</h3>
    
    @if($skills && is_array($skills))
        <div class="flex flex-wrap gap-2.5 justify-center mt-auto w-full">
            @foreach($skills as $skill)
                <span class="px-3.5 py-1.5 bg-[#F5F7FA] dark:bg-[#0F172A] text-[#1E293B] dark:text-[#CBD5E1] text-xs font-medium rounded-full border border-[#E2E8F0] dark:border-[#334155] group-hover:border-[#5FA8FF] dark:group-hover:border-[#5FA8FF] hover:bg-[#5FA8FF] hover:text-white dark:hover:bg-[#5FA8FF] dark:hover:text-[#0F172A] transition-colors duration-300 flex items-center justify-center">
                    {{ $skill }}
                </span>
            @endforeach
        </div>
    @elseif($description)
        <p class="text-[#4A5568] dark:text-[#CBD5E1] text-sm leading-relaxed group-hover:text-gray-600 dark:group-hover:text-[#F8FAFC] transition-colors duration-300 mt-auto">
            {{ $description }}
        </p>
    @endif
</div>

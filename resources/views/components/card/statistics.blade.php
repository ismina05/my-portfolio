@props(['target', 'suffix' => '', 'label', 'icon' => null])

<div class="bg-white dark:bg-[#1E293B] py-5 px-6 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 flex flex-col items-center justify-center text-center border border-[#E2E8F0] dark:border-[#334155] group">
    @if($icon ?? $slot->isNotEmpty())
        <div class="text-[#3B82F6] dark:text-[#5FA8FF] mb-4 transition-transform duration-300 group-hover:scale-110">
            {{ $icon ?? $slot }}
        </div>
    @endif
    
    <div x-data="{ 
            count: 0, 
            target: {{ $target }},
            isFloat: {{ strpos((string)$target, '.') !== false ? 'true' : 'false' }},
            format(val) {
                return this.isFloat ? Number(val).toFixed(2) : Math.floor(val);
            }
         }"
         x-intersect.once="
            let current = 0;
            const increment = Math.max(target / 40, this.isFloat ? 0.05 : 1);
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    count = target;
                    clearInterval(timer);
                } else {
                    count = current;
                }
            }, 30);
         "
         class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0F2C59] dark:text-[#F8FAFC] mb-2 flex items-center justify-center transition-colors duration-300">
        <span x-text="format(count)">0</span>
        <span>{{ $suffix }}</span>
    </div>
    <div class="text-sm md:text-base font-semibold text-[#4A5568] dark:text-[#CBD5E1] transition-colors duration-300">{{ $label }}</div>
</div>

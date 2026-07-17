<section id="expertise" class="pt-8 md:pt-10 lg:pt-12 pb-8 md:pb-10 lg:pb-12 bg-white dark:bg-[#0F172A] relative transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div data-aos="fade-up" class="mb-12 flex flex-col items-center text-center">
            <span class="block text-[#0F2C59] dark:text-[#5FA8FF] font-semibold text-sm uppercase tracking-wider mb-2">
                TOOLS & TECHNOLOGIES
            </span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0F2C59] dark:text-[#F8FAFC] mb-5">
                Teknologi & Tools
            </h2>
            <p class="text-[#4A5568] dark:text-[#CBD5E1] text-base leading-[1.6] max-w-[650px] mx-auto">
                {{ $expertise['description'] ?? '' }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 xl:gap-8 items-stretch w-full mx-auto">
            @foreach($expertise['items'] as $index => $item)
                <div data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}" class="h-full">
                    <x-card.feature 
                        title="{{ $item['title'] }}" 
                        :skills="$item['skills'] ?? null"
                        :description="$item['description'] ?? null"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">{!! $item['icon'] !!}</svg>
                    </x-card.feature>
                </div>
            @endforeach
        </div>
    </div>
</section>

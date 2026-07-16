<section id="statistics" class="relative pt-4 md:pt-6 lg:pt-8 pb-8 md:pb-10 bg-[#F8FAFC] dark:bg-[#111827] transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            @foreach($statistics as $index => $stat)
                <!-- Card {{ $index + 1 }} -->
                <div data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <x-card.statistics target="{{ $stat['target'] }}" suffix="{{ $stat['suffix'] }}" label="{{ $stat['label'] }}">
                        <x-slot name="icon">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                {!! $stat['icon'] !!}
                            </svg>
                        </x-slot>
                    </x-card.statistics>
                </div>
            @endforeach
        </div>
    </div>
</section>

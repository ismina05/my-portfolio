<section id="experience" class="py-16 md:py-20 lg:py-24 bg-white dark:bg-[#0F172A] relative transition-colors duration-300">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div data-aos="fade-up" class="mb-16">
            <x-section-title 
                title="Professional Journey" 
                subtitle="Experience" 
                alignment="center" 
            />
        </div>

        <div class="relative mt-8 ml-2 sm:ml-0">
            @foreach($experiences as $index => $experience)
                <div data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <x-card.experience 
                        :title="$experience['title']"
                        :company="$experience['company']"
                        :startDate="$experience['start_date'] ?? $experience['date'] ?? ''"
                        :endDate="$experience['end_date'] ?? null"
                        :responsibilities="$experience['responsibilities']"
                        :badge="$experience['badge'] ?? null"
                        :technologies="$experience['technologies'] ?? []"
                    />
                </div>
            @endforeach
        </div>

    </div>
</section>

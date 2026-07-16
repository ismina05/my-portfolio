<section id="activities" class="py-16 md:py-20 lg:py-24 bg-[#F8FAFC] dark:bg-[#0F172A] relative transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div data-aos="fade-up" class="mb-16">
            <x-section-title 
                title="Kegiatan Kemahasiswaan" 
                subtitle="Kegiatan & Kepanitiaan" 
                alignment="center" 
            />
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @foreach($activities as $index => $activity)
                <div data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <x-card.activity 
                        :title="$activity['title']"
                        :year="$activity['year']"
                        :description="$activity['description']"
                        :icon="$activity['icon']"
                    />
                </div>
            @endforeach
        </div>

    </div>
</section>

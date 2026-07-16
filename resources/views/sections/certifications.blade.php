<section id="certifications" class="py-16 md:py-20 lg:py-24 bg-[#F8FAFC] dark:bg-[#0F172A] relative transition-colors duration-300">
    <!-- Subtle Background Element -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-20 dark:opacity-10 transition-opacity duration-300">
        <div class="absolute -top-[20%] -right-[10%] w-[50%] h-[50%] rounded-full bg-gradient-to-br from-[#3B82F6]/30 to-transparent blur-[80px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div data-aos="fade-up" class="mb-12 md:mb-16">
            <x-section-title 
                title="Certifications & Achievements" 
                subtitle="🏅 Certifications" 
                alignment="center" 
            />
            <p class="text-center text-[#4A5568] dark:text-[#CBD5E1] text-sm md:text-base max-w-2xl mx-auto mt-4 transition-colors duration-300">
                Beberapa sertifikasi, hak kekayaan intelektual (HKI), dan pencapaian yang telah saya peroleh selama perkuliahan, proyek, maupun kegiatan profesional.
            </p>
        </div>

        <!-- Certification Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            @forelse($certifications as $index => $cert)
                <div data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <x-card.certification 
                        :category="$cert['category']"
                        :title="$cert['title']"
                        :issuer="$cert['issuer']"
                        :year="$cert['year']"
                        :description="$cert['description']"
                        :image="$cert['image']"
                        :credentialUrl="$cert['credential_url'] ?? null"
                    />
                </div>
            @empty
                <div class="col-span-1 md:col-span-2 text-center py-12">
                    <p class="text-[#4A5568] dark:text-[#CBD5E1]">Belum ada sertifikasi yang ditambahkan.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<section id="about" class="pt-8 md:pt-10 lg:pt-12 pb-4 md:pb-6 lg:pb-8 bg-[#F8FAFC] dark:bg-[#111827] overflow-hidden transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Layout 2 Kolom: Kiri 45%, Kanan 55% -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <!-- Left Column: Image (45% -> col-span-5) -->
            <div class="lg:col-span-5 relative w-full aspect-[4/5] md:aspect-[3/4] lg:aspect-[4/5]" data-aos="fade-right" data-aos-duration="1000">
                <!-- Abstract Background -->
                <div class="absolute inset-0 -left-6 -top-6 w-full h-full bg-[#0F2C59]/5 dark:bg-[#5FA8FF]/5 rounded-3xl transform -rotate-6 transition-colors duration-300"></div>
                <div class="absolute inset-0 -right-6 -bottom-6 w-full h-full bg-[#3B82F6]/5 dark:bg-[#5FA8FF]/5 rounded-3xl transform rotate-3 transition-colors duration-300"></div>
                
                <div class="relative w-full h-full rounded-3xl overflow-hidden shadow-2xl border-8 border-white dark:border-[#1E293B] group transition-colors duration-300">
                    <img src="{{ $profile['about_image'] ?? 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}" alt="Workspace" loading="lazy" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#0F2C59]/10 dark:bg-[#0F172A]/30 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>

                <!-- Floating Card 1: Internship -->
                <div class="absolute top-8 -right-4 md:-right-8 bg-white dark:bg-[#1E293B] p-3 md:p-4 rounded-xl shadow-xl border border-[#E2E8F0] dark:border-[#334155] z-20 flex items-center space-x-3 transition-colors duration-300" style="animation: float 5s ease-in-out infinite;">
                    <div class="w-10 h-10 rounded-full bg-green-50 dark:bg-green-500/20 flex items-center justify-center text-green-500 dark:text-green-400 flex-shrink-0 transition-colors duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <span class="block text-[10px] md:text-xs text-[#4A5568] dark:text-[#CBD5E1] font-semibold uppercase transition-colors duration-300">Status</span>
                        <span class="block text-xs md:text-sm font-bold text-[#0F2C59] dark:text-[#F8FAFC] transition-colors duration-300">Open to Internship</span>
                    </div>
                </div>

                <!-- Floating Card 2: Location -->
                <div class="absolute bottom-10 -left-4 md:-left-8 bg-white dark:bg-[#1E293B] p-3 md:p-4 rounded-xl shadow-xl border border-[#E2E8F0] dark:border-[#334155] z-20 flex items-center space-x-3 transition-colors duration-300" style="animation: float 4s ease-in-out 2s infinite;">
                    <div class="w-10 h-10 rounded-full bg-red-100 dark:bg-[#EF4444]/20 flex items-center justify-center text-red-500 dark:text-[#EF4444] flex-shrink-0 transition-colors duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <span class="block text-[10px] md:text-xs text-[#4A5568] dark:text-[#CBD5E1] font-semibold uppercase transition-colors duration-300">Location</span>
                        <span class="block text-xs md:text-sm font-bold text-[#0F2C59] dark:text-[#F8FAFC] transition-colors duration-300">{{ $profile['contact']['location'] ?? 'Based in Indonesia' }}</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Content (55% -> col-span-7) -->
            <div class="lg:col-span-7 flex flex-col justify-center" data-aos="fade-left" data-aos-duration="1000">
                
                <!-- Heading -->
                <div class="mb-6">
                    <span class="block text-[#0F2C59] dark:text-[#5FA8FF] font-semibold text-sm uppercase tracking-wider mb-2">
                        TENTANG SAYA
                    </span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0F2C59] dark:text-[#F8FAFC]">
                        Mahasiswa Teknologi Informasi
                    </h2>
                </div>

                <!-- Description -->
                <div class="mb-8 space-y-6">
                    @foreach($profile['about_text_paragraphs'] as $paragraph)
                        <p class="text-[#4A5568] dark:text-[#CBD5E1] text-base md:text-lg leading-[1.6] transition-colors duration-300">
                            {{ $paragraph }}
                        </p>
                    @endforeach
                </div>

                <!-- Personal Info List -->
                <div class="bg-white dark:bg-[#1E293B] p-4 sm:p-5 rounded-2xl shadow-sm border border-[#E2E8F0] dark:border-[#334155] mb-8 transition-colors duration-300">
                    <x-card.personal-info label="Nama" value="Ismi Nuraini Azizah" />
                    <x-card.personal-info label="Universitas" value="Universitas Negeri Yogyakarta" />
                    <x-card.personal-info label="Program Studi" value="S1 Teknologi Informasi" />
                    <x-card.personal-info label="Semester" value="7" />
                    <x-card.personal-info label="IPK" value="3.83 / 4.00" />
                    <x-card.personal-info label="Lokasi" value="Sleman, Yogyakarta" />
                </div>

                <!-- Strengths -->
                <div>
                    <h4 class="text-sm font-bold text-[#0F2C59] dark:text-[#F8FAFC] uppercase tracking-wider mb-4">Kekuatan Utama</h4>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach($profile['about_strengths'] as $strength)
                            <x-badge-strength class="w-full justify-start sm:justify-center">{{ $strength }}</x-badge-strength>
                        @endforeach
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex flex-wrap gap-4 mt-7">
                    <x-button.outline href="https://drive.google.com/file/d/1OdXVE6KUIUZN_WUFUpmNu-o2YD52lG2x/view?usp=sharing" target="_blank">
                        Unduh CV
                    </x-button.outline>
                    <x-button.outline href="#projects">
                        Lihat Proyek
                    </x-button.outline>
                </div>
            </div>
            
        </div>
    </div>
</section>

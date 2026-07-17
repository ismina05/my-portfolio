<section id="contact" class="py-16 md:py-20 lg:py-24 bg-white dark:bg-[#0F172A] relative transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div data-aos="fade-up" class="mb-16">
            <x-section-title 
                title="Mari Bekerja Sama" 
                subtitle="Kontak" 
                alignment="center" 
            />
            <p class="text-[#4A5568] dark:text-[#CBD5E1] text-lg max-w-2xl mx-auto text-center mt-4 transition-colors duration-300">
                Saya terbuka untuk kesempatan magang, kolaborasi, maupun diskusi seputar pengembangan web. Jangan ragu untuk menghubungi saya melalui email atau LinkedIn.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row gap-12 lg:gap-16">
            
            <!-- Left Side (40%): Contact Info Card -->
            <div class="w-full lg:w-[40%]" data-aos="fade-right" data-aos-delay="100">
                <x-card.contact />
            </div>

            <!-- Right Side (60%): Contact Form -->
            <div class="w-full lg:w-[60%]" data-aos="fade-left" data-aos-delay="200">
                <div class="bg-white dark:bg-[#1E293B] p-8 md:p-10 rounded-3xl shadow-lg shadow-blue-900/5 dark:shadow-none border border-[#E2E8F0] dark:border-[#334155] transition-colors duration-300">
                    <!-- Using Alpine to handle loading & success state interactively -->
                    <form 
                        x-data="{ 
                            loading: false, 
                            success: false, 
                            submit() { 
                                this.loading = true; 
                                setTimeout(() => { 
                                    this.loading = false; 
                                    this.success = true; 
                                    $el.reset();
                                    setTimeout(() => this.success = false, 5000);
                                }, 1500); 
                            } 
                        }" 
                        @submit.prevent="submit"
                        class="space-y-6"
                    >
                        @csrf
                        <!-- Success Message -->
                        <div x-show="success" x-transition.duration.500ms class="bg-green-50 dark:bg-green-500/20 border border-green-200 dark:border-green-500/30 text-green-500 dark:text-green-400 px-6 py-4 rounded-xl flex items-center mb-6" style="display: none;">
                            <svg class="w-6 h-6 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="font-medium">Pesan berhasil dikirim! Saya akan segera membalasnya.</span>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-bold text-[#0F2C59] dark:text-[#F8FAFC] mb-2 transition-colors duration-300">Nama</label>
                                <x-input type="text" id="name" name="name" placeholder="John Doe" required />
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-bold text-[#0F2C59] dark:text-[#F8FAFC] mb-2 transition-colors duration-300">Email</label>
                                <x-input type="email" id="email" name="email" placeholder="john@example.com" required />
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-bold text-[#0F2C59] dark:text-[#F8FAFC] mb-2 transition-colors duration-300">Pesan</label>
                            <x-textarea id="message" name="message" placeholder="Tulis pesan Anda di sini..." required></x-textarea>
                        </div>

                        <div>
                            <button type="submit" :disabled="loading" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-4 border border-transparent text-sm font-bold rounded-xl text-white dark:text-[#0F172A] bg-[#0F2C59] dark:bg-[#5FA8FF] hover:bg-[#3B82F6] dark:hover:bg-opacity-90 focus:outline-none focus:ring-4 focus:ring-[#3B82F6]/30 dark:focus:ring-[#5FA8FF]/30 transition-all duration-300 shadow-sm hover:shadow-lg transform hover:-translate-y-1 disabled:opacity-70 disabled:cursor-not-allowed disabled:transform-none mt-2 group">
                                <span x-show="!loading" class="flex items-center">
                                    Kirim Pesan
                                    <svg class="ml-2 -mr-1 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </span>
                                <span x-show="loading" class="flex items-center" style="display: none;">
                                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                                    Mengirim...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="bg-white dark:bg-[#1E293B] rounded-3xl p-8 shadow-sm border border-[#E2E8F0] dark:border-[#334155] hover:shadow-xl transition-all duration-300 h-full flex flex-col">
    <!-- Illustration Placeholder -->
    <div class="w-full h-48 bg-[#F8FAFC] dark:bg-[#0F172A] rounded-2xl mb-8 flex items-center justify-center overflow-hidden relative group transition-colors duration-300">
        <img src="{{ config('profile.contact.image', 'https://images.unsplash.com/photo-1596524430615-b46475ddff6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80') }}" alt="Contact Office" loading="lazy" class="w-full h-full object-cover opacity-80 group-hover:scale-110 transition-transform duration-700">
        <div class="absolute inset-0 bg-[#0F2C59]/10 dark:bg-[#1E293B]/30 group-hover:bg-transparent transition-colors duration-500"></div>
    </div>

    <h3 class="text-2xl font-bold text-[#0F2C59] dark:text-[#F8FAFC] mb-3 transition-colors duration-300">Mari Terhubung</h3>
    <p class="text-[#4A5568] dark:text-[#CBD5E1] text-sm leading-relaxed mb-8 transition-colors duration-300">
        Saya terbuka untuk pekerjaan lepas (freelance) dan kesempatan magang. Mari bangun sesuatu yang luar biasa bersama-sama.
    </p>

    <div class="space-y-6 mb-8 flex-grow">
        <div class="flex items-center group">
            <div class="w-12 h-12 rounded-xl bg-[#F8FAFC] dark:bg-[#0F172A] flex items-center justify-center text-[#3B82F6] dark:text-[#5FA8FF] mr-4 shadow-sm border border-[#E2E8F0] dark:border-[#334155] group-hover:bg-[#3B82F6] dark:group-hover:bg-[#5FA8FF] group-hover:text-white dark:group-hover:text-[#0F172A] transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <div>
                <span class="block text-xs font-bold text-[#4A5568] dark:text-[#CBD5E1] uppercase tracking-wider mb-1 transition-colors duration-300">Email</span>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ config('profile.contact.email') }}" target="_blank" class="text-base font-bold text-[#0F2C59] dark:text-[#F8FAFC] hover:text-[#3B82F6] dark:hover:text-[#5FA8FF] transition-colors duration-300">{{ config('profile.contact.email') }}</a>
            </div>
        </div>

        <div class="flex items-center group">
            <div class="w-12 h-12 rounded-xl bg-[#F8FAFC] dark:bg-[#0F172A] flex items-center justify-center text-[#3B82F6] dark:text-[#5FA8FF] mr-4 shadow-sm border border-[#E2E8F0] dark:border-[#334155] group-hover:bg-[#3B82F6] dark:group-hover:bg-[#5FA8FF] group-hover:text-white dark:group-hover:text-[#0F172A] transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            </div>
            <div>
                <span class="block text-xs font-bold text-[#4A5568] dark:text-[#CBD5E1] uppercase tracking-wider mb-1 transition-colors duration-300">Lokasi</span>
                <span class="text-base font-bold text-[#0F2C59] dark:text-[#F8FAFC] transition-colors duration-300">{{ config('profile.contact.location') }}</span>
            </div>
        </div>
    </div>

    <!-- Social Media -->
    <div class="pt-6 border-t border-[#E2E8F0] dark:border-[#334155] transition-colors duration-300">
        <span class="block text-xs font-bold text-[#0F2C59] dark:text-[#F8FAFC] uppercase tracking-wider mb-4 transition-colors duration-300">Ikuti Saya</span>
        <div class="flex gap-3">
            <x-button.social icon="github" href="{{ config('social.github') }}" />
            <x-button.social icon="linkedin" href="{{ config('social.linkedin') }}" />
            <x-button.social icon="twitter" href="{{ config('social.twitter') }}" />
        </div>
    </div>
</div>

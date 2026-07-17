<footer class="bg-[#0F2C59] dark:bg-[#0F172A] text-white pt-16 md:pt-20 pb-10 border-t border-[#1a3a6c] dark:border-[#1E293B] relative overflow-hidden mt-10 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Top Footer Grid: 3 Columns -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 mb-12 lg:mb-16">
            
            <!-- Column 1: Brand & Profile -->
            <div class="lg:col-span-5 space-y-6">
                <a href="#" class="inline-flex items-center group">
                    <span class="text-2xl font-bold text-white tracking-tight">
                        <span class="text-[#3B82F6] dark:text-[#5FA8FF]">&lt;</span> /<span class="text-[#3B82F6] dark:text-[#5FA8FF]">&gt;</span>
                    </span>
                    <span class="ml-2 text-xl font-bold text-white tracking-wide group-hover:text-[#3B82F6] dark:group-hover:text-[#5FA8FF] transition-colors">{{ config('profile.name') }}</span>
                </a>
                
                <div>
                    <h3 class="text-lg font-semibold text-white mb-1">Frontend Web Developer</h3>
                    <p class="text-[#8A9CBB] text-sm leading-relaxed max-w-sm">
                        Membangun aplikasi web yang modern, responsif, dan mudah digunakan.
                    </p>
                </div>

                <div class="flex gap-4">
                    <!-- GitHub Icon -->
                    <a href="{{ config('social.github') }}" target="_blank" rel="noopener noreferrer" aria-label="GitHub" class="w-9 h-9 rounded-full bg-[#1a3a6c] dark:bg-[#1E293B] flex items-center justify-center text-[#8A9CBB] hover:bg-[#3B82F6] dark:hover:bg-[#5FA8FF] hover:text-white dark:hover:text-[#0F172A] transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-1">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                    </a>
                    <!-- LinkedIn Icon -->
                    <a href="{{ config('social.linkedin') }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="w-9 h-9 rounded-full bg-[#1a3a6c] dark:bg-[#1E293B] flex items-center justify-center text-[#8A9CBB] hover:bg-[#3B82F6] dark:hover:bg-[#5FA8FF] hover:text-white dark:hover:text-[#0F172A] transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-1">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path></svg>
                    </a>
                    <!-- Email Icon -->
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ config('social.email') }}" target="_blank" rel="noopener noreferrer" aria-label="Email" class="w-9 h-9 rounded-full bg-[#1a3a6c] dark:bg-[#1E293B] flex items-center justify-center text-[#8A9CBB] hover:bg-[#3B82F6] dark:hover:bg-[#5FA8FF] hover:text-white dark:hover:text-[#0F172A] transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Column 2: Navigasi -->
            <div class="lg:col-span-4">
                <h4 class="text-white font-bold text-lg mb-6">Navigasi</h4>
                <ul class="grid grid-cols-2 gap-y-3 gap-x-4">
                    <x-footer.link href="#home">Beranda</x-footer.link>
                    <x-footer.link href="#expertise">Keahlian</x-footer.link>
                    <x-footer.link href="#about">Tentang</x-footer.link>
                    <x-footer.link href="#education">Pendidikan</x-footer.link>
                    <x-footer.link href="#projects">Proyek</x-footer.link>
                    <x-footer.link href="#experience">Pengalaman</x-footer.link>
                    <x-footer.link href="#activities">Aktivitas</x-footer.link>
                    <x-footer.link href="#contact">Kontak</x-footer.link>
                </ul>
            </div>

            <!-- Column 3: Tautan -->
            <div class="lg:col-span-3">
                <h4 class="text-white font-bold text-lg mb-6">Tautan</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ config('profile.cv_url') }}" target="_blank" class="inline-flex items-center text-[#8A9CBB] hover:text-[#3B82F6] dark:hover:text-[#5FA8FF] transition-colors group text-sm font-medium">
                            <svg class="w-4 h-4 mr-2.5 group-hover:text-[#3B82F6] dark:group-hover:text-[#5FA8FF] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            Unduh CV
                        </a>
                    </li>
                    <li>
                        <a href="{{ config('social.github') }}" target="_blank" class="inline-flex items-center text-[#8A9CBB] hover:text-[#3B82F6] dark:hover:text-[#5FA8FF] transition-colors group text-sm font-medium">
                            <svg class="w-4 h-4 mr-2.5 group-hover:text-[#3B82F6] dark:group-hover:text-[#5FA8FF] transition-colors" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                            GitHub
                        </a>
                    </li>
                    <li>
                        <a href="{{ config('social.linkedin') }}" target="_blank" class="inline-flex items-center text-[#8A9CBB] hover:text-[#3B82F6] dark:hover:text-[#5FA8FF] transition-colors group text-sm font-medium">
                            <svg class="w-4 h-4 mr-2.5 group-hover:text-[#3B82F6] dark:group-hover:text-[#5FA8FF] transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            LinkedIn
                        </a>
                    </li>
                    <li>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ config('social.email') }}" target="_blank" class="inline-flex items-center text-[#8A9CBB] hover:text-[#3B82F6] dark:hover:text-[#5FA8FF] transition-colors group text-sm font-medium">
                            <svg class="w-4 h-4 mr-2.5 group-hover:text-[#3B82F6] dark:group-hover:text-[#5FA8FF] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            Email
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>

        <!-- Bottom Footer -->
        <div class="pt-8 border-t border-[#1a3a6c] dark:border-[#1E293B] flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-[#8A9CBB] text-sm text-center md:text-left font-medium">
                &copy; {{ date('Y') }} {{ config('profile.name') }}. All Rights Reserved.
            </p>
            <p class="text-[#8A9CBB] text-sm text-center md:text-right font-medium">
                Built with Laravel & Tailwind CSS
            </p>
        </div>

    </div>
</footer>

<!-- Back To Top Component -->
<x-button.back-to-top />

<footer class="bg-[#0F2C59] dark:bg-[#0F172A] text-white pt-16 md:pt-20 pb-10 border-t border-[#1a3a6c] dark:border-[#1E293B] relative overflow-hidden mt-10 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Top Footer Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12 mb-16">
            
            <!-- Column 1: Brand -->
            <div class="space-y-6">
                <a href="#" class="inline-flex items-center group">
                    <span class="text-2xl font-bold text-white tracking-tight">
                        <span class="text-[#3B82F6] dark:text-[#5FA8FF]">&lt;</span> /<span class="text-[#3B82F6] dark:text-[#5FA8FF]">&gt;</span>
                    </span>
                    <span class="ml-2 text-xl font-bold text-white tracking-wide group-hover:text-[#3B82F6] dark:group-hover:text-[#5FA8FF] transition-colors">{{ config('profile.footer_brand', 'John Doe') }}</span>
                </a>
                <p class="text-[#8A9CBB] text-sm leading-relaxed">
                    {{ config('profile.footer_description', 'Lorem ipsum dummy text. I build pixel-perfect, engaging, and accessible digital experiences.') }}
                </p>
                <div class="flex gap-4">
                    <a href="{{ config('social.github', '#') }}" target="_blank" rel="noopener noreferrer" aria-label="GitHub" class="w-9 h-9 rounded-full bg-[#1a3a6c] dark:bg-[#1E293B] flex items-center justify-center text-[#8A9CBB] hover:bg-[#3B82F6] dark:hover:bg-[#5FA8FF] hover:text-white dark:hover:text-[#0F172A] transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-1">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                    </a>
                    <a href="{{ config('social.linkedin', '#') }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="w-9 h-9 rounded-full bg-[#1a3a6c] dark:bg-[#1E293B] flex items-center justify-center text-[#8A9CBB] hover:bg-[#3B82F6] dark:hover:bg-[#5FA8FF] hover:text-white dark:hover:text-[#0F172A] transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-1">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h4 class="text-white font-bold text-lg mb-6">Tautan Cepat</h4>
                <ul class="space-y-3">
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

            <!-- Column 3: Resources -->
            <div>
                <h4 class="text-white font-bold text-lg mb-6">Sumber Daya</h4>
                <ul class="space-y-3">
                    <x-footer.link href="#">Resume</x-footer.link>
                    <x-footer.link href="{{ config('social.github') }}">GitHub</x-footer.link>
                    <x-footer.link href="{{ config('social.linkedin') }}">LinkedIn</x-footer.link>
                    <x-footer.link href="https://mail.google.com/mail/?view=cm&fs=1&to={{ config('social.email') }}" target="_blank">Email</x-footer.link>
                </ul>
            </div>

            <!-- Column 4: Newsletter -->
            <div>
                <h4 class="text-white font-bold text-lg mb-6">Nawala (Newsletter)</h4>
                <p class="text-[#8A9CBB] text-sm leading-relaxed mb-4">
                    Berlangganan nawala saya untuk menerima pembaruan tentang proyek dan artikel terbaru.
                </p>
                <form class="flex flex-col gap-3 group">
                    <input type="email" aria-label="Alamat Email" placeholder="Alamat email Anda" class="w-full bg-[#1a3a6c] dark:bg-[#1E293B] border border-transparent focus:border-[#3B82F6] dark:focus:border-[#5FA8FF] focus:ring-2 focus:ring-[#3B82F6]/30 dark:focus:ring-[#5FA8FF]/30 rounded-xl px-4 py-3.5 text-sm text-white placeholder-[#8A9CBB] transition-all outline-none" required>
                    <button type="submit" class="w-full bg-[#3B82F6] dark:bg-[#5FA8FF] hover:bg-white hover:text-[#0F2C59] dark:text-[#0F172A] text-white font-bold rounded-xl px-4 py-3.5 text-sm transition-all duration-300 shadow-sm hover:shadow-lg transform hover:-translate-y-1">
                        Berlangganan
                    </button>
                </form>
            </div>

        </div>

        <!-- Bottom Footer -->
        <div class="pt-8 border-t border-[#1a3a6c] flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-[#8A9CBB] text-sm text-center md:text-left font-medium">
                &copy; {{ date('Y') }} {{ config('profile.name') }}. Hak Cipta Dilindungi.
            </p>
            <div class="flex items-center gap-1.5 text-sm text-[#8A9CBB] font-medium">
                Dibuat dengan <svg class="w-4 h-4 text-red-500 animate-pulse" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path></svg> oleh <span class="text-white ml-0.5">{{ config('profile.name') }}</span>
            </div>
        </div>

    </div>
</footer>

<!-- Back To Top Component -->
<x-button.back-to-top />

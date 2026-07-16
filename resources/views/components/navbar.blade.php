<nav x-data="{ scrolled: false, mobileMenuOpen: false, activeSection: 'home' }"
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     x-init="
        const sections = document.querySelectorAll('section[id]');
        window.addEventListener('scroll', () => {
            let current = 'home';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (window.scrollY >= sectionTop - 100) {
                    current = section.getAttribute('id');
                }
            });
            activeSection = current;
        });
     "
     :class="{ 'bg-white/95 dark:bg-[#0F172A]/95 shadow-sm border-b border-[#E2E8F0] dark:border-[#334155] py-4 backdrop-blur-sm': scrolled, 'bg-transparent py-6': !scrolled }"
     class="fixed w-full top-0 left-0 z-50 transition-all duration-300 ease-in-out">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center gap-4">
            
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="#home" class="text-2xl font-bold text-[#0F2C59] dark:text-[#F8FAFC] flex items-center gap-3 transition-colors duration-300 whitespace-nowrap">
                    <x-logo />
                    <span class="hidden sm:inline">{{ config('profile.name') }}</span>
                    <span class="sm:hidden">{{ explode(' ', config('profile.name'))[0] }}</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden xl:flex xl:space-x-5 2xl:space-x-8 items-center">
                @php
                    $navItems = [
                        'home' => 'Beranda',
                        'expertise' => 'Keahlian',
                        'about' => 'Tentang',
                        'education' => 'Pendidikan',
                        'projects' => 'Proyek',
                        'experience' => 'Pengalaman',
                        'activities' => 'Aktivitas',
                        'contact' => 'Kontak'
                    ];
                @endphp
                
                @foreach($navItems as $id => $label)
                    <x-navbar-link href="#{{ $id }}" section="{{ $id }}">
                        {{ $label }}
                    </x-navbar-link>
                @endforeach
            </div>

            <!-- Actions -->
            <div class="hidden xl:flex items-center gap-4 2xl:gap-6">
                <x-theme-toggle />
                <x-button.primary href="https://drive.google.com/file/d/18XDfkb3l818Z1giUWIz3g4vGhB-Ds2jv/view?usp=drive_link" target="_blank" class="whitespace-nowrap">
                    Unduh CV
                </x-button.primary>
            </div>

            <!-- Mobile Menu Button -->
            <div class="xl:hidden flex items-center gap-4">
                <!-- Theme toggle can also be shown here on mobile/tablet for easier access -->
                <div class="hidden sm:block">
                    <x-theme-toggle />
                </div>
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        aria-label="Toggle navigation menu"
                        class="text-[#0F2C59] dark:text-[#F8FAFC] focus:outline-none transition-colors duration-300">
                    <svg x-show="!mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-x-full"
         x-transition:enter-end="opacity-100 translate-x-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-x-0"
         x-transition:leave-end="opacity-0 translate-x-full"
         class="fixed inset-0 z-40 bg-white dark:bg-[#0F172A] xl:hidden flex flex-col pt-20 pb-6 px-4 overflow-y-auto transition-colors duration-300"
         style="display: none;">
         
         <button @click="mobileMenuOpen = false" 
                 aria-label="Close navigation menu"
                 class="absolute top-6 right-6 text-[#0F2C59] dark:text-[#F8FAFC] focus:outline-none hover:text-[#3B82F6] dark:hover:text-[#5FA8FF] transition-colors">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
         </button>

         <div class="flex flex-col space-y-6 items-center text-xl mt-10">
             @foreach($navItems as $id => $label)
                 <a href="#{{ $id }}" 
                    @click="mobileMenuOpen = false"
                    :class="activeSection === '{{ $id }}' ? 'text-[#0F2C59] dark:text-[#5FA8FF] font-bold' : 'text-[#4A5568] dark:text-[#CBD5E1] hover:text-[#0F2C59] dark:hover:text-[#F8FAFC]'"
                    class="transition duration-300">
                     {{ $label }}
                 </a>
             @endforeach
             
             <div class="pt-6 w-full flex flex-col items-center justify-center border-t border-gray-100 dark:border-[#334155] mt-6 space-y-6 transition-colors duration-300">
                 <x-theme-toggle />
                 <x-button.primary href="https://drive.google.com/file/d/18XDfkb3l818Z1giUWIz3g4vGhB-Ds2jv/view?usp=drive_link" target="_blank" class="w-full max-w-xs text-center">
                     Unduh CV
                 </x-button.primary>
             </div>
         </div>
    </div>
</nav>

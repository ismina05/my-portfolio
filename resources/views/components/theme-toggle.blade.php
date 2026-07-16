<button 
    x-data="{ 
        theme: localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'),
        toggleTheme() {
            this.theme = this.theme === 'dark' ? 'light' : 'dark';
            localStorage.setItem('theme', this.theme);
            if (this.theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    }"
    @click="toggleTheme()"
    aria-label="Toggle Theme"
    class="w-12 h-12 rounded-full flex items-center justify-center bg-[#F8FAFC] dark:bg-[#1E293B] text-[#0F2C59] dark:text-[#F8FAFC] border border-[#E2E8F0] dark:border-[#334155] hover:border-[#3B82F6] dark:hover:border-[#5FA8FF] shadow-sm hover:shadow-md transition-all duration-200 transform hover:scale-105"
>
    <!-- Sun icon for dark mode (shown when theme is dark) -->
    <svg x-show="theme === 'dark'" style="display: none;" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
    <!-- Moon icon for light mode (shown when theme is light) -->
    <svg x-show="theme === 'light'" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
</button>

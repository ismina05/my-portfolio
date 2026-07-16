<button 
    x-data="{ show: false }" 
    @scroll.window="show = (window.pageYOffset > 500) ? true : false"
    @click="window.scrollTo({top: 0, behavior: 'smooth'})"
    :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10 pointer-events-none'"
    class="fixed bottom-8 right-8 z-50 w-12 h-12 bg-[#3B82F6] dark:bg-[#5FA8FF] hover:bg-white dark:hover:bg-[#0F172A] text-white dark:text-[#0F172A] hover:text-[#0F2C59] dark:hover:text-[#5FA8FF] rounded-xl flex items-center justify-center shadow-lg transition-all duration-500 hover:-translate-y-2 border border-transparent hover:border-[#3B82F6] dark:hover:border-[#5FA8FF] group"
    aria-label="Back to top"
>
    <svg class="w-6 h-6 group-hover:-translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
</button>

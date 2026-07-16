<span {{ $attributes->merge(['class' => 'group inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-[#F8FAFC] dark:bg-[#1E293B] text-[#4A5568] dark:text-[#CBD5E1] border border-[#E2E8F0] dark:border-[#334155] shadow-sm hover:bg-[#0F2C59] dark:hover:bg-[#5FA8FF] hover:text-white dark:hover:text-[#0F172A] transition-colors duration-300']) }}>
    <svg class="w-4 h-4 mr-2 text-[#3B82F6] dark:text-[#5FA8FF] group-hover:text-white dark:group-hover:text-[#0F172A] transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    {{ $slot }}
</span>

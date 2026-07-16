@props(['label', 'value'])

<div class="flex flex-col sm:flex-row sm:items-center border-b border-[#E2E8F0] dark:border-[#334155] py-2 last:border-0 hover:bg-[#F8FAFC] dark:hover:bg-[#0F172A] transition-colors duration-300 px-2 rounded-lg">
    <span class="sm:w-1/3 text-sm font-semibold text-[#4A5568] dark:text-[#CBD5E1] uppercase tracking-wider mb-1 sm:mb-0">{{ $label }}</span>
    <span class="sm:w-2/3 text-base font-medium text-[#0F2C59] dark:text-[#F8FAFC]">{{ $value }}</span>
</div>

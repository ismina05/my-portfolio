@props(['title', 'company', 'startDate', 'endDate', 'responsibilities' => [], 'badge' => null, 'technologies' => []])

<div class="relative pl-10 md:pl-12 pb-12 group last:pb-0">
    <!-- Timeline Line -->
    <div class="absolute left-0 top-0 h-full w-0.5 bg-[#E2E8F0] dark:bg-[#334155] group-last:h-full transition-colors duration-300">
        <!-- Animated Fill -->
        <div class="absolute top-0 left-0 w-full bg-[#3B82F6] dark:bg-[#5FA8FF] h-0 group-hover:h-full transition-all duration-1000 ease-out"></div>
    </div>
    
    <!-- Timeline Dot -->
    <div class="absolute left-[-15px] top-0 w-8 h-8 rounded-full bg-white dark:bg-[#1E293B] border-[3px] border-[#3B82F6] dark:border-[#5FA8FF] flex items-center justify-center transition-transform duration-300 group-hover:scale-110 shadow-sm z-10">
        <div class="w-2.5 h-2.5 rounded-full bg-[#3B82F6] dark:bg-[#5FA8FF] group-hover:bg-[#0F2C59] dark:group-hover:bg-[#0F172A] transition-colors duration-300"></div>
    </div>

    <!-- Experience Card -->
    <div class="bg-white dark:bg-[#1E293B] p-6 md:p-8 rounded-3xl shadow-sm border border-[#E2E8F0] dark:border-[#334155] group-hover:shadow-xl transition-all duration-300 relative -top-2">
        <div class="flex flex-col md:flex-row md:items-start md:justify-between mb-6">
            <div class="flex items-center mb-4 md:mb-0">
                <!-- Company Logo Placeholder -->
                <div class="w-12 h-12 rounded-xl bg-[#F8FAFC] dark:bg-[#0F172A] flex items-center justify-center text-[#4A5568] dark:text-[#CBD5E1] font-bold text-xl mr-4 border border-[#E2E8F0] dark:border-[#334155] flex-shrink-0 group-hover:border-[#3B82F6] dark:group-hover:border-[#5FA8FF] group-hover:text-[#3B82F6] dark:group-hover:text-[#5FA8FF] transition-colors duration-300">
                    {{ substr($company, 0, 1) }}
                </div>
                <div>
                    <h3 class="text-xl font-bold text-[#0F2C59] dark:text-[#F8FAFC] group-hover:text-[#3B82F6] dark:group-hover:text-[#5FA8FF] transition-colors duration-300">{{ $title }}</h3>
                    <p class="text-base font-semibold text-[#4A5568] dark:text-[#CBD5E1] transition-colors duration-300">{{ $company }}</p>
                    @if($badge)
                        <span class="inline-block mt-2 px-3 py-1 bg-blue-50 dark:bg-[#3B82F6]/10 text-[#3B82F6] dark:text-[#5FA8FF] text-xs font-bold rounded-full border border-blue-100 dark:border-[#3B82F6]/20 transition-colors duration-300">{{ $badge }}</span>
                    @endif
                </div>
            </div>
            
            <!-- Date Badge -->
            <div class="inline-flex items-center px-4 py-2.5 rounded-full bg-[#F8FAFC] dark:bg-[#0F172A] border border-[#E2E8F0] dark:border-[#334155] text-sm font-semibold text-[#4A5568] dark:text-[#CBD5E1] flex-shrink-0 transition-colors duration-300">
                <svg class="w-4 h-4 mr-2 text-[#3B82F6] dark:text-[#5FA8FF] transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                {{ $startDate }}@if(!empty($endDate)) - {{ $endDate }}@endif
            </div>
        </div>
        
        <div class="mt-4 pt-4 border-t border-[#F8FAFC] dark:border-[#334155] transition-colors duration-300">
            <h4 class="text-sm font-bold text-[#0F2C59] dark:text-[#F8FAFC] uppercase tracking-wider mb-4 transition-colors duration-300">Responsibilities</h4>
            <ul class="space-y-3">
                @foreach($responsibilities as $item)
                <li class="flex items-start">
                    <svg class="w-5 h-5 mr-3 text-[#3B82F6] dark:text-[#5FA8FF] flex-shrink-0 mt-0.5 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span class="text-[#4A5568] dark:text-[#CBD5E1] leading-relaxed transition-colors duration-300">{{ $item }}</span>
                </li>
                @endforeach
            </ul>
        </div>

        @if(!empty($technologies))
        <div class="mt-4 pt-4 border-t border-[#F8FAFC] dark:border-[#334155] transition-colors duration-300">
            <div class="flex flex-wrap gap-2">
                @foreach($technologies as $tech)
                    <span class="px-3 py-1 text-xs font-medium bg-[#F1F5F9] dark:bg-[#0F172A] text-[#4A5568] dark:text-[#CBD5E1] rounded-full border border-[#E2E8F0] dark:border-[#334155] transition-colors duration-300">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>

@props(['category', 'title', 'issuer', 'year', 'description', 'image', 'credentialUrl' => null])

<div x-data="{ open: false }" class="h-full">
    <!-- Card -->
    <div class="h-full bg-white dark:bg-[#1E293B] rounded-[20px] p-6 shadow-sm border border-[#E2E8F0] dark:border-[#334155] hover:-translate-y-1.5 hover:shadow-xl transition-all duration-300 flex flex-col group relative overflow-hidden">
        
        <!-- Header: Badge & Date -->
        <div class="flex justify-between items-start mb-5">
            <span class="inline-block px-3 py-1 bg-blue-50 dark:bg-[#3B82F6]/10 text-[#3B82F6] dark:text-[#5FA8FF] text-xs font-bold rounded-full border border-blue-100 dark:border-[#3B82F6]/20 transition-colors duration-300">
                {{ $category }}
            </span>
            <span class="text-sm font-semibold text-[#4A5568] dark:text-[#CBD5E1] transition-colors duration-300 bg-[#F8FAFC] dark:bg-[#0F172A] px-3 py-1 rounded-full border border-[#E2E8F0] dark:border-[#334155]">
                {{ $year }}
            </span>
        </div>

        <!-- Title & Issuer -->
        <h3 class="text-lg md:text-xl font-bold text-[#0F2C59] dark:text-[#F8FAFC] group-hover:text-[#3B82F6] dark:group-hover:text-[#5FA8FF] transition-colors duration-300 mb-2 leading-tight">
            {{ $title }}
        </h3>
        <p class="text-sm font-medium text-[#3B82F6] dark:text-[#5FA8FF] mb-4 transition-colors duration-300">
            {{ $issuer }}
        </p>

        <!-- Description -->
        <p class="text-[#4A5568] dark:text-[#CBD5E1] text-sm leading-relaxed mb-6 flex-grow transition-colors duration-300">
            {{ $description }}
        </p>

        <!-- Button -->
        <div class="mt-auto">
            <button @click="open = true" class="w-full sm:w-auto inline-flex items-center justify-center px-5 py-2.5 bg-[#F8FAFC] dark:bg-[#0F172A] hover:bg-[#3B82F6] dark:hover:bg-[#3B82F6] text-[#4A5568] dark:text-[#CBD5E1] hover:text-white font-semibold text-sm rounded-xl border border-[#E2E8F0] dark:border-[#334155] hover:border-transparent transition-all duration-300 group/btn">
                <svg class="w-4 h-4 mr-2 text-[#3B82F6] dark:text-[#5FA8FF] group-hover/btn:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                Lihat Sertifikat
            </button>
        </div>
    </div>

    <!-- Modal (Alpine.js Teleport / Fixed) -->
    <div x-show="open" 
         style="display: none;"
         class="fixed inset-0 z-[100] overflow-y-auto" 
         aria-labelledby="modal-title" 
         role="dialog" 
         aria-modal="true">
        
        <!-- Backdrop -->
        <div x-show="open"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100 backdrop-blur-sm"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 backdrop-blur-sm"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-gray-900/60 transition-opacity"
             @click="open = false"></div>

        <!-- Modal Panel -->
        <div class="flex min-h-screen items-center justify-center p-4 text-center sm:p-0">
            <div x-show="open"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 class="relative transform overflow-hidden rounded-2xl bg-white dark:bg-[#1E293B] text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-4xl border border-[#E2E8F0] dark:border-[#334155]"
                 @click.stop>
                
                <!-- Close Button -->
                <button @click="open = false" class="absolute top-4 right-4 z-10 w-10 h-10 bg-black/50 hover:bg-black/70 text-white rounded-full flex items-center justify-center transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>

                <!-- Image -->
                <div class="w-full bg-[#F8FAFC] dark:bg-[#0F172A]">
                    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-auto object-contain max-h-[80vh]">
                </div>
                
                <!-- Footer Info -->
                <div class="px-6 py-4 bg-white dark:bg-[#1E293B] border-t border-[#E2E8F0] dark:border-[#334155] flex flex-col sm:flex-row justify-between items-center">
                    <div>
                        <h4 class="text-lg font-bold text-[#0F2C59] dark:text-[#F8FAFC]">{{ $title }}</h4>
                        <p class="text-sm text-[#4A5568] dark:text-[#CBD5E1]">{{ $issuer }} - {{ $year }}</p>
                    </div>
                    @if($credentialUrl && $credentialUrl !== '#')
                        <a href="{{ $credentialUrl }}" target="_blank" class="mt-3 sm:mt-0 px-4 py-2 bg-[#3B82F6] hover:bg-blue-600 text-white text-sm font-semibold rounded-lg transition-colors flex items-center">
                            Verifikasi Kredensial
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

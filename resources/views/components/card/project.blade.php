@props(['image', 'category', 'title', 'description', 'technologies' => [], 'status' => 'Completed', 'githubUrl' => '#', 'demoUrl' => '#', 'isPrivate' => false])

<div class="bg-white dark:bg-[#1E293B] rounded-3xl overflow-hidden shadow-sm border border-[#E2E8F0] dark:border-[#334155] hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group flex flex-col h-full">
    <!-- Image Container with Zoom effect -->
    <div class="relative w-full h-48 md:h-56 overflow-hidden">
        <img src="{{ $image }}" alt="{{ $title }}" loading="lazy" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
        <!-- Status Badge -->
        <div class="absolute top-4 right-4 bg-white/95 dark:bg-[#1E293B]/95 backdrop-blur-sm px-3 py-1.5 rounded-full text-xs font-bold text-[#0F2C59] dark:text-[#F8FAFC] shadow-sm transition-colors duration-300">
            {{ $status }}
        </div>
        <!-- Category Overlay -->
        <div class="absolute bottom-4 left-4">
            <span class="bg-[#3B82F6] dark:bg-[#5FA8FF] text-white dark:text-[#0F172A] px-3 py-1.5 rounded-full text-xs font-semibold shadow-sm transition-colors duration-300">
                {{ $category }}
            </span>
        </div>
    </div>

    <!-- Content -->
    <div class="p-6 md:p-8 flex flex-col flex-grow">
        <h3 class="text-xl font-bold text-[#0F2C59] dark:text-[#F8FAFC] mb-3 group-hover:text-[#3B82F6] dark:group-hover:text-[#5FA8FF] transition-colors duration-300">{{ $title }}</h3>
        <p class="text-[#4A5568] dark:text-[#CBD5E1] text-sm leading-relaxed mb-6 flex-grow transition-colors duration-300">
            {{ $description }}
        </p>

        <!-- Technologies -->
        <div class="mb-6">
            <div class="flex flex-wrap gap-2">
                @foreach($technologies as $tech)
                    <span class="inline-flex items-center px-2.5 py-1 rounded-md text-[11px] font-semibold tracking-wide bg-[#F8FAFC] dark:bg-[#0F172A] text-[#4A5568] dark:text-[#CBD5E1] border border-[#E2E8F0] dark:border-[#334155] transition-colors duration-300">
                        {{ $tech }}
                    </span>
                @endforeach
            </div>
        </div>

        @if($isPrivate)
            <!-- Private Notice -->
            <div class="mt-auto p-3 bg-amber-50 dark:bg-amber-900/10 border border-amber-200 dark:border-amber-700/30 rounded-xl">
                <p class="text-[12px] text-amber-800 dark:text-amber-200/90 leading-relaxed">
                    <span class="font-bold flex items-center gap-1.5 mb-1 text-[13px]">
                        🔒 Internal Company Project
                    </span>
                    Project ini dikembangkan selama praktik industri dan tidak dapat dipublikasikan karena merupakan sistem internal perusahaan.
                </p>
            </div>
        @else
            <!-- Buttons -->
            <div class="flex gap-3 mt-auto">
                <a href="{{ $demoUrl }}" target="_blank" rel="noopener noreferrer" class="flex-1 inline-flex justify-center items-center px-4 py-2.5 bg-[#0F2C59] dark:bg-[#5FA8FF] hover:bg-[#3B82F6] dark:hover:bg-opacity-90 text-white dark:text-[#0F172A] text-sm font-semibold rounded-xl transition-all duration-300 hover:shadow-md transform hover:-translate-y-0.5">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    Live Demo
                </a>
                <a href="{{ $githubUrl }}" target="_blank" rel="noopener noreferrer" class="flex-1 inline-flex justify-center items-center px-4 py-2.5 bg-white dark:bg-[#0F172A] hover:bg-[#F8FAFC] dark:hover:bg-[#111827] text-[#0F2C59] dark:text-[#F8FAFC] text-sm font-semibold border border-[#E2E8F0] dark:border-[#334155] hover:border-[#0F2C59] dark:hover:border-[#5FA8FF] rounded-xl transition-all duration-300 hover:shadow-sm transform hover:-translate-y-0.5">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                    GitHub
                </a>
            </div>
        @endif
    </div>
</div>

<section id="home" class="relative min-h-[70vh] lg:min-h-[75vh] flex items-center justify-center pt-28 md:pt-32 pb-4 md:pb-6 overflow-hidden bg-white dark:bg-[#0F172A] transition-colors duration-300">
    <!-- Clean Background -->
    <div class="absolute inset-0 z-0 bg-[#F8FAFC] dark:bg-[#0F172A] transition-colors duration-300"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">
            
            <!-- Left Column: Content -->
            <div data-aos="fade-up" data-aos-duration="1000" class="flex flex-col items-start space-y-6">
                <!-- Badge -->
                <x-badge data-aos="fade-right" data-aos-delay="200" class="bg-blue-50 dark:bg-[#5FA8FF]/10 text-[#3B82F6] dark:text-[#5FA8FF] border-none px-4 py-2 shadow-sm transition-colors duration-300">
                    {{ $profile['greeting'] ?? '👋 Hello, I\'m' }}
                </x-badge>

                <!-- Heading & Titles -->
                <div class="space-y-2">
                    <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-[#173B63] dark:text-[#F8FAFC] tracking-tight transition-colors duration-300">
                        {{ $profile['name'] }}
                    </h1>
                    <h2 class="text-xl md:text-2xl font-semibold text-[#4A5568] dark:text-[#CBD5E1] transition-colors duration-300">
                        {{ $profile['titles'][0] ?? '' }}
                    </h2>
                    <h3 class="text-base md:text-lg font-medium text-[#3B82F6] dark:text-[#5FA8FF] transition-colors duration-300">
                        {{ $profile['titles'][1] ?? '' }}
                    </h3>
                </div>

                <!-- Description -->
                <p class="text-[#4A5568] dark:text-[#CBD5E1] text-sm md:text-base leading-relaxed max-w-xl transition-colors duration-300" data-aos="fade-up" data-aos-delay="400">
                    {{ $profile['hero_description'] }}
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4" data-aos="fade-up" data-aos-delay="600">
                    <x-button.outline href="https://drive.google.com/file/d/1OdXVE6KUIUZN_WUFUpmNu-o2YD52lG2x/view?usp=sharing" target="_blank">
                        Unduh CV
                    </x-button.outline>
                    <x-button.outline href="#projects">
                        Lihat Proyek
                    </x-button.outline>
                </div>

                <!-- Social Icons -->
                <div class="flex items-center space-x-4 pt-6" data-aos="fade-up" data-aos-delay="600">
                    <!-- GitHub -->
                    <x-button.social icon="github" href="{{ config('social.github') }}" aria-label="GitHub" />
                    <!-- LinkedIn -->
                    <x-button.social icon="linkedin" href="{{ config('social.linkedin') }}" aria-label="LinkedIn" />
                    <!-- Email -->
                    <x-button.social href="https://mail.google.com/mail/?view=cm&fs=1&to={{ config('social.email') ?? config('profile.contact.email') }}" target="_blank" aria-label="Email">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </x-button.social>
                </div>
            </div>

            <!-- Right Column: Image & Floating Cards -->
            <div class="relative mt-16 lg:mt-0 flex justify-center" data-aos="fade-left" data-aos-duration="1200">
                


                <!-- Profile Image -->
                <div class="relative z-10 group">
                    <div class="w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden border-4 border-white dark:border-[#1E293B] shadow-xl transition-transform duration-500 ease-in-out group-hover:scale-105">
                        <img src="{{ asset($profile['avatar_url']) }}" alt="{{ $profile['name'] }}" class="w-full h-full object-cover brightness-125 contrast-110">
                    </div>

                    @if(isset($profile['hero_floating_cards']) && count($profile['hero_floating_cards']) > 0)
                        @foreach($profile['hero_floating_cards'] as $index => $card)
                            @php
                                $positionClass = ($index % 2 === 0) 
                                    ? 'absolute -left-4 md:-left-20 bottom-8 md:bottom-16' 
                                    : 'absolute -right-4 md:-right-16 -bottom-4 md:-bottom-8';
                                    
                                $isStroke = strpos($card['icon_svg'], 'stroke') !== false;
                            @endphp
                            <div class="{{ $positionClass }} bg-white dark:bg-[#1E293B] p-3 md:p-4 rounded-xl shadow-lg border border-[#E2E8F0] dark:border-[#334155] flex items-center space-x-3 transition-colors duration-300">
                                <div class="w-8 h-8 rounded-full {{ $card['bg_class'] }} flex items-center justify-center {{ $card['text_class'] }} flex-shrink-0">
                                    <svg class="w-4 h-4" 
                                         @if($isStroke) fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                                         @else fill="currentColor" viewBox="0 0 20 20" @endif>
                                        {!! $card['icon_svg'] !!}
                                    </svg>
                                </div>
                                <span class="text-xs md:text-sm font-semibold text-[#0F2C59] dark:text-[#F8FAFC] transition-colors duration-300">{!! $card['text'] !!}</span>
                            </div>
                        @endforeach
                    @endif
                </div>

            </div>
        </div>
    </div>


</section>

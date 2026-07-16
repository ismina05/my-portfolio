@props(['title', 'subtitle' => null, 'alignment' => 'left'])

<div class="{{ $alignment === 'center' ? 'text-center' : 'text-left' }} mb-12">
    @if($subtitle)
        <span class="block text-[#0F2C59] dark:text-[#5FA8FF] font-semibold text-sm uppercase tracking-wider mb-2">{{ $subtitle }}</span>
    @endif
    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0F2C59] dark:text-[#F8FAFC]">{{ $title }}</h2>
</div>

@props(['icon', 'title'])

<div class="bg-white rounded-xl shadow-sm border border-[#E2E8F0] p-6 flex flex-col items-center justify-center text-center hover:shadow-md hover:border-[#0F2C59] transition-all duration-300 group">
    <div class="text-[#4A5568] group-hover:text-[#0F2C59] transition-colors duration-300 mb-4">
        {{ $icon }}
    </div>
    <h4 class="font-semibold text-[#0F2C59]">{{ $title }}</h4>
</div>

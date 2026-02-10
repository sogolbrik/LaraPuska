@props(['href', 'icon', 'label', 'active' => false])

<a href="{{ $href }}"
    class="flex items-center gap-4 px-4 py-3 rounded-2xl transition-all duration-300 group relative
    {{ $active ? 'bg-[#00ADB5] text-[#EEEEEE] shadow-lg shadow-[#00ADB5]/30' : 'text-[#EEEEEE]/60 hover:bg-[#222831] hover:text-[#00ADB5]' }}"
    :class="sidebarOpen ? '' : 'justify-center px-0 w-12 mx-auto'">

    <div class="w-5 flex justify-center {{ $active ? 'text-[#EEEEEE]' : 'text-[#00ADB5]/70 group-hover:text-[#00ADB5]' }} transition-colors duration-300">
        <i class="fa-solid {{ $icon }} text-base"></i>
    </div>

    <span x-show="sidebarOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-x-2" x-transition:enter-end="opacity-100 translate-x-0"
        class="text-sm font-semibold tracking-wide whitespace-nowrap">
        {{ $label }}
    </span>

    <div x-show="!sidebarOpen"
        class="absolute left-14 bg-[#222831] text-[#EEEEEE] text-[11px] font-bold py-2 px-3 rounded-xl opacity-0 group-hover:opacity-100 pointer-events-none transition-all duration-300 z-50 whitespace-nowrap shadow-2xl border border-white/5">
        {{ $label }}
    </div>
</a>

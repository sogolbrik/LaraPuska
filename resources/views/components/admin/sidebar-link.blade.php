@props(['href', 'icon', 'label', 'active' => false])

<a href="{{ $href }}"
    class="flex items-center gap-4 px-4 py-3 rounded-2xl transition-all duration-300 group relative
    {{ $active ? 'bg-[#84A98C] text-[#F7F5F2] shadow-lg shadow-[#84A98C]/30' : 'text-[#2F3E46]/60 hover:bg-[#F7F5F2] hover:text-[#84A98C]' }}"
    :class="sidebarOpen ? '' : 'justify-center px-0 w-12 mx-auto'">

    <div class="w-5 flex justify-center {{ $active ? 'text-[#F7F5F2]' : 'text-[#84A98C]/70 group-hover:text-[#84A98C]' }} transition-colors duration-300">
        <i class="fa-solid {{ $icon }} text-base"></i>
    </div>

    <span x-show="sidebarOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-x-2" x-transition:enter-end="opacity-100 translate-x-0"
        class="text-sm font-semibold tracking-wide whitespace-nowrap">
        {{ $label }}
    </span>

    <div x-show="!sidebarOpen"
        class="absolute left-14 bg-[#2F3E46] text-[#F7F5F2] text-[11px] font-bold py-2 px-3 rounded-xl opacity-0 group-hover:opacity-100 pointer-events-none transition-all duration-300 z-50 whitespace-nowrap shadow-2xl border border-black/5">
        {{ $label }}
    </div>
</a>

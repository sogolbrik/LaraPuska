<div class="h-full flex flex-col group/sidebar bg-[#E9EDC9]">
    <div class="h-18 flex items-center px-6 border-b border-black/5">
        <a href="#" class="flex items-center gap-3 group">
            <div class="w-9 h-9 bg-[#84A98C] rounded-xl flex items-center justify-center shadow-lg shadow-[#84A98C]/20 group-hover:rotate-12 transition-transform duration-300">
                <i class="fa-solid fa-book text-[#F7F5F2] text-[20px]"></i>
            </div>
            <span class="font-display text-xl font-bold tracking-tight text-[#2F3E46] transition-opacity duration-300" :class="sidebarOpen ? 'opacity-100' : 'md:opacity-0 pointer-events-none'">
                Aksara<span class="text-[#84A98C]">.</span>
            </span>
        </a>
    </div>

    <div class="flex-1 overflow-y-auto overflow-x-hidden py-6 px-4 space-y-8 scrollbar-hide">

        <div>
            <p x-show="sidebarOpen" class="px-4 mb-3 text-[10px] font-bold uppercase tracking-[0.2em] text-[#2F3E46]/40 transition-all">
                Menu Utama
            </p>
            <nav class="space-y-1.5">
                <x-admin.sidebar-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')" icon="fa-house" label="Dashboard" />
                <x-admin.sidebar-link href="#" icon="fa-book-open-reader" label="Katalog Buku" />
                <x-admin.sidebar-link href="{{ route('kategori.index') }}" :active="request()->routeIs('kategori.index')" icon="fa-list" label="Kategori Buku" />
                <x-admin.sidebar-link href="#" icon="fa-users-gear" label="Data Anggota" />
            </nav>
        </div>

        <div>
            <p x-show="sidebarOpen" class="px-4 mb-3 text-[10px] font-bold uppercase tracking-[0.2em] text-[#2F3E46]/40">
                Sirkulasi
            </p>
            <nav class="space-y-1.5">
                <x-admin.sidebar-link href="#" icon="fa-right-left" label="Peminjaman" />
                <x-admin.sidebar-link href="#" icon="fa-clock-rotate-left" label="Pengembalian" />
                <x-admin.sidebar-link href="#" icon="fa-triangle-exclamation" label="Denda & Sanksi" />
            </nav>
        </div>

        <div>
            <p x-show="sidebarOpen" class="px-4 mb-3 text-[10px] font-bold uppercase tracking-[0.2em] text-[#2F3E46]/40">
                Lainnya
            </p>
            <nav class="space-y-1.5">
                <x-admin.sidebar-link href="#" icon="fa-chart-line" label="Laporan Statistik" />
                <x-admin.sidebar-link href="#" icon="fa-gears" label="Konfig Perpus" />
            </nav>
        </div>
    </div>

    <div class="p-4 border-t border-black/5">
        <div class="flex items-center p-3 rounded-2xl bg-[#F7F5F2] border border-black/5 transition-all duration-300" :class="sidebarOpen ? 'justify-start gap-3' : 'justify-center'">
            <div class="w-8 h-8 rounded-full bg-[#E9EDC9] flex items-center justify-center text-[#84A98C] border border-[#84A98C]/20">
                <i class="fa-solid fa-circle-info text-[16px]"></i>
            </div>
            <div x-show="sidebarOpen" class="flex-1">
                <p class="text-[11px] font-bold text-[#2F3E46]">Butuh Bantuan?</p>
                <p class="text-[10px] text-[#84A98C]">Hubungi IT Support</p>
            </div>
        </div>
    </div>
</div>

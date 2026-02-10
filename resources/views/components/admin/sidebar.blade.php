<div class="h-full flex flex-col group/sidebar bg-[#393E46]">
    <div class="h-18 flex items-center px-6 border-b border-white/5">
        <a href="#" class="flex items-center gap-3 group">
            <div class="w-9 h-9 bg-[#00ADB5] rounded-xl flex items-center justify-center shadow-lg shadow-[#00ADB5]/20 group-hover:rotate-12 transition-transform duration-300">
                <i class="fa-solid fa-book text-[#EEEEEE] text-[20px]"></i>
            </div>
            <span class="font-display text-xl font-bold tracking-tight text-[#EEEEEE] transition-opacity duration-300" :class="sidebarOpen ? 'opacity-100' : 'md:opacity-0 pointer-events-none'">
                Lara<span class="text-[#00ADB5]">Puska</span>
            </span>
        </a>
    </div>

    <div class="flex-1 overflow-y-auto overflow-x-hidden py-6 px-4 space-y-8 scrollbar-hide">

        <div>
            <p x-show="sidebarOpen" class="px-4 mb-3 text-[10px] font-bold uppercase tracking-[0.2em] text-[#EEEEEE]/40 transition-all">
                Menu Utama
            </p>
            <nav class="space-y-1.5">
                <x-admin.sidebar-link href="{{ route('admin.dashboard') }}" :active="true" icon="fa-house" label="Dashboard" />
                <x-admin.sidebar-link href="#" icon="fa-book-open-reader" label="Katalog Buku" />
                <x-admin.sidebar-link href="#" icon="fa-users-gear" label="Data Anggota" />
            </nav>
        </div>

        <div>
            <p x-show="sidebarOpen" class="px-4 mb-3 text-[10px] font-bold uppercase tracking-[0.2em] text-[#EEEEEE]/40">
                Sirkulasi
            </p>
            <nav class="space-y-1.5">
                <x-admin.sidebar-link href="#" icon="fa-right-left" label="Peminjaman" />
                <x-admin.sidebar-link href="#" icon="fa-clock-rotate-left" label="Pengembalian" />
                <x-admin.sidebar-link href="#" icon="fa-triangle-exclamation" label="Denda & Sanksi" />
            </nav>
        </div>

        <div>
            <p x-show="sidebarOpen" class="px-4 mb-3 text-[10px] font-bold uppercase tracking-[0.2em] text-[#EEEEEE]/40">
                Lainnya
            </p>
            <nav class="space-y-1.5">
                <x-admin.sidebar-link href="#" icon="fa-chart-line" label="Laporan Statistik" />
                <x-admin.sidebar-link href="#" icon="fa-gears" label="Konfig Perpus" />
            </nav>
        </div>
    </div>

    <div class="p-4 border-t border-white/5">
        <div class="flex items-center p-3 rounded-2xl bg-[#222831] border border-white/5 transition-all duration-300" :class="sidebarOpen ? 'justify-start gap-3' : 'justify-center'">
            <div class="w-8 h-8 rounded-full bg-[#393E46] flex items-center justify-center text-[#00ADB5] border border-[#00ADB5]/20">
                <i class="fa-solid fa-circle-info text-[16px]"></i>
            </div>
            <div x-show="sidebarOpen" class="flex-1">
                <p class="text-[11px] font-bold text-[#EEEEEE]">Butuh Bantuan?</p>
                <p class="text-[10px] text-[#00ADB5]">Hubungi IT Support</p>
            </div>
        </div>
    </div>
</div>

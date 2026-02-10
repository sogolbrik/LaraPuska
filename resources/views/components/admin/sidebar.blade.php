<div class="h-full flex flex-col group/sidebar">
    <div class="h-18 flex items-center px-6 border-b border-orange-50/50">
        <a href="#" class="flex items-center gap-3 group">
            <div class="w-9 h-9 bg-[#562F00] rounded-xl flex items-center justify-center shadow-lg shadow-orange-900/20 group-hover:rotate-12 transition-transform duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FFCE99" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z" />
                    <path d="M8 7h6" />
                    <path d="M8 11h8" />
                </svg>
            </div>
            <span class="font-display text-xl font-bold tracking-tight text-[#562F00] transition-opacity duration-300" :class="sidebarOpen ? 'opacity-100' : 'md:opacity-0 pointer-events-none'">
                Lara<span class="text-[#FF9644]">Puska</span>
            </span>
        </a>
    </div>

    <div class="flex-1 overflow-y-auto overflow-x-hidden py-6 px-4 space-y-8 scrollbar-hide">

        <div>
            <p x-show="sidebarOpen" class="px-4 mb-3 text-[10px] font-bold uppercase tracking-[0.2em] text-orange-300/80 transition-all">
                Menu Utama
            </p>
            <nav class="space-y-1.5">
                <x-sidebar-link href="#" :active="true" icon="layout-dashboard" label="Dashboard" />
                <x-sidebar-link href="#" icon="book-open" label="Katalog Buku" />
                <x-sidebar-link href="#" icon="users" label="Data Anggota" />
            </nav>
        </div>

        <div>
            <p x-show="sidebarOpen" class="px-4 mb-3 text-[10px] font-bold uppercase tracking-[0.2em] text-orange-300/80">
                Sirkulasi
            </p>
            <nav class="space-y-1.5">
                <x-sidebar-link href="#" icon="arrow-left-right" label="Peminjaman" />
                <x-sidebar-link href="#" icon="history" label="Pengembalian" />
                <x-sidebar-link href="#" icon="alert-circle" label="Denda & Sanksi" />
            </nav>
        </div>

        <div>
            <p x-show="sidebarOpen" class="px-4 mb-3 text-[10px] font-bold uppercase tracking-[0.2em] text-orange-300/80">
                Lainnya
            </p>
            <nav class="space-y-1.5">
                <x-sidebar-link href="#" icon="file-bar-chart" label="Laporan Statistik" />
                <x-sidebar-link href="#" icon="settings-2" label="Konfig Perpus" />
            </nav>
        </div>
    </div>

    <div class="p-4 border-t border-orange-50">
        <div class="flex items-center p-3 rounded-2xl bg-[#FFFDF1] border border-orange-100/50 transition-all duration-300" :class="sidebarOpen ? 'justify-start gap-3' : 'justify-center'">
            <div class="w-8 h-8 rounded-full bg-[#FFCE99] flex items-center justify-center text-[#562F00]">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M12 16v-4" />
                    <path d="M12 8h.01" />
                </svg>
            </div>
            <div x-show="sidebarOpen" class="flex-1">
                <p class="text-[11px] font-bold text-[#562F00]">Butuh Bantuan?</p>
                <p class="text-[10px] text-orange-400">Hubungi IT Support</p>
            </div>
        </div>
    </div>
</div>

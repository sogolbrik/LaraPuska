<x-admin-main title="Dashboard Admin">
    <div class="mb-10 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
        <div class="space-y-1">
            <h1 class="font-display text-3xl font-bold text-[#EEEEEE]">Dashboard</h1>
            <p class="text-[#EEEEEE]/50 text-sm">Selamat datang kembali, berikut ringkasan statistik <span class="font-bold text-[#00ADB5]">LaraPuska</span> hari ini.</p>
        </div>
        <div class="flex items-center gap-3">
            <div class="hidden sm:flex items-center px-4 py-2 bg-[#393E46] border border-white/5 rounded-2xl text-xs font-bold text-[#EEEEEE]/40 tracking-widest uppercase">
                <i class="fa-solid fa-calendar-day mr-2 text-[#00ADB5]"></i>
                10 Feb 2026
            </div>
            <button
                class="flex items-center gap-2 px-5 py-2.5 bg-[#00ADB5] text-[#EEEEEE] rounded-2xl text-sm font-bold hover:bg-[#00ADB5]/90 transition-all shadow-lg shadow-[#00ADB5]/20 active:scale-95">
                <i class="fa-solid fa-plus text-xs"></i>
                Tambah Buku
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-10">
        <div class="bg-[#393E46] p-6 rounded-4xl border border-white/5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-[#222831] rounded-2xl flex items-center justify-center text-[#00ADB5]">
                    <i class="fa-solid fa-book-bookmark text-xl"></i>
                </div>
                <span class="text-[11px] font-bold text-green-400 bg-green-400/10 px-2 py-1 rounded-lg">+12%</span>
            </div>
            <p class="text-2xl font-bold text-[#EEEEEE]">1,284</p>
            <p class="text-xs font-semibold text-[#EEEEEE]/30 uppercase tracking-wider mt-1">Total Koleksi</p>
        </div>

        <div class="bg-[#393E46] p-6 rounded-4xl border border-white/5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-[#222831] rounded-2xl flex items-center justify-center text-[#00ADB5]">
                    <i class="fa-solid fa-user-graduate text-xl"></i>
                </div>
                <span class="text-[11px] font-bold text-[#00ADB5] bg-[#00ADB5]/10 px-2 py-1 rounded-lg">Aktif</span>
            </div>
            <p class="text-2xl font-bold text-[#EEEEEE]">856</p>
            <p class="text-xs font-semibold text-[#EEEEEE]/30 uppercase tracking-wider mt-1">Anggota Aktif</p>
        </div>

        <div class="bg-[#393E46] p-6 rounded-4xl border border-white/5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border-b-4 border-b-[#00ADB5]">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-[#00ADB5]/10 rounded-2xl flex items-center justify-center text-[#00ADB5]">
                    <i class="fa-solid fa-hand-holding-heart text-xl"></i>
                </div>
                <span class="text-[11px] font-bold text-yellow-400 bg-yellow-400/10 px-2 py-1 rounded-lg">Hot</span>
            </div>
            <p class="text-2xl font-bold text-[#EEEEEE]">42</p>
            <p class="text-xs font-semibold text-[#EEEEEE]/30 uppercase tracking-wider mt-1">Dipinjam Hari Ini</p>
        </div>

        <div class="bg-[#393E46] p-6 rounded-4xl border border-white/5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-red-500/10 rounded-2xl flex items-center justify-center text-red-400">
                    <i class="fa-solid fa-triangle-exclamation text-xl"></i>
                </div>
                <span class="text-[11px] font-bold text-red-400 bg-red-400/10 px-2 py-1 rounded-lg">15 Telat</span>
            </div>
            <p class="text-2xl font-bold text-[#EEEEEE]">Rp 125rb</p>
            <p class="text-xs font-semibold text-[#EEEEEE]/30 uppercase tracking-wider mt-1">Total Denda Bln Ini</p>
        </div>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
        <div class="xl:col-span-2 bg-[#393E46] rounded-[2.5rem] p-8 border border-white/5 shadow-sm">
            <div class="flex items-center justify-between mb-8">
                <h3 class="font-display text-xl font-bold text-[#EEEEEE]">Sirkulasi Terbaru</h3>
                <a href="#" class="text-xs font-bold text-[#00ADB5] hover:underline">Lihat Semua</a>
            </div>

            <div class="space-y-6">
                <div class="flex items-center justify-between p-4 rounded-3xl hover:bg-[#222831] transition-colors border border-transparent hover:border-white/5 group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-[#222831] flex items-center justify-center group-hover:bg-[#393E46] transition-colors">
                            <i class="fa-solid fa-arrow-right-from-bracket text-[#00ADB5]"></i>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-[#EEEEEE]">Ahmad Fauzi</p>
                            <p class="text-xs text-[#EEEEEE]/40 italic">Meminjam "Filosofi Teras"</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-xs font-bold text-[#EEEEEE]">09:40 AM</p>
                        <p class="text-[10px] text-[#00ADB5] font-medium uppercase">Baru saja</p>
                    </div>
                </div>

                <div class="flex items-center justify-between p-4 rounded-3xl hover:bg-[#222831] transition-colors border border-transparent hover:border-white/5 group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-[#222831] flex items-center justify-center group-hover:bg-[#393E46] transition-colors">
                            <i class="fa-solid fa-rotate-left text-green-400"></i>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-[#EEEEEE]">Siti Aminah</p>
                            <p class="text-xs text-[#EEEEEE]/40 italic">Mengembalikan "Atomic Habits"</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-xs font-bold text-[#EEEEEE]">Kemarin</p>
                        <p class="text-[10px] text-green-400 font-medium uppercase">Selesai</p>
                    </div>
                </div>

                <div class="flex items-center justify-between p-4 rounded-3xl hover:bg-[#222831] transition-colors border border-transparent hover:border-white/5 group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-[#222831] flex items-center justify-center group-hover:bg-[#393E46] transition-colors">
                            <i class="fa-solid fa-circle-exclamation text-red-400"></i>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-[#EEEEEE]">Budi Doremi</p>
                            <p class="text-xs text-[#EEEEEE]/40 italic">Terlambat: "Bumi Manusia"</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-xs font-bold text-[#EEEEEE]">Kemarin</p>
                        <p class="text-[10px] text-red-400 font-medium uppercase">Denda Aktif</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-[#222831] rounded-[2.5rem] p-8 text-[#EEEEEE] shadow-2xl border border-white/5 relative overflow-hidden">
            <div class="absolute -top-10 -right-10 w-40 h-40 bg-[#00ADB5]/10 rounded-full blur-3xl"></div>

            <h3 class="font-display text-xl font-bold mb-6 relative z-10">Buku Terpopuler</h3>

            <div class="space-y-6 relative z-10">
                <div class="flex gap-4">
                    <div class="w-16 h-20 bg-[#393E46] rounded-xl overflow-hidden shrink-0 flex items-center justify-center border border-white/5">
                        <i class="fa-solid fa-book-open text-[#00ADB5]/20 text-2xl"></i>
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-sm font-bold leading-tight">Laskar Pelangi</p>
                        <p class="text-xs text-[#EEEEEE]/40 mb-2">Andrea Hirata</p>
                        <div class="flex text-[10px] text-[#00ADB5] gap-0.5">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-16 h-20 bg-[#393E46] rounded-xl overflow-hidden shrink-0 flex items-center justify-center border border-white/5">
                        <i class="fa-solid fa-book-open text-[#00ADB5]/20 text-2xl"></i>
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-sm font-bold leading-tight">Pulang-Pergi</p>
                        <p class="text-xs text-[#EEEEEE]/40 mb-2">Tere Liye</p>
                        <div class="flex text-[10px] text-[#00ADB5] gap-0.5">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div>
                </div>

                <button
                    class="w-full mt-4 py-3 bg-[#393E46] border border-[#00ADB5]/30 text-[#00ADB5] rounded-2xl text-sm font-bold hover:bg-[#00ADB5] hover:text-[#EEEEEE] transition-all active:scale-95 shadow-lg">
                    Lihat Rekomendasi AI
                </button>
            </div>
        </div>
    </div>
</x-admin-main>

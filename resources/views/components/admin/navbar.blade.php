<nav class="flex items-center justify-between px-6 py-3 h-18 bg-[#222831]/80 backdrop-blur-md">
    <div class="flex items-center gap-4">
        <button @click="sidebarOpen = !sidebarOpen"
            class="p-2 rounded-xl bg-[#393E46] border border-white/5 text-[#EEEEEE] hover:bg-[#00ADB5] hover:text-[#EEEEEE] transition-all duration-300 shadow-lg shadow-black/20 active:scale-95">
            <i class="fas fa-align-left text-[20px]"></i>
        </button>

        <div class="hidden md:block">
            <h2 class="text-sm font-medium text-[#EEEEEE]/50 flex items-center gap-2">
                <span>LaraPuska</span>
                <span class="text-[#00ADB5]/40">/</span>
                <span class="text-[#EEEEEE] font-semibold tracking-wide">Dashboard Admin</span>
            </h2>
        </div>
    </div>

    <div class="flex items-center gap-3 lg:gap-6">

        <div class="hidden sm:flex items-center relative group">
            <span class="absolute left-3 text-[#00ADB5]/50 group-focus-within:text-[#00ADB5] transition-colors">
                <i class="fas fa-search text-[18px]"></i>
            </span>
            <input type="text" placeholder="Cari buku atau anggota..."
                class="pl-10 pr-4 py-2 w-64 bg-[#393E46]/50 border border-white/10 rounded-2xl text-sm text-[#EEEEEE] focus:outline-none focus:ring-2 focus:ring-[#00ADB5]/20 focus:border-[#00ADB5] transition-all duration-300 placeholder:text-[#EEEEEE]/30">
        </div>

        <div class="flex items-center gap-2 border-l border-white/10 pl-4 lg:pl-6">
            <button class="relative p-2 text-[#EEEEEE]/60 hover:text-[#00ADB5] transition-colors group">
                <i class="fas fa-bell text-[22px]"></i>
                <span class="absolute top-2 right-2 w-2 h-2 bg-[#00ADB5] rounded-full ring-2 ring-[#222831]"></span>
            </button>
        </div>

        <div class="relative" x-data="{ userOpen: false }">
            <button @click="userOpen = !userOpen" @click.away="userOpen = false" class="flex items-center gap-3 p-1 pr-3 rounded-full hover:bg-[#393E46] transition-all duration-300">
                <div class="w-10 h-10 rounded-full bg-linear-to-tr from-[#00ADB5] to-[#393E46] p-0.5 shadow-md">
                    <div class="w-full h-full rounded-full bg-[#222831] flex items-center justify-center border-2 border-[#222831]">
                        <i class="fas fa-user-circle text-2xl text-[#EEEEEE]"></i>
                    </div>
                </div>
                <div class="hidden lg:block text-left">
                    <p class="text-xs font-bold text-[#EEEEEE]">Admin Lara</p>
                    <p class="text-[10px] text-[#00ADB5] font-medium uppercase tracking-tighter">Librarian</p>
                </div>
                <i class="fas fa-chevron-down text-[10px] text-[#EEEEEE]/30 transition-transform duration-300" :class="userOpen ? 'rotate-180' : ''"></i>
            </button>

            <div x-show="userOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-95 translate-y-2" class="absolute right-0 mt-3 w-48 bg-[#393E46] border border-white/10 rounded-2xl shadow-2xl py-2 z-50 overflow-hidden">

                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-sm text-[#EEEEEE]/80 hover:bg-[#222831] hover:text-[#00ADB5] transition-colors">
                    <i class="fas fa-user text-xs w-4"></i>
                    Profil Saya
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-sm text-[#EEEEEE]/80 hover:bg-[#222831] hover:text-[#00ADB5] transition-colors">
                    <i class="fas fa-cog text-xs w-4"></i>
                    Pengaturan
                </a>
                <hr class="my-1 border-white/5">
                <form action="#" method="POST">
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-2.5 text-sm text-red-400 hover:bg-red-500/10 transition-colors">
                        <i class="fas fa-sign-out-alt text-xs w-4"></i>
                        Keluar
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

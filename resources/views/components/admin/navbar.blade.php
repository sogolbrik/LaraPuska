<nav class="flex items-center justify-between px-6 py-3 h-18">
    <div class="flex items-center gap-4">
        <button @click="sidebarOpen = !sidebarOpen"
            class="p-2 rounded-xl bg-white border border-orange-100 text-[#562F00] hover:bg-[#FFCE99] hover:text-white transition-all duration-300 shadow-sm active:scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-align-left">
                <line x1="21" x2="3" y1="6" />
                <line x1="15" x2="3" y1="12" />
                <line x1="17" x2="3" y1="18" />
            </svg>
        </button>

        <div class="hidden md:block">
            <h2 class="text-sm font-medium text-[#562F00]/60 flex items-center gap-2">
                <span>LaraPuska</span>
                <span class="text-orange-300">/</span>
                <span class="text-[#562F00] font-semibold tracking-wide">Dashboard Admin</span>
            </h2>
        </div>
    </div>

    <div class="flex items-center gap-3 lg:gap-6">

        <div class="hidden sm:flex items-center relative group">
            <span class="absolute left-3 text-orange-400 group-focus-within:text-[#FF9644] transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.3-4.3" />
                </svg>
            </span>
            <input type="text" placeholder="Cari buku atau anggota..."
                class="pl-10 pr-4 py-2 w-64 bg-white/50 border border-orange-100 rounded-2xl text-sm focus:outline-none focus:ring-2 focus:ring-[#FF9644]/20 focus:border-[#FF9644] transition-all duration-300 placeholder:text-orange-300/60">
        </div>

        <div class="flex items-center gap-2 border-l border-orange-100 pl-4 lg:pl-6">
            <button class="relative p-2 text-[#562F00]/70 hover:text-[#FF9644] transition-colors group">
                <i class="fas fa-bell text-[22px]"></i>
                <span class="absolute top-2 right-2 w-2 h-2 bg-[#FF9644] rounded-full ring-2 ring-[#FFFDF1]"></span>
            </button>
        </div>

        <div class="relative" x-data="{ userOpen: false }">
            <button @click="userOpen = !userOpen" @click.away="userOpen = false" class="flex items-center gap-3 p-1 pr-3 rounded-full hover:bg-white/80 transition-all duration-300">
                <div class="w-10 h-10 rounded-full bg-linear-to-tr from-[#FF9644] to-[#FFCE99] p-0.5 shadow-md">
                    <i class="fas fa-user-circle text-3xl text-[#562F00] w-full h-full rounded-full border-2 border-[#FFFDF1] bg-[#FFFDF1] flex items-center justify-center" aria-hidden="true"></i>
                </div>
                <div class="hidden lg:block text-left">
                    <p class="text-xs font-bold text-[#562F00]">Admin Lara</p>
                    <p class="text-[10px] text-[#FF9644] font-medium uppercase tracking-tighter">Librarian</p>
                </div>
                <svg :class="userOpen ? 'rotate-180' : ''" class="hidden lg:block transition-transform duration-300 text-orange-300" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </button>

            <div x-show="userOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-95 translate-y-2"
                class="absolute right-0 mt-3 w-48 bg-white border border-orange-50 rounded-2xl shadow-xl shadow-orange-900/5 py-2 z-50 overflow-hidden">
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-sm text-[#562F00] hover:bg-[#FFFDF1] hover:text-[#FF9644] transition-colors">
                    <i class="fas fa-user w-4 h-4"></i>
                    Profil Saya
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-sm text-[#562F00] hover:bg-[#FFFDF1] hover:text-[#FF9644] transition-colors">
                    <i class="fas fa-cog w-4 h-4"></i>
                    Pengaturan
                </a>
                <hr class="my-1 border-orange-50">
                <form action="#" method="POST">
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-2.5 text-sm text-red-500 hover:bg-red-50 transition-colors">
                        <i class="fas fa-sign-out-alt w-4 h-4"></i>
                        Keluar
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

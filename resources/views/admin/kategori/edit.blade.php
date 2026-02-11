<x-admin-main title="Edit Kategori">
    <div class="mb-10 flex items-center gap-6">
        <a href="{{ route('kategori.index') }}"
            class="p-3 bg-[#E9EDC9] text-[#2F3E46]/60 rounded-2xl border border-black/5 hover:bg-[#84A98C] hover:text-[#F7F5F2] transition-all active:scale-95 shadow-sm">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <div class="space-y-1">
            <h1 class="font-display text-3xl font-bold text-[#2F3E46]">Edit Kategori</h1>
            <p class="text-[#2F3E46]/50 text-sm">Perbarui informasi kategori <span class="text-[#84A98C] font-semibold">"{{ $kategori->nama }}"</span></p>
        </div>
    </div>

    <div class="max-w-3xl mx-auto">
        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="bg-[#E9EDC9] rounded-[2.5rem] p-8 lg:p-10 border border-black/5 shadow-sm relative overflow-hidden">
                <div class="absolute -top-12 -right-12 w-32 h-32 bg-[#84A98C]/5 rounded-full blur-3xl"></div>

                <div class="grid grid-cols-1 gap-8 relative z-10">

                    <div class="space-y-2">
                        <label for="nama" class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">
                            Nama Kategori
                        </label>
                        <input type="text" name="nama" id="nama"
                            class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] transition-all placeholder:text-[#2F3E46]/20 font-medium"
                            placeholder="Contoh: Fiksi Ilmiah..." value="{{ old('nama', $kategori->nama) }}" required autofocus>
                        @error('nama')
                            <p class="text-red-500 text-xs mt-1 ml-1 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="slug" class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1 flex items-center gap-2">
                            Slug
                            <i class="fa-solid fa-link text-[10px]"></i>
                        </label>
                        <input type="text" name="slug" id="slug"
                            class="w-full px-6 py-4 bg-[#F7F5F2]/30 border border-black/5 rounded-2xl text-[#2F3E46]/40 font-mono text-sm cursor-not-allowed outline-none"
                            value="{{ old('slug', $kategori->slug) }}" readonly>
                        <p class="text-[10px] text-[#2F3E46]/30 italic ml-1">*Slug akan diperbarui otomatis jika nama diubah.</p>
                    </div>

                    <div class="space-y-2">
                        <label for="deskripsi" class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">
                            Deskripsi <span class="text-[10px] normal-case opacity-60">(Opsional)</span>
                        </label>
                        <textarea name="deskripsi" id="deskripsi" rows="4"
                            class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-3xl focus:outline-none focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] transition-all placeholder:text-[#2F3E46]/20 font-medium resize-none"
                            placeholder="Tuliskan penjelasan singkat...">{{ old('deskripsi', $kategori->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <p class="text-red-500 text-xs mt-1 ml-1 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="flex items-center justify-end gap-4 px-4">
                <a href="{{ route('kategori.index') }}" class="text-sm font-bold text-[#2F3E46]/40 hover:text-[#2F3E46] transition-colors">
                    Batalkan Perubahan
                </a>
                <button type="submit"
                    class="flex items-center gap-3 px-8 py-4 bg-[#84A98C] text-[#F7F5F2] rounded-2xl text-sm font-bold hover:bg-[#84A98C]/90 transition-all shadow-xl shadow-[#84A98C]/20 active:scale-95">
                    <i class="fa-solid fa-arrows-rotate text-xs"></i>
                    Perbarui Kategori
                </button>
            </div>
        </form>
    </div>

    <script>
        const nama = document.querySelector('#nama');
        const slug = document.querySelector('#slug');

        nama.addEventListener('keyup', function() {
            let preslug = nama.value;
            preslug = preslug.replace(/[^a-zA-Z0-9 ]/g, "");
            preslug = preslug.replace(/\s+/g, '-');
            slug.value = preslug.toLowerCase();
        });

        const form = document.querySelector('form');
        const btnSubmit = form.querySelector('button[type="submit"]');

        form.addEventListener('submit', function() {
            btnSubmit.innerHTML = `<i class="fa-solid fa-circle-notch animate-spin text-xs"></i> Memperbarui...`;
            btnSubmit.classList.add('opacity-80', 'cursor-not-allowed');
            btnSubmit.style.pointerEvents = 'none';
        });
    </script>
</x-admin-main>

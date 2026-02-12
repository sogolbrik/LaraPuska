<x-admin-main title="Edit Buku">
    <div class="mb-10 flex items-center gap-6">
        <a href="{{ route('admin.buku.index') }}"
            class="p-3 bg-[#E9EDC9] text-[#2F3E46]/60 rounded-2xl border border-black/5 hover:bg-[#84A98C] hover:text-[#F7F5F2] transition-all active:scale-95 shadow-sm">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <div class="space-y-1">
            <h1 class="font-display text-3xl font-bold text-[#2F3E46]">Edit Buku</h1>
            <p class="text-[#2F3E46]/50 text-sm">Perbarui informasi detail untuk buku <span class="text-[#84A98C] font-semibold">"{{ $buku->judul }}"</span></p>
        </div>
    </div>

    <form action="{{ route('admin.buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <div class="lg:col-span-2 space-y-6">
                <div class="bg-[#E9EDC9] rounded-[2.5rem] p-8 border border-black/5 shadow-sm relative overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 relative z-10">

                        <div class="md:col-span-2 space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">Judul Buku</label>
                            <input type="text" name="judul" value="{{ old('judul', $buku->judul) }}" required
                                class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-2xl focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] outline-none transition-all font-medium">
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">Kategori</label>
                            <select name="kategori_id" required
                                class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-2xl focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] outline-none transition-all font-medium text-[#2F3E46]">
                                @foreach ($kategori as $kat)
                                    <option value="{{ $kat->id }}" {{ $buku->kategori_id == $kat->id ? 'selected' : '' }}>
                                        {{ $kat->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">Penulis</label>
                            <input type="text" name="penulis" value="{{ old('penulis', $buku->penulis) }}" required
                                class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-2xl focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] outline-none transition-all font-medium">
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">Penerbit</label>
                            <input type="text" name="penerbit" value="{{ old('penerbit', $buku->penerbit) }}" required
                                class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-2xl focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] outline-none transition-all font-medium">
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">Tahun Terbit</label>
                            <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}" required
                                class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-2xl focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] outline-none transition-all font-medium">
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">Stok Buku</label>
                            <div class="relative">
                                <input type="number" name="stok" value="{{ old('stok', $buku->stok) }}" required min="0"
                                    class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-2xl focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] outline-none transition-all font-medium">
                                <span class="absolute right-6 top-1/2 -translate-y-1/2 text-[10px] font-bold text-[#2F3E46]/30 uppercase tracking-widest">Eksemplar</span>
                            </div>
                        </div>

                        <div class="md:col-span-2 space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">Deskripsi Singkat</label>
                            <textarea name="deskripsi" rows="4"
                                class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-4xl focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] outline-none transition-all font-medium resize-none">{{ old('deskripsi', $buku->deskripsi) }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-[#E9EDC9] rounded-[2.5rem] p-8 border border-black/5 shadow-sm h-fit">
                    <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1 block mb-4 text-center">Sampul Buku</label>

                    <div class="relative group mx-auto w-full aspect-3/4 max-w-60">
                        <input type="file" name="cover" id="cover" class="hidden" accept="image/*" onchange="previewImage(this)">
                        <label for="cover" class="cursor-pointer">
                            <div id="preview-container"
                                class="w-full h-full rounded-[2.5rem] border-2 border-[#84A98C] bg-white flex items-center justify-center overflow-hidden shadow-inner transition-all hover:opacity-90">
                                @if ($buku->cover)
                                    <img src="{{ asset('storage/' . $buku->cover) }}" class="w-full h-full object-cover" id="current-image">
                                @else
                                    <div class="flex flex-col items-center gap-2">
                                        <i class="fa-solid fa-image text-3xl text-[#84A98C]/30"></i>
                                        <p class="text-[10px] font-bold text-[#2F3E46]/30 uppercase">No Cover</p>
                                    </div>
                                @endif

                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <i class="fa-solid fa-camera text-white text-2xl"></i>
                                </div>
                            </div>
                        </label>
                    </div>

                    <p class="text-[10px] text-center text-[#2F3E46]/40 mt-4 italic font-medium">Klik gambar untuk mengganti sampul</p>

                    <div class="mt-8 space-y-3">
                        <button type="submit"
                            class="w-full flex items-center justify-center gap-3 px-8 py-4 bg-[#84A98C] text-[#F7F5F2] rounded-2xl text-sm font-bold hover:bg-[#84A98C]/90 transition-all shadow-xl shadow-[#84A98C]/20 active:scale-95 btn-submit">
                            <i class="fa-solid fa-arrows-rotate text-xs"></i>
                            Perbarui Buku
                        </button>
                        <a href="{{ route('admin.buku.index') }}"
                            class="block text-center w-full py-3 text-xs font-bold text-[#2F3E46]/30 hover:text-red-500 transition-colors uppercase tracking-widest">
                            Batalkan
                        </a>
                    </div>
                </div>

                <div class="px-6 py-4 bg-white/50 border border-black/5 rounded-2xl">
                    <div class="flex items-center gap-3 text-[#2F3E46]/40">
                        <i class="fa-solid fa-circle-info text-xs"></i>
                        <p class="text-[10px] leading-relaxed font-medium uppercase tracking-tighter">
                            Status buku akan diperbarui secara otomatis berdasarkan stok yang tersedia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        function previewImage(input) {
            const container = document.getElementById('preview-container');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    container.innerHTML = `
                        <img src="${e.target.result}" class="w-full h-full object-cover animate__animated animate__fadeIn">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fa-solid fa-camera text-white text-2xl"></i>
                        </div>
                    `;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        const form = document.querySelector('form');
        form.addEventListener('submit', function() {
            const btn = document.querySelector('.btn-submit');
            btn.innerHTML = `<i class="fa-solid fa-circle-notch animate-spin text-xs"></i> Memproses...`;
            btn.classList.add('opacity-80', 'cursor-not-allowed');
            btn.style.pointerEvents = 'none';
        });
    </script>
</x-admin-main>

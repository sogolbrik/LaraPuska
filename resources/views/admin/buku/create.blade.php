<x-admin-main title="Tambah Buku">
    <div class="mb-10 flex items-center gap-6">
        <a href="{{ route('admin.buku.index') }}" class="p-3 bg-[#E9EDC9] text-[#2F3E46]/60 rounded-2xl border border-black/5 hover:bg-[#84A98C] hover:text-[#F7F5F2] transition-all active:scale-95 shadow-sm">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <div class="space-y-1">
            <h1 class="font-display text-3xl font-bold text-[#2F3E46]">Tambah Buku</h1>
            <p class="text-[#2F3E46]/50 text-sm">Lengkapi detail informasi untuk menambahkan koleksi pustaka baru.</p>
        </div>
    </div>

    <form action="{{ route('admin.buku.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <div class="lg:col-span-2 space-y-6">
                <div class="bg-[#E9EDC9] rounded-[2.5rem] p-8 border border-black/5 shadow-sm relative overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 relative z-10">

                        <div class="md:col-span-2 space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">Judul Buku</label>
                            <input type="text" name="judul" value="{{ old('judul') }}" required
                                class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-2xl focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] outline-none transition-all placeholder:text-[#2F3E46]/20 font-medium"
                                placeholder="Masukkan judul lengkap buku...">
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">Kategori</label>
                            <select name="kategori_id" required
                                class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-2xl focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] outline-none transition-all font-medium text-[#2F3E46]">
                                <option value="" disabled selected>Pilih Kategori</option>
                                @foreach ($kategori as $kat)
                                    <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">Penulis</label>
                            <input type="text" name="penulis" value="{{ old('penulis') }}" required
                                class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-2xl focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] outline-none transition-all font-medium"
                                placeholder="Nama penulis...">
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">Penerbit</label>
                            <input type="text" name="penerbit" value="{{ old('penerbit') }}" required
                                class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-2xl focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] outline-none transition-all font-medium"
                                placeholder="Nama penerbit...">
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">Tahun Terbit</label>
                            <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit', date('Y')) }}" required
                                class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-2xl focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] outline-none transition-all font-medium"
                                placeholder="YYYY">
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">Stok Buku</label>
                            <div class="relative">
                                <input type="number" name="stok" value="{{ old('stok', 0) }}" required min="0"
                                    class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-2xl focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] outline-none transition-all font-medium">
                                <span class="absolute right-6 top-1/2 -translate-y-1/2 text-[10px] font-bold text-[#2F3E46]/30 uppercase tracking-widest text-center">Eksemplar</span>
                            </div>
                        </div>

                        <div class="md:col-span-2 space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1">Deskripsi Singkat</label>
                            <textarea name="deskripsi" rows="4"
                                class="w-full px-6 py-4 bg-[#F7F5F2]/50 border border-black/5 rounded-4xl focus:ring-2 focus:ring-[#84A98C]/20 focus:border-[#84A98C] outline-none transition-all font-medium resize-none"
                                placeholder="Sinopsis atau ringkasan buku...">{{ old('deskripsi') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-[#E9EDC9] rounded-[2.5rem] p-8 border border-black/5 shadow-sm relative overflow-hidden h-fit">
                    <label class="text-xs font-bold uppercase tracking-widest text-[#2F3E46]/40 ml-1 block mb-4 text-center">Sampul Buku</label>

                    <div class="relative group mx-auto w-full aspect-3/4 max-w-60">
                        <input type="file" name="cover" id="cover" class="hidden" accept="image/*" onchange="previewImage(this)">
                        <label for="cover" class="cursor-pointer">
                            <div id="preview-container"
                                class="w-full h-full rounded-4xl border-2 border-dashed border-[#84A98C]/30 bg-[#F7F5F2]/50 flex flex-col items-center justify-center gap-3 overflow-hidden transition-all hover:bg-[#F7F5F2] hover:border-[#84A98C]">
                                <i class="fa-solid fa-cloud-arrow-up text-3xl text-[#84A98C]"></i>
                                <div class="text-center">
                                    <p class="text-xs font-bold text-[#2F3E46]">Pilih File Gambar</p>
                                    <p class="text-[10px] text-[#2F3E46]/40 mt-1">PNG, JPG, WEBP up to 2MB</p>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="mt-8 space-y-3">
                        <button type="submit"
                            class="w-full flex items-center justify-center gap-3 px-8 py-4 bg-[#84A98C] text-[#F7F5F2] rounded-2xl text-sm font-bold hover:bg-[#84A98C]/90 transition-all shadow-xl shadow-[#84A98C]/20 active:scale-95 btn-submit">
                            <i class="fa-solid fa-paper-plane text-xs"></i>
                            Simpan Buku
                        </button>
                        <button type="reset" onclick="resetPreview()" class="w-full py-3 text-xs font-bold text-[#2F3E46]/30 hover:text-red-500 transition-colors uppercase tracking-widest">
                            Reset Form
                        </button>
                    </div>
                </div>

                <div class="px-6 py-4 bg-[#84A98C]/5 border border-[#84A98C]/10 rounded-2xl">
                    <p class="text-[10px] text-[#2F3E46]/50 leading-relaxed italic">
                        *Pastikan informasi yang dimasukkan sudah benar. Status ketersediaan akan diatur otomatis berdasarkan jumlah stok.
                    </p>
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
                    container.innerHTML = `<img src="${e.target.result}" class="w-full h-full object-cover">`;
                    container.classList.remove('border-dashed');
                    container.classList.add('border-solid', 'border-[#84A98C]');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function resetPreview() {
            const container = document.getElementById('preview-container');
            container.innerHTML = `
                <i class="fa-solid fa-cloud-arrow-up text-3xl text-[#84A98C]"></i>
                <div class="text-center">
                    <p class="text-xs font-bold text-[#2F3E46]">Pilih File Gambar</p>
                    <p class="text-[10px] text-[#2F3E46]/40 mt-1">PNG, JPG up to 2MB</p>
                </div>
            `;
            container.classList.add('border-dashed');
        }

        const form = document.querySelector('form');
        form.addEventListener('submit', function() {
            const btn = document.querySelector('.btn-submit');
            btn.innerHTML = `<i class="fa-solid fa-circle-notch animate-spin text-xs"></i> Menyimpan...`;
            btn.classList.add('opacity-80', 'cursor-not-allowed');
            btn.style.pointerEvents = 'none';
        });
    </script>
</x-admin-main>

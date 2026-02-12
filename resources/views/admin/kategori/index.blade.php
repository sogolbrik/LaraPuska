<x-admin-main title="Kategori Buku">
    <div class="mb-10 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
        <div class="space-y-1">
            <h1 class="font-display text-3xl font-bold text-[#2F3E46]">Kategori Buku</h1>
            <p class="text-[#2F3E46]/50 text-sm">Kelola kategori untuk mengelompokkan koleksi buku Anda.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.kategori.create') }}"
                class="flex items-center gap-2 px-5 py-2.5 bg-[#84A98C] text-[#F7F5F2] rounded-2xl text-sm font-bold hover:bg-[#84A98C]/90 transition-all shadow-lg shadow-[#84A98C]/20 active:scale-95">
                <i class="fa-solid fa-plus text-xs"></i>
                Tambah Kategori
            </a>
        </div>
    </div>

    <div class="bg-[#E9EDC9] rounded-[2.5rem] border border-black/5 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-black/5">
                        <th class="px-8 py-5 text-xs font-bold uppercase tracking-wider text-[#2F3E46]/40">Nama Kategori</th>
                        <th class="px-8 py-5 text-xs font-bold uppercase tracking-wider text-[#2F3E46]/40">Slug</th>
                        <th class="px-8 py-5 text-xs font-bold uppercase tracking-wider text-[#2F3E46]/40">Deskripsi</th>
                        <th class="px-8 py-5 text-xs font-bold uppercase tracking-wider text-[#2F3E46]/40 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-black/5">
                    @forelse ($kategori as $item)
                        <tr class="hover:bg-[#F7F5F2]/50 transition-colors group">
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-[#84A98C]/10 flex items-center justify-center text-[#84A98C]">
                                        <i class="fa-solid fa-tags text-sm"></i>
                                    </div>
                                    <span class="font-bold text-[#2F3E46]">
                                        {{ $item->nama }}
                                    </span>
                                </div>
                            </td>

                            <td class="px-8 py-5">
                                <span class="px-3 py-1 bg-[#F7F5F2] border border-black/5 rounded-lg text-xs font-mono text-[#2F3E46]/60">
                                    {{ $item->slug }}
                                </span>
                            </td>

                            <td class="px-8 py-5 text-sm text-[#2F3E46]/60 max-w-xs truncate">
                                {{ $item->deskripsi ?? '-' }}
                            </td>

                            <td class="px-8 py-5">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('admin.kategori.edit', $item->id) }}"
                                        class="p-2 rounded-lg bg-[#F7F5F2] text-[#84A98C] hover:bg-[#84A98C] hover:text-[#F7F5F2] transition-all shadow-sm">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>

                                    <form action="{{ route('admin.kategori.destroy', $item->id) }}" method="POST" id="delete-form-{{ $item->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete('{{ $item->id }}', '{{ $item->nama }}')"
                                            class="p-2 rounded-lg bg-[#F7F5F2] text-red-500 hover:bg-red-500 hover:text-white transition-all shadow-sm">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-8 py-10 text-center text-sm text-[#2F3E46]/50">
                                Belum ada data kategori.
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

        <div class="px-8 py-6 bg-[#E9EDC9] border-t border-black/5 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs font-bold text-[#2F3E46]/40 uppercase tracking-widest">
                Menampilkan {{ $kategori->count() }} dari {{ $kategori->total() }} Kategori
            </p>

            <div class="flex items-center gap-2">
                @if ($kategori->onFirstPage())
                    <span class="px-4 py-2 bg-[#F7F5F2]/50 border border-black/5 rounded-xl text-xs font-bold text-[#2F3E46]/20 cursor-not-allowed">
                        Prev
                    </span>
                @else
                    <a href="{{ $kategori->previousPageUrl() }}"
                        class="px-4 py-2 bg-[#F7F5F2] border border-black/5 rounded-xl text-xs font-bold text-[#2F3E46]/60 hover:bg-[#84A98C] hover:text-[#F7F5F2] transition-all">
                        Prev
                    </a>
                @endif

                @if ($kategori->hasMorePages())
                    <a href="{{ $kategori->nextPageUrl() }}"
                        class="px-4 py-2 bg-[#84A98C] text-[#F7F5F2] rounded-xl text-xs font-bold shadow-md shadow-[#84A98C]/20 hover:bg-[#84A98C]/90 transition-all">
                        Next
                    </a>
                @else
                    <span class="px-4 py-2 bg-[#F7F5F2]/50 border border-black/5 rounded-xl text-xs font-bold text-[#2F3E46]/20 cursor-not-allowed">
                        Next
                    </span>
                @endif
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id, name) {
            Swal.fire({
                title: '<span class="font-display">Hapus Kategori?</span>',
                html: `Anda akan menghapus kategori <b class="text-[#84A98C]">${name}</b>.<br><span class="text-xs opacity-50 italic">Tindakan ini tidak dapat dibatalkan.</span>`,
                icon: 'warning',
                iconColor: '#84A98C',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus Sekarang',
                cancelButtonText: 'Batal',
                reverseButtons: true,
                background: '#F7F5F2',
                color: '#2F3E46',
                backdrop: `rgba(47, 62, 70, 0.4) blur(4px)`,
                showClass: {
                    popup: 'animate__animated animate__fadeInUp animate__faster'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutDown animate__faster'
                },
                customClass: {
                    popup: 'rounded-[2.5rem] border border-black/5 shadow-2xl p-8',
                    title: 'text-2xl font-bold',
                    htmlContainer: 'text-sm font-medium leading-relaxed',
                    confirmButton: 'px-8 py-3 bg-[#84A98C] text-[#F7F5F2] rounded-2xl text-sm font-bold shadow-lg shadow-[#84A98C]/20 hover:scale-105 transition-all',
                    cancelButton: 'px-8 py-3 mx-3 bg-white text-[#2F3E46]/50 rounded-2xl text-sm font-bold hover:bg-red-50 hover:text-red-500 transition-all'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>
</x-admin-main>

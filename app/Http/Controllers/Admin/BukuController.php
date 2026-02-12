<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::with('kategori')->latest()->paginate(10);
        return view('admin.buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::select('id', 'nama')->get();
        return view('admin.buku.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'kategori_id' => 'required|exists:kategoris,id',
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'deskripsi' => 'nullable|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'stok' => 'required|integer|min:0',
        ]);

        $extension = $request->file('cover')->getClientOriginalExtension();
        $cover = 'cover_' . time() . '_' . uniqid() . '.' . $extension;
        $validation['cover'] = $request->file('cover')->storePubliclyAs('cover', $cover, 'public');

        Buku::create($validation);
        return redirect()->route('admin.buku.index')->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buku = Buku::with('kategori')->findOrFail($id);
        $kategori = Kategori::select('id', 'nama')->get();
        return view('admin.buku.edit', compact('buku', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buku = Buku::findOrFail($id);
        $validation = $request->validate([
            'kategori_id' => 'required|exists:kategoris,id',
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'deskripsi' => 'nullable|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'stok' => 'required|integer|min:0',
        ]);

        if ($request->hasFile('cover')) {
            if ($buku->cover) {
                Storage::disk('public')->delete($buku->cover);
            }

            $extension = $request->file('cover')->getClientOriginalExtension();
            $cover = 'cover_' . time() . '_' . uniqid() . '.' . $extension;
            $validation['cover'] = $request->file('cover')->storePubliclyAs('cover', $cover, 'public');
        }

        $buku->update($validation);
        return redirect()->route('admin.buku.index')->with('success', 'Buku berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::findOrFail($id);
        if ($buku->cover) {
            Storage::disk('public')->delete($buku->cover);
        }
        $buku->delete();
        return redirect()->route('admin.buku.index')->with('success', 'Buku berhasil dihapus');
    }
}

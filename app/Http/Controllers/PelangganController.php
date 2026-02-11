<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::simplePaginate(2);
        return view('pelanggan.index', compact('pelanggans'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'No_Pelanggan'     => 'required|string|max:20',
            'Nama_Pelanggan' => 'required|string|max:255',
            'Alamat'        => 'required|string',
        ]);

        Pelanggan::create([
            'No_Pelanggan'     => $request->No_Pelanggan,
            'Nama_Pelanggan' => $request->Nama_Pelanggan,
            'Alamat'        => $request->Alamat,
        ]);

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Pelanggan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'No_Pelanggan'     => 'required|string|max:20',
            'Nama_Pelanggan' => 'required|string|max:255',
            'Alamat'        => 'required|string',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update([
            'No_Pelanggan'     => $request->No_Pelanggan,
            'Nama_Pelanggan' => $request->Nama_Pelanggan,
            'Alamat'        => $request->Alamat,
        ]);

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Pelanggan berhasil diupdate');
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Pelanggan berhasil dihapus');
    }
}
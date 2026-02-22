<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::paginate(5);
        return view('penjualan.index', compact('penjualans'));
    }

    public function create()
    {
        $pelanggans = Pelanggan::all();
        return view('penjualan.create', compact('pelanggans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'faktur' => 'required|integer',
            'NoPelanggan' => 'required',
            'TanggalPenjualan' => 'required|date'
        ]);

        Penjualan::create([
            'faktur' => $request->faktur,
            'NoPelanggan' => $request->NoPelanggan,
            'TanggalPenjualan' => $request->TanggalPenjualan
        ]);

        return redirect()->route('penjualan.index')
            ->with('success', 'Data berhasil ditambah');
    }

    public function edit($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $pelanggans = Pelanggan::all();

        return view('penjualan.edit', compact('penjualan','pelanggans'));
    }

    public function update(Request $request, $id)
    {
        $penjualan = Penjualan::findOrFail($id);

        $penjualan->update([
            'faktur' => $request->faktur,
            'NoPelanggan' => $request->NoPelanggan,
            'TanggalPenjualan' => $request->TanggalPenjualan,
        ]);

        return redirect()->route('penjualan.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $data = Penjualan::findOrFail($id);
        $data->delete();

        return redirect()->route('penjualan.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class kendaraanController extends Controller
{
    //
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('backend.jeniskendaraan.index', compact('kendaraans'));
    }
    public function create()
    {
        return view('backend.jeniskendaraan.tambah_jk');
    }
    public function edit($id)
{
    $dataKendaraan = Kendaraan::find($id);
    return view('backend.jeniskendaraan.edit', compact('dataKendaraan'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'id' => 'required',
        'nama' => 'required|string',
        'harga' => 'required|numeric',
    ]);

    $dataKendaraan = Kendaraan::find($id);
    $dataKendaraan->update($request->all());

    return redirect()->route('jenis_kendaraan.index')->with('success', 'Category updated successfully');
}

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('jenis_kendaraan.index')
            ->with('success', 'Kendaraan berhasil ditambahkan!');
    }
    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();

        if ($kendaraan) {
            return redirect()
                ->route('jenis_kendaraan.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('jenis_kendaraan.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}

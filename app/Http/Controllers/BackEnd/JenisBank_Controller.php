<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\nama_bank;
use Illuminate\Http\Request;

class JenisBank_Controller extends Controller
{
    //
    public function index()
    {
        $jenis_bank = nama_bank::all();
        return view('backend.jenis_bank.index', compact('jenis_bank'));
    }
    public function create()
    {
        return view('backend.jenis_bank.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_bank' => 'required',
            'nomer_rekening' => 'required|integer',
        ]);

        nama_bank::create($request->all());

        return redirect()->route('jenis_bank.index')
            ->with('success', 'Kendaraan berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $jenis_bank = nama_bank::find($id);
        return view('backend.jenis_bank.edit', compact('jenis_bank'));
    }
    public function update(Request $request, $id)
{
    $request->validate([
        'id' => 'required',
        'nama_bank' => 'required',
        'nomer_rekening' => 'required',
    ]);

    $jenis_bank = nama_bank::find($id);
    $jenis_bank->update($request->all());

    return redirect()->route('jenis_bank.index')->with('success', 'Category updated successfully');
}
public function destroy($id)
    {
        $jenis_bank = nama_bank::findOrFail($id);
        $jenis_bank->delete();

        if ($jenis_bank) {
            return redirect()
                ->route('jenis_bank.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('jenis_bank.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}

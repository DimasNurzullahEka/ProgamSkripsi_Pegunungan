<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\backend\peraturan;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Province;

class Peraturan_controller extends Controller
{
    //
    public function index()
    {
        $peraturan = peraturan::all();
        return view('backend.peraturan.index', compact('peraturan'));

    }
    public function create()
    {
        return view('backend.peraturan.tambah');
    }
    public function store(Request $request)
    {
        $request->validate([
            'list_peraturan' => 'required',

        ]);

        peraturan::create($request->all());

        return redirect()->route('peraturan.index')
            ->with('success', 'data Peraturan  berhasil ditambahkan!');
    }
    public function destroy($id)
    {
        $peraturan = peraturan::findOrFail($id);
        $peraturan->delete();

        if ($peraturan) {
            return redirect()
                ->route('peraturan.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('peraturan.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
    public function booking()
    {
        $setting = peraturan::all();
        return view('frontend.booking', compact('setting'));

    }
    public function f_update(Request $request, Peraturan $setting)
{
    $setting->update(['is_checked' => $request->has('is_checked')]);
    return redirect()->route('dataForm.frontend');
}
public function dataForm()
{
    return view('frontend.DataForm');
    // $provinces = Province::pluck('name', 'id');
    // $cities = City::pluck('name', 'id');
    // return view('frontend.DataForm', [
    //     'provinces' => $provinces,
    //     'cities' => $cities,
    // ]);

}
}

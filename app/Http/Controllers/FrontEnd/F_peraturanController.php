<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\backend\peraturan;
use Illuminate\Http\Request;

class F_peraturanController extends Controller
{
    //
    public function index()
    {
        $setting = peraturan::first(); // Replace with your actual logic to retrieve the setting
        return view('frontend.booking', compact('setting'));

    }

    public function update(Request $request, Peraturan $peraturan)
    {
        $peraturan->update(['is_checked' => $request->has('is_checked')]);
        return redirect()->route('peraturans.index');
    }

}

<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\FrontEnd\Anggota;
use App\Models\FrontEnd\PendaftaraanPendakian;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    //
        public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nomor_telepon' => 'nullable|string|max:20',
            'jenis_kelamin' => 'nullable|string|in:laki-laki,perempuan',
            // Add validation rules for other fields if needed
        ]);

        // Process the form data
        // For example, you can save the main member data to your database
        $member = new PendaftaraanPendakian();
        $member->nama_lengkap = $validatedData['nama_lengkap'];
        $member->email = $validatedData['email'];
        $member->nomor_telepon = $validatedData['nomor_telepon'];
        $member->jenis_kelamin = $validatedData['jenis_kelamin'];
        // Add other fields as needed
        $member->save();


    if ($request->has('anggota')) {
        foreach ($request->input('anggota') as $anggotaData) {
            $anggota = new Anggota($anggotaData);
            $member->anggota()->save($anggota);
        }
    }
        // Redirect or respond as needed
        return redirect()->route('home');
    }
}

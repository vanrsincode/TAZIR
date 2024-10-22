<?php

namespace App\Http\Controllers;

use App\Models\Kelola\Violasi;
use App\Models\Pelanggaran;
use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PelanggaranController extends Controller
{
    public function create()
    {
        return view('admin-panel.page.pelanggaran.input');
    }

    public function store(Request $request)
    {
        $pesan_validasi = 'harus diisi!';
        $validator = Validator::make(
            $request->all(),
            [
                'santri'            => 'required',
                'larangan'          => 'required',
                'pelanggaran'       => 'required',
                'tanggal'           => 'required',
                'ft_pelanggaran'    => 'sometimes|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            ],
            [
                'santri.required'           => 'Santri ' . $pesan_validasi,
                'larangan.required'         => 'Larangan ' . $pesan_validasi,
                'pelanggaran.required'      => 'Pelanggaran ' . $pesan_validasi,
                'tanggal.required'          => 'Tanggal ' . $pesan_validasi,
                'ft_pelanggaran.image'     => 'Foto Pelanggaran harus berupa gambar.',
                'ft_pelanggaran.mimes'     => 'Foto Pelanggaran harus berupa file dengan tipe: jpeg, png, jpg, gif, webp.',
                'ft_pelanggaran.max'       => 'Foto Pelanggaran tidak boleh lebih besar dari 2 MB.',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $data = [
            'tanggal'           => $request->tanggal,
            'santri_id'         => $request->santri,
            'violasi_id'        => $request->pelanggaran,
            'foto_pelanggaran'   => null
        ];

        if ($request->hasFile('ft_pelanggaran')) {
            $file = $request->file('ft_pelanggaran');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pelanggaran-photos', $fileName);
            $data['foto_pelanggaran'] = 'pelanggaran-photos/' . $fileName;
        }

        Pelanggaran::create($data);
        return response()->json(['succes' => true], 200);
    }
}

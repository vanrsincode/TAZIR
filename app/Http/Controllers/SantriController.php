<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SantriController extends Controller
{
    public function validateSantri(Request $request, $santri = null)
    {
        $pesan_validasi = 'harus diisi!';
        $rules = [
            'nis'           => ['required', 'unique:tb_santri,nis' . ($santri ? ',' . $santri->id : '')],
            'nama'          => 'required',
            'kelas'         => 'required',
            'jk'            => 'required',
            'alamat'        => 'required',
            'wali_santri'   => 'required',
            'no_wali'       => 'required',
            'ft_santri'   => 'sometimes|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ];
        $messages = [
            'nis.required'          => 'NIS ' . $pesan_validasi,
            'nis.unique'            => 'NIS sudah ada atau sudah terpakai.',
            'nama.required'         => 'Nama ' . $pesan_validasi,
            'kelas.required'        => 'Kelas ' . $pesan_validasi,
            'jk.required'           => 'Jenis Kelamin ' . $pesan_validasi,
            'alamat.required'       => 'Alamat ' . $pesan_validasi,
            'wali_santri.required'  => 'Wali Santri ' . $pesan_validasi,
            'no_wali.required'      => 'No. Wali ' . $pesan_validasi,
            'ft_santri.image'     => 'Foto Santri harus berupa gambar.',
            'ft_santri.mimes'     => 'Foto Santri harus berupa file dengan tipe: jpeg, png, jpg, gif, webp.',
            'ft_santri.max'       => 'Foto Santri tidak boleh lebih besar dari 2 MB.',
        ];
        return Validator::make($request->all(), $rules, $messages);
    }

    public function index()
    {
        return view('admin-panel.page.data-santri.index');
    }

    public function store(Request $request)
    {
        $validator = $this->validateSantri($request);
        if ($validator->fails()) {return response()->json(['errors' => $validator->errors()]);}

        $data = [
            'nis'           => $request->nis,
            'nama_santri'   => $request->nama,
            'jk_santri'     => $request->jk,
            'alamat_santri' => $request->alamat,
            'nama_wali'     => $request->wali_santri,
            'tlp_wali'      => $request->no_wali,
            'kelas_id'      => $request->kelas,
            'foto_santri'   => null
        ];

        if ($request->hasFile('ft_santri')) {
            $file = $request->file('ft_santri');
            $fileName = time() . '_' . $request->nama . '_' . $file->getClientOriginalName();
            $file->storeAs('public/santri-photos', $fileName);
            $data['foto_santri'] = 'santri-photos/' . $fileName;
        }

        Santri::create($data);
        return response()->json(['succes'=>true], 200);
    }

    public function show(Request $request, string $id)
    {
        if ($request->ajax()) {
            $data = Santri::with('kelas')->findOrFail($id);
            return response()->json(['data' => $data], 200);
        }
    }

    public function update(Request $request, $id)
    {
        $santri = Santri::findOrFail($id);
        $validator = $this->validateSantri($request, $santri);
        if ($validator->fails()) {return response()->json(['errors' => $validator->errors()]);}

        $data = [
            'nis'           => $request->nis,
            'nama_santri'   => $request->nama,
            'jk_santri'     => $request->jk,
            'alamat_santri' => $request->alamat,
            'nama_wali'     => $request->wali_santri,
            'tlp_wali'      => $request->no_wali,
            'kelas_id'      => $request->kelas
        ];

        if ($request->hasFile('ft_santri')) {
            if ($santri->foto_santri && Storage::exists('public/' . $santri->foto_santri)) {
                Storage::delete('public/' . $santri->foto_santri);
            }

            $file = $request->file('ft_santri');
            $fileName = time() . '_' . $request->nama . '_' . $file->getClientOriginalName();
            $file->storeAs('public/santri-photos', $fileName);
            $data['foto_santri'] = 'santri-photos/' . $fileName;
        }

        $santri->update($data);
        return response()->json(['succes'=>true], 200);
    }

    public function destroy(string $id)
    {
        $santri = Santri::findOrFail($id);
        
        if ($santri->foto_santri && Storage::exists('public/' . $santri->foto_santri)) {
            Storage::delete('public/' . $santri->foto_santri);
        }

        $santri->delete();
        return response()->json(['success' => true], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Kelola\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KelasController extends Controller
{
    public function index()
    {
        return view('admin-panel.page.data-sistem.kelas-madrasah.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama_kelas'     => 'required'
            ],
            [
                'nama_kelas.required'    => 'Kelas harus diisi!',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
        ]);

        return response()->json(['succes'=>true], 200);
    }

    public function show(Request $request, string $id)
    {
        if ($request->ajax()) {
            $kelas = Kelas::findOrFail($id);
            return response()->json(['data' => $kelas], 200);
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama_kelas'     => 'required'
            ],
            [
                'nama_kelas'    => 'Kelas harus diisi!'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $kelas = Kelas::findOrFail($id);

        $kelas->update([
            'nama_kelas'   => $request->nama_kelas,
        ]);

        return response()->json(['success' => true], 200);
    }

    public function destroy(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return response()->json(['success' => true], 200);
    }
}

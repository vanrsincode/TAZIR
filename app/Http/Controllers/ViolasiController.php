<?php

namespace App\Http\Controllers;

use App\Models\Kelola\Violasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ViolasiController extends Controller
{
    public function index()
    {
        return view('admin-panel.page.data-sistem.klasifikasi-violasi.index', [
            'larangan' => Violasi::$larangan,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama'              => 'required',
                'larangan'          => 'required',
                'level'             => 'required',
                'batas_maksimal'    => 'required'
            ],
            [
                'nama.required'             => 'Nama harus diisi!',
                'larangan.required'         => 'Larangan harus diisi!',
                'level.required'            => 'Level harus diisi!',
                'batas_maksimal.required'   => 'Batas Maksimal harus diisi!'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        Violasi::create([
            'nama_violasi'  => $request->nama,
            'larangan'      => $request->larangan,
            'maks'          => $request->batas_maksimal,
            'level_id'      => $request->level
        ]);

        return response()->json(['success' => true], 200);
    }

    public function show(Request $request, string $id)
    {
        // if ($request->ajax()) {
            $violasi = Violasi::with('level')->findOrFail($id);
            return response()->json(['data' => $violasi], 200);
        // }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama'              => 'required',
                'larangan'          => 'required',
                'level'             => 'required',
                'batas_maksimal'    => 'required'
            ],
            [
                'nama.required'             => 'Nama harus diisi!',
                'larangan.required'         => 'Larangan harus diisi!',
                'level.required'            => 'Level harus diisi!',
                'batas_maksimal.required'   => 'Batas Maksimal harus diisi!'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $violasi = Violasi::findOrFail($id);

        $violasi->update([
            'nama_violasi'  => $request->nama,
            'larangan'      => $request->larangan,
            'maks'          => $request->batas_maksimal,
            'level_id'      => $request->level
        ]);

        return response()->json(['success' => true], 200);
    }

    public function destroy(string $id)
    {
        $violasi = Violasi::findOrFail($id);
        $violasi->delete();

        return response()->json(['success' => true], 200);
    }
}

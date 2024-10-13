<?php

namespace App\Http\Controllers;

use App\Models\Kelola\Izin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IzinController extends Controller
{
    public function index()
    {
        return view('admin-panel.page.data-sistem.izin.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama_izin'     => 'required',
                'jangka_waktu'     => 'required'
            ],
            [
                'nama_izin.required'    => 'Nama Izin harus diisi!',
                'jangka_waktu.required'    => 'Jangka waktu harus diisi!'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        Izin::create([
            'nama_izin' => $request->nama_izin,
            'jangka_waktu' => $request->jangka_waktu
        ]);

        return response()->json(['succes'=>true], 200);
    }

    public function show(Request $request, string $id)
    {
        if ($request->ajax()) {
            $izin = Izin::findOrFail($id);
            return response()->json(['data' => $izin], 200);
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama_izin'     => 'required',
                'jangka_waktu'     => 'required'
            ],
            [
                'nama_izin.required'    => 'Nama Izin harus diisi!',
                'jangka_waktu.required'    => 'Jangka waktu harus diisi!'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $izin = Izin::findOrFail($id);

        $izin->update([
            'nama_izin' => $request->nama_izin,
            'jangka_waktu' => $request->jangka_waktu
        ]);

        return response()->json(['success' => true], 200);
    }

    public function destroy(string $id)
    {
        $izin = Izin::findOrFail($id);
        $izin->delete();

        return response()->json(['success' => true], 200);
    }
}

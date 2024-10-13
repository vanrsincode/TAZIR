<?php

namespace App\Http\Controllers;

use App\Models\Kelola\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LevelController extends Controller
{
    public function index()
    {
        return view('admin-panel.page.data-sistem.level-pelanggaran.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'level'     => 'required',
                'denda'     => 'required',
                'hukuman'   => 'required'
            ],
            [
                'level.required'    => 'Level harus diisi!',
                'denda.required'    => 'Denda harus diisi!',
                'hukuman.required'  => 'Hukuman harus diisi!'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        Level::create([
            'level' => $request->level,
            'denda' => $request->denda,
            'hukuman'   => $request->hukuman
        ]);

        return response()->json(['succes'=>true], 200);
    }

    public function show(Request $request, string $id)
    {
        if ($request->ajax()) {
            $level = Level::findOrFail($id);
            return response()->json(['data' => $level], 200);
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'level'     => 'required',
                'denda'     => 'required',
                'hukuman'   => 'required'
            ],
            [
                'level.required'    => 'Level harus diisi!',
                'denda.required'    => 'Denda harus diisi!',
                'hukuman.required'  => 'Hukuman harus diisi!'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $level = Level::findOrFail($id);

        $level->update([
            'level'   => $request->level,
            'denda'    => $request->denda,
            'hukuman' => $request->hukuman
        ]);

        return response()->json(['success' => true], 200);
    }

    public function destroy(string $id)
    {
        $level = Level::findOrFail($id);
        $level->delete();

        return response()->json(['success' => true], 200);
    }
}

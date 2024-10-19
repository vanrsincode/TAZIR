<?php

namespace App\Http\Controllers\Component;

use App\Http\Controllers\Controller;
use App\Models\Kelola\Kelas;
use App\Models\Kelola\Level;
use Illuminate\Http\Request;

class Select2Controller extends Controller
{
    public function getSelectLevel(Request $request)
    {
        $term = $request->input('term');
        $data = Level::where(function ($query) use ($term) {
                        $query->where('level', 'like', '%' . $term . '%');
                    })
                    ->orderBy('level', 'asc')
                    // ->limit(5)
                    ->get();
        return response()->json($data);
    }

    public function getSelectKelas(Request $request)
    {
        $term = $request->input('term');
        $data = Kelas::where(function ($query) use ($term) {
                        $query->where('nama_kelas', 'like', '%' . $term . '%');
                    })
                    ->orderBy('nama_kelas', 'asc')
                    ->get();
        return response()->json($data);
    }
}

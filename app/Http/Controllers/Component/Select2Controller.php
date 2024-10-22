<?php

namespace App\Http\Controllers\Component;

use App\Http\Controllers\Controller;
use App\Models\Kelola\Kelas;
use App\Models\Kelola\Level;
use App\Models\Kelola\Violasi;
use App\Models\Santri;
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

    public function getSelectLarangan(Request $request)
    {
        $term = $request->input('term');
        $data = Violasi::where('larangan', 'like', '%' . $term . '%')
        ->distinct()
        ->orderBy('larangan', 'asc')
        ->pluck('larangan');
        return response()->json($data);
    }

    public function getSelectPelanggaran(Request $request, $id)
    {
        $term = $request->input('term');
        $data = Violasi::where('larangan', $id)
        ->where('nama_violasi', 'like', '%' . $term . '%')
        ->distinct()
        ->orderBy('nama_violasi', 'asc')
        ->get(['id', 'nama_violasi']);
        return response()->json($data);
    }

    public function getSelectSantri(Request $request)
    {
        $term = $request->input('term');
        $data = Santri::with('kelas')->where(function ($query) use ($term) {
            $query->where('nama_santri', 'like', '%' . $term . '%')
                ->orWhere('nis', 'like', '%' . $term . '%')
                ->orWhereHas('kelas', function ($kelasQuery) use ($term) {
                    $kelasQuery->where('nama_kelas', 'like', '%' . $term . '%');
                });
        })
        ->orderBy('nama_santri', 'asc')
        ->get();
        return response()->json($data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Kelola\Violasi;
use App\Models\Santri;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    public function create(Request $request)
    {
        $santri = Santri::all();
        $pelanggaran = Violasi::all();
        $larangan = Violasi::distinct()->pluck('larangan');

        return view('admin-panel.page.pelanggaran.input', [
            'dataSantri'    => $santri,
            'dataPelanggaran'   => $pelanggaran,
            'dataLarangan'      => $larangan
        ]);
    }
}

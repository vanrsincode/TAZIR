<?php

namespace App\Http\Controllers\Component;

use App\Http\Controllers\Controller;
use App\Models\Kelola\Izin;
use App\Models\Kelola\Kelas;
use App\Models\Kelola\Level;
use App\Models\Kelola\Violasi;
use App\Models\Santri;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DataTableController extends Controller
{
    public function dataTableLevel(Request $request)
    {
        // if ($request->ajax()) {
            $level = Level::orderBy('id', 'desc')->get();
            return DataTables::of($level)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<button data-id="' . $row->id . '"  class="btn btn-warning btn-sm width-btn text-white editData" title="Edit Data"><i class="far fa-edit"></i></button> ';
                    $btn .= '<button data-id="' . $row->id . '" data-nama="' . $row->level . '" class="btn btn-danger btn-sm width-btn text-white deleteData" title="Hapus Data"><i class="far fa-trash-alt"></i></button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        // }
    }

    public function dataTableKelas(Request $request)
    {
        // if ($request->ajax()) {
            $kelas = Kelas::orderBy('id', 'desc')->get();
            return DataTables::of($kelas)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<button data-id="' . $row->id . '"  class="btn btn-warning btn-sm width-btn text-white editData" title="Edit Data"><i class="far fa-edit"></i></button> ';
                    $btn .= '<button data-id="' . $row->id . '" data-nama="' . $row->nama_kelas . '" class="btn btn-danger btn-sm width-btn text-white deleteData" title="Hapus Data"><i class="far fa-trash-alt"></i></button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        // }
    }

    public function dataTableIzin(Request $request)
    {
        // if ($request->ajax()) {
            $izin = Izin::orderBy('id', 'desc')->get();
            return DataTables::of($izin)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<button data-id="' . $row->id . '"  class="btn btn-warning btn-sm width-btn text-white editData" title="Edit Data"><i class="far fa-edit"></i></button> ';
                    $btn .= '<button data-id="' . $row->id . '" data-nama="' . $row->nama_izin . '" class="btn btn-danger btn-sm width-btn text-white deleteData" title="Hapus Data"><i class="far fa-trash-alt"></i></button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        // }
    }

    public function dataTableViolasi(Request $request)
    {
        // if ($request->ajax()) {
            $violasi = Violasi::orderBy('id', 'desc')->get();
            return DataTables::of($violasi)
                ->addIndexColumn()
                ->addColumn('level', fn($row) => $row->level->level)
                ->addColumn('denda', fn($row) => $row->level->denda)
                ->addColumn('hukuman', fn($row) => $row->level->hukuman)
                ->addColumn('action', function ($row) {
                    $btn = '<button data-id="' . $row->id . '"  class="btn btn-warning btn-sm width-btn text-white editData" title="Edit Data"><i class="far fa-edit"></i></button> ';
                    $btn .= '<button data-id="' . $row->id . '" data-nama="' . $row->nama_violasi . '" class="btn btn-danger btn-sm width-btn text-white deleteData" title="Hapus Data"><i class="far fa-trash-alt"></i></button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        // }
    }

    public function dataTableSantri(Request $request, $id)
    {
        // if ($request->ajax()) {
            $santri = Santri::where('jk_santri', $id)->orderBy('id', 'desc')->get();
            return DataTables::of($santri)
                ->addIndexColumn()
                ->addColumn('nama_kelas', fn($row) => $row->kelas->nama_kelas)
                ->addColumn('foto', function ($row) {
                    if ($row->foto_santri) {
                        $fotoUrl = asset('file/' . $row->foto_santri);
                        return '<img src="' . $fotoUrl . '" alt="Project Photo" width="100" height="auto" />';
                    } else {
                        return 'No image';
                    }
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="dropdown d-inline">
                        <button class="btn btn-theme btn-sm dropdown-toggle text-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opsi
                        </button>
                        <div class="dropdown-menu">
                            <a href="'. route('data-santri.detail.index') .'" class="dropdown-item has-icon detailData"><i class="fas fa-eye"></i> Detail</a>
                            <a data-id="' . $row->id . '" class="dropdown-item has-icon editData" href="javascript:;"><i class="far fa-edit"></i> Edit Data</a>
                            <a data-id="' . $row->id . '" data-nama="' . $row->nama_santri . '" class="dropdown-item has-icon deleteData" href="javascript:;"><i class="far fa-trash-alt"></i> Hapus Data</a>
                        </div>
                        </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'foto'])
                ->make(true);
        // }
    }
}

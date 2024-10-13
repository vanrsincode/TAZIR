<?php

namespace App\Http\Controllers\Component;

use App\Http\Controllers\Controller;
use App\Models\Kelola\Izin;
use App\Models\Kelola\Kelas;
use App\Models\Kelola\Level;
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
}

<?php

namespace App\Http\Controllers\Component;

use App\Http\Controllers\Controller;
use App\Models\Kelola\Level;
use Illuminate\Http\Request;

class Select2Controller extends Controller
{
    public function getSelectLevel(Request $request)
    {
        $term = $request->input('term');
        $level = Level::where(function ($query) use ($term) {
                        $query->where('level', 'like', '%' . $term . '%');
                    })
                    ->orderBy('level', 'asc')
                    // ->limit(5)
                    ->get();
        return response()->json($level);
    }
}

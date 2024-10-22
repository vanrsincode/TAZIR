<?php

namespace App\Models;

use App\Models\Kelola\Kelas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $table = 'tb_santri';
    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function pelanggaran()
    {
        return $this->hasMany(Pelanggaran::class);
    }
}

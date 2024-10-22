<?php

namespace App\Models;

use App\Models\Kelola\Violasi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $table = 'tb_pelanggaran';
    protected $guarded = [];

    public function santri()
    {
        return $this->belongsTo(Santri::class, 'santri_id');
    }

    public function violasi()
    {
        return $this->belongsTo(Violasi::class, 'violasi_id');
    }
}

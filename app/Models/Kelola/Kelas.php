<?php

namespace App\Models\Kelola;

use App\Models\Santri;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'm_kelas';
    protected $guarded = [];

    public function santri()
    {
        return $this->hasOne(Santri::class);
    }
}

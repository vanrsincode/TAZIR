<?php

namespace App\Models\Kelola;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $table = 'm_level';
    protected $guarded = [];

    public function violasi()
    {
        return $this->hasMany(Violasi::class);
    }
}

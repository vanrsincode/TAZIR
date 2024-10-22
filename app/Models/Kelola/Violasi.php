<?php

namespace App\Models\Kelola;

use App\Models\Pelanggaran;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violasi extends Model
{
    use HasFactory;
    protected $table = 'm_violasi';
    protected $guarded = [];

    public static $larangan = [
        1 => 'Administrasi',
        2 => 'Organisasi',
        3 => 'Keamanan',
        4 => 'Etika',
        5 => 'Kebersihan/Kesehatan/Fasilitas',
        6 => 'Pendidikan dan Ibadah',
    ];

    // public function getLarangan()
    // {
    //     return self::$larangan[$this->larangan] ?? '';
    // }

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function pelanggaran()
    {
        return $this->hasMany(Pelanggaran::class);
    }
}

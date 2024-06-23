<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kamar', 'id_pasien', 'tanggal_check_in', 'tanggal_check_out'
    ];

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}

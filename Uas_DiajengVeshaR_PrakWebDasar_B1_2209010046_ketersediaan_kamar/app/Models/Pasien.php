<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'dob', 'id_tipe_pasien', 'id_status_pasien'
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function type()
    {
        return $this->belongsTo(TipePasien::class, 'id_tipe_pasien');
    }

    public function status()
    {
        return $this->belongsTo(StatusPasien::class, 'id_status_pasien');
    }
}

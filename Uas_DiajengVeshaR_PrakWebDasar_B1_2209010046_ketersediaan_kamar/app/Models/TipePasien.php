<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipePasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'type'
    ];

    public function pasien()
    {
        return $this->hasMany(Pasien::class);
    }
}

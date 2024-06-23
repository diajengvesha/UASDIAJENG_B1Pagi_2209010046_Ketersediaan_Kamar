<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasRuangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kamar', 'id_fasilitas'
    ];
}

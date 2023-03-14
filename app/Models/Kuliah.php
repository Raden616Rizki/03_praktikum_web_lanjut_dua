<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuliah extends Model
{
    use HasFactory;

    protected $table = 'kuliahs';
    protected $primaryKey = 'id_kuliah';

    protected $fillable = [
        'id_profil',
        'waktu',
        'tanggal'
    ];
}

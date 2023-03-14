<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profils';
    protected $primaryKey = 'id_profil';

    protected $fillable = [
        'nama',
        'slug',
        'pendidikan',
        'alamat'
    ];

    public static function getBySlug($slug)
    {
        return Profil::where([
            'slug' => $slug
        ])->first();
    }

    public static function getId($slug) {
        return Profil::where([
            'slug' => $slug
        ], 'id_profil')->first();
    }
}

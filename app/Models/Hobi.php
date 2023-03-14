<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profil;

class Hobi extends Model
{
    use HasFactory;
    protected $table = 'hobis';
    protected $primaryKey = 'id_hobi';

    protected $fillable = [
        'id_profil',
        'gambar',
        'hobi'
    ];

    public static function getBySlug($slug)
    {
        $id_profil = Profil::getId($slug);
        echo "<script>console.log('{$id_profil}' );</script>";
        return Hobi::where([
            'id_profil' => $id_profil
        ])->get();
    }
}

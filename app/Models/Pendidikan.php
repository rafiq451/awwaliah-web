<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    // use HasFactory;
    protected $fillable = ["nama","logo","jenis_pendidikan"];

    // Define the hasMany relationship to the KontenPendidikan model
    public function kontenPendidikans()
    {
        return $this->hasMany(KontenPendidikan::class, 'id_pendidikan');
    }
}

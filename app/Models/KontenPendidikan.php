<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontenPendidikan extends Model
{
     // use HasFactory;
    protected $fillable = ["id_pendidikan","gambar","sejarah","visi","misi", "tujuan"];

     // Define the belongsTo relationship to the Pendidikan model
    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'id_pendidikan');
    }
}

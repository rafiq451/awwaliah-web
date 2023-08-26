<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaknaLogo extends Model
{
    use HasFactory;
    protected $fillable = ['id_pendidikan','makna_bentuk','makna_warna'];

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'id_pendidikan');
    }
}

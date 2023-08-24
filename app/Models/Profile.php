<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['id_pendidikan',
        'nama_sekolah',
        'npsn',
        'status_sekolah',
        'akreditasi',
        'alamat_sekolah',
        'no_telepon',
        'no_fax',
        'email',
    ];

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'id_pendidikan');
    }
}

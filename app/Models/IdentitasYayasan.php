<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasYayasan extends Model
{
    use HasFactory;
    protected $table = 'identitasYayasans';
    protected $fillable = ['nama','logo','makna_bentuk','makna_warna'];
}

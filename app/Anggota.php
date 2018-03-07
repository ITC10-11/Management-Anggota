<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = "anggota";
    protected $fillable = [
        "nama_lengkap", 
        "kelas", 
        "divisi", 
        "username", 
        "password", 
        "photo", 
        "biodata", 
        "alamat", 
        "tgl_lahir", 
        "created_at", 
        "updated_at"
    ];
}

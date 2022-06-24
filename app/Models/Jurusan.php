<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_jurusan',
        'fakultas',
        'jumlah_sks',
        'kuota',
    ];
}

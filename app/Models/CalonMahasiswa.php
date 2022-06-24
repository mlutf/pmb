<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'calonmahasiswa';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_mahasiswa',
        'jenis_kelamin',
        'tgl',
        'alamat',
        'no_hp',
        'asal_sekolah',
        'email',
        'id_jurusan',
        'biaya',
    ];
    public function datajurusan()
    {
        return $this->hasOne(Jurusan::class, 'id', 'id_jurusan');
    }
}

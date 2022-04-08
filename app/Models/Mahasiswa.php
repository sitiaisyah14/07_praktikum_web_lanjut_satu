<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;
use App\Models\MataKuliah;

class Mahasiswa extends Model //Definisi model
{
    protected $table ="mahasiswas"; //Eloquent akan membuat model mahasiswa
    public $timestamps = false;
    protected $primaryKey ='nim'; //Memanggil isi DB dengan primarykey

    protected $fillable = [
        'nim',
        'nama',
        'kelas_id',
        'jurusan',
        'no_handphone',
    ];
    use HasFactory;

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function matakuliah(){
        return $this->belongsToMany(MataKuliah::class,'mahasiswa_matakuliah','mahasiswa_id', 'matakuliah_id')->withPivot('nilai');
    }
}




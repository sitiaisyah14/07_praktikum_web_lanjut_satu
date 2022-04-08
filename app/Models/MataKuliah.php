<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MataKuliah extends Model
{
    use HasFactory;
    protected $table='matakuliah';
    protected $primaryKey ='id';

    public function mahasiswa(){
        return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_matakuliah', 'matakuliah_id', 'mahasiswa_id')->withPivot('nilai');
    }
    //pivot untuk menampilkan kolom yang gak ada relasi kemana-mana

}

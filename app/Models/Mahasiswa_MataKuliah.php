<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Mahasiswa_MataKuliah extends Pivot
{
    use HasFactory;

    protected $table='mahasiswa_matakuliah';
    protected $primaryKey = 'id';

    public function mahasiswa_matakuliah()
    {
        return $this->belongsToMany(Mahasiswa::class,Mahasiswa_MataKuliah::class,'mahasiswa_id','matakuliah_id');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }
}

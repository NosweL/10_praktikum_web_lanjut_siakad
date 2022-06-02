<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticable;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Model
{
    protected $table='Mahasiswa';
    protected $primaryKey='nim';

    protected $fillable =[
        'Nim',
        'Nama',
        'Kelas_id',
        'Jurusan',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

};

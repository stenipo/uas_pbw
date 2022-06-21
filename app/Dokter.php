<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = "dokter";

    protected $fillable = ['no_dokter','nama_dokter','jenis_kelamin','layanan','spesialis'];
}

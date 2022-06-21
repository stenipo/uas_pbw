<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = "pasien";

    protected $fillable = ['no_pasien','nama_pasien','jenis_kelamin','jenis_rawat','keluhan'];
}

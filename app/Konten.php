<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    protected $table = "konten";

    protected $fillable = ['about','telepon','email','fax','alamat'];
}

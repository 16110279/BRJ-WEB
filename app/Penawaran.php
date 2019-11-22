<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penawaran extends Model
{
    //
    protected $fillable = ['nama', 'email', 'no_telp', 'spesifikasi', 'dana'];
}

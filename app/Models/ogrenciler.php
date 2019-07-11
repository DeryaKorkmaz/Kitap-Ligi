<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ogrenciler extends Model
{
    protected $table = "ogrenciler";
    protected $fillable=['adi_soyadi','sinifi','numarasi','puani'];
}

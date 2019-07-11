<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kitaplar extends Model
{
    protected $table = "kitaplar";
    protected $fillable=['kitap_adi','kitap_yazari','sayfa_numarasi','süre_siniri'];
}

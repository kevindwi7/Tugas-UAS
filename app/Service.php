<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // Nama Tabel
    protected $table = 'service';
    protected $fillable = ['service_name', 'harga'];
}

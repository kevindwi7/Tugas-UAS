<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoeru extends Model
{
  protected $table='shoes';
  protected $fillable = ['nama', 'alamat', 'no_telepon', 'service', 'gambar_foto', 'Nama_sepatu'];
}

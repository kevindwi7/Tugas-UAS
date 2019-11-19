<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoeru extends Model
{
  protected $table='shoeru';
  protected $fillable = ['nama', 'alamat', 'no_telepon', 'service', 'gambar_foto', 'Nama_sepatu'];
}

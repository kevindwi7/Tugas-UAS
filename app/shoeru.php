<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoeru extends Model
{
  protected $table='shoeru';
  protected $fillable = ['nama', 'alamat', 'no_telepon', 'service', 'Nama_sepatu'];
}

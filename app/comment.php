<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table='comment';
    protected $fillable = ['nama', 'email', 'description'];
}

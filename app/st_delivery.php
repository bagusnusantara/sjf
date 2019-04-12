<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_delivery extends Model
{
  protected $table = 'st_delivery';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

}

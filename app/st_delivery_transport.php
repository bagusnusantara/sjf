<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_delivery_transport extends Model
{
  protected $table = 'st_delivery_transport';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

}

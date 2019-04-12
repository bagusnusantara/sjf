<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_currency extends Model
{
  protected $table = 'st_currency';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_payment extends Model
{
  protected $table = 'st_payment';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

}

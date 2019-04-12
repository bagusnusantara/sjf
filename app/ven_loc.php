<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ven_loc extends Model
{
  protected $table = 'ven_loc';
  protected $primaryKey = 'vendor';
  public $timestamps = false;
  public $incrementing = false;

}

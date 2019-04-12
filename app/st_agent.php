<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_agent extends Model
{
  protected $table = 'st_agent';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

}

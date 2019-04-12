<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class so_hdr extends Model
{
  protected $table = 'so_hdr_all';
  protected $primaryKey = 'so_num';
  public $timestamps = false;
  public $incrementing = false;

  public function st_location()
  {
    return $this->belongsTo('App\st_location', 'st_location_kode');
  }

  public function customer()
  {
    return $this->belongsTo('App\customer', 'customer');
  }

}

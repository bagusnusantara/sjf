<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class po_hdr extends Model
{
  //protected $connection = 'db_satu';
  protected $table = 'po_hdr';
  protected $primaryKey = 'po_num';
  public $timestamps = false;
  public $incrementing = false;

  public function data_buyer()
  {
    return $this->belongsTo('App\data_buyer', 'data_buyer_id');
  }
  public function st_location()
  {
    return $this->belongsTo('App\st_location', 'st_location_kode');
  }

}

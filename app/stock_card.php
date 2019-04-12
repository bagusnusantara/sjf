<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock_card extends Model
{
  protected $table = 'stock_card';
  protected $primaryKey = 'idstock_card';
  public $timestamps = false;
  public $incrementing = false;

  public function item_planning()
  {
    return $this->belongsTo('App\ItemPlanning', 'item_planning_kode');
  }
  public function st_location()
  {
    return $this->belongsTo('App\st_location', 'st_location_kode');
  }
  public function st_um()
  {
    return $this->belongsTo('App\st_um', 'st_um_kode');
  }

}

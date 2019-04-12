<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class so_detail extends Model
{
  protected $table = 'so_detail';
  protected $primaryKey = 'so_hdr_so_num';
  public $timestamps = false;
  public $incrementing = false;

  public function getNettoAttribute()
  {
  return $this->attributes['receive_qty'] * $this->attributes['price'];
  }

  public function item_planning()
  {
    return $this->belongsTo('App\ItemPlanning', 'item_planning_kode');
  }
}

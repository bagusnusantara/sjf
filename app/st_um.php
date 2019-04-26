<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_um extends Model
{
  protected $table = 'st_um';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;


  public function po_detail()
  {
    return $this->hasMany('App\po_detail');
  }

  public function adjusment()
  {
    return $this->hasMany('App\adjusment');
  }

  public function ItemPlanning()
  {
    return $this->hasMany('App\item_planning');
  }
  public function stock_card()
  {
    return $this->hasMany('App\stock_card');
  }
}

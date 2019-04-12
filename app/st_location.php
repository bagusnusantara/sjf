<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_location extends Model
{
  protected $table = 'st_location';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  public function item_planning()
  {
    return $this->hasMany('App\PengajuanPembelian', 'po_hdr_po_num');
  }

  public function adjustment()
  {
    return $this->hasMany('App\adjustment', 'po_hdr_po_num');
  }
  public function stock_card()
  {
    return $this->hasMany('App\stock_card');
  }
  public function po_hdr()
  {
    return $this->hasMany('App\po_hdr');
  }
  public function so_hdr()
  {
    return $this->hasMany('App\so_hdr');
  }
  public function so_hdr1()
  {
    return $this->hasMany('App\so_hdr1');
  }
  
}

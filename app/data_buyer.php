<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_buyer extends Model
{
  protected $table = 'data_buyer';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;

  public function po_hdr()
  {
    return $this->hasMany('App\po_hdr');
  }

}

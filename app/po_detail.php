<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class po_detail extends Model
{
  protected $table = 'po_detail';
  protected $primaryKey = 'po_hdr_po_num';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
    'st_um_kode',
    'purchase_planning_hdr_kode',
    'item_planning_kode',
    'po_hdr_po_num',
    'request_date',
    'konversi',
    'tolerance',
    'order_qty',
    'receive_qty',
    'balance_qty',
    'po_status',
    'price',
    'entry_user',
    'entry_date',
    'id_company',
    'discount'
  ];

  public function item_planning()
  {
    return $this->belongsTo('App\ItemPlanning', 'item_planning_kode');
  }
  public function st_um()
  {
    return $this->belongsTo('App\st_um', 'st_um_kode');
  }

}

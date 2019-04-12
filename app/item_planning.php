<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item_planning extends Model
{
  protected $table = 'item_planning';
  protected $primaryKey = 'kode';
  public $incrementing = false;
  public $timestamps = false;

  protected $fillable = [
    'kode',
    'st_um_kode',
    'md_item_group_kode',
    'deskripsi',
    'part_no',
    'merk',
    'min_stock',
    'maks_stock',
    'entry_user',
    'entry_date',
    'serial_no',
    'panjang',
    'lebar',
  ];


  public function ppdetail()
  {
    return $this->hasMany('App\PengajuanPembelianDTL');
  }
  public function adjusment()
  {
    return $this->hasMany('App\adjusment');
  }
  public function so_detail()
  {
    return $this->hasMany('App\so_detail');
  }
  public function st_um()
  {
    return $this->belongsTo('App\st_um', 'st_um_kode');
  }
}

<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Restr extends Model
{

  protected $fillable=[
    'id',
    'namerest',
	'inforestr',
	'changwat_t',
	'latitude',
	'longitude',
    'm1','m2','m3'
  ];
  public $timestamps = false;
  protected $table = 'restinf'; // ชื่อตาราง

}

<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{

  protected $fillable=[
    'id',
    'restrna',
	'custel',
	'cusname',
	'menulist',
	'lati',
  'longti',
  'stat'
  ];
  public $timestamps = false;
  protected $table = 'orders'; // ชื่อตาราง

}

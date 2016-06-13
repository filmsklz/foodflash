<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class authen extends Model
{

  protected $fillable=[
    'Authen'
  ];
  public $timestamps = false;
  protected $table = 'aut'; // ชื่อตาราง

}

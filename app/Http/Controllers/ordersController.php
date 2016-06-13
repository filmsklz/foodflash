<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Restr;

class ordersController extends Controller {
  public function show($id)
    {
      $Restr = Restr::find($id);
  		return view('Restr.orders')->with("Restr",$Restr);;
    }
}

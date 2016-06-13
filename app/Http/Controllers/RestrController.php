<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Restr;
use App\orders;
use App\authen;
class RestrController extends BaseController {
    public function indexAction(){ // ชื่อ Action
      $Restr=Restr::all();
              return View('Restr/index')->with("Restr",$Restr);; // member ชื่อโฟล์เดอร์ และ index ชื่อไฟล์ index.blade.php
    }
    public function showrestrAction(){ // ชื่อ Action
      $Restr=Restr::all();
        return View('Restr/showrestr')->with("Restr",$Restr);; // member ชื่อโฟล์เดอร์ และ index ชื่อไฟล์ index.blade.php
    }

    public function ordersAction($values){
    $Restr = Restr::find($values);
		return view('Restr.orders')->with("Restr",$Restr);;
	}
  /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function saveorder(Request $request)
    {
      $inputs=$request->all();
      $product=orders::Create($inputs);

      $request->session()->flash('status', 'ทำรายการสำเร็จ');
      return back();
      //return redirect()->action('RestrController@indexAction');
    }
    public function   compleAction($id)
      {
        $profile = orders::where('id', '=', $id)
        ->update(array('stat' => 'จัดส่งแล้ว'));

        $odr = orders::all();
        return view('Restr.adminpg')->with("odr",  $odr);;
      }
      public function mapsAction($values){
      $Restr = orders::find($values);
  		return view('Restr.maps')->with("Restr",$Restr);;
  	}

    public function chklog(Request $request)
      {
          $profiles = authen::all();
          $username = $request->input('Authen');
          foreach ($profiles as $recode){
                if($username ==$recode->Authen){
                session()->put('key', 'admin');
                  $odr = orders::all();
                  return view('Restr.adminpg')->with("odr",  $odr);;
                }else{
                     return redirect()->back()->with('message',"Password Incorrect. \nPlease try again.");;
                }
              }
            }
            public function addd3()
              {
                          $odr = orders::all();
                          return view('Restr.adminpg')->with("odr",  $odr);;

              }
}

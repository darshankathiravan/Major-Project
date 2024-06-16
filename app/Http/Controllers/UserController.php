<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
 
class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */

    public function list()
    {
      $sub_data = DB::table('ece_sem6')->get();
      return view('studentsubjects', compact('sub_data'));
    }
    // public function materials()
    // {
    //     $data = DB::table('materials')->get();
    //     return $data;
    //     // return view('studentsubjects', compact('data'));
    // }

    // public function list()
    // {
    //   $sub_data = DB::table('ece_sem6')->get();
    //   return view('studentsubjects', compact('sub_data'));
    // }
}
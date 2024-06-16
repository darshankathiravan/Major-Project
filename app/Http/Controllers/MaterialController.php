<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class MaterialController extends Controller
{
    public function materials()
    {
        $data = DB::table('materials')->get();
        
        return view('studentsubjects', compact('data'));
    }
    //
}

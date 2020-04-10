<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class yescontroller extends Controller
{
    //
    public function show($id)
    {
        $pay=DB::table('pay')->where('id',$id)->delete();
        //return view('shop');
       return redirect('/shop');
    }

}

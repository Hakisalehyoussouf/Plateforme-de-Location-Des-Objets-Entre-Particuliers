<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintProduct extends Controller
{

    public function printProduct(Request $request){

        return view('printProduct');
    }
    

    //Justre pour les direction
    public function redirectPrintProduct(Request $request){
        return redirect()->route('/product');
    }
}

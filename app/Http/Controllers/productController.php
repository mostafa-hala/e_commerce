<?php

namespace App\Http\Controllers;

use App\Models\Prod;
use Illuminate\Http\Request;

class productController extends Controller
{
    //
    public function showhomeUser(){
        $prods= Prod::all();
        return view ('welcome_home' , compact('prods'));
    }
}

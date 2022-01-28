<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{

public function ss(){
    $id=25;$name="Hamza";
    $data=[];
    return view("welcome",compact("data"));
}
}

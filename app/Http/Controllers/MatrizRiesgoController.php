<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatrizRiesgoController extends Controller
{
    public function Welcome()
    {
    	/*$a= 5;
    	$b = 10;
    	$c = $a + $b;
    	return  "El valor de la suma es $c";*/
    	return view("Welcome");
    }
}

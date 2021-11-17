<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showTugasphp()
    {
        //code load data yang akan dimuat di form
        return view('htmltugasphp');
    }

    function resultTugasphp()
    {
        //code load data yang akan dimuat di form
        return view('showtugasphp');
    }


    function ets()
    {
        return view('htmlets');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datacontroller extends Controller
{
    function beranda() {
        return view('beranda');
    }
}

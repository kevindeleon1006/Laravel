<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CropsandSeed extends Controller
{
    function index()
    {
        return view('crops.crops');
    }
}

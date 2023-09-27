<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class alert_boxController extends Controller
{
    public function index()
    {
        return view('FrontEnd.alert_box');
    }
}


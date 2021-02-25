<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BpsFrameController extends Controller
{
    //
    public function bpsri()
    {
        return view('bpsframe/bpsri');
    }
    public function bpssumsel()
    {
        return view('bpsframe/bpssumsel');
    }
}

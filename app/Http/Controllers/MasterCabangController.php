<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterCabangController extends Controller
{
    public function index() {
        return view('mastercabang.index');
    }
}

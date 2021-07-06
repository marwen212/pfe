<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    public function index(Request $request)
    {
        return view('achat.index');
    }
}

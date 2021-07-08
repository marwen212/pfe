<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    public function index(Request $request)
    {
        return view('reclamation.index');
    }
    public function show()
    {
        return view('reclamation.show');
    }
}

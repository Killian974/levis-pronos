<?php

namespace App\Http\Controllers;

use App\Models\Pronos;
use Illuminate\Http\Request;

class PrognosticsController extends Controller
{
    public function showView(){
        $pronos = Pronos::all();
        return view('prognotics', [
            'pronos' => $pronos
        ]);
    }
}

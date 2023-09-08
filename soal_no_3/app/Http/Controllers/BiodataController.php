<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    { 
        $data = [
            'title' => 'Biodata Form',
        ];
                
        return view('biodata.biodata', $data);
    }
}

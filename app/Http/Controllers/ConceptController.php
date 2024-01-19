<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConceptController extends Controller
{
    public function index(){
        $link_box = '/';
        $name_box = 'Backhome';
        return view('concept', compact('link_box', 'name_box'));
    }
}

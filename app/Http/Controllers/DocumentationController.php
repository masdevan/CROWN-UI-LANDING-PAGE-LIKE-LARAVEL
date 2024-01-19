<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function index(){
        $link_box = '/concept';
        $name_box = 'Concept UI';
        return view('documentation', compact('link_box', 'name_box'));
    }
}

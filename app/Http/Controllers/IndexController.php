<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $link_box = '/documentation';
        $name_box = 'Documentation';
        return view('index', compact('link_box', 'name_box'));
    }
}

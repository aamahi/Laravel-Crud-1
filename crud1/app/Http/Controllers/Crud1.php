<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Crud1 extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $data = $request->except('_token');
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\crud1;

class Crud extends Controller
{   

    public function index(){
        $users = Crud1::all();
        return view('welcome',compact('users'));
    }

    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $rules = [
            'frist_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|size:11'
        ];

        $this->validate($request,$rules);
        $insert = new Crud1;
        $insert->frist_name = $request->frist_name;
        $insert->last_name = $request->last_name;
        $insert->email = $request->email;
        $insert->phone = $request->phone;
        $insert->save();
        return redirect()->route('home')->with('success','User Added Sucessfully !');
     }
     public function edit($id){
         $edit = Crud1::find($id);
         return view('edit',compact('edit'));
     }
     public function update(Request $request,$id){
        $rules = [
            'frist_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|size:11'
        ];

        $this->validate($request,$rules); 
        $update = Crud1::find($id);
        $update->frist_name = $request->frist_name;
        $update->last_name = $request->last_name;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->save();
        return redirect()->route('home')->with('success','User Updated Sucessfully !');
     }
}

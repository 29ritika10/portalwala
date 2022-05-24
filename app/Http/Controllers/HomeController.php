<?php

namespace App\Http\Controllers;

use App\Models\Portal;
use App\Models\Apply;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['portals']=Portal::all();
        return view("user.home",$data);
    }
    public function apply(){
       return view("user.apply");
    }
    public function store(Request $request){
        $data= $request->validate([
            'name'=>'required',
            'contact'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'image'=>'required',
          
        ]);
        $filename = $request->image->getClientOriginalName();
        $request->image->move(public_path("images"),$filename);
        $portals = new Apply();
        $portals->name = $request->name;
        $portals->contact = $request->contact;
        $portals->email = $request->email;
        $portals->gender = $request->gender;
        $portals->dob = $request->dob;
        
        $portals->image = $filename;
        
        $portals->save();
        return redirect()->route("index");
    }
   
}

<?php

namespace App\Http\Controllers;
use App\Models\Portal;
use App\Models\Apply;
use Illuminate\Http\Request;


class AdminController extends Controller
{

    public function dashboard(){
        return view("admin.dashboard");
    }
    public function manage(){
        $data['applies'] = Apply::all();
        return view('admin.manage',$data);
    }
    public function edit(){
        $data['applies']=Editer::all();
        return view('admin.edited',$data);
    }
    public function delete(){
        $data['applies']=Apply::all();
        return view('PortalController',$data);     
    }

}

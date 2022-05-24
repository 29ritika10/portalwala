<?php

namespace App\Http\Controllers;

use App\Models\Portal;
use Illuminate\Http\Request;

class PortalController extends Controller
{
   
    public function index()
    {
        $data['portals']=Portal::all();
        return view("admin.managePortal",$data);
    }

   
    public function create()
    {
        return view("admin.portalapply"); 
    } 

  
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required',
            'tags'=>'required',
            'price'=>'required',
            'discount_price'=>'required',
            'description'=>'required',
            'features'=>'required',
            'status'=>'required',
            'logo'=>'required',
            'image'=>'required',
            'company_name'=>'required',
            'reg_no'=>'required',
        ]);

        $filename = $request->image->getClientOriginalName();
        $request->image->move(public_path("images"),$filename);
        $portals = new Portal();
        $portals->title = $request->title;
        $portals->tags = $request->tags;
        $portals->price = $request->price;
        $portals->discount_price= $request->discount_price;
        $portals->description = $request->description;
        $portals->features = $request->features;
        $portals->status = $request->status;
        $portals-> logo= $request->logo;
        $portals->image = $filename;
        $portals->company_name= $request->company_name;
        $portals->reg_no = $request->reg_no;
        $portals->save();
        return redirect()->route("index");
    }
    

   
    public function show(Portal $portal)
    {
        $data['portals']= Portal::find($id);
        return view("show",$data); 
    }

    
    public function edit(Portal $portal)
    {
        $data['portals']= portals::find($id);
        return view("edit",$data); 
    }

   
    public function update(Request $request, Portal $portal)
    {
    
    }

    
    public function destroy(Portal $portal)
    {
        $data['portals']= portals::find($id);
        return view("delete",$data); 
    }
}

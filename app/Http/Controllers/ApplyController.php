<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;

class ApplyController extends Controller
{

    public function index()
    {
      return view ("user.home");
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    
    public function show(Apply $apply)
    {
        
    }

    
    public function edit(Apply $apply)
    {
        
    }

  
    public function update(Request $request, Apply $apply)
    {
        
    }

    public function destroy(Apply $apply)
    {
        
    }
}


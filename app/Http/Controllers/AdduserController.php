<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class AdduserController extends Controller
{
   
    public function create(){

        $role=Auth::user()->role_id;
        
        return view('template.adduser',compact('role'));
    }

}


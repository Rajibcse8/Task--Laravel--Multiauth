<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
class AdduserController extends Controller
{
   
    public function create(){

        $role=Auth::user()->role_id;
        
        return view('template.adduser',compact('role'));
    }


    public function store(Request $req){

        //dd($req->all());

        $this->validate($req ,[
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|min:6|max:20',
            'role_id'=>'required'
        ]);

        if($req->role_id==2){
            $this->addMerchant($req);
        }

    }

    public  function addMerchant($req){
        
        $data=$req->all();
        $data['password']=Hash::make($req->password);
         User::create($data);
         return redirect()->back()->with('messege','Merchant added successfully');
       
    }

}


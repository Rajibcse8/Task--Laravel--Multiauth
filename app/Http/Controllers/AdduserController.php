<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

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
            return redirect('adduser')->with('messege','Merchant added successfully');
        }

        if($req->role_id==3){
            $this->addOfficer($req);
            return redirect('adduser')->with('messege','Ofiicer added successfully');
        }
        
        if($req->role_id==4){
            $this->addUser($req);   
            return Redirect()->back()->with('messege','User Succesfull  Added  ');
        }

    }

    public  function addMerchant($req){
        
        $data=$req->all();
        $data['password'] = bcrypt($req->password);
        User::create($data);
      
       
    }

    public function addOfficer($req){
       
        $data=$req->all();
        $data['merchant']=Auth::user()->id;
        $data['password'] = bcrypt($req->password);
        User::create($data);
        
    }

    public function addUser($req){
      
        $data=$req->all();
        if(Auth::user()->role_id==2){
            $data['merchant']=Auth::user()->id;         
        }
        else{
            $data['officer']=Auth::user()->id;
            $merchant_data = User::find($data['officer']);
            $data['merchant']=$merchant_data['merchant'];
       
        }
      
           $data['password'] = bcrypt($req->password);
           User::create($data);
         
    }

}


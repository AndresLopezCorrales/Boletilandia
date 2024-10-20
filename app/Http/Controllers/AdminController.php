<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller

{
    public function index(){
        if(Auth::id()){
            $userType = Auth()->user()->usertype;

            if($userType == 'admin'){
                return view('admin.index');

            }else if($userType == 'user'){
                return view('home.index');
            }
        }else{
            return redirect()->back();
        }

        

    }



}

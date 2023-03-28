<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class controll extends Controller
{
    public function index(){
        return view('product');
    }

    public function registration(){
        return view('registration');
    }

    public function register(Request $req){

        $customers = new customer;
        $customers->name = $req['name'];
        $customers->gmail = $req['gmail'];
        $customers->gender = $req['gander'];
        $customers->address = $req['address'];
        $customers->dob = $req['dob'];
        $customers->password = $req['password'];
        $customers->status = $req['status'];
        $customers->points = $req['points'];
        $customers->save();
        
    }

}

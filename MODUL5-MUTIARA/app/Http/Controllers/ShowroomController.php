<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    // $data = $request->all();

    public function create(){
        return view('showroom/create');
    }
    
    public function store(Request $request){

    }


    public function index(){

        $showroom = Showroom::all();
        return view('showroom/index',compact('showroom'));

    }
}

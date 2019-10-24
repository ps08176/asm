<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationFormController extends Controller
{
    //
    public function messages(){

    }
    public function create(){
        $provinces=['An giang', 'BL', 'HCM','HN'];
        return view('applicationform.create',['provinces'=>$provinces]);
    }
    public function store(Request $request){
        $request->validate([
            'fullname'=>'required|between:4,50|string',
            'idnumber'=>'required|digits:9|digits:12'
        ],messages());

        
        $fullname=$request->post('fullname');
        $idnumber=$request->post('idnumber');
        $hometown=$request->post('hometown');
        $result= $request->post('result');
        return view('applicationform', ['fullname'=>$fullname, 'idnumber'=>$idnumber, 'hometown'=>$hometown, 'result'=>$result, '']);
        
    }
}

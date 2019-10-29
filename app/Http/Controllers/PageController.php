<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use App\User;
use Hash;

class PageController extends Controller
{
    public function getIndex(){
        $new_product = Product::where('trend',1)->get();
        $product= Product::all();
        return view('page.home',compact('new_product','product'));
    }
    public function getLoaisp($type){
        $sp_theoloai= Product::where('id_type',$type)->get();
        // $sp_khac=Product::where('id_type','<>',$type)->paginate(3);
        $loai= ProductType::all();
        $loai_sp=ProductType::where('id',$type)->first();
        return view('page.shop',compact('loai','loai_sp','sp_theoloai'));
    }
    public function getChiTiet(){
        return view('page.chitiet_sanpham');
    }
    // public function getShop(){
    //     return view('page.shop');
    // }
    public function getAbout(){
        return view('page.about');
    }
    public function getLogin(){
        return view('page.login');
    }
    public function getRegister(){
        return view('page.register');
    }

    public function postRegister(Request $req){
        $this->validate($req,
        [
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:20',
            're_password'=>'required|same:password',
            'fullname'=>'required',
              
        ],
        [
            'email.required'=>'Vui lòng nhập email',
            'emai.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người dùng',
            'password.required'=>'Nhập mk',
            're_password.same'=>'Mk không giống',
            'password.min'=>'Mk ít nhất 6',
        ]);
        $user= new User();
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->name=$req->fullname;
        $user->save();
        return redirect()->back()->with('Ok','Da tao tk');
         
    }
    public function postLogin(Request $req){
        $this->validate($req,
        [    
        'email'=>'required|email',
        'password'=>'required|min:6|max:20'
        ],
        [  'email.required'=>'Vui lòng nhập email',
           'emai.email'=>'Không đúng định dạng email',
           'password.required'=>'Nhập mk',
           'password.min'=>'Mk ít nhất 6',

        ]);
        
        $credentials = array('email'=> $req->email,'password'=> $req->password,)
    }
}

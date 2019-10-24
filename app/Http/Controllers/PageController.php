<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;

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
    public function getContact(){
        return view('page.contact');
    }
}

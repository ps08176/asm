<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductType;
use App\Cart;
use Session;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
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
        return redirect()->back()->with('thanhcong','Da tao tk');
         
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
        
        $credentials = array('email'=>$req->email,'password'=>$req->password,);
        if(Auth::attemp($credentials)){
            return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);        
        }
        else{
        return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bại ']);
        }
    }
    public function getAddtoCart(Request $req,$id){
        $product = Product::find($id);
        $oldCart = Session('cart') ? Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($product, $product->$id);
        
        $req->Session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getCart(){
        if (!Session::has('cart')){
            return view('page.cart',['product_cart'=>null]);
        }
        $oldCart= Session::get('cart');
        $cart = new Cart($oldCart);
        return view('page.cart',['product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
    }
}

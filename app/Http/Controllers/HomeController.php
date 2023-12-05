<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;    
use App\Models\products;    

class HomeController extends Controller
{
    public function index(){
        $products = Post::all();
        // return view('posts.index')->with('products', $products);
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if($usertype=='user'){
                return view('posts.create');  //dashboard
            }
            else if ($usertype == 'admin') {
                return view('admin.mesages');
            }
            else{
                return redirect()->back();
            }
        }

    }
    public function Save(){
        return view("shop/Save");
    }
    public function show(){
        $productInformation = products::productInformationView()->get();

        // Pass $productInformation to the view
        return view('shop/show', compact('productInformation'));
    }
    public function showa(){
        $productInformation = products::productInformationView()->get();

        // Pass $productInformation to the view
        return view('shop/show', compact('productInformation'));
    }
    
}

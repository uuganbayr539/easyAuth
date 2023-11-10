<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

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
                return view('admin.adminhome');
            }
            else{
                return redirect()->back();
            }
        }

    }
    public function post(){
        return view("post");
    }
}

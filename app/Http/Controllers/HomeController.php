<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\products;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $users = User::all();
        // return view('posts.index')->with('products', $products);
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if($usertype=='user'){
                return view('posts.create');  //dashboard
            }
            else if ($usertype == 'admin') {
                // return view('admin.mesages');
                return view('admin.index', ['users' => $users]);
            }
            else{
                return redirect()->back();
            }
        }

    }
    public function view()
    {
        $view = products::all();
        return view('welcome.welcome')->with('view', $view);
    }
    
}

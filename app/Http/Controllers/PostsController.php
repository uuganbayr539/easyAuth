<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Post::all(); // Assuming you have a "Post" model

        // return view('products', compact('products'));
        // return view('posts.index')->with('products', $products);
        return view('posts.index')->with('products', $products);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this ->validate($request, [
            'name'=> 'required',
            'description'=>'required',
            'price'=>'required',
            'stock_quantity'=>'required',
        ]);
        $post = new Post;
        $post -> name = $request -> input('name');
        $post -> description = $request -> input('description');
        $post -> price = $request -> input('price');
        $post -> stock_quantity = $request -> input('stock_quantity');
        $post -> save();

        return redirect('/posts')->with('success','Амжилттай нийтлэлээ');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products= Post::find($id);
        return view('posts.show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

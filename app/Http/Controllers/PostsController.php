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
        $products = Post::all();
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'location' => 'required',
            'cover_img' => 'image|nullable|max:1999',
        ]);

        $post = new Post();
        $post->name = $request->input('name');
        $post->description = $request->input('description');
        $post->price = $request->input('price');
        $post->location = $request->input('location');
        $post->user_id = auth()->user()->id; // Assuming 'user_id' is the foreign key in your Post model
       
        // Handle cover image upload
        if ($request->hasFile('cover_img')) {
            $filenameWithExt = $request->file('cover_img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_img')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_img')->storeAs('public/cover_img', $filenameToStore);
            $post->cover_img = $filenameToStore;
        } else {
            $post->cover_img = 'noimg.jpg';
        }

        $post->save();

        return redirect('/posts')->with('success', 'Амжилттай нийтлэлээ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Post::find($id);
        return view('posts.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // You can implement the edit logic here
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // You can implement the update logic here
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // You can implement the delete logic here
    }
}

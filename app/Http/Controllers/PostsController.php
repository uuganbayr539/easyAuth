<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

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

        $product = new Post();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->location = $request->input('location');
        $product->user_id = auth()->user()->id; // Assuming 'user_id' is the foreign key in your Post model
       
        // Handle cover image upload
        if ($request->hasFile('cover_img')) {
            $filenameWithExt = $request->file('cover_img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_img')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_img')->storeAs('public/cover_img', $filenameToStore);
            $product->cover_img = $filenameToStore;
        } else {
            $product->cover_img = 'noimg.jpg';
        }

        $product->save();

        return redirect('/posts')->with('success', 'Амжилттай нийтлэлээ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Post::find($id);
        // return view('posts.show')->with('product', $product);
        return view('posts.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit(string $id)
    {
        $post = Post::find($id);

        //check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        
        $post = Post::find($id);
        // Handle File Upload
         if ($request->hasFile('cover_image')) {
            // Get file name with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just the filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // FileName to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

             // Delete the previous cover image if it's not the default one
            if ($post->cover_image !== 'noimage.jpg') {
                Storage::delete('public/cover_images/' . $post->cover_image);
            }

            // Update the post with the new cover image
            $post->cover_image = $fileNameToStore;
        }

        // Update other post attributes
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product =Post::find($id);

        //check for correct user
        if(auth()->user()->id !==$product->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        // Fetch the cover image before deleting
        $coverImage = $product->cover_image;

        // Delete the product
        $product->delete();

        // Delete the previous cover image if it's not the default one
        if ($coverImage !== 'noimage.jpg') {
            Storage::delete('public/cover_images/' . $coverImage);
        }

        return redirect('/posts')->with('success', 'Post Removed');
        }
}

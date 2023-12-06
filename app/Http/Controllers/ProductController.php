<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productInformation = products::productInformationView()->get();
        return view('shop.index', compact('productInformation')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("shop.create");
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
            'quantity' => 'required',
            'cover_img' => 'image|nullable|max:1999',
        ]);

        $products = new products();
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->quantity = $request->input('quantity');
        $products->user_id = auth()->user()->id; // Assuming 'user_id' is the foreign key in your Products model
       
        // Handle cover image upload
        if ($request->hasFile('cover_img')) {
            $filenameWithExt = $request->file('cover_img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_img')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_img')->storeAs('public/cover_img', $filenameToStore);
            $products->cover_img = $filenameToStore;
        } else {
            $products->cover_img = 'noimg.jpg';
        }

        $products->save();

        return redirect('/Save')->with('success', 'Амжилттай нийтлэлээ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

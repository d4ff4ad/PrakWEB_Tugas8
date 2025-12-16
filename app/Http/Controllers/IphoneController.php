<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iphone;

class IphoneController extends Controller
{
    public function index()
    {
        $iphones = Iphone::all();
        return view('product.product', compact('iphones'));
    }
    public function create()
    {
        return view('product.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'model' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'color' => 'nullable',
            'storage' => 'nullable|numeric'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
            $validated['image'] = 'img/' . $imageName;
        }

        Iphone::create($validated);

        return redirect()->route('product')->with('success', 'Produk berhasil ditambahkan');
    }
}

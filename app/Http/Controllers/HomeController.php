<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'product' => 'iPhone 18 Pro',
            'description' => 'Titanium. Begitu kuat. Begitu ringan.',
        ];

        $produk = [
            'produk1' => 'MacBook Pro',
            'produk2' => 'Apple Watch',
            'produk3' => 'iPad Pro',          

        ];
        return view('home', compact('data', 'produk'));

    }


}


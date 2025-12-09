<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $produk = [
            [
                'label' => 'Baru',
                'nama' => 'Smart TV 4K',
                'deskripsi' => 'Layar besar. Visual lebih nyata.',
                'gambar' => 'https://purepng.com/public/uploads/large/purepng.com-led-televisiontvtelevisiondisplayvideo-displayled-displaylcd-display-1701528362438j9v8e.png'
            ],
            [
                'label' => 'Bertenaga',
                'nama' => 'MacBook Pro',
                'deskripsi' => 'Chip M3 Max. Kecepatan yang tak terkejar.',
                'gambar' => 'https://images.pngnice.com/download/2007/Macbook-PNG-Image.png'
            ],
            [
                'label' => 'Titanium',
                'nama' => 'iPhone 15 Pro',
                'deskripsi' => 'Kamera pro. Desain titanium yang ringan.',
                'gambar' => 'https://assets.stickpng.com/images/5cb0633d80f2cf2020b167e8.png'
            ],
            [
                'label' => 'Sehat',
                'nama' => 'Watch Series 9',
                'deskripsi' => 'Lebih cerdas. Lebih terang. Lebih bertenaga.',
                'gambar' => 'https://pngimg.com/d/apple_watch_PNG108866.png'
            ],
            [
                'label' => 'Imersif',
                'nama' => 'AirPods Max',
                'deskripsi' => 'Suara berkualitas tinggi. Peredam bising aktif.',
                'gambar' => 'https://pngimg.com/d/headphones_PNG101967.png'
            ],
            [
                'label' => 'Kreatif',
                'nama' => 'iPad Air',
                'deskripsi' => 'Dua ukuran. Chip M2. Bikin apa saja jadi mudah.',
                'gambar' => 'https://assets.stickpng.com/images/580b57ffq9996e24bc43c5134.png'
            ],
        ];

        return view('store', compact('produk'));
       
    }
}

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
                'gambar' => 'gambar1',
                
            ],
            [
                'label' => 'Bertenaga',
                'nama' => 'MacBook Pro',
                'deskripsi' => 'Chip M3 Max. Kecepatan yang tak terkejar.',
                'gambar' => 'gambar2'
            ],
            [
                'label' => 'Titanium',
                'nama' => 'iPhone 17 Pro',
                'deskripsi' => 'Kamera pro. Desain titanium yang ringan.',
                'gambar' => 'gambar3',                    
            ],
            [
                'label' => 'Sehat',
                'nama' => 'Watch Series 9',
                'deskripsi' => 'Lebih cerdas. Lebih terang. Lebih bertenaga.',
                'gambar' => 'gambar4',
            ],
            [
                'label' => 'Imersif',
                'nama' => 'AirPods Max',
                'deskripsi' => 'Suara berkualitas tinggi. Peredam bising aktif.',
                'gambar' => 'gambar5',
                
            ],
            [
                'label' => 'Kreatif',
                'nama' => 'iPad Air',
                'deskripsi' => 'Dua ukuran. Chip M2. Bikin apa saja jadi mudah.',
                'gambar' => 'gambar6',    
            ],
        ];

        $gambar = [
            'gambar1' => 'https://els.id/wp-content/uploads/2024/08/Xiaomi-TV-LED-Mi-32-A-Pro-Series.jpg',
            'gambar2' => 'https://i.ebayimg.com/images/g/EGUAAOSwSWhjxdjA/s-l1200.jpg',
            'gambar3' => 'https://www.veikonkone.fi/media/catalog/product/cache/5d565e4af17a32c9d6f0b287c960a0ce/1/9/195950639025_1_fullHD.jpg',
            'gambar4' => 'https://macstore.id/wp-content/uploads/2024/01/MT2U3ref_VW_34FRwatch-case-41-aluminum-starlight-nc-s9_VW_34FRwatch-face-41-aluminum-starlight-s9_VW_34FR_WF_CO.jpeg',
            'gambar5' => 'https://m.media-amazon.com/images/I/81yA8CLEIIL.jpg',
            'gambar6' => 'https://cdnpro.eraspace.com/media/catalog/product/i/p/ipad_pro_11-inch_m4_wi-fi_silver_1_5.jpg',
        ];

        

        return view('store', compact('produk', 'gambar'));
       
    }
}

<?php

namespace App\Http\Controllers;

class SupportController extends Controller
{
    public function index()
    {
        $supports = [
            [
                'judul' => 'Cara Aktivasi Garansi',
                'deskripsi' => 'Panduan lengkap untuk aktivasi garansi produk elektronik Anda.',
                
            ],
            [
                'judul' => 'Masalah Pengiriman',
                'deskripsi' => 'Solusi jika terjadi kendala dalam pengiriman barang.',
                
            ],
            [
                'judul' => 'Pengembalian Barang',
                'deskripsi' => 'Prosedur retur barang jika menemukan kerusakan.',
                
            ],
        ];

        $icon = [
            'icon1' => 'bi-shield-check',
            'icon2' => 'bi-truck',
            'icon3' => 'bi-box-arrow-left',
        ];
        return view('support', compact('supports', 'icon'));
    }
}

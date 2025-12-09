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
                'icon' => 'bi-shield-check'
            ],
            [
                'judul' => 'Masalah Pengiriman',
                'deskripsi' => 'Solusi jika terjadi kendala dalam pengiriman barang.',
                'icon' => 'bi-truck'
            ],
            [
                'judul' => 'Pengembalian Barang',
                'deskripsi' => 'Prosedur retur barang jika menemukan kerusakan.',
                'icon' => 'bi-box-arrow-left'
            ],
        ];
        return view('support', compact('supports'));
    }
}

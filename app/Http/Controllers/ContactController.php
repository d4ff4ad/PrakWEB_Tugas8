<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        $contact = [
            'alamat' => 'Jl. Pahlawan No. 1, Jakarta',
            'email' => 'contact@electronic.com',
            'phone' => '08123456789',
        ];

        $peta = [
            'peta' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.163602275427!2d106.827153!3d-6.214626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f19c0b9c0b9c%3A0x1b9c0b9c0b9c0b9c!2sDanish%20Corp!5e0!3m2!1sid!2sid!4v1670392800000!5m2!1sid!2sid'
        ];

        return view('contact', compact('contact', 'peta'));
    }
}

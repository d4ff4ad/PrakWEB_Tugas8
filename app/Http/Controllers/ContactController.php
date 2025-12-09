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
        return view('contact', $contact);
    }
}

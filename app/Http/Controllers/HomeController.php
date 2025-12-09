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
        return view('home', $data);

    }


}


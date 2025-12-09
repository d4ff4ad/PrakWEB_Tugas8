<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {

        $about = [
            'CEO' => 'John Doe',
            'CTO' => 'Jane Smith',
            'COO' => 'Bob Johnson',
        ];
        return view('about',$about);
    }
}

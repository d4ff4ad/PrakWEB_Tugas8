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

        $jabatan = [
            'CEO' => 'Chief Executive Officer',
            'CTO' => 'Chief Technology Officer',
            'COO' => 'Chief Operating Officer',
        ];

        
        return view('about', compact('about', 'jabatan'));
    }
}

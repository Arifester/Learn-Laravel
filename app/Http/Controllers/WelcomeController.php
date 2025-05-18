<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // Fungsi index untuk menampilkan halaman welcome-again
    public function index()
    {
         // Mengembalikan view 'welcome-again'
         return view(view: 'welcome-again');
    }

}

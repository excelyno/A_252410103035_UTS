<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    

class PageController extends Controller
{
    public function landing(){
        return view('landingPage');
    }
    public function login(){
    return view('auth.login');
    }
    public function dashboard(){
    return view('admin.dashboard');
    }

    public function menu()
{
    $menus = [
        [
            'nama' => 'Espresso',
            'kategori' => 'Coffee',
            'harga' => 18000,
            'stok' => 20,
        ],
        [
            'nama' => 'Cappuccino',
            'kategori' => 'Coffee',
            'harga' => 25000,
            'stok' => 15,
        ],
        [
            'nama' => 'Caramel Latte',
            'kategori' => 'Signature',
            'harga' => 28000,
            'stok' => 12,
        ],
        [
            'nama' => 'Matcha Latte',
            'kategori' => 'Non-Coffee',
            'harga' => 26000,
            'stok' => 10,
        ],
    ];

    return view('admin.menu', ['menus' => $menus]);
}

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    //
    public function index() {
        $data = array('title' => 'Homepage');
        return view('homepage.index', $data);
    }

    public function about() {
        $data = array('title' => 'Tentang Kami');
        return view('homepage.about', $data);
    }

    public function kontak() {
        $data = array('title' => 'Kontak Kami');
        return view('homepage.kontak', $data);
    }

    public function product() {
        $data = array('title' => 'Produk');
        return view('homepage.product', $data);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home', ['title' => '- Home Page', 'status' => 'active']);
    }

    public function catalogs() {
        return view('catalogs', ['title' => '- catalogs Page', 'status' => 'active']);
    }

    public function team() {
        return view('team', ['title' => '- team Page', 'status' => 'active']);
    }

    public function contact() {
        return view('contact', ['title' => '- Contact Page', 'status' => 'active']);
    }
}
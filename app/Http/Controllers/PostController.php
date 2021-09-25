<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home() {
        return view('index');
    }
    public function alur() {
        return view('alur-pendaftaran');
    }
    public function biaya() {
        return view('biaya-pendaftaran');
    }
    public function timeline() {
        return view('timeline');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $data=['forms'=> Form::all()];
        return view('admin.home')->with($data);
    }
}

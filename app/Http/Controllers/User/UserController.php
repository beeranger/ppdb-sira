<?php

namespace App\Http\Controllers\User;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        // $forms =Auth::user()->employee;
        $data=['forms'=> Auth::user()->forms,];
        return view('user.home')->with($data);
    }
}

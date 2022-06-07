<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function showProfilePage(){
        return view('profile', [
            'user' => Auth::user()
        ]);
    }
}
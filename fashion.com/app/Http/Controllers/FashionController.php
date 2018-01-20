<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FashionController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }

    public function aboutUs(){
        return view('front-end.about-us.about-us');
    }

    public function contact(){
        return view('front-end.contact.contact');
    }

    public function gallery(){
        return view('front-end.gallery.gallery');
    }

    public function icons(){
        return view('front-end.icons.icons');
    }

    public function typo(){
        return view('front-end.typo.typo');
    }
}

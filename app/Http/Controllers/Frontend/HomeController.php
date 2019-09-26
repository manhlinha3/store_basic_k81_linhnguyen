<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function getIndex() {
        return view('frontend.index');
    }
    function getAbout() {
        return view('frontend.about');
    }
    function getContact() {
        return view('frontend.contact');
    }
}

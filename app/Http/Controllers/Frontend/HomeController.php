<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function getIndex() {
        echo 'index.blade.php';
    }
    function getAbout() {
        echo 'about.blade.php';
    }
    function getContact() {
        echo 'contact.blade.php';
    }
}

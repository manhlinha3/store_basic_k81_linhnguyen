<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    function getShop() {
        echo 'shop.blade.php';
    }
    function getDetail() {
        echo 'detail.blade.php';
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    function getShop() {
        return view('frontend.product.shop');
    }
    function getDetail() {
        return view('frontend.product.detail');
    }
}

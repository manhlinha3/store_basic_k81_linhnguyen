<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    function getCheckout() {
        return view('frontend.checkout.checkout');
    }
    function getComplete() {
        return view('frontend.checkout.complete');
    }
}

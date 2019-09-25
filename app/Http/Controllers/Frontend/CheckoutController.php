<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    function getCheckout() {
        echo 'checkout.blade.php';
    }
    function getComplete() {
        echo 'complete.blade.php';
    }
}

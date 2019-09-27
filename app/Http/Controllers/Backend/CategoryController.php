<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function getCategory()
    {
        return view('backend.category.category');
    }

    public function getEditCategory()
    {
        return view('backend.category.editcategory');
    }
}

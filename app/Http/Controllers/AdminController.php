<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function createProduct()
    {
        $data['types'] = ProductType::get();
        return view('admin.product.create', $data);
    }
}

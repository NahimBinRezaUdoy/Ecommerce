<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data = [];
        $data['products'] = Product::select(['id', 'title', 'slug', 'sale_price', 'image'])->where('active', 1)->paginate(9);
        return view('frontend.home', $data);
    }
}

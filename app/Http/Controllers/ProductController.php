<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiImportRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->orderBy('id')->cursorPaginate(15);
        return view('product',['products' => $products]);
    }
}

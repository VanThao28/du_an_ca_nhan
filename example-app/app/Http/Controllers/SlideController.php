<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Category;
use App\Models\Product;

class SlideController extends Controller
{
    protected $modelCategory;
    protected $modelProduct;

    public function __construct(Category $category, Product $product)
    {
        $this->modelCategory = $category;
        $this->modelProduct = $product;
    }

    public function index($id) {
        $products = $this->modelProduct
        ->where('is_public', config('product.public'))
        ->first();
        return view('products.product-detail', ['products' => $products]);
    }
}
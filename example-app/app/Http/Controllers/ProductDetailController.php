<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;

class ProductDetailController extends Controller
{
    protected $productModel;
    
    public function __construct(Product $product,Category $category)
    {
        $this->productModel = $product;
        $this->modelCategory = $category;
    }
    public function index()
    {
        $products = $this->productModel->all();
        return view('products.product-detail', ['products' => $products]);
    }

    public function ProductDetail($id)
    {
        $products = $this->productModel->find($id);
        $productRelat = $this->productModel
            ->where('is_public',config('product.public'))
            ->paginate(config ('product.paginate_one'));
        if (!$products) {
            return redirect('products.product');
        }

        return view('products.product-detail', ['products' => $products,'productRelat' =>$productRelat]);
    }
}


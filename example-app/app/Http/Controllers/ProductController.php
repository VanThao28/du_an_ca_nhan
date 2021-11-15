<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    protected $productModel;
    
    public function __construct(Product $product, Category $category)
    {
        $this->productModel = $product;
        $this->categoryModel = $category;
    }

    public function Product() {
        $product = $this->productModel
            ->orderBy('id', 'DESC')
            ->paginate(config ('product.paginate'));
        return view('products.product', ['products' => $product]);
    }

    public function ProductMen() {
        $product = $this->productModel
            ->where('category_id', 1)
            ->where('is_public', config('product.public'))
            ->orderBy('id', 'DESC')
            ->paginate(config ('product.paginate'));
        return view('products.product', ['products' => $product]);
    }
    public function ProductWomen() {
        $product = $this->productModel
            ->where('category_id', 2)
            ->where('is_public', config('product.public'))
            ->orderBy('id', 'DESC')
            ->paginate(config ('product.paginate'));
        return view('products.product', ['products' => $product]);
    }
    public function ProductSports() {
        $product = $this->productModel
            ->where('category_id', 3)
            ->where('is_public', config('product.public'))
            ->orderBy('id', 'DESC')
            ->paginate(config ('product.paginate'));
        return view('products.product', ['products' => $product]);
    }
    public function ProductWProductSportsomen() {
        $product = $this->productModel
            ->where('category_id', 4)
            ->where('is_public', config('product.public'))
            ->orderBy('id', 'DESC')
            ->paginate(config ('product.paginate'));
        return view('products.product', ['products' => $product]);
    }

    public function export() 
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

}

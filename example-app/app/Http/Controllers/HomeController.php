<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $modelCategory;
    protected $modelProduct;

    public function __construct(Category $category, Product $product)
    {
        $this->modelCategory = $category;
        $this->modelProduct = $product;
    }

    public function index() {
        $product = $this->modelProduct
            ->where('is_public', config('product.public'))
            ->where('category_id', config('product.public'))
            ->orderBy('sale_off', 'DESC')
            ->orderBy('price', 'DESC')
            ->paginate(config ('product.paginate_one'));
        $categories = $this->modelCategory
            ->where('is_public', config('category.public'))
            ->where('id', config('category.public'))
            ->first();
        return view('home-page', [
            'products' => $product,
            'categories' => $categories,
        ]);
    }
    public function showCategory($id)
    {
        $categories = $this->modelCategory->FindOrFail($id);

        $products = $this->modelProduct
            ->where('category_id', $categories->id)
            ->where('is_public', config('product.public'))
            ->paginate(config('product.paginate_one'));
            return view('home-page', [
                'products' => $products,
                'categories' => $categories,
        ]);
    }
    public function search(Request $request)
    {
        $keyWords = $request->keywords_submit;
        $products = $this->modelProduct
            ->where('is_public', config('product.public'))
            ->get();
        $search_Product = $this->modelProduct->where('name','_like_','%'.$keyWords.'%')->get();

        return view('products.product', ['products' => $products, 'search_Product' =>$search_Product]);
    }
   
}
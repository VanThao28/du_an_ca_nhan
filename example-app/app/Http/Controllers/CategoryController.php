<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    protected $modelCategory;
    protected $modelProduct;

    public function __construct(Category $category, Product $product) {

        $this->modelCategory = $category;
        $this->modelProduct = $product;
    }

    public function categories($id)
    {

        $categories = $this->modelCategory->FindOrFail($id);
        //dd($categories->id);
        $products = $this->modelProduct
            ->where('category_id', $categories->id)
            ->where('is_public', config('product.public'))
            ->orderBy('sale_off', 'DESC')
            ->orderBy('price', 'DESC')
            ->paginate(config('product.paginate'));
            return view('products.product', [
                'products' => $products,
                'categories' => $categories,
        ]);
    }
}

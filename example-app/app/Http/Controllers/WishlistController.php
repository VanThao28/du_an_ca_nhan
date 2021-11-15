<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrdersProduct;
use Illuminate\Http\Request;


class WishlistController
{
	protected $productModel;
	protected $categoryModel;
	protected $orderModel;
	protected $orderProductModel;

	public function __construct(Product $product,
		Category $category,
		Order $order,
		OrdersProduct $ordersProduct
	) {
		$this->productModel = $product;
		$this->categoryModel = $category;
		$this->orderModel = $order;
		$this->orderProductModel = $ordersProduct;

	}

	public function saveDataToSession(Request $request)
	{
        $productId = (int) $request->product_id_wishlist;
        $existFlg = false;

        if (session('wishlist1')) {
            $data['wishlist1'] = session('wishlist1');

            foreach ($data['wishlist1'] as $key => $value) {
                if ($productId == $value['id']) {
                    $existFlg = true;
                }
            }

            if (!$existFlg) {
                $data['wishlist1'][] = [
                    'id' => $request->product_id_wishlist,
                ];
            }
        } else {
            $data = [
                'wishlist1' => [
                    [
                        'id' => $request->product_id_wishlist,
                    ],
                ],
            ];
        }

        session($data);
        \Log::error($data);
        $test = session([
            'abc' => '10',
        ]);
        return json_encode($data);
	}

    public function removeProductFromWishlist(Request $request)
    {
        $productId = (int) $request->product_id_wishlist;
        $wishlistData = session('wishlist1');

        foreach ($wishlistData as $key => $productData) {
            if ($productData['id'] == $productId) {
                unset($wishlistData[$key]);
            }
        }
        if (is_null($wishlistData)) {
            session()->forget('wishlist1');

            return json_encode([]);
        }
        $request->session()->forget('wishlist1');
        session(['wishlist1' => $wishlistData]);
        return json_encode(['wishlist1' => $wishlistData]);
    }

	public function wishlist()
	{
        
        $wishlistData = session('wishlist1');
        $wishlistData = collect($wishlistData);

        $productData = $wishlistData->pluck('wishlist1','id')->toArray();

        $wishlistId = $wishlistData->pluck('id');

        $products = $this->productModel->whereIn('id', $wishlistId)->get();


		return view('wishlist.wishlist-show', [
            'products' => $products,
            'productData' => $productData,
        ]);
	}
}

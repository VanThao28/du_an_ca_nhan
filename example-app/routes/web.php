<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\SlideController;
use App\HTTP\Controllers\menutopController;

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\CategoriesController as CategoriesController;
use App\Http\Controllers\Admin\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
//route loi chao
Route::get('/greeting', function () {
    return 'xin chao';
});

Route::get('/user/{id?}', function ($id = null) {
    return 'user_id :' . $id;
});

Route::view('welcome', 'welcome');

//route group
Route::name('admin')->prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // // route method
    // Route::view('/route-view', 'route-view');

    // //route post
    // Route::post('/show-post', function (Request $request) {
    //     return view('show-post', ['show' => $request->all()]);
    //     //dd('show');
    // });

    // //route get
    // Route::get('/show-get', function (Request $request) {
    //     return view('show-get', ['show' => $request->all()]);
    // });

    Route::resource('products', AdminProductController::class);
    Route::resource('order', AdminOrderController::class);
    Route::resource('categories', CategoriesController::class);
    Route::get('dashdoard', [Dashboard::class, 'index'])->name('admin.dashboard');
});

Route::get('/php', function() {
    return response()->json([
     'stuff' => phpinfo()
    ]);
 });


//  Route::get('/home-page', function() {
//     if (view::exists('index')) {
//         return view('index');
//     }

//     return view('home-page');
// })->name('home-page');

Route::get('/home-page', [HomeController::class, 'index'])->name('home-page');

Route::get('/home-page/{id}', [HomeController::class, 'showCategory'])->name('home-page.show');

Route::get('/slide/{id}',[SlideController::class, 'index'])->name('product.slide');


Route::get('/products', [ProductController::class, 'Product'])->name('products.product');

Route::get('/products/men', [ProductController::class, 'ProductMen'])->name('products.product-men');
Route::get('/products/Women', [ProductController::class, 'ProductWomen'])->name('products.product-Women');
Route::get('/products/Sports', [ProductController::class, 'ProductSports'])->name('products.product-Sports');
Route::get('/products/Electronics', [ProductController::class, 'ProductElectronics'])->name('products.product-Electronics');


Route::get('/productsdetail', [ProductDetailController::class, 'index'])->name('products.productDetail');

Route::get('/productsdetail/{id}', [ProductDetailController::class, 'ProductDetail'])->name('products.product-detail');

Route::get('/categories/{id}', [CategoryController::class, 'categories'])->name('category.show');

//order
route::post('/orders', [OrderController::class, 'saveDataToSession'])->name('order.save');

route::get('/order-list', [OrderController::class, 'orderList'])->name('order.list');

route::post('/delete-product', [OrderController::class, 'removeProductFromSesson'])->name('order.remove');

route::put('/update-order-number', [OrderController::class, 'updateNumder'])->name('order.updateNumber');

route::get('/checkout', [OrderController::class, 'checkout'])->name('order.chekout');

route::post('/checkout-billing', [OrderController::class, 'checkoutBilling'])->name('order.checkoutBilling');

//wishlist
route::post('/wishlist', [WishlistController::class, 'saveDataToSession'])->name('wishlist.save');

route::get('/wishlist-show', [WishlistController::class, 'wishlist'])->name('wishlist.show');

route::post('remove-wishlist', [WishlistController::class, 'removeProductFromWishlist'])->name('wishlist.remove');
//Export excel
Route::get('orders_export', [OrderController::class, 'export'])->name('orders.export');
Route::get('products_export', [ProductController::class, 'export'])->name('products.export');

Route::get('/child-page', function() {
    return view('my-directory.child-page');
})->name('child-page');



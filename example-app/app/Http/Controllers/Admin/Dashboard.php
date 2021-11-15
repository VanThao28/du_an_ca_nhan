<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderReports;

class Dashboard extends Controller
{
    protected $modelProduct;
    protected $modelCategory;
    protected $modelOrder;
    protected $modelOrderReport;

    public function __construct(
        Product $product,
        Category $category,
        Order $order,
        OrderReports $orderReports,
    )
    {
        $this->modelProduct = $product;
        $this->modelCategory = $category;
        $this->modelOrder = $order;
        $this->modelOrderReport = $orderReports;
    }
    
    public function index()
    { 
        $products = $this->modelProduct->count();
        $categories = $this->modelCategory->count();
        $orderCount = $this->modelOrder->count();
        $OrderReport = $this->modelOrderReport->all();
        return view('admin.dashboard.index',[
            'products' => $products,
            'categories' => $categories,
            'orders' => $orderCount,
            'order_reports' => $OrderReport,
        ]);
    }
}

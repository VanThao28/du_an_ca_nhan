<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrdersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $title = [
            "id" => "id",
            "name" => "name",
            "user_id" => "user_id",
            "phone" => "phone",
            "address" => "address",
            "created_at" => "created_at",
            "update_at" => "update_at",
            "email" =>"email",
            "city" => "city",
            "appartment" => "appartment",
            "district" => "district",
            "toTalFinal" => "toTalFinal",
            "tax" => "tax",
            "toTalFinalCheckout" => "toTalFinalCheckout",
            "couponCode" => "couponCode",
            "status" => "status",
        ];

        $orders = Order::all()->toArray();

        array_unshift($orders, $title);

        return collect($orders);
    }
}

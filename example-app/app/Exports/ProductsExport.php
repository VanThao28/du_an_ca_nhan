<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $title = [
            "id" => "id",
            "name" => "name",
            "price" => "price",
            "quantity" => "quantity",
            "start_date" => "start_date",
            "description" => "description",
            "user_id" => "user_id",
            "status" =>"status",
            "created_at" => "created_at",
            "updated_at" => "updated_at",
            "rate" => "rate",
            "start_sale_date" => "start_sale_date",
            "image" => "image",
            "nhan_vien_id" => "nhan_vien_id",
            "posting_time" => "posting_time",
            "sale_off" => "sale_off",
            "price_off" => "price_off",
            "is_public" => "is_public",
            "categories_id" => "categories_id",
            "image_name" => "image_name",
        ];

        $products = Product::all()->toArray();

        array_unshift($products, $title);

        return collect($products);
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use App\Models\OrderReports;
use Carbon\Carbon;

class DashboardReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    
    protected $modelOrder;
    protected $modelOrderReport;

    public function __construct(Order $order, OrderReports $orderReport)
    {
        parent::__construct();

        $this->modelOrder = $order;
        $this->modelOrderReport = $orderReport;

    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //run at 1:00
        $yesterday = now()->yesterday();
        //fake data
       $yesterday = Carbon::createFromFormat('Y-m-d', '2021-10-27');

        $yesterdayBegin = $yesterday->format('Y-m-d H:i:s');
        $yesterdayEnd = $yesterday->format('Y-m-d') . ' 23:59:59';

        $orders = $this->modelOrder->with('OrdersProduct')
            ->where('created_at', '>=', $yesterdayBegin)
            ->where('created_at', '<=', $yesterdayEnd)
            ->get();

        $productQuantity = 0;
        $orderQuantity = 0;
        $totalPrice = 0;

        foreach ($orders as $order) {
            $day = $order->created_at->format('Y-m-d');

            $productQuantity += $order->OrdersProduct->sum('quantity');
            $orderQuantity++;
            $totalPrice += $order->toTalFinalCheckout;
        }
        $data = [
            'day' => $day,
            'product_quantity' => $productQuantity,
            'order_quantity' => $orderQuantity,
            'total_price' => $totalPrice,
        ];
        try {
            $this->modelOrderReport->where('day', $data['day'])->delete();

            $this->modelOrderReport->create($data);

            $this->comment('create data success');
        } catch (\Exception $e) {
            \Log::error($e);
        }
        return Command::SUCCESS;
    }
}

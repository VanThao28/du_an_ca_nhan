<x-admin-layout>
  <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $orders }}</h3>

            <p>Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="{{ route('adminorder.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $products }}</h3>

            <p>Products</p>
          </div>
          <div class="icon">
            <i class="fab fa-product-hunt"></i>
          </div>
          <a href="{{ route('adminproducts.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $categories }}</h3>

            <p>Categories</p>
          </div>
          <div class="icon">
            <i class="nav-icon fas fa-book"></i>
          </div>
          <a href="{{ route('admincategories.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
  </div>
  <div class="card-body">
    <h2>Order Report</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Date</th>
          <th>Product Quantity</th>
          <th>Order Quantity</th>
          <th>Total Price</th>
          <th>Created_at</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($order_reports as $order_report)
        <tr>
          <td>
            {{ $order_report->day }}
          </td>
          <td>{{ $order_report->product_quantity }}</td>
          <td>{{ $order_report->order_quantity }}</td>
          <td>{{ $order_report->total_price }}</td>
          <td>{{ $order_report->created_at }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-admin-layout>
<x-my-app-layout>
  <section id="cart-view">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table aa-wishlist-table">
              <form action="">
                <div class="table-responsive">
                   <table class="table">
                     <thead>
                       <tr>
                         <th></th>
                         <th></th>
                         <th>Product</th>
                         <th>Price</th>
                         <th>Sale Off</th>
                         <th></th>
                       </tr>
                     </thead>
                     <tbody>
                       @foreach ($products as $product)
                        <tr>
                          <td>
                            <a class="remove delete" href="#" data-product_id_wishlist="{{ $product->id }}">
                              <fa class="fa fa-close"></fa>
                            </a></td>
                          <td><img src="{{ showImageProduct($product->image) }}" alt="img"></td>
                          <td><a class="aa-cart-title" href="{{ route('products.product-detail', ['id' => $product->id]) }}">{{ $product->name }}</a></td>
                          <td>{{ $product->price }}</td>
                          <td><span>{{ $product->sale_off }}</span>%</td>
                          <td><a href="#" class="aa-add-to-cart-btn cartAuto" data-product_id="{{ $product->id }}">Add To Cart</a></td>
                        </tr>
                       @endforeach                    
                       </tbody>
                   </table>
                 </div>
              </form>             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('.cartAuto').click(function(e) {
			//auto_cart
			e.preventDefault();

			var currentQuantity = parseInt($('.cart-quantity').text());
			var addQuantity = 1;
			var newQuantity = currentQuantity + addQuantity;

			var product_id = $(this).data('product_id');

			var url = "{{ route('order.save') }}";

			$.ajax(url, {
				type: 'POST',
				data: {
					product_id: product_id,
					quantity: 1,
				},
				success: function (data) {
					console.log('success');
					
					var objData = JSON.parse(data);
					var newQuantity = Object.size(objData.cart);
					
					$('.cart-quantity').text(newQuantity);

					Swal.fire({
						position: 'center',
						icon: 'success',
						title: 'Add to cart success!',
						showConfirmButton: false,
						timer: 1000
					});
				},
				error: function () {
					console.log('fail');

					Swal.fire({
						position: 'center',
						icon: 'error',
						title: 'Failed!',
						showConfirmButton: false,
						timer: 1000
					});
				}
			});
		});
    	$('.delete').click(function(e) {
			//auto_cart
			e.preventDefault();
			var currentWishlist = parseInt($('.wishlist-quantity').text());
			var addWishlist = 1;
			var newWishlist = currentWishlist - addWishlist;

			var productEl = $(this).parent().parent();
			
			var product_id_wishlist = $(this).data('product_id_wishlist');
			var url = "{{ route('wishlist.remove') }}";
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax(url, {
						type: 'POST',
						data: {
							product_id_wishlist: product_id_wishlist,
						},
						success: function (data) {
							console.log('success');
							
							var objData = JSON.parse(data);

							console.log($('.wishlist-quantity').text(newWishlist));
							productEl.remove();
						},
						error: function () {
							console.log('fail');

							Swal.fire({
								position: 'center',
								icon: 'error',
								title: 'Failed!',
								showConfirmButton: false,
								timer: 1000
							});
						}
					});
					Swal.fire(
						'Deleted!',
						'Your file has been deleted.',
						'success'
					)
				}
			})
		});
	});
</script>
@endsection
</x-my-app-layout>
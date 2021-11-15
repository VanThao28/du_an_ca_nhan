<x-my-app-layout>

    <!-- / menu -->
    <!-- Start slider -->
    <section id="aa-slider">
        <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <div class="seq-screen">
            <ul class="seq-canvas">
                <!-- single slide item -->
				@php
					$slideMen75 = $products->where('id', 75)->where('is_public', 1)->where('category_id',1);
					$slideWomen50 = $products->where('id', 2)->where('is_public', 1)->where('category_id',2);
					$slideSports40 = $products->where('id', 4)->where('is_public', 1)->where('category_id',3);
					$slideElectronics75 = $products->where('id', 93)->where('is_public', 1)->where('category_id',4);
				@endphp
                <li>
					<div class="seq-model">
					<img data-seq src="{{ asset('storage/products/download.jpg') }}" alt="Men slide img" />
					</div>
					<div class="seq-title">
					<span data-seq>75% Off</span>                
						<h2 data-seq>Men Collection</h2>                
						<p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
						<a href="{{ route('product.slide', ['id' => $slideMen75]) }}" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
					</div>
                </li>
                <!-- single slide item -->
                <li>
					<div class="seq-model">
						<img data-seq src="{{ asset('storage/products/pngtree-pink-cute-wind-taobao-tmall-makeup-beauty-poster-image_189654.jpg') }}" alt="Wristwatch slide img" />
					</div>
					<div class="seq-title">
						<span data-seq>40% Off</span>                
						<h2 data-seq>Sports Collection</h2>                
						<p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
						<a data-seq href="{{ route('product.slide', ['id' => $slideSports40]) }}" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
					</div>
                </li>
                <!-- single slide item -->
                <li>
					<div class="seq-model">
						<img data-seq src="{{ asset('storage/products/download.jpg') }}" alt="Women Jeans slide img" />
					</div>
					<div class="seq-title">
						<span data-seq>75% Off</span>                
						<h2 data-seq>Electronics Collection</h2>                
						<p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
						<a data-seq href="{{ route('product.slide', ['id' => $slideElectronics75]) }}" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
					</div>
                </li>
                <!-- single slide item -->           
                <!-- single slide item -->  
                <li>
					<div class="seq-model">
						<img data-seq src="{{ asset('storage/products/download.jpg') }}" alt="Male Female slide img" />
					</div>
					<div class="seq-title">
						<span data-seq>50% Off</span>                
						<h2 data-seq>Women Collection</h2>                
						<p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
						<a data-seq href="{{ route('product.slide', ['id' => $slideWomen50]) }}" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
					</div>
                </li>                   
            </ul>
            </div>
            <!-- slider navigation btn -->
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
            <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
            <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
        </div>
        </div>
    </section>
    <!-- / slider -->
    <!-- Start Promo section -->
	<section id="aa-promo">
		<div class="container">
		  <div class="row">
			<div class="col-md-12">
			  <div class="aa-promo-area">
				<div class="row">
				  <!-- promo left -->
				  <div class="col-md-5 no-padding">                
					<div class="aa-promo-left">
					  <div class="aa-promo-banner">                    
						<img src="{{ asset('storage/products/images (3).jpg') }}" alt="img">                    
						<div class="aa-prom-content">
						  <span>75% Off</span>
						  <h4><a href="{{ route('product.slide', ['id' => $products->where('id', 182)->where('is_public', 1)->where('category_id',2)]) }}">For Women</a></h4>                      
						</div>
					  </div>
					</div>
				  </div>
				  <!-- promo right -->
				  <div class="col-md-7 no-padding">
					<div class="aa-promo-right">
					  <div class="aa-single-promo-right">
						<div class="aa-promo-banner">                      
						  <img src="{{ asset('storage/products/images (2).jpg') }}" alt="img">                      
						  <div class="aa-prom-content">
							<span>Exclusive Item</span>
							<h4><a href="{{ route('product.slide', ['id' => $products->where('id', 100)->where('is_public', 1)]) }}">For Men</a></h4>                        
						  </div>
						</div>
					  </div>
					  <div class="aa-single-promo-right">
						<div class="aa-promo-banner">                      
						  <img src="{{ asset('storage/products/images (4).jpg') }}" alt="img">                      
						  <div class="aa-prom-content">
							<span>Sale Off</span>
							<h4><a href="{{ route('product.slide', ['id' => $products->where('id',30)]) }}">On Shoes</a></h4>                        
						  </div>
						</div>
					  </div>
					  <div class="aa-single-promo-right">
						<div class="aa-promo-banner">                      
						  <img src="{{ asset('storage/products/images (4).jpg') }}" alt="img">                      
						  <div class="aa-prom-content">
							<span>New Arrivals</span>
							<h4><a href="{{ route('product.slide', ['id' => $products->where('id', 15)]) }}">For Kids</a></h4>                        
						  </div>
						</div>
					  </div>
					  <div class="aa-single-promo-right">
						<div class="aa-promo-banner">                      
						  <img src="{{ asset('storage/products/images (1).jpg') }}" alt="img">                      
						  <div class="aa-prom-content">
							<span>25% Off</span>
							<h4><a href="{{ route('product.slide', ['id' => $products->where('id', 5)->where('category_id',2)]) }}">For Bags</a></h4>                        
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
    <!-- / Promo section -->
    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="row">
                <div class="aa-product-area">
                <div class="aa-product-inner">
                    <!-- start prduct navigation -->
					@php
						$categoryMen = $categories->where('name', 'Men')->first();
						$categoryWomen = $categories->where('name', 'Women')->first();
						$categorySports = $categories->where('name', 'Sports')->first();
						$categoryElectronics = $categories->where('name', 'Electronics')->first();
					@endphp
                    <ul class="nav nav-tabs aa-products-tab">
						{{-- $this->parthner->first()->name --}}
                        <li 
							@if ($categories->id === 1)
								class="active"
							@endif>
						<a href="{{ route('home-page.show', ['id' => $categoryMen->id]) }}" data-toggle="#tab">{{ $categoryMen->name }}</a></li>
                        <li
							@if ($categories->id === 2)
								class="active"
							@endif>
						<a href="{{ route('home-page.show', ['id' => $categoryWomen->id]) }}" data-toggle="#tab">{{ $categoryWomen->name }}</a></li>
                        <li
							@if ($categories->id===3)
								class="active"
							@endif>
						<a href="{{ route('home-page.show', ['id' => $categorySports->id]) }}" data-toggle="#tab">{{ $categorySports->name }}</a></li>
                        <li
							@if ($categories->id===4)
								class="active"
							@endif>
						<a href="{{ route('home-page.show', ['id' => $categoryElectronics->id]) }}" data-toggle="#tab">{{ $categoryElectronics->name }}</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- Start men product category -->
						<div class="tab-pane fade in active" id="men">
							<ul class="aa-product-catg">
								@foreach ($products as $product)
										<!-- start single product item -->
									<li>
										<figure>
											<a class="aa-product-img" href="{{ route('products.product-detail', ['id' => $product->id]) }}"><img src="{{ showImageProduct($product->image) }}" alt="polo shirt img"></a>
											<a class="aa-add-card-btn cartAuto" data-product_id="{{ $product->id }}" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
											<figcaption>
											<h4 class="aa-product-title"><a href="#">{{ $product->name }}</a></h4>
											@if ($product->sale_off > 0)
													<span class="aa-product-price">${{ $product->price }}</span>
													<span class="aa-product-price"><del>${{ $product->price_off }}</del></span>
											@else
													<span class="aa-product-price">${{ $product->price }}</span>
											@endif
											</figcaption>
										</figure>                        
										<div class="aa-product-hvr-content">
											<a href="#" data-toggle="tooltip" data-placement="top"  title="Add to Wishlist"><span class="fa fa-heart-o wishlist1" data-product_id_wishlist="{{ $product->id }}"></span></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
											<a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
										</div>
										<!-- product badge -->
										@if ($product->sale_off > 0)
										<span class="aa-badge aa-sale" href="#">{{ $product->sale_off }}%</span>
										@endif
									</li>
										<!-- start single product item -->
								@endforeach
							</ul>
							<a class="aa-browse-btn" href="{{ route('category.show', $categories) }}">browse all Product<span class="fa fa-long-arrow-right"></span></a>
						</div>
                    </div>
                    <!-- quick view modal -->                  
                    <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">                      
								<div class="modal-body">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<div class="row">
										<!-- Modal view slider -->
										<div class="col-md-6 col-sm-6 col-xs-12">                              
											<div class="aa-product-view-slider">                                
												<div class="simpleLens-gallery-container" id="demo-1">
													<div class="simpleLens-container">
														<div class="simpleLens-big-image-container">
															<a class="simpleLens-lens-image" data-lens-image="{{ $product->image }}">
																<img src="{{ $product->image }}" class="simpleLens-big-image">
															</a>
														</div>
													</div>
													<div class="simpleLens-thumbnails-container">
														<a href="#" class="simpleLens-thumbnail-wrapper"
																data-lens-image="{{ $product->image }}"
																data-big-image="{{ $product->image }}">
																<img src="{{ $product->image }}" width="50px" height="50px">
														</a>                                    
														<a href="#" class="simpleLens-thumbnail-wrapper"
																data-lens-image="{{ $product->image }}"
																data-big-image="{{ $product->image }}">
																<img src="{{ $product->image }}" width="50px" height="50px">
														</a>

														<a href="#" class="simpleLens-thumbnail-wrapper"
																data-lens-image="{{ $product->image }}"
																data-big-image="{{ $product->image }}">
															<img src="{{ $product->image }}" width="50px" height="50px">
														</a>
													</div>
												</div>
											</div>
											</div>
										<!-- Modal view content -->
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="aa-product-view-content">
												<h3>{{ $product->name }}</h3>
												<div class="aa-price-block">
													@if ($product->sale_off > 0)
														<span class="aa-product-view-price">{{ $product->price }}.000đ</span>
														<span class="aa-product-view-price"><del>{{ $product->price_off }}.000đ</del></span>
													@else
															<span class="aa-product-view-price">{{ $product->price }}.000đ</span>
													@endif
													<p class="aa-product-avilability">Avilability: <span>In stock</span></p>
												</div>
												<p>{{ $product->description }}</p>
												<h4>Size</h4>
												<div class="aa-prod-view-size">
													<a href="#">S</a>
													<a href="#">M</a>
													<a href="#">L</a>
													<a href="#">XL</a>
												</div>
												<div class="aa-prod-quantity">
													<form action="">
														<select name="quantity" id="quantity1" class="product-quantity">
															<option value="1" selected="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
														</select>
													</form>
													<p class="aa-prod-category">
														Category: <a href="#">Polo T-Shirt</a>
													</p>
												</div>
												<div class="aa-prod-view-bottom">
													<a href="#" class="aa-add-to-cart-btn cart" data-product_id="{{ $product->id }}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
													<a href="{{ route('products.product-detail', ['id' => $product->id]) }}" class="aa-add-to-cart-btn">View Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>                        
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
                    </div><!-- / quick view modal -->              
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Support section -->
	<section id="aa-support">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="aa-support-area">
							<!-- single support -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="aa-support-single">
								<span class="fa fa-truck"></span>
								<h4>FREE SHIPPING</h4>
								<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
							</div>
						</div>
						<!-- single support -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="aa-support-single">
								<span class="fa fa-clock-o"></span>
								<h4>30 DAYS MONEY BACK</h4>
								<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
							</div>
						</div>
						<!-- single support -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="aa-support-single">
								<span class="fa fa-phone"></span>
								<h4>SUPPORT 24/7</h4>
								<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@section('script')
    <script type="text/javascript">
      $(document).ready(function() {
        $('.cart').click(function(e) {
          e.preventDefault();
    
          //call ajax to server
          //lay data
          var product_id = $(this).data('product_id');
          var quantity = $(this).parent().parent().find('.product-quantity').val();
    
          var url = "{{ route('order.save') }}";
    
          $.ajax(url, {
              type: 'POST',
              data: {
                product_id: product_id,
                quantity: quantity,
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

		$('.wishlist1').click(function(e) {
			e.preventDefault();
			//call ajax to server
			//lay data
			var currentWishlist = parseInt($('.wishlist-quantity').text());
			var addWishlist = 1;
			var newWishlist = currentWishlist + addWishlist;

			var url = "{{ route('wishlist.save') }}";

			$('.wishlist-quantity').text(newWishlist);
    
			//lấy giá trị product id
			var product_id_wishlist = $(this).data('product_id_wishlist');

          $.ajax(url, { 
              type: 'POST',
              data: {
                product_id_wishlist : product_id_wishlist,
              },
              success: function (data) {
                console.log('success');

                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Add to wishlist success!',
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
    });
    </script>
@endsection
</x-my-app-layout>
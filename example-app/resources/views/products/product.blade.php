<x-my-app-layout>
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="/themes/dailyshop/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Fashion</h2>
        <ol class="breadcrumb">
          <li><a href="{{ route('home-page') }}">Home</a></li>         
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">Sort by</label>
                  <select name="">
                    <option value="1" selected="Default">Default</option>
                    <option value="2">Name</option>
                    <option value="3">Price</option>
                    <option value="4">Date</option>
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Show</label>
                  <select name="">
                    <option value="1" selected="12">12</option>
                    <option value="2">24</option>
                    <option value="3">36</option>
                  </select>
                </form>
              </div>
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <!-- start single product item -->
								@foreach ($products as $product)
									<li>
										<figure>
											<a class="aa-product-img" href="{{ route('products.product-detail', ['id' => $product->id]) }}"><img src="{{ showImageProduct($product->image) }}" alt="polo shirt img"></a>
											<a class="aa-add-card-btn cartAuto" data-product_id="{{ $product->id }}" href="#"><span class="fa fa-shopping-cart "></span>Add To Cart</a>
											<figcaption>
												<h4 class="aa-product-title"><a href="#">{{ $product->name }}</a></h4>
												@if ($product->sale_off > 0)
												<span class="aa-product-price">{{ $product->price }}.000đ</span>
												<span class="aa-product-price"><del>{{ $product->price_off }}.000đ</del></span>
												@else
												<span class="aa-product-price">{{ $product->price }}.000đ</span>
												@endif
												<p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
											</figcaption>
										</figure>                         
										<div class="aa-product-hvr-content">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
											<a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
										</div>
										<!-- product badge -->
										@if ($product->sale_off >0)
										<span class="aa-badge aa-sale" href="#">{{ $product->sale_off }}</span>
										@endif
									</li>
								@endforeach
                <!-- start single product item -->
                                                       
              </ul>
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
                                      <a class="simpleLens-lens-image" data-lens-image="{{ showImageProduct($product->image)}}">
                                          <img src="{{ showImageProduct($product->image)}}" class="simpleLens-big-image">
                                      </a>
                                  </div>
                              </div>
                              <div class="simpleLens-thumbnails-container">
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="{{ showImageProduct($product->image)}}"
                                     data-big-image="{{ showImageProduct($product->image)}}">
                                      <img src="{{ showImageProduct($product->image)}}" width="50px" height="50px">
                                  </a>                                    
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="{{ showImageProduct($product->image)}}"
                                     data-big-image="{{ showImageProduct($product->image)}}">
                                      <img src="{{ showImageProduct($product->image)}}" width="50px" height="50px">
                                  </a>

                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="{{ showImageProduct($product->image)}}"
                                     data-big-image="{{ showImageProduct($product->image)}}">
                                      <img src="{{ showImageProduct($product->image)}}" width="50px" height="50px">
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
              </div>
              <!-- / quick view modal -->   
            </div>
            <div class="aa-product-catg-pagination">
              <nav>
								{{ $products->links('partials.my-pagination') }}
                
              </nav>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Category</h3>
              <ul class="aa-catg-nav">
                <li><a href="{{ route('products.product') }}">All</a></li>
                <li><a href="{{ route('products.product-men') }}">Men</a></li>
                <li><a href="{{ route('products.product-Women') }}">Women</a></li>
                <li><a href="{{ route('products.product-Sports') }}">Sports</a></li>
                <li><a href="{{ route('products.product-Electronics') }}">Electronics</a></li>
              </ul>
            </div>
            <!-- single sidebar -->
          </aside>
        </div>
       
      </div>
    </div>
  </section>
  <!-- / product category -->


  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->
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
      });
    </script>
  @endsection
</x-my-app-layout>
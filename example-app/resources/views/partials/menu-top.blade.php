<div>
    <section id="menu">
        <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>          
            </div>
            <div class="navbar-collapse collapse">
                <!-- Left nav -->
                <ul class="nav navbar-nav">
                <li><a href="{{ route('home-page') }}">Home</a></li>
                <li><a href="{{ route('products.product') }}">Products</a></li>
                <li><a href="{{ route('products.product-men') }}">Men</a></li>
                <li><a href="{{ route('products.product-Women') }}">Women</a></li>
                <li><a href="{{ route('products.product-Sports') }}">Sports</a></li>
                <li><a href="{{ route('products.product-Electronics') }}">Electronics</a></li>
                </ul>
            </div><!--/.nav-collapse -->
            </div>
        </div>       
        </div>
    </section>
</div>
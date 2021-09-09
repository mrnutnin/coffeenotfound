<div class="nav-container fixed-top nav-sticky">
	<nav class="sub-navbar bg-white d-flex">
		<div class="d-flex align-items-center mr-auto">
			<div class="list-select">
				<div class="inner-select">
					<div class="selected pt-1">
						<img src="{{ URL::asset('/assets/dist/images/flags/uk.svg') }}" width="18" alt="">
					</div>
					<ul>
						<li>
							<a href="index.html">
								<img src="{{ URL::asset('/assets/dist/images/flags/uk.svg') }}" width="18" alt="">
							</a>
						</li>
						<li>
							<a href="rtl/">
								<img src="{{ URL::asset('/assets/dist/images/flags/sa.svg') }}" width="18" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="list-select">
				<div class="inner-select">
					<div class="selected"><i class="bx bx-dollar"></i></div>
					<ul>
						<li><a href="#!"><i class="bx bx-dollar"></i></a></li>
						<li><a href="#!"><i class="bx bx-bitcoin"></i></a></li>
						<li><a href="#!"><i class="bx bx-euro"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<ul class="nav list-inline ml-auto">
			<li>
				<a href="#!" class="px-2">My account</a>
			</li>
			<li>
				<a href="{{ route('wishlist') }}" class="px-2">My Wishlist</a>
			</li>
		</ul>
	</nav><!-- /.sub-navbar -->

	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<div class="container">
			<a class="navbar-brand" href="{{ route('index') }}">
				<img src="{{ URL::asset('/assets/dist/images/logo.png') }}" alt="Sham Theme">
			</a>

			<ul class="nav navbar-icons ml-auto order-lg-2">
				<li class="nav-item mr-3 shopping-cart">
					<a href="#!" class="li-icon" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
						<i class="bx bx-shopping-bag"></i>
						<span class="badge badge-secondary rounded-circle">4</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right border-0 shadow">
						<ul class="dropdown-wrap position-relative" data-slimscroll="true">
							<li class="d-flex">
								<a href="product.html">
									<img src="{{ URL::asset('/assets/dist/images/products/2.jpg') }}" class="img-fluid product-img" alt="">
								</a>
								<div class="ml-3 product-details">
									<p class="product-title font-weight-bold text-uppercase mb-2">
										<a href="product.html">Bag Dark Beige</a>
									</p>
									<p class="product-price text-muted">
										<ins>
											<span class="amount">$66.50</span>
										</ins>
									</p>
								</div>
							</li>
							<li class="d-flex">
								<a href="product.html">
									<img src="{{ URL::asset('/assets/dist/images/products/24.jpg') }}" class="img-fluid product-img" alt="">
								</a>
								<div class="ml-3 product-details">
									<p class="product-title font-weight-bold text-uppercase mb-2">
										<a href="product.html">Shoes Maroon</a>
									</p>
									<div class="product-price text-muted">$80.99</div>
								</div>
							</li>
							<li class="d-flex">
								<a href="product.html">
									<img src="{{ URL::asset('/assets/dist/images/products/3.jpg') }}" class="img-fluid product-img" alt="">
								</a>
								<div class="ml-3 product-details">
									<p class="product-title font-weight-bold text-uppercase mb-2">
										<a href="product.html">Unisex Cap</a>
									</p>
									<div class="product-price text-muted">$99.99</div>
								</div>
							</li>
							<li class="d-flex">
								<a href="product.html">
									<img src="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" class="img-fluid product-img" alt="">
								</a>
								<div class="ml-3 product-details">
									<p class="product-title font-weight-bold text-uppercase mb-2">
										<a href="product.html">Twill Silk Scarf</a>
									</p>
									<div class="product-price text-muted">$49.99</div>
								</div>
							</li>

							<li class="dropdown-footer p-0 text-center text-uppercase font-weight-bold">
								<a href="cart.html" class="p-3 d-block">View Cart</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a href="#!" class="li-icon" id="trigger-overlay"><i class="bx bx-search"></i></a>
				</li>
			</ul>

			<button
					class="navbar-toggler ml-0 ml-sm-3 order-lg-3"
					type="button"
					data-toggle="collapse"
					data-target="#navbar"
					aria-controls="navbar"
					aria-expanded="false"
					aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navbar" class="collapse navbar-collapse mr-auto">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown " >
						<a class="nav-link dropdown-toggle" href="{{ route('index') }}" role="button"
						   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
						>
							Home
						</a>
						<ul class="dropdown-menu">
							<li class="dropdown-item active"><a class="nav-link" href="#">Default</a></li>
							<li class="dropdown-item"><a class="nav-link" href="{{ route('index2') }}">Default Slider</a></li>
							<li class="dropdown-item"><a class="nav-link" href="{{ route('index3') }}">Overlay Products</a></li>
							<li class="dropdown-item"><a class="nav-link" href="{{ route('index4') }}">Instagram section</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown ">
						<a class="nav-link dropdown-toggle" href="#" role="button"
						   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Shop
						</a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="{{ route('products') }}">Full Width Shop</a></li>
							<li><a class="nav-link" href="{{ route('products-with-filter') }}">Shop With Filter</a></li>
							<li><a class="nav-link" href="{{ route('products-sidebar-left') }}">Sidebar Left</a></li>
							<li><a class="nav-link" href="{{ route('products-sidebar-right') }}">Sidebar Right</a></li>
							<li><a class="nav-link" href="{{ route('product') }}">Simple Product</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button"
						   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							eCommerce Pages
						</a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="{{ route('wishlist') }}">Wishlist</a></li>
							<li><a class="nav-link" href="{{ route('cart') }}">Cart</a></li>
							<li><a class="nav-link" href="{{ route('checkout') }}">Checkout</a></li>
							<li><a class="nav-link" href="{{ route('order-received') }}">Order Received</a></li>
							<li><a class="nav-link" href="{{ route('order-tracking') }}">Order Tracking</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button"
						   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pages
						</a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="{{ route('page') }}">Page Default</a></li>
							<li><a class="nav-link" href="{{ route('login-register') }}">Login / Register</a></li>
							<li><a class="nav-link" href="{{ route('Error404') }}">Not Found (404)</a></li>
							<li><a class="nav-link" href="{{ route('faqs') }}">FAQ'S</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container -->
	</nav>
</div><!-- /.nav-container -->

@extends('layouts-ecommerce.app')

@section('css')

@endsection

@section('content')
<div class="page-head">
	<div class="container">
		<div class="d-flex flex-column flex-md-row">
			<ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active">Shopping Cart</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-cart">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="table-responsive">
						<table class="table cart-table" cellspacing="0">
							<thead>
							<tr>
								<th class="product-remove"></th>
								<th class="product-thumbnail"></th>
								<th class="product-name">Product</th>
								<th class="product-price">Price</th>
								<th class="product-quantity">Quantity</th>
								<th class="product-subtotal">Total</th>
							</tr>
							</thead>
							<tbody>
							<tr class="item">
								<td class="product-remove">
									<a href="#!" class="remove" title="Remove this item"><i class="bx bx-x"></i></a>
								</td>
								<td class="product-thumbnail">
									<a href="product.html">
										<img src="{{ URL::asset('/assets/dist/images/products/1.jpg') }}" class="img-fluid" alt="">
									</a>
								</td>
								<td class="product-name">
									<a href="product.html">Patterned Scarf</a>
								</td>
								<td class="product-price">
									<span class="amount">$90.00</span>
								</td>
								<td class="product-quantity">
									<div class="quantity">
										<input type="button" value="+" class="plus">
										<input type="number" step="1" max="5" min="1" value="1" title="Qty" class="qty" size="4">
										<input type="button" value="-" class="minus">
									</div>
								</td>
								<td class="product-subtotal">
									<span class="amount">$90.00</span>
								</td>
							</tr>

							<tr class="item">
								<td class="product-remove">
									<a href="#!" class="remove" title="Remove this item"><i class="bx bx-x"></i></a>
								</td>
								<td class="product-thumbnail">
									<a href="product.html">
										<img src="{{ URL::asset('/assets/dist/images/products/20.jpg') }}" class="img-fluid" alt="">
									</a>
								</td>
								<td class="product-name">
									<a href="product.html">Men Cap</a>
									<table class="variation">
										<tbody>
										<tr>
											<th class="variation-size">Size:</th>
											<td class="variation-size">
												<p>Large</p>
											</td>
										</tr>
										<tr>
											<th class="variation-color">Color:</th>
											<td class="variation-color">
												<p>Dark Grey</p>
											</td>
										</tr>
										</tbody>
									</table>
								</td>
								<td class="product-price">
									<span class="amount">$450.00</span>
								</td>
								<td class="product-quantity">
									<div class="quantity">
										<input type="button" value="+" class="plus">
										<input type="number" step="1" max="5" min="1" value="2" title="Qty" class="qty" size="4">
										<input type="button" value="-" class="minus">
									</div>
								</td>
								<td class="product-subtotal">
									<span class="amount">$900.00</span>
								</td>
							</tr>

							<tr class="item">
								<td class="product-remove">
									<a href="#!" class="remove" title="Remove this item"><i class="bx bx-x"></i></a>
								</td>
								<td class="product-thumbnail">
									<a href="product.html">
										<img src="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" class="img-fluid" alt="">
									</a>
								</td>
								<td class="product-name">
									<a href="product.html">Twill Silk Scarf</a>
								</td>
								<td class="product-price">
									<span class="amount">$200.00</span>
								</td>
								<td class="product-quantity">
									<div class="quantity">
										<input type="button" value="+" class="plus">
										<input type="number" step="1" max="5" min="1" value="1" title="Qty" class="qty" size="4">
										<input type="button" value="-" class="minus">
									</div>
								</td>
								<td class="product-subtotal">
									<span class="amount">$200.00</span>
								</td>
							</tr>

							<tr>
								<td colspan="6" class="actions">
									<div class="row">
										<div class="coupon col-lg-5">
											<div class="row">
												<div class="col-sm-6">
													<input type="text" class="form-control" placeholder="Coupon Code">
												</div>
												<div class="col-sm-6">
													<input type="submit" class="btn btn-primary" value="Apply Coupon">
												</div>
											</div>
										</div>

										<div class="cart-collaterals col-lg-5 offset-lg-2">
											<div class="cart-totals">
												<h2>Cart Totals</h2>
												<table class="table table-condensed" cellspacing="0">
													<tbody>
													<tr class="cart-subtotal">
														<th>Subtotal</th>
														<td class="text-right">
															<span class="amount">$899.00</span>
														</td>
													</tr>
													<tr class="shipping">
														<th>Shipping</th>
														<td class="text-right">
															<span class="amount">$50.00</span>
														</td>
													</tr>
													<tr class="order-total">
														<th>Total</th>
														<td class="text-right">
															<strong><span class="amount">$999.00</span></strong>
														</td>
													</tr>
													</tbody>
												</table>

												<div class="form-group clearfix d-flex align-items-center justify-content-between">
													<div class="mr-auto">
														<input type="submit" class="btn btn-primary" value="Update Cart">
													</div>
													<div class="ml-auto">
														<a href="checkout.html" class="btn btn-primary">Checkout</a>
													</div>
												</div>

												<div class="text-right">
													<a href="#!" class="shipping-calculator-button effect"
													   data-slide-toggle=".shipping-calculator-form">Calculate Shipping</a>
												</div>

												<div class="shipping-calculator-form inputs-border inputs-bg" style="display: none;">
													<div class="form-group">
														<select class="form-control">
															<option>Select a Country..</option>
															<option value="SY">Syria</option>
															<option value="UK">United Kingdom</option>
															<option value="US">United States</option>
															<option value="TR">Turkey</option>
														</select>
													</div>
													<div class="form-group">
														<select class="form-control">
															<option>Select an City..</option>
															<option value="SY">Syria</option>
															<option value="UK">United Kingdom</option>
															<option value="US">United States</option>
															<option value="TR">Turkey</option>
														</select>
													</div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Postcode / Zip">
													</div>
													<div class="form-group text-right">
														<button type="submit" class="btn btn-primary">Update Totals</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</td>
							</tr>
							</tbody>
						</table>
					</div><!-- /.table-responsive -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- #page-cart -->
</div><!-- /.page-wrapper -->

@endsection

@section('script')

@stop


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
				<li class="breadcrumb-item active">Checkout</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-checkout">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="alert alert-info">
						<strong>Returning customer?</strong> <a href="#!" class="effect" data-slide-toggle=".checkout-login-form">Click
						here to login</a>
					</div>

					<div class="checkout-login-form box" style="display: none;">
						<h2>Login</h2>
						<p>
							If you have shopped with us before, please enter your details in the boxes below. If you are a new
							customer please proceed to the Billing &amp; Shipping section.
						</p>
						<form action="#!" method="POST" class="login-form inputs-border inputs-bg">
							<div class="form-group">
								<label for="username">Username or email*</label>
								<input type="text" id="username" class="form-control" placeholder="Username or email*">
							</div>
							<div class="form-group">
								<label for="password">Password*</label>
								<input type="password" id="password" class="form-control" placeholder="Password*">
							</div>
							<div class="form-group">
								<input type="checkbox" id="rememberme">
								<label for="rememberme" class="checkbox">Remember me</label>
								<a href="#!" class="effect float-right">Forgot your password?</a>
							</div>
							<div class="form-group text-right">
								<button type="button" class="btn btn-primary">Login</button>
							</div>
						</form>
					</div><!-- /.checkout-login-form -->
				</div>

				<div class="col-sm-6">
					<div class="alert alert-info">
						<strong>Have a coupon?</strong>
						<a href="#!" class="effect" data-slide-toggle=".checkout-coupon-form">
							Click here to enter your code
						</a>
					</div>

					<div class="checkout-coupon-form box" style="display: none;">
						<form action="#!" method="POST" class="coupon-form inputs-border inputs-bg">
							<div class="form-group">
								<label for="coupon_code">Coupon code</label>
								<input type="text" id="coupon_code" class="form-control" placeholder="Coupon code">
							</div>
							<div class="form-group text-right">
								<button type="button" class="btn btn-primary">Apply Coupon</button>
							</div>
						</form>
					</div><!-- /.checkout-login-form -->
				</div>
			</div><!-- /.row -->

			<form action="#!" method="POST" class="row checkout-form inputs-border inputs-bg">
				<div class="col-md-6">
					<div class="billing-field">
						<h3 class="title">Billing Details</h3>

						<div class="row">
							<div class="form-group col-sm-6">
								<div class="required">
									<input type="text" class="form-control" placeholder="First Name" required>
								</div>
							</div>
							<div class="form-group col-sm-6">
								<div class="required">
									<input type="text" class="form-control" placeholder="Last Name" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<input type="text" class="form-control" placeholder="Company Name">
						</div>

						<div class="row">
							<div class="form-group col-sm-6">
								<div class="required">
									<input type="email" class="form-control" placeholder="Email Address" required>
								</div>
							</div>
							<div class="form-group col-sm-6">
								<div class="required">
									<input type="tel" class="form-control" placeholder="Phone" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="required">
								<select class="form-control">
									<option>Select a Country..</option>
									<option value="SY">Syria</option>
									<option value="UK">United Kingdom</option>
									<option value="US">United States</option>
									<option value="TR">Turkey</option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-sm-6">
								<div class="required">
									<input type="text" class="form-control" placeholder="Address" required>
								</div>
							</div>
							<div class="form-group col-sm-6">
								<input type="text" class="form-control" placeholder="Address 2">
							</div>
						</div>

						<div class="form-group">
							<div class="required">
								<input type="text" class="form-control" placeholder="Postcode / ZIP" required>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-sm-6">
								<div class="required">
									<input type="text" class="form-control" placeholder="Town / City" required>
								</div>
							</div>
							<div class="form-group col-sm-6">
								<div class="required">
									<select class="form-control">
										<option>Select a Province..</option>
										<option value="SY">Syria</option>
										<option value="UK">United Kingdom</option>
										<option value="US">United States</option>
										<option value="TR">Turkey</option>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<input type="checkbox" id="create_account">
							<label for="create_account" class="checkbox" data-slide-toggle=".create-account">Create an
								account?</label>
							<div class="create-account box" style="display: none;">
								<p>
									Create an account by entering the information below. If you are a returning customer please
									login
									at
									the top of the page.
								</p>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Account Password">
								</div>
							</div><!-- /.create-account -->
						</div>

						<div class="form-group">
							<h3>
								<input type="checkbox" id="ship-different-address">
								<label for="ship-different-address" class="checkbox" data-slide-toggle=".different-address">Ship
									to
									a
									different address?</label>
							</h3>
							<div class="different-address box" style="display: none;">
								<div class="row">
									<div class="form-group col-sm-6">
										<div class="required">
											<input type="text" class="form-control" placeholder="First Name" required>
										</div>
									</div>
									<div class="form-group col-sm-6">
										<div class="required">
											<input type="text" class="form-control" placeholder="Last Name" required>
										</div>
									</div>
								</div>

								<div class="form-group">
									<input type="text" class="form-control" placeholder="Company Name">
								</div>

								<div class="form-group">
									<div class="required">
										<select class="form-control">
											<option>Select a Country..</option>
											<option value="SY">Syria</option>
											<option value="UK">United Kingdom</option>
											<option value="US">United States</option>
											<option value="TR">Turkey</option>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="form-group col-sm-6">
										<div class="required">
											<input type="text" class="form-control" placeholder="Address" required>
										</div>
									</div>
									<div class="form-group col-sm-6">
										<input type="text" class="form-control" placeholder="Address 2">
									</div>
								</div>

								<div class="form-group">
									<div class="required">
										<input type="text" class="form-control" placeholder="Postcode / ZIP" required>
									</div>
								</div>

								<div class="row">
									<div class="form-group col-sm-6">
										<div class="required">
											<input type="text" class="form-control" placeholder="Town / City" required>
										</div>
									</div>
									<div class="form-group col-sm-6">
										<div class="required">
											<select class="form-control">
												<option>Select a Province..</option>
												<option value="SY">Syria</option>
												<option value="UK">United Kingdom</option>
												<option value="US">United States</option>
												<option value="TR">Turkey</option>
											</select>
										</div>
									</div>
								</div>
							</div><!-- /.create-account -->
						</div>

						<div class="form-group">
							<label>Order Notes</label>
							<textarea
									class="form-control"
									placeholder="Notes about your order, e.g. special notes for delivery."
									rows="5"></textarea>
						</div>
					</div><!-- /.billing-field -->
				</div>

				<div class="col-md-6">
					<div class="review-order">
						<div class="box">
							<h3 class="title">Your order</h3>
							<div class="table-responsive">
								<table class="table cart-table review-order-table">
									<thead>
									<tr>
										<th class="product-name" colspan="2">Product</th>
										<th class="product-total">Total</th>
									</tr>
									</thead>
									<tbody>
									<tr class="item">
										<td class="product-name" colspan="2">
											Twill Silk Scarf <strong class="product-quantity">× 1</strong></td>
										<td class="product-total">
											<span class="amount">$90.00</span>
										</td>
									</tr>
									<tr class="item">
										<td class="product-name" colspan="2">
											Patterned Scarf <strong class="product-quantity">× 1</strong>
											<table class="variation">
												<tbody>
												<tr>
													<th class="variation-size">Size:</th>
													<td class="variation-size">
														<p>Large</p>
													</td>
												</tr>
												</tbody>
											</table>
										</td>
										<td class="product-total">
											<span class="amount">$450.00</span>
										</td>
									</tr>
									</tbody>
									<tfoot>
									<tr class="cart-subtotal">
										<th colspan="2">Subtotal</th>
										<td><span class="amount">$540.00</span></td>
									</tr>
									<tr class="shipping">
										<th colspan="2">Shipping</th>
										<td>
											<p>Free Shipping</p>
										</td>
									</tr>
									<tr class="order-total">
										<th colspan="2">Total</th>
										<td>
											<strong><span class="amount">$540.00</span></strong>
										</td>
									</tr>
									</tfoot>
								</table><!-- /.review-order-table -->
							</div>

							<h2>Payment Method</h2>
							<div id="payment" class="checkout-payment">
								<ul class="payment-methods">
									<li class="payment-method">
										<input id="payment_method_cheque" type="radio" name="payment_method" checked="checked">
										<label for="payment_method_cheque" class="radio" data-slide-toggle="#payment-cheque"
										       data-parent=".payment-methods">Cheque Payment</label>

										<div class="payment-box" id="payment-cheque">
											<p>
												Please send your cheque to Store Name, Store Street, Store Town, Store State / County,
												Store Postcode.
											</p>
										</div>
									</li>
									<li class="payment-method">
										<input id="payment_method_cod" type="radio" name="payment_method">
										<label for="payment_method_cod" class="radio" data-slide-toggle="#payment-cash"
										       data-parent=".payment-methods">Cash on Delivery</label>

										<div class="payment-box" id="payment-cash" style="display:none;">
											<p>Pay with cash upon delivery.</p>
										</div>
									</li>
									<li class="payment-method">
										<input id="payment_method_paypal" type="radio" name="payment_method">
										<label for="payment_method_paypal" class="radio" data-slide-toggle="#payment-paypal"
										       data-parent=".payment-methods">PayPal</label>

										<div class="payment-box" id="payment-paypal" style="display:none;">
											<img src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"
											     class="img-fluid" alt="">
											<p><a href="#!" class="effect">What is PayPal?</a></p>
											<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
										</div>
									</li>
								</ul>
								<div class="text-right">
									<button type="submit" class="btn btn-primary">Place order</button>
								</div>
							</div>
						</div><!-- /.box -->
					</div><!-- /.review-order -->
				</div>
			</form><!-- /.checkout-form -->
		</div><!-- /.container -->
	</section><!-- #page-checkout -->
</div><!-- /.page-wrapper -->
@endsection

@section('script')

@stop
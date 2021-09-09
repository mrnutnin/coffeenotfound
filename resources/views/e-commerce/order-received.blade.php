
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
				<li class="breadcrumb-item">
					<a href="checkout.html">Checkout</a>
				</li>
				<li class="breadcrumb-item active">Order Received</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-order-received">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="alert alert-primary">Thank you, Your order has been received.</div>
					<ul class="order-details">
						<li class="order">
							Order Number: <strong>963</strong>
						</li>
						<li class="date">
							Date: <strong>March 25, 2016</strong>
						</li>
						<li class="total">
							Total: <strong><span class="amount">$499.00</span></strong>
						</li>
						<li class="method">
							Payment Method: <strong>Cheque Payment</strong>
						</li>
					</ul><!-- /.order-details -->

					<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
					<div class="box table-responsive">
						<h3 class="title">Order Details</h3>
						<table class="table cart-table order-details-table">
							<thead>
							<tr>
								<th class="product-name">Product</th>
								<th class="product-total">Total</th>
							</tr>
							</thead>
							<tbody>
							<tr class="item">
								<td class="product-name">
									<a href="product.html">Patterned Scarf</a> <strong class="product-quantity">× 1</strong></td>
								<td class="product-total">
									<span class="amount">$90.00</span>
								</td>
							</tr>
							<tr class="item">
								<td class="product-name">
									<a href="product.html">Bag Maroon</a> <strong class="product-quantity">× 1</strong>
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
							<tr>
								<th scope="row">Subtotal:</th>
								<td><span class="amount">$540.00</span></td>
							</tr>
							<tr>
								<th scope="row">Shipping:</th>
								<td>Free Shipping</td>
							</tr>
							<tr>
								<th scope="row">Payment Method:</th>
								<td>Cheque Payment</td>
							</tr>
							<tr>
								<th scope="row">Total:</th>
								<td><span class="amount">$540.00</span></td>
							</tr>
							</tfoot>
						</table>
					</div><!-- /.box -->
					<div class="text-right">
						<a href="index.html" class="btn btn-primary">Go Back</a>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- #page-order-received -->
</div><!-- /.page-wrapper -->

@endsection

@section('script')

@stop
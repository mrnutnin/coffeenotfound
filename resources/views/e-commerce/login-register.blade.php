
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
				<li class="breadcrumb-item active">My Account</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-login">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="box">
						<h2 class="mb-4">Login</h2>
						<form action="#!" method="POST" class="login-form inputs-border inputs-bg">
							<div class="form-group">
								<div class="required">
									<input type="text" class="form-control" placeholder="Username or email">
								</div>
							</div>
							<div class="form-group">
								<div class="required">
									<input type="password" class="form-control" placeholder="Password">
								</div>
							</div>
							<div class="form-group d-flex align-items-center justify-content-between">
								<div>
									<input type="checkbox" id="rememberme">
									<label for="rememberme" class="checkbox">Remember me</label>
								</div>
								<a href="#!" class="effect float-right">Forgot your password?</a>
							</div>
							<div class="form-group text-right">
								<button type="button" class="btn btn-primary">Login</button>
							</div>
						</form>
					</div><!-- /.box -->
				</div>

				<div class="col-sm-6">
					<div class="box">
						<h2 class="mb-4">Register</h2>
						<form action="#!" method="POST" class="register-form inputs-border inputs-bg">
							<div class="form-group">
								<div class="required">
									<input type="text" class="form-control" placeholder="Username">
								</div>
							</div>
							<div class="form-group">
								<div class="required">
									<input type="email" class="form-control" placeholder="Email address">
								</div>
							</div>
							<div class="form-group">
								<div class="required">
									<input type="password" class="form-control" placeholder="Password">
								</div>
							</div>
							<div class="form-group text-right">
								<button type="button" class="btn btn-primary">Register</button>
							</div>
						</form>
					</div><!-- /.box -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- #page-login -->
</div><!-- /.page-wrapper -->

@endsection

@section('script')

@stop
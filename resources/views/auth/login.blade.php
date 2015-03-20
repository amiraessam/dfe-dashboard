@extends('layouts.app')

@section('page-title')
	Login
@overwrite

@section('head-links')
	@parent
	<link href="/css/login.css" rel="stylesheet">
	<link href="/css/metro.css" rel="stylesheet">
@stop

@section('content')
	<div id="container-login" class="container-fluid">
		<div class="row">
			<div class="col-md-offset-4 col-md-4 col-md-offset-4">
				<div class="container-logo">
					<h3><img src="/img/logo-dfe.png" alt="" />
						<small>DreamFactory Enterprise Dashboard<span>{{ config('dashboard.version') }}</span>
						</small>
					</h3>
				</div>

				@if (count($errors) > 0)
					<div class="alert alert-warning alert-dismissible alert-rounded fade in" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4>Rut-roh...</h4>

						<ul style="list-style: none">
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<form id="login-form" role="form" method="POST" action="{{ url('/auth/login') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon bg_lg"><i class="fa fa-user"></i></span>

							<input type="email"
								   class="form-control email required"
								   autofocus
								   name="email"
								   placeholder="email address"
								   value="{{ old('email') }}">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon bg_ly"><i class="fa fa-lock"></i></span>

							<input class="form-control password required" placeholder="password" name="password" type="password" />
						</div>
					</div>

					<div class="form-group">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember_token">
								remember me
							</label>
						</div>
					</div>

					<label class="control-label sr-only" for="email">Email Address</label>
					<label class="control-label sr-only" for="password">Password</label>

					<div class="form-actions">
						<span class="pull-left"><a href="{{ url('/password/email') }}" class="btn btn-info">Lost password?</a></span>

						<span class="pull-right"><button type="submit" class="btn btn-success">Login</button></span>
					</div>

					<input type="hidden" name="recover" value="0">
				</form>
			</div>
		</div>
	</div>
@stop

@section( 'after-body-scripts' )
	@parent
	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
	<script src="/js/validate.js"></script>
	<script src="/js/login.js"></script>
@stop


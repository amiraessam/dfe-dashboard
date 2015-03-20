<!DOCTYPE html >
<html lang="en">
<head>
	@include('layouts.partials.head-master')

	@section('head-links')
	@show

	@section('head-scripts')
	@show
</head>
<body class="@yield('body-class')">

@include('layouts.partials.navbar')

<div class="container-fluid">
	@yield('content')
</div>

@section('before-body-scripts')
@show

@include('layouts.partials.body-scripts')

@section('after-body-scripts')
@show

</body>
</html>

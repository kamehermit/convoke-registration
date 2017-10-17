@extends('layouts.master')

@section('style')
	<!--Custom Styles-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/success.css')}}">
@endsection

@section('content')

	<!--Dashboard-->
	<!--countdown-->
	<div class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-1"></div>
				<div class="col-xs-10">
					<div class="logo" align="center">
						<a href="http://convoke.tech"><img src="{{ URL::asset('images/logo-alt-1x.png') }}" class="img-responsive"></a>
					</div>
				</div>
				<div class="col-xs-1"></div>
			</div>			
		</div>
	</div>

	<div class="card">
		
			<div class="row">
				<div class="col-md-12">
					<div style="text-align: center;margin: 20px;padding:20px;">
						<h1>Something went wrong. Please try again.</h1>
					</div>
					<br><Br>
					<div align="center">
						<a href="{{ url('/event').'/'.$event->id.'/registration' }}" class="btn btn-primary btn-lg register-btn" style="min-width: 200px;">REGISTER</a>
					</div>
					<br><Br>
				</div>
			</div>
			
			
		
	</div>
<!--
	<div class="sponsor">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2>SPONSOR</h2>
				</div>
			</div>
		</div>
	</div>
-->
	
@endsection

@section('script')
	<script type="text/javascript">
	
	</script>
@endsection
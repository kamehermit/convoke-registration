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
						<a href="#"><img src="{{ URL::asset('images/logo-alt-1x.png') }}" class="img-responsive"></a>
					</div>
				</div>
				<div class="col-xs-1"></div>
			</div>			
		</div>
	</div>

	<div class="card">
		
			<div class="row">
				<div class="col-md-3">
					<div class="canvass">
						
					</div>
				</div>
				<div class="col-md-9">
					<div class="registration">
						<div class="title">
							Register
						</div>
						<div class="row">
							<div class="col-md-3 col-md-push-9">
								<div class="price-tag">
									
								</div>
							</div>
							<div class="col-md-9 col-md-pull-3">
								<div class="form">
									
								<div class="title">
										
								</div>
								<br>
								
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			
		
	</div>

	<div class="sponsor">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2>SPONSOR</h2>
				</div>
			</div>
		</div>
	</div>
	
	
@endsection

@section('script')
	<script type="text/javascript">
	
	</script>
@endsection
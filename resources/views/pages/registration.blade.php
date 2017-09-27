@extends('layouts.master')

@section('style')
	<!--Custom Styles-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/registration.css')}}">
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
									@if($event_data->eb_tickets!=0)
										
											<s>₹{{ $event_data->nm_tickets_amt }}</s>
											<p>₹{{ $event_data->eb_tickets_amt }}</p>
											<p style="font-size:18px;">Early Bird Discount!</p>
										
									@else
										<p>₹{{ $event_data->nm_tickets_amt }}</p>
									@endif
								</div>
							</div>
							<div class="col-md-9 col-md-pull-3">
								<div class="form">
									@if($errors)
								@if(count($errors))
									@foreach($errors->all() as $error)
										<div class="alert alert-info alert-dismissible" role="alert">
											<font style="font-size: 12px; padding: 0px; margin : 0px;">
												{{ $error }}
												</font>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												
											</button>
										</div>
									@endforeach
								@endif
							@endif
								<div class="title">
										{{ $event_data->name }}
								</div>
								<br>
								{!! Form::open(array('route' => 'payment','method'=>'POST')) !!}
									{!! Form::text('name', null, array('class' => 'form-control  email','placeholder'=>'Name','id'=>'name')) !!}
									<br>
									{!! Form::text('email', null, array('class' => 'form-control  email','placeholder'=>'Email','id'=>'email')) !!}
									<br>
									{!! Form::text('phone',null, array('class' => 'form-control','placeholder'=>'Phone','id'=>'phone')) !!}
									<br>
  									{!! Form::submit('&nbsp;&nbsp;Proceed to Pay&nbsp;&nbsp;', array('class' => 'btn btn-default register-btn','name'=>'register','id'=>'register')) !!}

  									{!! app('captcha')->render(); !!}
  								{!! Form::close() !!}
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
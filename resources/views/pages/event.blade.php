@extends('layouts.master')

@section('style')
	<!--Custom Styles-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/event.css')}}">
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
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div class="card-head">
					 	<div class="title">
					 		{{ $event_data->name }}	
					 	</div>
					 	<div class="subtitle">
					 		<b>{{ $event_data->category->category }}</b>	
					 	</div>
					</div>
					<div class="tickets">
						<div class="row">
							<div class="col-md-6">
								<div class="eb-tickets">
									<div class="row">
										<div class="col-xs-2">
											<img src="{{ URL::asset('/images/eb-tickets-alt.jpg') }}" class="img-responsive">
										</div>
										<div class="col-xs-10">
											<div class="text">
												<b>Early Bird Tickets</b>
												<p>{{ $event_data->eb_tickets }} left</p>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-md-6">
								<div class="nm-tickets">
									<div class="row">
										<div class="col-xs-2">
											<img src="{{ URL::asset('/images/nm-tickets-alt.jpg') }}" class="img-responsive">
										</div>
										<div class="col-xs-10">
											<div class="text">
												<b>Standard Tickets</b>
												<p>{{ $event_data->nm_tickets }} left</p>
											</div>
										</div>
									</div>
				
								</div>
							</div>
						</div>
						<div class="e-date">
							<div class="row">
								<div class="col-xs-1">
									<img src="{{ URL::asset('/images/icon-calendars.jpg') }}" class="img-responsive" style="width:80%">
								</div>
								<div class="col-xs-11">
									
									<b>Date : </b>{{ $event_data->start_date_time }} - {{ $event_data->end_date_time }}<br>
									<b>Room : </b>{{ $event_data->room_no }}
								
								</div>
							</div>
						</div>
						<div class="participants">
							<div class="row">
								<div class="col-xs-1">
									<img src="{{ URL::asset('/images/hum.png') }}" class="img-responsive">
								</div>
								<div class="col-xs-11">
									<b>Participant(s) : </b>
									@if($event_data->participants == 1)
										Individual
									@else
										Only {{ $event_data->participants }} humans in a team 
									@endif
								</div>
							</div>	
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card-img">
						<img src="{{ URL::asset('images/').'/'.$event_data->image }}" class="img-responsive">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-push-8">
					<div class="price-tag">
						@if($event_data->eb_tickets!=0)
							<s>₹{{ $event_data->nm_tickets_amt }}</s>
							<p>₹{{ $event_data->eb_tickets_amt }}</p>
							<p style="font-size:18px;">Early Bird Discount!</p>
						@elseif($event_data->nm_tickets_amt == 0.00)
							<p>Free Registration!</p>
						@else
							<p>₹{{ $event_data->nm_tickets_amt }}</p>
						@endif
					</div>
					<div class="register-btn-container" align="center">
						@if($event_data->participants == 1)
							<a href="{{ url('/event').'/'.$event_data->id.'/registration' }}" class="btn btn-primary btn-lg register-btn" style="min-width: 200px;">REGISTER</a><br>
							
						@else
							<a href="{{ url('/event').'/'.$event_data->id.'/registration' }}" class="btn btn-primary btn-lg register-btn" style="min-width: 200px;">REGISTER TEAM</a><br>
							
						@endif
						
					</div>
				</div>
				<div class="col-md-8 col-md-pull-4">
					<div class="description">
						<div class="title">
							Description:
						</div>
						<div class="content">
							{!! $event_data->description !!}
						</div>
						<br>
						<div class="title">
							Contact:
						</div>
						<div class="content">
							@foreach($event_data->members as $member)
								{{ $member->name }} : {{ $member->contact }}<br>
							@endforeach
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
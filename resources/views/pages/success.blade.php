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

	<div class="card" media="print">
		
			<div class="row">
				<div class="col-md-3">
					<div class="canvass">
						
					</div>
				</div>
				<div class="col-md-9">
					<div class="registration">
						<div class="title">
						<img src="{{ URL::asset('images/logo-1x.png') }}" class="img-responsive" style="margin-bottom: 15px;">
						
							<b>Event Pass :</b> {{ $event->name }}
						
						</div>
						<div class="row">
							<div class="col-md-3 col-md-push-9">
								<div class="price-tag">
								<img src="{{ URL::asset('images/').'/'.$event->image }}" class="img-responsive">
									<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->generate($txnid)) !!} ">

								</div>
							</div>
							<div class="col-md-9 col-md-pull-3">
								<div class="form">
									
									<div class="title">
										BOOKING CONFIRMED!
									</div>
								
									<div class="body">
										<div class="row">
											<div class="col-md-6">
												<b>Room : </b>{{$event->room_no}}
											</div>
											<div class="col-md-6">
												<b>Date & Time : </b>{{ $event->start_date_time }}
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<b>Transaction ID : </b>{{ $txnid }}<br>
												<b>Name : </b>{{ $user->name }}<br>
												<b>Email : </b>{{ $user->email }}<br>
												<b>Phone : </b>{{ $user->phone }}<br>
												<b>Team : </b>{{ $team_name }}
											</div>
											<div class="col-md-6">
												<b>Venue :</b> 
												<p>Cluster Innovation Centre,
												   North Campus,
												   University of Delhi</p>

											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-md-12">
												<b>Note :</b>
											</div>
										</div>
										<div class="row">
											<div class="col-md-9">
												<ul>
													<li>This ticket admits one person.</li>
													<li>This ticket is non-refundable.</li>
													<li>You will be required to produce a soft-copy or a hard-copy of this ticket at the checkin counter</li>
													<li>Remeber to bring along your College ID</li>
												</ul>
											</div>
											<div class="col-md-3">
												<b>Contact Details :</b>
												convoke.ducic@gmail.com<br>
												@foreach($event->members as $member)
													{{ $member->contact }} ({{ $member->name }}) <br>
												@endforeach
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<a class="btn register-btn" href="{{ url('/'.$txnid.'/doanload') }}" target="_blank">Download</a>
											</div>
										</div>
									</div>									
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			
		
	</div>

	<br><Br>

@if($event->participants > 1)
	<div class="card2">
		<div class="row">
			<div class="col-md-9">
				<div class="title" style="margin:10px;padding: 10px">
					<h2>Team : {{ $team_name }}</h2>	
				</div>
				
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<div class="content" style="margin:10px;padding: 10px">
					<h4>Invite Members :</h4>
					@for($i=0;$i<$event->participants;$i++)
						<input type="text" name="member[{{$i}}]" placeholder="Email (Member {{ $i }})" class="form-control"><br>
					@endfor
					<button class="btn register-btn" id="invite">INVITE</button>

				</div>
			</div>
			<div class="col-md-3">
			<div style="margin:10px;padding: 10px">
				<h4>Or share this link with your team members: </h4>
				<a href="{{ url('/event/'.$event->id.'/registration/team/'.substr(hash('sha256', $team_name), 0, 20)) }}">{{ url('/event/'.$event->id.'/registration/team/'.substr(hash('sha256', $team_name), 0, 20)) }}</a>
			</div>
			</div>
		</div>
		<br><Br>
	</div>
@endif

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
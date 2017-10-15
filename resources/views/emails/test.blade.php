@extends('layouts.master')

@section('style')
	<!--Custom Styles-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/success.css')}}">
@endsection

@section('content')
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
						
							<b>Event Pass :</b> {!! $event->name !!}
						
						</div>
						<div class="row">
							<div class="col-md-3 col-md-push-9">
								<div class="price-tag">
								<img src="{!! URL::asset('images/').'/'.$event->image !!}" class="img-responsive">
								
									{!! QrCode::size(200)->generate($txnid); !!}
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
												<b>Room : </b>{!! $event->room_no !!}
											</div>
											<div class="col-md-6">
												<b>Date & Time : </b>{!! $event->start_date_time !!}
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<b>Transaction ID : </b>{!! $txnid !!}
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
												+91 8750092252 (Lakshay Sir)</br>
												+91 9873006032 (Utkarsh Sir)
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<button class="btn register-btn" onclick="window.print();return false;">PRINT</button>
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
@endsection

@section('script')
	<script type="text/javascript">
	
	</script>
@endsection
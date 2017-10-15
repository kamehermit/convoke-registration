<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Registration">
	<title>Ticket</title>


	<!--Favicon-->
	<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

	<!--Bootstrap-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!--Fonts-->
	<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">

</head>
<body>
<Br><br>
<div class="ticket">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title" align="center">
					<img src="{{ URL::asset('images/logo-1x.png') }}" class="img-responsive" style="margin: 5px;">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="qr" align="center" style="margin:10px;">
					<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->generate($registration->transaction_id)) !!} ">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="event-title">
					<h2 style="text-align: center;">{{ $event->name }}</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					Details:
					<p>Name : <b>{{ $registration->user->name }}</b></p>
					<p>Email : <b>{{ $registration->user->email }}</b></p>
					<p>Phone : <b>{{ $registration->user->phone }}</b></p>
					<p>Room : <b>{{ $event->room_no }}</b></p>
					<p>Date & Time :  <b>{{ $event->start_date_time }}</b></p>
					
					<hr>
					@if(!empty($registration->team))
						
						Team:
						<p><b>{{ $registration->team[0]->team_name }}</b></p>
						<hr>
					@endif
					@if(!empty($registration->food_item))
						Food:
						@foreach($registration->food_item as $ytr)
							{{ $ytr->item }},&nbsp;
						@endforeach
						
						<hr>
					@endif
					
					Transaction Details :
					<p>Transaction ID : <b>{{ $registration->transaction_id }}</b></p>
					<p>Amount : <b>{{ $registration->amount }}</b></p>
					
					<hr>
					
					Contact Details:
					<p>Email : convoke.ducic@gmail.com</p>
					<p>Phone :</p>
					@foreach($event->members as $member)
						<p>{{ $member->contact }} ({{ $member->name }})</p>
					@endforeach
					
					<hr>
					
					<ul>
						<li>This ticket admits one person.</li>
						<li>This ticket is non-refundable.</li>
						<li>You will be required to produce a soft-copy or a hard-copy of this ticket at the checkin counter</li>
						<li>Remeber to bring along your College ID</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
</div>
</body>
</html>
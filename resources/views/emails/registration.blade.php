<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
</head>
<body>
Hello {{ $registration->user->name }}!<br>
<p>We have received your payment for the following event at Convoke2.0:<br>
Transaction ID: {{$registration->transaction_id}}<br>
Event Name: {{$registration->event->name}}<br>
Amount: {{ $registration->amount }}</p>
<br>
<p><b>IT IS MANDATORY FOR YOU TO BRING YOUR PASS TO THE EVENT.</b></p>
<p>You won't be allowed in without it. Both softcopy and hardcopy would do.</p>

@if($registration->event_id != 94674457)
@if(!empty($registration->team))
<br>
<p>Team Name:
@foreach($registration->team as $team)
	@if(!empty($team))
		{{ $team->team_name }}	
	@endif
@endforeach 

</p>
<p>Make sure all your team-mates have registered for the event. Send this link to all your team-mates for team registrations: 
@foreach($registration->team as $team)
	@if(!empty($team))
		{{ url('/event/'.$registration->event_id.'/registration/team/'.$team->code) }}
	@endif
@endforeach
</p>
@endif
@endif
<br>

<p><b>Venue of the event:</b></p>
<p>Cluster Innovation Centre,
Inside University Stadium,
North Campus, University of Delhi-110007</p>
<br>
<p><b>Directions to reach the venue:</b></p>
<p>Google Maps URL: https://goo.gl/maps/1QeboDnWhZr</p>
<p>If coming by Delhi Metro: Get out at VishvaVidyalaya Metro on the Yellow line towards Samyapur Badli(opposite of Huda City Centre)</p>
<br>
<p>Make sure that you reach the venue at least 15-20 minutes before the event starts so that you can get settled by the time it begins. </p>
<br>

@if($registration->event_id != 94674457)
<p>Event Details: {{ url('/event/'.$registration->event_id) }}</p>
@endif

<p>Your Unique Pass: {{ url($registration->transaction_id.'/download') }}</p>
<br>
<p>Thank You for helping to make Convoke awesome!</p>
<p>Regards<p>
<p>Team Convoke</p>
<p>EmailID: convoke.ducic@gmail.com</p>
<p>Phone Number:</p>
@foreach($event->members as $member)
	<p>{{ $member->contact }} ({{ $member->name }})</p>
@endforeach
</body>
</html>
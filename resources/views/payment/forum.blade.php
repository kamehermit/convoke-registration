<!DOCTYPE html>
<html>
<head>
	<title>Forum</title>
</head>
<body>
<form action="{{ url('/hashhacks/payment') }}" method="POST">
	<input type="text" name="name" placeholder="Name">
	<input type="text" name="email" placeholder="Email">
	<input type="text" name="phone" placeholder="Phone">
	<input type="text" name="token" placeholder="Token">
	<button type="submit">SUBMIT</button>	
</form>

</body>
</html>
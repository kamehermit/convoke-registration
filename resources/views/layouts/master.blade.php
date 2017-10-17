<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.head')
	@yield('style')
</head>
<body>
	
	@yield('content')
	@yield('script')
	@include('includes.sponsor')
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	@include('website.layout.partials.head')
</head>
<body>
	@include('website.layout.partials.navigation')

<main style="min-height: 800px !important; margin-bottom: 30px !important;" class="container">
	@yield('content')

</main>	

	@include('website.layout.partials.footer')

	@include('website.layout.partials.scripts')

</body>
</html>
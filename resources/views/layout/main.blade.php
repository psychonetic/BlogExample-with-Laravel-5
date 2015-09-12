<!DOCTYPE html>
<html lang="de">
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    @yield('css')


    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Ein Blog mit Laravel</title>

</head>

<body>
	<div class="container">
		<div class="row">
			<h1>Beispielblog</h1>
		</div>
	</div>
	<div class="container">
		@yield('content')
	</div>

<footer>
<div class="container" id="footer">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-5">
			©Copyright ExampleBlog with Laravel
		</div>
	</div>
</footer>



@yield('scripts')
</body>
</html>

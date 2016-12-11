<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
	<h1> my first view in laravel</h1>
	@if($var1 == 'Kappa') KappaHD<br>@endif
	{{$var1}}<br>
	{{$var2}}<br>
	{{$var3}}<br>

	<ul>
		@foreach($var4 as $percurso)
			<li>{{$percurso->name}}</li>
		@endforeach
	</ul>
</body>
</html>
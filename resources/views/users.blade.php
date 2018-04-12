<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Listado de Usuarios</title>
</head>
<body>
	<!-- Esto lo estamos trayendo del controlador UserController -->
	<h1>{{ $title }}</h1>
	<hr>
	@if (!empty($users))
		<ul>
			@foreach ($users as $user)
				<li>{{ $user }}</li>
			@endforeach
		</ul>
	@else
		<p>No hay usuarios registrados</p>
	@endif
</body>
</html>
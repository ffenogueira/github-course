<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titulo')</title>
</head>
<body>

@include('layout._includes.topo')


@yield('conteudo')

@include('layout._includes.footer')

</body>
</html>



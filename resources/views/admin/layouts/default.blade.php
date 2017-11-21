<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>{{$title ?? 'Crud-Básico'}}</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background: #2c3e50; columns: white;">
	<nav class="navbar navbar-default navbar-static-top ">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapsed">

					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Crud-Básico</a>
		</div>
	</div>	
</nav>
	
	<main>	
		<section class="container">
			{{$slot}}
		</section>
	</main>

	<script src="/js/app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Untitled Document</title>
</head>
 
<body>
	<h1 style="color:red;">Draga moja Sanja</h1>

	@foreach ($articles as $article)
		<div>
			<h2> Title: {{ $article->title }} </h2>
			<p> body: {{ $article->title }} </p>

			<a href="{{ $article->id }}">Klikni...</a>
		</div>
	@endforeach
</body>
</html>
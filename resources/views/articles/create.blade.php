<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Untitled Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
    integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
 
<body>
	<h1>Create new article</h1>

	{!! Form::open(['url'=>'articles']); !!}

	<div class="form-group">
	
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class'=>'form-control']) !!}

	</div>	

	<div class="form-group">

		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body', null, ['class'=>'form-control']) !!}
	
	</div>	

	<div class="form-group">

		{!! Form::submit('Add Article', ['class'=>'btn btn-primary form-control']) !!}
	
	</div>	
	
		{!! Form::close(); !!}
	

</body>
</html>
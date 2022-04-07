<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title> Start </title>
</head>
<body>
<div class="container-sm">
	<h1>Enter the name of the students </h1>

	<form action="/enter-attempts" method="POST">
	@csrf
	@for ($i = 1; $i <= 5; $i++)
	<div class="row">
		<label>Student {{ $i }} Name:</label>
		<input type="text" name="name_{{ $i }}" class="form-control">
	</div>
	@endfor
	<hr />
	<div class="row">
		<button class="btn btn-primary btn-1g">Save Students </button>
	</div>
    </form>
</div>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title> Attempts </title>
</head>
<body>
<div class="container-sm">
	<h1>StudentsAttempts</h1>

	<form action="/commute-power" method="POST">
	<input type="hidden" name="student_1" value="{{ $student_1 }}">
	<input type="hidden" name="student_1" value="{{ $student_2 }}">
	<input type="hidden" name="student_1" value="{{ $student_3 }}">
	@csrf
<div class="row">
	<label>Student: <Strong>{{ $student_1 }}</Strong></label>
	<div class="col col-md-4">
		<label> Attempt Score 1</label>
		<input type="number" name="s1_attempt1" class="form-control">
	</div>
		<div class="col col-md-4">
		<label> Attempt Score 2</label>
		<input type="number" name="s1_attempt2" class="form-control">
	</div>

<div class="row">
	<label>Student: <Strong>{{ $student_2 }}</Strong></label>
	<div class="col col-md-4">
		<label> Attempt Score 1</label>
		<input type="number" name="s2_attempt1" class="form-control">
	</div>
		<div class="col col-md-4">
		<label> Attempt Score 2</label>
		<input type="number" name="s2_attempt2" class="form-control">
	</div>

	<div class="row">
	<label>Student: <Strong>{{ $student_3 }}</Strong></label>
	<div class="col col-md-4">
		<label> Attempt Score 1</label>
		<input type="number" name="s3_attempt1" class="form-control">
	</div>
		<div class="col col-md-4">
		<label> Attempt Score 2</label>
		<input type="number" name="s3_attempt2" class="form-control">
	</div>

	<div class="row">
	<label>Student: <Strong>{{ $student_4 }}</Strong></label>
	<div class="col col-md-4">
		<label> Attempt Score 1</label>
		<input type="number" name="s4_attempt1" class="form-control">
	</div>
		<div class="col col-md-4">
		<label> Attempt Score 2</label>
		<input type="number" name="s4_attempt2" class="form-control">
	</div>

	<div class="row">
	<label>Student: <Strong>{{ $student_5 }}</Strong></label>
	<div class="col col-md-4">
		<label> Attempt Score 1</label>
		<input type="number" name="s5_attempt1" class="form-control">
	</div>
		<div class="col col-md-4">
		<label> Attempt Score 2</label>
		<input type="number" name="s5_attempt2" class="form-control">
	</div>
</div>
<hr />
<div class="row">
	<button class="btn btn-primary btn-1g" type="submit">
		Compute Average Attempt Score
	</button>
</div>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
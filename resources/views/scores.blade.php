<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title> Scores </title>
</head>
<body>
<div class="container-sm">
	<h1>Player Attempts Average Score</h1>

	<table class="table table-striped tble-hover">
		<thead>Student
		<tr>
			<th scope="col">Student</th>
			<th scope="col">Attempt Score 1 </th>
			<th scope="col">Attempt Score 2 </th>
			<th scope="col">Average</th>
		</tr>
	    </thead>
	    <tbody>
	    <tr>
	    	<td>{{ $student_1 }}</td>
	    	<td>{{ $s1_attempt 1 }}</td>
	    	<td>{{ $s1_attempt 2 }}</td>
	    	<td>{{ $s1_average }}</td>
	    </tr>

	    <tr>
	    	<td>{{ $student_2 }}</td>
	    	<td>{{ $s2_attempt 1 }}</td>
	    	<td>{{ $s2_attempt 2 }}</td>
	    	<td>{{ $s2_average }}</td>
	    </tr>

	    <tr>
	    	<td>{{ $student_3 }}</td>
	    	<td>{{ $s3_attempt 1 }}</td>
	    	<td>{{ $s3_attempt 2 }}</td>
	    	<td>{{ $s3_average }}</td>
	    </tr>
	    
	    <tr>
	    	<td>{{ $student_4 }}</td>
	    	<td>{{ $s4_attempt 1 }}</td>
	    	<td>{{ $s4_attempt 2 }}</td>
	    	<td>{{ $s4_average }}</td>
	    </tr>
	    
	    <tr>
	    	<td>{{ $student_5 }}</td>
	    	<td>{{ $s5_attempt 1 }}</td>
	    	<td>{{ $s5_attempt 2 }}</td>
	    	<td>{{ $s5_average }}</td>
	    </tr>
	    </tbody>
		</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
	    








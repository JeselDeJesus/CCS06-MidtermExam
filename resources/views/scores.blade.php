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
	<h1>Students Average Score</h1>

	<table class="table table-striped tble-hover">
		<tr>
			<th scope="col">Student</th>
			<th scope="col">Midterm Grade </th>
			<th scope="col">Finals Grade </th>
			<th scope="col">Average</th>
			<th scope="col">Remarks</th>
		</tr>
	    </thead>
	    <tbody>
	    <tr>
	    	<td>{{ $student_1 }}</td>
	    	<td>{{ $s1_Midterm }}</td>
	    	<td>{{ $s1_Finals }}</td>
	    	<td>{{ $s1_average }}</td>
	    	<td>{{ $s1_remarks }}</td>
	    </tr>

	    <tr>
	    	<td>{{ $student_2 }}</td>
	    	<td>{{ $s2_Midterm }}</td>
	    	<td>{{ $s2_Finals }}</td>
	    	<td>{{ $s2_average }}</td>
	    	<td>{{ $s2_remarks }}</td>
	    </tr>

	    <tr>
	    	<td>{{ $student_3 }}</td>
	    	<td>{{ $s3_Midterm }}</td>
	    	<td>{{ $s3_Finals }}</td>
	    	<td>{{ $s3_average }}</td>
	    	<td>{{ $s3_remarks }}</td>
	    </tr>
	    
	    <tr>
	    	<td>{{ $student_4 }}</td>
	    	<td>{{ $s4_Midterm }}</td>
	    	<td>{{ $s4_Finals }}</td>
	    	<td>{{ $s4_average }}</td>
	    	<td>{{ $s4_remarks }}</td>
	    </tr>
	    
	    <tr>
	    	<td>{{ $student_5 }}</td>
	    	<td>{{ $s5_Midterm }}</td>
	    	<td>{{ $s5_Finals }}</td>
	    	<td>{{ $s5_average }}</td>
	    	<td>{{ $s5_remarks }}</td>
	    </tr>
	    </tbody>
		</table>
</div>

</body>
</html>
	    








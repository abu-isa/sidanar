<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="/css/fontstyle.css">
</head>
<body>
<div id="particles-js"></div>
<form>
	<div class="wrapper">
		<div class="title">Delete Seminar</div>

		@if (session('alert'))
		    <div class="alert alert-warning alert-block"> 
          		<strong>{{ session('alert') }}</strong>
      		</div>
		@endif
		<table class="table">
			@foreach($data as $namaseminar)
		  		<tr>
		    		<td style="color: white">{{ $namaseminar->judul }}</td>
		        	<td style="float: right"><a class="btn btn-outline-danger" href = "{{url('/hapus')}}/<?php echo $namaseminar->id ?>">Delete</a></td>
		  		</tr>
			@endforeach
		</table>
	</div>
</form>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

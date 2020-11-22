<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/logo.jpg">
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
<form action ='/addseminar' method ='post'>
	<input type ='hidden' name ='_token' value ='<?php echo csrf_token(); ?>'>
	<div class="wrapper">
		<div class="title">Add Seminar</div>

		@if (session('success'))
		    <div class="alert alert-success alert-block"> 
          		<strong>{{ session('success') }}</strong>
      		</div>
		@endif
		@if (session('alert'))
		    <div class="alert alert-danger alert-block"> 
          		<strong>{{ session('alert') }}</strong>
      		</div>
		@endif
		<div class="form">

			<div class="inputfield">
				<label class="control-label col-sm-2" for="judul">Judul Seminar</label>
				<input type="text" class="input form-control" id="name" placeholder="Masukkan Judul Seminar" name="judul" >
			</div>
			<div class="inputfield">
				<label class="control-label col-sm-2" for="tanggal">Tanggal Seminar</label>
				<input type="text" class="date form-control" id="tanggal" placeholder="Masukkan Tanggal Seminar" name="tanggal">
			</div>
			<div class="inputfield">
				<label class="control-label col-sm-2" for="harga">Harga Seminar</label>
				<input type="text" class="input form-control" id="harga" placeholder="Masukkan harga Seminar" name="harga">
			</div>
			<!-- <div class="inputfield">
				<label class="control-label col-sm-2" for="harga">Harga</label> 
				<input type="text" class="input form-control" id="harga" placeholder="Masukkan Harga Seminar" name="harga">
			</div> -->

            <br><br>
			<div class="inputfield">
				<input type="submit" class="btn"></div>
		</div>
	</div>
</form>
<script type="text/javascript">
    $('.date').datepicker({  
       format: 'dd-mm-yyyy'
     });  
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>


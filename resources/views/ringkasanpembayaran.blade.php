<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/logo.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="{{asset('/frontend')}}/img/fav.png">
<link rel="stylesheet" href="/css/fontstyle.css">
</head>
<body>
<div id="particles-js"></div>
<form action ='/home' method ='get'>
	<div class="wrapper">
		<div class="title">Ringkasan Pembayaran</div>

			@if (session()->has('notifsuccess'))
			    <div class="alert alert-success alert-block"> 
	          		<strong>{{ session()->get('notifsuccess') }}</strong>
	      		</div>
			@endif

			@if (session()->has('notifpending'))
			    <div class="alert alert-info alert-block"> 
	          		<strong>{{ session()->get('notifpending') }}</strong>
	      		</div>
			@endif
			
			<div class="form">
				@foreach($form as $datapembayaran)

					<div class="inputfield">
						<label class="control-label col-sm-2">Nama</label>
						<input type="text" class="input form-control" value="{{$datapembayaran->name}}" readonly>
					</div>

					<div class="inputfield">
						<label class="control-label col-sm-2">Email</label>
						<input type="text" class="input form-control" value="{{$datapembayaran->email}}" readonly>
					</div>

					<div class="inputfield">
						<label class="control-label col-sm-2">Nomor Telepon</label>
						<input type="text" class="input form-control" value="{{$datapembayaran->mobile_number}}" readonly>
					</div>

					<div class="inputfield">
						<label class="control-label col-sm-2">Alamat</label>
						<input type="textarea" class="input form-control" value="{{$datapembayaran->alamat}}" readonly>
					</div>

				@endforeach

				@foreach($data as $seminarpilihan)

					<div class="inputfield">
						<label class="control-label col-sm-2">Webinar</label>
						<input type="text" class="input form-control" value="{{$seminarpilihan->judul}}" readonly>
					</div>

					<div class="inputfield">
						<label class="control-label col-sm-2">Tanggal</label>
						<input type="text" class="input form-control" value="{{$seminarpilihan->tanggal}}" readonly>
					</div>

					<div class="inputfield">
						<label class="control-label col-sm-2">Harga</label>
						<input type="text" class="input form-control" value="{{$seminarpilihan->harga}}" readonly>
					</div>

				@endforeach

				@foreach($form as $datapembayaran)

					<div class="inputfield">
						<label class="control-label col-sm-2">Status Pembayaran</label>
						<input type="text" class="input form-control" value="{{$datapembayaran->status_pembayaran}}" readonly>
					</div>

				@endforeach

	            <br><br>

				<div class="inputfield">
					<button type="submit" class="btn" href = "{{url('/home')}}">Back to Home</button>
				</div>
			</div>
		</div>
	</div>
</form>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
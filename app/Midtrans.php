<?php
    include(app_path() . '\Midtrans.php');
    
    //Set Server Key
    \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');

    // Enable Sanitization
    \Midtrans\Config::$isSanitized = true;

    // Enable 3D-Secure
    \Midtrans\Config::$is3ds = true;

    $transaction_details = [
        'order_id' => rand(),
        'gross_amount' => $seminar[0]->harga
    ];

    $customer_details = [
    	'first_name' => $form[0]->name,
    	'phone' => $form[0]->mobile_number,
    	'email' => $form[0]->email
    ];

    $enable_payments = array('gopay');

    $transaction = array(
        'enabled_payments' => $enable_payments,
        'transaction_details' => $transaction_details,
        'customer_details' => $customer_details,
    );

    $snapToken = \Midtrans\Snap::getSnapToken($transaction);
?>

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

<div class="wrapper">
	<div class="title">Confirmation Form</div>
	<div class="form">
		@foreach($form as $user)
			<div class="inputfield">
				<label class="control-label col-sm-2">Nama</label>
				<input type="text" class="input form-control" value="{{$user->name}}" readonly>
			</div>
			<div class="inputfield">
				<label class="control-label col-sm-2">Email</label>
				<input type="text" class="input form-control" value="{{$user->email}}" readonly>
			</div>
			<div class="inputfield">
				<label class="control-label col-sm-2">Nomor Telepon</label>
				<input type="text" class="input form-control" value="{{$user->mobile_number}}" readonly>
			</div>
		@endforeach

		@foreach($seminar as $seminarhasil)
			<div class="inputfield">
				<label class="control-label col-sm-2">Nama Seminar</label>
				<input type="text" class="input form-control" value="{{$seminarhasil->judul}}" readonly>
			</div>
			<div class="inputfield">
				<label class="control-label col-sm-2">Tanggal Seminar</label>
				<input type="text" class="input form-control" value="{{$seminarhasil->tanggal}}" readonly>
			</div>
			<div class="inputfield">
				<label class="control-label col-sm-2">Harga Seminar</label>
				<input type="text" class="input form-control" value="{{$seminarhasil->harga}}" readonly>
			</div>
		@endforeach

        <br><br>
		<div class="inputfield" id="result-json">
			<button id="pay-button" class="btn">Pay</button>
		</div>
	</div>
</div>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="env('MIDTRANS_CLIENT_KEY')"></script>
    <script type="text/javascript">
            document.getElementById('pay-button').onclick = function(){
                snap.pay('<?php echo $snapToken?>', {
                    onSuccess: function(result){
                        document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        window.location.href = "homesuccess/{{$user->id}}";
                    },
                    onPending: function(result){
                        document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        window.location.href = "homepending/{{$user->id}}";
                        // $.ajax({
                        //     url:'save',
                        //     dataType:"json",
                        //     method: "POST",
                        //     timeout:600000,
                        //     data: "result",
                        // });
                    },
                    onError: function(result){
                        document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    }
                });
            };
    </script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>


<!-- Option Pembayaran -->
<!--<div class="inputfield">
		<label class="control-label col-sm-3" for="gopay">Pembayaran</label>
		<input id="customRadioInline1" type="radio" name="customRadioInline1" class="custom-control-input" checked="true"> 
	    <div data-value="dk"> 
	       	<img class="fit-image" src="https://pijakpijak.com/static/media/logo-gopay-vector.1f401815.png" width="200px" height="70px"> 
	    </div>
    	<br>
	</div>
	<div class="inputfield">
		<label class="control-label" for="dana"></label>
        <div data-value="visa" > 
            <input id="customRadioInline1" type="radio" name="customRadioInline1" class="custom-control-input" checked="true">
            <img class="fit-image" src="https://kitabisa-userupload-01.s3-ap-southeast-1.amazonaws.com/_production/partner/411/34_411_1570678804_30628413_f.png" width="200px" height="60px"> 
       </div>
    </div>
	<div class="inputfield">
		<label for="ovo"></label>
		<input id="customRadioInline1" type="radio" name="customRadioInline1" class="custom-control-input" checked="true">
        <div data-value="master"> 
        	<img class="fit-image" src="https://1.bp.blogspot.com/-zqvCZXYnnfA/XciTU6Ikw_I/AAAAAAAABJc/TrUNMleviBsRtXgnDWzFEhZjxN03ET7_gCLcBGAsYHQ/s1600/Logo%2BOVO.png" width="170px" height="60px"> 
    	</div>
	</div>
	<div class="inputfield">
		<label for="bca"></label>
		<input id="customRadioInline1" type="radio" name="customRadioInline1" class="custom-control-input" checked="true">
        <div data-value="paypal">
            <img class="fit-image" src="https://www.qraved.com/eatjakarta/wp-content/uploads/2014/03/2.png" width="200px" height="60px"> 
        </div> 
	</div> -->
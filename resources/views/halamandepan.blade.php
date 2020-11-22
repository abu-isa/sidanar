<!DOCTYPE HTML>
<html>
	<head>
		<title>JP Webinar Form</title>
		<link rel="shortcut icon" href="images/logo.jpg">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
		<header id="header" class="skel-layers-fixed">
			<h1><a href="/">The Jakarta Post</a></h1>
			<nav id="nav">
				<ul>
					<li><span class="lnr lnr-envelope"></span> <span class="text">Email: life@jakpost.com</span></a></li>
			  		<li><a href="tel:+62215300476"><span class="lnr lnr-phone-handset"></span> <span class="text">Phone: (62) 21 5300-476</span></a></li>	
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<section id="banner">
			<div class="inner">
				<h2>Hello!</h2>
				<p>Webinar Registries</a></p>
				<ul class="actions">
					<li><a href="/daftar" class="button big special">Register!</a></li>
				</ul>
			</div>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style1">
			<header class="major">
				<h2>Our Webinar</h2>
				<p>Register now before it runs out!</p>
			</header>
			<div class="container">
				<div class="row">
					@foreach($data as $seminar)
						<div class="4u">
							<section class="special box">
								<i class="icon fa-area-chart major"></i>
								<h3>{{$seminar->judul}}</h3>
								<p>{{$seminar->tanggal}}</p>
							</section>
						</div>
					@endforeach
				</div>
			</div>
		</section>
			
		<!-- Footer -->
		<footer id="footer">
			<div class="container">
				<div class="row double">
					<div class="6u">
						<div class="row collapse-at-2">
							<div class="6u">
								<h3>Read more</h3>
								<ul class="alt">
									<li><a href="https://www.thejakartapost.com/news">News</a></li>
									<li><a href="https://www.thejakartapost.com/news/national">National</a></li>
									<li><a href="https://www.thejakartapost.com/news/business">Business</a></li>
									<li><a href="https://www.thejakartapost.com/paper/todays-paper">Paper Edition</a></li>
								</ul>
							</div>
							<div class="6u">
								<h3>Social Media</h3>
								<ul class="alt">
									<li><a href="https://twitter.com/jakpost?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter</a></li>
									<li><a href="https://www.facebook.com/jakpost/">Facebook</a></li>
									<li><a href="https://www.youtube.com/channel/UC2zhLSPeHaH7fFBsRLf2Z0w">Youtube</a></li>
									<li><a href="https://www.instagram.com/jakpostimages/?hl=en">Instagram</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="6u">
						<h2>Our Office</h2>
						<p>The Jkt Post Building, Jl. Palmerah Barat No.142-143 1 2, RT.1/RW.2, Gelora, Kecamatan Tanah Abang,Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270</p>
					</div>
				</div>
				<ul class="copyright">
					<li>&copy; The Jakarta Post</li>
					<li>Design: <a href="https://www.instagram.com/calvinandersenn/">Calvin Andersen</a></li>
				</ul>
			</div>
		</footer>
	</body>
</html>
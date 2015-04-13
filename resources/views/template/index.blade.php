<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Telephasic by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		{!!Html::script("assets/js/jquery.min.js")!!}
		{!!Html::script("assets/js/jquery.dropotron.min.js")!!}
		{!!Html::script("assets/js/skel.min.js")!!}
		{!!Html::script("assets/js/skel-layers.min.js")!!}
		{!!Html::script("assets/js/init.js")!!}
		{!!Html::script("assets/js/jquery.min.js")!!}
		{!!Html::script("assets/js/jquery.custombox.js")!!}
		{!!Html::style("assets/css/jquery.custombox.css")!!}
		<noscript>
			{!!Html::style("assets/css/skel.css")!!}
			{!!Html::style("assets/css/style.css")!!}
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage" style="font-size:15pt;">

		<!-- Header -->
			<div id="header-wrapper" style="padding:0em;padding:5em;">
				<div id="header" class="container">

					<!-- Logo -->
						<h1 id="logo"><a href="#">PT NINDYA KARYA</a></h1>
				</div>

				<!-- Hero -->
					<section id="hero" class="container">
						<header>
							<h2>
								Sistem Pendukung Keputusan
							</h2>
						</header>
						<p>Penerimaan Karyawan Dengan Metode
								<br><b><i>Technique For Order Preference By Similiry To Ideal Solution</i></b></p>
						<ul class="actions">
							<li><a href="#tambah" class="button" id="sign">Login</a></li>
						</ul>
					</section>


					<!-- modal container -->

					<div id="tambah" style="display: none;" class="modal-example-content">
						<div class="modal-example-header" style="height:65px;" onclick="$.fn.custombox('close');">
							<h3 style="float:left;line-height:1em;">Login</h3>
						</div>
						<div class="modal-example-body">
							<div class="row">
						<section class="12u 12u(narrower)">
							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<strong>Whoops!</strong> There were some problems with your input.<br><br>
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

							<p style="font-size:10pt">username: admin
							password:drummer5
							&nbsp; | &nbsp;
							username: badanindependent
							password: isaisaisa
							</p>
							<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="row 50%">						
										<div class="12u 12u(mobile)">
											<input placeholder="Username" type="text" maxlength="25" name="username" value="{{ old('username') }}">
										</div>
									</div>
									<div class="row 50%">
										<div class="12u 12u(mobile)">
											<input name="password" placeholder="Password" type="password" maxlength="25" title="Perhatikan besar dan kecilnya huruf!"/>
											<p style="font-size:10pt;"><input type="checkbox" name="remember"> Ingat saya!</p>
										</div>
									</div>
									
									<div class="row 50%">
										<div class="12u">
										<ul class="actions">
											<li><input type="submit" value="Login" /></li>
											<li><input type="reset" value="Clear form" /></li>
											<li><input type="button" class="close button" onclick="$.fn.custombox('close');" value="&times;"/></li>
										</ul>
										<a class="btn btn-link" href="{{ url('/password/email') }}" style="font-size:10pt;">Lupa kata sandi?</a>
										</div>
									</div>
							</form>
						</section>
					</div>
						</div>
					</div>
					
			<script>
			    $('#sign').on('click', function () {
			        $.fn.custombox( this, {
			            effect: 'sign',
			            overlayOpacity : 0.7,
			            overlayColor: '#EBB198',
			            speed: 5000
			        });
			        return false;
			    });
			</script>

			</div>
				<div id="copyright" class="container" style="padding-top:0px;margin-top:5px;">
					<ul class="menu">
						<li>&copy; Sistem Pendukung Keputusan. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
	</body>
</html>
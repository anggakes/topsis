<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sistem Pendukung Keputusan</title>
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
		{!!Html::style("assets/css/glyphicons.css")!!}
		{!!Html::style("assets/datatables/jquery.datatables.css")!!}
		@yield('css')
		<noscript>
			
		</noscript>
		{!!Html::style("assets/css/skel.css")!!}
		{!!Html::style("assets/css/style.css")!!}
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<style>
.disabled {
   pointer-events: none;
   cursor: default;
}
		</style>
	</head>
	<body class="no-sidebar">

		<!-- Header -->
			<div id="header-wrapper" style="  height: 120px;">
				<div id="header" class="container">

					<!-- Logo -->
						<h1 id="logo"><a href=".">{!!HTML::image("assets/logo/nindya-01.png");!!} <p id="logo">PT NINDYA KARYA</p></a></h1>
						<nav id="nav" style="  margin-top: 73px;">
							<ul>
								<li style="white-space: nowrap;"><a href="{!! url('/') !!}">Home</a></li>
								@if(Auth::user()->roles != 'top manager')
								@if(Auth::user()->roles == "admin")
								<li class="opener" style="-webkit-user-select: none; cursor: pointer; white-space: nowrap; opacity: 1;">
									<a href="">Divisi</a>
									
										<ul class="" style="-webkit-user-select: none; display: none; position: absolute;">
												<li style="white-space: nowrap;"><a href="{!! route('divisi.index') !!}">Lihat Divisi</a></li>
												<li style="white-space: nowrap;"><a href="{!! route('divisi.create') !!}" id="signDis" data-target="#inputan">Tambah Divisi</a></li>
										</ul>
								</li>

								<li class="opener" style="-webkit-user-select: none; cursor: pointer; white-space: nowrap; opacity: 1;">
									<a href="">Manajemen Pengguna</a>
									
										<ul class="" style="-webkit-user-select: none; display: none; position: absolute;">
												<li style="white-space: nowrap;"><a href="{!! route('user.index') !!}">Lihat Pengguna</a></li>
												<li style="white-space: nowrap;"><a href="{!! route('user.create') !!}" id="signPen" data-target="#input">Tambah Pengguna</a></li>
										</ul>
								</li>
								@endif
								<li class="opener" style="-webkit-user-select: none; cursor: pointer; white-space: nowrap; opacity: 1;">
									<a href="">Lowongan</a>
									
										<ul class="" style="-webkit-user-select: none; display: none; position: absolute;">
												<li style="white-space: nowrap;"><a href="{!! route('lowongan.index') !!}">Lihat Lowongan</a></li>
												<li style="white-space: nowrap;"><a href="{!! route('lowongan.create') !!}" id="signLow" data-target="#input">Tambah Lowongan</a></li>
										</ul>
								</li>
								@endif
								<li style="white-space: nowrap;"><a href="{!! url('login/logout') !!}">Log Out</a></li>

								<li class="opener" style="-webkit-user-select: none; cursor: pointer; white-space: nowrap; opacity: 1;">
									<a href="">Dropdown</a>
									
										<ul class="" style="-webkit-user-select: none; display: none; position: absolute;">
												<li style="white-space: nowrap;"><a href="#" style="display: block;">Etiam dolore nisl</a></li>
												<li class="opener" style="-webkit-user-select: none; cursor: pointer; white-space: nowrap;">
													<a href="" style="display: block;">Phasellus consequat</a>
													<ul class="dropotron" style="-webkit-user-select: none; display: none; position: absolute;">
														<li style="white-space: nowrap;"><a href="#" style="display: block;">Lorem ipsum dolor</a></li>
														<li style="white-space: nowrap;"><a href="#" style="display: block;">Phasellus consequat</a></li>
														<li style="white-space: nowrap;"><a href="#" style="display: block;">Magna phasellus</a></li>
														<li style="white-space: nowrap;"><a href="#" style="display: block;">Etiam dolore nisl</a></li>
													</ul>
												</li>
										</ul>
								</li>
							</ul>
						</nav>
				</div>
			</div>

		<!-- Main -->
			<div class="wrapper">
				<div class="container" id="main">
					
					<!-- Content -->

				@yield('content')
				</div>
			</div>

					<!-- Footer -->
			
			<div id="copyright" class="container" style="height:50px;">
				<ul class="menu">
					<li>&copy; Sistem Pendukung Keputusan. All rights reserved.</li>
				</ul>
			</div>
				<!-- ================================================== --> 
				<!-- Placed at the end of the document so the pages load faster --> 

				<!-- Js -->
			{!!Html::script("assets/jquery/jquery-2.0.3.min.js")!!}
			{!!Html::script("assets/bootstrap/js/bootstrap.js")!!}
			{!!Html::script("assets/laravel/laravel.bootstrap.js")!!} 
			{!!Html::script("assets/datatables/jquery.dataTables.js")!!}

			<script type="text/javascript">
				function edit(x) {
                $.fn.custombox( x, {
                    effect: 'makeway',
                    overlayOpacity : 0.7,
                    overlayColor: '#EBB198',
                    speed: 150
                });
                return false;
            }
			    /* refresh modal u can change the text with img */
				    refreshModal("Loading..");


			$('#signDis').on('click', function () {
                $.fn.custombox( this, {
                    effect: 'slip',
                    overlayOpacity : 0.7,
                    overlayColor: '#EBB198',
                    speed: 150
                });
                return false;
            });

            $('#signPen').on('click', function () {
                $.fn.custombox( this, {
                    effect: 'slip',
                    overlayOpacity : 0.7,
                    overlayColor: '#EBB198',
                    speed: 150
                });
                return false;
            });

            $('#signLow').on('click', function () {
                $.fn.custombox( this, {
                    effect: 'slip',
                    overlayOpacity : 0.7,
                    overlayColor: '#EBB198',
                    speed: 150
                });
                return false;
            });
			</script>

			@yield('js')
	</body>
</html>
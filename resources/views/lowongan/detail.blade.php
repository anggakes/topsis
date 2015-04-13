@extends('template.backend')

@section('content')
<article id="content" class="8u 12u(narrower)">
              <header class="image-wrapper first 12u(narrower)">
                <h2 class="image">Detail</h2>  
              </header>
             
            <div class="row">
            	 <div class="row 8u 12u(narrower)">           

					@if(Auth::user()->roles == "admin")
						
						<div class="10u 12u(mobile)">
		                      <p class="subtitle"><i class="icon-g-folder-open"></i>Tahap Administrasi</p>
		                      <a class="pull-right button small 4(narrower) azure
		                      		<?php echo ($jumlah_pelamar>3)? "":"disabled" ;?>" 
			                      	id='hasilAdm'  
									href="{!! route('adm.get.hasil',$id_lowongan) !!}" >
		                      		<i class="icon-g-group"></i> Hasil</a>

		                      <a class="pull-right button small 4(narrower) mistyrose
		                      		<?php echo ($lowongan->id_tahap>1)? "":"disabled" ;?>" 
									id='kelolaPelamar'  
									href="{!! route('pelamar.index',$id_lowongan) !!}" >
		                      		<i class="icon-g-user-add"></i> Kelola Pelamar</a>

		                      <a class="pull-right button small 4(narrower) blanchedalmond" 
		                      		id='bobotAdm'  
		                      		href="{!! route('adm.get.bobot',$id_lowongan) !!}" 
									data-toggle="modal" 
									data-target="#myModal">
		                      		<i class="icon-g-cogwheels"></i> Bobot</a>
		                 </div>
					@endif
			

					@if(Auth::user()->roles == "badan independent")

						<div class="10u 12u(mobile)">
		                      <p class="subtitle"><i class="icon-g-old-man"></i>Tahap Psikotes</p>
		                      <a class="pull-right button small 4(narrower) azure
		                      		<?php echo ($lowongan->id_tahap>5)? "":"disabled" ;?>" id='hasilAdm'  
									href="{!! route('psikotes.get.hasil',$id_lowongan) !!}" >
		                      		<i class="icon-g-group"></i> Hasil</a>
		                      
		                      <a class="pull-right button small 4(narrower) mistyrose
		                      		<?php echo ($lowongan->id_tahap>4)? "":"disabled" ;?>" id='kelolaPelamar'  
									href="{!! route('psikotes.get.index', $id_lowongan) !!}" 
		                      		style="min-width:138px;">
		                      		<i class="icon-g-pen"></i> Input Nilai</a>
		                      
		                      <a class="pull-right button small 4(narrower) blanchedalmond
		                      		<?php echo ($lowongan->id_tahap>3)? "":"disabled" ;?>" 
		                      		id='bobotPsikotes'  
									href="{!! route('psikotes.get.bobot',$id_lowongan) !!}" 
									data-toggle="modal" 
									data-target="#myModal">
		                      		<i class="icon-g-cogwheels"></i> Kuota</a>
	                  	</div>

						<div class="10u 12u(mobile)">
		                      <p class="subtitle"><i class="icon-g-old-man"></i>Tahap Tertulis</p>
		                      <a class="pull-right button small 4(narrower) azure
		                      		<?php echo ($lowongan->id_tahap>8)? "":"disabled" ;?>" id='hasilAdm'  
									href="{!! route('tertulis.get.hasil',$id_lowongan) !!}" >
		                      		<i class="icon-g-group"></i> Hasil</a>
		                      
		                      <a class="pull-right button small 4(narrower) mistyrose
		                      		<?php echo ($lowongan->id_tahap>7)? "":"disabled" ;?>" id='kelolaPelamar'  
									href="{!! route('tertulis.get.index',$id_lowongan) !!}" 
		                      		style="min-width:138px;">
		                      		<i class="icon-g-pen"></i> Input Nilai</a>
		                      
		                      <a class="pull-right button small 4(narrower) blanchedalmond
		                      		 <?php echo ($lowongan->id_tahap>6)? "":"disabled" ;?>" id='bobotAdm'  
									href="{!! route('tertulis.get.bobot',$id_lowongan) !!}" 
		                      		id='bobotTertulis'  
									data-toggle="modal" 
									data-target="#myModal">
		                      		<i class="icon-g-cogwheels"></i> Kuota</a>
	                  	</div>

	                  	<div class="10u 12u(mobile)">
		                      <p class="subtitle"><i class="icon-g-old-man"></i>Tahap Wawancara</p>
		                      <a class="pull-right button small 4(narrower) azure
		                      		<?php echo ($lowongan->id_tahap>12)? "":"disabled" ;?>" id='hasilAdm'  
									href="{!! route('wawancara.get.hasil',$id_lowongan) !!}">
		                      		<i class="icon-g-group"></i> Hasil</a>
		                      
		                      <a class="pull-right button small 4(narrower) mistyrose
		                      		<?php echo ($lowongan->id_tahap>10)? "":"disabled" ;?>" id='kelolaPelamar'  
									href="{!! route('wawancara.get.index',$id_lowongan) !!}" 
		                      		style="min-width:138px;">
		                      		<i class="icon-g-pen"></i> Input Nilai</a>
		                      
		                      <a class="pull-right button small 4(narrower) blanchedalmond
		                      		 <?php echo ($lowongan->id_tahap>9)? "":"disabled" ;?>"
									href="{!! route('wawancara.get.bobot',$id_lowongan) !!}" 
		                      		id='bobotTertulis'  
									data-toggle="modal" 
									data-target="#myModal">
		                      		<i class="icon-g-cogwheels"></i> Kuota</a>
	                  	</div>
					@endif

				</div>
			</div>



@stop
   
@section('js')
  {!!Html::script("assets/js/jquery.custombox.js")!!}
  {!!Html::style("assets/css/jquery.custombox.css")!!}
  {!!Html::script("assets/laravel/laravel.methodHandler.js")!!} 

	<script type="text/javascript">
	      $('#bobotAdm').on('click', function () {
	          $.fn.custombox( this, {
	              effect: 'sign',
	              overlayOpacity : 0.7,
	              overlayColor: '#EBB198',
	              speed: 500
	          });
	          return false;
	      });

	      $('#bobotPsikotes').on('click', function () {
	          $.fn.custombox( this, {
	              effect: 'sign',
	              overlayOpacity : 0.7,
	              overlayColor: '#EBB198',
	              speed: 500
	          });
	          return false;
	      });

	      $('#bobotTertulis').on('click', function () {
	          $.fn.custombox( this, {
	              effect: 'sign',
	              overlayOpacity : 0.7,
	              overlayColor: '#EBB198',
	              speed: 500
	          });
	          return false;
	      });

	      $('#bobotWawancara').on('click', function () {
	          $.fn.custombox( this, {
	              effect: 'sign',
	              overlayOpacity : 0.7,
	              overlayColor: '#EBB198',
	              speed: 500
	          });
	          return false;
	      });
	</script>
@stop
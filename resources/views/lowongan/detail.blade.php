@extends('template.backend')

@section('content')
<article id="content" class="8u 12u(narrower)">
              <header class="image-wrapper first 12u(narrower)">
                <h2 class="image">Detail Lowongan</h2>  
              </header>
             
            <div class="row">
            	 <div class="row 8u 12u(narrower)">           

					@if(Auth::user()->roles == "admin")
						
						<div class="10u 12u(mobile)">
		                      <p class="subtitle"><i class="icon-g-folder-open"></i>Tahap Administrasi</p>
		                      <a  class="pull-right button small 4(narrower) azure <?php echo ($lowongan->id_tahap>2)? "":"disabled" ;?>
		                      		" 
			                      	id='hasilAdm'  
									href="{!! route('adm.get.hasil',$id_lowongan) !!}" >
		                      		 Hasil</a>

		                      <a class="pull-right button small 4(narrower) mistyrose
		                      		<?php echo ($lowongan->id_tahap>1)? "":"disabled" ;?>" 
									id='kelolaPelamar'  
									href="{!! route('pelamar.index',$id_lowongan) !!}" >
		                      		Kelola Pelamar</a>

		                      <a class="pull-right button small 4(narrower) blanchedalmond " 
		                      		id='bobotAdm'  
		                      		href="{!! route('adm.get.bobot',$id_lowongan) !!}" 
									data-toggle="modal" 
									data-target="#myModal">
		                      		 Bobot</a>
		                 </div>
					@endif
			

					@if(Auth::user()->roles == "tim independent")

						<div class="10u 12u(mobile)">
		                      <p class="subtitle"><i class="icon-g-old-man"></i>Tahap Psikotes</p>
		                      <a class="pull-right button small 4(narrower) azure
		                      		<?php echo ($lowongan->id_tahap>5)? "":"disabled" ;?>" id='hasilAdm'  
									href="{!! route('psikotes.get.hasil',$id_lowongan) !!}" >
		                      		 Hasil</a>
		                      
		                      <a class="pull-right button small 4(narrower) mistyrose
		                      		<?php echo ($lowongan->id_tahap>4)? "":"disabled" ;?>" id='kelolaPelamar'  
									href="{!! route('psikotes.get.index', $id_lowongan) !!}" 
		                      		style="min-width:138px;">
		                      		 Input Nilai</a>
		                      
		                      <a class="pull-right button small 4(narrower) blanchedalmond
		                      		<?php echo ($lowongan->id_tahap>1)? "":"disabled" ;?>" 
		                      		id='bobotPsikotes'  
									href="{!! route('psikotes.get.bobot',$id_lowongan) !!}" 
									data-toggle="modal" 
									data-target="#myModal">
		                      		 Kuota</a>
	                  	</div>

						<div class="10u 12u(mobile)">
		                      <p class="subtitle"><i class="icon-g-old-man"></i>Tahap Tertulis</p>
		                      <a class="pull-right button small 4(narrower) azure
		                      		<?php echo ($lowongan->id_tahap>8)? "":"disabled" ;?>" id='hasilAdm'  
									href="{!! route('tertulis.get.hasil',$id_lowongan) !!}" >
		                      		 Hasil</a>
		                      
		                      <a class="pull-right button small 4(narrower) mistyrose
		                      		<?php echo ($lowongan->id_tahap>7)? "":"disabled" ;?>" id='kelolaPelamar'  
									href="{!! route('tertulis.get.index',$id_lowongan) !!}" 
		                      		style="min-width:138px;">
		                      		 Input Nilai</a>
		                      
		                      <a class="pull-right button small 4(narrower) blanchedalmond
		                      		 <?php echo ($lowongan->id_tahap>6)? "":"disabled" ;?>" id='bobotAdm'  
									href="{!! route('tertulis.get.bobot',$id_lowongan) !!}" 
		                      		id='bobotTertulis'  
									data-toggle="modal" 
									data-target="#myModal">
		                      		 Kuota</a>
	                  	</div>

	                  	<div class="10u 12u(mobile)">
		                      <p class="subtitle"><i class="icon-g-old-man"></i>Tahap Wawancara</p>
		                      <a class="pull-right button small 4(narrower) azure  <?php echo ($lowongan->id_tahap>9)? "":"disabled" ;?>
		                      		<?php echo ($lowongan->id_tahap>12)? "":"disabled" ;?>" id='hasilAdm'  
									href="{!! route('wawancara.get.hasil',$id_lowongan) !!}">
		                      		Hasil</a>
		                      
		                      <a class="pull-right button small 4(narrower) mistyrose
		                      		<?php echo ($lowongan->id_tahap>10)? "":"disabled" ;?>" id='kelolaPelamar'  
									href="{!! route('wawancara.get.index',$id_lowongan) !!}" 
		                      		style="min-width:138px;">
		                      		Input Nilai</a>
		                      
		                      <a class="pull-right button small 4(narrower) blanchedalmond
		                      		"
									href="{!! route('wawancara.get.bobot',$id_lowongan) !!}" 
		                      		id='bobotTertulis'  
									data-toggle="modal" 
									data-target="#myModal">
		                      		Kuota</a>
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
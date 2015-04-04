@extends('template.backend')

@section('content')
@if(Auth::user()->roles == "admin")
	<h3>Administrasi</h3><hr>

<a class="btn btn-primary" id='bobotAdm'  
	href="{!! route('adm.get.bobot',$id_lowongan) !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Bobot</a>

<a class="btn btn-primary <?php echo ($lowongan->id_tahap>1)? "":"disabled" ;?>" id='kelolaPelamar'  
	href="{!! route('pelamar.index',$id_lowongan) !!}" 
	<i class="icon-g-circle-plus" 
	></i>
	Kelola Pelamar</a>
 
<a class="btn btn-primary <?php echo ($jumlah_pelamar>3)? "":"disabled" ;?>" id='hasilAdm'  
	href="{!! route('adm.get.hasil',$id_lowongan) !!}" 
	><i class="icon-g-circle-plus"></i>
	Hasil</a>
@endif

@if(Auth::user()->roles == "badan independent")

<div class='psikotes' >
	<h3>Psikotes</h3><hr>
<a class="btn btn-primary <?php echo ($lowongan->id_tahap>3)? "":"disabled" ;?>" id='bobotPsikotes'  
	href="{!! route('psikotes.get.bobot',$id_lowongan) !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Kuota</a>

<a class="btn btn-primary <?php echo ($lowongan->id_tahap>4)? "":"disabled" ;?>" id='kelolaPelamar'  
	href="{!! route('psikotes.get.index', $id_lowongan) !!}" 
	><i class="icon-g-circle-plus"></i>
	Input Nilai</a>

<a class="btn btn-primary <?php echo ($lowongan->id_tahap>5)? "":"disabled" ;?>" id='hasilAdm'  
	href="{!! route('psikotes.get.hasil',$id_lowongan) !!}" 
	><i class="icon-g-circle-plus"></i>
	Hasil</a>
</div>

<div class='tertulis'>
	<h3>Tertulis</h3><hr>

<a class="btn btn-primary <?php echo ($lowongan->id_tahap>6)? "":"disabled" ;?>" id='bobotAdm'  
	href="{!! route('tertulis.get.bobot',$id_lowongan) !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Kuota</a>

<a class="btn btn-primary <?php echo ($lowongan->id_tahap>7)? "":"disabled" ;?>" id='kelolaPelamar'  
	href="{!! route('tertulis.get.index',$id_lowongan) !!}" 
	><i class="icon-g-circle-plus"></i>
	Input Nilai</a>

<a class="btn btn-primary <?php echo ($lowongan->id_tahap>8)? "":"disabled" ;?>" id='hasilAdm'  
	href="{!! route('tertulis.get.hasil',$id_lowongan) !!}" 
	><i class="icon-g-circle-plus"></i>
	Hasil</a>
</div>

<div class='wawancara'>
	<h3>Wawancara</h3><hr>

<a class="btn btn-primary <?php echo ($lowongan->id_tahap>9)? "":"disabled" ;?>" id='bobotAdm'  
	href="{!! route('wawancara.get.bobot', $id_lowongan) !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Bobot</a>

<a class="btn btn-primary <?php echo ($lowongan->id_tahap>10)? "":"disabled" ;?>" id='kelolaPelamar'  
	href="{!! route('wawancara.get.index',$id_lowongan) !!}" 
	><i class="icon-g-circle-plus"></i>
	Input Nilai</a>

<a class="btn btn-primary <?php echo ($lowongan->id_tahap>12)? "":"disabled" ;?>" id='hasilAdm'  
	href="{!! route('lowongan.edit',1) !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Hasil</a>
</div>
@endif

@include('modal')

@stop

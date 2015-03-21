@extends('template.backend')

@section('content')

	<h3>Administrasi</h3><hr>

<a class="btn btn-primary" id='bobotAdm'  
	href="{!! route('adm.get.bobot',$id_lowongan) !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Bobot</a>

<a class="btn btn-primary" id='kelolaPelamar'  
	href="{!! route('pelamar.index',$id_lowongan) !!}" 
	<i class="icon-g-circle-plus"></i>
	Kelola Pelamar</a>

<a class="btn btn-primary disabled" id='hasilAdm'  
	href="{!! route('lowongan.edit',1) !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Hasil</a>

<div class='psikotes' >
	<h3>Psikotes</h3><hr>

<a class="btn btn-primary" id='bobotAdm'  
	href="{!! route('lowongan.create') !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Bobot</a>

<a class="btn btn-primary" id='kelolaPelamar'  
	href="{!! route('lowongan.create') !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Kelola Pelamar</a>

<a class="btn btn-primary" id='hasilAdm'  
	href="{!! route('lowongan.edit',1) !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Hasil</a>
</div>

<div class='tertulis'>
	<h3>Tertulis</h3><hr>

<a class="btn btn-primary" id='bobotAdm'  
	href="{!! route('lowongan.create') !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Bobot</a>

<a class="btn btn-primary" id='kelolaPelamar'  
	href="{!! route('lowongan.create') !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Kelola Pelamar</a>

<a class="btn btn-primary" id='hasilAdm'  
	href="{!! route('lowongan.edit',1) !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Hasil</a>
</div>

<div class='wawancara'>
	<h3>Wawancara</h3><hr>

<a class="btn btn-primary" id='bobotAdm'  
	href="{!! route('lowongan.create') !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Bobot</a>

<a class="btn btn-primary" id='kelolaPelamar'  
	href="{!! route('lowongan.create') !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Kelola Pelamar</a>

<a class="btn btn-primary" id='hasilAdm'  
	href="{!! route('lowongan.edit',1) !!}" 
	data-toggle="modal" 
	data-target="#myModal"><i class="icon-g-circle-plus"></i>
	Hasil</a>
</div>

@include('modal')

@stop

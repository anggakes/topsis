@extends('template.backend')
<!-- awal section content -->
@section('content')
 <article id="content" class="9u 12u(narrower)">
    <header class="image-wrapper first 12u(narrower)">
      <h2 class="image">{!! $pelamar->no_ktp !!} - {!! $pelamar->nama !!}</h2> 
    </header>
             
    <div class="row">
<hr><br>
	<h2 style='float:none'>Data Diri</h2><br>
	No. KTP : {!! $pelamar->no_ktp !!} <br>
	Nama : {!! $pelamar->nama !!} <br>
	Tempat / Tanggal Lahir : {!! $pelamar->tempat_lahir !!} / {!! $pelamar->tanggal_lahir !!} <br>
	Kontak : {!! $pelamar->kontak !!} <br>
	Alamat : {!! $pelamar->alamat !!} <br><br>

	<h2 style='float:none'>Pendidikan Terakhir</h2><br>
	Institusi : {!! $pelamar->pendidikanTerakhir->institusi !!} <br>
	Akreditas : {!! $pelamar->pendidikanTerakhir->akreditas !!} <br>
	Jenjang : {!! $pelamar->pendidikanTerakhir->jenjang !!} <br>
	IPK : {!! $pelamar->pendidikanTerakhir->ipk !!} <br>
	Tahun Masuk / Lulus  : {!! $pelamar->pendidikanTerakhir->tahun_masuk !!} / {!! $pelamar->pendidikanTerakhir->tahun_lulus!!}<br>

	<h2 style='float:none'>Pendidikan Non Ilmiah</h2><br>

        <table class='table datatables table-bordered 11u 12u(narrower)' style='wid:1000px'>
            <thead>
            <tr>
                        <th>Nama</th>
                        <th>Instansi</th>
                        <th>Tahun Masuk</th>
                        <th>Tahun Keluar</th>
                        
                  </tr>
            </thead>
            <tbody>
              @foreach ($pelamar->pendidikanNonIlmiah as $key => $value) 
     <tr>
       	<td>{!! $value->nama !!}</td>
       	<td>{!! $value->instansi !!}</td>
       	<td>{!! $value->tgl_masuk !!}</td>
       	<td>{!! $value->tgl_keluar !!}</td>

     </tr>
             @endforeach
            </tbody>
        </table>
<br>
        <h2 style='float:none'>Pengalaman Kerja</h2><br>

        <table class='table datatables table-bordered 11u 12u(narrower)' style='wid:1000px'>
            <thead>
            <tr>
                        <th>jabatan</th>
                        <th>Instansi</th>
                        <th>Tahun Masuk</th>
                        <th>Tahun Keluar</th>
                        
                  </tr>
            </thead>
            <tbody>
              @foreach ($pelamar->pengalamanKerja as $key => $value) 
     <tr>
       	<td>{!! $value->jabatan !!}</td>
       	<td>{!! $value->instansi !!}</td>
       	<td>{!! $value->tgl_masuk !!}</td>
       	<td>{!! $value->tgl_keluar !!}</td>

     </tr>
             @endforeach
            </tbody>
        </table>

@stop


@extends('template.backend')
<!-- awal section content -->
@section('content')

	<article id="content" class="8u 12u(narrower)">
	    <header class="image-wrapper first 12u(narrower)">
	      <h2 class="image">Edit Pelamar</h2> 
	    </header>
	             
	    <div class="row">

 		{!! Form::open(['method'=>'PATCH','route'=>['pelamar.update',$id_lowongan, $lamaran->id],'class'=>'form-horizontal']) !!} 

		@include('administrasi.pelamar.form')

   			<div class="row 50%">
              <div class="12u">
                  <ul class="actions">
                    <li> {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}</li>
                    <li><input type="reset" value="Kosongkan Formulir" /></li>
                    <li><input type="button" class="close button" onclick="$.fn.custombox('close');" value="&times;"/></li>
                  </ul>
              </div>
            </div>
		</div>
	</article>
@stop

@section('js')
{!!Html::script("assets/dynamicInput/dynamic_input.js")!!} 
 
<script type="text/javascript">
var aa=  {!!$pni!!};
var tt=  {!!$pk!!};

<?php
	foreach ($lamaran->pelamar->pendidikanNonIlmiah as $i => $v):
		$data[$i]=[
		['name'=>'pni[nama][]','type'=>'text','placeholder'=>'nama', 'value'=>$v->nama],
		['name'=>'pni[instansi][]','type'=>'text','placeholder'=>'Instansi', 'value'=>$v->instansi],
		['name'=>'pni[tgl_masuk][]','type'=>'date','placeholder'=>'', 'value'=>$v->tgl_masuk],
		['name'=>'pni[tgl_keluar][]','type'=>'date','placeholder'=>'', 'value'=>$v->tgl_keluar]
		];
	endforeach;

	foreach ($lamaran->pelamar->pengalamanKerja as $i => $v):
		$p[$i]=[
		['name'=>'pk[jabatan][]','type'=>'text','placeholder'=>'nama', 'value'=>$v->jabatan],
		['name'=>'pk[instansi][]','type'=>'text','placeholder'=>'Instansi', 'value'=>$v->instansi],
		['name'=>'pk[tgl_masuk][]','type'=>'date','placeholder'=>'', 'value'=>$v->tgl_masuk],
		['name'=>'pk[tgl_keluar][]','type'=>'date','placeholder'=>'', 'value'=>$v->tgl_keluar]
		];
	endforeach;
?>

var datapni = {!! json_encode($data) !!};
var datapk = {!! json_encode($p) !!};

$(document).ready(function(){

  insert_row('pni',datapni,'aa');
  insert_row('pk',datapk,'tt');

  

});
</script>
@stop
@extends('template.backend')
<!-- awal section content -->
@section('content')

  {!! Form::open(['route'=>['pelamar.store',$id_lowongan],'class'=>'form-horizontal']) !!} 

@include('administrasi.pelamar.form')

  {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}

  {!! Form::close() !!} 
@stop

@section('js')
{!!Html::script("assets/dynamicInput/dynamic_input.js")!!} 
 
<script type="text/javascript">
var aa=  {!!$pni!!};
var tt=  {!!$pk!!};
$(document).ready(function(){

  create_row('pni',aa,'aa');
  create_row('pk',tt,'tt');



});
</script>
@stop
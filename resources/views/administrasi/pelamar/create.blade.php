@extends('template.backend')
<!-- awal section content -->
@section('content')
<article id="content" class="8u 12u(narrower)">
    <header class="image-wrapper first 12u(narrower)">
      <h2 class="image">Tambah Pelamar</h2> 
    </header>
             
    <div class="row">
  		{!! Form::open(['route'=>['pelamar.store',$id_lowongan],'class'=>'form-horizontal']) !!} 

		@include('administrasi.pelamar.form')
                
          		<!-- /modal-body -->
            <div class="row 50% pull-right">
              <div class="12u ">
                  <ul class="actions">
                    <li> {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}</li>
                    
                  </ul>
              </div>
            </div>
    </div>
      

  {!! Form::close() !!} 
</article>

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
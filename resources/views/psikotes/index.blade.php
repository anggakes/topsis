@extends('template.backend')
<!-- awal section content -->

@section('content')

<h3>Input Nilai Psikotes</h3>
<hr>

 {!! Form::open(['route'=>['psikotes.post.index',$id_lowongan],'class'=>'form-horizontal']) !!} 
  
  <div class="form-group">
      {!! Form::label('nomor_pelamar','Nomor Pelamar',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::select('id_lamaran',
      	$nomor_pelamar
      ,'',['class'=>'form-control', 'placeholder'=>'Nomor Pelamar','id'=>'select2'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('nilai','Nilai',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('nilai_psikotes',null,['class'=>'form-control', 'placeholder'=>'Nilai Psikotes'])!!}    
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}
      </div>
  </div>
        
 {!! Form::close() !!} 

<hr>
<h3>Nilai Psikotes</h3> <hr>

<table class='table datatables' width='98%'>
                              <thead>
                              <tr>
                                          <th>No. Pelamar</th>
                                          <th>Nama</th>
                                          <th>Nilai</th>
                                          
                                    </tr>
                              </thead>
                              <tbody>
                                
                              </tbody>
                          </table>

<a href="{!! route('psikotes.get.hasil',$id_lowongan)!!}" class='btn btn-primary'> Proses <br> Seleksi Psikotes</a>

@include('modal') <!-- include modal Wrap -->

@stop

@section('js')

 {!! Html::script('assets/select2/js/select2.min.js')!!}
 <script type="text/javascript">    
    $(document).ready(function(){
    	 
    	 $(".datatables").dataTable({
              "ajax" : "{!! route('psikotes.datatables',$id_lowongan) !!}",
              "fnInitComplete": function(oSettings, json) {
                  //inisialisi saat datatables setelah load
                   $('a[data-method]').click(function(e){
                      handleMethod(e,$(this));
                      e.preventDefault();
                   });
                }
            }); 
    	  $("#select2").prepend("<option></option>").val('');
        
    	 $('#select2').select2({
        allowClear: true,
    	 	placeholder: "Nomor Peserta"
    	 })
    });
     
 </script>
 @stop

 @section('css')
{!! Html::style('assets/select2/css/select2.min.css') !!}
 @stop
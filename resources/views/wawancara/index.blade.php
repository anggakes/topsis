@extends('template.backend')
<!-- awal section content -->

@section('content')

<h3>Input Nilai Wawancara</h3>
<hr>

 {!! Form::open(['route'=>['wawancara.post.index',$id_lowongan],'class'=>'form-horizontal']) !!} 
  
  <div class="form-group">
      {!! Form::label('nomor_pelamar','Nomor Pelamar',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::select('id_lamaran',
      	$nomor_pelamar
      ,'',['class'=>'form-control', 'placeholder'=>'Nomor Pelamar','id'=>'select2'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('penampilan','Penampilan',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::select('wa1', $option,null,['class'=>'form-control', 'placeholder'=>'Penampilan'])!!}    
    </div>
  </div>
    <div class="form-group">
      {!! Form::label('wawasan','Wawasan',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::select('wa2',$option,null,['class'=>'form-control', 'placeholder'=>'Wawasan'])!!}    
    </div>
  </div>
    <div class="form-group">
      {!! Form::label('sikap','Sikap',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::select('wa3',$option,null,['class'=>'form-control', 'placeholder'=>'Sikap'])!!}    
    </div>
  </div>
    <div class="form-group">
      {!! Form::label('bahasa_asing','Bahasa Asing',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::select('wa4',
        ['1'=>'Tidak',
        '5'=>'Ya']
      ,null,['class'=>'form-control', 'placeholder'=>'Penggunaan Bahasa asing'])!!}    
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
                                          <th>Penampilan</th>
                                          <th>Wawasan</th>
                                          <th>Sikap</th>
                                          <th>Bahasa Asing</th>
                                          <th>Psikotes</th>
                                          <th>Tertulis</th>
                                          
                                    </tr>
                              </thead>
                              <tbody>
                                
                              </tbody>
                          </table>

<a href="{!! route('wawancara.get.proses',$id_lowongan)!!}" class='btn btn-primary'> Proses <br> Seleksi Wawancara</a>

@include('modal') <!-- include modal Wrap -->

@stop

@section('js')

 {!! Html::script('assets/select2/js/select2.min.js')!!}
 <script type="text/javascript">    
    $(document).ready(function(){
    	 
    	 $(".datatables").dataTable({
              "ajax" : "{!! route('wawancara.datatables',$id_lowongan) !!}",
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
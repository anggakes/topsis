@extends('template.backend')
<!-- awal section content -->

@section('content')

@section('content')
<article id="content" class="10u 12u(narrower)">
    <header class="image-wrapper first 12u(narrower)">
      <h2 class="image">Nilai Wawancara</h2> 
    </header>
             
    <div class="row">
        <div class="8u 12u(mobile)">
            <p class="subtitle"><i class="icon-g-folder-open"></i>Input Nilai Tertulis</p>
               {!! Form::open(['route'=>['wawancara.post.index',$id_lowongan],'class'=>'form-horizontal']) !!} 
          
            <div class="row 50%">           
                <div class="2u 12u(mobile)">
                    {!! Form::label('nomor_pelamar','Nomor Pelamar',['class'=>'col-sm-2 control-label']) !!}
                </div>
                <div class="10u 12u(mobile)">
                  {!! Form::select('id_lamaran',
                  	$nomor_pelamar
                  ,'',['class'=>'form-control', 'placeholder'=>'Nomor Pelamar','id'=>'select2'])!!}    
                </div>
            </div>
  
            <div class="row 50%">           
                <div class="2u 12u(mobile)">
                    {!! Form::label('penampilan','Penampilan',['class'=>'col-sm-2 control-label']) !!}
                </div>
                <div class="10u 12u(mobile)">
                    {!! Form::select('wa1', $option,null,['class'=>'form-control', 'placeholder'=>'Penampilan'])!!}    
                </div>
            </div>

            <div class="row 50%">           
                <div class="2u 12u(mobile)">
                    {!! Form::label('wawasan','Wawasan',['class'=>'col-sm-2 control-label']) !!}
                </div>
                <div class="10u 12u(mobile)">
                    {!! Form::select('wa2',$option,null,['class'=>'form-control', 'placeholder'=>'Wawasan'])!!}    
                </div>
            </div>
            
            <div class="row 50%">           
                 <div class="2u 12u(mobile)">
                    {!! Form::label('sikap','Sikap',['class'=>'col-sm-2 control-label']) !!}
                </div>
                <div class="10u 12u(mobile)">
                    {!! Form::select('wa3',$option,null,['class'=>'form-control', 'placeholder'=>'Sikap'])!!}    
                </div>
            </div>
            
            <div class="row 50%">           
                <div class="2u 12u(mobile)">
                    {!! Form::label('bahasa_asing','Bahasa Asing',['class'=>'col-sm-2 control-label']) !!}
                </div>
                <div class="10u 12u(mobile)">
                    {!! Form::select('wa4',
                        ['1'=>'Tidak',
                        '5'=>'Ya']
                        ,null,['class'=>'form-control', 'placeholder'=>'Penggunaan Bahasa asing'])!!}    
                </div>
            </div>
            
            <div class="row 50%">           
                  <div class="2u 12u(mobile)">
                      {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}
                  </div>
            </div>
        
        {!! Form::close() !!} 
        </div>
    </div>
    
<br>
<br>
    <div class="row">
        <div class="10u 12u(mobile)">
            <p class="subtitle"><i class="icon-g-folder-open"></i>
                Nilai Wawancara
            </p>
            <a href="{!! route('wawancara.get.proses',$id_lowongan)!!}" class='button small pull-right'> Proses Seleksi Wawancara</a>
        </div>
        <div class="10u 12u(mobile)">
            <table class='table datatables' width='800px'>
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
        </div>
    </div>
</article>

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
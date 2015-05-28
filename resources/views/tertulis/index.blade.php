@extends('template.backend')
<!-- awal section content -->

@section('content')
<article id="content" class="10u 12u(narrower)">
    <header class="image-wrapper first 12u(narrower)">
        <a href="{!! route('lowongan.show',$id_lowongan) !!}" class="image pull-right button small 4(narrower)">Kembali</a>
      <h2 class="image">Nilai Tertulis</h2> 
    </header>
             
    <div class="row">
            <div class="8u 12u(mobile)">
            <p class="subtitle"><i class="icon-g-folder-open"></i>Input Nilai Tertulis</p>
               {!! Form::open(['route'=>['tertulis.post.index',$id_lowongan],'class'=>'form-horizontal']) !!} 
            

            <div class="row 50%">           
                 <div class="4u 12u(mobile)">
                    {!! Form::label('nomor_pelamar','Nomor Pelamar',['class'=>'col-sm-2 control-label']) !!}
                </div>
                <div class="6u 12u(mobile)">
                    {!! Form::select('id_lamaran',
            	         $nomor_pelamar
                        ,'',['class'=>'form-control', 'placeholder'=>'Nomor Pelamar','id'=>'select2', 'required'=>'required'])!!}    
                </div>
            </div>
  
            <div class="row 50%">           
                <div class="4u 12u(mobile)">
                    {!! Form::label('nilai','Nilai',['class'=>'col-sm-2 control-label']) !!}
                </div>
                <div class="6u 12u(mobile)">
                    {!! Form::input('number','nilai_tertulis',null,['class'=>'form-control', 'placeholder'=>'Nilai Tertulis', 'required'=>'required', 'min'=>'0', 'max'=>'100'])!!}    
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
                Nilai Tertulis
            </p>
            <a href="{!! route('tertulis.get.hasil',$id_lowongan)!!}" class='button small pull-right'> Proses Seleksi Tertulis</a>
        </div>
        <div class="10u 12u(mobile)">
            <table class='table datatables' width='800px'>
                <thead>
                    <tr>
                          <th>No. Pelamar</th>
                          <th>Nama</th>
                          <th>Nilai</th>
                          <th>Hapus</th>
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
  {!!Html::script("assets/laravel/laravel.methodHandler.js")!!} 

 <script type="text/javascript">    
    $(document).ready(function(){
       
       $(".datatables").dataTable({
              "ajax" : "{!! route('tertulis.datatables',$id_lowongan) !!}"}).on('draw.dt',function(){
                  //inisialisi saat datatables setelah load
                   $('a[data-method]').click(function(e){
                      handleMethod(e,$(this));
                      e.preventDefault();
                   });
            }); 
              
        $("#select2").prepend("<option></option>").val('');
        
       $('#select2').select2({
        allowClear: true,
        placeholder: "Nomor Peserta"
       })
    });
     
 </script>
@include('modal') <!-- include modal Wrap -->

@stop

@section('js')

 {!! Html::script('assets/select2/js/select2.min.js')!!}
  {!!Html::script("assets/laravel/laravel.methodHandler.js")!!} 
 <script type="text/javascript">    
    $(document).ready(function(){
    	 
    	 $(".datatables").dataTable({
              "ajax" : "{!! route('tertulis.datatables',$id_lowongan) !!}"}).on('draw.dt'),function(){
                  //inisialisi saat datatables setelah load
                   $('a[data-method]').click(function(e){
                      handleMethod(e,$(this));
                      e.preventDefault();
                   });
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
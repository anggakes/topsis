@extends('template.backend')

@section('content')
{!! Form::open(['action'=>'GantiPasswordController@postIndex','class'=>'form-horizontal']) !!} 
@if(isset($message))
	{!! $message !!}
@endif
   
         <div class="modal-example-header">
        
              <h4 class="modal-title">Ganti Password</h4>
         </div>     <!-- /modal-header -->
         <div class="modal-example-body">
              <div class="row">
                  <section class="12u 12u(narrower)">
     
                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                              {!! Form::label('nama','Password Lama',['class'=>'col-sm-2 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::text('oldpass','',['class'=>'form-control', 'placeholder'=>'Password lama anda', 'required'=>'required'])!!}    
                          </div>
                      </div>
                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                              {!! Form::label('nama','Password Baru',['class'=>'col-sm-2 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::text('newpass','',['class'=>'form-control', 'placeholder'=>'Password baru anda', 'required'=>'required'])!!}    
                          </div>
                      </div>        

                  <!-- /modal-body --><br>
                    <div class="row 50% pull-right">
                      <div class="12u">
                          <ul class="actions">
                            <li> {!! Form::submit('Ganti',['class'=>'btn btn-primary'])!!}</li>
                          </ul>
                      </div>
                    </div>
                </section>
            </div>
      </div>
      <!-- /modal-end -->
  {!! Form::close() !!} 
@stop
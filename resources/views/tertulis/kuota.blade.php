<div id="user" class="modal-example-content">
      {!! Form::open(['route'=>['tertulis.post.bobot',$id_lowongan],'class'=>'form-horizontal']) !!} 

  
        <div class="modal-example-header">
           <a href='#' class='pull-right' onclick="$.fn.custombox('close');" >&times;</a>
              <h4 class="modal-title">Kuota Tertulis</h4>
         </div>     <!-- /modal-header -->
         <div class="modal-example-body">
              <div class="row">
                  <section class="12u 12u(narrower)">

                      <div class="row 50%">           
                          <div class="4u 12u(mobile)">
                              {!! Form::label('kuota','Kuota',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="6u 12u(mobile)">
                              {!! Form::input('number','kuota',@$bobot->kuota,['class'=>'form-control', 'placeholder'=>'Kode Lowongan','required'=>'required'])!!}     
                          </div>
                      </div>

                      <div class="row 50%">           
                          <div class="4u 12u(mobile)">
                              {!! Form::label('nilai_minimum','Nilai Minimum',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="6u 12u(mobile)">
                              {!! Form::input('number','nilai_minimum',@$bobot->nilai_minimum,['class'=>'form-control', 'placeholder'=>'Kode Lowongan','required'=>'required'])!!}     
                          </div>
                      </div>
                   <!-- /modal-body --><br>
                      <div class="row 50% pull-right">
                        <div class="12u">
                            <ul class="actions">
                              
                             <li> {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}</li>
                             
                            </ul>
                        </div>
                      </div>
                  </section>
            </div>
      </div>
  </div>      <!-- /modal-end -->
  {!! Form::close() !!} 
</div>

  <div id="user" class="modal-example-content">
      {!! Form::model($lowongan,['method'=>'PATCH','route'=>['lowongan.update',$lowongan->id],'class'=>'form-horizontal']) !!} 

      <div class="modal-example-header">
        <a href='#' class='pull-right' onclick="$.fn.custombox('close');" >&times;</a>
            <h4 class="modal-title">Edit Lowongan</h4>
      </div>     <!-- /modal-header -->
      <div class="modal-example-body">
           <div class="row">
                <section class="12u 12u(narrower)">     <!-- /modal-header -->

                    <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                              {!! Form::label('kode','Kode',['class'=>'col-sm-2 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::text('kode',null,['class'=>'form-control', 'placeholder'=>'Kode Lowongan','required'=>'required'])!!}    
                          </div>
                      </div>

                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                              {!! Form::label('nama','Nama',['class'=>'col-sm-2 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::text('nama',null,['class'=>'form-control', 'placeholder'=>'Nama Lowongan','required'=>'required'])!!}    
                          </div>
                      </div>

                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
<<<<<<< HEAD
                              {!! Form::label('nama','Divisi',['class'=>'col-sm-2 control-label']) !!}
=======
                              {!! Form::label('divisi','Divisi',['class'=>'col-sm-2 control-label']) !!}
>>>>>>> origin/master
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::select('id_divisi',$divisi,null,['class'=>'form-control disabled','required'=>'required'])!!}    
                          </div>
                      </div>

                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                              {!! Form::label('keterangan','Keterangan',['class'=>'col-sm-2 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::textarea('keterangan',null,['class'=>'form-control', 'placeholder'=>'Keterangan Lowongan ','required'=>'required'])!!}    
                          </div>
                      </div>
     
                    <!-- /modal-body -->
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
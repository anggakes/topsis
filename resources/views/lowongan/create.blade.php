  <div id="user" class="modal-example-content">
      {!! Form::open(['route'=>'lowongan.store','class'=>'form-horizontal']) !!} 

         <div class="modal-example-header">
              <h4 class="modal-title">Tambah Lowongan</h4>
         </div>     <!-- /modal-header -->
         <div class="modal-example-body">
              <div class="row">
                  <section class="12u 12u(narrower)">
                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                              {!! Form::label('kode','Kode',['class'=>'col-sm-2 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::text('kode','',['class'=>'form-control', 'placeholder'=>'Kode Lowongan','required'=>'required'])!!}    
                          </div>
                      </div>

                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                              {!! Form::label('nama','Nama',['class'=>'col-sm-2 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::text('nama','',['class'=>'form-control', 'placeholder'=>'Nama Lowongan','required'=>'required'])!!}    
                          </div>
                      </div>

                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                              {!! Form::label('nama','Nama',['class'=>'col-sm-2 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::select('id_divisi',$divisi,'',['class'=>'form-control', 'reuired'=>'required'])!!}  
                          </div>
                      </div>

                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                              {!! Form::label('keterangan','Keterangan',['class'=>'col-sm-2 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::textarea('keterangan','',['class'=>'form-control', 'placeholder'=>'Keterangan Lowongan '])!!}
                          </div>
                      </div>


                      <!-- /modal-body -->
                      <div class="row 50%">
                        <div class="12u">
                            <ul class="actions">
                              <li> {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}</li>
                              <li><input type="reset" value="Kosongkan Formulir" /></li>
                              <li><input type="button" class="close button" onclick="$.fn.custombox('close');" value="&times;"/></li>
                            </ul>
                        </div>
                      </div>
                  </section>
            </div>
      </div>
  </div>      <!-- /modal-end -->
  {!! Form::close() !!} 
</div>

  <div id="user" class="modal-example-content">
        {!! Form::open(['route'=>['wawancara.post.bobot',$id_lowongan],'class'=>'form-horizontal']) !!} 

         <div class="modal-example-header">
              <h4 class="modal-title">Kuota Wawancara</h4>
         </div>     <!-- /modal-header -->
         <div class="modal-example-body">
              <div class="row">
                  <section class="12u 12u(narrower)">
     
                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                            {!! Form::label('penampilan','Penampilan',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                            {!! Form::input('number','wa1',@$bobot->wa1,['class'=>'form-control', 'placeholder'=>'Kode Lowongan','required'=>'required'])!!}     
                          </div>
                      </div>
                      
                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                            {!! Form::label('wawasan','Wawasan',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                            {!! Form::input('number','wa2',@$bobot->wa2,['class'=>'form-control', 'placeholder'=>'Nama Lowongan','required'=>'required'])!!}     
                          </div>
                      </div>
                      
                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                            {!! Form::label('sikap','Sikap',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                            {!! Form::input('number','wa3',@$bobot->wa3,['class'=>'form-control', 'placeholder'=>'Nama Lowongan','required'=>'required'])!!}     
                          </div>
                      </div>

                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                            {!! Form::label('ba','Bahasa Asing',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                            {!! Form::input('number','wa4',@$bobot->wa4,['class'=>'form-control', 'placeholder'=>'Nama Lowongan','required'=>'required'])!!}     
                          </div>
                      </div>
                      
                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                            {!! Form::label('np','Nilai Psikotes',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                            {!! Form::input('number','wa5',@$bobot->wa5,['class'=>'form-control', 'placeholder'=>'Nama Lowongan','required'=>'required'])!!}     
                          </div>
                      </div>

                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                            {!! Form::label('nt','Nilai Tetulis',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                            {!! Form::input('number','wa6',@$bobot->wa6,['class'=>'form-control', 'placeholder'=>'Nama Lowongan','required'=>'required'])!!}     
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

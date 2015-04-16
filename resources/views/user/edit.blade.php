  <div id="user" class="modal-example-content">
      {!! Form::model($user,['method'=>'PATCH','route'=>['user.update',$user->id],'class'=>'form-horizontal']) !!} 

        <div class="modal-example-header">
          <a href='#' class='pull-right' onclick="$.fn.custombox('close');" >&times;</a>
            <h4 class="modal-title">Edit Data Pengguna</h4>
        </div>     <!-- /modal-header -->
        <div class="modal-example-body">
            <div class="row">
                <section class="12u 12u(narrower)">     <!-- /modal-header -->

                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                              {!! Form::label('nama','Nama',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nama Lengkap','required'=>'required'])!!}    
                          </div>
                      </div>

                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                              {!! Form::label('username','Username',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::text('username',null,['class'=>'form-control', 'placeholder'=>'Username','required'=>'required'])!!}    
                          </div>
                      </div>

                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                              {!! Form::label('role','Role',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::select('roles',[
                                  'admin'=>'Admin',
                                  'badan independent'=>'Badan Independent',
                                  'top manager'=>'Top Manager'
                                ],null,['class'=>'form-control', 'placeholder'=>'Hak Akses user','required'=>'required'])!!}    
                          </div>
                      </div>

                      <div class="row 50%">           
                          <div class="2u 12u(mobile)">
                              {!! Form::label('divisi','Divisi',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="10u 12u(mobile)">
                              {!! Form::select('id_divisi',$divisi,null,['class'=>'form-control', 'placeholder'=>'Divisi','required'=>'required'])!!}    
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
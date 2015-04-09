<div id="user" class="modal-example-content">

 {!! Form::open(['route'=>'user.store','class'=>'form-horizontal', 'id'=>'add']) !!} 

   <div class="modal-example-header">
        <h4 class="modal-title">Tambah User</h4>
   </div>			<!-- /modal-header -->
   <div class="modal-example-body">
        <div class="row">
            <section class="12u 12u(narrower)">
                    <div class="row 50%">           
                        <div class="2u 12u(mobile)">
                            {!! Form::label('nama','Nama',['class'=>'col-sm-4 control-label']) !!}
                        </div>
                        <div class="10u 12u(mobile)">
                            {!! Form::text('name','',['class'=>'form-control', 'placeholder'=>'Nama Lengkap','required'=>'required'])!!}    
                        </div>
                    </div>

                    <div class="row 50%">           
                        <div class="2u 12u(mobile)">
                            {!! Form::label('username','Username',['class'=>'col-sm-4 control-label']) !!}
                        </div>
                        <div class="10u 12u(mobile)">
                            {!! Form::text('username','',['class'=>'form-control', 'placeholder'=>'Username','required'=>'required'])!!}    
                        </div>
                    </div>

                    <div class="row 50%">           
                        <div class="2u 12u(mobile)">
                            <label class="col-md-4 control-label">Password</label>
                        </div>
                        <div class="10u 12u(mobile)">
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>

                    <div class="row 50%">           
                        <div class="2u 12u(mobile)">
                            <label class="col-md-4 control-label">Confirm Password</label>
                        </div>
                        <div class="10u 12u(mobile)">
                            <input type="password" class="form-control" name="password_confirmation" required>
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

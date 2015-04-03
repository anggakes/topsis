  {!! Form::open(['route'=>'user.store','class'=>'form-horizontal']) !!} 

   <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Tambah User</h4>
 
   </div>			<!-- /modal-header -->
   <div class="modal-body">
     
    <div class="form-group">
      {!! Form::label('nama','Nama',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('name','',['class'=>'form-control', 'placeholder'=>'Nama Lengkap'])!!}    
    </div>
  </div>
   <div class="form-group">
      {!! Form::label('username','Username',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('username','',['class'=>'form-control', 'placeholder'=>'Username'])!!}    
    </div>
  </div>
 <div class="form-group">
              <label class="col-md-4 control-label">Password</label>
              <div class="col-md-6">
                <input type="password" class="form-control" name="password">
              </div>
  </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Confirm Password</label>
              <div class="col-md-6">
                <input type="password" class="form-control" name="password_confirmation">
              </div>
            </div>
   <div class="form-group">
      {!! Form::label('role','Role',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::select('roles',[
        'admin'=>'Admin',
        'badan independent'=>'Badan Independent',
        'top manager'=>'Top Manager'
      ],null,['class'=>'form-control', 'placeholder'=>'Hak Akses user'])!!}    
    </div>
  </div>
    <div class="form-group">
      {!! Form::label('divisi','Divisi',['class'=>'col-sm-4 control-label']) !!}
     <div class="col-sm-6">
      {!! Form::select('id_divisi',$divisi,null,['class'=>'form-control', 'placeholder'=>'Divisi'])!!}    
    </div>
  </div>
     
  </div>			<!-- /modal-body -->
   <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

    {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}
              
   
   </div>			<!-- /modal-footer -->
     {!! Form::close() !!} 
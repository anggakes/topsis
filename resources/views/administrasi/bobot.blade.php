  {!! Form::open(['route'=>['adm.post.bobot',$id_lowongan],'class'=>'form-horizontal']) !!} 

   <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Bobot Administrasi</h4>
 
   </div>			<!-- /modal-header -->
   <div class="modal-body">
     
    <div class="form-group">
      {!! Form::label('akreditas','Akreditas',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('ka1',@$bobot->ka1,['class'=>'form-control', 'placeholder'=>'Kode Lowongan'])!!}    
    </div>
  </div>
   <div class="form-group">
      {!! Form::label('ipk','Ipk',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('ka2',@$bobot->ka2,['class'=>'form-control', 'placeholder'=>'Nama Lowongan'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('pni','Pendidikan Non Ilmiah',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('ka3',@$bobot->ka3,['class'=>'form-control', 'placeholder'=>'Nama Lowongan'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('pk','Pengalaman Kerja',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('ka4',@$bobot->ka4,['class'=>'form-control', 'placeholder'=>'Nama Lowongan'])!!}    
    </div>
  </div>
   <div class="form-group">
      {!! Form::label('kuota','Kuota',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('kuota',@$bobot->kuota,['class'=>'form-control', 'placeholder'=>'kuota'])!!}    
    </div>
  </div>
     
  </div>			<!-- /modal-body -->
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

    {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}
              
   
   </div>			<!-- /modal-footer -->
     {!! Form::close() !!} 
  {!! Form::model($lowongan,['method'=>'PATCH','route'=>['lowongan.update',$lowongan->id],'class'=>'form-horizontal']) !!} 

   <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Edit Lowongan</h4>
 
   </div>			<!-- /modal-header -->
   <div class="modal-body">
     
    <div class="form-group">
      {!! Form::label('kode','Kode',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('kode',null,['class'=>'form-control', 'placeholder'=>'Kode Lowongan'])!!}    
    </div>
  </div>
   <div class="form-group">
      {!! Form::label('nama','Nama',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('nama',null,['class'=>'form-control', 'placeholder'=>'Nama Lowongan'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('nama','Nama',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">

      {!! Form::select('id_divisi',$divisi,null,['class'=>'form-control'])!!}    
    </div>
  </div>
   <div class="form-group">
      {!! Form::label('keterangan','Keterangan',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::textarea('keterangan',null,['class'=>'form-control', 'placeholder'=>'Keterangan Lowongan '])!!}    
    </div>
  </div>
     
  </div>			<!-- /modal-body -->
   <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

    {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}
              
   
   </div>			<!-- /modal-footer -->
     {!! Form::close() !!} 
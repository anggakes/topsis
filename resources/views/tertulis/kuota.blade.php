  {!! Form::open(['route'=>['tertulis.post.bobot',$id_lowongan],'class'=>'form-horizontal']) !!} 

   <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Kuota Tertulis</h4>
 
   </div>			<!-- /modal-header -->
   <div class="modal-body">
     
    <div class="form-group">
      {!! Form::label('kuota','Kuota',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('kuota',@$bobot->kuota,['class'=>'form-control', 'placeholder'=>'Kode Lowongan'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('nilai_minimum','Nilai Minimum',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('nilai_minimum',@$bobot->nilai_minimum,['class'=>'form-control', 'placeholder'=>'Kode Lowongan'])!!}    
    </div>
  </div>
   
     
  </div>			<!-- /modal-body -->
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

    {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}
              
   
   </div>			<!-- /modal-footer -->
     {!! Form::close() !!} 
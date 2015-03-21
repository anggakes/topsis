  {!! Form::open(['route'=>['wawancara.post.bobot',$id_lowongan],'class'=>'form-horizontal']) !!} 

   <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Bobot Wawancara</h4>
 
   </div>			<!-- /modal-header -->
   <div class="modal-body">
     
    <div class="form-group">
      {!! Form::label('penampilan','Penampilan',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('wa1',@$bobot->wa1,['class'=>'form-control', 'placeholder'=>'Kode Lowongan'])!!}    
    </div>
  </div>
   <div class="form-group">
      {!! Form::label('wawasan','Wawasan',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('wa2',@$bobot->wa2,['class'=>'form-control', 'placeholder'=>'Nama Lowongan'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('sikap','Sikap',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('wa3',@$bobot->wa3,['class'=>'form-control', 'placeholder'=>'Nama Lowongan'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('ba','Bahasa Asing',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('wa4',@$bobot->wa4,['class'=>'form-control', 'placeholder'=>'Nama Lowongan'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('np','Nilai Psikotes',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('wa5',@$bobot->wa5,['class'=>'form-control', 'placeholder'=>'Nama Lowongan'])!!}    
    </div>
  </div><div class="form-group">
      {!! Form::label('nt','Nilai Tetulis',['class'=>'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
      {!! Form::text('wa6',@$bobot->wa6,['class'=>'form-control', 'placeholder'=>'Nama Lowongan'])!!}    
    </div>
  </div>
     
  </div>			<!-- /modal-body -->
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

    {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}
              
   
   </div>			<!-- /modal-footer -->
     {!! Form::close() !!} 
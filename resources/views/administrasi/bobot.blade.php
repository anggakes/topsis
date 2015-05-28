<div id="user" class="modal-example-content">
    {!! Form::open(['route'=>['adm.post.bobot',$id_lowongan],'class'=>'form-horizontal']) !!} 

      <div class="modal-example-header">
        <a href='#' class='pull-right' onclick="$.fn.custombox('close');" >&times;</a>

          <h4 class="modal-title">Bobot Administrasi</h4>
      </div>     <!-- /modal-header -->
      <div class="modal-example-body">
          <div class="row">
              <section class="12u 12u(narrower)">
                  
                   <div class="row 50%">           
                        <div class="2u 12u(mobile)">
                            {!! Form::label('akreditas','Akreditas',['class'=>'col-sm-4 control-label']) !!}
                        </div>
                        <div class="10u 12u(mobile)">
                            {!! Form::input('number','ka1',@$bobot->ka1,['class'=>'form-control', 'placeholder'=>'Bobot Akreditasi','required','required', 'step'=>'any'])!!}    

                        </div>
                  </div>

                  <div class="row 50%">           
                        <div class="2u 12u(mobile)">
                            {!! Form::label('ipk','Ipk',['class'=>'col-sm-4 control-label']) !!}
                        </div>
                        <div class="10u 12u(mobile)">

                            {!! Form::input('number','ka2',@$bobot->ka2,['class'=>'form-control', 'placeholder'=>'Bobot IPK','required','required', 'step'=>'any'])!!}    

                        </div>
                  </div>
                  
                   <div class="row 50%">           
                        <div class="2u 12u(mobile)">
                            {!! Form::label('pni','Pendidikan Non Ilmiah',['class'=>'col-sm-4 control-label']) !!}
                        </div>
                        <div class="10u 12u(mobile)">

                            {!! Form::input('number','ka3',@$bobot->ka3,['class'=>'form-control', 'placeholder'=>'Bobot Pendidikan Non Ilmiah','required','required','step'=>'any'])!!}    

                        </div>
                  </div>

                   <div class="row 50%">           
                        <div class="2u 12u(mobile)">
                            {!! Form::label('pk','Pengalaman Kerja',['class'=>'col-sm-4 control-label']) !!}
                        </div>
                        <div class="10u 12u(mobile)">
                            {!! Form::input('number','ka4',@$bobot->ka4,['class'=>'form-control', 'placeholder'=>'Bobot Pengalaman Kerja','required','required', 'step'=>'any'])!!}    

                        </div>
                  </div>

                  <div class="row 50%">           
                        <div class="2u 12u(mobile)">
                            {!! Form::label('kuota','Kuota',['class'=>'col-sm-4 control-label']) !!}
                        </div>
                        <div class="10u 12u(mobile)">
                            {!! Form::input('number','kuota',@$bobot->kuota,['class'=>'form-control', 'placeholder'=>'kuota','required','required', 'step'=>'any'])!!}    
                        </div>
                  </div>
     
                    
                    <!-- /modal-body --><br>
                    <div class="row 50% pull-right">
                      <div class="12u">
                          <ul class="actions">
                            <li> {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}</li>
                           
                           
                          </ul>
                      </div>
                    </div>
            </div>
      </div>
  </div>      <!-- /modal-end -->
  {!! Form::close() !!} 
</div>

<script type="text/javascript">
$('.form-horizontal').submit(function(){
var ka1 = parseFloat($('[name=ka1]').val());
var ka2 = parseFloat($('[name=ka2]').val());
var ka3 = parseFloat($('[name=ka3]').val());
var ka4 = parseFloat($('[name=ka4]').val());
var total = ka1+ka2+ka3+ka4;
if(total == 1){
return true;
}else{
  alert("maaf total semua bobot harus sama dengan 1");
  return false;
}


});
</script>

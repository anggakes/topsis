  <div id="user" class="modal-example-content">
        {!! Form::open(['route'=>['wawancara.post.bobot',$id_lowongan],'class'=>'form-horizontal','id'=>'form']) !!} 

         <div class="modal-example-header">
           <a href='#' class='pull-right' onclick="$.fn.custombox('close');" >&times;</a>
              <h4 class="modal-title">Bobot Wawancara</h4>
         </div>     <!-- /modal-header -->
         <div class="modal-example-body">
              <div class="row">
                  <section class="12u 12u(narrower)">
     
                      <div class="row 50%">           
                          <div class="4u 12u(mobile)">
                            {!! Form::label('penampilan','Penampilan',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="6u 12u(mobile)">
                            {!! Form::input('number','wa1',@$bobot->wa1,['class'=>'form-control', 'placeholder'=>'Nilai Bobot','required'=>'required',"step"=>"any"])!!}     
                          </div>
                      </div>
                      
                      <div class="row 50%">           
                          <div class="4u 12u(mobile)">
                            {!! Form::label('wawasan','Wawasan',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="6u 12u(mobile)">
                            {!! Form::input('number','wa2',@$bobot->wa2,['class'=>'form-control', 'placeholder'=>'Nilai Bobot','required'=>'required',"step"=>"any"])!!}     
                          </div>
                      </div>
                      
                      <div class="row 50%">           
                          <div class="4u 12u(mobile)">
                            {!! Form::label('sikap','Sikap',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="6u 12u(mobile)">
                            {!! Form::input('number','wa3',@$bobot->wa3,['class'=>'form-control', 'placeholder'=>'Nilai Bobot','required'=>'required',"step"=>"any"])!!}     
                          </div>
                      </div>

                      <div class="row 50%">           
                          <div class="4u 12u(mobile)">
                            {!! Form::label('ba','Bahasa Asing',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="6u 12u(mobile)">
                            {!! Form::input('number','wa4',@$bobot->wa4,['class'=>'form-control', 'placeholder'=>'Nilai Bobot','required'=>'required',"step"=>"any"])!!}     
                          </div>
                      </div>
                      
                      <div class="row 50%">           
                          <div class="4u 12u(mobile)">
                            {!! Form::label('np','Nilai Psikotes',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="6u 12u(mobile)">
                            {!! Form::input('number','wa5',@$bobot->wa5,['class'=>'form-control', 'placeholder'=>'Nilai Bobot','required'=>'required',"step"=>"any"])!!}     
                          </div>
                      </div>

                      <div class="row 50%">           
                          <div class="4u 12u(mobile)">
                            {!! Form::label('nt','Nilai Tetulis',['class'=>'col-sm-4 control-label']) !!}
                          </div>
                          <div class="6u 12u(mobile)">
                            {!! Form::input('number','wa6',@$bobot->wa6,['class'=>'form-control', 'placeholder'=>'Nilai Bobot',"step"=>"any"])!!}     
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
                  </section>
            </div>
      </div>
  </div>      <!-- /modal-end -->
  {!! Form::close() !!} 
</div>

<script type="text/javascript">
$('.form-horizontal').submit(function(){
var wa1 = parseFloat($('[name=wa1]').val());
var wa2 = parseFloat($('[name=wa2]').val());
var wa3 = parseFloat($('[name=wa3]').val());
var wa4 = parseFloat($('[name=wa4]').val());
var wa5 = parseFloat($('[name=wa5]').val());
var wa6 = parseFloat($('[name=wa6]').val());
var total = wa1+wa2+wa3+wa4+wa5+wa6;

if(total == 1){
return true;
}else{
  alert("maaf total semua bobot harus sama dengan 1");
  return false;
}


});
</script>

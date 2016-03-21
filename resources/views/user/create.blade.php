<div id="user" class="modal-example-content">

 {!! Form::open(['route'=>'user.store','class'=>'form-horizontal', 'id'=>'add']) !!} 

   <div class="modal-example-header">
    <a href='#' class='pull-right' onclick="$.fn.custombox('close');" >&times;</a>
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
                            <input type="password" id="p1" class="form-control" name="password" required>
                        </div>
                    </div>

                    <div class="row 50%">           
                        <div class="2u 12u(mobile)">
                            <label class="col-md-4 control-label">Confirm Password</label>
                        </div>
                        <div class="10u 12u(mobile)">
                            <input type="password" id="p2" class="form-control" name="password_confirmation" required>
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

  <script type="text/javascript">
    var submit=false;

    function cek_pass(){
        if($('#p1').val() == $('#p2').val()){
            submit = true;
            $('#p1').css('border-color','green');
            $('#p2').css('border-color','green');
        }
        else{
            submit = false;
            $('#p1').css('border-color','red');
            $('#p2').css('border-color','red');
        }
    }

    $('#p1').keyup(function(){cek_pass();});
    $('#p2').keyup(function(){cek_pass();});
    $('#add').submit(function(){
        if(submit==false){
            alert('Perbaiki dulu password anda!');
            event.preventDefault();
        }
    });
</script>
  {!! Form::close() !!} 

</div>
@extends('template.backend')
<!-- awal section content -->
@section('content')
  <a class="btn btn-primary pull-right" id="sign" href="#login"><i class="icon-g-circle-plus"></i>Tambah</a>

<hr>
                          <table class='table datatables'>
                              <thead>
                              <tr>
                                          <th >Nama</th>
                                          <th >Divisi</th>
                                          <th >#</th>
                                    </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td> Herman Suherman</td>
                                <td> Keuangan</td>
                                <td> 
                                  <a href=''>tambah</a>
                                  -
                                  <a href=''>edit</a>
                                  -
                                  <a href=''>hapus</a>
                                </td>
                              </tr>
                               <tr>
                                <td> Herman Suherman</td>
                                <td> Keuangan</td>
                                <td> 
                                  <a href=''>tambah</a>
                                  -
                                  <a href=''>edit</a>
                                  -
                                  <a href=''>hapus</a>
                                </td>
                              </tr>
                               <tr>
                                <td> Herman Suherman</td>
                                <td> Keuangan</td>
                                <td> 
                                  <a href=''>tambah</a>
                                  -
                                  <a href=''>edit</a>
                                  -
                                  <a href=''>hapus</a>
                                </td>
                              </tr>
                              </tbody>
                          </table>



                          <!-- modal container -->

                              <div id="login" style="display: none;" class="modal-example-content">
                                <div class="modal-example-header" style="height:65px;" onclick="$.fn.custombox('close');">
                                  <h3 style="float:left;line-height:1em;">Tambah</h3>
                                </div>
                                <div class="modal-example-body">
                                  <div class="row">
                                <section class="12u 12u(narrower)">
                                  <form method="post" action="#">   
                                      <div class="row 50%">           
                                          <div class="2u 12u(mobile)">Nama</div>
                                          <div class="10u 12u(mobile)">
                                              <input required name="nama" placeholder="Nama" type="text" maxlength="15"/>
                                          </div>
                                      </div>
                                      <div class="row 50%">           
                                          <div class="2u 12u(mobile)">Keterangan</div>
                                          <div class="10u 12u(mobile)">
                                              <textarea name="keterangan" type="text" maxlength="15"/></textarea>
                                          </div>
                                      </div>
                                      <div class="row 50%">           
                                          <div class="2u 12u(mobile)">Divisi</div>
                                          <div class="10u 12u(mobile)">
                                              <select name="id_divisi" required/>
                                                <option>HRD</option>
                                                <option>IS</option>
                                                <option>Finance</option>
                                              </select>
                                          </div>
                                      </div>

                                      <div class="row 50%">
                                        <div class="12u">
                                        <ul class="actions">
                                          <li><input type="submit" value="Simpan" /></li>
                                          <li><input type="button" class="close button" onclick="$.fn.custombox('close');" value="&times;"/></li>
                                        </ul>
                                      </div></div>
                                  </form>
                                </section>
                              </div>
                                </div>
                              </div>
@stop

@section('css')

    {!!Html::style("assets/custombox/jquery.custombox.css")!!} 

@stop


@section('js')
  {!!Html::script("assets/custombox/jquery.custombox.js")!!}
   
 <script type="text/javascript">          
    
     $(document).ready(function(){ 
          $('#sign').on('click', function () {
              $.fn.custombox( this, {
                   effect: 'sign',
                   overlayOpacity : 0.7,
                   overlayColor: '#EBB198',
                   speed: 500
               });
               return false;
          });

          $(".datatables").dataTable(); 
     });
 </script>
 @stop


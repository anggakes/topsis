
<!-- awal section content -->


            <article id="content" class="8u 12u(narrower)">
              <header class="image-wrapper first 12u(narrower)">
                <h2 class="image">Lowongan</h2>  
                <a class="image pull-right button small 4(narrower)" id="sign" href="#login"><i class="icon-g-circle-plus"></i>Tambah</a>
              </header>
             


    
                          <br>         
                          <link media="all" type="text/css" rel="stylesheet" href="http://akbar_motor/sibengkel/public/assets/datatables/jquery.dataTables.css">


                          <script src="http://akbar_motor/sibengkel/public/assets/jquery-2.0.3.min.js"></script>

                          <script src="http://akbar_motor/sibengkel/public/assets/datatables/jquery.dataTables.js"></script>

                          <table class='datatables'>
                              <colgroup>
                                          <col class="con0" />
                                          <col class="con1" />
                                          <col class="con2" />
                                      </colgroup>
                              <thead>
                              <tr>
                                          <th align="center" valign="middle" class="head0">Nama</th>
                                          <th align="center" valign="middle" class="head1">Harga</th>
                                          <th align="center" valign="middle" class="head2">Aksi</th>
                                      </tr>
                              </thead>
                              <tbody>
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

                          <script type="text/javascript">
                             
                             jQuery(document).ready(function(){ 
                              oTable = $(".datatables").dataTable(); 
                            });
                          </script>

                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>
           {!!HTML::script("assets/js/jquery.custombox.js")!!}
    
{!!HTML::style("assets/css/jquery.custombox.css")!!}

@extends('template.backend')
<!-- awal section content -->
@section('content')
  <a class="btn btn-primary pull-right" id="sign"  href="{!! route('lowongan.create') !!}" data-toggle="modal" data-target="#myModal"><i class="icon-g-circle-plus"></i>Tambah</a>

<hr>
                          <table class='table datatables'>
                              <thead>
                              <tr>
                                          <th >Nama</th>
                                          <th>Kode</th>
                                          <th>Divisi</th>
                                          <th> Keterangan</th>
                                          <th >#</th>
                                    </tr>
                              </thead>
                              <tbody>
                                
                              </tbody>
                          </table>

 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
              loading...
            </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

@stop

@section('css')

    {!!Html::style("assets/custombox/jquery.custombox.css")!!} 

@stop


@section('js')

 {!!Html::script("assets/laravel/laravel.methodHandler.js")!!} 
   
 <script type="text/javascript">    

    $(document).ready(function(){

    /* refresh modal u can change the text with img */

    refreshModal("Loading..");

          $(".datatables").dataTable({
              "ajax" : "{!! route('lowongan.datatables') !!}",
              "fnInitComplete": function(oSettings, json) {
                  //inisialisi saat datatables setelah load
                   $('a[data-method]').click(function(e){
                      handleMethod(e,$(this));
                      e.preventDefault();
                   });
                }
            }); 

    });
     
 </script>
 @stop


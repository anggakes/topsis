@extends('template.backend')
<!-- awal section content -->
@section('content')

<article id="content" class="8u 12u(narrower)">
    <header class="image-wrapper first 12u(narrower)">
      <h2 class="image">Lowongan</h2> 
      @if(Auth::user()->roles == "admin"))
      <a class="image pull-right button small 4(narrower)" id="sign" href="{!! route('lowongan.create') !!}" data-toggle="modal" data-target="#myModal">Tambah</a>
      @endif
    </header>
             
    <div class="row">

        <table class='table datatables table-bordered 8u 12u(narrower)' style='width:900px'>
            <thead>
                  <tr>
                        <th >Nama</th>
                        <th>Kode</th>
                        <th>Divisi</th>
                         <th>Tahap</th>
                        <th> Keterangan</th>
                        <th >#</th>
                  </tr>
            </thead>
            <tbody>
              
            </tbody>
        </table>
    </div>
</article>

    @include('modal') <!-- include modal Wrap -->

    @stop

    
@section('js')
  {!!Html::script("assets/js/jquery.custombox.js")!!}
  {!!Html::style("assets/css/jquery.custombox.css")!!}
  {!!Html::script("assets/laravel/laravel.methodHandler.js")!!} 

     <script type="text/javascript">           
        $(document).ready(function(){

              $(".datatables").dataTable({
                  "ajax" : "{!! route('lowongan.datatables') !!}"                      
                }).on( 'draw.dt', function () {
                    //inisialisi saat datatables setelah draw
                       $('a[data-method]').click(function(e){
                          handleMethod(e,$(this));
                          e.preventDefault();
                       });
                }); 
              
            $('#sign').on('click', function () {
                $.fn.custombox( this, {
                    effect: 'newspaper',
                    overlayOpacity : 0.7,
                    overlayColor: '#EBB198',
                    speed: 150
                });
                return false;
            });
      });       
   </script>
   @stop


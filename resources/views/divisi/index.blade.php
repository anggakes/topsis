@extends('template.backend')
<!-- awal section content -->
@section('content')

<article id="content" class="8u 12u(narrower)">
    <header class="image-wrapper first 12u(narrower)">
      <h2 class="image">Divisi</h2> 
      <a class="image pull-right button small 4(narrower)" id="sign"  href="{!! route('divisi.create') !!}" data-target="#input">Tambah</a> 
    </header>
             
    <div class="row">
        <div class="12u">
            <table class='table datatables' width='800px;'>
                <thead>
                <tr>
                            <th >Nama</th>
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
              "ajax" : "{!! route('divisi.datatables') !!}",
              "fnInitComplete": function(oSettings, json) {
                  //inisialisi saat datatables setelah load
                   $('a[data-method]').click(function(e){
                      handleMethod(e,$(this));
                      e.preventDefault();
                   });
                }
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


@extends('template.backend')
<!-- awal section content -->
@section('content')
  <article id="content" class="9u 12u(narrower)">
    <header class="image-wrapper first 12u(narrower)">
      <h2 class="image">Pengguna</h2> 
      <a href="{!! route('adm.get.proses',$id_lowongan)!!}" class='image pull-right button small 4(narrower) <?php echo ($jumlah_pelamar>2)? "":"disabled" ;?>'> 
        Proses 
        Hitung Topsis</a>
      <a class="image pull-right button small 4(narrower)" id="sign" href="{!! route('pelamar.create',$id_lowongan) !!}" data-target="#input"><i class="icon-g-circle-plus"></i>Tambah</a> 
    </header>
             
    <div class="row">

        <table class='table datatables table-bordered 11u 12u(narrower)' style='wid:1000px'>
            <thead>
            <tr>
                        <th>No. Pelamar</th>
                        <th>Nama</th>
                        <th>No. KTP</th>
                        <th>Tanggal Lahir</th>
                        <th>Kontak</th>
                        <th >#</th>
                  </tr>
            </thead>
            <tbody>
              
            </tbody>
        </table>

@stop


@section('js')

  {!!Html::script("assets/js/jquery.custombox.js")!!}
  {!!Html::style("assets/css/jquery.custombox.css")!!}
  {!!Html::script("assets/laravel/laravel.methodHandler.js")!!} 
   
 <script type="text/javascript">    

    $(document).ready(function(){

          $(".datatables").dataTable({
              "ajax" : "{!! route('pelamar.datatables',$id_lowongan) !!}",
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


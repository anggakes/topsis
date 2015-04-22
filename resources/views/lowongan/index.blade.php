@extends('template.backend')
<!-- awal section content -->
@section('content')
<style type="text/css">
#primary_nav_wrap
{
  margin-top:-37px;
}

#primary_nav_wrap ul
{
  list-style:none;
  position:relative;
  float:right;
  padding:0
}

#primary_nav_wrap ul a
{
  display:block;
  color:#333;
  text-decoration:none;
  font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif
}

#primary_nav_wrap ul li
{
  position:relative;
  float:left;
  margin:0;
  padding:0;
  color: black;
          text-decoration: none;
          outline: 0;
          border: 0;
          border: solid 1px rgba(255,255,255,0);
          border-radius: 0.35em;
          -moz-transition: border-color 0.25s ease-in-out, background-color 0.25s ease-in-out;
          -webkit-transition: border-color 0.25s ease-in-out, background-color 0.25s ease-in-out;
          -o-transition: border-color 0.25s ease-in-out, background-color 0.25s ease-in-out;
          -ms-transition: border-color 0.25s ease-in-out, background-color 0.25s ease-in-out;
          transition: border-color 0.25s ease-in-out, background-color 0.25s ease-in-out;
}

#primary_nav_wrap ul li.current-menu-item
{
  background:#ddd
}

#primary_nav_wrap ul li:hover
{
  background:#f6f6f6
}

#primary_nav_wrap ul ul
{
  z-index: 900;
  display:none;
  position:absolute;
  top:100%;
  padding: 0.85em 0 0.85em 0;
}

#primary_nav_wrap ul ul li
{
  float:none;
  text-align: left;
    border-radius: 0.35em;
    min-width: 4em;
    background: #fff;
    line-height: 1em;
    box-shadow: 0px 1px 3px 0px rgba(0,0,0,0.25);
    margin-top: -0.5em;
}

#primary_nav_wrap ul ul a
{
  display: block;
  color:grey;
  font-size:small;
      padding: 0.85em 1em 0.85em 1em;
      border-top: solid 1px #e8e8e8;
      border-bottom: 0;
}

#primary_nav_wrap ul ul ul
{
  top:0;
  right:100%;
}

#primary_nav_wrap ul li:hover > ul
{
  display:block
}
</style>
<article id="content" class="12u 12u(narrower)">
    <header class="image-wrapper first 12u(narrower)">
      <h2 class="image">Lowongan</h2> 
      @if(Auth::user()->roles == "admin"))
      <a class="image pull-right button small 4(narrower)" id="sign" href="{!! route('lowongan.create') !!}" data-toggle="modal" data-target="#myModal">Tambah</a>
      @endif
    </header>
             
    <div class="row">

        <table class='table datatables table-bordered ' style='width:1000px'>
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


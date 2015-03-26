


<!-- Css -->
{!!Html::style("assets/datatables/jquery.dataTables.css")!!}
{!!Html::style("assets/bootstrap/css/bootstrap.css")!!} 
@yield('css')

@yield('content')



<!-- Js -->
{!!Html::script("assets/jquery/jquery-2.0.3.min.js")!!}
{!!Html::script("assets/bootstrap/js/bootstrap.js")!!}
{!!Html::script("assets/laravel/laravel.bootstrap.js")!!} 
{!!Html::script("assets/datatables/jquery.dataTables.js")!!}

<script type="text/javascript">
    /* refresh modal u can change the text with img */
	    refreshModal("Loading..");
</script>

@yield('js');


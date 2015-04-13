@extends('template.backend')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
				@if(Auth::user()->roles == "admin")
					<a href="{!! route('divisi.index') !!}" class='btn'>Divisi</a><br>
					<a href="{!! route('user.index') !!}" class='btn'>Management User</a>
				@endif
					
					<a href="{!! route('lowongan.index') !!}" class='btn'>Lowongan</a><br>
					
				
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

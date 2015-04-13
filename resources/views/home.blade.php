@extends('template.backend')

@section('content')
<article id="content" class="8u 12u(narrower)">
              <header class="image-wrapper first 12u(narrower)">
                <h2 class="image">Home</h2>  
              </header>
             
            <div class="row">
              <div class="row 50%">           
                  <div class="12u 12u(mobile)">
                      <p class="subtitle"><i class="icon-g-folder-open"></i></p>
                      <a href="{!! route('divisi.index') !!}" class="pull-right button small 4(narrower) azure" id="sign"><i class="icon-g-group"></i> Divisi</a>
                      <a href="{!! route('lowongan.index') !!}" class="pull-right button small 4(narrower) mistyrose" id="sign"><i class="icon-g-user-add"></i> Lowongan</a>
                      <a href="{!! route('user.index') !!}"class="pull-right button small 4(narrower) blanchedalmond" id="bobot-adm"><i class="icon-g-cogwheels"></i> Manajemen Pengguna</a>
                  </div>
              </div>
            </div>
</article>

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

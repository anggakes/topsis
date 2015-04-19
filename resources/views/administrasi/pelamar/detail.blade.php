@extends('template.backend')
<!-- awal section content -->
@section('content')
 <article id="content" class="9u 12u(narrower)">
    <header class="image-wrapper first 12u(narrower)">
      <h2 class="image">{!! $pelamar->no_ktp !!} - {!! $pelamar->nama !!}</h2> 
    </header>

    <div class="12u 12u(mobile)"> 
      <br><br>
        <p class="subtitle pull-right" style="font-size:18pt;width:100%"><i class="icon-g-folder-open"></i>Identitas Diri</p>

            <div class="row 50%">           
                <div class="4u 12u(mobile)">No. KTP</div>
                <div class="8u 12u(mobile)">: {!! $pelamar->no_ktp !!}</div>
            </div>

            <div class="row 50%">           
                <div class="4u 12u(mobile)">
                  	Nama</div>
                <div class="8u 12u(mobile)">: {!! $pelamar->nama !!}</div>
            </div>

            <div class="row 50%">           
                <div class="4u 12u(mobile)">
                  	Tempat / Tanggal Lahir</div>
                <div class="8u 12u(mobile)">: {!! $pelamar->tempat_lahir !!} / {!! $pelamar->tanggal_lahir !!}</div>
            </div>

            <div class="row 50%">           
                <div class="4u 12u(mobile)">
                  	Kontak</div>
                <div class="8u 12u(mobile)">: {!! $pelamar->kontak !!}</div>
            </div>

            <div class="row 50%">           
                <div class="4u 12u(mobile)">
                  	Alamat</div>
                <div class="8u 12u(mobile)">: {!! $pelamar->alamat !!}</div>
            </div>

        <br><br>
        <p class="subtitle pull-right" style="font-size:18pt;width:100%"><i class="icon-g-folder-open"></i>Pendidikan Terakhir</p>
        
            <div class="row 50%">           
                <div class="4u 12u(mobile)">Institusi</div>
                <div class="8u 12u(mobile)">: {!! $pelamar->pendidikanTerakhir->institusi !!}</div>
            </div>

            <div class="row 50%">           
                <div class="4u 12u(mobile)">
                  	Akreditas</div>
                <div class="8u 12u(mobile)">: {!! $pelamar->pendidikanTerakhir->akreditas !!}</div>
            </div>

            <div class="row 50%">           
                <div class="4u 12u(mobile)">
                  	Jenjang</div>
                <div class="8u 12u(mobile)">: {!! $pelamar->pendidikanTerakhir->jenjang !!}</div>
            </div>

            <div class="row 50%">           
                <div class="4u 12u(mobile)">
                  	IPK</div>
                <div class="8u 12u(mobile)">: {!! $pelamar->pendidikanTerakhir->ipk !!}</div>
            </div>

          <div class="row 50%">           
              <div class="4u 12u(mobile)">
                	Tahun Masuk / Lulus </div>
              <div class="8u 12u(mobile)">: {!! $pelamar->pendidikanTerakhir->tahun_masuk !!} / {!! $pelamar->pendidikanTerakhir->tahun_lulus!!}<br>
          </div>

        <br><br><br>
        <p class="subtitle pull-right" style="font-size:18pt;width:100%"><i class="icon-g-folder-open"></i>Pendidikan Non Ilmiah</p>

                    <table class='table default 11u 12u(narrower)' style='wid:1000px'>
                        <thead>
                        <tr>
                                    <th>Nama</th>
                                    <th>Instansi</th>
                                    <th>Tahun Masuk</th>
                                    <th>Tahun Keluar</th>
                                    
                              </tr>
                        </thead>
                        <tbody>
                          @foreach ($pelamar->pendidikanNonIlmiah as $key => $value) 
                 <tr>
                   	<td>{!! $value->nama !!}</td>
                   	<td>{!! $value->instansi !!}</td>
                   	<td>{!! $value->tgl_masuk !!}</td>
                   	<td>{!! $value->tgl_keluar !!}</td>

                 </tr>
                         @endforeach
                        </tbody>
                    </table>
          <br><br><br>
          <p class="subtitle pull-right" style="font-size:18pt;width:100%"><i class="icon-g-folder-open"></i>Pengalaman Kerja</p>

                    <table class='table default 11u 12u(narrower)' style='wid:1000px'>
                        <thead>
                        <tr>
                                    <th>jabatan</th>
                                    <th>Instansi</th>
                                    <th>Tahun Masuk</th>
                                    <th>Tahun Keluar</th>
                                    
                              </tr>
                        </thead>
                        <tbody>
                          @foreach ($pelamar->pengalamanKerja as $key => $value) 
                 <tr>
                   	<td>{!! $value->jabatan !!}</td>
                   	<td>{!! $value->instansi !!}</td>
                   	<td>{!! $value->tgl_masuk !!}</td>
                   	<td>{!! $value->tgl_keluar !!}</td>

                 </tr>
                         @endforeach
                        </tbody>
                    </table>
    </div>
@stop


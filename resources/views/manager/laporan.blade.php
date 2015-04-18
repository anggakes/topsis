@extends('template.backend')

@section('content')

<?php 
use App\BobotAdministrasi;
use App\KuotaPsikotes;
use App\KuotaTertulis;
use App\Wawancara;
use App\Lowongan;
$lowongan = Lowongan::findOrFail($id_lowongan);

if($lowongan->id_tahap>3){
	$kuotaAdmin = BobotAdministrasi::where('id_lowongan','=',$id_lowongan)->first()->kuota;
}

if($lowongan->id_tahap>6){
	$kuotaPsi = KuotaPsikotes::where('id_lowongan','=',$id_lowongan)->first();
}
if($lowongan->id_tahap>9){
$kuotaTulis = KuotaTertulis::where('id_lowongan','=',$id_lowongan)->first();
}
if($lowongan->id_tahap>12){
$lulus = Wawancara::whereHas('lamaran', function($q)use($id_lowongan){			
			
						$q->where('id_lowongan','=',$id_lowongan);
					
					})->get();
}
?>


<center><h3>Laporan Lowongan </h3></center>
<hr> 
@if($lowongan->id_tahap>3)
<h3>Tahap Administrasi</h3><br>
 <span class='label label-primary ' style='font-size: 14pt'>Kuota : {!! $kuotaAdmin !!} </span>
              <?php $peringkat =1; ?>
                  <table class='table default 12u 12u(mobile)'>
                    <thead>
                      <tr>
                        <td>Peringkat</td>
                        <td>No Peserta</td>
                        <td>Nama</td>
                        <td>Tanggal Lahir</td>
                        <td>Nilai</td>
                        <td>Status</td>
                      </tr>
                    </thead><tbody>
                  @foreach ($lamaran->lulusAdministrasi($id_lowongan) as $l) 
                    <tr>
                      <td>
                        {!! $peringkat !!}
                      </td>
                      <td>
                        {!! $l->nomor_pelamar !!}
                      </td>
                      <td>
                        {!! $l->nama !!}
                      </td>
                      <td>
                        {!! $l->tanggal_lahir !!}
                      </td>
                      <td>
                        {!! $l->nilai_topsis !!}
                      </td>
                      <td>
                        {!!  ($peringkat<=$kuotaAdmin) ? "lulus" : "gagal" !!}
                      </td>
                    </tr>
                    <?php $peringkat++; ?>
                  @endforeach
                  </tbody>
                </table>
@else
	<center><h3>Tahap Administrasi belum selesai</h3></center>
@endif

@if($lowongan->id_tahap>6)
<h3>Tahap Psikotes</h3>
 <span class='label label-primary ' style='font-size: 14pt'>Kuota : {!! $kuotaPsi->kuota !!} </span>
              -
              <span class='label label-primary ' style='font-size: 14pt'>Nilai Minimum : {!! $kuotaPsi->nilai_minimum !!} </span><br><br>

              <?php $peringkat =1; ?>
                  <table class='table default 12u 12u(mobile)'>
                    <thead>
                      <tr>
                        <td>Peringkat</td>
                        <td>No Peserta</td>
                        <td>Nama</td>
                        <td>Tanggal Lahir</td>
                        <td>Nilai</td>
                        <td>Status</td>
                      </tr>
                    </thead><tbody>
                  @foreach ($lamaran->lulusPsikotes($id_lowongan,0,0) as $l) 
                    <tr>
                      <td>
                        {!! $peringkat !!}
                      </td>
                      <td>
                        {!! $l->nomor_pelamar !!}
                      </td>
                      <td>
                        {!! $l->nama !!}
                      </td>
                      <td>
                        {!! $l->tanggal_lahir !!}
                      </td>
                      <td>
                        {!! $l->nilai_psikotes !!}
                      </td>
                      <td>
                        {!!  ($peringkat<=$kuotaPsi->kuota AND $l->nilai_psikotes>=$kuotaPsi->nilai_minimum) ? "lulus" : "gagal" !!}
                      </td>
                    </tr>
                    <?php $peringkat++; ?>
                  @endforeach
                  </tbody>
                </table>
@else
	<center><h3>Tahap Psikotes belum selesai</h3></center>
@endif


@if($lowongan->id_tahap>9)
<h3>Tahap Tertulis</h3>

<span class='label label-primary ' style='font-size: 14pt'>Kuota : {!! $kuotaTulis->kuota !!} </span>
              -
              <span class='label label-primary ' style='font-size: 14pt'>Nilai Minimum : {!! $kuotaTulis->nilai_minimum !!} </span><br><br>

              <?php $peringkat =1; ?>
                  <table class='table default 12u 12u(mobile)'>
                      <thead>
                        <tr>
                          <td>Peringkat</td>
                          <td>No Peserta</td>
                          <td>Nama</td>
                          <td>Tanggal Lahir</td>
                          <td>Nilai</td>
                          <td>Status</td>
                        </tr>
                      </thead><tbody>
                    @foreach ($lamaran->lulusTertulis($id_lowongan, 0, 0) as $l) 
                      <tr>
                        <td>
                          {!! $peringkat !!}
                        </td>
                        <td>
                          {!! $l->nomor_pelamar !!}
                        </td>
                        <td>
                          {!! $l->nama !!}
                        </td>
                          <td>
                          {!! $l->tanggal_lahir !!}
                        </td>
                        <td>
                          {!! $l->nilai_tertulis !!}
                        </td>
                        <td>
                          {!!  ($peringkat<=$kuotaTulis->kuota AND $l->nilai_tertulis>=$kuotaTulis->nilai_minimum) ? "lulus" : "gagal" !!}
                        </td>
                      </tr>
                      <?php $peringkat++; ?>
                    @endforeach
                    </tbody>
                  </table>
@else
	<center><h3>Tahap Tertulis belum selesai</h3></center>
@endif

@if($lowongan->id_tahap>12)
<h3>Tahap Wawancara</h3><br>
  <?php $peringkat =1; ?>
              <table class='table default 12u 12u(mobile)'>
                <thead>
                  <tr>
                    <td>Peringkat</td>
                    <td>No Peserta</td>
                    <td>Nama</td>
                    <td>Tanggal Lahir</td>
                    <td>Nilai</td>
                  </tr>
                </thead><tbody>
              @foreach ($lulus as $l) 
                <tr>
                  <td>
                    {!! $peringkat !!}
                  </td>
                  <td>
                    {!! $l->lamaran->nomor_pelamar !!}
                  </td>
                  <td>
                    {!! $l->lamaran->pelamar->nama !!}
                  </td>
                  <td>
                    {!! $l->lamaran->pelamar->tanggal_lahir !!}
                  </td>
                  <td>
                    {!! $l->nilai_topsis !!}
                  </td>
                </tr>
                <?php $peringkat++; ?>
              @endforeach
              </tbody>
            </table>
@else
	<center><h3>Tahap Wawancara belum selesai</h3></center>
@endif

<!-- stop  -->
			</div>
		</div>
	</div>
</div>

@endsection

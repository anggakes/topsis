@extends('template.backend')
<!-- awal section content -->
@section('content')


          <article id="content" class="10u 12u(narrower)">
              <header class="image-wrapper first 12u(narrower)">
                <h2 class="image">Hasil Seleksi</h2>  
                <a href="{!! route('lowongan.show',$id_lowongan) !!}" class="image pull-right button small 4(narrower)">Kembali</a>
                <a class="image pull-right button small 4(narrower)" href="#" onclick="window.print()"><i class="icon-g-print"></i>Cetak</a>
              </header>

              <span class='label label-primary ' style='font-size: 14pt'>Kuota : {!! $kuota->kuota !!} </span>
              -
              <span class='label label-primary ' style='font-size: 14pt'>Nilai Minimum : {!! $kuota->nilai_minimum !!} </span><br><br>

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
                    @foreach ($lulus as $l) 
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
                          {!!  ($peringkat<=$kuota->kuota AND $l->nilai_tertulis>=$kuota->nilai_minimum) ? "lulus" : "gagal" !!}
                        </td>
                      </tr>
                      <?php $peringkat++; ?>
                    @endforeach
                    </tbody>
                  </table>

@stop




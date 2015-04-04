@extends('template.backend')
<!-- awal section content -->
@section('content')
  <h3> Hasil Tahap Psikotes </h3>
<hr>
<span class='label label-primary ' style='font-size: 14pt'>Kuota : {!! $kuota->kuota !!} </span>
-
<span class='label label-primary ' style='font-size: 14pt'>Nilai Minimum : {!! $kuota->nilai_minimum !!} </span><br><br>
<a href="{!! route('lowongan.show',$id_lowongan) !!}" class='btn btn-primary'>Kembali</a>
<?php $peringkat =1; ?>
    <table class='table'>
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
          {!! $l->nilai_psikotes !!}
        </td>
        <td>
          {!!  ($peringkat<=$kuota->kuota AND $l->nilai_psikotes>=$kuota->nilai_minimum) ? "lulus" : "gagal" !!}
        </td>
      </tr>
      <?php $peringkat++; ?>
    @endforeach
    </tbody>
  </table>

@stop




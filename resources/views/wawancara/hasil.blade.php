@extends('template.backend')
<!-- awal section content -->
@section('content')
  <h3> Hasil Tahap Wawancara (AKHIR) </h3>
<hr>
<br>

<?php $peringkat =1; ?>
    <table class='table'>
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
          {!! $l->nomor_pelamar !!}
        </td>
        <td>
          {!! $l->pelamar->nama !!}
        </td>
        <td>
          {!! $l->pelamar->tanggal_lahir !!}
        </td>
        <td>
          {!! $l->nilai_topsis !!}
        </td>
      </tr>
      <?php $peringkat++; ?>
    @endforeach
    </tbody>
  </table>

@stop




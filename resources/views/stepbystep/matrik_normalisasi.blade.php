@extends('template.backend')
<!-- awal section content -->
@section('content')
  <h3> Matrik Normalisasi {!! $tahap !!} </h3>
<hr>


    <table class='table'>
      <thead>
        <tr>
          <td>Alternatif</td>
          @foreach($kriteria as $v)
            <td>{!! $v !!}</td>
          @endforeach
        </tr>
      </thead><tbody>
        @foreach ($lamaran as $k => $value)

          <tr> 
            <td>{!! $value->pelamar->nama !!}</td>
          @foreach($kriteria as $key=>$v)
              <td>{!! $nilai_topsis[$k][$key] !!}</td>
          @endforeach
        </tr>
        @endforeach
    </tbody>
  </table>

@stop




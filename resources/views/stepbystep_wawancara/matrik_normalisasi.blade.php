@extends('template.backend')
<!-- awal section content -->
@section('content')
<article id="content" class="11u 12u(narrower)">
    <header class="image-wrapper first 12u(narrower)">
      <h2 class="image"> Matrik Normalisasi {!! $tahap !!} </h2>
      <a href="{!! route($next,$id_lowongan) !!}" class='image pull-right button small 4(narrower)'>Selanjutnya</a>
    </header>
    <table class='table default 12u 12u(mobile)'>
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
            <td>{!! $value->lamaran->pelamar->nama !!}</td>
          @foreach($kriteria as $key=>$v)
              <td>{!! $nilai_topsis[$k][$key] !!}</td>
          @endforeach
        </tr>
        @endforeach
    </tbody>
  </table>

@stop




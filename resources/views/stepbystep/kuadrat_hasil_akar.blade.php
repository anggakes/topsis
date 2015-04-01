@extends('template.backend')
<!-- awal section content -->
@section('content')
  <h3> Kuadrat Hasil Akar {!! $tahap !!} </h3>
<hr>

<a href="{!! route($next,$id_lowongan) !!}" class='btn btn-primary'>Next -></a>
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
              <td>{!! $nilai_topsis['alternatif'][$k][$key] !!}</td>
          @endforeach

        </tr>
        @endforeach
        <tr>
          <td>TOTAL</td>
          @foreach ($kriteria as $key=>$v) 
            <td>{!! $nilai_topsis['total'][$key] !!}</td>
          @endforeach
        </tr>
        <tr>
          <td>Hasil Akar</td>
          @foreach ($kriteria as $key=>$v) 
            <td>{!! $nilai_topsis['akar'][$key] !!}</td>
          @endforeach
        </tr>
    </tbody>
  </table>

@stop




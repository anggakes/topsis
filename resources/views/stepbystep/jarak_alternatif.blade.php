@extends('template.backend')
<!-- awal section content -->
@section('content')
  <h3> Jarak Alternatif Solusi Ideal Positif {!! $tahap !!} </h3>
<hr>


    <table class='table'>
      <thead>
        <tr>
          <td>Alternatif</td>
          @foreach($kriteria as $v)
            <td>{!! $v !!}+</td>
          @endforeach
          <td>Total</td>
          <td>Hasil Akar</td>
        </tr>
      </thead><tbody>
        @foreach ($lamaran as $k => $value)

          <tr> 
            <td>{!! $value->pelamar->nama !!}</td>
          @foreach($kriteria as $key=>$v)
              <td>{!! $solpos['alternatif'][$k][$key] !!}</td>
          @endforeach
           <td>{!! $solpos['total'][$k] !!}</td>
           <td>{!! $solpos['akar'][$k] !!}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<hr>

 <h3> Jarak Alternatif Solusi Ideal Negatif {!! $tahap !!} </h3>
<hr>


    <table class='table'>
      <thead>
        <tr>
          <td>Alternatif</td>
          @foreach($kriteria as $v)
            <td>{!! $v !!}-</td>
          @endforeach
          <td>Total</td>
          <td>Hasil Akar</td>
        </tr>
      </thead><tbody>
        @foreach ($lamaran as $k => $value)

          <tr> 
            <td>{!! $value->pelamar->nama !!}</td>
          @foreach($kriteria as $key=>$v)
              <td>{!! $solneg['alternatif'][$k][$key] !!}</td>
          @endforeach
           <td>{!! $solneg['total'][$k] !!}</td>
           <td>{!! $solneg['akar'][$k] !!}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

  

@stop




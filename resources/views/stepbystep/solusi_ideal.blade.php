@extends('template.backend')
<!-- awal section content -->
@section('content')
  <h3> Solisi Ideal {!! $tahap !!} </h3>
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
          <tr> 
            <td>A +</td>
          @foreach($sol['positif'] as $key=>$v)
              <td>{!! $v !!}</td>
          @endforeach
        </tr>
        <tr> 
            <td>A -</td>
          @foreach($sol['negatif'] as $key=>$v)
              <td>{!! $v !!}</td>
          @endforeach
        </tr>
        
    </tbody>
  </table>

@stop




@extends('template.backend')
<!-- awal section content -->
@section('content')
  <h3> Alternatif {!! $tahap !!} </h3>
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
              <td>{!! $alt[$k][$key] !!}</td>
          @endforeach
        </tr>
        @endforeach
    </tbody>
  </table>

@stop



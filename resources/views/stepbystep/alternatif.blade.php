@extends('template.backend')
<!-- awal section content -->
@section('content')
   <article id="content" class="8u 12u(narrower)">
    <header class="image-wrapper first 12u(narrower)">
      <h2 class="image"> Alternatif {!! $tahap !!}</h2> 
        <a class="image pull-right button small 4(narrower)" id="sign" href="{!! route($next,$id_lowongan) !!}"><i class="icon-g-circle-plus"></i>Selanjutnya</a> 
    </header>
    <br><br>
    <div class="row">
          <table class='table default 12u 12u(mobile)'>
            <thead>
              <tr>
                <td>Alternatif</td>
                @foreach($kriteria as $v)
                  <td>{!! $v !!}</td>
                @endforeach
              </tr>
            </thead>
            <tbody>
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
    </div>
  </article>
@stop




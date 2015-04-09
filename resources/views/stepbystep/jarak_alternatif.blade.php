@extends('template.backend')
<!-- awal section content -->
@section('content')



<article id="content" class="11u 12u(narrower)">
    <header class="image-wrapper first 12u(narrower)">
      <h2 class="image">  Jarak Alternatif Solusi Ideal Positif {!! $tahap !!} </h2>
      <a href="{!! route($next,$id_lowongan) !!}" class='image pull-right button small 4(narrower)'>Selanjutnya</a>
    </header>
    <br><br>
    <div class="row">
          <table class='table default 12u 12u(mobile)'>  
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
      </div>
  </article>

  <article id="content" class="11u 12u(narrower)">
    <header class="image-wrapper first 12u(narrower)">
      <h2 class="image"> Jarak Alternatif Solusi Ideal Negatif {!! $tahap !!} </h2>
    </header>
    <br><br>
    <div class="row">
          <table class='table default 12u 12u(mobile)'> 
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
      </div>
</article>

  

@stop




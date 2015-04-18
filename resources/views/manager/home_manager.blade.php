@extends('template.backend')

@section('content')





<h3>Laporan Hasil Seleksi Divisi {!! Auth::user()->divisi->nama !!}</h3>


<br><br>
<table class='table table-bordered'>
<thead style='background:#c0c0c0'>
<tr>
<td>Kode</td>
<td>Nama</td>
<td>Tahap</td>
<td>Laporan</td>
</tr>
</thead>
<tbody>
@foreach ($lowongan as $key => $value) 
<tr>
<td>{!! $value->kode !!}</td>
<td>{!! $value->nama !!}</td>
<td>{!! $value->tahap->tahap !!}</td>
<td><a href="{!! route('laporan',$value->id) !!}">Lihat</a></td>
</tr>
@endforeach
</tbody>
</table>















<!-- stop  -->
			</div>
		</div>
	</div>
</div>

@endsection

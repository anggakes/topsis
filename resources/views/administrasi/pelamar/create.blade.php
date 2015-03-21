@extends('template.backend')
<!-- awal section content -->
@section('content')

  {!! Form::open(['route'=>['pelamar.store',$id_lowongan],'class'=>'form-horizontal']) !!} 

<legend>Identitas Diri</legend>
  <div class="form-group">
      {!! Form::label('no_pelamar','No Pelamar',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('lamaran[nomor_pelamar]',$nomor_peserta,['class'=>'form-control', 'placeholder'=>'', 'readonly'=>'readonly'])!!}    
    </div>
  </div>

  <div class="form-group">
      {!! Form::label('nama','Nama',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('pelamar[nomor_pelamar]',null,['class'=>'form-control', 'placeholder'=>''])!!}    
    </div>
  </div>

   <div class="form-group">
      {!! Form::label('ttl','Tempat/Tanggal Lahir',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
      {!! Form::text('pelamar[tempat_lahir]',null,['class'=>'form-control', 'placeholder'=>'Tempat Lahir'])!!}    
    </div>
    <div class="col-sm-4">
      {!! Form::text('pelamar[tanggal_lahir]',null,['class'=>'form-control', 'placeholder'=>'Tanggal Lahir'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('kontak','Kontak',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('pelamar[kontak]',null,['class'=>'form-control', 'placeholder'=>''])!!}    
    </div>
  </div>
   <div class="form-group">
      {!! Form::label('alamat','Alamat',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::textarea('pelamar[alamat]','',['class'=>'form-control', 'placeholder'=>'Alamat tempat tinggal peserta '])!!}    
    </div>
  </div>

<legend>Pendidikan Terakhir</legend>
    
  <div class="form-group">
      {!! Form::label('pt','Perguruan Tinggi',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('pendidikan_terakhir[institusi]','',['class'=>'form-control', 'placeholder'=>'Nama Perguruan Tinggi '])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('pt','Jenjang',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::select('pendidikan_terakhir[jenjang]',
        [
        'D1'=>'D1',
        'D2'=>'D2',
        'D3'=>'D3',
        'S1'=>'S1',
        'S2'=>'S2',
        'S3'=>'S3']
      ,'S1',['class'=>'form-control', 'placeholder'=>'Keterangan Lowongan '])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('akreditas','Akreditas',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('pendidikan_terakhir[akreditas]','',['class'=>'form-control', 'placeholder'=>'Akreditas'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('tahun_masuk','Periode Pendidikan',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
      {!! Form::text('pendidikan_terakhir[tahun_masuk]','',['class'=>'form-control', 'placeholder'=>'Tahun Masuk'])!!}    
    </div>
    <div class="col-sm-4">
      {!! Form::text('pendidikan_terakhir[tahun_keluar]','',['class'=>'form-control', 'placeholder'=>'Tahun Keluar'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('ipk','IPK',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('pendidikan_terakhir[ipk]','',['class'=>'form-control', 'placeholder'=>'Nilai IPK'])!!}    
    </div>
  </div>
  

<legend>Pendidikan Non Ilmiah</legend>

<legend>Pengalaman Kerja</legend>

  {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}

  {!! Form::close() !!} 
@stop
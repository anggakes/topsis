<legend>Identitas Diri</legend>
  <div class="form-group">
      {!! Form::label('no_pelamar','No Pelamar',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('lamaran[nomor_pelamar]',$nomor_pelamar,['class'=>'form-control', 'placeholder'=>'', 'readonly'=>'readonly'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('no_ktp','No KTP',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('pelamar[no_ktp]',@$lamaran->pelamar->no_ktp,['class'=>'form-control', 'placeholder'=>''])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('nama','Nama',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('pelamar[nama]',@$lamaran->pelamar->nama,['class'=>'form-control', 'placeholder'=>''])!!}    
    </div>
  </div>

   <div class="form-group">
      {!! Form::label('ttl','Tempat/Tanggal Lahir',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
      {!! Form::input('text','pelamar[tempat_lahir]',@$lamaran->pelamar->tempat_lahir,['class'=>'form-control', 'placeholder'=>'Tempat Lahir'])!!}    
    </div>
    <div class="col-sm-4">
      {!! Form::input('date','pelamar[tanggal_lahir]',@$lamaran->pelamar->tanggal_lahir,['class'=>'form-control', 'placeholder'=>'Tanggal Lahir'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('kontak','Kontak',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('pelamar[kontak]',@$lamaran->pelamar->kontak,['class'=>'form-control', 'placeholder'=>''])!!}    
    </div>
  </div>
   <div class="form-group">
      {!! Form::label('alamat','Alamat',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::textarea('pelamar[alamat]',@$lamaran->pelamar->alamat,['class'=>'form-control', 'placeholder'=>'Alamat tempat tinggal peserta '])!!}    
    </div>
  </div>

<legend>Pendidikan Terakhir</legend>
    
  <div class="form-group">
      {!! Form::label('pt','Perguruan Tinggi',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('pendidikan_terakhir[institusi]',@$lamaran->pelamar->pendidikanTerakhir->institusi,['class'=>'form-control', 'placeholder'=>'Nama Perguruan Tinggi '])!!}    
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
      ,@$lamaran->pelamar->pendidikanTerakhir->jenjang,['class'=>'form-control', 'placeholder'=>'Keterangan Lowongan '])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('akreditas','Akreditas',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('pendidikan_terakhir[akreditas]',@$lamaran->pelamar->pendidikanTerakhir->akreditas,['class'=>'form-control', 'placeholder'=>'Akreditas'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('tahun_masuk','Periode Pendidikan',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
      {!! Form::input('number','pendidikan_terakhir[tahun_masuk]',@$lamaran->pelamar->pendidikanTerakhir->tahun_masuk,['class'=>'form-control', 'placeholder'=>'Tahun Masuk'])!!}    
    </div>
    <div class="col-sm-4">
      {!! Form::input('number','pendidikan_terakhir[tahun_lulus]',@$lamaran->pelamar->pendidikanTerakhir->tahun_lulus,['class'=>'form-control', 'placeholder'=>'Tahun Keluar'])!!}    
    </div>
  </div>
  <div class="form-group">
      {!! Form::label('ipk','IPK',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
      {!! Form::text('pendidikan_terakhir[ipk]',@$lamaran->pelamar->pendidikanTerakhir->ipk,['class'=>'form-control', 'placeholder'=>'Nilai IPK'])!!}    
    </div>
  </div>
  

<legend>Pendidikan Non Ilmiah</legend>
<div id="pni"></div>

<legend>Pengalaman Kerja</legend>
<div id="pk"></div>
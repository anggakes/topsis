<br>

<br>
<div class="12u 12u(mobile)">
      <p class="subtitle pull-right" style="font-size:18pt;width:100%"><i class="icon-g-folder-open"></i>Identitas Diri</p>

      <div class="row 50%">           
          <div class="2u 12u(mobile)">
              {!! Form::label('no_pelamar','No Pelamar',['class'=>'col-sm-2 control-label']) !!}
          </div>
          <div class="10u 12u(mobile)">
              {!! Form::text('lamaran[nomor_pelamar]',$nomor_pelamar,['class'=>'form-control', 'placeholder'=>'', 'readonly'=>'readonly'])!!}    
          </div>
      </div>
  
      <div class="row 50%">           
          <div class="2u 12u(mobile)">
              {!! Form::label('no_ktp','No KTP',['class'=>'col-sm-2 control-label']) !!}
          </div>
          <div class="10u 12u(mobile)">
              {!! Form::text('pelamar[no_ktp]',@$lamaran->pelamar->no_ktp,['class'=>'form-control', 'placeholder'=>''])!!}    
          </div>
      </div>

      <div class="row 50%">           
          <div class="2u 12u(mobile)">
              {!! Form::label('nama','Nama',['class'=>'col-sm-2 control-label']) !!}
          </div>
          <div class="10u 12u(mobile)">
              {!! Form::text('pelamar[nama]',@$lamaran->pelamar->nama,['class'=>'form-control', 'placeholder'=>''])!!}    
          </div>
      </div>

      <div class="row 50%">           
          <div class="2u 12u(mobile)">
              {!! Form::label('ttl','Tempat/Tanggal Lahir',['class'=>'col-sm-2 control-label']) !!}
          </div>
          <div class="6u 12u(mobile)">
              {!! Form::input('text','pelamar[tempat_lahir]',@$lamaran->pelamar->tempat_lahir,['class'=>'form-control', 'placeholder'=>'Tempat Lahir'])!!}    
          </div>
          <div class="4u 12u(mobile)">
              {!! Form::input('date','pelamar[tanggal_lahir]',@$lamaran->pelamar->tanggal_lahir,['class'=>'form-control', 'placeholder'=>'Tanggal Lahir'])!!}    
          </div>
      </div>

      <div class="row 50%">           
          <div class="2u 12u(mobile)">
              {!! Form::label('kontak','Kontak',['class'=>'col-sm-2 control-label']) !!}
          </div>
          <div class="10u 12u(mobile)">
              {!! Form::text('pelamar[kontak]',@$lamaran->pelamar->kontak,['class'=>'form-control', 'placeholder'=>''])!!}    
          </div>
      </div>
   
      <div class="row 50%">           
          <div class="2u 12u(mobile)">
              {!! Form::label('alamat','Alamat',['class'=>'col-sm-2 control-label']) !!}
          </div>
          <div class="10u 12u(mobile)">
              {!! Form::textarea('pelamar[alamat]',@$lamaran->pelamar->alamat,['class'=>'form-control', 'placeholder'=>'Alamat tempat tinggal peserta '])!!}    
          </div>
      </div>


      <br>
      <p class="subtitle pull-right" style="font-size:18pt;width:100%"><i class="icon-g-folder-open"></i>Pendidikan Terakhir</p>
    
      <div class="row 50%">           
          <div class="2u 12u(mobile)">
              {!! Form::label('pt','Perguruan Tinggi',['class'=>'col-sm-2 control-label']) !!}
          </div>
          <div class="10u 12u(mobile)">
              {!! Form::text('pendidikan_terakhir[institusi]',@$lamaran->pelamar->pendidikanTerakhir->institusi,['class'=>'form-control', 'placeholder'=>'Nama Perguruan Tinggi '])!!}    
          </div>
      </div>

      <div class="row 50%">           
          <div class="2u 12u(mobile)">
              {!! Form::label('pt','Jenjang',['class'=>'col-sm-2 control-label']) !!}
          </div>
          <div class="10u 12u(mobile)">
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
      
      <div class="row 50%">           
          <div class="2u 12u(mobile)">
              {!! Form::label('akreditas','Akreditas',['class'=>'col-sm-2 control-label']) !!}
          </div>
          <div class="10u 12u(mobile)">
              {!! Form::select('pendidikan_terakhir[akreditas]',
                [
                'A' => 'A',
                'B' => 'B',
                'C' => 'C'
                ]
                ,@$lamaran->pelamar->pendidikanTerakhir->akreditas,['class'=>'form-control', 'placeholder'=>'Akreditas'])!!}    
          </div>
      </div>
  
      <div class="row 50%">           
          <div class="2u 12u(mobile)">
              {!! Form::label('tahun_masuk','Periode Pendidikan',['class'=>'col-sm-2 control-label']) !!}
          </div>
          <div class="5u 12u(mobile)">
              {!! Form::input('number','pendidikan_terakhir[tahun_masuk]',@$lamaran->pelamar->pendidikanTerakhir->tahun_masuk,['class'=>'form-control', 'placeholder'=>'Tahun Masuk'])!!}    
          </div>
          <div class="5u 12u(mobile)">
              {!! Form::input('number','pendidikan_terakhir[tahun_lulus]',@$lamaran->pelamar->pendidikanTerakhir->tahun_lulus,['class'=>'form-control', 'placeholder'=>'Tahun Keluar'])!!}    
          </div>
      </div>

      <div class="row 50%">           
          <div class="2u 12u(mobile)">
              {!! Form::label('ipk','IPK',['class'=>'col-sm-2 control-label']) !!}
          </div>
          <div class="10u 12u(mobile)">
              {!! Form::text('pendidikan_terakhir[ipk]',@$lamaran->pelamar->pendidikanTerakhir->ipk,['class'=>'form-control', 'placeholder'=>'Nilai IPK'])!!}    
          </div>
      </div>
  

      <br>
      <p class="subtitle pull-right" style="font-size:18pt;width:100%"><i class="icon-g-folder-open"></i>Pendidikan Non Ilmiah</p>

      <div id="pni" ></div>

      <br>
      <p class="subtitle pull-right" style="font-size:18pt;width:100%"><i class="icon-g-folder-open"></i>Pengalaman Kerja</p>
     
      <div id="pk"></div>

<style type="text/css">
table td{
  text-align: center;
}
</style>
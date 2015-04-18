@extends('template.backend')

@section('content')

<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Sejarah Singkat</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Visi & Nilai Inti</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Struktur Organisasi</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home" style='text-align:center'>
    	<div style='margin:0px auto;width:700px'>
    		<center><img src="{!! asset('assets/images/nindyakarya.jpg') !!}"></center> <br>
    	PT. Nindya Karya (Persero) yang merupakan perusahaan BUMN Jasa Konstruksi yang memiliki sejarah dan pengalaman panjang pada jalur bisnis utamanya di bidang jasa konstruksi. Dimulai dari hasil nasionalisai perusahaan Belanda NV Nederlands Aannemings Maatschappy (NEDAM) Vorheen Firma H.F.Boersma, berdasar PP. 59 tahun 1961. Kemudian berdasarkan PP No. 11/1972 dan Kepmenkeu No. 91/MK/IV/3/1973 serta akta notaris Kartini Moeljadi S.H. No. 76 tanggal 15 Maret 1973 PT. Nindya Karya (Persero) ditetapkan sebagai Perusahaan Persero yaitu menjadi PT. Nindya Karya (Persero). PT. Nindya Karya (Persero) saat ini beroperasi diseluruh wilayah Republik Indonesia yang terbagi kedalam lima Unit Bisnis yang terdiri dari lima kantor Divisi meliputi Aceh, Sumatera Utara, Sumatera Barat, Riau, Sumatera Selatan, Bengkulu, Lampung, Jambi, Kepulauan Riau, seluruh Kalimantan, Jawa Tengah, Jawa Timur, Bali, NTB dan NTT, seluruh Sulawesi, Maluku, Maluku Utara, Papua, Papua Barat, Jawa Barat, Banten, dan DKI Jakarta.<br> Saat ini PT. Nindya Karya (Persero) berkomitmen meningkatkan kinerja perusahaan melalui "NINDYA Reborn" berdasarkan PP Nomor 69 tahun 2012 dengan melakukan restrukturisasi perusahaan secara menyeluruh baik logo perusahaan, visi, misi, nilai-nilai dasar, budaya, bidang keuangan, organisasi, SDM dan Sistem, guna menjadi perusahaan yang cerdas berbasis pada pengetahuan dan teknologi. Komitmen ini dibangun dengan semangat tinggi untuk fokus pada pelanggan serta keinginan yang kuat untuk menghasilkan produk yang berkualitas. Peningkatan kompetensi karyawan menjadi perhatian khusus perusahaan guna menjadikan karyawan lebih unggul dan tangguh, professional pada bidangnya. Tercatat bahwa dari total 640 orang karyawan PT. Nindya Karya (Persero) seluruh Indonesia, 337 orang merupakan Sarjana S1 dan S2 Teknik dan Non Teknik, 104 orang Diploma teknik dan Non Teknik. Sebagai perusahaan konstruksi nasional berpengalaman, kami sungguh-sungguh bekerja cepat serta berkualitas cermat untuk memenuhi kepuasan pelanggan dengan beroientasi pada kerjasama saling menguntungkan dan tumbuh bersama mitra kerja.
    </div>
    </div>

    <div role="tabpanel" class="tab-pane" id="profile">
    	<center> 
    		<img src="{!! asset('assets/images/nindyakarya visimisi.jpg') !!}"><br><br>
    		<h2>	Visi </h2>
	Menjadi Perusahaan Jasa Konstruksi Lima Besar Di Indonesia
	<br><br>
<h2>	Nilai Inti</h2>
Mencapai Pertumbuhan Diatas Rata - Rata <br>
Membangun SDM yang Unggul dan Tangguh <br>
Mewujudkan Kinerja Ekselen <br>
Tumbuh Bersama Mitra Kerja <br>
Peduli Kepada Lingkungan <br>


</center>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
<center>
<img src="{!! asset('assets/images/struktur organisasi nindyakarya.jpg') !!}"><br><br>
</center>

    </div>
  </div>

</div> <!-- end tab pane -->






			</div>
		</div>
	</div>
</div>

@endsection

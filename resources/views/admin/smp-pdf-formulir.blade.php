<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    @page {
    margin-top: 2.17in !important;
    margin-bottom: 1.18in !important;
    margin-left: 0.79in !important;
    margin-right: 0.79in !important; 
    }
    .tab {
    display: inline-block;
    margin-left: 40px;
    }
  </style>
</head>
<body>
  <p align="center">
    <strong>FORMULIR PENDAFTARAN PESERTA DIDIK BARU</strong>    
  </p>
  <p align="center">
    <strong>SMPI RAMAH ANAK</strong>
  </p>
  <p align="center">
    <strong>TAHUN PELAJARAN 2022/2023</strong> 
  </p>
  <p>
    No. Pendaftaran : {{ $form->formulirID() }}
  </p>
  <p>
    Nama Lengkap : {{ $form->nama_lengkap }}
  </p>
  <p>
    Nama Panggilan : {{ $form->nama_panggilan }}
  </p>
  <p align="center">
    <strong>BERKAS YANG DILAMPIRKAN</strong>
  </p>
  <p align="center">
    <strong>SAAT PENGEMBALIAN FORMULIR</strong>
  </p>
  <p>
    <ol>
      <li> Formulir pendaftaran sudah diisi lengkap</li>
      <li> 1 lembar fotocopy Kartu Keluarga</li>
      <li> 1 lembar fotocopy ijazah TK</li>
      <li> 2 lembar Pas foto terbaru ukuran 3x4 </li>
    </ol>
  </p>
  
  <strong>
    <br clear="all"/>
  </strong>
  <div style="page-break-before:always">&nbsp;</div>
  <p align="center">
    <strong>FORMULIR PENDAFTARAN CALON SISWA SMPI RAMAH ANAK</strong>
  </p>
  <p align="center">
    <strong>TAHUN AJARAN 2022/2023</strong>
    <strong></strong>
  </p>
  <p align="center">
    <strong><em>Bismillaahirrahmaanirrahiim</em></strong>
    <strong></strong>
  </p>
  <p align="center">
    Saya yang bertanda tangan di bawah ini:
  </p>
  <p>
    Nama Orangtua/Wali : 
  </p>
  <p>
    Tempat &amp; Tanggal Lahir :
  </p>
  <p>
    Alamat :
  </p>
  <p>
    Nomor Telepon/HP :
  </p>
  <p>
    Dengan ini mengajukan permohonan kepada Kepala SMP Islam Ramah Anak agar
    dapat menerima anak (kandung/asuh/angkat)* saya sebagai peserta didik di
    SMP Ramah Anak, yaitu:
  </p>
  <p>
    Nama Lengkap : {{ $form->nama_lengkap }}
  </p>
  <p>
    Tempat &amp; Tanggal Lahir : {{ $form->tempat_lahir }}, {{ $form->tanggal_lahir }}
  </p>
  <p align="right">
    Depok,........................................... 
  </p>
  <p align="right">
    Orangtua/Wali Calon Siswa
  </p>
  <p align="right">
    tanda tangan dan nama jelas
  </p>
  <strong>
    <br clear="all"/>
  </strong>
  <div style="page-break-before:always">&nbsp;</div>
  <p align="center">
    <strong>KELENGKAPAN DATA CALON SISWA</strong>
  </p>
  <p align="center">
    <strong>(Harap diisi selengkapnya sesuai kondisi yang ada)</strong>
  </p>
  <p>
    <strong>A. DATA DIRI CALON SISWA </strong>
  </p>
   
  <p>
    <ol>
      <li> Nama Lengkap (Sesuai Akte Kelahiran) : {{ $form->nama_lengkap }} </li>
      <p >
        Jenis Kelamin : {{ $form->jenis_kelamin }}
      </p>
      <li>Nomor Induk Kependudukan (NIK) : {{ $form->nik }}</li>
      <li>Nomor Induk Siswa Nasional (NISN) : {{ $form->nisn }}</li>
      <li>Tempat &amp; Tanggal Lahir  : {{ $form->tempat_lahir }} , {{ $form->tanggal_lahir }}</li>
      <li>Agama                       : {{ $form->agama }}</li>
      <li>Hobi                         :{{ $form->hobi }}</li>
      <li>Cita – Cita                  :{{ $form->cita2 }}</li>
      <li>Berkebutuhan Khusus          :{{ $form->berkebutuhan_khusus }}</li>
      <li>Sebutkan jenis kekhususan (jika YA) :{{ $form->jenis_berkebutuhan_khusus }}</li>
      <li> Alamat Lengkap                     : {{ $form->alamat }}</li>
      <li> Tempat Tinggal                    :{{ $form->tempat_tinggal }}</li>
      <li> Sarana Transportasi ke Sekolah     :{{ $form->transport }}</li>

    </ol>
    
  </p>
  
  
  <div style="page-break-before:always">&nbsp;</div>
  <p>
    <strong>B.DATA AYAH KANDUNG </strong>
    
  </p>
  <p> 
    <ol>
      <li>Nama Lengkap (Sesuai KTP/KK) : {{ $form->nama_ayah }}</li>
      <li>Tempat &amp; Tanggal Lahir :{{ $form->tempat_lahir_ayah }}, {{ $form->tanggal_lahir_ayah }}</li>
      <li>Nomor Handphone :{{ $form->no_handphone_ayah }}</li>
      <li>Jenjang Pendidikan :{{ $form->pendidikan_terakhir_ayah }}</li>
      <li>Pekerjaan :{{ $form->pekerjaan_ayah }}</li>
      <li>Alamat Kantor / Tempat Kerja : {{ $form->alamat_kerja_ayah }}</li>
      <li>Penghasilan (pilih yang sesuai) : {{ $form->penghasilan_ayah }}</li>
    </ol>
     
  </p>
 
  <p>
    <strong>C. DATA IBU KANDUNG</strong>
    
  </p>
  <p>
    <ol>
      <li>Nama Lengkap (Sesuai KTP/KK) : {{ $form->nama_ibu }}</li>
      <li>Tempat &amp; Tanggal Lahir : {{ $form->tempat_lahir_ibu }} , {{ $form->tanggal_lahir_ibu }}</li>
      <li>Nomor Handphone :{{ $form->no_handphone_ibu }}</li>
      <li>Jenjang Pendidikan :{{ $form->pendidikan_terakhir_ibu }}</li>
      <li>Pekerjaan :{{ $form->pekerjaan_ibu }}</li>
      <li>Alamat Kantor / Tempat Kerja : {{ $form->alamat_kerja_ibu }}</li>
      <li>Penghasilan (pilih yang sesuai) : {{ $form->penghasilan_ibu }}</li>
    </ol>
  </p>
  
  <p>
    <strong>D. DATA WALI (JIKA TINGGAL BERSAMA WALI)</strong>
    
  </p>
  <p>
    <ol>
      <li>Nama Lengkap (Sesuai KTP/KK) : {{ $form->nama_wali }}</li>
      <li>Tempat &amp; Tanggal Lahir : {{ $form->tempat_lahir_wali }} , {{ $form->tanggal_lahir_wali }}</li>
      <li>Nomor Handphone :{{ $form->no_handphone_wali }}</li>
      <li>Jenjang Pendidikan :{{ $form->pendidikan_terakhir_wali }}</li>
      <li>Pekerjaan :{{ $form->pekerjaan_wali }}</li>
      <li>Alamat Kantor / Tempat Kerja : {{ $form->alamat_kerja_wali }}</li>
      <li>Penghasilan (pilih yang sesuai) : {{ $form->penghasilan_wali }}</li>
    </ol>
  </p>
  
  <div style="page-break-before:always">&nbsp;</div>
  <p>
    <strong>E. DATA PERIODIK CALON SISWA</strong>
    
  </p>
  <p>
    1. Keadaan Jasmani
    
    <ol type="a">
      <li> Tinggi Badan :  {{ $form->tinggi_badan }}  cm </li>
      <li>Berat Badan : {{ $form->berat_badan }} Kg</li> 
      <li>Golongan Darah : {{ $form->golongan_darah }}</li>  
      <li>Penyakit khusus (jika ada) : {{ $form->penyakit_khusus }}</li>
      <li>Kelainan jasmani : {{ $form->kelainan_jasmani }}</li>
      <li>Jelaskan (jika ada) : {{ $form->kelainan_jasmani_ya }}</li>
    </ol>
  </p>
    
  </p>
  <p>
    2. Jarak &amp; Waktu Tempuh ke Sekolah
    <ol type="a">
        <li>Jarak dari rumah ke sekolah :{{ $form->jarak }} Km</li>
        <li>Waktu tempuh ke sekolah : {{ $form->waktu }}  Menit</li>
    </ol>
  </p>
  <p>
    3. Keadaan Keluarga 
    <ol type="a">
      <li>Calon siswa adalah anak ke {{ $form->anak_ke }} dari {{ $form->jumlah_saudara }} bersaudara</li>
      <p>
        {{ $form->saudara_kandung }}
      </p>

      <li>Anggota keluarga lain di rumah : Ada / Tidak Ada *</li>
      <p>
        {{ $form->daftar_keluarga }}
      </p>
    
    </ol>
  </p>
  
  
  <p>
    <strong>F. RIWAYAT PENDIDIKAN SEBELUMNYA</strong>
  </p>
  <p>
    <ol type="a">
      <li>SD : {{ $form->nama_sd }}</li>
      <li>Alamat  :{{ $form->alamat_sd }}</li>
    </ol>
    
  </p> 
  
  <p align="right">
    Depok, ...........................................
  </p>
  <p align="right">
    Orangtua/Wali Calon Siswa
  </p>
  <p align="right">
    tanda tangan dan nama jelas
  </p>
  

</body>
</html>
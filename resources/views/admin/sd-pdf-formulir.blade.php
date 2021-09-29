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
    td,th {
    border: 1px solid #000;
    padding: 5px;
    }
    tr td:last-child {
    width: 1%;
    }
    table {
    border-collapse: collapse;
    } 
  </style>
</head>
<body>
  <p align="center">
    <strong>FORMULIR PENDAFTARAN PESERTA DIDIK BARU</strong>    
  </p>
  <p align="center">
    <strong>SDI RAMAH ANAK</strong>
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
    <strong>FORMULIR PENDAFTARAN CALON SISWA SDI RAMAH ANAK</strong>
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
    Dengan ini mengajukan permohonan kepada Kepala SD Islam Ramah Anak agar
    dapat menerima anak (kandung/asuh/angkat)* saya sebagai peserta didik di
    SDI Ramah Anak, yaitu:
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
  
  <div style="page-break-before:always">&nbsp;</div>
  <p>
    <strong>F. RIWAYAT PENDIDIKAN SEBELUMNYA</strong>
  </p>
  <p>
    <ol type="a">
      <li>PAUD/PG : {{ $form->nama_paud }}</li>
      <li>Alamat  :{{ $form->alamat_paud }}</li>
      <li>TK      :{{ $form->nama_tk }}</li>
      <li>Alamat  :{{ $form->alamat_tk }}</li>
    </ol>
    
  </p>
  

  <div style="page-break-before:always">&nbsp;</div>
  <p>
    <strong>G. KEGIATAN DENGAN KELUARGA</strong>
  </p>
  <p>
    <ol> 
      <li>Kegiatan yang biasa dilakukan bersama – sama di keluarga</li>
      <p>{{ $form->kegiatan1 }}</p>
      <li>Sarana pendidikan yang tersedia bagi anak – anak di rumah (buku, mainan,media)</li>
      <p>{{ $form->kegiatan2 }}</p>
      <li>Kegiatan liburan yang dilakukan bersama anak</li>
      <p>{{ $form->kegiatan3 }}</p>
      <li>Anggota keluarga yang paling dekat da paling sering bermain dengan anak</li>
      <p>{{ $form->kegiatan4 }}</p>
      <li>Aturan khusus yang berlaku dalam keluarga dan bagaimana merealisasikannya</li>
      <p>{{ $form->kegiatan5 }}</p>
      <li>Yang memutuskan/menentukan sesuatu yang penting berkaita dengan anak</li>
      <p>{{ $form->kegiatan6 }}</p>
      <li>Kesulitan yang biasa dialami dalam mengasuh anak dan bagaimana cara menanganinya</li>
      <p>{{ $form->kegiatan7 }}</p>
    </ol>
  </p>
  
  
  <div style="page-break-before:always">&nbsp;</div>
  <p>
    <strong>H. TUMBUH KEMBANG ANAK</strong>
  </p>
  <ol type="1">
    <li>
      Keadaan saat dalam kandungan : {{ $form->tumbuh1 }}
      <ol type="a">
        <li>Pemeriksaan : {{ $form->tumbuh1a }}</li>
        
      </ol>
    </li>
    <li> Keadaan saat lahir    
      <ol type="a">
        <li>Proses kelahiran :{{ $form->tumbuh2a }}</li>
        <li>Berat Badan : {{ $form->tumbuh2a1 }} Kg</li>
        <li>Panjang Badan :{{ $form->tumbuh2a2 }} cm </li>
        <li>Tempat dan tenaga medis yang menolong persalinan : </li>
        <p>{{ $form->tumbuh2b }}</p>
        <li>Masalah dan penanganannya                         :</li>
        <p>{{ $form->tumbuh2c }}</p>
      </ol>
    </li>
    <li>
      Perkembangan fisik anak, masalah yang ada dan solusinya selama ini 
    </li>
    <p>{{ $form->tumbuh3 }}</p>
    <li>
      Pola makan dan minum anak mulai dari bayi hingga sekarang
    </li>
    <p>{{ $form->tumbuh4 }}</p>
    <li>
      Pola tidur anak, masalah yang ada dan solusinya selama ini
    </li>
    <p>{{ $form->tumbuh5 }}</p>
    <li>
      Pola BAB dan BAK anak, masalah yang ada dan solusinya selama ini
    </li>
    <p>{{ $form->tumbuh6 }}</p>
    <li>
      Pola bicara dan bahasa anak, masalah yang ada dan solusinya selama ini
    </li>
    <p>{{ $form->tumbuh7 }}</p>
  </ol>
  <p>
  
  <p align="right">
    Depok, ...........................................
  </p>
  <p align="right">
    Orangtua/Wali Calon Siswa
  </p>
  <p align="right">
    tanda tangan dan nama jelas
  </p>
  
  <div style="page-break-before:always">&nbsp;</div>

  <p align="center">
    <strong>INSTRUMEN IDENTIFIKASI KARAKTERISTIK INDIVIDU</strong>
  </p>
  <p align="center">
    <strong>PESERTA DIDIK SD ISLAM RAMAH ANAK TP 2022/2023</strong>
  </p>


  <p align="center">
    Isilah instrumen ini dengan sebenarnya. Data instrumen ini dibutuhkan sebagai pertimbangan untuk memberikan layanan pendidikan yang optimal sesuai dengan karakteristik calon siswa.
  </p>
  <p>
    No. Pendaftaran : {{ $form->formulirID() }}
  </p>
  <p>
    Nama Lengkap : {{ $form->nama_lengkap }}
  </p>
  <table border="1px">
    <thead>
      <tr>
        <th style="width:5%;">No</th>
        <th style="width:75%;"><strong>ASPEK YANG DIAMATI</strong></th>
        <th style="width:15%;">Jawaban</th>
      </tr>
    </thead>
    <tbody>        
        <tr>
          <td colspan="3">
            <h4 class="font-weight-medium">Aspek Penglihatan</h4>
          </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Selalu mendekat pada benda/objek yang ingin dilihat </td>
            <td>{{ $form->quitioner->quis1 }}</td>
        </tr>       
        <tr>
            <td>2</td>
            <td>Sering salah menyapa/memanggil teman/guru </td>
            <td>{{ $form->quitioner->quis2 }}</td>            
        </tr>                         
        <tr>
            <td>3</td>
            <td>Kesulitan membaca buku dalam jarak standar (30 cm)</td>
            <td>{{ $form->quitioner->quis3 }}</td>               
        </tr>
        <tr>
          <td>4</td>
          <td>Kesulitan mengambil benda kecil di dekatnya </td>
          <td>{{ $form->quitioner->quis4 }}</td>              
        </tr>
        <tr>
            <td>5</td>
            <td>Tidak dapat menulis mengikuti garis lurus  </td>
            <td>{{ $form->quitioner->quis5 }}</td>              
        </tr>
        <tr>
            <td>6</td>
            <td>Sering menggunakan perabaan waktu berjalan  </td>
            <td>{{ $form->quitioner->quis6 }}</td>              
        </tr>
        <tr>
            <td>7</td>
            <td>Sering tersandung saat berjalan  </td>
            <td>{{ $form->quitioner->quis7 }}</td>              
        </tr>
        <tr>
            <td>8</td>
            <td>Sering terkejut bila ada benda mendekat </td>
            <td>{{ $form->quitioner->quis8 }}</td>              
        </tr>
        <tr>
            <td>9</td>
            <td>Gerakan kepala yang tidak wajar saat membaca</td>
            <td>{{ $form->quitioner->quis9 }}</td>              
        </tr>
        <tr>
            <td>10</td>
            <td>Selalu menghindari cahaya  </td>
            <td>{{ $form->quitioner->quis10 }}</td>              
        </tr>
        <tr>
            <td>11</td>
            <td>Kurang suka pada kegiatan visual (misal: petak umpet, membaca huruf cetak) </td>
            <td>{{ $form->quitioner->quis11 }}</td>              
        </tr>        
        <tr>
            <td>12</td>
            <td>Salah satu atau kedua bagian bola mata yang hitam bersisik </td>
            <td>{{ $form->quitioner->quis12 }}</td>                
        </tr>
        <tr>
            <td>13</td>
            <td>Salah satu atau kedua bagian bola mata yang hitam bewarna keruh  </td>
            <td>{{ $form->quitioner->quis13 }}</td>                
        </tr>
        <tr>
            <td>14</td>
            <td>Salah satu atau kedua bagian bola mata yang hitam kering  </td>
            <td>{{ $form->quitioner->quis14 }}</td>                 
        </tr>
        <tr>
            <td>15</td>
            <td>Mata bergoyang terus </td>
            <td>{{ $form->quitioner->quis15 }}</td>               
        </tr>
        <tr>
            <td>16</td>
            <td>Matanya selalu berair dan/atau mengeluarkan kotoran</td>
            <td>{{ $form->quitioner->quis16 }}</td>                  
        </tr>
        <tr>
            <td>17</td>
            <td>Bentuk salah satu atau kedua bola mata yang tidak wajar </td>
            <td>{{ $form->quitioner->quis17 }}</td>              
        </tr>
        <tr>
            <td>18</td>
            <td>Tidak memiliki bola mata </td>
            <td>{{ $form->quitioner->quis18 }}</td>                  
        </tr>
        <!-- aspek pendenganran-->
        <tr>
          <td colspan="3">
            <h4 class="font-weight-medium">Aspek Pendengaran</h4>
          </td>
        </tr>
        <tr>
            <td>19</td>
            <td>Sering memiringkan kepala atau mendekatkan telinga saat mendengarkan  </td>
            <td>{{ $form->quitioner->quis19 }}</td>                  
        </tr>
        <tr>
            <td>20</td>
            <td>Bereaksi ketika merasakan  getaran  </td>
            <td>{{ $form->quitioner->quis20 }}</td>                  
        </tr>
        <tr>
            <td>21</td>
            <td>Kurang merespon terhadap bunyi/suara di dekatnya  </td>
            <td>{{ $form->quitioner->quis21 }}</td>                  
        </tr>
        <tr>
            <td>22</td>
            <td>Kurang merespon terhadap suara teman atau guru yang ditujukan kepadanya </td>
            <td>{{ $form->quitioner->quis22 }}</td>                  
        </tr>
        <tr>
            <td>23</td>
            <td>Selalu meminta mengulang kalimat dari lawan bicaranya dengan mengatakan misalnya: “Hah?”, “Apa?”</td>
            <td>{{ $form->quitioner->quis23 }}</td>                  
        </tr>
        <tr>
            <td>24</td>
            <td>Sering melamun atau mengasingkan diri</td>
            <td>{{ $form->quitioner->quis24 }}</td>                  
        </tr>
        <tr>
            <td>25</td>
            <td>Kurang tertarik dengan kegiatan/permainan auditif</td>
            <td>{{ $form->quitioner->quis25 }}</td>                  
        </tr>
        <tr>
            <td>26</td>
            <td>Berbicara terputus-putus/tidak lancar</td>
            <td>{{ $form->quitioner->quis26 }}</td>                  
        </tr>
        <tr>
            <td>27</td>
            <td>Sering menggunakan isyarat dalam berkomunikasi  </td>
            <td>{{ $form->quitioner->quis27 }}</td>                  
        </tr>
        <tr>
            <td>28</td>
            <td>Memperhatikan gerak mulut lawan bicara </td>
            <td>{{ $form->quitioner->quis28 }}</td>                  
        </tr>
        <tr>
            <td>29</td>
            <td>Intonasi bicara yang datar/tidak wajar </td>
            <td>{{ $form->quitioner->quis29 }}</td>                  
        </tr>
        <tr>
            <td>30</td>
            <td>Susunan kalimat yang tidak terstruktur </td>
            <td>{{ $form->quitioner->quis30 }}</td>                  
        </tr>
        <tr>
            <td>31</td>
            <td>Telinga selalu bernanah/mengeluarkan kotoran </td>
            <td>{{ $form->quitioner->quis31 }}</td>                  
        </tr>
        <tr>
            <td>32</td>
            <td>Tidak memiliki daun telinga </td>
            <td>{{ $form->quitioner->quis32 }}</td> 
                
        </tr>
        <tr>
          <td colspan="3">
            <h4 class="font-weight-medium">Aspek Intelektual</h4>
          </td>
        </tr>
        <tr>
            <td>33</td>
            <td>Anak sulit mengungkapkan gagasan secara runtut</td>
            <td>{{ $form->quitioner->quis33 }}</td>                  
        </tr>
        <tr>
            <td>34</td>
            <td>Kurang memiliki inisiatif </td>
            <td>{{ $form->quitioner->quis34 }}</td>                  
        </tr>
        <tr>
            <td>35</td>
            <td>Sering menyendiri, pasif, dan masa bodoh </td>
            <td>{{ $form->quitioner->quis35 }}</td>
                
        </tr>
        <tr>
            <td>36</td>
            <td>Sulit berkomunikasi dan interaksi</td>
            <td>{{ $form->quitioner->quis36 }}</td>                  
        </tr>
        <tr>
            <td>37</td>
            <td>Mengalami kesulitan untuk beradaptasi dengan lingkungan yang baru</td>
            <td>{{ $form->quitioner->quis37 }}</td>                  
        </tr>
        <tr>
            <td>38</td>
            <td>Kurang mampu untuk mengurus diri sendiri  </td>
            <td>{{ $form->quitioner->quis38 }}</td>                  
        </tr>
        <tr>
            <td>39</td>
            <td>Sering tergantung pada bantuan orang lain</td>
            <td>{{ $form->quitioner->quis39 }}</td>                  
        </tr>
        <tr>
            <td>40</td>
            <td>Sulit mengingat</td>
            <td>{{ $form->quitioner->quis40 }}</td>                  
        </tr>
        <tr>
            <td>41</td>
            <td>Mempunyai ciri fisik yang khas yaitu: mata sipit, lidah pendek, jari tangan/kaki pendek (Down syndrome)</td>
            <td>{{ $form->quitioner->quis41 }}</td>                  
        </tr>
        <tr>
            <td>42</td>
            <td>Ukuran kepala yang lebih besar (tidak wajar) dibanding badannya (Hydrocepalus)</td>
            <td>{{ $form->quitioner->quis42 }}</td>                  
        </tr>
        <tr>
            <td>43</td>
            <td>Ukuran kepala yang lebih kecil (tidak wajar) dibanding badannya (Microcepalus)</td>
            <td>{{ $form->quitioner->quis43 }}</td>                  
        </tr>
        <tr>
          <td colspan="3">
            <h4 class="font-weight-medium">Aspek Motorik</h4>
          </td>
        </tr>
        <tr>
            <td>44</td>
            <td>Jari-jari tangan kaku dan tidak dapat menggenggam</td>
            <td>{{ $form->quitioner->quis44 }}</td>                  
        </tr>
        <tr>
            <td>45</td>
            <td>Terdapat bagian anggota gerak yang tidak lengkap/tidak sempurna/lebih kecil dari biasanya yang berpengaruh pada fungsi gerak</td>
            <td>{{ $form->quitioner->quis45 }}</td>                 
        </tr>
        <tr>
            <td>46</td>
            <td>Kesulitan dalam melakukan gerakan, kaku, dan tidak terkendali</td>
            <td>{{ $form->quitioner->quis46 }}</td>                  
        </tr>
        <tr>
            <td>47</td>
            <td>Melakukan suatu gerakan yang terus menerus</td>
            <td>{{ $form->quitioner->quis47 }}</td>                  
        </tr>
        <tr>
          <td colspan="3">
            <h4 class="font-weight-medium">Aspek Sosial</h4>
          </td>
        </tr>
        <tr>
            <td>48</td>
            <td>Temperamental/mudah marah</td>
            <td>{{ $form->quitioner->quis48 }}</td> 
                
        </tr>
        <tr>
            <td>49</td>
            <td>Suka melawan/menentang, sulit mengikuti aturan</td>
            <td>{{ $form->quitioner->quis49 }}</td> 
                
        </tr>
        <tr>
            <td>50</td>
            <td>Sering melakukan tindakan agresif (kepada orang lain atau dirinya sendiri)</td>
            <td>{{ $form->quitioner->quis50 }}</td>                
        </tr>
        <tr>
            <td>51</td>
            <td>Sering membuat suara atau gerakan yang mengganggu orang di sekitarnya</td>
            <td>{{ $form->quitioner->quis51 }}</td>                
        </tr>
        <tr>
            <td>52</td>
            <td>Sering bertindak melanggar norma sosial/ norma agama/ norma susila</td>
            <td>{{ $form->quitioner->quis52 }}</td>                 
        </tr>
        <tr>
          <td colspan="3">
            <h4 class="font-weight-medium">Aspek Sikap dan Prilaku</h4>
          </td>
        </tr>
        <tr>
            <td>53</td>
            <td>Tidak ada/sedikit sekali kontak mata dengan orang lain</td>
            <td>{{ $form->quitioner->quis53 }}</td>                
        </tr>
        <tr>
            <td>54</td>
            <td>Tidak menunjukkan perbedaan ekspresi wajah secara jelas </td>
            <td>{{ $form->quitioner->quis54 }}</td>                 
        </tr>
        <tr>
            <td>55</td>
            <td>Sering menunjukkan perilaku yang meledak-ledak tanpa alasan yang jelas</td>
            <td>{{ $form->quitioner->quis55 }}</td>
        </tr>
        <tr>
            <td>56</td>
            <td>Menunjukkan perilaku yang tidak wajar</td>
            <td>{{ $form->quitioner->quis56 }}</td>                 
        </tr>
        <tr>
            <td>57</td>
            <td>Sulit untuk diajak berkomunikasi baik secara lisan maupun isyarat</td>
            <td>{{ $form->quitioner->quis57 }}</td>                 
        </tr>
        <tr>
            <td>58</td>
            <td>Cenderung menyendiri </td>
            <td>{{ $form->quitioner->quis58 }}</td>                 
        </tr>
        <tr>
            <td>59</td>
            <td>Tidak peduli pada situasi di sekelilingnya</td>
            <td>{{ $form->quitioner->quis59 }}</td>                 
        </tr>
        <tr>
            <td>60</td>
            <td>Sangat sensitif terhadap sentuhan, suara atau cahaya</td>
            <td>{{ $form->quitioner->quis60 }}</td>                 
        </tr>
        <tr>
            <td>61</td>
            <td>Sering gelisah, mudah panik</td>
            <td>{{ $form->quitioner->quis61 }}</td>                 
        </tr>
        <tr>
            <td>62</td>
            <td>Mempunyai kesulitan untuk duduk tenang</td>
            <td>{{ $form->quitioner->quis62 }}</td>                 
        </tr>
        <tr>
            <td>63</td>
            <td>Mudah dikacaukan oleh rangsangan lain</td>
            <td>{{ $form->quitioner->quis63 }}</td>                 
        </tr>
        <tr>
            <td>64</td>
            <td>Tidak sabar menunggu giliran ketika bermain atau dalam situasi kelompok</td>
            <td>{{ $form->quitioner->quis64 }}</td>                 
        </tr>
        <tr>
            <td>65</td>
            <td>Sering menjawab pertanyaan sebelum pertanyaan lengkap diberikan</td>
            <td>{{ $form->quitioner->quis65 }}</td>                 
        </tr>
        <tr>
            <td>66</td>
            <td>Sulit mengikuti instruksi atau perintah orang lain</td>
            <td>{{ $form->quitioner->quis66 }}</td>                 
        </tr>
        <tr>
            <td>67</td>
            <td>Sulit mempertahankan perhatian dalam menyelesaikan tugas atau permainan</td>
            <td>{{ $form->quitioner->quis67 }}</td>                
        </tr>
        <tr>
            <td>68</td>
            <td>Sering berganti aktivitas, padahal aktivitas sebelumnya belum sempurna</td>
            <td>{{ $form->quitioner->quis68 }}</td>
        </tr>
        <tr>
            <td>69</td>
            <td>Tidak bisa bermain dengan tenang</td>
            <td>{{ $form->quitioner->quis69 }}</td>
        </tr>
        <tr>
            <td>70</td>
            <td>Sering berbicara secara berlebihan</td>
            <td>{{ $form->quitioner->quis70 }}</td> 
        </tr>
        <tr>
            <td>71</td>
            <td>Sering menyela (mengganggu) atau memaksakan kehendak kepada orang lain</td>
            <td>{{ $form->quitioner->quis71 }}</td>
        </tr>
        <tr>
            <td>72</td>
            <td>Sering tidak memperhatikan apa yang dikatakan orang lain kepadanya</td>
            <td>{{ $form->quitioner->quis72 }}</td>                 
        </tr>
        <tr>
            <td>73</td>
            <td>Sering kehilangan sesuatu yang penting baik di sekolah atau di rumah</td>
            <td>{{ $form->quitioner->quis73 }}</td> 
        </tr>
        <tr>
            <td>74</td>
            <td>Sering melakukan aktivitas-aktivitas fisik yang berpotensi bahaya</td>
            <td>{{ $form->quitioner->quis74 }}</td> 
        </tr>
        <tr>
          <td colspan="3"> 
            <h4 class="font-weight-medium">Aspek Bakat Istimewa</h4>
          </td>
        </tr>
        <tr>
            <td>75</td>
            <td>Bisa membaca lebih awal dari pada teman sebayanya</td>
            <td>{{ $form->quitioner->quis75 }}</td> 
                
        </tr>
        <tr>
            <td>76</td>
            <td>Kemampuan membacanya melebihi teman sebayanya</td>
            <td>{{ $form->quitioner->quis76 }}</td>                 
        </tr>
        <tr>
            <td>77</td>
            <td>Memiliki perbendaharaan kata yang lebih banyak dari pada teman sebayanya</td>
            <td>{{ $form->quitioner->quis77 }}</td>                 
        </tr>
        <tr>
            <td>78</td>
            <td>Mempunyai rasa ingin tahu dan minat yang kuat terhadap berbagai hal</td>
            <td>{{ $form->quitioner->quis78 }}</td>                 
        </tr>
        <tr>
            <td>79</td>
            <td>Mempunyai inisiatif dan mandiri</td>
            <td>{{ $form->quitioner->quis79 }}</td>                 
        </tr>
        <tr>
            <td>80</td>
            <td>Menunjukkan keaslian (orisinalitas) dalam berpendapat/berkreasi</td>
            <td>{{ $form->quitioner->quis80 }}</td>                 
        </tr>
        <tr>
            <td>81</td>
            <td>Dapat memberikan banyak gagasan</td>
            <td>{{ $form->quitioner->quis81 }}</td>                 
        </tr>
        <tr>
            <td>82</td>
            <td>Luwes dalam berpikir </td>
            <td>{{ $form->quitioner->quis82 }}</td>                 
        </tr>
        <tr>
            <td>83</td>
            <td>Cepat tanggap terhadap situasi</td>
            <td>{{ $form->quitioner->quis83 }}</td>                 
        </tr>
        <tr>
            <td>84</td>
            <td>Mempunyai pengamatan yang tajam </td>
            <td>{{ $form->quitioner->quis84 }}</td>                 
        </tr>
        <tr>
            <td>85</td>
            <td>Dapat Berkonsentrasi dalam jangka waktu yang panjang terutama dalam tugas atau bidang yang diminati</td>
            <td>{{ $form->quitioner->quis85 }}</td>                 
        </tr>
        <tr>
            <td>86</td>
            <td>Berpikir kritis, juga terhadap diri sendiri </td>
            <td>{{ $form->quitioner->quis86 }}</td>                 
        </tr>
        <tr>
            <td>87</td>
            <td>Senang mencoba hal-hal baru</td>
            <td>{{ $form->quitioner->quis87 }}</td>                 
        </tr>
        <tr>
            <td>88</td>
            <td>Mempunyai daya abstraksi, konseptualisasi dan sintesis yang tinggi </td>
            <td>{{ $form->quitioner->quis88 }}</td>                 
        </tr>
        <tr>
            <td>89</td>
            <td>Senang terhadap kegiatan intelektual dan pemecahan masalah</td>
            <td>{{ $form->quitioner->quis89 }}</td>                 
        </tr>
        <tr>
            <td>90</td>
            <td>Cepat menangkap hubungan sebab akibat </td>
            <td>{{ $form->quitioner->quis90 }}</td>
        </tr>
        <tr>
            <td>91</td>
            <td>Berperilaku terarah terhadap tujuan</td>
            <td>{{ $form->quitioner->quis91 }}</td>                 
        </tr>
        <tr>
            <td>92</td>
            <td>Mempunyai daya imajinasi yang kuat </td>
            <td>{{ $form->quitioner->quis92 }}</td> 
        </tr>
        <tr>
            <td>93</td>
            <td>Mempunyai banyak kegemaran/hobi</td>
            <td>{{ $form->quitioner->quis93 }}</td>
        </tr>
        <tr>
            <td>94</td>
            <td>Mempunyai daya ingat yang kuat </td>
            <td>{{ $form->quitioner->quis94 }}</td>
        </tr>
        <tr>
            <td>95</td>
            <td>Tidak cepat puas dengan prestasinya </td>
            <td>{{ $form->quitioner->quis95 }}</td> 
        </tr>
        <tr>
            <td>96</td>
            <td>Menginginkan kebebasan dalam gerakan dan tindakan </td>
            <td>{{ $form->quitioner->quis96 }}</td>
        </tr>
    </tbody>
  </table>
</body>
</html>
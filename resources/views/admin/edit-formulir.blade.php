@extends('admin.main')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Data Formulir</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.home') }}">Beranda</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Lihat Formulir</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="title-part-padding">
                    <h4 class="card-header mb-0 fw-bolder">Formulir PPDB {{ $form->unit->name }}I Ramah Anak 2022-2023</h4>
                    @if(session('status'))
                        <div class="alert alert-success text-center">
                        <h6>{{ session('status') }}</h6>
                        </div>
                    @endif
                </div>
                <form class="form-horizontal" action="{{ route('admin.update-formulir',$form->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <!-- Step 1 -->
                    <div class="card-body">
                        <h4 class="card-title mb-0">Data calon siswa</h4>
                    </div>
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3" >
                                    <label for="nama_lengkap">Nama Lengkap (Sesuai akta kelahiran) :</label>
                                    <input type="text" class="form-control required" id="nama_lengkap" name="nama_lengkap" value="{{ $form->nama_lengkap }}">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_panggilan">Nama Panggilan :</label>
                                    <input type="text" class="form-control required" id="nama_panggilan" name="nama_panggilan" value="{{ $form->nama_panggilan }}">
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                                    <div class="c-inputs-stacked">
                                        <div class="form-check">
                                            <input type="radio" id="customRadio8" name="jenis_kelamin" value="Laki-laki" class="form-check-input required" {{ $form->jenis_kelamin =="Laki-laki" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="customRadio9" name="jenis_kelamin" value="Perempuan" class="form-check-input required" {{ $form->jenis_kelamin =="Perempuan" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="nik">Nomor Induk Kependudukan (NIK):</label>
                                    <input type="number" class="form-control required" id="nik" name="nik" value="{{ $form->nik }}" > 
                                    @error('nik')<div class="text-danger"> masukan 16 digit NIK</div>@enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nisn">Nomor Induk Siswa Nasional (NISN):
                                        <p class="text-muted"> Jika belum memiliki NISN masuka " 0000000000 "</p>
                                    </label>
                                    <input type="number" class="form-control required"  id="nisn" name="nisn" value="{{ $form->nisn }}">
                                     @error('nisn')<div class="text-danger"> masukan 10 digit NISN</div>@enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Tempat lahir :</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $form->tempat_lahir }}">
                                    @error('tempat_lahir')<div class="text-danger"> {{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3">
                                    <label for="date1">Tanggal lahir:</label>
                                    <input type="date" class="date form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $form->tanggal_lahir }}" >
                                    @error('tanggal_lahir')<div class="text-danger"> {{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="agama">Agama :</label>
                                    <input type="text" class="form-control required" id="agama" name="agama" value="{{ $form->agama }}">
                                </div>
                                <div class="mb-3">
                                    <label for="hobi">Hobi :</label>
                                    <input type="text" class="form-control required" id="hobi" name="hobi" value="{{ $form->hobi }}">
                                </div>
                                <div class="mb-3">
                                    <label for="cita-cita">Cita-cita :</label>
                                    <input type="text" class="form-control required" id="cita2" name="cita2" value="{{ $form->cita2 }}"> 
                                </div>
                                <div class="mb-3">
                                    <label for="">Alamat :
                                        <p class="text-muted"> Alamat lengkap beserta RT,RW kelurahan, kecamatan</p>
                                        <p class="text-muted"> Contoh: Jl. Paraji no.63 Rt 04 Rw 05 Kel.Kalibaru Kec. Cilodong, Depok</p>
                                    </label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $form->alamat }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Tempat tinggal :</label>
                                    <div class="c-inputs-stacked">
                                        <div class="form-check">
                                            <input type="radio" id="customRadio8" name="tempat_tinggal" value="Bersama orang tua" class="form-check-input required" {{ $form->tempat_tinggal =="Bersama orang tua" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="">Bersama Orang tua</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="customRadio9" name="tempat_tinggal" value="Bersama wali" class="form-check-input required"{{ $form->tempat_tinggal =="Bersama wali" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="">Bersama Wali</label>
                                        </div>
                                    </div>
                                    @error('tempat_tinggal')
                                    <div class="text-danger">
                                        Pilih salah satu opsi
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Berkebutuhan Khusus :</label>
                                    <div class="c-inputs-stacked">
                                        <div class="form-check">
                                            <input type="radio" id="customRadio6" name="berkebutuhan_khusus" value="ya" class="form-check-input required"{{ $form->berkebutuhan_khusus =="ya" ? 'checked' : '' }} >
                                            <label class="form-check-label" for="customRadio6" >Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="customRadio7" name="berkebutuhan_khusus" value="tidak" class="form-check-input required" {{ $form->berkebutuhan_khusus =="tidak" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="customRadio7">Tidak</label>
                                        </div>
                                    </div>
                                    @error('berkebutuhan_khusus')
                                    <div class="text-danger">
                                        Pilih salah satu opsi
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Jenis kebutuhan khusus (Jika ya) :</label>
                                    <input type="text" class="form-control" id="jenis_berkebutuhan_khusus" name="jenis_berkebutuhan_khusus" value="{{ $form->jenis_berkebutuhan_khusus }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Saran transportasi ke sekolah :</label>
                                    <div class="c-inputs-stacked">
                                        <div class="form-check">
                                            <input type="radio" id="customRadio10" name="transport" value="Sepeda" class="form-check-input required" {{ $form->transport== "Sepeda" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="">Sepeda</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="customRadio11" name="transport" value="Sepeda Motor" class="form-check-input required" {{ $form->transport== "Sepeda Motor" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="">Sepeda Motor</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="customRadio12" name="transport" value="Mobil Pribadi" class="form-check-input required" {{ $form->transport == "Mobil Pribadi" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="">Mobil Pribadi</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="customRadio13" name="transport" value="Angkutan umum" class="form-check-input required" {{ $form->transport== "Angkutan umum" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="">Angkutan umum</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="customRadio14" name="transport" value="Ojek" class="form-check-input required" {{ $form->transport== "Ojek" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="">Ojek</label>
                                        </div>
                                    </div>
                                    @error('transpport')
                                    <div class="text-danger">
                                        Pilih salah satu opsi
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- Step 2 -->
                    <div class="card-body">
                        <h4 class="card-title mb-0">Data Ayah Kandung</h4>
                    </div>
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Nama lengkap (sesuai KTP/KK) :</label>
                                    <input type="text" class="form-control required" id="nama_ayah" name="nama_ayah" value="{{ $form->nama_ayah }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Tempat lahir :</label>
                                    <input type="text" class="form-control required" id="tempat_lahir_ayah" name="tempat_lahir_ayah" value="{{ $form->tempat_lahir_ayah }}">
                                </div>
                                <div class="mb-3">
                                    <label for="date1">Tanggal lahir:</label>
                                    <input type="date" class="date form-control required" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" value="{{ $form->tanggal_lahir_ayah }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Nomor Handphone:</label>
                                    <input type="number" class="form-control required" id="no_handphone_ayah" name="no_handphone_ayah" value="{{ $form->no_handphone_ayah }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Pendidikan Terakhir :</label>
                                    <?php  $edu = array("SD"=>"SD","SMP"=>"SMP","SMA"=>"SMA","D3"=>"D3","S1"=>"S1","S2"=>"S2","S3"=>"S3"); ?>
                                    <select name="pendidikan_terakhir_ayah" class="form-control required">
                                        @foreach ($edu as $ed =>$name)
                                            <option value="{{ $ed }}"
                                            @if ($ed==$form->pendidikan_terakhir_ayah )
                                                selected
                                            @endif
                                            >
                                                {{ $name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('pendidikan_terakhir_ayah')
                                    <div class="text-danger">
                                        Pilih salah satu opsi
                                    </div>
                                    @enderror                                         
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Pekerjaan  :</label>
                                    <input type="text" class="form-control required" id="pekerjaan_ayah" name="pekerjaan_ayah" value="{{ $form->pekerjaan_ayah }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Alamat Tempat Kerja :</label>
                                    <input type="text" class="form-control required" id="alamat_kerja_ayah" name="alamat_kerja_ayah" value="{{ $form->alamat_kerja_ayah }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Penghasilan :</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input required" id="penghasilan_ayah" name="penghasilan_ayah" value="0-500rb" {{ $form->penghasilan_ayah=="0-500rb" ? 'checked' : '' }}>
                                        <label class="fork-check-label" for="">Rp.0-Rp.500.000 </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input required" id="penghasilan_ayah" name="penghasilan_ayah" value="500rb-2jt" {{ $form->penghasilan_ayah=="500rb-2jt" ? 'checked' : '' }}>
                                        <label class="fork-check-label" for="">Rp.500.000-Rp.2.000.000 </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input required" id="penghasilan_ayah" name="penghasilan_ayah" value="2jt-5jt" {{ $form->penghasilan_ayah=="2jt-5jt" ? 'checked' : '' }}>
                                        <label class="form-check-label" for="">Rp.2.000.000-Rp.5.000.000 </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input required" id="penghasilan_ayah" name="penghasilan_ayah" value="5jt-20jt" {{ $form->penghasilan_ayah=="5jt-20jt" ? 'checked' : '' }} >
                                        <label class="form-check-label" for="">Rp.5.000.000-Rp.20.000.000 </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input required" id="penghasilan_ayah" name="penghasilan_ayah" value=">20jt" {{ $form->penghasilan_ayah==">20jt" ? 'checked' : '' }} >
                                        <label class="form-check-label" for=""> lebih dari Rp.20.000.000</label>
                                    
                                    </div>
                                    @error('penghasilan_ayah')
                                        <div class="text-danger">
                                            Pilih salah satu opsi
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="card-body">
                        <h4 class="card-title mb-0">Data Ibu Kandung</h4>
                    </div>
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Nama lengkap (sesuai KTP/KK) :</label>
                                    <input type="text" class="form-control required" id="nama_ibu" name="nama_ibu" value="{{ $form->nama_ibu }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Tempat lahir :</label>
                                    <input type="text" class="form-control required" id="tempat_lahir_ibu" name="tempat_lahir_ibu" value="{{ $form->tempat_lahir_ibu }}">
                                </div>
                                <div class="mb-3">
                                    <label for="date1">Tanggal lahir:</label>
                                    <input type="date" class="date form-control required" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" value="{{ $form->tanggal_lahir_ibu }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Nomor Handphone:</label>
                                    <input type="number" class="form-control required" id="no_handphone_ibu" name="no_handphone_ibu" value="{{ $form->no_handphone_ibu }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Pendidikan Terakhir :</label>
                                    <?php  $edu = array("SD"=>"SD","SMP"=>"SMP","SMA"=>"SMA","D3"=>"D3","S1"=>"S1","S2"=>"S2","S3"=>"S3"); ?>
                                    <select name="pendidikan_terakhir_ibu" class="form-control">
                                        @foreach ($edu as $ed =>$name)
                                            <option value="{{ $ed }}"
                                            @if ($ed == $form->pendidikan_terakhir_ibu )
                                                selected
                                            @endif
                                            >
                                                {{ $name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('pendidikan_terakhir_ibu')
                                    <div class="text-danger">
                                        Pilih salah satu opsi
                                    </div>
                                    @enderror                                         
                                </div>                                
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Pekerjaan  :</label>
                                    <input type="text" class="form-control required" id="pekerjaan_ibu" name="pekerjaan_ibu" value="{{ $form->pekerjaan_ibu }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Alamat Tempat Kerja :</label>
                                    <input type="text" class="form-control required" id="alamat_kerja_ibu" name="alamat_kerja_ibu" value="{{ $form->alamat_kerja_ibu }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Penghasilan :</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input required" id="penghasilan_ibu" name="penghasilan_ibu" value="0-500rb" {{ $form->penghasilan_ibu=="0-500rb" ? 'checked' : '' }}>
                                        <label class="fork-check-label" for="">Rp.0-Rp.500.000 </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input required" id="penghasilan_ibu" name="penghasilan_ibu" value="500rb-2jt" {{ $form->penghasilan_ibu=="500rb-2jt" ? 'checked' : '' }}>
                                        <label class="fork-check-label" for="">Rp.500.000-Rp.2.000.000 </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input required" id="penghasilan_ibu" name="penghasilan_ibu" value="2jt-5jt" {{ $form->penghasilan_ibu=="2jt-5jt" ? 'checked' : '' }}>
                                        <label class="form-check-label" for="">Rp.2.000.000-Rp.5.000.000 </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input required" id="penghasilan_ibu" name="penghasilan_ibu" value="5jt-20jt" {{ $form->penghasilan_ibu=="5jt-20jt" ? 'checked' : '' }} >
                                        <label class="form-check-label" for="">Rp.5.000.000-Rp.20.000.000 </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input required" id="penghasilan_ibu" name="penghasilan_ibu" value=">20jt" {{ $form->penghasilan_ibu==">20jt" ? 'checked' : '' }} >
                                        <label class="form-check-label" for=""> lebih dari Rp.20.000.000</label>
                                    
                                    </div>
                                </div>
                                @error('penghasilan_ibu')
                                    <div class="text-danger">
                                        Pilih salah satu opsi
                                    </div>
                                @enderror
                            </div>
                        </div>  
                    </div>
                    <!-- Step 4 -->
                    <div class="card-body">
                        <h4 class="card-title mb-0">Data Wali (Jika tinggal bersama wali)</h4>
                    </div>
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Nama lengkap (sesuai KTP/KK) :</label>
                                    <input type="text" class="form-control" id="nama_wali" name="nama_wali" value="{{ $form->nama_wali }}">
                                </div>
                                <div class="mb-3">
                                        <label for="">Tempat lahir :</label>
                                        <input type="text" class="form-control" id="tempat_lahir_wali" name="tempat_lahir_wali" value="{{ $form->tempat_lahir_wali }}">
                                </div>
                                <div class="mb-3">
                                    <label for="date1">Tanggal lahir:</label>
                                    <input type="date" class="date form-control" id="tanggal_lahir_wali" name="tanggal_lahir_wali" value="{{ $form->tanggal_lahir_wali }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Nomor Handphone:</label>
                                    <input type="number" class="form-control" id="no_handphone_wali" name="no_handphone_wali" value="{{ $form->no_handphone_wali }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Pendidikan Terakhir :</label>
                                    <?php  $edu = array("SD"=>"SD","SMP"=>"SMP","SMA"=>"SMA","D3"=>"D3","S1"=>"S1","S2"=>"S2","S3"=>"S3"); ?>
                                    <select name="pendidikan_terakhir_wali" class="form-control">
                                        @foreach ($edu as $ed =>$name)
                                            <option value="{{ $ed }}"
                                            @if ($ed==$form->pendidikan_terakhir_wali)
                                                selected
                                            @endif
                                            >
                                                {{ $name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('pendidikan_terakhir_wali')
                                    <div class="text-danger">
                                        Pilih salah satu opsi
                                    </div>
                                    @enderror                                         
                                </div>
                            </div>      
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Pekerjaan  :</label>
                                    <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" value="{{ $form->pekerjaan_wali }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Alamat Tempat Kerja :</label>
                                    <input type="text" class="form-control" id="alamat_kerja_wali" name="alamat_kerja_wali" value="{{ $form->alamat_kerja_wali }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Penghasilan :</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input reuired" id="penghasilan_wali" name="penghasilan_wali" value="0-500rb" {{ $form->penghasilan_wali=="0-500rb" ? 'checked' : '' }}>
                                        <label class="fork-check-label" for="">Rp.0-Rp.500.000 </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input reuired" id="penghasilan_wali" name="penghasilan_wali" value="500rb-2jt" {{ $form->penghasilan_wali=="500rb-2jt" ? 'checked' : '' }}>
                                        <label class="fork-check-label" for="">Rp.500.000-Rp.2.000.000 </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input " id="penghasilan_wali" name="penghasilan_wali" value="2jt-5jt" {{ $form->penghasilan_wali=="2jt-5jt" ? 'checked' : '' }}>
                                        <label class="form-check-label" for="">Rp.2.000.000-Rp.5.000.000 </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input " id="penghasilan_wali" name="penghasilan_wali" value="5jt-20jt" {{ $form->penghasilan_wali=="5jt-20jt" ? 'checked' : '' }} >
                                        <label class="form-check-label" for="">Rp.5.000.000-Rp.20.000.000 </label>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input " id="penghasilan_wali" name="penghasilan_wali" value=">20jt" {{ $form->penghasilan_wali==">20jt" ? 'checked' : '' }} >
                                        <label class="form-check-label" for=""> lebih dari Rp.20.000.000</label>
                                    
                                    </div>
                                </div>
                                @error('penghasilan_wali')
                                    <div class="text-danger">
                                        Pilih salah satu opsi
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- Step 5 -->
                    <h3></h3>
                    <div class="card-body">
                        <h4 class="card-title mb-0">Data Periodik Calon Siswa</h4>
                    </div>
                    <div class="card-body border-top">
                        <label for="">Keadaan Jasmani </label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Tinggi Badan :</label>
                                    <input type="number" class="form-control required" id="tinggi_badan" name="tinggi_badan" value="{{ $form->tinggi_badan }}">
                                    <label class="text-muted"> Centimeter</label>
                                </div>                                                      
                                <div class="mb-3">
                                    <label for="">Berat Badan :</label>
                                    <input type="number" class="form-control required" id="berat_badan" name="berat_badan" value="{{ $form->berat_badan }}">
                                    <label class="text-muted"> Kilogram</label>
                                </div>                                                      
                                <div class="mb-3">
                                    <label for="">Penyakit khusus :</label>
                                    <input type="text" class="form-control required" id="penyakit_khusus" name="penyakit_khusus" value="{{ $form->penyakit_khusus }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Golongan Darah :</label>
                                    <?php  $goldar = array("A"=>"A","B"=>"B","O"=>"O","AB"=>"AB","tidak tahu"=>"Tidak Tahu"); ?>
                                    <select name="golongan_darah" class="form-control required">
                                        @foreach ($goldar as $gd =>$name)
                                            <option value="{{ $gd }}"
                                            @if ($gd==$form->golongan_darah )
                                                selected
                                            @endif
                                            >
                                                {{ $name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('golongan_darah')
                                    <div class="text-danger">
                                        Pilih salah satu opsi
                                    </div>
                                    @enderror                                        
                                </div>
                                <div class="mb-3">
                                    <label for="">Kelainan Jasmani :</label>
                                    <div class="c-inputs-stacked">
                                        <div class="form-check">
                                            <input type="radio" id="customRadio6" name="kelainan_jasmani" value="ya" class="form-check-input required" {{ $form->kelainan_jasmani=="ya" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="">Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="kelainan_jasmani" name="kelainan_jasmani" value="tidak" class="form-check-input required" {{ $form->kelainan_jasmani=="tidak" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="">Tidak</label>
                                        </div>
                                    </div>
                                    @error('kelainan_jasmani')
                                    <div class="text-danger">
                                        Pilih salah satu opsi
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Jelaskan ( jika Ya) :</label>
                                    <input type="text" class="form-control" id="kelainan_jasmani_ya" name="kelainan_jasmani_ya" value="{{ $form->kelainan_jasmani_ya }}">
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Jarak dari rumah ke sekolah :</label>
                                    <input type="number" class="form-control required" id="jarak" name="jarak" value="{{ $form->jarak }}">
                                    <label class="text-muted"> km</label>
                                </div>
                                <div class="mb-3">
                                    <label for="">Waktu tempuh dari rumah ke sekolah :</label>
                                    <input type="number" class="form-control required" id="waktu" name="waktu" value="{{ $form->waktu }}">
                                    <label class="text-muted"> Menit</label>
                                </div>
                                <div class="mb-3">
                                    <label for="">Anak ke :</label>
                                    <input type="number" class="form-control required" id="anak_ke" name="anak_ke" value="{{ $form->anak_ke }}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Jumlah saudara :</label>
                                    <input type="number" class="form-control required" id="jumlah_saudara" name="jumlah_saudara" value="{{ $form->jumlah_saudara }}">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="">Sebutkan nama kakak/adik kandung (nama,usia, kakak/adik) :
                                        <p class="text-muted">contoh: (Maryam,12 tahun,kakak),(Faris,2 tahun, adik)</p>
                                    </label>
                                    <textarea name="saudara_kandung" id="saudara_kandung" rows="4" class="form-control required" >{{ $form->saudara_kandung }}</textarea>
                                </div> 
                                <div class="mb-3">
                                    <label for="">Sebutkan aggota keluarga lain dirumah (nama,usia, hubunga keluarga) :
                                        <p class="text-muted">contoh: (Siti,56 tahun,nenek),(Budi, 57 tahun, Kakek)</p>
                                    </label>
                                    <textarea name="daftar_keluarga" id="daftar_keluarga" rows="4" class="form-control required">{{ $form->daftar_keluarga }}</textarea>
                                </div> 

                            </div>
                        </div>
                    </div>
                    <!-- Step 6 -->
                    <div class="card-body">
                        <h4 class="card-title mb-0">Data Pendidikan Calon Siswa</h4>
                    </div>
                    <div class="card-body border-top">
                        <div class="row">
                            @if ($form->unit_id==1)
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">PAUD/PG :</label>
                                    <input type="text" class="form-control required" id="nama_paud" name="nama_paud" value="{{ $form->nama_paud }}">
                                </div>                                        
                                <div class="mb-3">
                                    <label for="">Alamat PAUD/PG :</label>
                                    <input type="text" class="form-control required" id="alamat_paud" name="alamat_paud" value="{{ $form->alamat_paud }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">TK :</label>
                                    <input type="text" class="form-control required" id="nama_tk" name="nama_tk" value="{{ $form->nama_tk }}">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="">Alamat TK:</label>
                                    <input type="text" class="form-control required" id="alamat_tk" name="alamat_tk" value="{{ $form->alamat_tk }}">
                                </div>
                            </div>
                                
                            @elseif ($form->unit_id==2)
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">SD :</label>
                                        <input type="text" class="form-control required" id="nama_sd" name="nama_sd" value="{{ $form->nama_sd }}">
                                    </div>                                        
                                    <div class="mb-3">
                                        <label for="">Alamat SD:</label>
                                        <input type="text" class="form-control required" id="alamat_sd" name="alamat_sd" value="{{ $form->alamat_sd }}">
                                    </div>                                  
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- Step 9 -->
                    <div class="card-body">
                        <h4 class="card-title mb-0">Upload Bukti Pembayaran</h4>
                    </div>
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Bank Tujuan :</label>
                                    <div class="col-md-8">
                                        <?php  $daftar_bank = array("mandiri sdi"=>"Mandiri SD Islam Ramah Anak (157-000-4131-323)","mandiri smpi"=>"Mandiri SMP Islam Ramah Anak (157-00-63636303)","BSI-BSM"=>"BSI-BSM Yayasan Khaulah Muadzah ( 7136-4983-92)","Tata usaha"=>"Tata Usaha"); ?>
                                        <select name="bank" class="form-control required">
                                            @foreach ($daftar_bank as $db =>$name)
                                                <option value="{{ $db }}"
                                                @if ($db == $form->bank)
                                                    selected
                                                @endif
                                                >
                                                    {{ $name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('bank')
                                        <div class="text-danger">
                                            Pilih salah satu opsi
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Nomor Rekening : </label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control " id="rekening" name="rekening" value="{{ $form->rekening }}">
                                    </div>
                                </div>
                                
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Kontak yang dapat dihubungi : </label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control " id="kontak" name="kontak" value="{{ $form->kontak }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @php $path = Storage::disk('public')->url('bukti-bayar/'.$form->photo_url); @endphp                                    
                                <label for=""> Bukti pembayaran  :{{ $form->photo_url }} {{ $path }}</label>
                                @if ($form->photo_url == NULL)
                                    <p class="text-muted"> tidak ada bukti pembayaran yang diupload</p>                                        
                                @else
                                    <img src="{{ url('uploads/bukti-bayar/'.$form->photo_url) }}" class="d-block position-relative w-100" alt="{{ $form->id }}" />  
                                                                        
                                @endif

                                <div class="input-group">
                                    <div class="custom-file">
                                        <input class="form-control " type="file" id="photo_url" name="photo_url" aria-describedby="fileHelp" value="{{ $form->photo_url }}">
                                    </div>
                                    {{-- <button class="btn btn-light-info text-info font-weight-medium" type="submit" name="action" value="upload">Upload</button> --}}
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                    @error('image')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>  
                    <div class="card-footer">
                        <div class="d-flex align-items-stretch">
                            <button type="submit" class="btn btn-info mx-5">Simpan</button>
                            <a href="{{ route('admin.list-formulir',$form->unit_id) }}" class="btn btn-primary" >Kembali ke List</a>
                        </div>
                    </div>                      
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('extra-js')
<script>
    //Custom design form example
    $(".tab-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "Submit"
        },
        onFinished: function(event, currentIndex) {
            swal("Form Submitted!", "Terimakasih sudah mendaftar di SI Ramah Anak!");

        }
    });
</script>
    
@endsection
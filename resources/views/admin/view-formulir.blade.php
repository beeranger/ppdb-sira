@extends('user.main')

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
                <form class="form-horizontal">
                    <!-- Step 1 -->
                    <div class="card-body">
                        <h4 class="card-title mb-0">Data calon siswa</h4>
                    </div>
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-md-6">                                
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Nama Lengkap (Sesuai akta kelahiran) :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->nama_lengkap }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Nama Panggilan : </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->nama_panggilan }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Nomor Induk Kependudukan (NIK) </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->nik }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Nomor Induk Siswa Nasional :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->nisn }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Tempat lahir :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->tempat_lahir }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Tanggal lahir:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->tanggal_lahir }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Agama :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->agama }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Hobi :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->hobi }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Cita-cita :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->cita2 }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">                                   
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Alamat  :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->alamat }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Tempat tinggal : </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->tempat_tinggal }} </p>
                                    </div>
                                </div>
                                
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Berkebutuhan Khusus :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->berkebutuhan_khusus }} </p>
                                    </div>
                                </div>
                                
                                <div class="form-group row py-2">
                                    <label class="control-label col-md-4 font-weight-medium"> Jenis kebutuhan khusus (Jika ya) :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->jenis_berkebutuhan_khusus }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Saran transportasi ke sekolah : </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->transport }}</p>
                                    </div>
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
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Nama lengkap (sesuai KTP/KK) :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->nama_ayah }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Tempat lahir :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->tempat_lahir_ayah }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Tanggal lahir: </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->tanggal_lahir_ayah }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">No Handphone :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->no_handphone_ayah }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Pendidikan Terakhir :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->pendidikan_terakhir_ayah }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Pekerjaan  :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->pekerjaan_ayah }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Alamat Tempat Kerja :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->alamat_kerja_ayah }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Penghasilan :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->penghasilan_ayah }} </p>
                                    </div>
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
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Nama lengkap (sesuai KTP/KK) :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->nama_ibu }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Tempat lahir :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->tempat_lahir_ibu }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Tanggal lahir: </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->tanggal_lahir_ibu }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">No Handphone :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->no_handphone_ibu }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Pendidikan Terakhir :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->pendidikan_terakhir_ibu }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Pekerjaan  :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->pekerjaan_ibu }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Alamat Tempat Kerja :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->alamat_kerja_ibu }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Penghasilan :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->penghasilan_ibu }} </p>
                                    </div>
                                </div>
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
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Nama lengkap (sesuai KTP/KK) :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->nama_wali }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Tempat lahir :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->tempat_lahir_wali }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Tanggal lahir: </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->tanggal_lahir_wali }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">No handphone :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->no_handphone_wali }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Pendidikan Terakhir :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->pendidikan_terakhir_wali }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Pekerjaan  :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->pekerjaan_wali }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Alamat Tempat Kerja :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->alamat_kerja_wali }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Penghasilan :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->penghasilan_wali }} </p>
                                    </div>
                                </div>
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
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Tinggi Badan :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->tinggi_badan }} Centimer</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium"> Berat Badan :</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->berat_badan }}  kilogram</p>
                                    </div>
                                </div>               
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Penyakit khusus : </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->penyakit_khusus }}</p>
                                    </div>
                                </div>           
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Golongan Darah : </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->golongan_darah }}</p>
                                    </div>
                                </div>   
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Kelainan Jasmani : </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->kelainan_jasmani }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Jelaskan ( jika Ya) : </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->kelainan_jasmani_ya }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Jarak dari rumah ke sekolah : </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->jarak }} km</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Waktu tempuh dari rumah ke sekolah : </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->waktu }}  menit</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Anak ke : </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static"> {{ $form->anak_ke }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Jumlah saudara : </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->jumlah_saudara }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Nama saudara kandung : </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->saudara_kandung }} </p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Anggota keluarga lain di rumah : </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->daftar_keluarga }} </p>
                                    </div>
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
                                    <div class="form-group row py-3">
                                        <label class="control-label col-md-4 font-weight-medium"> PAUD/PG :</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $form->nama_paud }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row py-3">
                                        <label class="control-label col-md-4 font-weight-medium"> Alamat :</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $form->alamat_paud }}</p>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row py-3">
                                        <label class="control-label col-md-4 font-weight-medium"> TK:</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $form->nama_tk }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row py-3">
                                        <label class="control-label col-md-4 font-weight-medium"> Alamat :</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $form->alamat_tk }}</p>
                                        </div>
                                    </div>          
                                </div>
                                
                            @elseif ($form->unit_id==2)
                                <div class="col-md-6">
                                    <div class="form-group row py-3">
                                        <label class="control-label col-md-4 font-weight-medium"> SD :</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $form->nama_sd }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row py-3">
                                        <label class="control-label col-md-4 font-weight-medium"> Alamat :</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static"> {{ $form->alamat_sd }}</p>
                                        </div>
                                    </div>                                    
                                </div>
                            @endif
                        </div>
                    </div>
                    @if ($form->unit_id==1)
                        <!-- Step 7 -->
                        <div class="card-body">
                            <h4 class="card-title mb-0">Kegiatan Bersama Keluarga</h4>
                        </div>
                        <div class="card-body border-top">
                            <div class="form-group row py-3">
                                <label class="control-label col-md-8 font-weight-medium">Kegiatan yang biasa dilakukan bersama-sama dikeluarga  ?</label>
                                <div class="col-md-12">
                                    <p class="form-control-static"> {{ $form->kegiatan1 }}</p>
                                </div>
                            </div>
                            <div class="form-group row py-3">
                                <label class="control-label col-md-12 font-weight-medium">Sarana pendidikan yang tersedia bagi anak-anak (Seperti buku, mainan, dll.)  ?</label>
                                <div class="col-md-12">
                                    <p class="form-control-static">{{ $form->kegiatan2 }}</p>
                                </div>
                            </div>
                            <div class="form-group row py-3">
                                <label class="control-label col-md-12 font-weight-medium"> Kegiatan liburan yang dilakukan bersama anak ?</label>
                                <div class="col-md-12">
                                    <p class="form-control-static">{{ $form->kegiatan3 }}</p>
                                </div>
                            </div>                                    
                            <div class="form-group row py-3">
                                <label class="control-label col-md-12 font-weight-medium">Anggota keluarga yang paling dekat dan paling sering bermain dengan anak ? </label>
                                <div class="col-md-12">
                                    <p class="form-control-static">{{ $form->kegiatan4 }}</p>
                                </div>
                            </div>
                            <div class="form-group row py-3">
                                <label class="control-label col-md-12 font-weight-medium">Aturan khusus yang berlaku dalam keluarga dan bagaimana merealisasikannya? </label>
                                <div class="col-md-12">
                                    <p class="form-control-static">{{ $form->kegiatan5 }}</p>
                                </div>
                            </div>
                            <div class="form-group row py-3">
                                <label class="control-label col-md-12 font-weight-medium">Siapa yang menentukan/memutuskan sesuatu yang berkaitan degan anak ? </label>
                                <div class="col-md-12">
                                    <p class="form-control-static">{{ $form->kegiatan6 }}</p>
                                </div>
                            </div>
                            <div class="form-group row py-3">
                                <label class="control-label col-md-12 font-weight-medium">Kesulitan yang biasa dialami dalam mengasuh anak dan cara menanganinya ? </label>
                                <div class="col-md-12">
                                    <p class="form-control-static">{{ $form->kegiatan7 }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Step 8 -->
                        <div class="card-body">
                            <h4 class="card-title mb-0">Tumbuh Kembang Anak</h4>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row py-3">
                                        <label class="control-label col-md-4 font-weight-medium"> Keadaan saat dalam kandungan ?</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static">{{ $form->tumbuh1 }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row py-3">
                                        <label class="control-label col-md-4 font-weight-medium"> Pemeriksaan :</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static">{{ $form->tumbuh1a }}</p>
                                        </div>
                                    </div>
                                    <label class="control-label col-md-4 border-bottom">Keadaan saat lahir </label>
                                    <div class="form-group row py-3">
                                        <label class="control-label col-md-4 font-weight-medium"> Proses kelahiran (Normal/caesar/lainya) :</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static">{{ $form->tumbuh2a }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row py-3">
                                        <label class="control-label col-md-4 font-weight-medium">Berat badan : </label>
                                        <div class="col-md-8">
                                            <p class="form-control-static">{{ $form->tumbuh2a1 }} Kilogram</p>
                                        </div>
                                    </div>
                                    <div class="form-group row py-3">
                                        <label class="control-label col-md-4 font-weight-medium">Tinggi badan : </label>
                                        <div class="col-md-8">
                                            <p class="form-control-static">{{ $form->tumbuh2a2 }} Centimeter</p>
                                        </div>
                                    </div>
                                    <div class="form-group row py-3">
                                        <label class="control-label col-md-4 font-weight-medium"> Tempat dan tenaga medis yang menolong persalinan?</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static">{{ $form->tumbuh2b }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row py-3">
                                        <label class="control-label col-md-4 font-weight-medium"> Masalah dan penanganannya?</label>
                                        <div class="col-md-8">
                                            <p class="form-control-static">{{ $form->tumbuh2c }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-12 font-weight-medium"> Perkembangan fisik anak, masalah yang ada dan solusinya selama ini ?</label>
                                    <div class="col-md-12">
                                        <p class="form-control-static">{{ $form->tumbuh3 }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-12 font-weight-medium"> Pola makan dan minum anak, masalah yang ada dan solusinya selama ini ?</label>
                                    <div class="col-md-12">
                                        <p class="form-control-static">{{ $form->tumbuh4 }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-12 font-weight-medium"> Pola tidur anak, masalah yang ada dan solusinya selama ini ?</label>
                                    <div class="col-md-12">
                                        <p class="form-control-static">{{ $form->tumbuh5 }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-12 font-weight-medium"> Pola BAB dan BAK anak, masalah yang ada dan solusinya selama ini ?</label>
                                    <div class="col-md-12">
                                        <p class="form-control-static">{{ $form->tumbuh6 }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-12 font-weight-medium">Pola bicara dan bahasa anak, masalah yang ada dan solusinya selama ini ? </label>
                                    <div class="col-md-12">
                                        <p class="form-control-static">{{ $form->tumbuh7 }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">                                    
                                </div>
                            </div>
                        </div>                        
                    @endif
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
                                        <p class="form-control-static">{{ $form->bank }}</p>
                                    </div>
                                </div>
                                <div class="form-group row py-3">
                                    <label class="control-label col-md-4 font-weight-medium">Nomor Rekening : </label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{ $form->rekening }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form class="mb-3">
                                    <label for=""> Bukti pembayaran  : {{ $form->photo_url }}</label>
                                    @if ($form->photo_url == NULL)
                                        <p class="text-muted"> tidak ada bukti pembayaran yang diupload</p>
                                        
                                    @else
                                        @php $path = Storage::url('public/galeri/'.$form->photo_url); @endphp                                    
                                        <img src="{{ $path }}" class="d-block position-relative w-100" alt="{{ $form->id }}" />
                                        
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>                        
                </form>
            </div>
            <div class="card">
                <div class="card-body">
                    @if ($form->is_verified)
                        <input class="form-check-input" type="checkbox" id="is_verified" name="is_verified" value= 1 checked>
                        <label class="form-check-label" for="inlineCheckbox1"> Pembelian formulir sudah diverifikasi </label>                    
                    @else
                        <form action="{{ route('admin.verify-formulir',$form->id) }}" method="POST" class="d-inline">                
                            @csrf
                            @method('put')
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="is_verified" name="is_verified" value= 1 >
                                <label class="form-check-label" for="inlineCheckbox1"> Verifikasi pembayaran formulir</label>
                            </div>
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </form>                    
                    @endif
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.home') }}" class="btn btn-primary" >Kembali</a>
                </div>
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
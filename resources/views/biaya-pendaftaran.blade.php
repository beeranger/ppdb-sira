@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 align-items-stretch">
                <div class="card">
                    <div class="card-header bg-warning">
                        <h4 class="mb-0 text-dark">(SDI) Sekolah Dasar </h4></div>
                    <div class="card-body">
                        <h5>Formulir Pendaftaran : Rp.500.000</h5>
                            <ul>
                                <li>Formulir            : Rp.250.000</li>
                                <li>Test Psikologi*      : Rp.250.000</li>
                                <p class="text-muted"> *Hasil test akan diberikan kepada orang tua calon siswa</p>
                            </ul>
                            
                            <p class="card-text">                            
                                <h5>Rincian Biaya :</h5>
                                <ul>
                                    <li> Uang Pendidikan    : Rp. 6.500.000</li>
                                    <li> Uang Kegiatan      : Rp. 1.500.000</li>
                                    <li> Uang Seragam       : Rp. 800.000 (untuk Putra) / Rp. 900.000 (untuk putri)</li>
                                    <li> SPP Pertama        : Rp. 600.000</li>
                                </ul>
                            </p>
                            <h4 class="card-title"> Total biaya Putra : Rp.9.400.000 </h4>
                            <h4 class="card-title"> Total biaya Putri : Rp.9.500.000 </h4>
                        <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-items-stretch">
                <div class="card">
                    <div class="card-header bg-light-primary">
                        <h4 class="mb-0 text-dark">(SMPI) Sekolah Menengah Pertama </h4></div>
                    <div class="card-body">
                        <h5>Formulir Pendaftaran : Rp.550.000</h5>
                            <ul>
                                <li>Formulir        : Rp.250.000</li>
                                <li>Test Psikologi*  : Rp.300.000</li>
                                <p class="text-muted"> *Hasil test akan diberikan kepada orang tua calon siswa</p>
                        </ul>
                       
                        
                        <p class="card-text"><h5>Rincian Biaya Masuk:</h5>
                            <ul> 
                                <li> Uang Pendidikan    : Rp. 6.500.000</li>
                                <li> Uang Kegiatan      : Rp. 2.000.000</li>
                                <li> Uang Seragam       : Rp. 1.000.000 (untuk Putra) / Rp. 1.200.000 (untuk Putri)</li>
                                <li> SPP Pertama        : Rp. 600.000</li>
                            </ul>                            
                        </p>
                        <h4 class="card-title"> Total biaya Putra : Rp.10.100.000 </h4>
                        <h4 class="card-title"> Total biaya Putri : Rp.10.300.000 </h4>
                        <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
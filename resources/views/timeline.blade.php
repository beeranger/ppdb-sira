@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
            <div>
                <h4 class="mb-0">Timeline Pendaftaran</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-header bg-warning">
                        <h4 class="mb-0 text-white">Gelombang 1</h4></div>
                    <div class="card-body">
                        <h3 class="card-title">Jadwal :</h3>
                        
                        <p class="card-text">
                            <ul>
                                <li>Pendaftaran : 1 Oktober 2021 -30 November 2021</li>
                                <li>Wawancara Ortu : 11 Desember 2021</li>
                                <li>Tes Psikotes Calon Siswa : 11 Desember 2021</li>
                                <li>Pengumuman hasil : 17 Desember 2021</li>
                                <li>Daftar Ulang : 20 – 31 Desember 2021</li>
                            </ul>
                        </p>
                        <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card ">
                    <div class="card-header bg-success">
                        <h4 class="mb-0 text-white">Gelombang 2</h4></div>
                    <div class="card-body">
                        <h3 class="card-title">Jadwal :</h3>
                        <p class="card-text">
                            <ul>
                                <li>Pendaftaran : 3 Januari – 28 Februari 2022</li>
                                <li>Wawancara Ortu: 5 Maret 2022</li>
                                <li>Tes Psikotes Calon Siswa : 5 Maret 2022</li>
                                <li>Pengumuman hasil : 11 Maret 2022</li>
                                <li>Daftar Ulang : 14 – 26 Maret 2022</li>
                            </ul>
                        </p>
                        <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-header bg-danger">
                        <h4 class="mb-0 text-white">Gelombang 3</h4></div>
                    <div class="card-body">
                        <h3 class="card-title">Jadwal</h3>
                        <p class="card-text">
                            <ul>
                                <li>Pendaftaran :1 April – 31 Mei 2022</li>
                                <li>Wawancara Ortu : 4 Juni 2022</li>
                                <li>Tes Psikotes Calon Siswa : 4 Juni 2022</li>
                                <li>Pengumuman hasil : 10 Juni 2022</li>
                                <li>Daftar Ulang : 13 - 25 Juni 2022</li>
                            </ul>
                        </p>
                        <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
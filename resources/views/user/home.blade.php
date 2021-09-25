@extends('user.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header display-6">
                    Sistem Penerimaan Peserta Didik Baru Sekolah Islam Ramah Anak
                </div>
                <div class="card-body fs-5">
                    Alur Pendaftaran Online: 
                    <ol>
                        <li>Membuat akun PPDB dan login</li>
                        <li>Melaukan pembayaran formulir ke salah satu rekening dibawah ini: 
                            <ul>
                                <li> mandiri 00000088888</li>
                                <li> mandiri 00000089998</li>
                            </ul>
                        </li>
                        <li>Mengisi formulir pendaftaran melalui link berikut ini :
                            <ul>
                                <li> <a href="{{ route('user.add-formulir',1) }}">SDI Ramah Anak</a></li>
                                <li> <a href="{{ route('user.add-formulir',2) }}">SMPI Ramah Anak</a></li>
                            </ul>
                        </li>
                        <li> Mohon membawa berkas berikut ini saat observasi :
                            <ul>
                                <li> 1 lembar fotocopy akte kelahiran</li>
                                <li> 1 lembar fotocopy kartu keluarga</li>
                                <li> 1 lembar fotocopy ijazah TK (untuk yang mendaftar SD)</li>
                                <li> 1 lembar fotocopy ijazah SD (untuk yang mendaftar SMP)</li>
                                <li> 2 lembar pas foto terbaru ukuran 3x4 </li>
                            </ul>    
                        </li>                        
                    </ol>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Formulir Anda</h4>
                    <h6 class="card-subtitle lh-base">Berikut ini adalah list formulir yang sudah dilengkapi.</h6>
                </div>
                @if ($forms->count())                    
                    <div class="table-responsive">
                        <table class="table customize-table v-middle">
                            <thead class="table-dark">
                                <tr>
                                <th>Nomor Pendaftaran</th>
                                <th>Unit Sekolah</th>
                                <th>Nama Lengkap Calon Siswa</th>
                                <th>Nama Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Status</th>
                                {{-- <th>Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($forms as $form)                                     
                                    <tr>
                                        <td>{{ $form->formulirID() }}</td>
                                        <td>{{ $form->unit->name }}</td>
                                        <td>{{ $form->nama_lengkap }}</td>
                                        <td>{{ $form->nama_ayah }}</td>
                                        <td>{{ $form->nama_ibu }}</td>
                                        <td>{{ $form->status() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-info text-center" style="width:100%; margin: 0 auto">
                        <h4>Anda belum mengisi formulir pendaftaran.</h4>
                    </div>
                @endif
            </div>
        </div>
    </div>

    
</div>
@endsection
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
                    <h2 class="text-info">Alur Pendaftaran</h2>
                     
                    <ol>
                        <li>Membuat akun PPDB dan masuk</li>
                        <li>Melaukan pembayaran formulir ke salah satu rekening dibawah ini: 
                            <ul >  Pendaftaran <b>SDI </b>Ramah anak :
                                <li class="text-info font-weight-medium">Mandiri 157-000-4131-323 <br> a.n. SD Islam Ramah Anak</li>
                                <li class="text-info font-weight-medium">BSI-BSM 7136-4983-92  <br> a.n. Yayasan Khaulah Muadzah</li>
                            </ul>
                            <ul > Pendaftaran <b>SMPI </b> Ramah anak :                                
                                <li class="text-info font-weight-medium"> Mandiri 157-00-63636303  <br>  a.n. SMP Islam Ramah Anak</li>
                                <li class="text-info font-weight-medium"> BSI-BSM  7136-4983-92  <br>  a.n. Yayasan Khaulah Muadzah</li>
                            </ul>
                        </li>
                        <li>Siapkan bukti pembayaran formulir (dapat berupa scan / foto) dengan format file .jpg/.png dengan maksimum besar file 2MB.</li>
                        <li>Mengisi formulir pendaftaran melalui link berikut ini : 
                            <div class="col-md-8 py-2 mt-2 mb-2">
                                <a href="{{ route('user.add-formulir',1) }}" class="btn btn-primary font-weight-medium"> Daftar SDI RamahAnak</a>
                                <a href="{{ route('user.add-formulir',2) }}" class="btn btn-primary font-weight-medium"> Daftar SMPI RamahAnak </a>
                            </div>
                        </li>
                        <li><h4 class="font-weight-medium text-danger">Formulir yang telah dikirim tidak dapat di ubah kembali, mohon diisi dengan seksama dan sebaik mungkin.</h4> </li>
                        <li>Admin akan memverifikasi formulir yang telah dikirim, dan mengupdate status formulir sudah diterima atau belum. </li>
                        <li> Mohon membawa berkas berikut ini saat wawancara dan observasi siswa :
                            <ul class="text-info font-weight-medium">
                                <li> 1 lembar fotocopy akte kelahiran</li>
                                <li> 1 lembar fotocopy kartu keluarga</li>
                                <li> 1 lembar fotocopy ijazah TK (untuk yang mendaftar SD)</li>
                                <li> 1 lembar fotocopy ijazah SD (untuk yang mendaftar SMP)</li>
                                <li> 2 lembar pas foto terbaru ukuran 3x4 </li>
                            </ul>    
                        </li>     
                        <li>Jika ada pertanyaan atau kendala dapat menghubungi melalui 
                            <ul> 
                                <li>email : admin.ppdb@ramahanak.sch.id</li>
                                <li>Telpon : 021 – 27611406</li>
                                <li>Whatsapp (hanya melayani Pesan/Chat): 0822-4615-8383</li>
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
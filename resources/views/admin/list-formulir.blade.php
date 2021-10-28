@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List Formulir Pendaftaran {{ $unit->name }}</h4>
                    <h5 class="card-subtitle"> Total pendaftaran : {{ count($forms) }}</h5>                    
                    <a href="{{ route('admin.add-formulir',$unit->id) }}" class="btn btn-primary font-weight-medium"> Tambah pendaftaran {{ $unit->name }} </a>
                    @if(session('status'))
                        <div class="alert alert-success text-center">
                        <h6>{{ session('status') }}</h6>
                        </div>
                    @endif
                </div>
                @if ($forms->count())                    
                <div class="table-responsive">
                    <table id="file_export_sd" class="table table-striped table-bordered display text-nowrap">
                        <thead>
                            <!-- start row -->
                            <tr>
                                <th>Aksi</th>
                                <th>No.pendaftaran</th>
                                <th>nama lengkap</th>
                                <th>panggilan</th>
                                <th>jenis kelamin</th>
                                <th>nik</th>
                                <th>tempat tanggal lahir</th>
                                <th>agama</th>
                                <th>hobi</th>
                                <th>cita-cita</th>

                                <th>alamat</th>
                                <th>tempat tinggal</th>
                                <th>berkebutuhan khusus</th>
                                <th>jenis kebutuhan khusus</th>
                                <th>transportasi ke sekolah</th>

                                <th>nama ayah</th>
                                <th>tempat tanggal lahir</th>
                                <th>no. handphone</th>
                                <th>pendidikan terakhir</th>
                                <th>pekerjaan</th>
                                <th>alamat kerja</th>
                                <th>penghasilan</th>

                                <th>nama ibu</th>
                                <th>tempat tanggal lahir</th>
                                <th>no. handphone</th>
                                <th>pendidikan terakhir</th>
                                <th>pekerjaan</th>
                                <th>alamat kerja</th>
                                <th>penghasilan</th>

                                <th>nama wali</th>
                                <th>tempat tanggal lahir</th>
                                <th>no. handphone</th>
                                <th>pendidikan terakhir</th>
                                <th>pekerjaan</th>
                                <th>alamat kerja</th>
                                <th>penghasilan</th>

                                <th>tinggi badan</th>
                                <th>berat badan</th>
                                <th>penyakit khusus</th>
                                <th>golongan darah</th>
                                <th>kelainan jasmani</th>
                                <th>jenis kelainan jasmani</th>
                                <th>jarak ke sekolah</th>
                                <th>waktu tempuh</th>
                                <th>anak ke</th>
                                <th>jumlah saudara</th>
                                <th>saudara kandung</th>
                                <th>keluarga</th>
                                @if ($unit->id ==1)
                                    <th>PAUD</th>
                                    <th>alamat PAUD</th>
                                    <th>TK</th>
                                    <th>alamat TK</th>
                                @elseif ($unit->id ==2)
                                    <th>SD</th>
                                    <th>alamat SD</th>
                                @endif
                            </tr> <!-- end row -->
                        </thead>
                        <tbody>
                            <!-- start row -->
                            @foreach ($forms as $form)                                
                            <tr>
                                <td>
                                    <a class="btn btn-light" href="{{ route('admin.edit-formulir',$form->id) }}">Edit</a>
                                    <form action="{{ route('admin.delete-formulir',$form->id) }}" method="POST" class="d-inline">                
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-light">Hapus</button>
                                    </form>
                                    <a href="{{ route('admin.getPDF',$form->id) }}" class="btn btn-light" >PDF</a>
                                    
                                </td>
                                <td>{{ $form->formulirID() }}</td>
                                <td>{{ $form->nama_lengkap }}</td>
                                <td>{{ $form->nama_panggilan}}</td>
                                <td>{{ $form->jenis_kelamin }}</td>
                                <td>{{ $form->nik }}</td>
                                <td>{{ $form->tempat_lahir }},{{ $form->tanggal_lahir }}</td>
                                <td>{{ $form->agama }}</td>
                                <td>{{ $form->hobi }}</td>
                                <td>{{ $form->cita2 }}</td>

                                <td>{{ $form->alamat }}</td>
                                <td>{{ $form->tempat_tinggal }}</td>
                                <td>{{ $form->berkebutuhan_khusus }}</td>
                                <td>{{ $form->jenis_berkebutuhan_khusus }}</td>
                                <td>{{ $form->transport }}</td>

                                <td>{{ $form->nama_ayah }}</td>
                                <td>{{ $form->tempat_lahir_ayah }},{{ $form->tanggal_lahir_ayah }}</td>
                                <td>{{ $form->no_handphone_ayah }}</td>
                                <td>{{ $form->pendidikan_terakhir_ayah }}</td>
                                <td>{{ $form->pekerjaan_ayah }}</td>
                                <td>{{ $form->alamat_kerja_ayah }}</td>
                                <td>{{ $form->penghasilan_ayah }}</td>
                                
                                <td>{{ $form->nama_ibu }}</td>
                                <td>{{ $form->tempat_lahir_ibu }},{{ $form->tanggal_lahir_ibu }}</td>
                                <td>{{ $form->no_handphone_ibu }}</td>
                                <td>{{ $form->pendidikan_terakhir_ibu }}</td>
                                <td>{{ $form->pekerjaan_ibu }}</td>
                                <td>{{ $form->alamat_kerja_ibu }}</td>
                                <td>{{ $form->penghasilan_ibu }}</td>

                                <td>{{ $form->nama_wali }}</td>
                                <td>{{ $form->tempat_lahir_wali }},{{ $form->tanggal_lahir_wali }}</td>
                                <td>{{ $form->no_handphone_wali }}</td>
                                <td>{{ $form->pendidikan_terakhir_wali }}</td>
                                <td>{{ $form->pekerjaan_wali }}</td>
                                <td>{{ $form->alamat_kerja_wali }}</td>
                                <td>{{ $form->penghasilan_wali }}</td>
                                
                                <td>{{ $form->tinggi_badan }}</td>
                                <td>{{ $form->berat_badan }}</td>
                                <td>{{ $form->penyakit_khusus }}</td>
                                <td>{{ $form->golongan_darah }}</td>
                                <td>{{ $form->kelainan_jasmani }}</td>
                                <td>{{ $form->kelainan_jasmani_ya }}</td>
                                <td>{{ $form->jarak }}</td>
                                <td>{{ $form->waktu }}</td>
                                <td>{{ $form->anak_ke }}</td>
                                <td>{{ $form->jumlah_saudara }}</td>
                                <td>{{ $form->saudara_kandung }}</td>
                                <td>{{ $form->daftar_keluarga }}</td>
                                @if ($unit->id ==1)
                                    <td>{{ $form->nama_paud }}</td>
                                    <td>{{ $form->alamat_paud }}</td>
                                    <td>{{ $form->nama_tk }}</td>
                                    <td>{{ $form->alamat_tk }}</td>
                                    
                                @elseif ($unit->id ==2)
                                    <td>{{ $form->nama_sd }}</td>
                                    <td>{{ $form->alamat_sd }}</td>
                                @endif
                            </tr> 
                            @endforeach
                            <!-- end row -->                                                        
                        </tbody>
                    </table>
                </div>
                @else
                    <div class="alert alert-info text-center" style="width:100%; margin: 0 auto">
                        <h4>Belum ada data formulir.</h4>
                    </div>
                @endif
            </div>

            {{-- <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List Formulir Pendaftaran SMP</h4>

                    @if(session('status'))
                        <div class="alert alert-success text-center">
                        <h6>{{ session('status') }}</h6>
                        </div>
                    @endif
                </div>
                @if ($forms->count())                    
                <div class="table-responsive">
                    <table id="file_export_smp" class="table table-striped table-bordered display text-nowrap">
                        <thead>
                            <!-- start row -->
                            <tr>
                                <th>Nomor Pendaftaran</th>
                                <th>Unit sekolah</th>
                                <th>Nama Lengkap Calon Siswa</th>
                                <th>Nama Wali Pendaftar</th>
                                <th>Email Pendaftar</th>
                                <th>Status Pembayaran</th>
                                <th>Aksi</th>
                            </tr> <!-- end row -->
                        </thead>
                        <tbody>
                            <!-- start row -->
                            @foreach ($forms as $form)                                
                                <tr>
                                    <td>{{ $form->formulirID() }}</td>
                                    <td>{{ $form->unit->name }}</td>
                                    <td>{{ $form->nama_lengkap }}</td>
                                    <td>{{ $form->user->name }}</td>
                                    <td>{{ $form->user->email }}</td>
                                    <td>{{ $form->status() }}</td>
                                    <td>
                                        <div class="dropdown dropstart">
                                            <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i data-feather="more-horizontal" class="feather-sm"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="{{ route('admin.view-formulir',$form->id) }}">Lihat Detail</a></li>
                                                <li>
                                                    <form action="{{ route('admin.delete-formulir',$form->id) }}" method="POST" class="d-inline">                
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">Hapus</button>
                                                    </form>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.getPDF',$form->id) }}" class="dropdown-item" >Simpan dalam PDF</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr> 
                            @endforeach
                            <!-- end row -->                                                        
                        </tbody>
                        <tfoot>
                            <!-- start row -->
                            <tr>
                                <th>Nomor Pendaftaran</th>
                                <th>Nama Lengkap Calon Siswa</th>
                                <th>Nama Wali Pendaftar</th>
                                <th>Email Pendaftar</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr> <!-- end row -->
                        </tfoot>
                    </table>
                </div>
                @else
                    <div class="alert alert-info text-center" style="width:100%; margin: 0 auto">
                        <h4>Belum ada data formulir.</h4>
                    </div>
                @endif
            </div> --}}
        </div>
    </div>
</div>
@endsection
@section('extra-js')
<script>
    $('#file_export_sd').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

</script>

@endsection
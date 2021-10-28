@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List Semua Pendaftaran </h4>
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
                                <th>Nomor Pendaftaran</th>
                                <th>Nama Lengkap Calon Siswa</th>
                                <th>Kontak</th>
                                <th>Nama Wali Pendaftar</th>
                                <th>Email Pendaftar</th>
                                <th>Status Pembayaran</th>
                                <th></th>
                            </tr> <!-- end row -->
                        </thead>
                        <tbody>
                            <!-- start row -->
                            @foreach ($forms as $form)                                
                            <tr>
                                <td>{{ $form->formulirID() }}</td>
                                <td>{{ $form->nama_lengkap }}</td>
                                <td>{{ $form->kontak }}</td>
                                <td>{{ $form->user->name }}</td>
                                <td>{{ $form->user->email }}</td>
                                <td>{{ $form->status() }}</td>
                                <td>
                                    <a class="btn btn-light" href="{{ route('admin.view-formulir',$form->id) }}">Lihat Detail</a>
                                    <form action="{{ route('admin.delete-formulir',$form->id) }}" method="POST" class="d-inline">                
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-light">Hapus</button>
                                    </form>
                                    <a href="{{ route('admin.getPDF',$form->id) }}" class="btn btn-light" >Simpan dalam PDF</a>
                                                                    
                                    {{-- <div class="dropdown dropstart">
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
                                    </div> --}}
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
                                <th>Kontak</th>
                                <th>Nama Wali Pendaftar</th>
                                <th>Email Pendaftar</th>
                                <th>Status</th>
                                <th></th>
                            </tr> <!-- end row -->
                        </tfoot>
                    </table>
                </div>
                @else
                    <div class="alert alert-info text-center" style="width:100%; margin: 0 auto">
                        <h4>Belum ada data formulir.</h4>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
@section('extra-js')
<script>
    $('#file_export_sd').DataTable({
        // "pageLength": 2,
        dom:  'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    $('#file_export .add').on('click',function(){ 
    //.. your logic for add button click 
    });

    $('#file_export .edit').on('click',function(){ 
    //.. your logic for edit button click 
    });

    $('#file_export .delete').on('click',function(){ 
    //.. your logic for delete button click 
    });
</script>

@endsection
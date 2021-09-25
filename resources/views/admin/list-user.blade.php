@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List User</h4>
                    @if(session('status'))
                        <div class="alert alert-success text-center">
                        <h6>{{ session('status') }}</h6>
                        </div>
                    @endif
                    <a href="{{ route('admin.add-admin') }}" class="btn btn-primary" >Tambah Admin</a>
                </div>
                @if ($users->count())                    
                <div class="table-responsive">
                    <table id="file_export" class="table table-striped table-bordered display text-nowrap">
                        <thead>
                            <!-- start row -->
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>email</th>
                                <th>role</th>
                                <th>Aksi</th>
                            </tr> <!-- end row -->
                        </thead>
                        <tbody>
                            <!-- start row -->
                            @foreach ($users as $user)                                
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <div class="dropdown dropstart">
                                            <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i data-feather="more-horizontal" class="feather-sm"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="{{ route('admin.edit-admin',$user->id) }}">Edit</a></li>
                                                <li>
                                                    {{-- <a class="dropdown-item" href="#">Delete</a> --}}
                                                    <form action="{{ route('admin.delete-admin',$user->id) }}" method="POST" class="d-inline">                
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">Hapus</button>
                                                    </form>
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
                                <th>Id</th>
                                <th>Nama</th>
                                <th>email</th>
                                <th>role</th>
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
            </div>
        </div>
    </div>
</div>
@endsection
@extends('admin.main')

@section('content')
<div class="container-fluid justify-content-center">
    <div class="row mt-4">
        <div class="col-md-12">
            <h4 class="card-header mb-0 fw-bolder">Form tambah user</h4>
            
            <div class="card">
                <form class="form-horizontal" action="{{ route('admin.update-admin',$user->id) }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control form-input-bg" name="name" placeholder="Nama Lengkap" value="{{ $user->name }}" required>
                            <label for="name">Nama</label>
                            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control form-input-bg" name="email" placeholder="Email" value="{{ $user->email }}" required>
                            <label for="email">Email</label>
                            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control form-input-bg" name="password" value="{{ $user->password }}">
                            <label for="password">Password</label>
                            @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control form-input-bg" name="password_confirmation" value="{{ $user->password }}">
                            <label for="password_confirmation">Confirm Password</label>
                            @error('password_confirmation')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-floating mb-3">
                            <?php  $roles = array("user"=>"User","admin"=>"Admin"); ?>
                            {{-- <input type="text" class="form-control form-input-bg" id="role" name="role" placeholder="Admin" required value="admin"> --}}
                            <select class="form-select" id="role" name="role">
                                @foreach ($roles as $role =>$name)
                                        <option value="{{ $role }}"
                                        @if ($role == $user->role)
                                            selected
                                        @endif
                                        >
                                            {{ $name }}
                                        </option>
                                    @endforeach
                            </select>
                            <label for="role">Role</label>
                            @error('role')
                                <div class="text-danger">
                                    Please select a valid role
                                </div>
                            @enderror
                            
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-stretch">
                            <button type="submit" class="btn btn-info mx-5">Perbaharui</button>
                            <a href="{{ route('admin.list-users') }}" class="btn btn-primary" >Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
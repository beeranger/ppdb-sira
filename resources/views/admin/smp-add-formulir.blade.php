@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">            
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0 fw-bolder">Formulir PPDB SMPI Ramah Anak 2022-2023</h4>          
                </div>
                <div class="card-body wizard-content">
                    <h6 class="card-subtitle mb-3"></h6>
                    <form action="{{ route('admin.store-formulir',2) }}" method="POST" class="validation-wizard wizard-circle mt-5" enctype="multipart/form-data" id="form-sd" >
                        @csrf
                        <!-- Step 9 -->
                        <h6>Upload bukti pembayaran</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Bank Tujuan</label>
                                        <?php  $daftar_bank = array("mandiri sdi"=>"Mandiri SD Islam Ramah Anak (157-000-4131-323)","mandiri smpi"=>"Mandiri SMP Islam Ramah Anak (157-00-63636303)","BSI-BSM"=>"BSI-BSM Yayasan Khaulah Muadzah ( 7136-4983-92)","Tata usaha"=>"Tata Usaha"); ?>
                                        <select name="bank" class="form-control required">
                                            @foreach ($daftar_bank as $db =>$name)
                                                <option value="{{ $db }}"
                                                @if (old('bank') == $db)
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
                                    <div class="mb-3">
                                        <label for="">Nomor Rekening :</label>
                                        <p class="text-muted"> Jika pembayaran dilakukan di TU masukan "-""</p>
                                        <input type="text" class="form-control " id="rekening" name="rekening" value="{{ old('rekening') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">No Handphone yang dapat dihubungi :</label>
                                        <p class="text-muted"> masukan kontak orang tua</p>
                                        <input type="number" class="form-control " id="kontak" name="kontak" value="{{ old('rekening') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""> Bukti pembayaran</label>
                                    {{-- <form class="mb-3" action="{{ route('user.store-formulir') }}" method="POST">
                                        @csrf
                                    </form> --}}
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input class="form-control" type="file" id="photo_url" name="photo_url" aria-describedby="fileHelp" value="{{ old('photo_url') }}">
                                        </div>
                                        {{-- <button class="btn btn-light-info text-info font-weight-medium" type="submit" name="action" value="upload">Upload</button> --}}
                                        <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                        @error('image')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                        <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image" style="max-height: 250px;">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 1 -->
                        <h6>Data calon siswa</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3" >
                                        <label for="nama_lengkap">Nama Lengkap (Sesuai akta kelahiran) :</label>
                                        <input type="text" class="form-control required" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama_panggilan">Nama Panggilan :</label>
                                        <input type="text" class="form-control required" id="nama_panggilan" name="nama_panggilan" value="{{ old('nama_panggilan') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenis_kelamin">Jenis Kelamin :</label>
                                        <div class="c-inputs-stacked">
                                            <div class="form-check">
                                                <input type="radio" id="customRadio8" name="jenis_kelamin" value="Laki-laki" class="form-check-input required" {{ old('jenis_kelamin')=="Laki-laki" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="">Laki-laki</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio9" name="jenis_kelamin" value="Perempuan" class="form-check-input required" {{ old('jenis_kelamin')=="Perempuan" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nik">Nomor Induk Kependudukan (NIK):</label>
                                        <input type="number" class="form-control required" id="nik" name="nik" value="{{ old('nik') }}" > 
                                        @error('nik')<div class="text-danger"> masukan 16 digit NIK</div>@enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="nisn">Nomor Induk Siswa Nasional (NISN):
                                            <p class="text-muted"> Jika belum memiliki NISN masuka " 0000000000 "</p>
                                        </label>
                                        <input type="number" class="form-control required"  id="nisn" name="nisn" value="{{ old('nisn') }}">
                                        @error('nisn')<div class="text-danger"> masukan 10 digit NISN</div>@enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Tempat lahir :</label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                                        @error('tempat_lahir')<div class="text-danger"> {{ $message }}</div>@enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="date1">Tanggal lahir:</label>
                                        <input type="date" class="date form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" >
                                        @error('tanggal_lahir')<div class="text-danger"> {{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="agama">Agama :</label>
                                        <input type="text" class="form-control required" id="agama" name="agama" value="{{ old('agama') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="hobi">Hobi :</label>
                                        <input type="text" class="form-control required" id="hobi" name="hobi" value="{{ old('hobi') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cita-cita">Cita-cita :</label>
                                        <input type="text" class="form-control required" id="cita2" name="cita2" value="{{ old('cita2') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alamat :</label>
                                        <p class="text-muted"> Alamat lengkap beserta RT,RW kelurahan, kecamatan</p>
                                        <p class="text-muted"> Contoh: Jl. Paraji no.63 Rt 04 Rw 05 Kel.Kalibaru Kec. Cilodong, Depok</p>
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Tempat tinggal :</label>
                                        <div class="c-inputs-stacked">
                                            <div class="form-check">
                                                <input type="radio" id="customRadio8" name="tempat_tinggal" value="Bersama orang tua" class="form-check-input required" {{ old('tempat_tinggal')=="Bersama orang tua" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="">Bersama Orang tua</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio9" name="tempat_tinggal" value="Bersama wali" class="form-check-input required"{{ old('tempat_tinggal')=="Bersama wali" ? 'checked' : '' }}>
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
                                                <input type="radio" id="customRadio6" name="berkebutuhan_khusus" value="ya" class="form-check-input required"{{ old('berkebutuhan_khusus')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="customRadio6" >Ya</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio7" name="berkebutuhan_khusus" value="tidak" class="form-check-input required" {{ old('berkebutuhan_khusus')=="tidak" ? 'checked' : '' }}>
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
                                        <input type="text" class="form-control" id="jenis_berkebutuhan_khusus" name="jenis_berkebutuhan_khusus" value="{{ old('jenis_berkebutuhan_khusus') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Saran transportasi ke sekolah :</label>
                                        <div class="c-inputs-stacked">
                                            <div class="form-check">
                                                <input type="radio" id="customRadio10" name="transport" value="Sepeda" class="form-check-input required" {{ old('transport')=="Sepeda" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="">Sepeda</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio11" name="transport" value="Sepeda Motor" class="form-check-input required" {{ old('transport')=="Sepeda Motor" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="">Sepeda Motor</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio12" name="transport" value="Mobil Pribadi" class="form-check-input required" {{ old('transport')=="Mobil Pribadi" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="">Mobil Pribadi</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio13" name="transport" value="Angkutan umum" class="form-check-input required" {{ old('transport')=="Angkutan umum" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="">Angkutan umum</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio14" name="transport" value="Ojek" class="form-check-input required" {{ old('transport')=="Ojek" ? 'checked' : '' }}>
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
                        </section>
                        <!-- Step 2 -->
                        <h6>Data Ayah Kandung</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Nama lengkap (sesuai KTP/KK) :</label>
                                        <input type="text" class="form-control required" id="nama_ayah" name="nama_ayah" value="{{ old('nama_ayah') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Tempat lahir :</label>
                                        <input type="text" class="form-control required" id="tempat_lahir_ayah" name="tempat_lahir_ayah" value="{{ old('tempat_lahir_ayah') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="date1">Tanggal lahir:</label>
                                        <input type="date" class="date form-control required" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" value="{{ old('tanggal_lahir_ayah') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Nomor Handphone:</label>
                                        <input type="number" class="form-control required" id="no_handphone_ayah" name="no_handphone_ayah" value="{{ old('no_handphone_ayah') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Pendidikan Terakhir :</label>
                                        <?php  $edu = array("SD"=>"SD","SMP"=>"SMP","SMA"=>"SMA","D3"=>"D3","S1"=>"S1","S2"=>"S2","S3"=>"S3"); ?>
                                        <select name="pendidikan_terakhir_ayah required" class="form-control">
                                            @foreach ($edu as $ed =>$name)
                                                <option value="{{ $ed }}"
                                                @if (old('pendidikan_terakhir_ayah') == $ed)
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
                                        <input type="text" class="form-control required" id="pekerjaan_ayah" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alamat Tempat Kerja :</label>
                                        <input type="text" class="form-control required" id="alamat_kerja_ayah" name="alamat_kerja_ayah" value="{{ old('alamat_kerja_ayah') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Penghasilan :</label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input required" id="penghasilan_ayah" name="penghasilan_ayah" value="500rb-2jt" {{ old('penghasilan_ayah')=="500rb-2jt" ? 'checked' : '' }}>
                                            <label class="fork-check-label" for="">Rp.500.000-Rp.2.000.000 </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input required" id="penghasilan_ayah" name="penghasilan_ayah" value="2jt-5jt" {{ old('penghasilan_ayah')=="2jt-5jt" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="">Rp.2.000.000-Rp.5.000.000 </label>
                                            
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input required" id="penghasilan_ayah" name="penghasilan_ayah" value="5jt-20jt" {{ old('penghasilan_ayah')=="5jt-20jt" ? 'checked' : '' }} >
                                            <label class="form-check-label" for="">Rp.5.000.000-Rp.20.000.000 </label>
                                            
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input required" id="penghasilan_ayah" name="penghasilan_ayah" value=">20jt" {{ old('penghasilan_ayah')==">20jt" ? 'checked' : '' }} >
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
                        </section>
                        <!-- Step 3 -->
                        <h6>Data ibu kandung</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Nama lengkap (sesuai KTP/KK) :</label>
                                        <input type="text" class="form-control required" id="nama_ibu" name="nama_ibu" value="{{ old('nama_ibu') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Tempat lahir :</label>
                                        <input type="text" class="form-control required" id="tempat_lahir_ibu" name="tempat_lahir_ibu" value="{{ old('tempat_lahir_ibu') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="date1">Tanggal lahir:</label>
                                        <input type="date" class="date form-control required" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" value="{{ old('tanggal_lahir_ibu') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Nomor Handphone:</label>
                                        <input type="number" class="form-control required" id="no_handphone_ibu" name="no_handphone_ibu" value="{{ old('no_handphone_ibu') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Pendidikan Terakhir :</label>
                                        <?php  $edu = array("SD"=>"SD","SMP"=>"SMP","SMA"=>"SMA","D3"=>"D3","S1"=>"S1","S2"=>"S2","S3"=>"S3"); ?>
                                        <select name="pendidikan_terakhir_ibu" class="form-control">
                                            @foreach ($edu as $ed =>$name)
                                                <option value="{{ $ed }}"
                                                @if (old('pendidikan_terakhir_ibu') == $ed)
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
                                        <input type="text" class="form-control required" id="pekerjaan_ibu" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alamat Tempat Kerja :</label>
                                        <input type="text" class="form-control required" id="alamat_kerja_ibu" name="alamat_kerja_ibu" value="{{ old('alamat_kerja_ibu') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Penghasilan :</label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input required" id="penghasilan_ibu" name="penghasilan_ibu" value="500rb-2jt" {{ old('penghasilan_ibu')=="500rb-2jt" ? 'checked' : '' }}>
                                            <label class="fork-check-label" for="">Rp.500.000-Rp.2.000.000 </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input required" id="penghasilan_ibu" name="penghasilan_ibu" value="2jt-5jt" {{ old('penghasilan_ibu')=="2jt-5jt" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="">Rp.2.000.000-Rp.5.000.000 </label>
                                            
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input required" id="penghasilan_ibu" name="penghasilan_ibu" value="5jt-20jt" {{ old('penghasilan_ibu')=="5jt-20jt" ? 'checked' : '' }} >
                                            <label class="form-check-label" for="">Rp.5.000.000-Rp.20.000.000 </label>
                                            
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input required" id="penghasilan_ibu" name="penghasilan_ibu" value=">20jt" {{ old('penghasilan_ibu')==">20jt" ? 'checked' : '' }} >
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
                        </section>
                        <!-- Step 4 -->
                        <h6>Data wali (Jika tinggal bersama wali)</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Nama lengkap (sesuai KTP/KK) :</label>
                                        <input type="text" class="form-control" id="nama_wali" name="nama_wali" value="{{ old('nama_wali') }}">
                                    </div>
                                    <div class="mb-3">
                                            <label for="">Tempat lahir :</label>
                                            <input type="text" class="form-control" id="tempat_lahir_wali" name="tempat_lahir_wali" value="{{ old('tempat_lahir_wali') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="date1">Tanggal lahir:</label>
                                        <input type="date" class="date form-control" id="tanggal_lahir_wali" name="tanggal_lahir_wali" value="{{ old('tanggal_lahir_wali') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Nomor Handphone:</label>
                                        <input type="number" class="form-control" id="no_handphone_wali" name="no_handphone_wali" value="{{ old('no_handphone_wali') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Pendidikan Terakhir :</label>
                                        <?php  $edu = array("SD"=>"SD","SMP"=>"SMP","SMA"=>"SMA","D3"=>"D3","S1"=>"S1","S2"=>"S2","S3"=>"S3"); ?>
                                        <select name="pendidikan_terakhir_wali" class="form-control">
                                            @foreach ($edu as $ed =>$name)
                                                <option value="{{ $ed }}"
                                                @if (old('pendidikan_terakhir_wali') == $ed)
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
                                        <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" value="{{ old('pekerjaan_wali') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alamat Tempat Kerja :</label>
                                        <input type="text" class="form-control" id="alamat_kerja_wali" name="alamat_kerja_wali" value="{{ old('alamat_kerja_wali') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Penghasilan :</label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input reuired" id="penghasilan_wali" name="penghasilan_wali" value="500rb-2jt" {{ old('penghasilan_wali')=="500rb-2jt" ? 'checked' : '' }}>
                                            <label class="fork-check-label" for="">Rp.500.000-Rp.2.000.000 </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input " id="penghasilan_wali" name="penghasilan_wali" value="2jt-5jt" {{ old('penghasilan_wali')=="2jt-5jt" ? 'checked' : '' }}>
                                            <label class="form-check-label" for="">Rp.2.000.000-Rp.5.000.000 </label>
                                            
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input " id="penghasilan_wali" name="penghasilan_wali" value="5jt-20jt" {{ old('penghasilan_wali')=="5jt-20jt" ? 'checked' : '' }} >
                                            <label class="form-check-label" for="">Rp.5.000.000-Rp.20.000.000 </label>
                                            
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input " id="penghasilan_wali" name="penghasilan_wali" value=">20jt" {{ old('penghasilan_wali')==">20jt" ? 'checked' : '' }} >
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
                        </section>
                        <!-- Step 5 -->
                        <h6>Data periodik calon siswa</h6>
                        <section>
                            <label for="">Keadaan Jasmani </label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Tinggi Badan :</label>
                                        <input type="number" class="form-control required" id="tinggi_badan" name="tinggi_badan" value="{{ old('tinggi_badan') }}">
                                        <label class="text-muted"> Centimeter</label>
                                    </div>                                                      
                                    <div class="mb-3">
                                        <label for="">Berat Badan :</label>
                                        <input type="number" class="form-control required" id="berat_badan" name="berat_badan" value="{{ old('berat_badan') }}">
                                        <label class="text-muted"> Kilogram</label>
                                    </div>                                                      
                                    <div class="mb-3">
                                        <label for="">Penyakit khusus :</label>
                                        <input type="text" class="form-control required" id="penyakit_khusus" name="penyakit_khusus" value="{{ old('penyakit_khusus') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Golongan Darah :</label>
                                        <?php  $goldar = array("A"=>"A","B"=>"B","O"=>"O","AB"=>"AB","tidak tahu"=>"Tidak Tahu"); ?>
                                        <select name="golongan_darah" class="form-control required">
                                            @foreach ($goldar as $gd =>$name)
                                                <option value="{{ $gd }}"
                                                @if (old('golongan_darah') == $gd)
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
                                                <input type="radio" id="customRadio6" name="kelainan_jasmani" value="ya" class="form-check-input required" {{ old('kelainan_jasmani')=="ya" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="">Ya</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="kelainan_jasmani" name="kelainan_jasmani" value="tidak" class="form-check-input required" {{ old('kelainan_jasmani')=="tidak" ? 'checked' : '' }}>
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
                                        <input type="text" class="form-control" id="kelainan_jasmani_ya" name="kelainan_jasmani_ya" value="{{ old('kelainan_jasmani_ya') }}">
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Jarak dari rumah ke sekolah :</label>
                                        <input type="number" class="form-control required" id="jarak" name="jarak" value="{{ old('jarak') }}">
                                        <label class="text-muted"> km</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Waktu tempuh dari rumah ke sekolah :</label>
                                        <input type="number" class="form-control required" id="waktu" name="waktu" value="{{ old('waktu') }}">
                                        <label class="text-muted"> Menit</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Anak ke :</label>
                                        <input type="number" class="form-control required" id="anak_ke" name="anak_ke" value="{{ old('anak_ke') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Jumlah saudara :</label>
                                        <input type="number" class="form-control required" id="jumlah_saudara" name="jumlah_saudara" value="{{ old('jumlah_saudara') }}">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="">Sebutkan nama kakak/adik kandung (nama,usia, kakak/adik) :
                                            <p class="text-muted">contoh: (Maryam,12 tahun,kakak),(Faris,2 tahun, adik)</p>
                                        </label>
                                        <textarea name="saudara_kandung" id="saudara_kandung" rows="4" class="form-control required" >{{ old('saudara_kandung') }}</textarea>
                                    </div> 
                                    <div class="mb-3">
                                        <label for="">Sebutkan aggota keluarga lain dirumah (nama,usia, hubunga keluarga) :
                                            <p class="text-muted">contoh: (Siti,56 tahun,nenek),(Budi, 57 tahun, Kakek)</p>
                                        </label>
                                        <textarea name="daftar_keluarga" id="daftar_keluarga" rows="4" class="form-control required">{{ old('daftar_keluarga') }}</textarea>
                                    </div> 

                                </div>
                            </div>
                        </section>
                        <!-- Step 6 -->
                        <h6>Data pendidikan calon siswa</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">SD :</label>
                                        <input type="text" class="form-control required" id="nama_sd" name="nama_sd" value="{{ old('nama_sd') }}">
                                    </div>                                        
                                    <div class="mb-3">
                                        <label for="">Alamat SD:</label>
                                        <input type="text" class="form-control required" id="alamat_sd" name="alamat_sd" value="{{ old('alamat_sd') }}">
                                    </div>
                                </div>
                            </div>
                        </section>                        
                        {{-- <button class="btn btn-light-info text-info font-weight-medium" type="submit" name="action" value="simpan">Simpan</button> --}}
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('extra-js')
<script>
    var form = $(".validation-wizard").show();

    $(".validation-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "Submit"
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
        },
        onFinishing: function(event, currentIndex) {
            return form.validate().settings.ignore = ":disabled", form.valid()
        },
        onFinished: function(event, currentIndex) {
            $(".validation-wizard").submit();
            swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
        }
    }), $(".validation-wizard").validate({
        ignore: "input[type=hidden]",
        errorClass: "text-danger",
        successClass: "text-success",
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass)
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass)
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element)
        },
        rules: {
            email: {
                email: !0
            }
        }
    })

    $('#photo_url').change(function(){            
        let reader = new FileReader();        
        reader.onload = (e) => {         
            $('#preview-image-before-upload').attr('src', e.target.result); 
            }        
        reader.readAsDataURL(this.files[0]);      
    });
    $('.date').datepicker({
        format: 'dd/mm/yyyy'
    });   
    
</script>
    
@endsection
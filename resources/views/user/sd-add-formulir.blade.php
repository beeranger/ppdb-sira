@extends('user.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">            
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0 fw-bolder">Formulir PPDB SDI Ramah Anak 2022-2023</h4>          
                </div>
                <div class="card-body wizard-content">
                    <h6 class="card-subtitle mb-3"></h6>
                    <form action="{{ route('user.store-formulir',1) }}" method="POST" class="validation-wizard wizard-circle mt-5" enctype="multipart/form-data" id="form-sd" >
                        @csrf
                        <!-- Step 9 -->
                        <h6>Upload bukti pembayaran</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Bank Tujuan</label>
                                        <?php  $daftar_bank = array("mandiri sdi"=>"Mandiri SD Islam Ramah Anak (157-000-4131-323)","mandiri smpi"=>"Mandiri SMP Islam Ramah Anak (157-00-63636303)","BSI-BSM"=>"BSI-BSM Yayasan Khaulah Muadzah ( 7136-4983-92)"); ?>
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
                                        <input type="text" class="form-control required" id="rekening" name="rekening" value="{{ old('rekening') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">No Handphone yang dapat dihubungi :</label>
                                        <input type="number" class="form-control required" id="kontak" name="kontak" value="{{ old('rekening') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""> Bukti pembayaran</label>
                                    {{-- <form class="mb-3" action="{{ route('user.store-formulir') }}" method="POST">
                                        @csrf
                                    </form> --}}
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input class="form-control required" type="file" id="photo_url" name="photo_url" aria-describedby="fileHelp" value="{{ old('photo_url') }}">
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
                                        <label for="">Alamat :
                                            <p class="text-muted"> Alamat lengkap beserta RT,RW kelurahan, kecamatan</p>
                                            <p class="text-muted"> Contoh: Jl. Paraji no.63 Rt 04 Rw 05 Kel.Kalibaru Kec. Cilodong, Depok</p>
                                        </label>
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
                                        <label for="">PAUD/PG :</label>
                                        <input type="text" class="form-control required" id="nama_paud" name="nama_paud" value="{{ old('nama_paud') }}">
                                    </div>                                        
                                    <div class="mb-3">
                                        <label for="">Alamat PAUD/PG :</label>
                                        <input type="text" class="form-control required" id="alamat_paud" name="alamat_paud" value="{{ old('alamat_paud') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">TK :</label>
                                        <input type="text" class="form-control required" id="nama_tk" name="nama_tk" value="{{ old('nama_tk') }}">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="">Alamat TK:</label>
                                        <input type="text" class="form-control required" id="alamat_tk" name="alamat_tk" value="{{ old('alamat_tk') }}">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 7 -->
                        <h6>Kegiatan bersama keluarga</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Kegiatan yang biasa dilakukan bersama-sama dikeluarga ?</label>
                                        <textarea id="kegiatan1" rows="4" name="kegiatan1" class="form-control required">{{ old('kegiatan1') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Sarana pendidikan yang tersedia bagi anak-anak (buku, mainan, dll.) ?</label>
                                        <textarea id="kegiatan2" rows="4" name="kegiatan2" class="form-control required">{{ old('kegiatan2') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Kegiatan liburan yang dilakukan bersama anak ?</label>
                                        <textarea id="kegiatan3" rows="4" name="kegiatan3" class="form-control required">{{ old('kegiatan3') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Anggota keluarga yang paling dekat dan paling sering bermain dengan anak ?</label>
                                        <textarea id="kegiatan4" rows="4" name="kegiatan4" class="form-control required">{{ old('kegiatan4') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Aturan khusus yang berlaku dalam keluarga dan bagaimana merealisasikannya?</label>
                                        <textarea id="kegiatan5" rows="4" name="kegiatan5" class="form-control required">{{ old('kegiatan5') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Siapa yang menentukan/memutuskan sesuatu yang berkaitan degan anak ?</label>
                                        <textarea id="kegiatan6" rows="4" name="kegiatan6" class="form-control required">{{ old('kegiatan6') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Kesulitan yang biasa dialami dalam mengasuh anak dan cara menanganinya ?</label>
                                        <textarea id="kegiatan7" rows="4" name="kegiatan7" class="form-control required">{{ old('kegiatan7') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 8 -->
                        <h6>Tumbuh kembang anak</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Keadaan saat dalam kandungan ?</label>
                                        <textarea id="tumbuh1" rows="4" name="tumbuh1" class="form-control required">{{ old('tumbuh1') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Pemeriksaan :</label>
                                        <div class="c-inputs-stacked">
                                            <div class="form-check">
                                                <input type="radio" id="tumbuh1a" name="tumbuh1a" value="rutin" class="form-check-input" {{ old('tumbuh1a')=="rutin" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="">Rutin</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="tumbuh1a" name="tumbuh1a" value="tidakrutin" class="form-check-input" {{ old('tumbuh1a')=="tidakrutin" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="">Tidak Rutin</label>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="">Keadaan saat lahir :</label>
                                    <div class="mb-3">
                                        <label for="">Proses kelahiran (Normal/caesar/lainya) :</label>
                                        <input type="text" class="form-control required" id="tumbuh2a" name="tumbuh2a" value="{{ old('tumbuh2a') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Berat badan :</label>
                                        <input type="text" class="form-control required" id="tumbuh2a1" name="tumbuh2a1" value="{{ old('tumbuh2a1') }}">
                                        <label class="text-muted"> Kg</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Tinggi badan :</label>
                                        <input type="text" class="form-control required" id="tumbuh2a2" name="tumbuh2a2" value="{{ old('tumbuh2a2') }}">
                                        <label class="text-muted"> Centimeter</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Tempat dan tenaga medis yang menolong persalinan?</label>
                                        <input type="text" class="form-control required" id="tumbuh2b" name="tumbuh2b" value="{{ old('tumbuh2b') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Masalah dan penanganannya?</label>
                                        <input type="text" class="form-control required" id="tumbuh2c" name="tumbuh2c" value="{{ old('tumbuh2c') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Perkembangan fisik anak, masalah yang ada dan solusinya selama ini ?</label>
                                        <textarea id="tumbuh3" rows="4" name="tumbuh3" class="form-control required">{{ old('tumbuh3') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Pola makan dan minum anak, masalah yang ada dan solusinya selama ini ?</label>
                                        <textarea id="tumbuh4" rows="4" name="tumbuh4" class="form-control required">{{ old('tumbuh4') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Pola tidur anak, masalah yang ada dan solusinya selama ini ?</label>
                                        <textarea id="tumbuh5" rows="4" name="tumbuh5" class="form-control required">{{ old('tumbuh5') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Pola BAB dan BAK anak, masalah yang ada dan solusinya selama ini ?</label>
                                        <textarea id="tumbuh6" rows="4" name="tumbuh6" class="form-control required">{{ old('tumbuh6') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Pola bicara dan bahasa anak, masalah yang ada dan solusinya selama ini ?</label>
                                        <textarea id="tumbuh7" rows="4" name="tumbuh7" class="form-control required">{{ old('tumbuh7') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 10 survey karakter individu form -->      
                        <h6>Identifikasi Karakter</h6> 
                        <section>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <ol>
                                        <h4 class="font-weight-medium">Aspek Penglihatan</h4>
                                        <li>
                                            <label for="quis1" class="mb-3 col-md-8">Selalu mendekat pada benda/objek yang ingin dilihat </label>
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis1" name="quis1" value="ya" class="form-check-input required"{{ old('quis1')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis1" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis1" name="quis1" value="tidak" class="form-check-input required" {{ old('quis1')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis1">Tidak</label>
                                            </div>
                                        </li>                                   
                                        <li>
                                            <label for="quis2" class="mb-3 col-md-8">Sering salah menyapa/memanggil teman/guru </label>
                                            <div class="form-check form-check-inline required">
                                                <input type="radio" id="quis2" name="quis2" value="ya" class="form-check-input required"{{ old('quis2')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis2" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis2" name="quis2" value="tidak" class="form-check-input required" {{ old('quis2')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis2">Tidak</label>
                                            </div>
                                        </li>                                   
                                        <li>
                                            <label for="quis3" class="mb-3 col-md-8">Kesulitan membaca buku dalam jarak standar (30 cm) </label>
                                            <div class="form-check form-check-inline required">
                                                <input type="radio" id="quis3" name="quis3" value="ya" class="form-check-input required"{{ old('quis3')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis3" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis3" name="quis3" value="tidak" class="form-check-input required" {{ old('quis3')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis3">Tidak</label>
                                            </div>
                                        </li>                                   
                                        <li>
                                            <label for="quis4" class="mb-3 col-md-8">Kesulitan mengambil benda kecil di dekatnya  </label>
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis4" name="quis4" value="ya" class="form-check-input required"{{ old('quis4')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis4" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis4" name="quis4" value="tidak" class="form-check-input required" {{ old('quis4')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis4">Tidak</label>
                                            </div> 
                                        </li>
                                        <li>
                                            <label for="quis5"  class="mb-3 col-md-8">Tidak dapat menulis mengikuti garis lurus  </label>
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis5" name="quis5" value="ya" class="form-check-input required"{{ old('quis5')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis5" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis5" name="quis5" value="tidak" class="form-check-input required" {{ old('quis5')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis5">Tidak</label>
                                            </div>
                                        </li>                                   
                                        <li>
                                            <label for="quis6" class="mb-3 col-md-8" >Sering menggunakan perabaan waktu berjalan  </label>
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis6" name="quis6" value="ya" class="form-check-input required"{{ old('quis6')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis6" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis6" name="quis6" value="tidak" class="form-check-input required" {{ old('quis6')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis6">Tidak</label>
                                            </div>  
                                        </li>                                   
                                        <li>
                                            <label for="quis7"class="mb-3 col-md-8" >Sering tersandung saat berjalan  </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis7" name="quis7" value="ya" class="form-check-input required"{{ old('quis7')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis7" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis7" name="quis7" value="tidak" class="form-check-input required" {{ old('quis7')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis7">Tidak</label>
                                            </div>
                                        </li>                                   
                                        <li>
                                            <label for="quis8" class="mb-3 col-md-8">Sering terkejut bila ada benda mendekat  </label>
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis8" name="quis8" value="ya" class="form-check-input required"{{ old('quis8')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis8" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis8" name="quis8" value="tidak" class="form-check-input required" {{ old('quis8')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis8">Tidak</label>
                                            </div>
                                        </li>                                   
                                        <li>
                                            <label for="quis9" class="mb-3 col-md-8">Gerakan kepala yang tidak wajar saat membaca </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis9" name="quis9" value="ya" class="form-check-input required"{{ old('quis9')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis9" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis9" name="quis9" value="tidak" class="form-check-input required" {{ old('quis9')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis9">Tidak</label>
                                            </div>
                                        </li>                                   
                                        <li>
                                            <label for="quis10" class="mb-3 col-md-8">Selalu menghindari cahaya </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis10" name="quis10" value="ya" class="form-check-input required"{{ old('quis10')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis10" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis10" name="quis10" value="tidak" class="form-check-input required" {{ old('quis10')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis10">Tidak</label>
                                            </div>                                     
                                        </li>                                   
                                        <li>
                                            <label for="quis11" class="mb-3 col-md-8">Kurang suka pada kegiatan visual (misal: petak umpet, membaca huruf cetak) </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis11" name="quis11" value="ya" class="form-check-input required"{{ old('quis11')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis11" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis11" name="quis11" value="tidak" class="form-check-input required" {{ old('quis11')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis11">Tidak</label>
                                            </div>
                                        </li>
                                        <li>
                                            <label for="quis12" class="mb-3 col-md-8 ">Salah satu atau kedua bagian bola mata yang hitam bersisik </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis12" name="quis12" value="ya" class="form-check-input required"{{ old('quis12')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis12" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis12" name="quis12" value="tidak" class="form-check-input required" {{ old('quis12')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis12">Tidak</label>
                                            </div> 
                                        </li>
                                        <li>
                                            <label for="quis13" class="mb-3 col-md-8">Salah satu atau kedua bagian bola mata yang hitam bewarna keruh  </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis13" name="quis13" value="ya" class="form-check-input required"{{ old('quis13')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis13" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis13" name="quis13" value="tidak" class="form-check-input required" {{ old('quis13')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis13">Tidak</label>
                                            </div> 
                                        </li>
                                        <li>
                                            <label for="quis14" class="mb-3 col-md-8">Salah satu atau kedua bagian bola mata yang hitam kering  </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis14" name="quis14" value="ya" class="form-check-input required"{{ old('quis14')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis14" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis14" name="quis14" value="tidak" class="form-check-input required" {{ old('quis14')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis14">Tidak</label>
                                            </div>  
                                        </li>
                                        <li>
                                            <label for="quis15" class="mb-3 col-md-8">Mata bergoyang terus </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis15" name="quis15" value="ya" class="form-check-input required"{{ old('quis15')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis15" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis15" name="quis15" value="tidak" class="form-check-input required" {{ old('quis15')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis15">Tidak</label>
                                            </div>
                                        </li>
                                        <li>
                                            <label for="quis16" class="mb-3 col-md-8">Matanya selalu berair dan/atau mengeluarkan kotoran</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis16" name="quis16" value="ya" class="form-check-input required"{{ old('quis16')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis16" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis16" name="quis16" value="tidak" class="form-check-input required" {{ old('quis16')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis16">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis17" class="mb-3 col-md-8">Bentuk salah satu atau kedua bola mata yang tidak wajar </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis17" name="quis17" value="ya" class="form-check-input required"{{ old('quis17')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis17" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis17" name="quis17" value="tidak" class="form-check-input required" {{ old('quis17')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis17">Tidak</label>
                                            </div>
                                        </li>
                                        <li>
                                            <label for="quis18" class="mb-3 col-md-8">Tidak memiliki bola mata </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis18" name="quis18" value="ya" class="form-check-input required"{{ old('quis18')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis18" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis18" name="quis18" value="tidak" class="form-check-input required" {{ old('quis18')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis18">Tidak</label>
                                            </div>   
                                        </li>
                                        <!-- aspek pendenganran-->
                                        <h4 class="font-weight-medium">Aspek Pendengaran</h4>
                                        <li>
                                            <label for="quis19" class="mb-3 col-md-8">Sering memiringkan kepala atau mendekatkan telinga saat mendengarkan  </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis19" name="quis19" value="ya" class="form-check-input required"{{ old('quis19')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis19" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis19" name="quis19" value="tidak" class="form-check-input required" {{ old('quis19')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis19">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis20" class="mb-3 col-md-8">Bereaksi ketika merasakan  getaran  </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis20" name="quis20" value="ya" class="form-check-input required"{{ old('quis20')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis20" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis20" name="quis20" value="tidak" class="form-check-input required" {{ old('quis20')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis20">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis21" class="mb-3 col-md-8">Kurang merespon terhadap bunyi/suara di dekatnya  </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis21" name="quis21" value="ya" class="form-check-input required"{{ old('quis21')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis21" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis21" name="quis21" value="tidak" class="form-check-input required" {{ old('quis21')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis21">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis22" class="mb-3 col-md-8">Kurang merespon terhadap suara teman atau guru yang ditujukan kepadanya </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis22" name="quis22" value="ya" class="form-check-input required"{{ old('quis22')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis22" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis22" name="quis22" value="tidak" class="form-check-input required" {{ old('quis22')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis22">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis23" class="mb-3 col-md-8">Selalu meminta mengulang kalimat dari lawan bicaranya dengan mengatakan misalnya: “Hah?”, “Apa?”</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis23" name="quis23" value="ya" class="form-check-input required"{{ old('quis23')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis23" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis23" name="quis23" value="tidak" class="form-check-input required" {{ old('quis23')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis23">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis24" class="mb-3 col-md-8">Sering melamun atau mengasingkan diri</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis24" name="quis24" value="ya" class="form-check-input required"{{ old('quis24')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis24" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis24" name="quis24" value="tidak" class="form-check-input required" {{ old('quis24')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis24">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis25" class="mb-3 col-md-8">Kurang tertarik dengan kegiatan/permainan auditif</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis25" name="quis25" value="ya" class="form-check-input required"{{ old('quis25')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis25" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis25" name="quis25" value="tidak" class="form-check-input required" {{ old('quis25')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis25">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis26" class="mb-3 col-md-8">Berbicara terputus-putus/tidak lancar</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis26" name="quis26" value="ya" class="form-check-input required"{{ old('quis26')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis26" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis26" name="quis26" value="tidak" class="form-check-input required" {{ old('quis26')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis26">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis27" class="mb-3 col-md-8">Sering menggunakan isyarat dalam berkomunikasi  </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis27" name="quis27" value="ya" class="form-check-input required"{{ old('quis27')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis27" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis27" name="quis27" value="tidak" class="form-check-input required" {{ old('quis27')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis27">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis28" class="mb-3 col-md-8">Memperhatikan gerak mulut lawan bicara </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis28" name="quis28" value="ya" class="form-check-input required"{{ old('quis28')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis28" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis28" name="quis28" value="tidak" class="form-check-input required" {{ old('quis28')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis28">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis29" class="mb-3 col-md-8">Intonasi bicara yang datar/tidak wajar </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis29" name="quis29" value="ya" class="form-check-input required"{{ old('quis29')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis29" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis29" name="quis29" value="tidak" class="form-check-input required" {{ old('quis29')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis29">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis30" class="mb-3 col-md-8">Susunan kalimat yang tidak terstruktur </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis30" name="quis30" value="ya" class="form-check-input required"{{ old('quis30')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis30" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis30" name="quis30" value="tidak" class="form-check-input required" {{ old('quis30')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis30">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis31" class="mb-3 col-md-8">Telinga selalu bernanah/mengeluarkan kotoran </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis31" name="quis31" value="ya" class="form-check-input required"{{ old('quis31')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis31" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis31" name="quis31" value="tidak" class="form-check-input required" {{ old('quis31')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis31">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis32" class="mb-3 col-md-8">Tidak memiliki daun telinga </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis32" name="quis32" value="ya" class="form-check-input required"{{ old('quis32')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis32" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis32" name="quis32" value="tidak" class="form-check-input required" {{ old('quis32')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis32">Tidak</label>
                                            </div>   
                                        </li>
                                        <h4 class="font-weight-medium">Aspek Intelektual</h4>
                                        <li>
                                            <label for="quis33" class="mb-3 col-md-8">Anak sulit mengungkapkan gagasan secara runtut</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis33" name="quis33" value="ya" class="form-check-input required"{{ old('quis33')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis33" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis33" name="quis33" value="tidak" class="form-check-input required" {{ old('quis33')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis33">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis34" class="mb-3 col-md-8">Kurang memiliki inisiatif </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis34" name="quis34" value="ya" class="form-check-input required"{{ old('quis34')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis34" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis34" name="quis34" value="tidak" class="form-check-input required" {{ old('quis34')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis34">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis35" class="mb-3 col-md-8">Sering menyendiri, pasif, dan masa bodoh </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis35" name="quis35" value="ya" class="form-check-input required"{{ old('quis35')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis35" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis35" name="quis35" value="tidak" class="form-check-input required" {{ old('quis35')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis35">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis36" class="mb-3 col-md-8">Sulit berkomunikasi dan interaksi</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis36" name="quis36" value="ya" class="form-check-input required"{{ old('quis36')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis36" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis36" name="quis36" value="tidak" class="form-check-input required" {{ old('quis36')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis36">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis37" class="mb-3 col-md-8">Mengalami kesulitan untuk beradaptasi dengan lingkungan yang baru</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis37" name="quis37" value="ya" class="form-check-input required"{{ old('quis37')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis37" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis37" name="quis37" value="tidak" class="form-check-input required" {{ old('quis37')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis37">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis38" class="mb-3 col-md-8">Kurang mampu untuk mengurus diri sendiri  </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis38" name="quis38" value="ya" class="form-check-input required"{{ old('quis38')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis38" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis38" name="quis38" value="tidak" class="form-check-input required" {{ old('quis38')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis38">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis39" class="mb-3 col-md-8">Sering tergantung pada bantuan orang lain</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis39" name="quis39" value="ya" class="form-check-input required"{{ old('quis39')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis39" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis39" name="quis39" value="tidak" class="form-check-input required" {{ old('quis39')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis39">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis40" class="mb-3 col-md-8">Sulit mengingat</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis40" name="quis40" value="ya" class="form-check-input required"{{ old('quis40')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis40" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis40" name="quis40" value="tidak" class="form-check-input required" {{ old('quis40')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis40">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis41" class="mb-3 col-md-8">Mempunyai ciri fisik yang khas yaitu: mata sipit, lidah pendek, jari tangan/kaki pendek (Down syndrome)</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis41" name="quis41" value="ya" class="form-check-input required"{{ old('quis41')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis41" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis41" name="quis41" value="tidak" class="form-check-input required" {{ old('quis41')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis41">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis42" class="mb-3 col-md-8">Ukuran kepala yang lebih besar (tidak wajar) dibanding badannya (Hydrocepalus)</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis42" name="quis42" value="ya" class="form-check-input required"{{ old('quis42')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis42" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis42" name="quis42" value="tidak" class="form-check-input required" {{ old('quis42')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis42">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis43" class="mb-3 col-md-8">Ukuran kepala yang lebih kecil (tidak wajar) dibanding badannya (Microcepalus)</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis43" name="quis43" value="ya" class="form-check-input required"{{ old('quis43')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis43" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis43" name="quis43" value="tidak" class="form-check-input required" {{ old('quis43')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis43">Tidak</label>
                                            </div>   
                                        </li>
                                        <h4 class="font-weight-medium">Aspek Motorik</h4>
                                        <li>
                                            <label for="quis44" class="mb-3 col-md-8">Jari-jari tangan kaku dan tidak dapat menggenggam</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis44" name="quis44" value="ya" class="form-check-input required"{{ old('quis44')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis44" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis44" name="quis44" value="tidak" class="form-check-input required" {{ old('quis44')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis44">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis45" class="mb-3 col-md-8">Terdapat bagian anggota gerak yang tidak lengkap/tidak sempurna/lebih kecil dari biasanya yang berpengaruh pada fungsi gerak</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis45" name="quis45" value="ya" class="form-check-input required"{{ old('quis45')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis45" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis45" name="quis45" value="tidak" class="form-check-input required" {{ old('quis45')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis45">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis46" class="mb-3 col-md-8">Kesulitan dalam melakukan gerakan, kaku, dan tidak terkendali</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis46" name="quis46" value="ya" class="form-check-input required"{{ old('quis46')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis46" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis46" name="quis46" value="tidak" class="form-check-input required" {{ old('quis46')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis46">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis47" class="mb-3 col-md-8">Melakukan suatu gerakan yang terus menerus</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis47" name="quis47" value="ya" class="form-check-input required"{{ old('quis47')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis47" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis47" name="quis47" value="tidak" class="form-check-input required" {{ old('quis47')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis47">Tidak</label>
                                            </div>   
                                        </li>
                                        <h4 class="font-weight-medium">Aspek Sosial</h4>
                                        <li>
                                            <label for="quis48" class="mb-3 col-md-8">Temperamental/mudah marah</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis48" name="quis48" value="ya" class="form-check-input required"{{ old('quis48')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis48" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis48" name="quis48" value="tidak" class="form-check-input required" {{ old('quis48')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis48">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis49" class="mb-3 col-md-8">Suka melawan/menentang, sulit mengikuti aturan</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis49" name="quis49" value="ya" class="form-check-input required"{{ old('quis49')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis49" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis49" name="quis49" value="tidak" class="form-check-input required" {{ old('quis49')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis49">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis50" class="mb-3 col-md-8">Sering melakukan tindakan agresif (kepada orang lain atau dirinya sendiri)</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis50" name="quis50" value="ya" class="form-check-input required"{{ old('quis50')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis50" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis50" name="quis50" value="tidak" class="form-check-input required" {{ old('quis50')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis50">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis51" class="mb-3 col-md-8">Sering membuat suara atau gerakan yang mengganggu orang di sekitarnya</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis51" name="quis51" value="ya" class="form-check-input required"{{ old('quis51')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis51" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis51" name="quis51" value="tidak" class="form-check-input required" {{ old('quis51')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis51">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis52" class="mb-3 col-md-8">Sering bertindak melanggar norma sosial/ norma agama/ norma susila</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis52" name="quis52" value="ya" class="form-check-input required"{{ old('quis52')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis52" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis52" name="quis52" value="tidak" class="form-check-input required" {{ old('quis52')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis52">Tidak</label>
                                            </div>   
                                        </li>

                                        <h4 class="font-weight-medium">Aspek Sikap dan Prilaku</h4>
                                        <li>
                                            <label for="quis53" class="mb-3 col-md-8">Tidak ada/sedikit sekali kontak mata dengan orang lain</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis53" name="quis53" value="ya" class="form-check-input required"{{ old('quis53')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis53" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis53" name="quis53" value="tidak" class="form-check-input required" {{ old('quis53')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis53">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis54" class="mb-3 col-md-8">Tidak menunjukkan perbedaan ekspresi wajah secara jelas </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis54" name="quis54" value="ya" class="form-check-input required"{{ old('quis54')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis54" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis54" name="quis54" value="tidak" class="form-check-input required" {{ old('quis54')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis54">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis55" class="mb-3 col-md-8">Sering menunjukkan perilaku yang meledak-ledak tanpa alasan yang jelas</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis55" name="quis55" value="ya" class="form-check-input required"{{ old('quis55')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis55" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis55" name="quis55" value="tidak" class="form-check-input required" {{ old('quis55')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis55">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis56" class="mb-3 col-md-8">Menunjukkan perilaku yang tidak wajar</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis56" name="quis56" value="ya" class="form-check-input required"{{ old('quis56')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis56" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis56" name="quis56" value="tidak" class="form-check-input required" {{ old('quis56')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis56">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis57" class="mb-3 col-md-8">Sulit untuk diajak berkomunikasi baik secara lisan maupun isyarat</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis57" name="quis57" value="ya" class="form-check-input required"{{ old('quis57')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis57" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis57" name="quis57" value="tidak" class="form-check-input required" {{ old('quis57')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis57">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis58" class="mb-3 col-md-8">Cenderung menyendiri </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis58" name="quis58" value="ya" class="form-check-input required"{{ old('quis58')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis58" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis58" name="quis58" value="tidak" class="form-check-input required" {{ old('quis58')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis58">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis59" class="mb-3 col-md-8">Tidak peduli pada situasi di sekelilingnya</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis59" name="quis59" value="ya" class="form-check-input required"{{ old('quis59')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis59" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis59" name="quis59" value="tidak" class="form-check-input required" {{ old('quis59')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis59">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis60" class="mb-3 col-md-8">Sangat sensitif terhadap sentuhan, suara atau cahaya</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis60" name="quis60" value="ya" class="form-check-input required"{{ old('quis60')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis60" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis60" name="quis60" value="tidak" class="form-check-input required" {{ old('quis60')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis60">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis61" class="mb-3 col-md-8">Sering gelisah, mudah panik</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis61" name="quis61" value="ya" class="form-check-input required"{{ old('quis61')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis61" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis61" name="quis61" value="tidak" class="form-check-input required" {{ old('quis61')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis61">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis62" class="mb-3 col-md-8">Mempunyai kesulitan untuk duduk tenang</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis62" name="quis62" value="ya" class="form-check-input required"{{ old('quis62')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis62" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis62" name="quis62" value="tidak" class="form-check-input required" {{ old('quis62')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis62">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis63" class="mb-3 col-md-8">Mudah dikacaukan oleh rangsangan lain</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis63" name="quis63" value="ya" class="form-check-input required"{{ old('quis63')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis63" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis63" name="quis63" value="tidak" class="form-check-input required" {{ old('quis63')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis63">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis64" class="mb-3 col-md-8">Tidak sabar menunggu giliran ketika bermain atau dalam situasi kelompok</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis64" name="quis64" value="ya" class="form-check-input required"{{ old('quis64')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis64" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis64" name="quis64" value="tidak" class="form-check-input required" {{ old('quis64')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis64">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis65" class="mb-3 col-md-8">Sering menjawab pertanyaan sebelum pertanyaan lengkap diberikan</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis65" name="quis65" value="ya" class="form-check-input required"{{ old('quis65')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis65" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis65" name="quis65" value="tidak" class="form-check-input required" {{ old('quis65')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis65">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis66" class="mb-3 col-md-8">Sulit mengikuti instruksi atau perintah orang lain</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis66" name="quis66" value="ya" class="form-check-input required"{{ old('quis66')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis66" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis66" name="quis66" value="tidak" class="form-check-input required" {{ old('quis66')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis66">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis67" class="mb-3 col-md-8">Sulit mempertahankan perhatian dalam menyelesaikan tugas atau permainan</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis67" name="quis67" value="ya" class="form-check-input required"{{ old('quis67')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis67" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis67" name="quis67" value="tidak" class="form-check-input required" {{ old('quis67')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis67">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis68" class="mb-3 col-md-8">Sering berganti aktivitas, padahal aktivitas sebelumnya belum sempurna</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis68" name="quis68" value="ya" class="form-check-input required"{{ old('quis68')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis68" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis68" name="quis68" value="tidak" class="form-check-input required" {{ old('quis68')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis68">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis69" class="mb-3 col-md-8">Tidak bisa bermain dengan tenang</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis69" name="quis69" value="ya" class="form-check-input required"{{ old('quis69')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis69" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis69" name="quis69" value="tidak" class="form-check-input required" {{ old('quis69')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis69">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis70" class="mb-3 col-md-8">Sering berbicara secara berlebihan</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis70" name="quis70" value="ya" class="form-check-input required"{{ old('quis70')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis70" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis70" name="quis70" value="tidak" class="form-check-input required" {{ old('quis70')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis70">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis71" class="mb-3 col-md-8">Sering menyela (mengganggu) atau memaksakan kehendak kepada orang lain</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis71" name="quis71" value="ya" class="form-check-input required"{{ old('quis71')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis71" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis71" name="quis71" value="tidak" class="form-check-input required" {{ old('quis71')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis71">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis72" class="mb-3 col-md-8">Sering tidak memperhatikan apa yang dikatakan orang lain kepadanya</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis72" name="quis72" value="ya" class="form-check-input required"{{ old('quis72')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis72" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis72" name="quis72" value="tidak" class="form-check-input required" {{ old('quis72')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis72">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis73" class="mb-3 col-md-8">Sering kehilangan sesuatu yang penting baik di sekolah atau di rumah</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis73" name="quis73" value="ya" class="form-check-input required"{{ old('quis73')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis73" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis73" name="quis73" value="tidak" class="form-check-input required" {{ old('quis73')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis73">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis74" class="mb-3 col-md-8">Sering melakukan aktivitas-aktivitas fisik yang berpotensi bahaya</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis74" name="quis74" value="ya" class="form-check-input required"{{ old('quis74')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis74" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis74" name="quis74" value="tidak" class="form-check-input required" {{ old('quis74')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis74">Tidak</label>
                                            </div>   
                                        </li>
                                        <h4 class="font-weight-medium">Aspek Bakat Istimewa</h4>
                                        <li>
                                            <label for="quis75" class="mb-3 col-md-8">Bisa membaca lebih awal dari pada teman sebayanya</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis75" name="quis75" value="ya" class="form-check-input required"{{ old('quis75')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis75" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis75" name="quis75" value="tidak" class="form-check-input required" {{ old('quis75')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis75">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis76" class="mb-3 col-md-8">Kemampuan membacanya melebihi teman sebayanya</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis76" name="quis76" value="ya" class="form-check-input required"{{ old('quis76')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis76" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis76" name="quis76" value="tidak" class="form-check-input required" {{ old('quis76')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis76">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis77" class="mb-3 col-md-8">Memiliki perbendaharaan kata yang lebih banyak dari pada teman sebayanya</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis77" name="quis77" value="ya" class="form-check-input required"{{ old('quis77')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis77" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis77" name="quis77" value="tidak" class="form-check-input required" {{ old('quis77')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis77">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis78" class="mb-3 col-md-8">Mempunyai rasa ingin tahu dan minat yang kuat terhadap berbagai hal</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis78" name="quis78" value="ya" class="form-check-input required"{{ old('quis78')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis78" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis78" name="quis78" value="tidak" class="form-check-input required" {{ old('quis78')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis78">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis79" class="mb-3 col-md-8">Mempunyai inisiatif dan mandiri</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis79" name="quis79" value="ya" class="form-check-input required"{{ old('quis79')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis79" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis79" name="quis79" value="tidak" class="form-check-input required" {{ old('quis79')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis79">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis80" class="mb-3 col-md-8">Menunjukkan keaslian (orisinalitas) dalam berpendapat/berkreasi</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis80" name="quis80" value="ya" class="form-check-input required"{{ old('quis80')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis80" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis80" name="quis80" value="tidak" class="form-check-input required" {{ old('quis80')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis80">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis81" class="mb-3 col-md-8">Dapat memberikan banyak gagasan</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis81" name="quis81" value="ya" class="form-check-input required"{{ old('quis81')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis81" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis81" name="quis81" value="tidak" class="form-check-input required" {{ old('quis81')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis81">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis82" class="mb-3 col-md-8">Luwes dalam berpikir </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis82" name="quis82" value="ya" class="form-check-input required"{{ old('quis82')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis82" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis82" name="quis82" value="tidak" class="form-check-input required" {{ old('quis82')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis82">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis83" class="mb-3 col-md-8">Cepat tanggap terhadap situasi</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis83" name="quis83" value="ya" class="form-check-input required"{{ old('quis83')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis83" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis83" name="quis83" value="tidak" class="form-check-input required" {{ old('quis83')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis83">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis84" class="mb-3 col-md-8">Mempunyai pengamatan yang tajam </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis84" name="quis84" value="ya" class="form-check-input required"{{ old('quis84')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis84" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis84" name="quis84" value="tidak" class="form-check-input required" {{ old('quis84')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis84">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis85" class="mb-3 col-md-8">Dapat Berkonsentrasi dalam jangka waktu yang panjang terutama dalam tugas atau bidang yang diminati</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis85" name="quis85" value="ya" class="form-check-input required"{{ old('quis85')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis85" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis85" name="quis85" value="tidak" class="form-check-input required" {{ old('quis85')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis85">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis86" class="mb-3 col-md-8">Berpikir kritis, juga terhadap diri sendiri </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis86" name="quis86" value="ya" class="form-check-input required"{{ old('quis86')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis86" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis86" name="quis86" value="tidak" class="form-check-input required" {{ old('quis86')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis86">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis87" class="mb-3 col-md-8">Senang mencoba hal-hal baru</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis87" name="quis87" value="ya" class="form-check-input required"{{ old('quis87')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis87" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis87" name="quis87" value="tidak" class="form-check-input required" {{ old('quis87')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis87">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis88" class="mb-3 col-md-8">Mempunyai daya abstraksi, konseptualisasi dan sintesis yang tinggi </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis88" name="quis88" value="ya" class="form-check-input required"{{ old('quis88')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis88" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis88" name="quis88" value="tidak" class="form-check-input required" {{ old('quis88')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis88">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis89" class="mb-3 col-md-8">Senang terhadap kegiatan intelektual dan pemecahan masalah</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis89" name="quis89" value="ya" class="form-check-input required"{{ old('quis89')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis89" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis89" name="quis89" value="tidak" class="form-check-input required" {{ old('quis89')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis89">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis90" class="mb-3 col-md-8">Cepat menangkap hubungan sebab akibat </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis90" name="quis90" value="ya" class="form-check-input required"{{ old('quis90')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis90" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis90" name="quis90" value="tidak" class="form-check-input required" {{ old('quis90')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis90">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis91" class="mb-3 col-md-8">Berperilaku terarah terhadap tujuan</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis91" name="quis91" value="ya" class="form-check-input required"{{ old('quis91')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis91" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis91" name="quis91" value="tidak" class="form-check-input required" {{ old('quis91')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis91">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis92" class="mb-3 col-md-8">Mempunyai daya imajinasi yang kuat </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis92" name="quis92" value="ya" class="form-check-input required"{{ old('quis92')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis92" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis92" name="quis92" value="tidak" class="form-check-input required" {{ old('quis92')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis92">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis93" class="mb-3 col-md-8">Mempunyai banyak kegemaran/hobi</label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis93" name="quis93" value="ya" class="form-check-input required"{{ old('quis93')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis93" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis93" name="quis93" value="tidak" class="form-check-input required" {{ old('quis93')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis93">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis94" class="mb-3 col-md-8">Mempunyai daya ingat yang kuat </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis94" name="quis94" value="ya" class="form-check-input required"{{ old('quis94')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis94" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis94" name="quis94" value="tidak" class="form-check-input required" {{ old('quis94')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis94">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis95" class="mb-3 col-md-8">Tidak cepat puas dengan prestasinya </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis95" name="quis95" value="ya" class="form-check-input required"{{ old('quis95')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis95" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis95" name="quis95" value="tidak" class="form-check-input required" {{ old('quis95')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis95">Tidak</label>
                                            </div>   
                                        </li>
                                        <li>
                                            <label for="quis96" class="mb-3 col-md-8">Menginginkan kebebasan dalam gerakan dan tindakan </label> 
                                            <div class="form-check form-check-inline ">
                                                <input type="radio" id="quis96" name="quis96" value="ya" class="form-check-input required"{{ old('quis96')=="ya" ? 'checked' : '' }} >
                                                <label class="form-check-label" for="quis96" >Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="quis96" name="quis96" value="tidak" class="form-check-input required" {{ old('quis96')=="tidak" ? 'checked' : '' }}>
                                                <label class="form-check-label" for="quis96">Tidak</label>
                                            </div>   
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </section>                 
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
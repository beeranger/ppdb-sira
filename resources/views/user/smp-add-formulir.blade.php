@extends('User.main')

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
                    <form action="{{ route('user.store-formulir',2) }}" method="POST" class="validation-wizard wizard-circle mt-5" enctype="multipart/form-data" id="form-sd" >
                        @csrf
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
                                                <input type="radio" id="customRadio8" name="jenis_kelamin" value="Laki-laki" class="form-check-input required">
                                                <label class="form-check-label" for="">Laki-laki</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio9" name="jenis_kelamin" value="Perempuan" class="form-check-input required">
                                                <label class="form-check-label" for="">Perempuan</label>
                                            </div>
                                        </div>
                                        @error('tempat_tinggal')
                                        <div class="text-danger">
                                            Pilih salah satu opsi
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="nik">Nomor Induk Kependudukan (NIK):</label>
                                        <input type="number" class="form-control required" id="nik" name="nik" value="{{ old('nik') }}" > 
                                        @error('nik')<div class="text-danger"> masukan 16 digit NIK</div>@enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="nisn">Nomor Induk Siswa Nasional :</label>
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
                                        <input type="text" class="form-control required" id="cita-cita" name="cita-cita" value="{{ old('cita-cita') }}">
                                    </div>                
                                    <div class="mb-3">
                                        <label for="">Alamat :</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat">
                                    </div>              

                                    <div class="mb-3">
                                        <label for="">Tempat tinggal :</label>
                                        <div class="c-inputs-stacked">
                                            <div class="form-check">
                                                <input type="radio" id="customRadio8" name="tempat_tinggal" value="Bersama orang tua" class="form-check-input required">
                                                <label class="form-check-label" for="">Bersama Orang tua</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio9" name="tempat_tinggal" value="Bersama wali" class="form-check-input required">
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
                                                <input type="radio" id="customRadio6" name="berkebutuhan_khusus" value="ya" class="form-check-input required" >
                                                <label class="form-check-label" for="customRadio6" >Ya</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio7" name="berkebutuhan_khusus" value="tidak" class="form-check-input required" >
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
                                        <input type="text" class="form-control" id="jenis_berkebutuhan_khusus" name="jenis_berkebutuhan_khusus">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Saran transportasi ke sekolah :</label>
                                        <div class="c-inputs-stacked">
                                            <div class="form-check">
                                                <input type="radio" id="customRadio10" name="transport" value="Sepeda" class="form-check-input">
                                                <label class="form-check-label" for="">Sepeda</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio11" name="transport" value="Sepeda Motor" class="form-check-input" >
                                                <label class="form-check-label" for="">Sepeda Motor</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio12" name="transport" value="Mobil Pribadi" class="form-check-input" >
                                                <label class="form-check-label" for="">Mobil Pribadi</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio13" name="transport" value="Angkutan umum" class="form-check-input" >
                                                <label class="form-check-label" for="">Angkutan umum</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="customRadio14" name="transport" value="Ojek" class="form-check-input" >
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
                                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="{{ old('nama_ayah') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Tempat lahir :</label>
                                        <input type="text" class="form-control" id="tempat_lahir_ayah" name="tempat_lahir_ayah" value="{{ old('tempat_lahir_ayah') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="date1">Tanggal lahir:</label>
                                        <input type="date" class="date form-control" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Nomor Handphone:</label>
                                        <input type="number" class="form-control" id="no_handphone_ayah" name="no_handphone_ayah" value="{{ old('no_handphone_ayah') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Pendidikan Terakhir :</label>
                                        <select class="form-select" id="pendidikan_terakhir_ayah" name="pendidikan_terakhir_ayah">
                                            <option value="">-- pilih --</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
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
                                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alamat Tempat Kerja :</label>
                                        <input type="text" class="form-control" id="alamat_kerja_ayah" name="alamat_kerja_ayah">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Penghasilan :</label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="penghasilan_ayah" name="penghasilan_ayah" value="500rb-2jt">
                                            <label class="fork-check-label" for="">Rp.500.000-Rp.2.000.000 </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="penghasilan_ayah" name="penghasilan_ayah" value="2jt-5jt">
                                            <label class="form-check-label" for="">Rp.2.000.000-Rp.5.000.000 </label>
                                            
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="penghasilan_ayah" name="penghasilan_ayah" value="5jt-20jt" >
                                            <label class="form-check-label" for="">Rp.5.000.000-Rp.20.000.000 </label>
                                            
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="penghasilan_ayah" name="penghasilan_ayah" value=">20jt" >
                                            <label class="form-check-label" for=""> lebih dari Rp.20.000.000</label>
                                        
                                        </div>
                                    </div>
                                    @error('penghasilan_ayah')
                                        <div class="text-danger">
                                            Pilih salah satu opsi
                                        </div>
                                    @enderror
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
                                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Tempat lahir :</label>
                                        <input type="text" class="form-control" id="tempat_lahir_ibu" name="tempat_lahir_ibu">
                                    </div>
                                    <div class="mb-3">
                                        <label for="date1">Tanggal lahir:</label>
                                        <input type="date" class="date form-control" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Nomor Handphone:</label>
                                        <input type="number" class="form-control" id="no_handphone_ibu" name="no_handphone_ibu" value="{{ old('no_handphone_ibu') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Pendidikan Terakhir :</label>
                                        <select class="form-select" id="pendidikan_terakhir_ibu" name="pendidikan_terakhir_ibu">
                                            <option value="">-- pilih --</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>                                
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Pekerjaan  :</label>
                                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alamat Tempat Kerja :</label>
                                        <input type="text" class="form-control" id="alamat_kerja_ibu" name="alamat_kerja_ibu">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Penghasilan :</label>                                        
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="penghasilan_ibu" name="penghasilan_ibu" value="500rb-2jt" >
                                            <label class="fork-check-label" for="">Rp.500.000-Rp.2.000.000 </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="penghasilan_ibu" name="penghasilan_ibu" value="2jt-5jt" >
                                            <label class="form-check-label" for="">Rp.2.000.000-Rp.5.000.000 </label>
                                            
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="penghasilan_ibu" name="penghasilan_ibu" value="5jt-20jt" >
                                            <label class="form-check-label" for="">Rp.5.000.000-Rp.20.000.000 </label>
                                            
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="penghasilan_ibu" name="penghasilan_ibu" value=">20jt" >
                                            <label class="form-check-label" for=""> lebih dari Rp.20.000.000</label>
                                        
                                        </div>
                                    </div>
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
                                        <input type="text" class="form-control" id="nama_wali" name="nama_wali">
                                    </div>
                                    <div class="mb-3">
                                            <label for="">Tempat lahir :</label>
                                            <input type="text" class="form-control" id="tempat_lahir_wali" name="tempat_lahir_wali">
                                    </div>
                                    <div class="mb-3">
                                        <label for="date1">Tanggal lahir:</label>
                                        <input type="date" class="date form-control" id="tanggal_lahir_wali" name="tanggal_lahir_wali">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Nomor Handphone:</label>
                                        <input type="number" class="form-control" id="no_handphone_wali" name="no_handphone_wali" value="{{ old('no_handphone_wali') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Pendidikan Terakhir :</label>
                                        <select class="form-select" id="pendidikan_terakhir_wali" name="pendidikan_terakhir_wali">
                                            <option value="">-- pilih --</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>      
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Pekerjaan  :</label>
                                        <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alamat Tempat Kerja :</label>
                                        <input type="text" class="form-control" id="alamat_kerja_wali" name="alamat_kerja_wali">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Penghasilan :</label>                                        
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="penghasilan_wali" name="penghasilan_wali" value="500rb-2jt" >
                                            <label class="fork-check-label" for="">Rp.500.000-Rp.2.000.000 </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="penghasilan_wali" name="penghasilan_wali" value="2jt-5jt" >
                                            <label class="form-check-label" for="">Rp.2.000.000-Rp.5.000.000 </label>
                                            
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="penghasilan_wali" name="penghasilan_wali" value="5jt-20jt" >
                                            <label class="form-check-label" for="">Rp.5.000.000-Rp.20.000.000 </label>
                                            
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="penghasilan_wali" name="penghasilan_wali" value=">20jt" >
                                            <label class="form-check-label" for=""> lebih dari Rp.20.000.000</label>
                                    
                                        </div>
                                    </div>
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
                                        <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan">
                                        <label class="text-muted"> Centimeter</label>
                                    </div>                                                      
                                    <div class="mb-3">
                                        <label for="">Berat Badan :</label>
                                        <input type="number" class="form-control" id="berat_badan" name="berat_badan">
                                        <label class="text-muted"> Kilogram</label>
                                    </div>                                                      
                                    <div class="mb-3">
                                        <label for="">Penyakit khusus :</label>
                                        <input type="text" class="form-control" id="penyakit_khusus" name="penyakit_khusus">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Golongan Darah :</label>
                                        <select class="form-select" id="golongan_darah" name="golongan_darah">
                                            <option value="">-- pilih --</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="O">O</option>
                                            <option value="AB">AB</option>
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
                                                <input type="radio" id="customRadio6" name="kelainan_jasmani" value="ya" class="form-check-input">
                                                <label class="form-check-label" for="">Ya</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="kelainan_jasmani" name="kelainan_jasmani" value="tidak" class="form-check-input" >
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
                                        <input type="text" class="form-control" id="kelainan_jasmani_ya" name="kelainan_jasmani_ya">
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Jarak dari rumah ke sekolah :</label>
                                        <input type="number" class="form-control" id="jarak" name="jarak">
                                        <label class="text-muted"> km</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Waktu tempuh dari rumah ke sekolah :</label>
                                        <input type="number" class="form-control" id="waktu" name="waktu">
                                        <label class="text-muted"> Menit</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Anak ke :</label>
                                        <input type="number" class="form-control" id="anak_ke" name="anak_ke">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Jumlah saudara :</label>
                                        <input type="number" class="form-control" id="jumlah_saudara" name="jumlah_saudara">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Sebutkan nama kakak/adik kandung (nama,usia, kakak/adik) :
                                            <p class="text-muted">contoh: (Maryam,12 tahun,kakak),(Faris,2 tahun, adik)</p>
                                        </label>
                                        <textarea name="saudara_kandung" id="saudara_kandung" rows="4" class="form-control"></textarea>
                                    </div> 
                                    <div class="mb-3">
                                        <label for="">Sebutkan aggota keluarga lain dirumah (nama,usia, hubunga keluarga) :
                                            <p class="text-muted">contoh: (Siti,56 tahun,nenek),(Budi, 57 tahun, Kakek)</p>
                                        </label>
                                        <textarea name="daftar_keluarga" id="daftar_keluarga" rows="4" class="form-control"></textarea>
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
                                        <input type="text" class="form-control" id="nama_sd" name="nama_paud">
                                    </div>                                        
                                    <div class="mb-3">
                                        <label for="">Alamat SD:</label>
                                        <input type="text" class="form-control" id="alamat_sd" name="alamat_paud">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 9 -->
                        <h6>Upload bukti pembayaran</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="">Bank Tujuan</label>
                                        <input type="text" class="form-control required" id="bank" name="bank">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Nomor Rekening :</label>
                                        <input type="text" class="form-control required" id="rekening" name="rekening">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""> Bukti pembayaran</label>
                                    {{-- <form class="mb-3" action="{{ route('user.store-formulir') }}" method="POST">
                                        @csrf
                                    </form> --}}
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input class="form-control required" type="file" id="photo_url" name="photo_url" aria-describedby="fileHelp">
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
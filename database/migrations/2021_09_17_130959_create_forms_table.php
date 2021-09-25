<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_verified')->default(0);
            $table->foreignId('user_id');
            $table->foreignId('unit_id');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('jenis_kelamin');
            $table->char('nik',16);
            $table->char('nisn',10);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama')->nullable();
            $table->string('hobi')->nullable();
            $table->string('cita2')->nullable();

            $table->string('alamat')->nullable();
            $table->string('tempat_tinggal')->nullable();
            $table->string('berkebutuhan_khusus')->default('tidak');
            $table->text('jenis_berkebutuhan_khusus')->nullable();
            $table->string('transport')->nullable();

            $table->string('nama_ayah')->nullable();
            $table->string('tempat_lahir_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();            
            $table->char('no_handphone_ayah')->nullable();
            $table->string('pendidikan_terakhir_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('alamat_kerja_ayah')->nullable();
            $table->string('penghasilan_ayah')->nullable();

            $table->string('nama_ibu')->nullable();
            $table->string('tempat_lahir_ibu')->nullable();
            $table->char('no_handphone_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->string('pendidikan_terakhir_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('alamat_kerja_ibu')->nullable();
            $table->string('penghasilan_ibu')->nullable();

            $table->string('nama_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->date('tanggal_lahir_wali')->nullable();            
            $table->char('no_handphone_wali')->nullable();
            $table->string('pendidikan_terakhir_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('alamat_kerja_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();


            $table->string('tinggi_badan')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('penyakit_khusus')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('kelainan_jasmani')->nullable();
            $table->string('kelainan_jasmani_ya')->nullable();
            $table->string('jarak')->nullable();
            $table->string('waktu')->nullable();
            $table->string('anak_ke')->nullable();
            $table->string('jumlah_saudara')->nullable();           
            $table->text('saudara_kandung')->nullable();           
            $table->text('daftar_keluarga')->nullable();           


            $table->string('nama_paud')->nullable();           
            $table->string('alamat_paud')->nullable();           
            $table->string('nama_tk')->nullable();           
            $table->string('alamat_tk')->nullable();    
            $table->string('nama_sd')->nullable();           
            $table->string('alamat_sd')->nullable();    
            
            
            $table->text('kegiatan1')->nullable();           
            $table->text('kegiatan2')->nullable();           
            $table->text('kegiatan3')->nullable();           
            $table->text('kegiatan4')->nullable();           
            $table->text('kegiatan5')->nullable();           
            $table->text('kegiatan6')->nullable();           
            $table->text('kegiatan7')->nullable(); 
            
            
            $table->string('tumbuh1')->nullable();           
            $table->string('tumbuh1a')->nullable();           
            $table->string('tumbuh2a')->nullable();           
            $table->string('tumbuh2a1')->nullable();           
            $table->string('tumbuh2a2')->nullable();           
            $table->string('tumbuh2b')->nullable();           
            $table->string('tumbuh2c')->nullable(); 
                      
            $table->text('tumbuh3')->nullable();           
            $table->text('tumbuh4')->nullable();           
            $table->text('tumbuh5')->nullable();           
            $table->text('tumbuh6')->nullable();           
            $table->text('tumbuh7')->nullable();
            
            
            $table->string('bank')->nullable();     
            $table->string('rekening')->nullable();     
            $table->string('photo_url')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}

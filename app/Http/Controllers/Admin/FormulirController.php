<?php

namespace App\Http\Controllers\Admin;

use PDF;
use App\Models\Form;
use App\Models\Unit;
use App\Models\Photo;
use App\Models\Quitioner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Unit $unit)
    {
        return view('admin.list-formulir',[
            'forms'=> $unit->forms->load('unit'),
            'unit'=>$unit
        ]);
        // if ($unit->id ==1){
        // }elseif($unit->id ==2){
        // return view('admin.smp-add-formulir');
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Unit $unit)
    {
        if ($unit->id ==1){
            return view('admin.sd-add-formulir');
        }elseif($unit->id ==2){
            return view('admin.smp-add-formulir');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Unit $unit)
    {
        $request->validate([
            'nama_lengkap'=>'required|string|max:255',
            'nama_panggilan'=>'required|string|max:255',
            'tanggal_lahir'=>'required|date',
            'nik'=>'required|min:16',
            'nisn'=>'required|min:10',
            // 'photo_url' => 'required|file|image|mimes:jpeg,png,jpg|max:5048',
        ]);
        $imgname = "image_not_found.jpg";
        if ($request->hasFile('photo_url')){
            $filename_ext = $request->file('photo_url')->getClientOriginalName();
            // GET FILENAME WITHOUT EXTENSION
            $filename = pathinfo($filename_ext, PATHINFO_FILENAME);
            // GET EXTENSION
            $ext = $request->file('photo_url')->getClientOriginalExtension();
            //FILNAME TO STORE
            $imgname = $filename.'_'.time().'.'.$ext;
            // $path = Storage::putFileAs('public/uploads/', $request->file('photo_url'),$imgname);
            // $path = $request->file('photo_url')->storeAs('public/galeri', $imgname);
            $file = request()->file('photo_url');
            Storage::disk('public')->putFileAs('bukti-bayar/', $request->file('photo_url'),$imgname);
            Photo::create([
                    'url' => $imgname,
                ]);        
        }
        if ( $unit->id ==1){
            $form = Form::firstOrCreate([
                'user_id' =>  Auth::user()->id,
                'unit_id' => $unit->id ,
                'nama_lengkap'=> $request->nama_lengkap,
                'nama_panggilan'=> $request->nama_panggilan,
                'jenis_kelamin'=> $request->jenis_kelamin,
                'nik'=>$request->nik,
                'nisn'=>$request->nisn,
                'tempat_lahir' =>$request->tempat_lahir,
                'tanggal_lahir' =>$request->tanggal_lahir,
                'agama' =>$request->agama,
                'hobi' =>$request->hobi,
                'cita2' =>$request->cita2,
    
                'alamat' =>$request->alamat,
                'tempat_tinggal' =>$request->tempat_tinggal,
                'berkebutuhan_khusus' =>$request->berkebutuhan_khusus,
                'jenis_berkebutuhan_khusus' =>$request->jenis_berkebutuhan_khusus,
                'transport' =>$request->transport,
    
                'nama_ayah' =>$request->nama_ayah,
                'tempat_lahir_ayah' =>$request->tempat_lahir_ayah,
                'tanggal_lahir_ayah' =>$request->tanggal_lahir_ayah,
                'no_handphone_ayah' =>$request->no_handphone_ayah,
                'pendidikan_terakhir_ayah' =>$request->pendidikan_terakhir_ayah,
                'pekerjaan_ayah' =>$request->pekerjaan_ayah,
                'alamat_kerja_ayah' =>$request->alamat_kerja_ayah,
                'penghasilan_ayah' =>$request->penghasilan_ayah,
    
                'nama_ibu' =>$request->nama_ibu,
                'tempat_lahir_ibu' =>$request->tempat_lahir_ibu,
                'tanggal_lahir_ibu' =>$request->tanggal_lahir_ibu,
                'no_handphone_ibu' =>$request->no_handphone_ibu,
                'pendidikan_terakhir_ibu' =>$request->pendidikan_terakhir_ibu,
                'pekerjaan_ibu' =>$request->pekerjaan_ibu,
                'alamat_kerja_ibu' =>$request->alamat_kerja_ibu,
                'penghasilan_ibu' =>$request->penghasilan_ibu,
    
                'nama_wali' =>$request->nama_wali,
                'tempat_lahir_wali' =>$request->tempat_lahir_wali,
                'tanggal_lahir_wali' =>$request->tanggal_lahir_wali,
                'no_handphone_wali' =>$request->no_handphone_wali,
                'pendidikan_terakhir_wali' =>$request->pendidikan_terakhir_wali,
                'pekerjaan_wali' =>$request->pekerjaan_wali,
                'alamat_kerja_wali' =>$request->alamat_kerja_wali,
                'penghasilan_wali' =>$request->penghasilan_wali,
    
                'tinggi_badan' =>$request->tinggi_badan,
                'berat_badan' =>$request->berat_badan,
                'penyakit_khusus' =>$request->penyakit_khusus,
                'golongan_darah' =>$request->golongan_darah,
                'kelainan_jasmani' =>$request->kelainan_jasmani,
                'kelainan_jasmani_ya' =>$request->kelainan_jasmani_ya,
                'jarak' =>$request->jarak,
                'waktu' =>$request->waktu,
                'anak_ke' =>$request->anak_ke,
                'jumlah_saudara' =>$request->jumlah_saudara,
                'saudara_kandung' =>$request->saudara_kandung,
                'daftar_keluarga' =>$request->daftar_keluarga,
    
                'nama_paud' =>$request->nama_paud,
                'alamat_paud' =>$request->alamat_paud,
                'nama_tk' =>$request->nama_tk,
                'alamat_tk' =>$request->alamat_tk,
                'nama_sd' =>$request->nama_sd,
                'alamat_sd' =>$request->alamat_sd,
    
                'kegiatan1' =>$request->kegiatan1,
                'kegiatan2' =>$request->kegiatan2,
                'kegiatan3' =>$request->kegiatan3,
                'kegiatan4' =>$request->kegiatan4,
                'kegiatan5' =>$request->kegiatan5,
                'kegiatan6' =>$request->kegiatan6,
                'kegiatan7' =>$request->kegiatan7,
    
                'tumbuh1' =>$request->tumbuh1,
                'tumbuh1a' =>$request->tumbuh1a,
                'tumbuh2a' =>$request->tumbuh2a,
                'tumbuh2a1' =>$request->tumbuh2a1,
                'tumbuh2a2' =>$request->tumbuh2a2,
                'tumbuh2b' =>$request->tumbuh2b,
                'tumbuh2c' =>$request->tumbuh2c,
                
                'tumbuh3' =>$request->tumbuh3,
                'tumbuh4' =>$request->tumbuh4,
                'tumbuh5' =>$request->tumbuh5,
                'tumbuh6' =>$request->tumbuh6,
                'tumbuh7' =>$request->tumbuh7,
    
                'bank' =>$request->bank,
                'rekening' =>$request->rekening,
                'kontak' =>$request->kontak,
                'photo_url' => $imgname,
    
            ]);
            
            Quitioner::firstOrCreate([
                'user_id'=>Auth::user()->id,
                'form_id'=>$form->id,                
            ]);
        }elseif( $unit->id ==2){
            Form::firstOrCreate([
                'user_id' =>  Auth::user()->id,
                'unit_id' => $unit->id ,
                'nama_lengkap'=> $request->nama_lengkap,
                'nama_panggilan'=> $request->nama_panggilan,
                'jenis_kelamin'=> $request->jenis_kelamin,
                'nik'=>$request->nik,
                'nisn'=>$request->nisn,
                'tempat_lahir' =>$request->tempat_lahir,
                'tanggal_lahir' =>$request->tanggal_lahir,
                'agama' =>$request->agama,
                'hobi' =>$request->hobi,
                'cita2' =>$request->cita2,
    
                'alamat' =>$request->alamat,
                'tempat_tinggal' =>$request->tempat_tinggal,
                'berkebutuhan_khusus' =>$request->berkebutuhan_khusus,
                'jenis_berkebutuhan_khusus' =>$request->jenis_berkebutuhan_khusus,
                'transport' =>$request->transport,
    
                'nama_ayah' =>$request->nama_ayah,
                'tempat_lahir_ayah' =>$request->tempat_lahir_ayah,
                'tanggal_lahir_ayah' =>$request->tanggal_lahir_ayah,
                'no_handphone_ayah' =>$request->no_handphone_ayah,
                'pendidikan_terakhir_ayah' =>$request->pendidikan_terakhir_ayah,
                'pekerjaan_ayah' =>$request->pekerjaan_ayah,
                'alamat_kerja_ayah' =>$request->alamat_kerja_ayah,
                'penghasilan_ayah' =>$request->penghasilan_ayah,
    
                'nama_ibu' =>$request->nama_ibu,
                'tempat_lahir_ibu' =>$request->tempat_lahir_ibu,
                'tanggal_lahir_ibu' =>$request->tanggal_lahir_ibu,
                'no_handphone_ibu' =>$request->no_handphone_ibu,
                'pendidikan_terakhir_ibu' =>$request->pendidikan_terakhir_ibu,
                'pekerjaan_ibu' =>$request->pekerjaan_ibu,
                'alamat_kerja_ibu' =>$request->alamat_kerja_ibu,
                'penghasilan_ibu' =>$request->penghasilan_ibu,
    
                'nama_wali' =>$request->nama_wali,
                'tempat_lahir_wali' =>$request->tempat_lahir_wali,
                'tanggal_lahir_wali' =>$request->tanggal_lahir_wali,
                'no_handphone_wali' =>$request->no_handphone_wali,
                'pendidikan_terakhir_wali' =>$request->pendidikan_terakhir_wali,
                'pekerjaan_wali' =>$request->pekerjaan_wali,
                'alamat_kerja_wali' =>$request->alamat_kerja_wali,
                'penghasilan_wali' =>$request->penghasilan_wali,
    
                'tinggi_badan' =>$request->tinggi_badan,
                'berat_badan' =>$request->berat_badan,
                'penyakit_khusus' =>$request->penyakit_khusus,
                'golongan_darah' =>$request->golongan_darah,
                'kelainan_jasmani' =>$request->kelainan_jasmani,
                'kelainan_jasmani_ya' =>$request->kelainan_jasmani_ya,
                'jarak' =>$request->jarak,
                'waktu' =>$request->waktu,
                'anak_ke' =>$request->anak_ke,
                'jumlah_saudara' =>$request->jumlah_saudara,
                'saudara_kandung' =>$request->saudara_kandung,
                'daftar_keluarga' =>$request->daftar_keluarga,
    
                'nama_paud' =>$request->nama_paud,
                'alamat_paud' =>$request->alamat_paud,
                'nama_tk' =>$request->nama_tk,
                'alamat_tk' =>$request->alamat_tk,
                'nama_sd' =>$request->nama_sd,
                'alamat_sd' =>$request->alamat_sd,
    
                'bank' =>$request->bank,
                'rekening' =>$request->rekening,
                'kontak' =>$request->kontak,
                'photo_url' =>$imgname,
    
            ]);
        }
        
        return redirect()->route('admin.list-formulir',$unit->id);
        // return $request->all();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        $data=[
            'form' => Form::findOrFail($form->id),
        ];

        return view('admin.view-formulir')->with($data);
       
    }

    public function createPDF(Form $form) {
        // retreive all records from db
        $data=[
            'form' =>Form::findOrFail($form->id),            
        ];

        if ($form->unit_id == 1){
            $pdf = PDF::loadView('admin.sd-pdf-formulir', $data);
            // return view('admin.sd-pdf-formulir')->with($data);
        }elseif($form->unit_id ==2){
            $pdf = PDF::loadView('admin.smp-pdf-formulir', $data);
        }
        
  
        // download PDF file with download method
        return $pdf->download($form->formulirID().'_'.$form->nama_lengkap.'.pdf');
      }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        $data=[
            'form' => Form::findOrFail($form->id),
        ];

        return view('admin.edit-formulir')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        $request->validate([
            'nama_lengkap'=>'required|string|max:255',
            'nama_panggilan'=>'required|string|max:255',
            'tanggal_lahir'=>'required|date',
            'nik'=>'required|min:16',
            'nisn'=>'required|min:10',
            // 'photo_url' => 'required|file|image|mimes:jpeg,png,jpg|max:5048',
        ]);
        $imgname = "image_not_found.jpg";
        if ($request->hasFile('photo_url')){
            $filename_ext = $request->file('photo_url')->getClientOriginalName();
            // GET FILENAME WITHOUT EXTENSION
            $filename = pathinfo($filename_ext, PATHINFO_FILENAME);
            // GET EXTENSION
            $ext = $request->file('photo_url')->getClientOriginalExtension();
            //FILNAME TO STORE
            $imgname = $filename.'_'.time().'.'.$ext;
            // $path = Storage::putFileAs('public/uploads/', $request->file('photo_url'),$imgname);
            // $path = $request->file('photo_url')->storeAs('public/galeri', $imgname);
            $file = request()->file('photo_url');
            Storage::disk('public')->putFileAs('bukti-bayar/', $request->file('photo_url'),$imgname);
            Photo::create([
                    'url' => $imgname,
                ]);        
        }
        Form::where('id', $form->id)->update([
            'user_id' =>  $form->user_id,
            'unit_id' => $form->unit_id ,
            'nama_lengkap'=> $request->nama_lengkap,
            'nama_panggilan'=> $request->nama_panggilan,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'nik'=>$request->nik,
            'nisn'=>$request->nisn,
            'tempat_lahir' =>$request->tempat_lahir,
            'tanggal_lahir' =>$request->tanggal_lahir,
            'agama' =>$request->agama,
            'hobi' =>$request->hobi,
            'cita2' =>$request->cita2,

            'alamat' =>$request->alamat,
            'tempat_tinggal' =>$request->tempat_tinggal,
            'berkebutuhan_khusus' =>$request->berkebutuhan_khusus,
            'jenis_berkebutuhan_khusus' =>$request->jenis_berkebutuhan_khusus,
            'transport' =>$request->transport,

            'nama_ayah' =>$request->nama_ayah,
            'tempat_lahir_ayah' =>$request->tempat_lahir_ayah,
            'tanggal_lahir_ayah' =>$request->tanggal_lahir_ayah,
            'no_handphone_ayah' =>$request->no_handphone_ayah,
            'pendidikan_terakhir_ayah' =>$request->pendidikan_terakhir_ayah,
            'pekerjaan_ayah' =>$request->pekerjaan_ayah,
            'alamat_kerja_ayah' =>$request->alamat_kerja_ayah,
            'penghasilan_ayah' =>$request->penghasilan_ayah,

            'nama_ibu' =>$request->nama_ibu,
            'tempat_lahir_ibu' =>$request->tempat_lahir_ibu,
            'tanggal_lahir_ibu' =>$request->tanggal_lahir_ibu,
            'no_handphone_ibu' =>$request->no_handphone_ibu,
            'pendidikan_terakhir_ibu' =>$request->pendidikan_terakhir_ibu,
            'pekerjaan_ibu' =>$request->pekerjaan_ibu,
            'alamat_kerja_ibu' =>$request->alamat_kerja_ibu,
            'penghasilan_ibu' =>$request->penghasilan_ibu,

            'nama_wali' =>$request->nama_wali,
            'tempat_lahir_wali' =>$request->tempat_lahir_wali,
            'tanggal_lahir_wali' =>$request->tanggal_lahir_wali,
            'no_handphone_wali' =>$request->no_handphone_wali,
            'pendidikan_terakhir_wali' =>$request->pendidikan_terakhir_wali,
            'pekerjaan_wali' =>$request->pekerjaan_wali,
            'alamat_kerja_wali' =>$request->alamat_kerja_wali,
            'penghasilan_wali' =>$request->penghasilan_wali,

            'tinggi_badan' =>$request->tinggi_badan,
            'berat_badan' =>$request->berat_badan,
            'penyakit_khusus' =>$request->penyakit_khusus,
            'golongan_darah' =>$request->golongan_darah,
            'kelainan_jasmani' =>$request->kelainan_jasmani,
            'kelainan_jasmani_ya' =>$request->kelainan_jasmani_ya,
            'jarak' =>$request->jarak,
            'waktu' =>$request->waktu,
            'anak_ke' =>$request->anak_ke,
            'jumlah_saudara' =>$request->jumlah_saudara,
            'saudara_kandung' =>$request->saudara_kandung,
            'daftar_keluarga' =>$request->daftar_keluarga,

            'nama_paud' =>$request->nama_paud,
            'alamat_paud' =>$request->alamat_paud,
            'nama_tk' =>$request->nama_tk,
            'alamat_tk' =>$request->alamat_tk,
            'nama_sd' =>$request->nama_sd,
            'alamat_sd' =>$request->alamat_sd,

            'bank' =>$request->bank,
            'rekening' =>$request->rekening,
            'kontak' =>$request->kontak,
            'photo_url' =>$imgname,

        ]);
        $request->session()->flash('status', 'Form '.$form->nama_lengkap.' berhasil diperbaharui');
        return redirect()->route('admin.list-formulir',$form->unit_id);
        // return back();
    }

    public function verify(Request $request, Form $form)
    {
        Form::where('id',$form->id)->update([
            'is_verified' => $request->is_verified,
        ]);
        $request->session()->flash('status', 'Pembayaran telah diverifikasi');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        $form = Form::findOrFail($form->id);
        $form->delete();
        request()->session()->flash('status', 'Formulir'.$form->id.'telah dihapus!');
        return back();
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Models\Form;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quitioner;
use App\Models\Unit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Unit $unit)
    {
        if ($unit->id ==1){
            return view('user.sd-add-formulir');
        }elseif($unit->id ==2){
            return view('user.smp-add-formulir');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Unit $unit)
    {
        $request->validate([
            'nama_lengkap'=>'required|string|max:255',
            'nama_panggilan'=>'required|string|max:255',
            'tanggal_lahir'=>'required|date',
            'nik'=>'required|min:16',
            'nisn'=>'required|min:10',
            'photo_url' => 'required|file|image|mimes:jpeg,png,jpg|max:5048',
        ]);
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
                'quis1' => $request->quis1,
                'quis2' => $request->quis2,
                'quis3' => $request->quis3,
                'quis4' => $request->quis4,
                'quis5' => $request->quis5,
                'quis6' => $request->quis6,
                'quis7' => $request->quis7,
                'quis8' => $request->quis8,
                'quis9' => $request->quis9,
                'quis10' => $request->quis10,

                'quis11' => $request->quis1,
                'quis12' => $request->quis12,
                'quis13' => $request->quis13,
                'quis14' => $request->quis14,
                'quis15' => $request->quis15,
                'quis16' => $request->quis16,
                'quis17' => $request->quis17,
                'quis18' => $request->quis18,
                'quis19' => $request->quis19,
                'quis20' => $request->quis20,

                'quis21' => $request->quis21,
                'quis22' => $request->quis22,
                'quis23' => $request->quis23,
                'quis24' => $request->quis24,
                'quis25' => $request->quis25,
                'quis26' => $request->quis26,
                'quis27' => $request->quis27,
                'quis28' => $request->quis28,
                'quis29' => $request->quis29,
                'quis30' => $request->quis30,

                'quis31' => $request->quis31,
                'quis32' => $request->quis32,
                'quis33' => $request->quis33,
                'quis34' => $request->quis34,
                'quis35' => $request->quis35,
                'quis36' => $request->quis36,
                'quis37' => $request->quis37,
                'quis38' => $request->quis38,
                'quis39' => $request->quis39,
                'quis40' => $request->quis40,

                'quis41' => $request->quis41,
                'quis42' => $request->quis42,
                'quis43' => $request->quis43,
                'quis44' => $request->quis44,
                'quis45' => $request->quis45,
                'quis46' => $request->quis46,
                'quis47' => $request->quis47,
                'quis48' => $request->quis48,
                'quis49' => $request->quis49,
                'quis50' => $request->quis50,

                'quis61' => $request->quis61,
                'quis62' => $request->quis62,
                'quis63' => $request->quis63,
                'quis64' => $request->quis64,
                'quis65' => $request->quis65,
                'quis66' => $request->quis66,
                'quis67' => $request->quis67,
                'quis68' => $request->quis68,
                'quis69' => $request->quis69,
                'quis70' => $request->quis70,

                'quis71' => $request->quis71,
                'quis72' => $request->quis72,
                'quis73' => $request->quis73,
                'quis74' => $request->quis74,
                'quis75' => $request->quis75,
                'quis76' => $request->quis76,
                'quis77' => $request->quis77,
                'quis78' => $request->quis78,
                'quis79' => $request->quis79,
                'quis80' => $request->quis80,

                'quis81' => $request->quis81,
                'quis82' => $request->quis82,
                'quis83' => $request->quis83,
                'quis84' => $request->quis84,
                'quis85' => $request->quis85,
                'quis86' => $request->quis86,
                'quis87' => $request->quis87,
                'quis88' => $request->quis88,
                'quis89' => $request->quis89,
                'quis90' => $request->quis90,

                'quis91' => $request->quis91,
                'quis92' => $request->quis92,
                'quis93' => $request->quis93,
                'quis94' => $request->quis94,
                'quis95' => $request->quis95,
                'quis96' => $request->quis96,
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
                'photo_url' =>$imgname ,
    
            ]);
        }
        
        return redirect()->route('user.home');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
    public function imageUpload(Request $request)
    {
        $this->validate($request, [
			'photo_url' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);
        $filename_ext = $request->file('photo_url')->getClientOriginalName();
        // GET FILENAME WITHOUT EXTENSION
        $filename = pathinfo($filename_ext, PATHINFO_FILENAME);
        // GET EXTENSION
        $ext = $request->file('photo_url')->getClientOriginalExtension();
        //FILNAME TO STORE
        $imgname = $filename.'_'.time().'.'.$ext;
        $path = Storage::putFileAs('public/galeri', $request->file('photo_url'),$imgname);
 
		Photo::create([
			'url' => $imgname,
		]);
        // $request->session()->flash('status', 'Bukti pembayaran berhasil diupload'.$path);
		return back()
        ->with('status','You have successfully upload image.')
        ->with('image',$path);
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Models\Form;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        
        // if($request->action == 'upload'){
        //     $request->validate([
        //         'photo_url' => 'required|file|image|mimes:jpeg,png,jpg|max:5048',
        //     ]);
        //     $filename_ext = $request->file('photo_url')->getClientOriginalName();
        //     // GET FILENAME WITHOUT EXTENSION
        //     $filename = pathinfo($filename_ext, PATHINFO_FILENAME);
        //     // GET EXTENSION
        //     $ext = $request->file('photo_url')->getClientOriginalExtension();
        //     //FILNAME TO STORE
        //     $imgname = $filename.'_'.time().'.'.$ext;
        //     $path = Storage::putFileAs('public/galeri', $request->file('photo_url'),$imgname);
            
            
        //     Photo::create([
        //             'url' => $imgname,
        //         ]);

        //     return redirect('image-upload-preview')->with('status', 'Image Has been uploaded successfully in laravel 8');
 
        //     // $request->session()->flash('status', 'Bukti pembayaran berhasil diupload'.$path);
        //     // return redirect()->back();
        //     // return $request;
            

        // }elseif($request->action == 'simpan'){

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
        $path = Storage::putFileAs('public/galeri', $request->file('photo_url'),$imgname);
        
        
        Photo::create([
                'url' => $imgname,
            ]);
        Form::firstOrCreate([
            'user_id' =>  Auth::user()->id,
            'unit_id' => $unit->id ,
            'nama_lengkap'=> $request->nama_lengkap,
            'nama_panggilan'=> $request->nama_panggilan,
            'nik'=>$request->nik,
            'nisn'=>$request->nisn,
            'tempat_lahir' =>$request->tempat_lahir,
            'tanggal_lahir' =>$request->tanggal_lahir,

            'tempat_tinggal' =>$request->tempat_tinggal,
            'berkebutuhan_khusus' =>$request->berkebutuhan_khusus,
            'jenis_berkebutuhan_khusus' =>$request->jenis_berkebutuhan_khusus,
            'transport' =>$request->transport,

            'nama_ayah' =>$request->nama_ayah,
            'tempat_lahir_ayah' =>$request->tempat_lahir_ayah,
            'pendidikan_terakhir_ayah' =>$request->pendidikan_terakhir_ayah,
            'tanggal_lahir_ayah' =>$request->tanggal_lahir_ayah,
            'pekerjaan_ayah' =>$request->pekerjaan_ayah,
            'alamat_kerja_ayah' =>$request->alamat_kerja_ayah,
            'penghasilan_ayah' =>$request->penghasilan_ayah,

            'nama_ibu' =>$request->nama_ibu,
            'tempat_lahir_ibu' =>$request->tempat_lahir_ibu,
            'pendidikan_terakhir_ibu' =>$request->pendidikan_terakhir_ibu,
            'tanggal_lahir_ibu' =>$request->tanggal_lahir_ibu,
            'pekerjaan_ibu' =>$request->pekerjaan_ibu,
            'alamat_kerja_ibu' =>$request->alamat_kerja_ibu,
            'penghasilan_ibu' =>$request->penghasilan_ibu,

            'nama_wali' =>$request->nama_wali,
            'tempat_lahir_wali' =>$request->tempat_lahir_wali,
            'pendidikan_terakhir_wali' =>$request->pendidikan_terakhir_wali,
            'tanggal_lahir_wali' =>$request->tanggal_lahir_wali,
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

            'bank' =>$request->bank,
            'rekening' =>$request->rekening,
            'photo_url' =>$request->photo_url,

        ]);   
        
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

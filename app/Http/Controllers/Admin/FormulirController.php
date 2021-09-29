<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\Quitioner;
use Illuminate\Http\Request;
use PDF;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

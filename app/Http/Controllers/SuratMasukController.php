<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suratMasuk;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;


class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $srtMasuk = suratMasuk::latest()->paginate(4);
        return view('/suratMasuk', compact('srtMasuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createSm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'jenis_surat' => 'required',
            'tanggal' => 'required',
            'nomor' => 'required',
            'asal' => 'required',
            'hal' => 'required',
            'fileUpload' => 'mimes:pdf,jpg',
        ]);
        $input = $request->all();
        if($request->hasFile('fileUpload')){
            $dest_path = 'public/file/pdfFile';
            $req_file = $request->file('fileUpload');
            $file_name = $req_file->getClientOriginalName();
            $path = $request->file('fileUpload')->storeAs($dest_path,$file_name);
            $input['fileUpload'] = $file_name;
        }

        $sMk = suratMasuk::create($input);
       

        // $sm = new suratMasuk;
        // $sm->jenis_surat= $request->jenis_surat;
        // $sm->tanggal= $request->tanggal;
        // $sm->nomor= $request->nomor;
        // $sm->asal= $request->asal;
        // $sm->hal= $request->hal;
        // $sMk= $sm->save();
        
        if($sMk){
            return redirect('/suratMasuk')->with('success','Data Berhasil Ditambah');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edt=suratMasuk::findorFail($id);
        // dd($edt);
        return view('editSm')->with(compact('edt'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $upt=suratMasuk::findorFail($id);
        $upt->update($request->all());
        return redirect()->route('/suratMasuk')->with('update', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $deleted = DB::table('surat_masuks')->where('id',$id)->delete();
        return redirect()->route('/suratMasuk')->with('delete', 'Data Berhasil Di Hapus');

    }
}

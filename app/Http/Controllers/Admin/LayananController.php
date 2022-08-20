<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jahit;
use App\Models\Layanan;
use App\Models\Konveksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->is_admin){
            return view('admin.layanan.index',[
                'layanans' => Layanan::get()
            ]);
        }

        if(auth()->user()->name){
            return view('admin.layanan.index',[
                'layanans' => Layanan::where('nama_toko', '=' . auth()->user()->name)->get()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layanan.create',[
            'jahits' => Jahit::get(),
            'konveksis' => Konveksi::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [''];
        
        if($request->jahit_id == null || $request->konveksi_id == null){
            $rules['jahit_id'] = 'nullable';
            $rules['konveksi_id'] = 'nullable';
        }
        
        if($request->nama_toko || $request->jahit_id || $request->konveksi_id){
            $validate['nama_toko'] = 'required';
            $validate['jahit_id'] = 'required';
            $validate['konveksi_id'] = 'required';
        }
        
        $validate['nama_toko'] = auth()->user()->name;
        $validate = $request->validate($rules);

        Layanan::create($validate);

        return redirect('/admin/layanan')->with('success','Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        return view('admin.layanan.show',[
            'layanans' => Layanan::find($layanan)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        return view('admin.layanan.edit',[
            'jahits' => Jahit::get(),
            'konveksis' => Konveksi::get(),
            'layanans' => $layanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        $rules = [''];
        
        if($request->jahit_id == null && $layanan->jahit_id == null){
            $rules['jahit_id'] = 'nullable';
        }
        
        if($request->konveksi_id == null && $layanan->konveksi_id == null){
            $rules['konveksi_id'] = 'nullable';
            $validate['nama_toko'] = auth()->user()->name;
        }
        
        if($request->nama_toko == $layanan->nama_toko){
            $validate['nama_toko'] = 'required';
        }
        
        if($request->jahit_id == $layanan->jahit_id){
            $validate['jahit_id'] = 'required';
        }
        
        if($request->konveksi_id == $layanan->konveksi_id){
            $validate['konveksi_id'] = 'required';
        }
        
        $validate = $request->validate($rules);

        Layanan::where('id', $layanan->id)->update($validate);

        return redirect('/admin/layanan')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        Layanan::destroy($layanan->id);

        return redirect('/admin/layanan')->with('success','Deleted Successfully!');
    }
}

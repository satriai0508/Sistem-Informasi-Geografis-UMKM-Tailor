<?php

namespace App\Http\Controllers\Admin;

use App\Models\Konveksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KonveksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->is_admin){
            return view('admin.konveksi.index',[
                'konveksis' => Konveksi::get()
            ]);
        }
        
        if(auth()->user()->name){
            return view('admin.konveksi.index',[
                'konveksis' => Konveksi::where('nama_toko', '=' . auth()->user()->name)->get()
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
        return view('admin.konveksi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_toko' => 'required|string',
            'harga' => 'required|min:4',
            'jenis' => 'required',
            'ukuran' => 'required'
        ]);

        if($request->nama_toko){
            $validate['nama_toko'] = auth()->user()->name;
        }

        Konveksi::create($validate);

        return redirect('/admin/konveksi')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konveksi  $konveksi
     * @return \Illuminate\Http\Response
     */
    public function show(Konveksi $konveksi)
    {
        return view('admin.konveksi.show',[
            'konveksis' => Konveksi::find($konveksi)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konveksi  $konveksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Konveksi $konveksi)
    {
        return view('admin.konveksi.edit',[
            'konveksis' => $konveksi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konveksi  $konveksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konveksi $konveksi)
    {
        $rules = [
            'nama_toko' => 'required|string',
            'harga' => 'required|min:4',
            'jenis' => 'required',
            'ukuran' => 'required'
        ];

        if($request->nama_toko){
            $rules['nama_toko'] = auth()->user()->name;
        }

        $validate = $request->validate($rules);

        Konveksi::where('id', $konveksi->id)->update($validate);

        return redirect('/admin/konveksi')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konveksi  $konveksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konveksi $konveksi)
    {
        Konveksi::destroy($konveksi->id);

        return redirect('/admin/konveksi')->with('success','Deleted Successfully!');
    }
}

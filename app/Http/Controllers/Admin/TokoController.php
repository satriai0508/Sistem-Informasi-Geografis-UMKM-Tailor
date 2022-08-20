<?php

namespace App\Http\Controllers\Admin;

use App\Models\Toko;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(auth()->user()->is_admin){
            return view('admin.usaha.index',[
                'usahas' => Toko::orderBy('nama','ASC')->get()
            ]);
        }
        
        if(auth()->user()->name){
            return view('admin.usaha.index',[
                'usahas' => Toko::where('nama','=' . auth()->user()->name)->get()
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
        return view('admin.usaha.create');
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
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'pemilik' => 'required',
            'x' => 'required',
            'y' => 'required',
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
        ]);

        if($request->pemilik){
            $validate['pemilik'] = auth()->user()->nama;
        }

        if($request->file('image')){
            $validate['image'] = $request->file('image')->store('images');
        }

        Toko::create($validate);

        return redirect('/admin/toko')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function show(Toko $toko)
    {
        return view('admin.usaha.show',[
            'tokos' => Toko::find($toko)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function edit(Toko $toko)
    {
        return view('admin.usaha.edit',[
            'tokos' => $toko
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toko $toko)
    {
        $rules = [
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'pemilik' => 'required',
            'x' => 'required',
            'y' => 'required',
            'image' => 'required|max:5120|mimes:jpg,png',
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
        ];

        if($request->pemilik){
            $validate['pemilik'] = auth()->user()->nama;
        }

        $validate = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete([$request->oldImage]);
            }
            $validate['image'] = $request->file('image')->store('images');
        }

        Toko::where('id', $toko->id)->update($validate);

        return redirect('/admin/toko')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toko $toko)
    {
        Toko::destroy($toko->id);

        if($toko->image){
            Storage::delete([$toko->image]);
        }

        return redirect('/admin/toko')->with('success','Deleted Successfully!');
    }
}

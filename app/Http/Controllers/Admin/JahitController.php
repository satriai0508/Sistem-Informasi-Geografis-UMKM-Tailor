<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jahit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class JahitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->is_admin){
            return view('admin.jahit.index',[
                'jahits' => Jahit::orderBy('nama_toko','ASC')->get()
            ]);
        }

        if(auth()->user()->name){
            return view('admin.jahit.index',[
                'jahits' => Jahit::where('nama_toko', '=' . auth()->user()->name)->get()
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
        return view('admin.jahit.create');
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

        Jahit::create($validate);

        return redirect('/admin/jahit')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jahit  $jahit
     * @return \Illuminate\Http\Response
     */
    public function show(Jahit $jahit)
    {
        return view('admin.jahit.show',[
            'jahits' => Jahit::find($jahit)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jahit  $jahit
     * @return \Illuminate\Http\Response
     */
    public function edit(Jahit $jahit)
    {
        return view('admin.jahit.edit',[
            'jahits' => $jahit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jahit  $jahit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jahit $jahit)
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

        Jahit::where('id', $jahit->id)->update($validate);

        return redirect('/admin/jahit')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jahit  $jahit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jahit $jahit)
    {
        Jahit::destroy($jahit->id);

        return redirect('/admin/jahit')->with('success','Deleted Successfully!');
    }
}

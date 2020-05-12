<?php

namespace App\Http\Controllers;

use App\PenggunaModel;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pengguna'] = PenggunaModel::all();

        return view('admin/pengguna/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/pengguna/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dump($request);
        PenggunaModel::create($request->all());
        return redirect()->back()->with('status', 'Data ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PenggunaModel  $penggunaModel
     * @return \Illuminate\Http\Response
     */
    public function show($penggunaModel)
    {
        $data['pengguna'] = PenggunaModel::find($penggunaModel);
        //dump($data['pengguna']);
        return view('admin/pengguna/detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PenggunaModel  $penggunaModel
     * @return \Illuminate\Http\Response
     */
    public function edit($penggunaModel)
    {
        $data['pengguna'] = PenggunaModel::find($penggunaModel);
        //dump($data['pengguna']);
        return view('admin/pengguna/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PenggunaModel  $penggunaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $penggunaModel)
    {
        PenggunaModel::where('id_pengguna', $penggunaModel)->update([
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat
        ]);

        return redirect('/kelola_pengguna')->with('status', 'Data diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PenggunaModel  $penggunaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($penggunaModel)
    {
        PenggunaModel::destroy($penggunaModel);
        return redirect('/kelola_pengguna')->with('status', 'Data dihapus');
    }
}

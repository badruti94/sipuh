<?php

namespace App\Http\Controllers;

use App\AcaraModel;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['acara'] = AcaraModel::all();

        return view('admin/acara/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/acara/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AcaraModel::create($request->all());
        return redirect()->back()->with('status', 'Data ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AcaraModel  $acaraModel
     * @return \Illuminate\Http\Response
     */
    public function show($acaraModel)
    {
        $data['acara'] = AcaraModel::find($acaraModel);
        return view('admin/acara/detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AcaraModel  $acaraModel
     * @return \Illuminate\Http\Response
     */
    public function edit($acaraModel)
    {
        $data['acara'] = AcaraModel::find($acaraModel);
        //dump($data['pengguna']);
        return view('admin/acara/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AcaraModel  $acaraModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $acaraModel)
    {
        AcaraModel::where('id_acara', $acaraModel)->update([
            'nama_acara' => $request->nama_acara,
            'keterangan' => $request->keterangan,
            'tempat' => $request->tempat,
            'tanggal' => $request->tanggal
        ]);

        return redirect('/kelola_acara')->with('status', 'Data diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AcaraModel  $acaraModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($acaraModel)
    {
        AcaraModel::destroy($acaraModel);
        return redirect('/kelola_acara')->with('status', 'Data dihapus');
    }
}

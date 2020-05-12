<?php

namespace App\Http\Controllers;

use App\AcaraModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['acara'] = AcaraModel::all();

        return view('admin/absen/index', $data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['acara'] = AcaraModel::find($id)->nama_acara;
        $data['id_acara'] = AcaraModel::find($id)->id_acara;
        $data['pengguna'] = DB::select("SELECT pengguna.id_pengguna, pengguna.nama, absen.waktu
        FROM pengguna, absen
        WHERE absen.id_pengguna = pengguna.id_pengguna
        AND absen.id_acara = $id");
        return view('admin/absen/detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_acara, $id_pengguna)
    {
        DB::delete("DELETE FROM absen WHERE id_acara=$id_acara AND id_pengguna=$id_pengguna");
        return redirect()->back()->with('status', 'Data dihapus');
    }
}

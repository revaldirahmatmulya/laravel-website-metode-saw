<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Bobot;
use App\Models\Matrik;
use App\Models\Skala;
use Illuminate\Http\Request;

class MatrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matrik = Matrik::all();
        $alternatif = Alternatif::all();
        $skala = Skala::all();
        $bobot = Bobot::all();
        return view("Matrik.index", compact('alternatif', 'matrik', 'skala', 'bobot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matrik = Matrik::all();
        $alternatif = Alternatif::all();
        $skala = Skala::all();
        $bobot = Bobot::all();
        return view("Matrik.create", compact('alternatif', 'matrik', 'skala', 'bobot'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Matrik();
        $data->id_alternatif = $request->alternatif;
        $data->id_bobot = $request->bobot;
        $data->id_skala = $request->skala;
        $data->value = $request->value;
        $data->save();
        return redirect('matrik')->with('inserted', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matrik  $matrik
     * @return \Illuminate\Http\Response
     */
    public function show(Matrik $matrik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matrik  $matrik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Matrik::find($id);
        $alternatif = Alternatif::all();
        $skala = Skala::all();
        $bobot = Bobot::all();
        return view("Matrik.edit", compact('alternatif', 'data', 'skala', 'bobot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matrik  $matrik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Matrik::find($id);
        $data->id_alternatif = $request->alternatif;
        $data->id_bobot = $request->bobot;
        $data->id_skala = $request->skala;
        $data->value = $request->value;
        $data->save();
        return redirect('matrik')->with('updated', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matrik  $matrik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Matrik::find($id);
        $data->delete();
        return redirect('alternatif')->with('deleted', 'Data Berhasil Dihapus');
    }
}
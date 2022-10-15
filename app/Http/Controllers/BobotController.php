<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Kriteria;
use Illuminate\Http\Request;

use function Symfony\Component\String\b;

class BobotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bobot = Bobot::all();
        $kriteria = Kriteria::all();
        return view("Bobot.index", compact('bobot', 'kriteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bobot = Bobot::all();
        $kriteria = Kriteria::all();
        return view("Bobot.create", compact('bobot', 'kriteria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Bobot();
        $data->id_kriteria = $request->kriteria;
        $data->value = $request->value;
        $data->save();
        return redirect('bobot')->with('inserted', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function show(Bobot $bobot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Bobot::find($id);
        $kriteria = Kriteria::all();
        return view("Bobot.edit", compact('data', 'kriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Bobot::find($id);
        $data->id_kriteria = $request->kriteria;
        $data->value = $request->value;
        $data->save();
        return redirect('bobot')->with('updated', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Bobot::find($id);
        $data->delete();
        return redirect('bobot')->with('deleted', 'Data Berhasil Dihapus');
    }
}
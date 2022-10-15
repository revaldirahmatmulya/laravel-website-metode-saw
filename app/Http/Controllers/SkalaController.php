<?php

namespace App\Http\Controllers;

use App\Models\Skala;
use Illuminate\Http\Request;

class SkalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skala = Skala::all();
        return view("Skala.index", compact('skala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skala = Skala::all();
        return view("Skala.create", compact('skala'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Skala();
        $data->value = $request->value;
        $data->keterangan = $request->keterangan;
        $data->save();
        return redirect('skala')->with('inserted', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skala  $skala
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skala  $skala
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Skala::find($id);
        return view("Skala.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skala  $skala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Skala::find($id);
        $data->value = $request->value;
        $data->keterangan = $request->keterangan;

        $data->save();

        return redirect('skala')->with('updated', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skala  $skala
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Skala::find($id);
        $data->delete();
        return redirect('skala')->with('deleted', 'Data Berhasil Dihapus');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Keputusan;
use App\Models\Normalisasi;
use App\Models\Rangking;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function keputusan()
    {
        $keputusan = Keputusan::all();
        return view('ViewTable.keputusan', compact('keputusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function normalisasi()
    {
        $normalisasi = Normalisasi::all();
        return view('ViewTable.normalisasi', compact('normalisasi'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rangking()
    {
        $rangking = Rangking::all();
        return view('ViewTable.rangking', compact('rangking'));
    }
}
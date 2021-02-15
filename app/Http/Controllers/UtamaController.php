<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Models\RW;
use carbon\carbon;

class UtamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Count Up
        $positif = DB::table('rws')
            ->select('kasus2s.jumlah_positif',
            'kasus2s.jumlah_sembuh', 'kasus2s.jumlah_meninggal')
            ->join('kasus2s','rws.id','=','kasus2s.id_rw')
            ->sum('kasus2s.jumlah_positif'); 
        $sembuh = DB::table('rws')
            ->select('kasus2s.jumlah_positif',
            'kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
            ->join('kasus2s','rws.id','=','kasus2s.id_rw')
            ->sum('kasus2s.jumlah_sembuh');
        $meninggal = DB::table('rws')
            ->select('kasus2s.jumlah_positif',
            'kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
            ->join('kasus2s','rws.id','=','kasus2s.id_rw')
            ->sum('kasus2s.jumlah_meninggal');
        // $global = file_get_contents('https://api.kawalcorona.com/positif');
        // $posglobal = json_decode($global, TRUE);

        // $tanggal = Carbon::now()->isoFormat('dddd, D MMMM Y hh:mm:ss');
        
            return view('utama',compact('positif','sembuh','meninggal'));
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
        //
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
    public function destroy($id)
    {
        //
    }
}

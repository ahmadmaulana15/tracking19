<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\provinsi;
use App\Models\Kasus2;

class ApiController extends Controller
{
    public function sprovinsi()
    {
        $tampil = DB::table('provinsis')
        ->join('kotas','kotas.id_provinsi','=','provinsis.id')
        ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
        ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
        ->join('kasus2s','kasus2s.id_rw','=','rws.id')
        ->select('nama_provinsi',
        DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
        DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'),
        DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'))
        ->groupBy('nama_provinsi')
        ->get();

        $data = [
            'success' => true,
            'Data Provinsi' => $tampil,
            'message' => 'Data Kasus Di tampilkan'
        ];
return response()->json($data,200);

    }


    public function index()
    {
        $positif = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
            ->join ('kasus2s','rws.id','=','kasus2s.id_rw')
            ->sum('kasus2s.jumlah_positif');
           
           
            $sembuh = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
            ->join ('kasus2s','rws.id','=','kasus2s.id_rw')
            ->sum('kasus2s.jumlah_sembuh');

            $meninggal = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
            ->join ('kasus2s','rws.id','=','kasus2s.id_rw')
            ->sum('kasus2s.jumlah_meninggal');


            $res = [
                'success' => true,
                'Data' => 'Data Kasus Indonesia',
                'jumlah Positif' => $positif,
                'Jumlah Sembuh' => $sembuh,
                'jumlah Meninggal' => $meninggal,
                'message' => 'Data Kasus Di tampilkan'
            ];
return response()->json($res,200);
    }

    public function dprovinsi($id)
    {
        $tampil = DB::table('provinsis')
        ->join('kotas','kotas.id_provinsi','=','provinsis.id')
        ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
        ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
        ->join('kasus2s','kasus2s.id_rw','=','rws.id')
        ->where('provinsis.id',$id)
        ->select('nama_provinsi',
        DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
        DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'),
        DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'))
        ->groupBy('nama_provinsi')
        ->get();

        $data = [
            'success' => true,
            'Data Provinsi' => $tampil,
            'message' => 'Data Kasus Di tampilkan'
        ];
return response()->json($data,200);


    }



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
        
            $positif = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
            ->join ('kasus2s','rws.id','=','kasus2s.id_rw')
            ->sum('kasus2s.jumlah_positif');
           
           
            $sembuh = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
            ->join ('kasus2s','rws.id','=','kasus2s.id_rw')
            ->sum('kasus2s.jumlah_sembuh');

            $meninggal = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
            ->join ('kasus2s','rws.id','=','kasus2s.id_rw')
            ->sum('kasus2s.jumlah_meninggal');


            $res = [
                'success' => true,
                'Data' => 'Data Kasus Indonesia',
                'jumlah Positif' => $positif,
                'Jumlah Sembuh' => $sembuh,
                'jumlah Meninggal' => $meninggal,
                'message' => 'Data Kasus Di tampilkan'
            ];
return response()->json($res,200);

        // CARA KEDUA
        // $kasus2 = kasus2::get('created_at')->last();
        // $jumlah_positif = kasus2::where('tanggal', date('Y-m-d'))->sum('jumlah_positif');
        // $jumlah_sembuh = kasus2::where('tanggal', date('Y-m-d'))->sum('jumlah_sembuh');
        // $jumlah_meninggal = kasus2::where('tanggal', date('Y-m-d'))->sum('jumlah_meninggal');

        // $join = DB::table('kasus2s')
        //             ->select('jumlah_positif', 'jumlah_sembuh', 'jumlah_meninggal')
        //             ->join('rws' ,'kasus2s.id_rw', '=', 'rws.id')
        //             ->get();
        // $arr1 = [
        //     'jumlah_positif' =>$join->sum('jumlah_positif'),
        //     'jumlah_sembuh' =>$join->sum('jumlah_sembuh'),
        //     'jumlah_meninggal' =>$join->sum('jumlah_meninggal'),
        // ];
        // $arr2 = [
        //     'jumlah_positif' =>$jumlah_positif,
        //     'jumlah_sembuh' =>$jumlah_sembuh,
        //     'jumlah_meninggal' =>$jumlah_meninggal,
        // ];
        // $arr = [
        //     'status' => 200,
        //     'data' => [
        //         'Hari Ini' => $arr2,
        //         'total' => $arr1
        //     ],
        //     'message' => 'Berhasil'
        // ];
        
        // return response()->json($arr, 200);
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
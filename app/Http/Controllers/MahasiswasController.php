<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JalurMasuk;
use DB;

class MahasiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jalur = JalurMasuk::all()->pluck('jllrNama', 'jllrKode');
        if(isset($_POST['jlrmsk'])){
          $jlrmsk=$_POST['jlrmsk'];
        $query = DB::connection('mysql2')->select("SELECT mhsNiu,mhsNama,mhsProdiKode,s_jalur_ref.jllrNama FROM mahasiswa
        JOIN s_jalur_ref ON s_jalur_ref.jllrKode=mahasiswa.mhsJlrrKode WHERE mhsJlrrKode='$jlrmsk'");
        }
        return view('mahasiswas',compact('jalur','query','jlrmsk'));
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

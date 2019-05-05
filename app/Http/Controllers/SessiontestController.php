<?php

namespace App\Http\Controllers;

use App\Sessiontest;
use Illuminate\Http\Request;

class SessiontestController extends Controller
{

    // menampilkan isi session
    public function tampilkanSession(Request $request) {
        if($request->session()->has('nama')){
            echo $request->session()->get('nama');
        }else{
            echo 'Tidak ada data dalam session.';
        }
    }

    // membuat session
    public function buatSession(Request $request) {
        $request->session()->put('nama','Rhioda Muthie');
        echo "Data telah ditambahkan ke session.";
    }

    // menghapus session
    public function hapusSession(Request $request) {
        $request->session()->forget('nama');
        echo "Data telah dihapus dari session.";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->session()->has('nama')){
            echo $request->session()->get('nama');
        }else{
            echo 'Tidak ada data dalam session.';
        }
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
     * @param  \App\Sessiontest  $sessiontest
     * @return \Illuminate\Http\Response
     */
    public function show(Sessiontest $sessiontest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sessiontest  $sessiontest
     * @return \Illuminate\Http\Response
     */
    public function edit(Sessiontest $sessiontest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sessiontest  $sessiontest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sessiontest $sessiontest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sessiontest  $sessiontest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sessiontest $sessiontest)
    {
        //
    }
}

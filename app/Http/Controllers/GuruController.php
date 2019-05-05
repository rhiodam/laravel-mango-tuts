<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // menampilkan data guru
    public function index()
    {
        //
        $guru = Guru::All();
        return view('guru.index', ['guru' => $guru]);
    }

    // menghapus data guru secara soft delete
    public function hapus($id)
    {
        //
        $guru = Guru::find($id);
        $guru->delete();

        return redirect('/guru');
    }

    // menampilkan data guru yang sudah dihapus
    public function trash()
    {
        // mengampil data guru yang sudah dihapus
//        $guru = Guru::onlyTrashed()->get();
        $guru = Guru::All();
//        $guru = Guru::trashed()->get();
        dd($guru);
        return view('guru.trash', ['guru' => $guru]);
    }

    // restore data guru yang dihapus
    public function kembalikan($id)
    {
        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->restore();
        return redirect('/guru/trash');
    }

    // restore semua data guru yang sudah dihapus
    public function kembalikan_semua()
    {

        $guru = Guru::onlyTrashed();
        $guru->restore();

        return redirect('/guru/trash');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Guru $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Guru $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Guru $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Guru $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        //
    }
}

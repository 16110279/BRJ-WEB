<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penawaran;

class PenawaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('public');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        // $penawaran = new Penawaran;
        // $penawaran->nama = $request->nama;
        // $penawaran->email = $request->email;
        // $penawaran->no_telp = $request->notelp;
        // $penawaran->spesifikasi = $request->spesifikasi;
        // $penawaran->dana = $request->dana;
        // $penawaran->save();
        // return redirect('/');

        // Penawaran::create([
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'no_telp' => $request->notelp,
        //     'spesifikasi' => $request->spesifikasi,
        //     'dana' => $request->dana
        // ]);

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required | regex:/(01)[0-9]{9}/',
            'spesifikasi' => 'required',
            'dana' => 'required | numeric'

        ]);

        Penawaran::create($request->all());
        return redirect('/')->with('status', 'Request sudah berhasil disimpan');
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

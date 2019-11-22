<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Penawaran;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $penawaran = Penawaran::all();

        return view('admin/index', ['penawaran' => $penawaran]);
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
    public function show(Penawaran $penawaran)
    {
        //
        return view('admin.show', compact('penawaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Penawaran $penawaran)
    {
        //
        return view('admin.edit', compact('penawaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penawaran $penawaran)
    {
        //

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required | numeric',
            'spesifikasi' => 'required',
            'dana' => 'required | numeric'

        ]);
        Penawaran::where('id', $penawaran->id)
            ->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'spesifikasi' => $request->spesifikasi,
                'dana' => $request->dana
            ]);
        return redirect('/admin/')->with('status', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penawaran $penawaran)
    {
        //
        Penawaran::destroy($penawaran->id);
        return redirect('/admin/')->with('status', 'Data Berhasil Dihapus');
    }
}

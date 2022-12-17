<?php

namespace App\Http\Controllers;

use App\Models\Pendonor;
use App\Models\Syaratdonor;
use Illuminate\Http\Request;

class PendonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendonor = Pendonor::all();
        return view('Pendonor.index', compact('pendonor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pendonor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pendonor::create(
            [
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
            ]
        );
        return redirect('/Pendonor')->with('status', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function show(Pendonor $pendonor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendonor $pendonor)
    {
        return view('Pendonor.update', compact('pendonor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendonor $pendonor)
    {
        Pendonor::where('id', $pendonor->id)->update(
            [
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
            ]
        );
        return redirect('/Pendonor')->with('status', 'Data behasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendonor  $pendonor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendonor $pendonor)
    {
        $pendonor->delete();
        return redirect('/Pendonor');
    }
}

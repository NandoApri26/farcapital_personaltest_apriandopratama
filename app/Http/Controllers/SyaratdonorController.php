<?php

namespace App\Http\Controllers;

use App\Models\Syaratdonor;
use Illuminate\Http\Request;

class SyaratdonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $syaratdonor = Syaratdonor::all();
        return view('SyaratDonor.index', compact('syaratdonor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SyaratDonor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Syaratdonor::create(
            [
                'persyaratan' => $request->persyaratan,
            ]
        );
        return redirect('/SyaratDonor')->with('status', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Syaratdonor  $syaratdonor
     * @return \Illuminate\Http\Response
     */
    public function show(Syaratdonor $syaratdonor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Syaratdonor  $syaratdonor
     * @return \Illuminate\Http\Response
     */
    public function edit(Syaratdonor $syaratdonor)
    {
        return view('SyaratDonor.update', compact('syaratdonor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Syaratdonor  $syaratdonor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Syaratdonor $syaratdonor)
    {
        Syaratdonor::where('id', $syaratdonor->id)->update(
            [
                'persyaratan' => $request->persyaratan,
            ]
        );
        return redirect('/SyaratDonor')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Syaratdonor  $syaratdonor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Syaratdonor $syaratdonor)
    {
        $syaratdonor->delete();
        return redirect('/SyaratDonor')->with('success', 'Data berhasil dihapus');
    }
}

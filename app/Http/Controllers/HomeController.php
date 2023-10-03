<?php

namespace App\Http\Controllers;

use App\Models\DataIppkh;
use App\Models\HistoryIppkh;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.crud.create-ippkh');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pt' => 'required',
            'email' => 'required',
            'nomor_sk' => 'required',
            'masa_berlaku' => 'required',
            'mulai' => 'required',
            'berakhir' => 'required',
            'luas' => 'required',
            'verifikasi_pbnp' => 'required',
            'bukti_bayar' => 'required',
            'keterangan' => 'required',
        ]);

        // dd($validatedData);

        DataIppkh::create($validatedData);
        return redirect('/home')->with('dataippkh-created', 'Data IPPKH berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataIppkh $home)
    {
        return view('livewire.history-ippkh', [
            'data' => $home
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataIppkh $home)
    {   
        // dd($home);
        return view('auth.crud.edit-ippkh', [
            'dataIppkh' => $home
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataIppkh $home)
    {
        $validatedData = $request->validate([
            'pt' => 'required',
            'email' => 'required',
            'nomor_sk' => 'required',
            'masa_berlaku' => 'required',
            'mulai' => 'required',
            'berakhir' => 'required',
            'luas' => 'required',
            'verifikasi_pbnp' => 'required',
            'bukti_bayar' => 'required',
            'keterangan' => 'required',
        ]);

        try {
            DataIppkh::where('id', $home->id)->update($validatedData);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataIppkh $dataIppkh)
    {
        //
    }
}
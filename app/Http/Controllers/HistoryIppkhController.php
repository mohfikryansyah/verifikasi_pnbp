<?php

namespace App\Http\Controllers;

use App\Models\DataIppkh;
use App\Models\HistoryIppkh;
use Illuminate\Http\Request;

class HistoryIppkhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.history-ippkh');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.crud.create-ippkh-pertahun', [
            'ippkh' => DataIppkh::select('id', 'pt', 'nomor_sk')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'data_ippkh_id' => 'required',
            'l1' => 'required',
            'l2' => 'required',
            'l3' => 'required',
            'tahun' => 'required|digits:4',
        ]);
        HistoryIppkh::create($validatedData);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(HistoryIppkh $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HistoryIppkh $history)
    {
        return view('auth.crud.edit-ippkh-pertahun', [
            'ippkh' => DataIppkh::select('id', 'pt', 'nomor_sk')->get(),
            'history' => $history
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HistoryIppkh $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HistoryIppkh $history)
    {
        //
    }
}
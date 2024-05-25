<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use App\Models\Kurir;
use Illuminate\Http\Request;
use PDF;

class PengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengiriman = Pengiriman::all();

        return view('pengiriman.index', compact('pengiriman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kurir = Kurir::all();

        return view('pengiriman.create', compact('kurir'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pengiriman::create([
            'id_pengiriman' => $request->id_pengiriman,
            'id_kurir' => $request->id_kurir,
            'tanggal' => $request->tanggal,
            'ekspedisi' => $request->ekspedisi,
            'status' => $request->status,
        ]);

        return redirect('/pengiriman')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengiriman $pengiriman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengiriman $pengiriman)
    {
        $kurir = Kurir::all();
        return view('pengiriman.edit', compact('pengiriman', 'kurir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengiriman $pengiriman)
    {
        $pengiriman->update([
            'id_pengiriman' => $request->id_pengiriman,
            'id_kurir' => $request->id_kurir,
            'tanggal' => $request->tanggal,
            'ekspedisi' => $request->ekspedisi,
            'status' => $request->status,
        ]);

        return redirect('/pengiriman')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengiriman $pengiriman)
    {
        $pengiriman->delete();
        
        return redirect('/pengiriman')->with('success', 'Data Berhasil Dihapus!');
    }

    public function export_pdf(Request $request){
        // $data = ['title' => 'Welcome to Laravel PDF generation using DOMPDF'];
        $data = Pengiriman::all();

        $pdf = PDF::loadView('pengiriman.report', [ 'data' => $data]);
      
        return $pdf->download('document.pdf');
    }
}

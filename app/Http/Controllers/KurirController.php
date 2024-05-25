<?php

namespace App\Http\Controllers;

use App\Models\Kurir;
use Illuminate\Http\Request;
use PDF;

class KurirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kurir = kurir::all();

        return view('kurir.index', compact('kurir'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kurir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kurir::create([
            'id_kurir' => $request->id_kurir,
            'nama' => $request->nama,
            'alamat'=>$request->alamat,
            'no_telepon'=>$request->no_telepon,
            'email'=>$request->email,
        ]);

        return redirect('/kurir')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kurir $kurir)
    {
        // $kurir = kurir::find($id);

        return view('kurir.edit', compact('kurir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kurir $kurir)
    {
        $kurir->update([
            'nama' => $request->nama,
            'alamat'=>$request->alamat,
            'no_telepon'=>$request->no_telepon,
            'email'=>$request->email,
        ]);

        return redirect('/kurir')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kurir $kurir)
    {
        $kurir->delete();
        
        return redirect('/kurir')->with('success', 'Data Berhasil Dihapus!');
    }

    public function export_pdf(Request $request){
        // $data = ['title' => 'Welcome to Laravel PDF generation using DOMPDF'];
        $data = Kurir::all();

        $pdf = PDF::loadView('kurir.report', [ 'data' => $data]);
      
        return $pdf->download('document.pdf');
    }
}

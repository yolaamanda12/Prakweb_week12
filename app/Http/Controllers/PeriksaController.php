<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\paramedik;
use App\Models\Periksa; //tambahin ini
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $list_periksa = Periksa::all();
    // buat turunan model periksa
            return view('periksa.index', ['list_periksa'=>$list_periksa]);
    // kirim array data ke view periksaz  index menggunakan assosiatif array
        }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $periksa = new Periksa();
        $periksa->tanggal = $request->tanggal;
        $periksa->berat = $request->berat;
        $periksa->tinggi = $request->tinggi;
        $periksa->tensi = $request->tensi;
        $periksa->keterangan = $request->keterangan;
        $periksa->pasien_id = $request->pasien_id;
        $periksa->paramedik_id = $request->paramedik_id;
        $periksa->save();
        return redirect('periksa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data_periksa = Periksa::with('paramedik')->get();
        $paramedik = paramedik::all();
        $pasien = Pasien::all();

    return view('periksa.detail', compact('data_periksa', 'paramedik', 'pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //buat perintah edit
        $data_periksa = DB::table('periksa')->where('id',$id)->get();
        $pasien = DB::table('pasien')->get();
        $paramedik = DB::table('kelurahan')->get();
        return view('periksa.edit', compact('data_periksa','pasien','paramedik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //buat perintah update
        $periksa = Periksa::find($request->id);
        $periksa->tanggal = $request->tanggal;
        $periksa->berat = $request->berat;
        $periksa->tinggi = $request->tinggi;
        $periksa->tensi = $request->tensi;
        $periksa->keterangan = $request->keterangan;
        $periksa->pasien_id = $request->pasien_id;
        $periksa->paramedik_id = $request->paramedik_id;
        $periksa->save();
        return redirect('periksa');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // kasih perintah hapus data
        $periksa = Periksa::findOrFail($id);
        $periksa->delete();
    
        return redirect()->back()->with('success', 'periksa berhasil dihapus.');
    }
}

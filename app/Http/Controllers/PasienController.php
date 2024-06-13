<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use Illuminate\Support\Facades\DB;
use App\Models\Kelurahan;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_pasien = DB ::table('pasien')->join('kelurahan','pasien.kelurahan_id','=','kelurahan.id')
        ->select('pasien.*', 'kelurahan.nama as nama_kelurahan')
        ->get();

        $kelurahans = Kelurahan::all();


        // buat turunan model pasien
        return view('pasien.index', compact('data_pasien','kelurahans'));
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
        $pasien = new Pasien();
        $pasien->Kode = $request->kode;
        $pasien->nama = $request->nama;
        $pasien->tmp_lahir = $request->tmp_lahir;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->gender = $request->gender;
        $pasien->email = $request->email;
        $pasien->alamat = $request->alamat;
        $pasien->kelurahan_id = $request->kelurahan_id;
        $pasien->save();
        return redirect('pasien');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB ::table('pasien')->join('kelurahan','pasien.kelurahan_id','=','kelurahan.id')
        ->select('pasien.*', 'kelurahan.nama as nama_kelurahan')
        ->get();
        $data_pasien = $data->where('id',$id);
        return view('pasien.detail', compact('data_pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_pasien = DB::table('pasien')->where('id' ,$id)->get();
        $kelurahans = DB::table('kelurahan')->get();
        return view('pasien.edit', compact('data_pasien','kelurahans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $pasien = Pasien::find($request->id);
        $pasien->Kode = $request->kode;
        $pasien->nama = $request->nama;
        $pasien->tmp_lahir = $request->tmp_lahir;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->gender = $request->gender;
        $pasien->email = $request->email;
        $pasien->alamat = $request->alamat;
        $pasien->kelurahan_id = $request->kelurahan_id;
        $pasien->save();
        return redirect('pasien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('pasien')->where('id' ,$id)->delete();
        return redirect('pasien');
    }
}

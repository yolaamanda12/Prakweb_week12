<?php

namespace App\Http\Controllers;
use App\Models\Unit_Kerja;
use App\Models\paramedik; //tambahin ini
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paramedikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_paramedik = DB::table('paramedik')->join('unit_kerja','paramedik.unit_kerja_id','=','unit_kerja.id')
        ->select('paramedik.*','unit_kerja.nama as nama_unit_kerja')
        ->get();

        $unit_kerja = Unit_Kerja::all();

// buat turunan model pasien
        return view('paramedik.index',compact('data_paramedik','unit_kerja'));
// kirim array data ke view paramedik index menggunakan assosiatif array
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
        $paramedik = new paramedik();
        $paramedik->nama = $request->nama;
        $paramedik->gender = $request->gender;
        $paramedik->tmp_lahir = $request->tmp_lahir;
        $paramedik->tgl_lahir = $request->tgl_lahir;
        $paramedik->telepon = $request->telepon;
        $paramedik->alamat = $request->alamat;
        $paramedik->unit_kerja_id = $request->unit_kerja_id;
        $paramedik->save();
        return redirect('paramedik');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = DB::table('paramedik')->join('unit_kerja','paramedik.unit_kerja_id','=','unit_kerja.id')
        ->select('paramedik.*','unit_kerja.nama as nama_unit_kerja')->get();
        $data_paramedik = $data->where('id',$id);
        return view('paramedik.detail',compact('data_paramedik'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data_paramedik = DB::table('paramedik')->where('id',$id)->get();
        $unit_kerja = DB::table('unit_kerja')->get();
        return view('paramedik.edit', compact('data_paramedik','unit_kerja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $paramedik = paramedik::find($request->id);
        $paramedik->nama = $request->nama;
        $paramedik->gender = $request->gender;
        $paramedik->tmp_lahir = $request->tmp_lahir;
        $paramedik->tgl_lahir = $request->tgl_lahir;
        $paramedik->telepon = $request->telepon;
        $paramedik->alamat = $request->alamat;
        $paramedik->unit_kerja_id = $request->unit_kerja_id;
        $paramedik->save();
        return redirect('paramedik');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // kasih perintah hapus data
        $paramedik = paramedik::findOrFail($id);
        $paramedik->delete();
    
        return redirect()->back()->with('success', 'paramedik berhasil dihapus.');
    }
}

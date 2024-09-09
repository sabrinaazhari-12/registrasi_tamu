<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function registrasi()
    {
        return view ('registrasi');
    }

    public function regprocess(request $request){
    
        // Validate the input data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'asal' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|digits:12',
        ]);


        //insert into the database
        $data['tanggal'] = date('Y-m-d', strtotime($request->tanggal));
        DB::table('pengunjung')->insert([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        
        ]);

      
         return redirect('reg_simpan')->with('status', 'Data Pengunjung Berhasil Di Tambah!');
    }
    public function reg_simpan()
    {
    return view('reg_simpan');
    }
}
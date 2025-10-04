<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa; 

class MahasiswaController extends Controller
{

    public function getData() 
   
    {
        
        $mahasiswa = Mahasiswa::all(); 

        
        return view('mahasiswa.index', compact('mahasiswa'));
    }
    
   
    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required|email|unique:mahasiswa',
            'nim' => 'required|digits_between:10,15|unique:mahasiswa', 
            'jurusan' => 'required|min:5'
        ]);

        
        Mahasiswa::create($validated);

        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil Disimpan!'); 
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    //tampilan
    public function index() {
        $kendaraan = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraan'));
    }

    //untuk menambahkan
    public function create (){
        return view('kendaraan.create');
    }

    public function store(Request $request) {
        $request->validate([
            'no_pol' => 'required|string|max:10|unique:kendaraan,no_pol',
            'no_mesin' => 'required|string|max:20|unique:kendaraan,no_mesin',
            'jenis_mobil' => 'required|in:mpv,city,suv',
            'nama_mobil' => 'required|string|max:40',
            'merek' => 'required|in:honda,toyota,daihatsu',
            'kapasitas' => 'required|string|max:5',
            'tarif' => 'required|integer',
        ]);
        Kendaraan::create($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan created succesfully');
    }

    //untuk mengedit

    public function edit (Kendaraan $kendaraan ){
        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $no_pol) {
        $request->validate([
            'no_pol',
            'no_mesin',
            'jenis_mobil',
            'nama_mobil',
            'merek',
            'kapasitas',
            'tarif',
        ]);
        
        $kendaraan = Kendaraan::findOrFail($no_pol);
        $kendaraan->update($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan update succesfully');
    }
    
    // untuk menghapus
    public function destroy($no_pol) {
        $kendaraan = Kendaraan::findOrFail($no_pol);
        $kendaraan->delete();
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan deleted successfully.');
    }

}
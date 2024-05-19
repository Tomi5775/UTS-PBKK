<?php

namespace App\Http\Controllers;

use App\Models\Kwitansi;
use Illuminate\Http\Request;

class KwitansiController extends Controller
{
    //tampilan
    public function index() {
        $kwitansi = Kwitansi::all();
        return view('kwitansi.index', compact('kwitansi'));
    }

    //untuk menambahkan
    public function create (){
        return view('kwitansi.create');
    }

    public function store(Request $request) {
        $request->validate([
            'tgl_kwitansi' => 'required|date',
        ]);
        Kwitansi::create($request->all());
        return redirect()->route('kwitansi.index')->with('success', 'Kwitansi created succesfully');
    }

    //untuk mengedit

    public function edit (Kwitansi $kwitansi ){
        return view('kwitansi.edit', compact('kwitansi'));
    }

    public function update(Request $request, $id_kwitansi) {
        $request->validate([
            'tgl_kwitansi',
        ]);
        
        $kwitansi = Kwitansi::findOrFail($id_kwitansi);
        $kwitansi->update($request->all());
        return redirect()->route('kwitansi.index')->with('success', 'Kwitansi update succesfully');
    }
    
    // untuk menghapus
    public function destroy($id_kwitansi) {
        $kwitansi = Kwitansi::findOrFail($id_kwitansi);
        $kwitansi->delete();
        return redirect()->route('kwitansi.index')->with('success', 'Kwitansi deleted successfully.');
    }
}
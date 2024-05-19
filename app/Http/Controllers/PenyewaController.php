<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    //tampilan
    public function index() {
        $penyewa = Penyewa::all();
        return view('penyewa.index', compact('penyewa'));
    }

    //untuk menambahkan
    public function create (){
        return view('penyewa.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_penyewa' => 'required|string|max:100',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
        ]);
        Penyewa::create($request->all());
        return redirect()->route('penyewa.index')->with('success', 'penyewa created succesfully');
    }

    //untuk mengedit

    public function edit (Penyewa $penyewa ){
        return view('penyewa.edit', compact('penyewa'));
    }

    public function update(Request $request, $id_penyewa) {
        $request->validate([
            'nama_penyewa',
            'alamat',
            'no_hp',
        ]);
        
        $penyewa = Penyewa::findOrFail($id_penyewa);
        $penyewa->update($request->all());
        return redirect()->route('penyewa.index')->with('success', 'penyewa update succesfully');
    }
    
    // untuk menghapus
    public function destroy($id_penyewa) {
        $penyewa = Penyewa::findOrFail($id_penyewa);
        $penyewa->delete();
        return redirect()->route('penyewa.index')->with('success', 'penyewa deleted successfully.');
    }
}
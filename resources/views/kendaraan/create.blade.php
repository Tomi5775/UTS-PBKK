@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4 py-3 text-center text-white rounded" style="background: linear-gradient(to right, #000000, #434343);">Tambah Kendaraan</h1>
        <form action="{{ route('kendaraan.store') }}" method="POST" class="shadow p-4 rounded" style="background-color: #f8f9fa;">
            @csrf
            <div class="form-group">
                <label for="no_pol" class="font-weight-bold">No Pol</label>
                <input type="text" name="no_pol" class="form-control">
            </div>
            <div class="form-group">
                <label for="no_mesin" class="font-weight-bold">No Mesin</label>
                <input type="text" name="no_mesin" class="form-control">
            </div>
            <div class="form-group">
                <label for="jenis_mobil" class="font-weight-bold">Jenis Mobil</label>
                <select name="jenis_mobil" class="form-control">
                    <option value="mpv">MPV</option>
                    <option value="city">City</option>
                    <option value="suv">SUV</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama_mobil" class="font-weight-bold">Nama Mobil</label>
                <input type="text" name="nama_mobil" class="form-control">
            </div>
            <div class="form-group">
                <label for="merek" class="font-weight-bold">Merek</label>
                <select name="merek" class="form-control">
                    <option value="honda">Honda</option>
                    <option value="toyota">Toyota</option>
                    <option value="daihatsu">Daihatsu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kapasitas" class="font-weight-bold">Kapasitas</label>
                <input type="text" name="kapasitas" class="form-control">
            </div>
            <div class="form-group">
                <label for="tarif" class="font-weight-bold">Tarif</label>
                <input type="number" name="tarif" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-3">Simpan</button>
        </form>
    </div>
@endsection

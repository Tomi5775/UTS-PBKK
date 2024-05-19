@extends('layouts.app')

@section('content')
    <div class="container mt-5" style="background: linear-gradient(to right, #434343, #000000); padding: 20px; border-radius: 10px;">
        <h1 class="mb-4 py-3 text-center text-white rounded">Edit Kendaraan</h1>
        <form action="{{ route('kendaraan.update', $kendaraan->no_pol) }}" method="POST" class="shadow p-4 rounded bg-light" style="background: linear-gradient(to right, #ffffff, #f8f9fa);">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="no_pol" class="font-weight-bold text-dark">No Pol</label>
                <input type="text" name="no_pol" value="{{ $kendaraan->no_pol }}" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="no_mesin" class="font-weight-bold text-dark">No Mesin</label>
                <input type="text" name="no_mesin" value="{{ $kendaraan->no_mesin }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="jenis_mobil" class="font-weight-bold text-dark">Jenis Mobil</label>
                <select name="jenis_mobil" class="form-control">
                    <option value="mpv" {{ $kendaraan->jenis_mobil == 'mpv' ? 'selected' : '' }}>MPV</option>
                    <option value="city" {{ $kendaraan->jenis_mobil == 'city' ? 'selected' : '' }}>City</option>
                    <option value="suv" {{ $kendaraan->jenis_mobil == 'suv' ? 'selected' : '' }}>SUV</option>
                </select>
            </div>
            <!-- Tambahkan elemen input lainnya di sini -->
            <button type="submit" class="btn btn-success btn-block mt-3">
                <i class="fas fa-save"></i> Update
            </button>
        </form>
    </div>
@endsection

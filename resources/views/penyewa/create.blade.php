@extends('layouts.app')

@section('content')
    <div class="container mt-5" style="background: linear-gradient(to right, #000000, #434343); padding: 20px; border-radius: 10px;">
        <h1 class="mb-4 text-white">Tambah Penyewa</h1>
        <form action="{{ route('penyewa.store') }}" method="POST" class="p-4 rounded" style="background: linear-gradient(to right, #434343, #000000); color: white;">
            @csrf
            <div class="form-group">
                <label for="nama_penyewa" class="font-weight-bold">Nama Penyewa</label>
                <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" placeholder="Masukkan nama penyewa" required>
            </div>
            <div class="form-group">
                <label for="alamat" class="font-weight-bold">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
            </div>
            <div class="form-group">
                <label for="no_hp" class="font-weight-bold">No Hp</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection

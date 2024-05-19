@extends('layouts.app')

@section('content')
<div class="container mt-5" style="background: linear-gradient(to right, #000000, #434343); padding: 20px; border-radius: 10px;">
    <h1 class="mb-4 text-center text-white">Edit Penyewa</h1>
    <form action="{{ route('penyewa.update', $penyewa->id_penyewa) }}" method="POST" class="p-4 rounded" style="background: linear-gradient(to right, #ffffff, #f8f9fa);">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_penyewa" class="font-weight-bold">Nama Penyewa</label>
            <input type="text" id="nama_penyewa" name="nama_penyewa" value="{{ $penyewa->nama_penyewa }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat" class="font-weight-bold">Alamat</label>
            <input type="text" id="alamat" name="alamat" value="{{ $penyewa->alamat }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="no_hp" class="font-weight-bold">No Hp</label>
            <input type="text" id="no_hp" name="no_hp" value="{{ $penyewa->no_hp }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success btn-block">Update</button>
    </form>
</div>
@endsection

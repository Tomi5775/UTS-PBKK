@extends('layouts.app')

@section('content')
    <div class="container mt-5" style="background: linear-gradient(to right, #000000, #434343); padding: 20px; border-radius: 10px;">
        <h1 class="mb-4 text-center text-white">Edit Kwitansi</h1>
        <form action="{{ route('kwitansi.update', $kwitansi->id_kwitansi) }}" method="POST" class="shadow p-4 rounded" style="background: linear-gradient(to right, #434343, #000000); color: white;">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tgl_kwitansi" class="font-weight-bold">Tanggal Kwitansi</label>
                <input type="date" name="tgl_kwitansi" value="{{ $kwitansi->tgl_kwitansi }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success btn-block mt-3">
                <i class="fas fa-save"></i> Update
            </button>
        </form>
    </div>
@endsection

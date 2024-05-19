@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center text-white" style="background: linear-gradient(to right, #000000, #434343);">Tambah Kwitansi</h1>
        <form action="{{ route('kwitansi.store') }}" method="POST" class="shadow p-4 rounded" style="background-color: #f8f9fa;">
            @csrf
            <div class="form-group">
                <label for="tgl_kwitansi" class="font-weight-bold text-dark">Tanggal Kwitansi</label>
                <input type="date" name="tgl_kwitansi" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success btn-block mt-3">
                <i class="fas fa-plus-circle"></i> Simpan
            </button>
        </form>
    </div>
@endsection

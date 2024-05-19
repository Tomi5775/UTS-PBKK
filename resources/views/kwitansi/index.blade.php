@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center text-white" style="background: linear-gradient(to right, #000000, #434343);">Daftar Kwitansi</h1>
        <a href="{{ route('kwitansi.create') }}" class="btn btn-success mb-3">Tambah Kwitansi</a>
        <table class="table table-hover shadow-sm" style="background: linear-gradient(to right, #ffffff, #f8f9fa);">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tanggal Kwitansi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kwitansi as $k)
                    <tr>
                        <td>{{ $k->id_kwitansi }}</td>
                        <td>{{ $k->tgl_kwitansi }}</td>
                        <td>
                            <a href="{{ route('kwitansi.edit', $k->id_kwitansi) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('kwitansi.destroy', $k->id_kwitansi) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kwitansi ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 py-3 text-center text-white" style="background: linear-gradient(to right, #000000, #434343);">Daftar Kendaraan</h1>
        <a href="{{ route('kendaraan.create') }}" class="btn btn-success mb-3">Tambah Kendaraan</a>
        <table class="table table-hover shadow-sm" style="background: linear-gradient(to right, #ffffff, #f8f9fa);">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No Pol</th>
                    <th scope="col">No Mesin</th>
                    <th scope="col">Jenis Mobil</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Merek</th>
                    <th scope="col">Kapasitas</th>
                    <th scope="col">Tarif</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kendaraan as $k)
                    <tr>
                        <td>{{ $k->no_pol }}</td>
                        <td>{{ $k->no_mesin }}</td>
                        <td>{{ $k->jenis_mobil }}</td>
                        <td>{{ $k->nama_mobil }}</td>
                        <td>{{ $k->merek }}</td>
                        <td>{{ $k->kapasitas }}</td>
                        <td>{{ $k->tarif }}</td>
                        <td>
                            <a href="{{ route('kendaraan.edit', $k->no_pol) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('kendaraan.destroy', $k->no_pol) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kendaraan ini?');">
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
